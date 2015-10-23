<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Centro;
use Ociosos\ComunBundle\Form\CentroType;

class CentroController extends Controller {
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $centros = $em->getRepository('ComunBundle:Centro')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $centros,
            $this->get('request')->query->get('page', 1),
            20
        );
        
        return $this->render('AdminBundle:Centro:index.html.twig', array(
            'centros' => $centros,
            'pagination' => $pagination
        ));
    }
    public function buscar_centrosAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $centros = $em->getRepository('ComunBundle:Centro')->findByOrganizacion($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $centros,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Centro:index.html.twig', array(
                'centros' => $centros,
                'pagination' => $pagination
            ));
    }
    
    public function crearAction()
    {
        $peticion = $this->getRequest();
        
        $centro = new Centro();
        $formulario = $this->createForm(new CentroType());
        
        $formulario->handleRequest($peticion);
        
        if($formulario->isValid())
        {
            $_newNombre = $formulario->getData()->getNombre();   
            $_newSiglas = $formulario->getData()->getSiglas();
            $_newDireccion = $formulario->getData()->getDireccion();
            $_newTelefono = $formulario->getData()->getTelefono();
            $_newEmail = $formulario->getData()->getEmail();
            $_newDirector = $formulario->getData()->getDirector();
            $_newREEUP = $formulario->getData()->getREEUP();
            $_newOrganizacion = $formulario->getData()->getOrganizacion();
            $_newMunicipio = $formulario->getData()->getMunicipio();
            
            $centro->setNombre($_newNombre);
            $centro->setSiglas($_newSiglas);
            $centro->setDireccion($_newDireccion);
            $centro->setTelefono($_newTelefono);
            $centro->setEmail($_newEmail);
            $centro->setDirector($_newDirector);
            $centro->setREEUP($_newREEUP);
            $centro->setOrganizacion($_newOrganizacion);
            $centro->setMunicipio($_newMunicipio);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($centro);
            $em->flush();
            
            return $this->redirect($this->generateUrl('admin_centro_index'));
        }
        
        return $this->render('AdminBundle:Centro:crear.html.twig', array(
            'centro' => $centro,
            'form' => $formulario->createView()
        )); 
    }
    
    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $centro = $em->getRepository('ComunBundle:Centro')->find($id);

        if (!$centro) {
            throw $this->createNotFoundException('El centro no existe');
        }

        return $this->render('AdminBundle:Centro:detalles.html.twig', array(
            'centro' => $centro
        ));
    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $centro = $em->getRepository('ComunBundle:Centro')->find($id);
        if(!$centro)
        {
            throw $this->createNotFoundException('El Centro no existe');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new CentroType(), $centro);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($centro);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_centro_index'));
        }

        return $this->render('AdminBundle:Centro:editar.html.twig', array(
            'centro' => $centro,
            'form' => $form->createView()
        ));
    }
    
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $centro = $em->getRepository('ComunBundle:Centro')->find($id);
        if(!$centro)
        {
            throw $this->createNotFoundException('El centro no existe');
        }
        $users = $em->getRepository('ComunBundle:Centro')->isUsedByUser($centro);
        $products = $em->getRepository('ComunBundle:Centro')->isUsedByProduct($centro);

        return $this->render('AdminBundle:Centro:eliminar.html.twig', array(
            'centro' => $centro,
            'users' => $users,
            'products' => $products,
            'userCount' => count($users),
            'productCount' => count($products)
        ));
    }

    public function EliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $centro = $em->getRepository('ComunBundle:Centro')->find($id);
        if(!$centro)
        {
            throw $this->createNotFoundException('El centro no existe');
        }
        $em->remove($centro);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_centro_index'));
    }
}