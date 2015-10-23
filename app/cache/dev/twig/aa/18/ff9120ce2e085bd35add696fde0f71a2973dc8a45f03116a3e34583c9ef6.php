<?php

/* ::main_menu.html.twig */
class __TwigTemplate_aa18ff9120ce2e085bd35add696fde0f71a2973dc8a45f03116a3e34583c9ef6 extends Twig_Template
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
    }

    // line 1
    public function getnavigation($_whosActive = null, $_role = null)
    {
        $context = $this->env->mergeGlobals(array(
            "whosActive" => $_whosActive,
            "role" => $_role,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
<nav>
    <ul>
        ";
            // line 5
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_VIEWER")) {
                // line 6
                echo "
            ";
                // line 7
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                    // line 8
                    echo "                <li class=\"first\"><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                } else {
                    // line 10
                    echo "                <li class=\"first\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                }
                // line 12
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                    // line 13
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                } else {
                    // line 15
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                }
                // line 17
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                    // line 18
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                } else {
                    // line 20
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                }
                // line 22
                echo "
        ";
            } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_EDITOR")) {
                // line 24
                echo "
            ";
                // line 25
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                    // line 26
                    echo "                <li class=\"first\"><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                } else {
                    // line 28
                    echo "                <li class=\"first\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                }
                // line 30
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                    // line 31
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                } else {
                    // line 33
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                }
                // line 35
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                    // line 36
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                } else {
                    // line 38
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                }
                // line 40
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "xml")) {
                    // line 41
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                    echo "\">Rodas Xml</a></li>
            ";
                } else {
                    // line 43
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                    echo "\">Rodas Xml</a></li>
            ";
                }
                // line 45
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 46
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("edit_index");
                    echo "\">Editar</a></li>
            ";
                } else {
                    // line 48
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("edit_index");
                    echo "\">Editar</a></li>
            ";
                }
                // line 50
                echo "
        ";
            } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 52
                echo "
            ";
                // line 53
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                    // line 54
                    echo "                <li class=\"first\"><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                } else {
                    // line 56
                    echo "                <li class=\"first\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                }
                // line 58
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                    // line 59
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                } else {
                    // line 61
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("consultas");
                    echo "\">Productos</a></li>
            ";
                }
                // line 63
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                    // line 64
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                } else {
                    // line 66
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("reporte_index");
                    echo "\">Reportes</a></li>
            ";
                }
                // line 68
                echo "            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "xml")) {
                    // line 69
                    echo "                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                    echo "\">Rodas Xml</a></li>
            ";
                } else {
                    // line 71
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                    echo "\">Rodas Xml</a></li>
            ";
                }
                // line 73
                echo "            ";
                // line 74
                echo "                ";
                // line 75
                echo "            ";
                // line 76
                echo "                ";
                // line 77
                echo "            ";
                // line 78
                echo "            <li class=\"last\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_portada");
                echo "\">Administrar</a></li>

        ";
            } else {
                // line 81
                echo "
            ";
                // line 82
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                    // line 83
                    echo "                <li class=\"first\"><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                } else {
                    // line 85
                    echo "                <li class=\"first\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("portada");
                    echo "\">Inicio</a></li>
            ";
                }
                // line 87
                echo "
        ";
            }
            // line 89
            echo "    </ul>
</nav>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 89,  268 => 87,  262 => 85,  256 => 83,  254 => 82,  251 => 81,  244 => 78,  242 => 77,  240 => 76,  238 => 75,  234 => 73,  228 => 71,  222 => 69,  219 => 68,  213 => 66,  207 => 64,  204 => 63,  198 => 61,  192 => 59,  183 => 56,  177 => 54,  175 => 53,  172 => 52,  168 => 50,  162 => 48,  156 => 46,  147 => 43,  141 => 41,  132 => 38,  126 => 36,  123 => 35,  117 => 33,  108 => 30,  87 => 22,  75 => 18,  72 => 17,  66 => 15,  60 => 13,  51 => 10,  38 => 5,  30 => 4,  26 => 3,  21 => 1,  19 => 1,  274 => 115,  267 => 111,  263 => 110,  257 => 107,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 74,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 58,  178 => 54,  170 => 48,  167 => 47,  157 => 40,  148 => 34,  144 => 33,  140 => 32,  120 => 20,  112 => 7,  107 => 6,  91 => 24,  76 => 101,  53 => 11,  48 => 10,  45 => 8,  43 => 7,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 45,  146 => 25,  143 => 24,  138 => 40,  136 => 66,  130 => 62,  128 => 22,  124 => 59,  115 => 8,  103 => 46,  101 => 45,  94 => 25,  92 => 40,  88 => 38,  83 => 120,  73 => 21,  71 => 20,  62 => 18,  57 => 12,  50 => 11,  47 => 10,  41 => 6,  36 => 5,  33 => 2,  125 => 21,  122 => 58,  119 => 46,  111 => 31,  105 => 47,  102 => 28,  99 => 39,  96 => 26,  81 => 20,  78 => 24,  74 => 19,  69 => 17,  61 => 14,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  40 => 6,  34 => 4,);
    }
}
