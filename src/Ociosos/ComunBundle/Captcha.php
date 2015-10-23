<?php namespace Ociosos\ComunBundle;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * Class Captcha
 * @package Ociosos\ComunBundle
 */
class Captcha
{

    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @return string
     */
    private function generateText()
    {
        // Create a random string, leaving out 'o' to avoid confusion with '0'
        $char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

        // Concatenate the random string onto the random numbers
        // The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
        // '0' is left out to avoid confusion with 'O'
        return rand(1, 7) . rand(1, 7) . $char;
    }

    /**
     * @param $text
     * @return resource
     */
    private function createImage($text)
    {
        if (!is_string($text) || trim($text) == '') {
            $text = 'ERROR';
        }

        // Create an image from captchaBackground.png
        $image = imagecreatefrompng(realpath('bundles/comun/images/captchaBackground.png'));

        // Set the font colour
        $colour = imagecolorallocate($image, 183, 178, 152);

        // Set the font
        //$font = '../fonts/Anorexia.ttf';
        $font = realpath('bundles/comun/fonts/Anorexia.ttf');

        // Set a random integer for the rotation between -15 and 15 degrees
        $rotate = rand(-15, 15);

        // Create an image using our original image and adding the detail
        imagettftext($image, 14, $rotate, 18, 30, $colour, $font, $text);

        // Output the image as a png
        //imagepng($image);


        /*return new Response(
            $captchaText,
            200,
            array(
                'Content-Type' => 'image/png',
                'Cache-Control' => 'no-cache'
            )
        );*/

        return $image;
    }

    /**
     *
     */
    private function newSession()
    {
        $this->session->set('captcha_id', $this->generateText());
    }

    /**
     *
     */
    private function saveImage($filename)
    {
        $text = '';

        if ($this->session->has('captcha_id')) {
            $text = $this->session->get('captcha_id');
        }

        // Output the image as a png
        return imagepng($this->createImage($text), $filename);

        //return $this->createImage($text);

    }

    public function  build($filename)
    {
        $this->newSession();
        $this->saveImage($filename);
    }

    /**
     * Verifica que el texto provisto es igual al texto del captcha.
     *
     * @param $text
     * @return bool
     */
    public function verify($text)
    {
        if (!$this->session->has('captcha_id')) {
            return false;
        }

        if (strtoupper($text) != strtoupper($this->session->get('captcha_id'))) {
            return false;
        }

        return true;
    }


} 