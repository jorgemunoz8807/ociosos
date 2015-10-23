<?php

/* UsuarioBundle:Usuario:auth_link.html.twig */
class __TwigTemplate_02aa59052b49a7efd828b7d30d07d508f9cbb020b665795b49b036fd7ba836bf extends Twig_Template
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
        return array (  30 => 4,  26 => 3,  21 => 2,  19 => 1,  274 => 115,  267 => 111,  263 => 110,  257 => 107,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 40,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 63,  178 => 54,  170 => 48,  148 => 34,  144 => 33,  140 => 32,  125 => 21,  120 => 20,  112 => 7,  107 => 6,  91 => 5,  81 => 104,  76 => 101,  61 => 14,  48 => 10,  45 => 9,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 58,  146 => 25,  138 => 67,  136 => 66,  130 => 62,  124 => 59,  122 => 58,  115 => 8,  105 => 47,  103 => 46,  94 => 41,  92 => 40,  88 => 38,  73 => 21,  71 => 20,  62 => 18,  57 => 12,  47 => 10,  41 => 6,  36 => 5,  33 => 4,  175 => 63,  171 => 62,  167 => 47,  164 => 60,  157 => 40,  154 => 57,  151 => 56,  143 => 24,  137 => 51,  134 => 50,  131 => 49,  128 => 22,  117 => 40,  111 => 51,  101 => 45,  95 => 32,  87 => 27,  83 => 120,  77 => 21,  75 => 19,  70 => 17,  66 => 15,  63 => 14,  56 => 11,  53 => 11,  50 => 11,  43 => 6,  40 => 7,  34 => 3,);
    }
}
