<?php

/* UsuarioBundle:Usuario:admin_auth_link.html.twig */
class __TwigTemplate_3542dbcc5de788f572ed89e883bd085391948719377c595b2d799d719491bf7d extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            // line 4
            echo "    ";
            // line 5
            echo "

    <p><a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">Cerrar Sesi&oacute;n</a></p>
    <p>Hola <span>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span></p>
";
        }
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:admin_auth_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  19 => 1,  176 => 53,  170 => 51,  162 => 48,  159 => 47,  153 => 45,  147 => 43,  142 => 41,  130 => 37,  128 => 36,  125 => 35,  113 => 31,  108 => 29,  102 => 27,  96 => 25,  91 => 23,  79 => 19,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  57 => 11,  45 => 7,  21 => 2,  109 => 19,  104 => 13,  83 => 5,  78 => 31,  76 => 30,  43 => 6,  40 => 7,  38 => 6,  32 => 2,  26 => 1,  136 => 39,  131 => 35,  126 => 30,  117 => 25,  106 => 15,  101 => 32,  94 => 24,  89 => 24,  85 => 21,  77 => 18,  73 => 16,  71 => 27,  66 => 12,  63 => 20,  58 => 9,  52 => 13,  44 => 5,  39 => 4,  36 => 4,  356 => 110,  352 => 108,  348 => 107,  344 => 106,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 100,  314 => 94,  308 => 91,  302 => 88,  297 => 86,  289 => 85,  283 => 82,  278 => 80,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 70,  240 => 68,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 58,  202 => 56,  194 => 55,  188 => 52,  183 => 50,  175 => 49,  169 => 46,  164 => 49,  156 => 43,  150 => 40,  145 => 42,  137 => 37,  133 => 36,  127 => 33,  123 => 29,  119 => 33,  115 => 30,  111 => 30,  107 => 28,  103 => 27,  99 => 7,  95 => 25,  92 => 25,  88 => 22,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 19,  54 => 14,  51 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,);
    }
}
