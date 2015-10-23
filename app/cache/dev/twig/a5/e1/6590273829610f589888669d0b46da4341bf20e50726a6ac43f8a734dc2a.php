<?php

/* ::base.html.twig */
class __TwigTemplate_a5e16590273829610f589888669d0b46da4341bf20e50726a6ac43f8a734dc2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'separador' => array($this, 'block_separador'),
            'subtitle' => array($this, 'block_subtitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'additionalCss' => array($this, 'block_additionalCss'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'group2' => array($this, 'block_group2'),
            'group1' => array($this, 'block_group1'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " ";
        $this->displayBlock('separador', $context, $blocks);
        echo " ";
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('additionalCss', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ocioso.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/TerminoSrch.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 14
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Email/emailComment.js"), "html", null, true);
        echo "\"></script>


    </head>
    <body>
        <div id=\"full-cont\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "


        ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "        </div>
        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ociosos ";
    }

    public function block_separador($context, array $blocks = array())
    {
        echo " - ";
    }

    public function block_subtitle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_additionalCss($context, array $blocks = array())
    {
        // line 8
        echo "
        ";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        echo "
                <footer>
                    <div id=\"full-footer-title\">
                        <div id=\"footer-title\">
                            <h2>Productos Ociosos - versi&oacute;n 2.0.1401.01</h2>
                        </div>
                    </div>

                    <div id=\"footer-middle\">
                        <div id=\"footer-img\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/citma3.png"), "html", null, true);
        echo "\" />
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/citmatel2.jpg"), "html", null, true);
        echo "\" />
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/innomax2.png"), "html", null, true);
        echo "\" />
                        </div>
                        <nav>
                            <h2>Mapa del Sitio</h2>
                            <div id=\"nav-group2\">
                                <ul>
                                    ";
        // line 40
        $this->displayBlock('group2', $context, $blocks);
        // line 41
        echo "                                </ul>
                            </div>
                            <div id=\"nav-group1\">
                                <ul>
                                    ";
        // line 46
        echo "                                    ";
        // line 47
        echo "                                    ";
        $this->displayBlock('group1', $context, $blocks);
        // line 48
        echo "                                </ul>
                            </div>
                        </nav>
                        <div id=\"contact\">
                            <h2>Comente sobre el Sitio</h2>
                            <div id=\"contact-cont\">
                                <form id=\"formCommentemail\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("send_email");
        echo "\" method=\"post\">
                                    <div class=\"editor-full\">
                                        <div class=\"editor-field\">
                                            <input type=\"text\" id=\"txtName\" name=\"txtName\"  placeholder=\"Su Nombre...\" />
                                        </div>
                                    </div>
                                    <div class=\"editor-full\">
                                        <div class=\"editor-field\">
                                            <input type=\"email\" id=\"txtEmail\" name=\"txtEmail\" placeholder=\"Su Correo...\" />";
        // line 63
        echo "                                        </div>
                                    </div>
                                    <div class=\"editor-full\">
                                        <div class=\"editor-field\">
                                            <textarea name=\"txtMessage\" id=\"txtArea\" placeholder=\"Su Mensaje...\"></textarea>";
        // line 68
        echo "                                        </div>
                                    </div>

                                    <div >
                                        <div class=\"captcha-container\">
                                            <a href=\"#\" id=\"refreshimg\" title=\"Click to refresh image\">
                                                ";
        // line 75
        echo "                                                ";
        $this->env->loadTemplate("ComunBundle::captcha.html.twig")->display($context);
        // line 76
        echo "                                            </a >
                                            <a style=\"color: blue\"  href=\"#\" class=\"refreshImage\">refrescar imagen</a>
                                        </div>
                                        <label for=\"captcha\">Ingrese los caracteres mostrados en imagen:</label>
                                        <input type=\"text\" maxlength=\"6\" style=\"width: 250px\" name=\"captcha\" id=\"captcha\">
                                        <div class=\"editor-full\">
                                            <input type=\"submit\" value=\"Enviar\" />
                                            ";
        // line 84
        echo "
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div id=\"full-copy\">
                        <div id=\"copyright\">
                            <p>Realizado por UEB I+D, CITMATEL &copy;  Copyright  ® Todos  los derechos reservados .</p>
                            ";
        // line 97
        echo "                        </div>
                    </div>
                </footer>
            ";
    }

    // line 40
    public function block_group2($context, array $blocks = array())
    {
    }

    // line 47
    public function block_group1($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "            ";
        // line 106
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery-1.9.1.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/jquery.validate.js"), "html", null, true);
        echo " \"></script>

            <script>
               var verifyCaptchaRoute = \"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("verify_captcha");
        echo "\";
               var refreshCaptchaRoute = \"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("create_captcha");
        echo "\";
               var logout = \"usuario_logout\";

            </script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/captcha/captcha.js"), "html", null, true);
        echo "\"></script>



        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 115,  267 => 111,  263 => 110,  257 => 107,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 40,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 63,  178 => 54,  170 => 48,  148 => 34,  144 => 33,  140 => 32,  125 => 21,  120 => 20,  112 => 7,  107 => 6,  91 => 5,  81 => 104,  76 => 101,  61 => 14,  48 => 10,  45 => 7,  35 => 5,  29 => 1,  165 => 46,  159 => 41,  153 => 58,  146 => 25,  138 => 67,  136 => 66,  130 => 62,  124 => 59,  122 => 58,  115 => 8,  105 => 47,  103 => 46,  94 => 41,  92 => 40,  88 => 38,  73 => 21,  71 => 20,  62 => 18,  57 => 12,  47 => 10,  41 => 6,  36 => 5,  33 => 4,  175 => 63,  171 => 62,  167 => 47,  164 => 60,  157 => 40,  154 => 57,  151 => 56,  143 => 24,  137 => 51,  134 => 50,  131 => 49,  128 => 22,  117 => 40,  111 => 51,  101 => 45,  95 => 32,  87 => 27,  83 => 120,  77 => 21,  75 => 19,  70 => 17,  66 => 15,  63 => 14,  56 => 11,  53 => 11,  50 => 11,  43 => 6,  40 => 5,  34 => 3,);
    }
}
