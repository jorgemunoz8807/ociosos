<?php

namespace Ociosos\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\UsuarioBundle\Entity\Usuario;
use Ociosos\UsuarioBundle\Form\UsuarioType;




//use Symfony\Component\Security\Core\SecurityContext;

class UsuarioController extends Controller {

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('UsuarioBundle:Usuario')->findAllOrderedByName();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $usuarios,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Usuario:index.html.twig', array(
            'usuarios' => $usuarios,
            'pagination' => $pagination
        ));
    }

    public function crearAction()
    {
        $peticion = $this->getRequest();

        $usuario = new Usuario();
        $formulario = $this->createForm(new UsuarioType());

        $formulario->handleRequest($peticion);

        if($formulario->isValid())
        {
            $_newNombre = $formulario->getData()->getNombre();
            $_newApellidos = $formulario->getData()->getApellidos();
            $_newEmail = $formulario->getData()->getEmail();
            $_newPass = $formulario->getData()->getPassword();
            $_newRole = $formulario->getData()->getRole();
            $_newUsername = $formulario->getData()->getUsername();
            $_newSalt = $formulario->getData()->getSalt();
            $_newCentro = $formulario->getData()->getCentro();

           /* $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($usuario);
            $password = $encoder->encodePassword($_newPass, $_newSalt);*/



            $usuario->setNombre($_newNombre);
            $usuario->setApellidos($_newApellidos);
            $usuario->setEmail($_newEmail);
            $usuario->setPassword($_newPass);
//            $usuario->setPassword($password);
            $usuario->setRole($_newRole);
            $usuario->setUsername($_newUsername);
            $usuario->setSalt($_newSalt);
            $usuario->setCentro($_newCentro);


            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
//            var_dump($password);
//            die;

            return $this->redirect($this->generateUrl('admin_usuario_index'));
        }

        return $this->render('AdminBundle:Usuario:crear.html.twig', array(
            'usuario' => $usuario,
            'form' => $formulario->createView()
        ));
    }

    public function detallesAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);

        if (!$usuario) {
            throw $this->createNotFoundException('El usuario no existe');
        }

        return $this->render('AdminBundle:Usuario:detalles.html.twig', array(
            'usuario' => $usuario
        ));
    }

    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);
        if(!$usuario)
        {
            throw $this->createNotFoundException('El usuario no existe');
        }

        return $this->render('AdminBundle:Usuario:eliminar.html.twig', array(
            'usuario' => $usuario
        ));
    }

    public function eliminarConfirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);
        if(!$usuario)
        {
            throw $this->createNotFoundException('El usuario no existe');
        }
        try
        {

                 // hacer bien la pregunta de si el usuario esta autenticado actualmente
            //if($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')==true or $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ){

                //$peticion = $this->getRequest();

                //$session = $peticion->getSession();

               // $em->remove($usuario);

                //$em->flush();

                  // return $this->render('logout');
                //return $this->render('ComunBundle:Default:portada.html.twig',$session->);
                //return $this->render('ComunBundle:Default:portada.html.twig');
               // return $this->redirect($this->generateUrl('admin_usuario_index'));
            //}else{
                $em->remove($usuario);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_usuario_index'));
            //}


        }
        catch(DBALException $ex)
        {
            throw $ex;
        }


    }

    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);
        if(!$usuario)
        {
            throw $this->createNotFoundException('El usuario no existe');
        }
        $request = $this->getRequest();
        $form = $this->createForm(new UsuarioType(), $usuario);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($usuario);
            $password = $encoder->encodePassword($usuario->getPassword(), $usuario->getSalt());
            $usuario->setPassword($password);
            $em->persist($usuario);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_usuario_index'));
        }

        return $this->render('AdminBundle:Usuario:editar.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView()
        ));
    }
    public function buscar_usuariosxCentroAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('UsuarioBundle:Usuario')->findByCentro($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $usuarios,
            $this->get('request')->query->get('page', 1),
            20
        );

        return $this->render('AdminBundle:Usuario:index.html.twig', array(
                'usuarios' => $usuarios,
                'pagination' => $pagination
            ));
    }
}