<?php

/* ::frontend.html.twig */
class __TwigTemplate_4808681e4012093b95df2f6de82496e50e11440679e147f90c81f9e6038be912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'auth' => array($this, 'block_auth'),
            'nav' => array($this, 'block_nav'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/Site.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/mainmenu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"auth\">
    <div id=\"auth-cont\">
        <div id=\"auth-nav\">
            <nav>
                <ul>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "terminos"));
        echo "\">T&#233;rminos y Condiciones</a></li>
                    <li class=\"separator\"> | </li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contactos"));
        echo "\">Contactos</a></li>
                </ul>
            </nav>

        </div>
        <div id=\"auth-img\">
            ";
        // line 24
        $this->displayBlock('auth', $context, $blocks);
        // line 27
        echo "        </div>
    </div>
</div>
<header>
    <div id=\"logos\">
        <div id=\"logos-cont\">
            <div id=\"pgrph-cont\">
                <p></p>
                ";
        // line 36
        echo "                <img alt=\"Banner\"  style=\"padding-bottom: 1px\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/logoociosos.png"), "html", null, true);
        echo "\" />
                ";
        // line 38
        echo "            </div>
            <div id=\"search-cont\">
                ";
        // line 40
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "                    <form name=\"termsForm\" action=\"";
            echo $this->env->getExtension('routing')->getPath("buscar_termino");
            echo "\" method=\"post\">
                        <input type=\"text\" name=\"wordSearch\" value=\"Buscar producto...\" />
                        <div id=\"search-img\">
                            ";
            // line 45
            echo "                            ";
            // line 46
            echo "                            ";
            // line 47
            echo "                            <input type=\"submit\" value=\"\" />
                        </div>
                    </form>
                ";
        } else {
            // line 51
            echo "
                ";
        }
        // line 53
        echo "
            </div>
        </div>
    </div>
    <div id=\"full-nav\">
        ";
        // line 58
        $this->displayBlock('nav', $context, $blocks);
        // line 59
        echo "    </div>
    <div id=\"full-banner\">
        ";
        // line 61
        $this->displayBlock('banner', $context, $blocks);
        // line 62
        echo "    </div>
</header>

<div id=\"full-main\">
    ";
        // line 66
        $this->displayBlock('main', $context, $blocks);
        // line 67
        echo "</div>
";
    }

    // line 24
    public function block_auth($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsuarioBundle:Usuario:authLink"));
        echo "
            ";
    }

    // line 58
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 61
    public function block_banner($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 66,  159 => 61,  153 => 58,  146 => 25,  143 => 24,  138 => 67,  136 => 66,  130 => 62,  128 => 61,  124 => 59,  115 => 53,  103 => 46,  101 => 45,  94 => 41,  92 => 40,  88 => 38,  83 => 36,  73 => 27,  71 => 24,  62 => 18,  57 => 16,  50 => 11,  47 => 10,  41 => 6,  36 => 5,  33 => 4,  125 => 48,  122 => 58,  119 => 46,  111 => 51,  105 => 47,  102 => 40,  99 => 39,  96 => 38,  81 => 25,  78 => 24,  74 => 19,  69 => 17,  61 => 12,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 4,);
    }
}
