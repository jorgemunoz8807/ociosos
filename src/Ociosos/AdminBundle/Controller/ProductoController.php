<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Producto;
use Ociosos\ComunBundle\Form\ProductoType;

class ProductoController extends Controller {

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('ComunBundle:Producto')->findAllOrderedByName();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', 1),
            20
        );

         return $this->render('AdminBundle:Producto:index.html.twig', array(
            'productos' => $productos,
            'pagination' => $pagination
        ));
    }

    public function deleteSelectedAction($id)
    {
        var_dump($id);
        $em = $this->getDoctrine()->getManager();
        $posts = explode(",", $id);

        foreach ($posts as $post_id) {
            $post = $em->getRepository("ComunBundle:Producto")->find($post_id);
//var_dump($post);
            if (!$post) {
                throw $this->createNotFoundException("No producto entity found.");
            }

            $em->remove($post);
        }

        $em->flush();

        return $this->redirect($this->generateUrl('admin_producto_index'));
    }



    public function buscar_productosAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('ComunBundle:Producto')->findByCategoria($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Producto:index.html.twig', array(
                'productos' => $productos,
                'pagination' => $pagination
            ));
    }


    public function buscar_productosxCentroAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('ComunBundle:Producto')->findByCentro($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Producto:index.html.twig', array(
                'productos' => $productos,
                'pagination' => $pagination
            ));
    }





    public function crearAction()
    {
        $peticion = $this->getRequest();

        $producto = new Producto();
        $formulario = $this->createForm(new ProductoType());

        $formulario->handleRequest($peticion);

        if($formulario->isValid())
        {
            $_newNombre = $formulario->getData()->getNombre();
            $_newCodigo = $formulario->getData()->getCodigo();
            $_newFechaExportacion = $formulario->getData()->getFechaExportacion();
            $_newEstado = $formulario->getData()->getEstado();
            $_newUM = $formulario->getData()->getUM();
            $_newCantidad = $formulario->getData()->getCantidad();
            $_newPrecioMN = $formulario->getData()->getPrecioMN();
            $_newPrecioMLC = $formulario->getData()->getPrecioMLC();
            $_newAlmacen = $formulario->getData()->getAlmacen();
            $_newCategoria = $formulario->getData()->getCategoria();
            $_newCentro = $formulario->getData()->getCentro();

            $producto->setNombre($_newNombre);
            $producto->setCodigo($_newCodigo);
            $producto->setFechaExportacion($_newFechaExportacion);
            $producto->setEstado($_newEstado);
            $producto->setUM($_newUM);
            $producto->setCantidad($_newCantidad);
            $producto->setPrecioMN($_newPrecioMN);
            $producto->setPrecioMLC($_newPrecioMLC);
            $producto->setAlmacen($_newAlmacen);
            $producto->setCategoria($_newCategoria);
            $producto->setCentro($_newCentro);

            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_producto_index'));
        }

        return $this->render('AdminBundle:Producto:crear.html.twig', array(
            'producto' => $producto,
            'form' => $formulario->createView()
        ));
    }

    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('ComunBundle:Producto')->find($id);

        if (!$producto) {
            throw $this->createNotFoundException('El producto no existe');
        }

        return $this->render('AdminBundle:Producto:detalles.html.twig', array(
            'producto' => $producto
        ));
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('ComunBundle:Producto')->find($id);
        if(!$producto)
        {
            throw $this->createNotFoundException('El producto no existe');
        }

        return $this->render('AdminBundle:Producto:eliminar.html.twig', array(
            'producto' => $producto
        ));
    }

    public function eliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('ComunBundle:Producto')->find($id);
        if(!$producto)
        {
            throw $this->createNotFoundException('El producto no existe');
        }
        try
        {
            $em->remove($producto);
            $em->flush();
        }
        catch(DBALException $ex)
        {
            throw $ex;
        }

        return $this->redirect($this->generateUrl('admin_producto_index'));
    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('ComunBundle:Producto')->find($id);
        if(!$producto)
        {
            throw $this->createNotFoundException('El producto no existe');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new ProductoType(), $producto);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_producto_index'));
        }

        return $this->render('AdminBundle:Producto:editar.html.twig', array(
            'producto' => $producto,
            'form' => $form->createView()
        ));
    }
}