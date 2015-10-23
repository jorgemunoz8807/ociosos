<?php

namespace Ociosos\ReporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReporteBundle:Default:index.html.twig',
            array(
                'role' => $this->getAuthincatedRol()
            )
        );
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
