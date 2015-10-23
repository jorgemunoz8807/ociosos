<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Organizacion;
use Ociosos\ComunBundle\Form\OrganizacionType;
use Doctrine\DBAL\DBALException;

class OrganizacionController extends Controller {

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $organizaciones = $em->getRepository('ComunBundle:Organizacion')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $organizaciones,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Organizacion:index.html.twig', array(
            'organizaciones' => $organizaciones,
            'pagination' => $pagination
        ));
    }

    public function crearAction()
    {
        $peticion = $this->getRequest();

        $organizacion = new Organizacion();
        $formulario = $this->createForm(new OrganizacionType());

        $formulario->handleRequest($peticion);

        if($formulario->isValid())
        {
            /*------------------------------------------------------------------------------*/
            $_newNombre = $formulario->getData()->getNombre();

            $organizacion->setNombre($_newNombre);


            $em = $this->getDoctrine()->getManager();
            $em->persist($organizacion);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_organizacion_index'));
        }

        return $this->render('AdminBundle:Organizacion:crear.html.twig', array(
            'organizacion' => $organizacion,
            'form' => $formulario->createView()
        ));
    }

    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $organizacion = $em->getRepository('ComunBundle:Organizacion')->find($id);

        if (!$organizacion) {
            throw $this->createNotFoundException('La organizacion no existe');
        }

        return $this->render('AdminBundle:Organizacion:detalles.html.twig', array(
            'organizacion' => $organizacion
        ));
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $organizacion = $em->getRepository('ComunBundle:Organizacion')->find($id);
        if(!$organizacion)
        {
            throw $this->createNotFoundException('La organizacion no existe');
        }
        $entities = $em->getRepository('ComunBundle:Organizacion')->isUsedBy($organizacion);

        return $this->render('AdminBundle:Organizacion:eliminar.html.twig', array(
            'organizacion' => $organizacion,
            'entities' => $entities,
            'count' => count($entities)
        ));
    }

    public function eliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $organizacion = $em->getRepository('ComunBundle:Organizacion')->find($id);
        if(!$organizacion)
        {
            throw $this->createNotFoundException('La organizacion no existe');
        }
        try
        {
            $em->remove($organizacion);
            $em->flush();
        }
        catch(DBALException $ex)
        {
            throw $ex;
        }

        return $this->redirect($this->generateUrl('admin_organizacion_index'));
    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $organizacion = $em->getRepository('ComunBundle:Organizacion')->find($id);
        if(!$organizacion)
        {
            throw $this->createNotFoundException('La organizacion no existe');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new OrganizacionType(), $organizacion);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organizacion);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_organizacion_index'));
        }

        return $this->render('AdminBundle:Organizacion:editar.html.twig', array(
            'organizacion' => $organizacion,
            'form' => $form->createView()
        ));
    }
}