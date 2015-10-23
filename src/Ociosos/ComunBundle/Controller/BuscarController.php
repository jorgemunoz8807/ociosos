<?php

namespace Ociosos\ComunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Intl\Tests\DateFormatter\AbstractIntlDateFormatterTest;

class BuscarController extends Controller {

    /*This method show all products from a word searched*/
    public function terminoAction()
    {
        $peticion = $this->getRequest();
        $wordSrch = $peticion->request->get("wordSearch");
        $nbPage = $peticion->request->get('page') == null ? 1 : $peticion->request->get('page');
        $ajax = $peticion->request->get('ajax') == null ? false : $peticion->request->get('ajax');

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('ComunBundle:Producto')->findByTermino($wordSrch);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', $nbPage),
            5
        );

        $template = $ajax ? 'ComunBundle:Buscar:termAjax.html.twig' : 'ComunBundle:Buscar:terminos.html.twig';
        return $this->render($template, array(
            'pagination' => $pagination,
            'word' => $wordSrch
        ));
    }

    /*This method show the product detail selected*/
    /* Ajax Request */
    public function terminoDetailsAction()
    {
        $request = $this->getRequest();
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('ComunBundle:Producto')->find($id);
        if (!$producto) {
//            throw $this->createNotFoundException('El producto no existe');
            $response = new Response('El producto no existe');
            return $response;
        }

        return $this->render('ComunBundle:Buscar:termDetails.html.twig', array(
            'producto' => $producto
        ));
    }

    /*This method show all products from filters selected*/
    public function consultasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $provincias = $em->getRepository('ComunBundle:Provincia')->findAllOrderedByName();
        $categorias = $em->getRepository('ComunBundle:Categoria')->findAllOrderedByName();
        $centros = $em->getRepository('ComunBundle:Centro')->findAllOrderedBySiglas();
//        var_dump($centros);
//        die;
        $productos = $em->getRepository('ComunBundle:Producto')->findAllOrderedByName();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', 1),
            5
        );

        return $this->render('ComunBundle:Buscar:consultas.html.twig', array(
            'provincias' => $provincias,
            'categorias' => $categorias,
            'centros' => $centros,
            'productos' => $productos,
            'pagination' => $pagination
        ));
    }

    /* Request: AJAX */
    public function resConsultasAction()
    {
        $peticion = $this->getRequest();
        $values = $peticion->request->get('values');
        $nbPage = $peticion->request->get('page');
        $where = $this->getWhereAction($values);

        $dql = null;
        if($where != "")
        {
            $dql = 'SELECT pd
                FROM ComunBundle:Producto pd
                JOIN pd.centro ce JOIN ce.municipio m
                WHERE '.$where. 'ORDER BY pd.nombre ASC';
        }
        else
        {
            $dql = 'SELECT pd
                FROM ComunBundle:Producto pd
                JOIN pd.centro ce JOIN ce.municipio m
                ORDER BY pd.nombre ASC';
        }

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('ComunBundle:Producto')->findByConsultas($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $productos,
            $this->get('request')->query->get('page', $nbPage),
            5
        );

        return $this->render('ComunBundle:Buscar:resConsultas.html.twig', array(
            'productos' => $productos,
            'pagination' => $pagination
        ));
    }

//    public function consDetailsAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//        $producto = $em->getRepository('ComunBundle:Producto')->find($id);
//        if (!$producto) {
//            throw $this->createNotFoundException('El producto no existe');
//        }
//
//        return $this->render('ComunBundle:Buscar:consDetails.html.twig', array(
//            'producto' => $producto
//        ));
//    }

    /* This method compose the query*/
    private function getWhereAction($values)
    {
        $criteria = array("m.provincia", "pd.categoria", "pd.centro");
        $arrayVal = explode(',', $values);
        $newOrderArr = $this->getArrayAction($arrayVal, $criteria);
        $where = "";
        for($i = 0; $i < count($newOrderArr['rows']); $i++)
        {
            $where .= ($i == 0)
                ? $newOrderArr['rows'][$i]["criteria"] ." = ". $newOrderArr['rows'][$i]["values"]
                : " and ". $newOrderArr['rows'][$i]["criteria"] ." = ". $newOrderArr['rows'][$i]["values"];
        }

        return $where;
    }

    /* This method compose the array what will be used to create the where sentence */
    private function getArrayAction($arrayVal, $criteria)
    {
        $newOrderArr["rows"] = array();
        $j = 0;
        for ($i = 0; $i < count($arrayVal); $i++) {
            if($arrayVal[$i] != 0){
                $newOrderArr["rows"][$j++] = array(
                    "values"    => $arrayVal[$i],
                    "criteria"  => $criteria[$i]
                );
            }
        }

        return $newOrderArr;
    }

    private function getAuthincatedRol()
    {
        if($this->get('security.context')->isGranted('ROLE_VIEWER'))
        {
            return 'viewer';
        }
        elseif($this->get('security.context')->isGranted('ROLE_EDITOR'))
        {
            return 'editor';
        }
        elseif($this->get('security.context')->isGranted('ROLE_ADMIN'))
        {
            return 'admin';
        }
        else
        {
            return 'nobody';
        }
    }
}