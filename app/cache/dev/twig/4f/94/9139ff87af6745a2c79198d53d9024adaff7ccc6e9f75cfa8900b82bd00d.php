<?php

/* ::base_backend.html.twig */
class __TwigTemplate_4f949139ff87af6745a2c79198d53d9024adaff7ccc6e9f75cfa8900b82bd00d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'subtitle' => array($this, 'block_subtitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'additional_style' => array($this, 'block_additional_style'),
            'body' => array($this, 'block_body'),
            'footerNav' => array($this, 'block_footerNav'),
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
        echo " - ";
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('additional_style', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ocioso.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        <div id=\"full-cont\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        </div>
        <footer>
            <div id=\"footer-area\">
                <nav>
                    ";
        // line 19
        $this->displayBlock('footerNav', $context, $blocks);
        // line 20
        echo "                </nav>
            </div>

            <div id=\"admin-full-copy\">
                <div id=\"admin-copyright\">
                    <p>Realizado por UEB I+D, CITMATEL &copy; Copyright  ® Todos los derechos reservados.</p>
                    ";
        // line 27
        echo "                </div>
            </div>
        </footer>
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
    </html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ociosos - Administration Area";
    }

    public function block_subtitle($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_additional_style($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footerNav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  104 => 13,  83 => 5,  78 => 31,  76 => 30,  43 => 8,  40 => 7,  38 => 6,  32 => 5,  26 => 1,  136 => 37,  131 => 35,  126 => 30,  117 => 25,  106 => 15,  101 => 32,  94 => 6,  89 => 24,  85 => 23,  77 => 18,  73 => 16,  71 => 27,  66 => 12,  63 => 20,  58 => 9,  52 => 13,  44 => 5,  39 => 4,  36 => 3,  356 => 110,  352 => 108,  348 => 107,  344 => 106,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 100,  314 => 94,  308 => 91,  302 => 88,  297 => 86,  289 => 85,  283 => 82,  278 => 80,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 70,  240 => 68,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 58,  202 => 56,  194 => 55,  188 => 52,  183 => 50,  175 => 49,  169 => 46,  164 => 44,  156 => 43,  150 => 40,  145 => 38,  137 => 37,  133 => 36,  127 => 33,  123 => 29,  119 => 31,  115 => 30,  111 => 23,  107 => 28,  103 => 27,  99 => 7,  95 => 25,  92 => 25,  88 => 22,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 19,  54 => 14,  51 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,);
    }
}
