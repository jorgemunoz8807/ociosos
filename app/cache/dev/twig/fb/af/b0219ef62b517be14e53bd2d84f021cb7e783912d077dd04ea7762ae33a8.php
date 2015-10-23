<?php

/* AdminBundle:Centro:crear.html.twig */
class __TwigTemplate_fbafb0219ef62b517be14e53bd2d84f021cb7e783912d077dd04ea7762ae33a8 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/Forms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/Errors.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_nav($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_admin_menu.html.twig");
        // line 10
        echo "    ";
        echo $context["mainMenu"]->getadmin_navigation("entity");
        echo "
";
    }

    // line 13
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 14
        echo "    &raquo; <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_portada");
        echo "\">Administraci&oacute;n</a>
    &raquo; <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_centro_index");
        echo "\">Centros</a>
";
    }

    // line 17
    public function block_header_title($context, array $blocks = array())
    {
        echo " <p id=\"title\">Crear Nuevo Centro</p> ";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"adds\">
        <div class=\"dataAdds\">
            <form id=\"CentroCreateForm\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_centro_crear");
        echo "\" method=\"post\">
                ";
        // line 25
        echo "                <div class=\"summary-errors\">
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'errors');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'errors');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'errors');
        echo "
                </div>
                <div class=\"add_forms\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div ";
        // line 38
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 44
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siglas"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 50
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 56
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 62
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 68
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "director"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 74
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rEEUP"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 80
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organizacion"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 86
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>
                <input class=\"button button-bottom\" type=\"submit\" value=\"Adicionar\"/>
                <a class=\"button button-bottom\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("admin_centro_index");
        echo "\">Volver al listado</a>
            </form>
        </div>

    </div>


";
    }

    // line 104
    public function block_footerNav($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_admin_menu.html.twig");
        // line 106
        echo "    ";
        echo $context["footerMenu"]->getadmin_footer_nav("entity", "add");
        echo "
";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        // line 109
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/additional-methods.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 114
        echo "

    <script>

        \$.validator.addMethod('validCubanEmail', function (value, element, param) {
                   var regex =/[a-z0-9!#\$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#\$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+(?:[A-Z]{2}|cu)\\b/;
            return regex.test(value); // return bool here if valid or not.
        }, 'Por favor escriba una dirección de correo Nacional(.cu)');

        \$.validator.addMethod(\"lettersSpecific\", function(value, element) {
            return this.optional(element) || /^[a-z\\sñÑáéíóú]+\$/i.test(value);
        }, \"Por favor, escribe sólo letras\");

        \$('#CentroCreateForm').validate({




            rules: {
                'ociosos_comunbundle_centro[nombre]': {required: true, lettersSpecific: true},
                'ociosos_comunbundle_centro[siglas]': {required: true, lettersSpecific: true},
                'ociosos_comunbundle_centro[direccion]': {required: true},
                'ociosos_comunbundle_centro[telefono]': {required: true, minlength:8},
                'ociosos_comunbundle_centro[email]':{required:true,validCubanEmail:true },
                'ociosos_comunbundle_centro[director]': {required: true, lettersSpecific: true},
                'ociosos_comunbundle_centro[rEEUP]': {required: true},
                'ociosos_comunbundle_centro[organizacion]': {required: true},
                'ociosos_comunbundle_centro[municipio]': {required: true}


            },

            messages: {
                'ociosos_comunbundle_centro[nombre]': {
                    required: \"Este campo es obligatorio.\"

                },
                'ociosos_comunbundle_centro[siglas]': {
                    required: \"Este campo es obligatorio.\"

                },
                'ociosos_comunbundle_centro[direccion]': {
                    required: \"Este campo es obligatorio.\"
                },
                'ociosos_comunbundle_centro[telefono]': {
                    required: \"Este campo es obligatorio.\",
                    minlength: \"Su teléfono debe tener al menos 8 dígitos.\"
                },
                'ociosos_comunbundle_centro[email]': {
                    required: \"Este campo es obligatorio.\",
                    email:\"por favor escriba una direccion de correo válida \"

                },
                'ociosos_comunbundle_centro[director]': {
                    required: \"Este campo es obligatorio.\"


                },
                'ociosos_comunbundle_centro[rEEUP]': {
                    required: \"Este campo es obligatorio.\"

                },
                'ociosos_comunbundle_centro[organizacion]': {
                    required: \"Este campo es obligatorio.\"

                },
                'ociosos_comunbundle_centro[municipio]': {
                    required: \"Este campo es obligatorio.\"

                }


            }


        });


    </script>


";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Centro:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 114,  356 => 112,  352 => 111,  348 => 110,  343 => 109,  340 => 108,  333 => 106,  330 => 105,  327 => 104,  315 => 95,  309 => 92,  303 => 89,  298 => 87,  290 => 86,  284 => 83,  279 => 81,  271 => 80,  265 => 77,  260 => 75,  252 => 74,  246 => 71,  241 => 69,  233 => 68,  227 => 65,  222 => 63,  214 => 62,  208 => 59,  203 => 57,  195 => 56,  189 => 53,  184 => 51,  176 => 50,  170 => 47,  165 => 45,  157 => 44,  151 => 41,  146 => 39,  138 => 38,  134 => 37,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  89 => 23,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
