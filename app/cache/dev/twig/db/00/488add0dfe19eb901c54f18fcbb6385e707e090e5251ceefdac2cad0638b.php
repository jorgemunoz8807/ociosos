<?php

/* AdminBundle:Centro:editar.html.twig */
class __TwigTemplate_db00488add0dfe19eb901c54f18fcbb6385e707e090e5251ceefdac2cad0638b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'additional_style' => array($this, 'block_additional_style'),
            'nav' => array($this, 'block_nav'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'header_title' => array($this, 'block_header_title'),
            'main' => array($this, 'block_main'),
            'footerNav' => array($this, 'block_footerNav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_additional_style($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/Forms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/Errors.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 9
    public function block_nav($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_admin_menu.html.twig");
        // line 11
        echo "    ";
        echo $context["mainMenu"]->getadmin_navigation("entity");
        echo "
";
    }

    // line 14
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 15
        echo "    &raquo; <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_portada");
        echo "\">Administraci&oacute;n</a>
    &raquo; <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_centro_index");
        echo "\">Centros</a>
";
    }

    // line 18
    public function block_header_title($context, array $blocks = array())
    {
        echo " <p id=\"title\">Editar Centro</p> ";
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "
    <div class=\"adds\">
        <div class=\"dataAdds\">
            <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_centro_editar", array("id" => $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 26
        echo "                <div class=\"summary-errors\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'errors');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'errors');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'errors');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'errors');
        echo "
                </div>
                <div class=\"add_forms\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div ";
        // line 39
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 45
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 51
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 57
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 63
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 69
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 75
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 81
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 87
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>
                <input class=\"button button-bottom\" type=\"submit\" value=\"Modificar\" />
                <a class=\"button button-bottom\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("admin_centro_index");
        echo "\">Volver al listado</a>
            </form>
        </div>

    </div>


";
    }

    // line 105
    public function block_footerNav($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_admin_menu.html.twig");
        // line 107
        echo "    ";
        echo $context["footerMenu"]->getadmin_footer_nav("entity", "edit");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Centro:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 107,  331 => 106,  328 => 105,  316 => 96,  310 => 93,  304 => 90,  299 => 88,  291 => 87,  285 => 84,  280 => 82,  272 => 81,  266 => 78,  261 => 76,  253 => 75,  247 => 72,  242 => 70,  234 => 69,  228 => 66,  223 => 64,  215 => 63,  209 => 60,  204 => 58,  196 => 57,  190 => 54,  185 => 52,  177 => 51,  171 => 48,  166 => 46,  158 => 45,  152 => 42,  147 => 40,  139 => 39,  135 => 38,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 24,  85 => 21,  82 => 20,  76 => 18,  70 => 16,  65 => 15,  62 => 14,  55 => 11,  52 => 10,  49 => 9,  43 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
