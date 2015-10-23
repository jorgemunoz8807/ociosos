<?php

/* ::main_admin_menu.html.twig */
class __TwigTemplate_78ee388d40b83c34e4b4c4afd3ebe7a6aed908bfbe0f58c89d5383ed9cb5f209 extends Twig_Template
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
    public function getadmin_navigation($_whosActive = null)
    {
        $context = $this->env->mergeGlobals(array(
            "whosActive" => $_whosActive,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
        <ul>
            <li><a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("portada");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/home15.png"), "html", null, true);
            echo "\" /></a></li>

            ";
            // line 6
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "stock")) {
                // line 7
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_almacen_index");
                echo "\">Almacenes</a></li>
            ";
            } else {
                // line 9
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_almacen_index");
                echo "\">Almacenes</a></li>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "category")) {
                // line 13
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                echo "\">Categor&iacute;as</a></li>
            ";
            } else {
                // line 15
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                echo "\">Categor&iacute;as</a></li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "entity")) {
                // line 19
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                echo "\">Centros</a></li>
            ";
            } else {
                // line 21
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                echo "\">Centros</a></li>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "city")) {
                // line 25
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                echo "\">Municipios</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                echo "\">Municipios</a></li>
            ";
            }
            // line 29
            echo "
            ";
            // line 30
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "organization")) {
                // line 31
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                echo "\">Organizaciones</a></li>
            ";
            } else {
                // line 33
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                echo "\">Organizaciones</a></li>
            ";
            }
            // line 35
            echo "
            ";
            // line 36
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "product")) {
                // line 37
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                echo "\">Productos</a></li>
            ";
            } else {
                // line 39
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                echo "\">Productos</a></li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "state")) {
                // line 43
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                echo "\">Provincias</a></li>
            ";
            } else {
                // line 45
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                echo "\">Provincias</a></li>
            ";
            }
            // line 47
            echo "
            ";
            // line 48
            if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "user")) {
                // line 49
                echo "                <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
                echo "\">Usuarios</a></li>
            ";
            } else {
                // line 51
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
                echo "\">Usuarios</a></li>
            ";
            }
            // line 53
            echo "        </ul>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::main_admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 53,  170 => 51,  162 => 48,  159 => 47,  153 => 45,  147 => 43,  142 => 41,  130 => 37,  128 => 36,  125 => 35,  113 => 31,  108 => 29,  102 => 27,  96 => 25,  91 => 23,  79 => 19,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  57 => 11,  45 => 7,  21 => 1,  109 => 19,  104 => 13,  83 => 5,  78 => 31,  76 => 30,  43 => 6,  40 => 7,  38 => 6,  32 => 2,  26 => 1,  136 => 39,  131 => 35,  126 => 30,  117 => 25,  106 => 15,  101 => 32,  94 => 24,  89 => 24,  85 => 21,  77 => 18,  73 => 16,  71 => 27,  66 => 12,  63 => 20,  58 => 9,  52 => 13,  44 => 5,  39 => 4,  36 => 4,  356 => 110,  352 => 108,  348 => 107,  344 => 106,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 100,  314 => 94,  308 => 91,  302 => 88,  297 => 86,  289 => 85,  283 => 82,  278 => 80,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 70,  240 => 68,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 58,  202 => 56,  194 => 55,  188 => 52,  183 => 50,  175 => 49,  169 => 46,  164 => 49,  156 => 43,  150 => 40,  145 => 42,  137 => 37,  133 => 36,  127 => 33,  123 => 29,  119 => 33,  115 => 30,  111 => 30,  107 => 28,  103 => 27,  99 => 7,  95 => 25,  92 => 25,  88 => 22,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 19,  54 => 14,  51 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,);
    }
}
