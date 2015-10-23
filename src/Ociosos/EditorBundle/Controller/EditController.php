<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 30/06/14
 * Time: 9:20
 */

namespace Ociosos\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ociosos\UsuarioBundle\Entity\Usuario;
use Ociosos\UsuarioBundle\Form\UsuarioType;

class EditController extends Controller
{
    public function indexAction()
    {
        $message = ' ';
        return $this->render('EditorBundle:Edit:index.html.twig', array(
            'message' => $message
        ));
    }

    public function addViewerAction()
    {
        $authenticated = $this->get('security.context')->getToken()->getUser();
        $message = ' ';
        $request = $this->getRequest();
        $user = new Usuario();
        $user->setRole("ROLE_VIEWER");
        $user->setSalt("123");
        $user->setCentro($this->GetEntityByUser($authenticated));
        $form = $this->createForm(new UsuarioType());
        $form->handleRequest($request);
        if($form->isValid())
        {
            $newName = $form->getData()->getNombre();
            $newLast = $form->getData()->getApellidos();
            $newEmail = $form->getData()->getEmail();
            $newPass = $form->getData()->getPassword();
//            $newRole = $form->getData()->getRole();
            $newUsername = $form->getData()->getUsername();
//            $newSalt = $form->getData()->getSalt();
//            $newEntity = $form->getData()->getCentro();
            $user->setNombre($newName);
            $user->setApellidos($newLast);
            $user->setEmail($newEmail);
            $user->setPassword($newPass);
            $user->setUsername($newUsername);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $message = 'El usuario fue introducido satisfactoriamente';

            return $this->render('EditorBundle:Edit:index.html.twig', array(
                'message' => $message
            ));
        }

        return $this->render('EditorBundle:Edit:add.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'message' => $message
        ));
    }

    private function GetEntityByUser($user)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ComunBundle:Centro')->GetEntityByUser($user);
        if(!$entity)
        {
            throw $this->createNotFoundException(
                'No se ha encontrado el centro a partir del usuario: '. $user->getUsername()
            );
        }
        else
        {
            return $entity;
        }
    }
} 