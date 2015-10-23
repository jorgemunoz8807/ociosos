<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 6/30/14
 * Time: 11:16 PM
 */

namespace Ociosos\ComunBundle\Controller;

use Ociosos\ComunBundle\Captcha;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class EmailController extends Controller
{

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

//    TODO: regenerar la captcha.
    public function refreshCaptcha()
    {

    }

    public function createImageCaptchaAction()
    {
        $captcha =  new Captcha($this->getRequest()->getSession());

        $captcha->outputImage();

        /*return new Response(
            $captchaText,
            200,
            array(
                'Content-Type' => 'image/png',
                'Cache-Control' => 'no-cache'
            )
        );*/
    }

    public function verifyCaptchaAction()
    {
        /*var_dump($this->getRequest()->get('captcha'));
        die;*/

        return new Response('false');

        if (!$this->getRequest()->getSession()->isStarted()) {
            return new Response('false');
        }

        $captchaId = strtoupper($this->getRequest()->getSession()->get('captcha_id'));

        if ($captchaId != $captcha) {
            return new Response('false');
        }

        return new Response('true');
    }

    public function SendEmailAction()
    {
        $request = $this->getRequest();
        $name = $request->request->get('txtName');
        $email = $request->request->get('txtEmail');
        $comment = $request->request->get('txtMessage');
        $em = $this->getDoctrine()->getManager();
        $adminEmail = $em->getRepository('UsuarioBundle:Usuario')->FindEmailFromAdmin();
//        $logo = realpath('bundles/comun/images/logoociosos.png');

//        var_dump($adminEmail['email']);
//        die;
        $message = \Swift_Message::newInstance()

            ->setContentType("text/html")


            ->setSubject('Ociosos: ' . $name)

            ->setFrom($email)
            ->setTo($adminEmail['email'])
                        ->setBody(

                $this->renderView(
                    'ComunBundle:Email:message.html.twig',
                    array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        //'logo'=>$logo
                    )
                )
            );

        $this->get('mailer')->send($message);

//        var_dump('test');
        return $this->render('ComunBundle:Default:portada.html.twig');
    }

    public function SendEmailSolicitudAction()
    {

        $request = $this->getRequest();
        $productoId = $request->request->get('id');

        $name = $request->request->get('txtName');
        $email = $request->request->get('txtEmail');
        $comment = $request->request->get('txtMessage');


        $em = $this->getDoctrine()->getManager();
//        akakjdaksdjhakjdhalkjdhakljdhakljdsh me quede aqui
        $emailTo = $em->getRepository('ComunBundle:Producto')->FindEmailById($productoId);
        $productoInfo = $em->getRepository('ComunBundle:Producto')->findOneById($productoId);

        $productoNombre = $productoInfo->getNombre();
        $productoCodigo = $productoInfo->getCodigo();

//        var_dump($emailTo['email']);
//        var_dump($email);
//        die;
        $message = \Swift_Message::newInstance()
            ->setSubject('Ociosos: ' . $name)
            ->setFrom($email)
            ->setTo($emailTo['email'])
            ->setBody(
                $this->renderView(
                    'ComunBundle:Email:messageSolicitud.html.twig',
                    array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        'nombre' => $productoNombre,
                        'codigo' => $productoCodigo
                    )
                )
            );
        $this->get('mailer')->send($message);

        return $this->render('ComunBundle:Default:portada.html.twig');
    }

} 