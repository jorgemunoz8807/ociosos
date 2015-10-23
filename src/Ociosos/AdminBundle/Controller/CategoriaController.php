<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\ComunBundle\Entity\Categoria;
use Ociosos\ComunBundle\Form\CategoriaType;

class CategoriaController extends Controller {
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categorias = $em->getRepository('ComunBundle:Categoria')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $categorias,
            $this->get('request')->query->get('page', 1),
            20
        );
                
        return $this->render('AdminBundle:Categoria:index.html.twig', array(
            'categorias' => $categorias,
            'pagination' => $pagination
        ));
    }

    public function crearAction()
    {
        $peticion = $this->getRequest();
        $categoria = new Categoria();
        $formulario = $this->createForm(new CategoriaType());
        $formulario->handleRequest($peticion);

        if($formulario->isValid())
        {
            $_newNombre = $formulario->getData()->getNombre();
            $categoria->setNombre($_newNombre);
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoria);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoria_index'));
        }

        return $this->render('AdminBundle:Categoria:crear.html.twig', array(
            'categoria' => $categoria,
            'form' => $formulario->createView()
        ));
    }
    
    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('ComunBundle:Categoria')->find($id);
        
        if (!$categoria) {
            throw $this->createNotFoundException('The category searched dosen`t exist');
        }
        
        return $this->render('AdminBundle:Categoria:detalles.html.twig', array(
            'categoria' => $categoria
        ));
    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('ComunBundle:Categoria')->find($id);
        if(!$categoria)
        {
            throw $this->createNotFoundException('La categoria no existe');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new CategoriaType(), $categoria);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoria);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categoria_index'));
        }

        return $this->render('AdminBundle:Categoria:editar.html.twig', array(
            'categoria' => $categoria,
            'form' => $form->createView()
        ));
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('ComunBundle:Categoria')->find($id);
        if(!$categoria)
        {
            throw $this->createNotFoundException('La categoria no existe');
        }
        $products = $em->getRepository('ComunBundle:Categoria')->isUsedBy($categoria);

        return $this->render('AdminBundle:Categoria:eliminar.html.twig', array(
            'categoria' => $categoria,
            'products' => $products,
            'count' => count($products)
        ));
    }

    public function EliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoria = $em->getRepository('ComunBundle:Categoria')->find($id);
        if(!$categoria)
        {
            throw $this->createNotFoundException('La categoría no existe');
        }
        $em->remove($categoria);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_categoria_index'));
    }

}
