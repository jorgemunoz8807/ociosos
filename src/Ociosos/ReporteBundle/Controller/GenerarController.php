<?php


namespace Ociosos\ReporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenerarController extends Controller {

    public function indexAction()
    {
        $req = $this->getRequest();

        $option = $req->request->get("report");

        switch($option)
        {
            case "entity":
                return $this->render('ReporteBundle:PdfReport:entity.html.twig', array(
                    "PdfReport" => $this->PDFEntityAction()
                ));
            break;

            case "state":
                return $this->render('ReporteBundle:PdfReport:state.html.twig', array(
                    "PdfReport" => $this->PDFStateAction()
                ));
            break;

            case "category":
                return $this->render('ReporteBundle:PdfReport:category.html.twig', array(
                    "PdfReport" => $this->PDFCategoryAction()
                ));
            break;

            default:
                return $this->render('ReporteBundle:PdfReport:entity.html.twig', array(
                    "PdfReport" => "There isn't any report"
                ));
            break;
        }
    }

    public function PDFEntityAction()
    {
        $html='';
        $html .= $this->openBodyAction("Reporte por Organizaciones");

        $em = $this->getDoctrine()->getManager();
        $organizations = $em->getRepository('ComunBundle:Organizacion')->findAll();
        foreach($organizations as $organization)
        {
            $html .= $this->openTableOrgAction("Organizaci&oacute;n", $organization->getNombre());
            $html .= '<tbody>';

            $entities = $em->getRepository('ComunBundle:Organizacion')->getResumeByOrg($organization);

            $totProdSum = 0;
            $cupSum = 0;
            $cucSum = 0;
            $monSum = 0;

            foreach($entities as $entity)
            {
                $html .= '<tr>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["siglas"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["TotalProd"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMN"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMLC"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMN"] + $entity["ImportMLC"];
                $html .= '</td>';
                $html .= '</tr>';

                $totProdSum += (int) ($entity["siglas"] == NULL ? 0 : $entity["TotalProd"]);
                $cupSum += (double) ($entity["siglas"] == NULL ? 0 : $entity["ImportMN"]);
                $cucSum += (double) ($entity["siglas"] == NULL ? 0 : $entity["ImportMLC"]);
                $monSum += (double) ($cupSum + $cucSum);
            }

            $html .= '</tbody>';
            $html .= $this->closeTableAction($organization->getNombre(), $totProdSum, $cupSum, $cucSum, $monSum);
        }


        $html .= $this->closeBodyAction();
// var_dump($html);die;
       // return $this->renderView('ReporteBundle:Default:ReportOrganizaciones.html.twig');



        require_once('includes/dompdf_config.inc.php');
        $dompdf = new \DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("Reporte_Organizaciones.pdf");
//var_dump($html);die;
        return $html;
    }

    public function PDFStateAction()
    {
        $html='';
        $html .= $this->openBodyAction("Reporte por Provincias");

        $em = $this->getDoctrine()->getManager();
        $states = $em->getRepository('ComunBundle:Provincia')->findAll();
        foreach($states as $state)
        {
            $html .= $this->openTableAction("Provincia",  $state->getNombre());
            $html .= '<tbody>';

            $entities = $em->getRepository('ComunBundle:Provincia')->getResumeByState($state);

            $totProdSum = 0;
            $cupSum = 0;
            $cucSum = 0;
            $monSum = 0;

            foreach($entities as $entity)
            {
                $html .= '<tr>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["siglas"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["TotalProd"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMN"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMLC"];
                $html .= '</td>';
                $html .= '<td>';
                $html .= $entity["siglas"] == NULL ? "-" : $entity["ImportMN"] + $entity["ImportMLC"];
                $html .= '</td>';
                $html .= '</tr>';

                $totProdSum += (int) ($entity["siglas"] == NULL ? 0 : $entity["TotalProd"]);
                $cupSum += (double) ($entity["siglas"] == NULL ? 0 : $entity["ImportMN"]);
                $cucSum += (double) ($entity["siglas"] == NULL ? 0 : $entity["ImportMLC"]);
                $monSum += (double) ($cupSum + $cucSum);
            }

            $html .= '</tbody>';
            $html .= $this->closeTableAction($state->getNombre(), $totProdSum, $cupSum, $cucSum, $monSum);
        }

        $html .= $this->closeBodyAction();

        require_once('includes/dompdf_config.inc.php');
        $dompdf = new \DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("Reporte_Provincias.pdf");

        return $html;
    }

    public function PDFCategoryAction()
    {
        $html='';
        $html .= $this->openBodyAction("Reporte por Categor&iacute;a");
        $html .= $this->openTableCatAction(NULL, NULL);

        $totProdSum = 0;
        $cupSum = 0;
        $cucSum = 0;
        $monSum = 0;

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('ComunBundle:Categoria')->getResumeByCategory();

        $html .= '<tbody>';
        $i = 0;
        foreach($categories as $category)
        {
            $html .= ($i++)%2 == 0 ? '<tr>' : '<tr style="background-color: #F2F2F2;">';
            $html .= '<td>';
            $html .= $category["nombre"] == NULL ? "-" : utf8_decode($category["nombre"]);
            $html .= '</td>';
            $html .= '<td>';
            $html .= $category["nombre"] == NULL ? "-" : $category["TotalProd"];
            $html .= '</td>';
            $html .= '<td>';
            $html .= $category["nombre"] == NULL ? "-" : $category["ImportMN"];
            $html .= '</td>';
            $html .= '<td>';
            $html .= $category["nombre"] == NULL ? "-" : $category["ImportMLC"];
            $html .= '</td>';
            $html .= '<td>';
            $html .= $category["nombre"] == NULL ? "-" : $category["ImportMN"] + $category["ImportMLC"];
            $html .= '</td>';
            $html .= '</tr>';

            $totProdSum += (int) ($category["nombre"] == NULL ? 0 : $category["TotalProd"]);
            $cupSum += (double) ($category["nombre"] == NULL ? 0 : $category["ImportMN"]);
            $cucSum += (double) ($category["nombre"] == NULL ? 0 : $category["ImportMLC"]);
            $monSum += (double) ($cupSum + $cucSum);
        }

//        for($j = 12; $j < 30; $j++)
//        {
//            $html .= $j%2 == 0 ? '<tr>' : '<tr style="background-color: #F2F2F2;">';
//            $html .= '<td>';
//            $html .= 'Name';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '</tr>';
//        }
//        $html .= '</tbody>';
//        $html .= $this->closeTableAction(NULL, $totProdSum, $cupSum, $cucSum, $monSum);


//        $html .= '<div style="page-break-before: always;"></div>';
//
//        $html .= $this->openTableAction(NULL, NULL);
//        $html .= '<tbody>';
//        for($j = 12; $j < 30; $j++)
//        {
//            $html .= $j%2 == 0 ? '<tr>' : '<tr style="background-color: #F2F2F2;">';
//            $html .= '<td>';
//            $html .= 'Name';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '<td>';
//            $html .= '100';
//            $html .= '</td>';
//            $html .= '</tr>';
//        }

        $html .= '</tbody>';
        $html .= $this->closeTableAction(NULL, $totProdSum, $cupSum, $cucSum, $monSum);
        $html .= $this->closeBodyAction();

        require_once('includes/dompdf_config.inc.php');
        $dompdf = new \DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("Reporte_Categorias.pdf");

        return $html;
    }

    private function openBodyAction($reportName)
    {
        $html = '';
        $html .= '<!DOCTYPE html>';
        $html .= '<html>';
        $html .= '<head>';
        $html .= '<style type="text/css">';
        $html .= '*{ margin: 0; padding: 0; }';
        $html .= '#imgHead{ margin: auto; width: 80px; text-align: center; }';
        $html .= '#sysTitle{ margin: auto; width: 565px; font-size: 18pt; }';
        $html .= '#rptTitle{ margin: auto; width: 400px; font-size: 26pt; }';
        $html .= '#tblHeader{ color: #0D0D0D; font-size: 13pt; width: 750px; margin: auto; padding-left: 30px; }';
        $html .= '#tblArea{ margin: auto; width: 750px; }';
        $html .= 'table{ width: 750px; border: 1px solid #808080; }';
        $html .= 'th, td{ color: #404040; font-size: 11pt; text-align: center; }';
        $html .= 'th{ background-color: #E5E5E5; font-weight: normal; }';
        $html .= '/*tr:nth-child(even){ background-color: #F2F2F2; }*/';
        $html .= 'tfoot tr td{ background-color: #E5E5E5; color: #0D0D0D; font-size: 13pt; }';
        $html .= '</style>';
        $html .= '</head>';
        $html .= '<body>';
//        $dir = "{{ asset('bundles/reporte/images/citma.jpg') }}";
//        $dir = "includes/images/citma.jpg";
        $dir = "http://localhost/ociosos/web/bundles/reporte/images/logo-citma.png";
//        $dir = "../../public/images/citma.jpg";
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div  id="imgHead">';
        $html .='<img src="'. $dir .'" alt="Citma" />';
        $html .= '</div>';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div id="sysTitle">';
        $html .= '<p>';
        $html .= 'Sistema para el control de inventario de productos ociosos';
        $html .= '</p>';
        $html .= '</div>';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div id="rptTitle">';
        $html .= '<p style="text-align: center">';
        $html .= '<h >';
        $html .= Date('d/m/Y');
        $html .= '</h>';
        $html .= '<br>';
        $html .= $reportName;
        $html .= '</p>';
        $html .= '</div>';

        return $html;
    }

    private function closeBodyAction()
    {
        $html = '';
        $html.='</body>';
        $html.='</html>';

        return $html;
    }

    private function openTableAction($headerName, $name)
    {
        $html = '';

        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div id="tblHeader">';
        $html .= '<p>';
        $html .=  $headerName == NULL ? "" : $headerName  .': '. utf8_decode($name);
        $html .= '</p>';
        $html .= '</div>';
        $html .= '<div id="tblArea">';
        $html .= '<table cellpadding="0" cellspacing="0">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>';
        $html .= 'Siglas de la Entidad';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Total Productos';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUP)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUC)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Moneda Total';
        $html .= '</th>';
        $html .= '</tr>';
        $html .= '</thead>';

        return $html;
    }
    private function openTableCatAction($headerName, $name)
    {
        $html = '';

        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div id="tblHeader">';
        $html .= '<p>';
        $html .=  $headerName == NULL ? "" : $headerName  .': '. utf8_decode($name);
        $html .= '</p>';
        $html .= '</div>';
        $html .= '<div id="tblArea">';
        $html .= '<table cellpadding="0" cellspacing="0">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>';
        $html .= 'Categor&iacute;as';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Total Productos';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUP)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUC)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Moneda Total';
        $html .= '</th>';
        $html .= '</tr>';
        $html .= '</thead>';


        return $html;
    }
    private function openTableOrgAction($headerName, $name)
    {
        $html = '';

        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<br />';
        $html .= '<div id="tblHeader">';
        $html .= '<p>';
        $html .=  $headerName == NULL ? "" : $headerName  .': '. utf8_decode($name);
        $html .= '</p>';
        $html .= '</div>';
        $html .= '<div id="tblArea">';
        $html .= '<table cellpadding="0" cellspacing="0">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>';
        $html .= 'Siglas de la Entidad';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Total Productos';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUP)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Importe (CUC)';
        $html .= '</th>';
        $html .= '<th>';
        $html .= 'Moneda Total';
        $html .= '</th>';
        $html .= '</tr>';
        $html .= '</thead>';

        return $html;
    }

    private function closeTableAction($name, $totProdSum, $cupSum, $cucSum, $monSum)
    {
        $html = '';

        $html .= '<tfoot>';
        $html .= '<tr>';
        $html .= '<td>';
        $html .= $name == NULL ? 'Total:' : 'Total de: '. utf8_decode($name);
        $html .= '</td>';
        $html .= '<td>';
        $html .= $totProdSum;
        $html .= '</td>';
        $html .= '<td>';
        $html .= $cupSum;
        $html .= '</td>';
        $html .= '<td>';
        $html .= $cucSum;
        $html .= '</td>';
        $html .= '<td>';
        $html .= $monSum;
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</tfoot>';
        $html .= '</table>';
        $html .= '</div>';

        return $html;
    }
} 