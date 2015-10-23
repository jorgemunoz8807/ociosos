<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Provincia;
use Ociosos\ComunBundle\Form\ProvinciaType;

class ProvinciaController extends Controller {
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $provincias = $em->getRepository('ComunBundle:Provincia')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $provincias,
            $this->get('request')->query->get('page', 1),
            20
        );
        
        return $this->render('AdminBundle:Provincia:index.html.twig', array(
            'provincias' => $provincias,
            'pagination' => $pagination
        ));
    }
    
    public function crearAction()
    {
        $peticion = $this->getRequest();
        
        $provincia = new Provincia();
        $formulario = $this->createForm(new ProvinciaType());
        
        $formulario->handleRequest($peticion);
        
        if($formulario->isValid())
        {
            $_nuevoNombre = $formulario->getData()->getNombre();            
            
            $provincia->setNombre($_nuevoNombre);            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($provincia);
            $em->flush();
            
            return $this->redirect($this->generateUrl('admin_provincia_index'));
        }
        
        return $this->render('AdminBundle:Provincia:crear.html.twig', array(
            'provincia' => $provincia,
            'form' => $formulario->createView()
        ));  
    }
    
    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provincia = $em->getRepository('ComunBundle:Provincia')->find($id);

        if (!$provincia) {
            throw $this->createNotFoundException('La provincia buscada no existe');
        }

        return $this->render('AdminBundle:Provincia:detalles.html.twig', array(
            'provincia' => $provincia
        ));
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provincia = $em->getRepository('ComunBundle:Provincia')->find($id);
        if(!$provincia)
        {
            throw $this->createNotFoundException('La provincia no existe');
        }
        $cities = $em->getRepository('ComunBundle:Provincia')->isUsedBy($provincia);

        return $this->render('AdminBundle:Provincia:eliminar.html.twig', array(
            'provincia' => $provincia,
            'cities' => $cities,
            'count' => count($cities)
        ));
    }

    public function eliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provincia = $em->getRepository('ComunBundle:Provincia')->find($id);
        if(!$provincia)
        {
            throw $this->createNotFoundException('La provincia no existe');
        }
        try
        {
            $em->remove($provincia);
            $em->flush();
        }
        catch(DBALException $ex)
        {
            throw $ex;
        }

        return $this->redirect($this->generateUrl('admin_provincia_index'));
    }
    
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provincia = $em->getRepository('ComunBundle:Provincia')->find($id);
        if(!$provincia)
        {
            throw $this->createNotFoundException('No existe la provincia');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new ProvinciaType(), $provincia);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($provincia);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_provincia_index'));
        }

        return $this->render('AdminBundle:Provincia:editar.html.twig', array(
            'provincia' => $provincia,
            'form' => $form->createView()
        ));
    }
}