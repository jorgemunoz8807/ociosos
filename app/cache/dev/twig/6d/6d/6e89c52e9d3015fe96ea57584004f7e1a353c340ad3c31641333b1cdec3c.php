<?php

/* UsuarioBundle:Usuario:auth_link.html.twig */
class __TwigTemplate_6d6d6e89c52e9d3015fe96ea57584004f7e1a353c340ad3c31641333b1cdec3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_VIEWER"))) {
            // line 2
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/male-user.png"), "html", null, true);
            echo "\" />
    <a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">Cerrar Sesi&#243;n</a>
    <p>Autenticado como: <!-- <span> -->";
            // line 4
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombre") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "apellidos")), "html", null, true);
            echo "<!-- </span> --></p>
";
        } else {
            // line 6
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/male-user.png"), "html", null, true);
            echo "\" />
    <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("usuario_login");
            echo "\">Iniciar Sesi&#243;n</a>
";
        }
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:auth_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  21 => 2,  19 => 1,  274 => 115,  267 => 111,  263 => 110,  257 => 107,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 40,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 63,  178 => 54,  170 => 48,  167 => 47,  157 => 40,  148 => 34,  144 => 33,  140 => 32,  120 => 20,  112 => 7,  107 => 6,  91 => 5,  76 => 101,  53 => 11,  48 => 10,  45 => 9,  43 => 6,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 58,  146 => 25,  143 => 24,  138 => 67,  136 => 66,  130 => 62,  128 => 22,  124 => 59,  115 => 8,  103 => 46,  101 => 45,  94 => 41,  92 => 40,  88 => 38,  83 => 120,  73 => 21,  71 => 20,  62 => 18,  57 => 12,  50 => 11,  47 => 10,  41 => 6,  36 => 5,  33 => 4,  125 => 21,  122 => 58,  119 => 46,  111 => 51,  105 => 47,  102 => 40,  99 => 39,  96 => 38,  81 => 104,  78 => 24,  74 => 19,  69 => 17,  61 => 14,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  40 => 7,  34 => 4,);
    }
}
