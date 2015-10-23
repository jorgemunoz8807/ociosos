<?php

namespace Ociosos\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class UsuarioController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UsuarioBundle:Usuario:index.html.twig', array('name' => $name));

    }

    public function loginAction()
    {
        $peticion = $this->getRequest();
        $session = $peticion->getSession();



//        $session->c

        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $session->get(SecurityContext::AUTHENTICATION_ERROR)
        );
//metodo q regenera el sessionId para evitar SessionFixation
        $session->migrate(true, 0);

//        metodo q limpia la session
//        $session->invalidate(0);
        $this->container->get('session')->getMetadataBag()->stampNew(5);
                /*var_dump('-'.$session->getMetadataBag()->getLifetime());
        var_dump('-'.$session->getId());
        var_dump('-'.$session->get('PHPSESSID'));
        var_dump('-'.$session->migrate(true,10));
        die;*/
        return $this->render('UsuarioBundle:Usuario:login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        ));
//        return $this->render('UsuarioBundle:Default:login.html.twig');
    }

    public function perfilAction()
    {

    }

    public function authLinkAction()
    {
        return $this->render('UsuarioBundle:Usuario:auth_link.html.twig');
    }

    public function authLinkAdminAction()
    {
        return $this->render('UsuarioBundle:Usuario:admin_auth_link.html.twig');
    }
}
