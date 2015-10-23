<?php

namespace Ociosos\ComunBundle\Controller;


use Ociosos\ComunBundle\Captcha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CaptchaController extends Controller
{

    //private $captcha;


    /*public function generateCaptchaText()
    {
        // Create a random string, leaving out 'o' to avoid confusion with '0'
        $char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

        // Concatenate the random string onto the random numbers
        // The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
        // '0' is left out to avoid confusion with 'O'
        return rand(1, 7) . rand(1, 7) . $char;
    }*/

    /*public function startCaptchaSession()
    {
        $this->getRequest()->getSession()->set('captcha_id', $this->generateCaptchaText());
    }*/


    function __construct()
    {
        //$this->captcha = $this->get('captcha');
        //$this->captcha =  new Captcha($this->getRequest()->getSession());
        //var_dupm($this->captcha);
        //die;
        //$this->captcha = $captcha;

    }

    /**metodo para refrescar la captcha
     * @return Response
     */
    public function refreshCaptcha()
    {
        $captcha = new Captcha($this->getRequest()->getSession());
//        $captcha->newSession();

        return $this->render('');

        /*return new Response(
            $captcha->outputImage(),
            200,
            array(
                'Content-Type' => 'image/png',
                'Cache-Control' => 'no-cache'
            )
        );*/
    }

    /** metodo para obtener la imagen
     * @return Response
     */
    public function getImageAction()
    {
        $captcha = new Captcha($this->getRequest()->getSession());

        //var_dump($captchaImageFilename);
        //die;
        //$captcha->saveImage(realpath('bundles/comun/images').'/captcha.png');
        $captcha->build(realpath('bundles/comun/images').'/captcha.png');

//        var_dump($captchaImageFilename);
//        die;

        /*return new Response(
            $captchaImageFilename,
            200,
            array(
                //'Content-Type' => 'image/png',
                'Cache-Control' => 'no-cache'
            )
        );*/

        return  $this->render('ComunBundle::captcha.html.twig');

    }


    /**metodo para validar q el valor del input es igual al de la captcha
     * @return Response
     */
    public function validateAction()
    {
        $captcha = new Captcha($this->getRequest()->getSession());

        $isValid = ($captcha->verify($this->getRequest()->get('captcha'))) ? 'true' : 'false';

        return new Response($isValid);
    }

    /**
     * @return Response
     */
    public function refreshImageAction()
    {
       // $this->refreshCaptcha();


        $captcha = new Captcha($this->getRequest()->getSession());
        $captcha->build(realpath('bundles/comun/images').'/captcha.png');

        //return  $this->render('ComunBundle::captcha.html.twig', array('time' => time()));
        return  $this->render('ComunBundle::captcha.html.twig');
    }


} 