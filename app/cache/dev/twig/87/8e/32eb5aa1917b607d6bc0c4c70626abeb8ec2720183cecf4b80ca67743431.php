<?php

/* AdminBundle:Usuario:crear.html.twig */
class __TwigTemplate_878e32eb5aa1917b607d6bc0c4c70626abeb8ec2720183cecf4b80ca67743431 extends Twig_Template
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
        echo $context["mainMenu"]->getadmin_navigation("user");
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
        echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
        echo "\">Usuarios</a>
";
    }

    // line 17
    public function block_header_title($context, array $blocks = array())
    {
        echo " <p id=\"title\">Crear Nuevo Usuario</p> ";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"adds\">
        <div class=\"dataAdds\">
            <form id=\"UsuarioCreateForm\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_usuario_crear");
        echo "\" method=\"post\">
                ";
        // line 24
        echo "                <div class=\"summary-errors\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "pass"), 'errors');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'errors');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salt"), 'errors');
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centro"), 'errors');
        echo "
                </div>
                <div class=\"add_forms\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div ";
        // line 37
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 43
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 49
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 55
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 61
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "pass"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "pass"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "pass"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 67
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), "confirm"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 73
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 79
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salt"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salt"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salt"), 'widget');
        echo "
                        </div>
                    </div>
                    <div ";
        // line 85
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centro"), 'errors')) {
            echo " class=\"form-field error-field\" ";
        } else {
            echo " class=\"form-field\" ";
        }
        echo ">
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centro"), 'label');
        echo "
                        <div class=\"form-inputs\">
                            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centro"), 'widget');
        echo "
                        </div>
                    </div>
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>
                <input class=\"button button-bottom\" type=\"submit\" value=\"Adicionar\" />
                <a class=\"button button-bottom\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
        echo "\">Volver al listado</a>
            </form>
        </div>
    </div>
";
    }

    // line 100
    public function block_footerNav($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_admin_menu.html.twig");
        // line 102
        echo "    ";
        echo $context["footerMenu"]->getadmin_footer_nav("user", "add");
        echo "
";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/additional-methods.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 110
        echo "

    <script>
        \$.validator.addMethod('validCubanEmail', function (value, element, param) {


            var regex =/[a-z0-9!#\$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#\$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+(?:[A-Z]{2}|cu)\\b/;

            return regex.test(value); // return bool here if valid or not.
        }, 'Por favor escriba una dirección de correo Nacional(.cu)');

        \$.validator.addMethod(\"lettersSpecific\", function(value, element) {
            return this.optional(element) || /^[a-z\\sñÑáéíóú]+\$/i.test(value);
        }, \"Por favor escribe solo letras\");

        \$.validator.addMethod(\"ValidPassword\", function(value, element) {
            return this.optional(element) || /(?=.*[A-Z])(?=.*[0-9])[#@£\$-/:-?{-~!\"^_`\\[\\]a-zA-Z0-9]{8,25}/i.test(value);
//            esta expresion regular requiere una al menos mayuscula y un numero
            /*

             Requires one upper and one number 8-25 chars

             Tom Dutton
             /(?=.*[A-Z])(?=.*[0-9])[#@£\$-/:-?{-~!\"^_`\\[\\]a-zA-Z0-9]{6,25}/g
             zFiw£@tJ2!D56pqdE8T#7&7ts // Pass %%%%%%A1 // Pass 1Password // Pass password234D3232332%\$5454 // Pass aaaaa1 aaaaa1 AAAAAA…*/
        }, \"Su contraseña debe contener de entre 8 y 25 caracteres al menos una mayúscula y un número)\");




        \$('#UsuarioCreateForm').validate({

            rules: {
                'ociosos_usuariobundle_usuario[nombre]': {required: true, lettersSpecific: true},
                'ociosos_usuariobundle_usuario[apellidos]': {required: true, lettersSpecific: true},
                'ociosos_usuariobundle_usuario[email]': {required: true,validCubanEmail:true},
                'ociosos_usuariobundle_usuario[username]': {required: true, lettersonly: true},
                'ociosos_usuariobundle_usuario[password][pass]': {required: true, ValidPassword:8},
                'ociosos_usuariobundle_usuario[password][confirm]': {required: true},
                'ociosos_usuariobundle_usuario[role]': {required: true},
                'ociosos_usuariobundle_usuario[salt]': {required: true},
                'ociosos_usuariobundle_usuario[centro]': {required: true}

            },

            messages: {
                'ociosos_usuariobundle_usuario[nombre]': {
                    required: \"Este campo es obligatorio.\",
                    lettersSpecific: \"Por favor, escribe sólo letras.\"
                },
                'ociosos_usuariobundle_usuario[apellidos]': {
                    required: \"Este campo es obligatorio.\",
                    lettersSpecific: \"Por favor, escribe sólo letras.\"

                },
                'ociosos_usuariobundle_usuario[email]': {
                    required: \"Este campo es obligatorio.\",
                    email: \"Por favor, escribe una dirección de correo válida.\"
                },
                'ociosos_usuariobundle_usuario[username]': {
                    required: \"Este campo es obligatorio.\",
                    lettersonly: \"Por favor, escribe sólo letras.\"
                },
                'ociosos_usuariobundle_usuario[password][pass]': {
                    required: \"Este campo es obligatorio.\",
                    ValidPassword: \"Su contraseña debe tener al menos una mayúscula, un número y tener al menos 6 caracteres.\"

                },
                'ociosos_usuariobundle_usuario[password][confirm]': {
                    required: \"Este campo es obligatorio.\"


                },

                'ociosos_usuariobundle_usuario[role]': {
                    required: \"Este campo es obligatorio.\"

                },
                'ociosos_usuariobundle_usuario[salt]': {
                    required: \"Este campo es obligatorio.\"
                },
                'ociosos_usuariobundle_usuario[centro]': {
                    required: \"Este campo es obligatorio.\"

                }




            }


        });


    </script>";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Usuario:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 110,  352 => 108,  348 => 107,  344 => 106,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 100,  314 => 94,  308 => 91,  302 => 88,  297 => 86,  289 => 85,  283 => 82,  278 => 80,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 70,  240 => 68,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 58,  202 => 56,  194 => 55,  188 => 52,  183 => 50,  175 => 49,  169 => 46,  164 => 44,  156 => 43,  150 => 40,  145 => 38,  137 => 37,  133 => 36,  127 => 33,  123 => 32,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  92 => 24,  88 => 22,  84 => 20,  81 => 19,  75 => 17,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
