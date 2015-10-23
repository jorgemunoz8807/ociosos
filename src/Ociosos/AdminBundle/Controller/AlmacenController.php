<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Almacen;
use Ociosos\ComunBundle\Form\AlmacenType;

class AlmacenController extends Controller{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $almacenes = $em->getRepository('ComunBundle:Almacen')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $almacenes,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Almacen:index.html.twig', array(
            'almacenes' => $almacenes,
            'pagination' => $pagination
        ));
    }
    
    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $almacen = $em->getRepository('ComunBundle:Almacen')->find($id);

        if (!$almacen) {
            throw $this->createNotFoundException('El almacen no existe');
        }

        return $this->render('AdminBundle:Almacen:detalles.html.twig', array(
            'almacen' => $almacen
        ));
    }
}
