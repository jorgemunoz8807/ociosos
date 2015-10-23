<?php

/* ::admin.html.twig */
class __TwigTemplate_2efc75498a46fd8242f4c7f082002325dbcb1605a8a16bfe1ed84fa6fc1869c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_backend.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'additional_style' => array($this, 'block_additional_style'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'header_title' => array($this, 'block_header_title'),
            'main' => array($this, 'block_main'),
            'footerNav' => array($this, 'block_footerNav'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/header.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 9
    public function block_additional_style($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"header\">
        <div id=\"menu\">
            <nav>
                ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 16
        echo "            </nav>
            <div id=\"user-data\">
                ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsuarioBundle:Usuario:authLinkAdmin"));
        echo "
            </div>
        </div>

        <div id=\"breadcrumbs\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">Inicio</a> ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 24
        echo "        </div>
        ";
        // line 25
        $this->displayBlock('header_title', $context, $blocks);
        // line 26
        echo "    </div>

<div id=\"full-main\">    
    ";
        // line 29
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "    </div>
";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 23
    public function block_breadcrumbs($context, array $blocks = array())
    {
        echo " ";
    }

    // line 25
    public function block_header_title($context, array $blocks = array())
    {
        echo " <p id=\"title\">Administraci&oacute;n</p> ";
    }

    // line 29
    public function block_main($context, array $blocks = array())
    {
        // line 30
        echo "
    ";
    }

    // line 35
    public function block_footerNav($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  131 => 35,  126 => 30,  117 => 25,  106 => 15,  101 => 32,  94 => 26,  89 => 24,  85 => 23,  77 => 18,  73 => 16,  71 => 15,  66 => 12,  63 => 11,  58 => 9,  52 => 7,  44 => 5,  39 => 4,  36 => 3,  356 => 110,  352 => 108,  348 => 107,  344 => 106,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 100,  314 => 94,  308 => 91,  302 => 88,  297 => 86,  289 => 85,  283 => 82,  278 => 80,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 70,  240 => 68,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 58,  202 => 56,  194 => 55,  188 => 52,  183 => 50,  175 => 49,  169 => 46,  164 => 44,  156 => 43,  150 => 40,  145 => 38,  137 => 37,  133 => 36,  127 => 33,  123 => 29,  119 => 31,  115 => 30,  111 => 23,  107 => 28,  103 => 27,  99 => 29,  95 => 25,  92 => 25,  88 => 22,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,);
    }
}
