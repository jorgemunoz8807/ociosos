<?php

/* ::footer_menu.html.twig */
class __TwigTemplate_bcb6f063490ea0795a9a5b3d5c2a05b9866d7bd9f7acc734a5d3e79f5f6b8b94 extends Twig_Template
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
    public function getfooter_nav($_whosActive = null, $_role = null, $_group = null)
    {
        $context = $this->env->mergeGlobals(array(
            "whosActive" => $_whosActive,
            "role" => $_role,
            "group" => $_group,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) == "group2")) {
                // line 3
                echo "        ";
                if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_VIEWER")) {
                    // line 4
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                        // line 5
                        echo "                <li class=\"first\"><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    } else {
                        // line 7
                        echo "                <li class=\"first\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    }
                    // line 9
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                        // line 10
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    } else {
                        // line 12
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    }
                    // line 14
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                        // line 15
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    } else {
                        // line 17
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    }
                    // line 19
                    echo "        ";
                } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_EDITOR")) {
                    // line 20
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                        // line 21
                        echo "                <li class=\"first\"><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    } else {
                        // line 23
                        echo "                <li class=\"first\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    }
                    // line 25
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                        // line 26
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    } else {
                        // line 28
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    }
                    // line 30
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                        // line 31
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    } else {
                        // line 33
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    }
                    // line 35
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "xml")) {
                        // line 36
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                        echo "\">Rodas Xml</a></li>
            ";
                    } else {
                        // line 38
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                        echo "\">Rodas Xml</a></li>
            ";
                    }
                    // line 40
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                        // line 41
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("edit_index");
                        echo "\">Editar</a></li>
            ";
                    } else {
                        // line 43
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("edit_index");
                        echo "\">Editar</a></li>
            ";
                    }
                    // line 45
                    echo "        ";
                } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                    // line 46
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                        // line 47
                        echo "                <li class=\"first\"><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    } else {
                        // line 49
                        echo "                <li class=\"first\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    }
                    // line 51
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "consults")) {
                        // line 52
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    } else {
                        // line 54
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("consultas");
                        echo "\">Productos</a></li>
            ";
                    }
                    // line 56
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "reports")) {
                        // line 57
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    } else {
                        // line 59
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("reporte_index");
                        echo "\">Reportes</a></li>
            ";
                    }
                    // line 61
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "xml")) {
                        // line 62
                        echo "                <li><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                        echo "\">Rodas Xml</a></li>
            ";
                    } else {
                        // line 64
                        echo "                <li><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("rodas_xml_index");
                        echo "\">Rodas Xml</a></li>
            ";
                    }
                    // line 66
                    echo "            ";
                    // line 67
                    echo "                ";
                    // line 68
                    echo "            ";
                    // line 69
                    echo "                ";
                    // line 70
                    echo "            ";
                    // line 71
                    echo "            <li class=\"last\"><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_portada");
                    echo "\">Administrar</a></li>
        ";
                } else {
                    // line 73
                    echo "            ";
                    if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "home")) {
                        // line 74
                        echo "                <li class=\"first\"><a class=\"active\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    } else {
                        // line 76
                        echo "                <li class=\"first\"><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("portada");
                        echo "\">Inicio</a></li>
            ";
                    }
                    // line 78
                    echo "        ";
                }
                // line 79
                echo "    ";
            } elseif (((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) == "group1")) {
                // line 80
                echo "        ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "terms")) {
                    // line 81
                    echo "            <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "terminos"));
                    echo "\">T&eacute;rminos y Condiciones</a></li>
        ";
                } else {
                    // line 83
                    echo "            <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "terminos"));
                    echo "\">T&eacute;rminos y Condiciones</a></li>
        ";
                }
                // line 85
                echo "        ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "contacts")) {
                    // line 86
                    echo "            <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contactos"));
                    echo "\">Contactos</a></li>
        ";
                } else {
                    // line 88
                    echo "            <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contactos"));
                    echo "\">Contactos</a></li>
        ";
                }
                // line 90
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::footer_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 90,  287 => 88,  281 => 86,  278 => 85,  266 => 81,  260 => 79,  245 => 74,  232 => 69,  230 => 68,  226 => 66,  220 => 64,  214 => 62,  211 => 61,  205 => 59,  199 => 57,  196 => 56,  190 => 54,  184 => 52,  181 => 51,  169 => 47,  166 => 46,  163 => 45,  151 => 41,  142 => 38,  133 => 35,  127 => 33,  121 => 31,  118 => 30,  106 => 26,  97 => 23,  85 => 19,  79 => 17,  70 => 14,  64 => 12,  58 => 10,  37 => 3,  272 => 83,  268 => 87,  262 => 85,  256 => 83,  254 => 82,  251 => 76,  244 => 78,  242 => 73,  240 => 76,  238 => 75,  234 => 70,  228 => 67,  222 => 69,  219 => 68,  213 => 66,  207 => 64,  204 => 63,  198 => 61,  192 => 59,  183 => 56,  177 => 54,  175 => 49,  172 => 52,  168 => 50,  162 => 48,  156 => 46,  147 => 43,  141 => 41,  132 => 38,  126 => 36,  123 => 35,  117 => 33,  108 => 30,  87 => 22,  75 => 18,  72 => 17,  66 => 15,  60 => 13,  51 => 10,  38 => 5,  30 => 4,  26 => 3,  21 => 1,  19 => 1,  274 => 115,  267 => 111,  263 => 80,  257 => 78,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 71,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 58,  178 => 54,  170 => 48,  167 => 47,  157 => 43,  148 => 40,  144 => 33,  140 => 32,  120 => 20,  112 => 28,  107 => 6,  91 => 21,  76 => 101,  53 => 11,  48 => 10,  45 => 8,  43 => 5,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 45,  146 => 25,  143 => 24,  138 => 40,  136 => 36,  130 => 62,  128 => 22,  124 => 59,  115 => 8,  103 => 25,  101 => 45,  94 => 25,  92 => 40,  88 => 20,  83 => 120,  73 => 15,  71 => 20,  62 => 18,  57 => 12,  50 => 11,  47 => 10,  41 => 6,  36 => 5,  33 => 2,  125 => 21,  122 => 58,  119 => 46,  111 => 31,  105 => 47,  102 => 28,  99 => 39,  96 => 26,  81 => 20,  78 => 24,  74 => 19,  69 => 17,  61 => 14,  55 => 9,  52 => 9,  49 => 7,  46 => 7,  40 => 4,  34 => 2,);
    }
}
