<?php

namespace Ociosos\ComunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitioController extends Controller {    
    
    public function estaticaAction($pagina)
    {
        return $this->render('ComunBundle:Sitio:'.$pagina.'.html.twig');
    }
}
