<?php

namespace Ociosos\ComunBundle\Controller;

use Ociosos\ComunBundle\Captcha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComunBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function contactosAction()
    {
        return $this->render('ComunBundle:Default:contactos.html.twig');
    }
    
    public function portadaAction()
    {
        $captcha = new Captcha($this->getRequest()->getSession());
        $captcha->build(realpath('bundles/comun/images').'/captcha.png');

        return $this->render('ComunBundle:Default:portada.html.twig');
    }
    public function solicitudAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $producto=$em->getRepository('ComunBundle:Producto')->findOneById($id);
//        $nombre= $producto->getNombre();
//        var_dump($producto->getNombre());
//        die;
        return $this->render('ComunBundle:Email:emailSolicitud.html.twig', array('id' => $id,'nombre'=>$producto->getNombre(),'codigo'=>$producto->getCodigo()));
    }
}
