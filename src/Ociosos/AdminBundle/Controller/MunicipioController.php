<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Municipio;
use Ociosos\ComunBundle\Form\MunicipioType;

class MunicipioController extends Controller {
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = $em->getRepository('ComunBundle:Municipio')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $municipios,
            $this->get('request')->query->get('page', 1),
            20
        );
        
        return $this->render('AdminBundle:Municipio:index.html.twig', array(
            'municipios' => $municipios,
            'pagination' => $pagination
        ));
    }
    public function buscar_municipiosAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = $em->getRepository('ComunBundle:Municipio')->findByProvincia($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $municipios,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Municipio:index.html.twig', array(
                'municipios' => $municipios,
                'pagination' => $pagination
            ));
    }
    
    public function crearAction()
    {
        $peticion = $this->getRequest();
        
        $municipio = new Municipio();
        $formulario = $this->createForm(new MunicipioType());
        
        $formulario->handleRequest($peticion);
        
        if($formulario->isValid())
        {
            $_nuevoNombre = $formulario->getData()->getNombre();   
            $_nuevaProvincia = $formulario->getData()->getProvincia();
            
            $municipio->setNombre($_nuevoNombre);
            $municipio->setProvincia($_nuevaProvincia);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($municipio);
            $em->flush();
            
            return $this->redirect($this->generateUrl('admin_municipio_index'));
        }
        
        return $this->render('AdminBundle:Municipio:crear.html.twig', array(
            'municipio' => $municipio,
            'form' => $formulario->createView()
        ));  
    }
    
    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $municipio = $em->getRepository('ComunBundle:Municipio')->find($id);
        
        if (!$municipio) {
            throw $this->createNotFoundException('The category searched dosen`t exist');
        }
        
        return $this->render('AdminBundle:Municipio:detalles.html.twig', array(
            'municipio' => $municipio
        ));
    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $municipio = $em->getRepository('ComunBundle:Municipio')->find($id);
        if(!$municipio)
        {
            throw $this->createNotFoundException('No existe el municipio');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new MunicipioType(), $municipio);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($municipio);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_municipio_index'));
        }

        return $this->render('AdminBundle:Municipio:editar.html.twig', array(
            'municipio' => $municipio,
            'form' => $form->createView()
        ));
    }
    
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $municipio = $em->getRepository('ComunBundle:Municipio')->find($id);
        if(!$municipio)
        {
            throw $this->createNotFoundException('El municipio no existe');
        }
        $entities = $em->getRepository('ComunBundle:Municipio')->isUsedBy($municipio);

        return $this->render('AdminBundle:Municipio:eliminar.html.twig', array(
            'municipio' => $municipio,
            'entities' => $entities,
            'count' => count($entities)
        ));
    }


    public function eliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $municipio = $em->getRepository('ComunBundle:Municipio')->find($id);
        if(!$municipio)
        {
            throw $this->createNotFoundException('El municipio no existe');
        }
        $em->remove($municipio);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_municipio_index'));
    }
}