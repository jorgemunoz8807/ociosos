<?php

namespace Ociosos\RodasXMLBundle\Controller;

use Ociosos\ComunBundle\Entity\Almacen;
use Ociosos\ComunBundle\Entity\Categoria;
use Ociosos\ComunBundle\Entity\Centro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Producto;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Ociosos\RodasXMLBundle\Form\DocumentType;
use Ociosos\RodasXMLBundle\Entity\Document;
use Ociosos\RodasXMLBundle\Entity\XmlFile;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\HttpFoundation\File\File;

class RodasXMLController extends Controller{
    private $generalExc = array();

    public function exportarToBDAction() {
        $path = 'uploads/documents/';
        $errors = array();

        // 1st Step: Obtain the request file. OK
        $fileObj = $this->getRequest()->files->get('fileBox');

        //2nd Step: Validate Xml file's extension
        $xmlFile = new XmlFile();
        $xmlFile->setXmlFile($fileObj);

        if($xmlFile->getXmlFile() != null)
        {
            $clientMimeType = $xmlFile->getXmlFile()->getClientMimeType();

            if($clientMimeType !== 'text/xml')
            {
                $validator = $this->get('validator');
                $errors = $validator->validate($xmlFile);
                if(count($errors) == 0 && ($clientMimeType !== 'text/xml' || $clientMimeType !== 'application/xml'))
                {
                    $violation = new ConstraintViolation(
                        'El tipo de fichero '. $clientMimeType .' sigue siendo inválido. Los tipos de ficheros permitidos son text/xml, application/xml.',
                        'El tipo de fichero '. $clientMimeType .' sigue siendo inválido. Los tipos de ficheros permitidos son text/xml, application/xml.',
                        array(),
                        $xmlFile,
                        "xmlFile",
                        null
                    );
                    $errors->add($violation);
                }
            }
        }
        else
        {
            $validator = $this->get('validator');
            $errors = $validator->validate($xmlFile);
        }
        if(count($errors) > 0)
        {
            return $this->render('RodasXMLBundle:RodasXML:errors.html.twig', array(
                'errors' => $errors
            ));
        }
        else
        {
            // 3rd Step: Copy XML file in a defined location. OK
            $this->GestionarXMLAction("create", $fileObj, $path);

            // 4th Step: Generate and to obtain DOM object. OK
            $filename = $fileObj->getClientOriginalName();
            $dom = $this->GetDOMAction($filename, $path);

            // 5ts Step: Validate well formed Xml document OK
            if($this->ValidateXMLAction($dom))
            {
                //6ts Step: Validate existing Entities OK
                if($this->ValidateAllEntites($dom))
                {
                    // 7th Step: Validate existing Categories OK
                    if($this->ValidateAllCategories($dom))
                    {
                        $message = 'El formato del fichero Xml es correcto.';
                        $iconMessage = 'check';

                        $initials = $dom->documentElement->getElementsByTagName('row')->item(0)->getAttributeNode('SIGLAS_Entidad')->value;
                        $nbProducts = $this->CountProductsAction($dom);
                        return $this->render('RodasXMLBundle:RodasXML:prodAdded.html.twig', array(
                            'message' => $message,
                            'iconMessage' => $iconMessage,
                            'nbProducts' => $nbProducts,
                            'filename' => $filename,
                            'pathFile' => $path,
                            'initials' => $initials,
                            'route' => $this->generateUrl("products_added"),
                            'verify_route' => $this->generateUrl('rodas_xml_verify'),
                            'delete_route' => $this->generateUrl('rodas_xml_delete')
                        ));
                    }
                    else
                    {
                        // if ValidateXMLAction isn't true, then we send the exception: It was a problem with format's document.
                        // And we redirect the page with the exception
                        return $this->render('RodasXMLBundle:RodasXML:informations.html.twig', array(
                            "informations" => $this->generalExc['message'],
                            'filename' => $filename,
                            'pathFile' => $path
                        ));
                    }
                }
                else
                {
                    return $this->render('RodasXMLBundle:RodasXML:errors.html.twig', array(
                        "errors" => $this->generalExc['message']
                    ));
                }
            }
            else
            {
                return $this->render('RodasXMLBundle:RodasXML:errors.html.twig', array(
                    "errors" => $this->generalExc['message']
                ));
            }
        }
    }

    private function GestionarXMLAction($action, $fileObj, $path) 
    {
        switch ($action) {
            case "create":                
                $fileObj->move($path, $fileObj->getClientOriginalName());
                break;
            
            case "delete":
                unlink($path. '/'. $fileObj->getClientOriginalName());
                break;

            default:
                break;
        }
        return;
    }
    
    private function GetDOMAction($filename, $path)
    {
        $dom = new \DOMDocument();
        $dom->load($path. '/' .$filename);
        return $dom;
    }

    private function ValidateXMLAction($dom)
    {
        try {
            $rows = $dom->documentElement->getElementsByTagName('row');
            if($rows->length == 0)
            {
                $exceptions[0] = array(
                    'message' => '* El documento Xml no presenta el formato requerido.
                                    Asegúrese de haber cargado uno generado por el módulo de Inventario de Rodas XXI.'
                );
                $this->ShowExceptionsAction($exceptions);
                return false;
            }
            else
            {
                // I'll check each one of rows width its attributes on entire XML Document.
                $_currentRow = 0;

                /* Rotacion attributes */
                $_rotExceptions = array();

                /* CODIGO_ALMACEN attributes */
                $_codAlmExceptions = array();

                /* DESCRIPCION_ALMACEN attributes */
                $_descAlmExceptions = array();

                /* CODIGO_PRODUCTO attributes */
                $_codProdExceptions = array();

                /* DESCRIP_PRODUCTO attributes */
                $_descProdExceptions = array();

                /* UM attributes */
                $_umExceptions = array();

                /* PRECIO_UNITARIO_MN attributes */
                $_precioMNExceptions = array();

                /* PRECIO_UNITARIO_MLC attributes */
                $_precioMLCExceptions = array();

                /* CANTIDAD attributes */
                $_cantExceptions = array();

                /* CODIGO_CATEGORIA attributes */
                $_codCatExceptions = array();

                /* DESCRIPCION_CATEGORIA attributes */
                $_descCatExceptions = array();

                /* Fecha_de_Exportacion attributes */
                $_fechaExceptions = array();

                /* SIGLAS_Entidad attributes */
                $_siglasExceptions = array();

                $_rotNodeNm = array();

                foreach($rows as $row)
                {
                    $_rotNodeNm = $row->attributes->item(0)->nodeName;
                    $_codAlmNodeNm = $row->attributes->item(1)->nodeName;
                    $_descAlmNodeNm = $row->attributes->item(2)->nodeName;
                    $_codProdNodeNm = $row->attributes->item(3)->nodeName;
                    $_descProdNodeNm = $row->attributes->item(4)->nodeName;
                    $_umNodeNm = $row->attributes->item(5)->nodeName;
                    $_preMNNodeNm = $row->attributes->item(6)->nodeName;
                    $_preMLCodeNm = $row->attributes->item(7)->nodeName;
                    $_cantNodeNm = $row->attributes->item(8)->nodeName;
                    $_codCatNodeNm = $row->attributes->item(9)->nodeName;
                    $_desCatNodeNm = $row->attributes->item(10)->nodeName;
                    $_dateExpNodeNm = $row->attributes->item(11)->nodeName;
                    $_sigEntNodeNm = $row->attributes->item(12)->nodeName;

                    /* Rotacion Exceptions */
                    $_rotExceptions = $this->GetExceptionsAction("Rotacion", $_rotNodeNm, $_rotExceptions);

                    /* CODIGO_ALMACEN Exceptions */
                    $_codAlmExceptions = $this->GetExceptionsAction("CODIGO_ALMACEN", $_codAlmNodeNm, $_codAlmExceptions);

                    /* DESCRIPCION_ALMACEN Exceptions */
                    $_descAlmExceptions = $this->GetExceptionsAction("DESCRIPCION_ALMACEN", $_descAlmNodeNm, $_descAlmExceptions);

                    /* CODIGO_PRODUCTO Exceptions */
                    $_codProdExceptions = $this->GetExceptionsAction("CODIGO_PRODUCTO", $_codProdNodeNm, $_codProdExceptions);

                    /* DESCRIP_PRODUCTO Exceptions */
                    $_descProdExceptions = $this->GetExceptionsAction("DESCRIP_PRODUCTO", $_descProdNodeNm, $_descProdExceptions);

                    /* UM Exceptions */
                    $_umExceptions = $this->GetExceptionsAction("UM", $_umNodeNm, $_umExceptions);

                    /* PRECIO_UNITARIO_MN Exceptions */
                    $_precioMNExceptions = $this->GetExceptionsAction("PRECIO_UNITARIO_MN", $_preMNNodeNm, $_precioMNExceptions);

                    /* PRECIO_UNITARIO_MLC Exceptions */
                    $_precioMLCExceptions = $this->GetExceptionsAction("PRECIO_UNITARIO_MLC", $_preMLCodeNm, $_precioMLCExceptions);

                    /* CANTIDAD Exceptions */
                    $_cantExceptions = $this->GetExceptionsAction("CANTIDAD", $_cantNodeNm, $_cantExceptions);

                    /* CODIGO_CATEGORIA Exceptions */
                    $_codCatExceptions = $this->GetExceptionsAction("CODIGO_CATEGORIA", $_codCatNodeNm, $_codCatExceptions);

                    /* DESCRIPCION_CATEGORIA Exceptions */
                    $_descCatExceptions = $this->GetExceptionsAction("DESCRIPCION_CATEGORIA", $_desCatNodeNm, $_descCatExceptions);

                    /* Fecha_de_Exportacion Exceptions */
                    $_fechaExceptions = $this->GetExceptionsAction("Fecha_de_Exportacion", $_dateExpNodeNm, $_fechaExceptions);

                    /* SIGLAS_Entidad Exceptions */
                    $_siglasExceptions = $this->GetExceptionsAction("SIGLAS_Entidad", $_sigEntNodeNm, $_siglasExceptions);
                }
                if(count($_rotExceptions) == 0 && count($_codAlmExceptions) == 0 && count($_descAlmExceptions) == 0 &&
                    count($_codProdExceptions) == 0 && count($_descProdExceptions) == 0 && count($_umExceptions) == 0 &&
                    count($_precioMNExceptions) == 0 && count($_precioMLCExceptions) == 0 && count($_cantExceptions) == 0 &&
                    count($_codCatExceptions) == 0 && count($_descCatExceptions) == 0 && count($_fechaExceptions) == 0 &&
                    count($_siglasExceptions) == 0)
                {
                    return true;
                }
                else
                {
                    $this->ShowExceptionsAction($_rotExceptions, $_rotNodeNm);
                    $this->ShowExceptionsAction($_codAlmExceptions, $_codAlmNodeNm);
                    $this->ShowExceptionsAction($_descAlmExceptions, $_descAlmNodeNm);
                    $this->ShowExceptionsAction($_codProdExceptions, $_codProdNodeNm);
                    $this->ShowExceptionsAction($_descProdExceptions, $_descProdNodeNm);
                    $this->ShowExceptionsAction($_umExceptions, $_umNodeNm);
                    $this->ShowExceptionsAction($_precioMNExceptions, $_preMNNodeNm);
                    $this->ShowExceptionsAction($_precioMLCExceptions, $_preMLCodeNm);
                    $this->ShowExceptionsAction($_cantExceptions, $_cantNodeNm);
                    $this->ShowExceptionsAction($_codCatExceptions, $_codCatNodeNm);
                    $this->ShowExceptionsAction($_descCatExceptions, $_desCatNodeNm);
                    $this->ShowExceptionsAction($_fechaExceptions, $_dateExpNodeNm);
                    $this->ShowExceptionsAction($_siglasExceptions, $_sigEntNodeNm);
                    return false;
                }
            }
        }
        catch (Exception $exc) {
            $_exception = $exc->getMessage();
            return false;
        }
    }

    private function ValidateAllEntites($dom)
    {
        $exceptions = array();
        foreach ($dom->documentElement->getElementsByTagName('row') as $zRow)
        {
            $_centroSiglas = $zRow->getAttributeNode('SIGLAS_Entidad')->value;
            try
            {
                $_centro = $this->GetCentroByAction($_centroSiglas);
            }
            catch(NotFoundHttpException $ex)
            {
                $exceptions[0] = array(
                    'message' => '* Existe un error en el documento Xml:
                          Uno o varios productos contienen el centro con nombre '. $_centroSiglas .'.
                          El mismo no se encuentra autorizado por el Administrador. Por favor contáctelo.'
                );
            }
        }
        if(count($exceptions) > 0)
        {
            $this->ShowExceptionsAction($exceptions);
            return false;
        }
        else
        {
            return true;
        }
    }

    private function ValidateAllCategories($dom)
    {
        $exceptions = array();
        foreach ($dom->documentElement->getElementsByTagName('row') as $zRow)
        {
            $categoryName = $zRow->getAttributeNode('DESCRIPCION_CATEGORIA')->value;
            $productCode = $zRow->getAttributeNode('CODIGO_PRODUCTO')->value;
            $productDescription = $zRow->getAttributeNode('DESCRIP_PRODUCTO')->value;
            try
            {
                $category = $this->GetCategoriaByAction($categoryName);
            }
            catch(NotFoundHttpException $ex)
            {
                $exceptions[] = array(
                    'message' => '- Categoría '. $categoryName .'
                                    del producto '. $productCode .' - '. $productDescription .'.'
                );
            }
        }
        if(count($exceptions) > 0)
        {
            $this->ShowExceptionsAction($exceptions);
            return false;
        }
        else
        {
            return true;
        }
    }

    /* This function returns an exceptions array by each one node XML name. OK*/
    private function GetExceptionsAction($defaultNodeNm, $nodeNm, $exceptions)
    {
        if($nodeNm != $defaultNodeNm)
        {
            $exceptions[] = array(
                'message' => '* El nombre debería ser '. $defaultNodeNm .', no '. $nodeNm .'.'
            );
        }

        return $exceptions;
    }

    /* This function add all exceptions to global generalExc */
    private function ShowExceptionsAction($exceptions, $nodeNm = null)
    {
        if(count($exceptions) != 0)
        {
            foreach($exceptions as $item)
            {
                $this->generalExc['message'][] = $item;
            }
        }
    }

    /* This function is necessary to animate the total product's number on the View prodAdded.html.twig */
    private function CountProductsAction($dom)
    {
        $nbProducts = 0;
        $rows = $dom->documentElement->getElementsByTagName('row');
        $nbProducts = $rows->length;
//        foreach($dom->documentElement->getElementsByTagName('row') as $zRow)
//        {
//            $nbProducts++;
//        }
        return $nbProducts;
    }

    /* Ajax Request */
    /* This function verifies if exist any product in Database*/
    public function VerifiyProductsInDatabaseAction()
    {
        $request = $this->getRequest();
        $initials= $request->request->get('initials');
        if(!empty($initials))
        {
            $em = $this->getDoctrine()->getManager();
            $productsCount = $em->getRepository('ComunBundle:Producto')->FindByEntityInitials($initials);
            $nb = (int) $productsCount[0][1];
            if($nb > 0)
            {
                return new Response($nb);
            }
            else
            {
                return new Response(0);
            }
        }
        else
        {
            throw new \Exception('Mal funcionamiento. Las iniciales de la empresa no fueron recibidas');
        }

    }

    /* Ajax Request */
    /* Deletes all products by passing it initials' entity */
    public function DeleteProductsByEntityAction()
    {
        $request = $this->getRequest();
        $initials= $request->request->get('initials');
        if(!empty($initials))
        {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ComunBundle:Centro')->GetEntityByInitials($initials);
            $delete = $em->getRepository('ComunBundle:Producto')->DeleteByEntity($entity);
            return new Response($delete);
        }
        else
        {
            throw new \Exception('Mal funcionamiento. Las iniciales de la empresa no fueron recibidas');
        }
    }

    /* Ajax Request */
    public function AddProductByPosAction()
    {

        $request = $this->getRequest();
        $position = $request->request->get('position');
        $filename= $request->request->get('filename');
        $path= $request->request->get('pathFile');

        $dom = $this->GetDOMAction($filename, $path);

        $producto = new Producto();

        $producto->setNombre($dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('DESCRIP_PRODUCTO')->value);
        $producto->setCodigo($dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('CODIGO_PRODUCTO')->value);

        $_fechaTemp = $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('Fecha_de_Exportacion')->value;
        $_timezone = new \DateTimeZone('UTC');
        $_dateTime = new \DateTime($_fechaTemp, $_timezone);
        $_fechaExportacion = $_dateTime->format('Y-m-d H:i:s');
        $producto->setFechaExportacion(new \DateTime($_fechaExportacion));

        $producto->setEstado($dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('Rotacion')->value);
        $producto->setUM($dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('UM')->value);
        $producto->setCantidad((double) $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('CANTIDAD')->value);
        $producto->setPrecioMN((double) $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('PRECIO_UNITARIO_MN')->value);
        $producto->setPrecioMLC((double) $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('PRECIO_UNITARIO_MLC')->value);

        $_almacenCod = $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('CODIGO_ALMACEN')->value;
        $_almacenDesc = $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('DESCRIPCION_ALMACEN')->value;
        $_almacen = $this->GetAlmacenByAction($_almacenCod, $_almacenDesc);
        $producto->setAlmacen($_almacen);

        $_categoriaName = $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('DESCRIPCION_CATEGORIA')->value;
        $_categoria = $this->GetCategoriaByAction($_categoriaName);
        $producto->setCategoria($_categoria);

        $_centroSiglas = $dom->documentElement->getElementsByTagName('row')->item($position)->getAttributeNode('SIGLAS_Entidad')->value;
        try
        {
            $_centro = $this->GetCentroByAction($_centroSiglas);
            $producto->setCentro($_centro);
        }
        catch(NotFoundHttpException $ex)
        {
            //throw $ex->message;
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();

        $response = new Response();

        return $response->setContent("<p id='details-p'>C&oacute;digo: ". $producto->getCodigo() ." - Nombre del Producto:  ". $producto->getNombre() ."</p>");
    }

    private function AddProductsAction($dom)
    {
        foreach ($dom->documentElement->getElementsByTagName('row') as $zRow) {
            // This is the place for add products
            $producto = new Producto();

            $producto->setNombre($zRow->getAttributeNode('DESCRIP_PRODUCTO')->value);
            $producto->setCodigo($zRow->getAttributeNode('CODIGO_PRODUCTO')->value);

            $_fechaTemp = $zRow->getAttributeNode('Fecha_de_Exportacion')->value;
            $_timezone = new \DateTimeZone('UTC');
            $_dateTime = new \DateTime($_fechaTemp, $_timezone);
            $_fechaExportacion = $_dateTime->format('Y-m-d H:i:s');
            $producto->setFechaExportacion(new \DateTime($_fechaExportacion));

            $producto->setEstado($zRow->getAttributeNode('Rotacion')->value);
            $producto->setUM($zRow->getAttributeNode('UM')->value);
            $producto->setCantidad((double) $zRow->getAttributeNode('CANTIDAD')->value);
            $producto->setPrecioMN((double) $zRow->getAttributeNode('PRECIO_UNITARIO_MN')->value);
            $producto->setPrecioMLC((double) $zRow->getAttributeNode('PRECIO_UNITARIO_MLC')->value);

            $_almacenCod = $zRow->getAttributeNode('CODIGO_ALMACEN')->value;
            $_almacenDesc = $zRow->getAttributeNode('DESCRIPCION_ALMACEN')->value;
            $_almacen = $this->GetAlmacenByAction($_almacenCod, $_almacenDesc);
            $producto->setAlmacen($_almacen);

            $_categoriaName = $zRow->getAttributeNode('DESCRIPCION_CATEGORIA')->value;
            $_categoria = $this->GetCategoriaByAction($_categoriaName);
            $producto->setCategoria($_categoria);

            $_centroSiglas = $zRow->getAttributeNode('SIGLAS_Entidad')->value;
            try
            {
                $_centro = $this->GetCentroByAction($_centroSiglas);
                $producto->setCentro($_centro);
            }
            catch(NotFoundHttpException $ex)
            {
                $this->generalExc['message'][] = $ex->getMessage();
                return false;
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();
        }

        // we going to return the values inerted
        return true;
    }

    /* This method returns the stok's ID passed by params. If there isn't, then it will be added */
    private function GetAlmacenByAction($almacenCod, $almacenDesc)
    {
        $em = $this->getDoctrine()->getManager();
        $_almacen = $em->getRepository('ComunBundle:Almacen')->GetAlmacenByCode($almacenCod);

        if(empty($_almacen))
        {
            $_almacen = false;
        }

        if(!$_almacen)
        {
            $_newAlmacen = new Almacen();
            $_newAlmacen->setNombre($almacenDesc);
            $_newAlmacen->setCodAlmacen($almacenCod);

            $em->persist($_newAlmacen);
            $em->flush();

            $_recAlm = $this->GetAlmacenByAction($almacenCod, $almacenDesc);
            return $_recAlm;
        }
        else
        {
            return $_almacen;
        }
    }

    /* This method returns the category's ID passed by params. If there isn't, then it will be added */
    private function GetCategoriaByAction($categoriaName)
    {
        $em = $this->getDoctrine()->getManager();
        $_categoria = $em->getRepository('ComunBundle:Categoria')->GetCategoriaByName($categoriaName);

        if(empty($_categoria))
        {
            $_categoria = false;
        }

        if(!$_categoria)
        {
            // Here we should put the message to the user: 
            // "The category doesn't exist. Do you want to propose to Administrator?"
            // So we should quit this code below

//            $newDom = new \DOMDocument('1.0');
//            $newDom->formatOutput = true;
//            $categories = $newDom->createElement('categories');
//            $node = $newDom->appendChild($categories);
//            $category = $newDom->createElement('category');
//            $subNode = $node->appendChild($category);
//            $text = $newDom->createTextNode($categoriaName);
//            $subNode->appendChild($text);
//            $newDom->save('uploads/documents/notFoundCategories.xml');


//            $_newCat = new Categoria();
//            $_newCat->setNombre($categoriaName);
//
//            $em->persist($_newCat);
//            $em->flush();
//
//            $_recCat = $this->GetCategoriaByAction($categoriaName);
//            return $_recCat;
//            return false;
            throw $this->createNotFoundException(
                'No se ha encontrado la Categor&iacute;a '. $categoriaName .'. El Administrador debe
                aprobar esta nueva Categor&iacute;a previo a su uso. Consulte con el Administrador.'
            );
        }
        else
        {
            return $_categoria;
        }
    }

    private function GetCentroByAction($centroSiglas)
    {
        $em = $this->getDoctrine()->getManager();
        $_centro = $em->getRepository('ComunBundle:Centro')->GetCategoriaBySiglas($centroSiglas);

        if(empty($_centro))
        {
            $_centro = false;
        }

        if(!$_centro)
        {
            throw $this->createNotFoundException(
                'No se ha encontrado Centro con las siglas '. $centroSiglas .'. El Administrador debe
                aprobar este nuevo Centro previo a su uso. Consulte con el Administrador.'
            );
        }
        else
        {
            return $_centro;
        }
    }

    /* This function sends an email to Administrator proposing new Categories */
    public function ProposeCategoriesAction()
    {
        $authenticated = $this->get('security.context')->getToken()->getUser();
        $name = $authenticated->getNombre();
        $lastname = $authenticated->getApellidos();
        $userName = $authenticated->getUsername();
        $userEmail = $authenticated->getEmail();
        $entity = $authenticated->getCentro();
        $entityName = $entity->getNombre();
        $entityInitials = $entity->getSiglas();

        $request = $this->getRequest();
        $informationText = $request->request->get('informationText');
        $infomations = preg_split("/~/", $informationText);
        $filename= $request->request->get('filename');
        $path= $request->request->get('pathFile');
        $em = $this->getDoctrine()->getManager();
        $adminEmail = $em->getRepository('UsuarioBundle:Usuario')->FindEmailFromAdmin();
        $message = \Swift_Message::newInstance()
            ->setSubject('Ociosos: Propuesta de Categorizaciones')
            ->setFrom($authenticated->getEmail())
            ->setTo($adminEmail)
            ->setBody($this->renderView('RodasXMLBundle:Email:message.html.twig', array(
                'name' => $name,
                'lastname' => $lastname,
                'username' => $userName,
                'email' => $userEmail,
                'entityName' => $entityName,
                'entityInitials' => $entityInitials,
                'informations' => $infomations
            )), 'text/html')
            ->attach(\Swift_Attachment::fromPath($path.'/'.$filename));
        $this->get('mailer')->send($message);

        $response = new Response();

        return $response->setContent("Su solicitud fue enviada. Por favor espere a que el administrador le responda.");
    }
}