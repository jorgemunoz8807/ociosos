<?php

/* UsuarioBundle:Usuario:login.html.twig */
class __TwigTemplate_55ac001a6e05fb40493cd7c070335b7f548866e3f15f1104d3ca3727617395d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additionalCss' => array($this, 'block_additionalCss'),
            'nav' => array($this, 'block_nav'),
            'main' => array($this, 'block_main'),
            'group2' => array($this, 'block_group2'),
            'group1' => array($this, 'block_group1'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de Acceso";
    }

    // line 5
    public function block_additionalCss($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/editor/css/Forms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 9
    public function block_nav($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_menu.html.twig");
        // line 11
        echo "    ";
        echo $context["mainMenu"]->getnavigation("");
        echo "
";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "<div id=\"main\">   
    <h1>Por favor autent&iacute;quese</h1>
    ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " 
        <div class=\"validation-summary-errors\">
            <p>";
            // line 19
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array("Bad credentials" => "Inválido nombre de usuario/contraseña.")), "html", null, true);
            // line 21
            echo "
            </p>
        </div>
    ";
        }
        // line 25
        echo "
    <div class=\"login>\">
        <form id=\"formLogin\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
            <div class=\"editor-label\">
                <label for=\"Login\">Usuario</label>
            </div>
            <div class=\"form-inputs-front\">
                <input ";
        // line 32
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " class=\"input-validation-error\" ";
        } else {
            echo " ";
        }
        // line 33
        echo "                        id=\"username\" name=\"_username\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" />
            </div>
            <div class=\"editor-label\">
                <label for=\"Pass\">Contrase&#241;a</label>
            </div>
            <div class=\"form-inputs-front\">
                <input ";
        // line 39
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " class=\"input-validation-error\" ";
        } else {
            echo " ";
        }
        // line 40
        echo "                        name=\"_password\" type=\"password\" value=\"\" />
            </div>
            <p><input type=\"submit\" value=\"Acceder\" name=\"login\" /></p>
        </form>
    </div>

</div>
";
    }

    // line 48
    public function block_group2($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 50
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 51
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"), "group2");
            echo "
    ";
        } else {
            // line 53
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("", "", "group2");
            echo "
    ";
        }
    }

    // line 56
    public function block_group1($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 58
        echo "    ";
        echo $context["footerMenu"]->getfooter_nav("", "", "group1");
        echo "
";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-validate/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script >

//        \$(\"#formLogin\").validate({
//            rules: {
////                firstname: \"required\",
////                lastname: \"required\",
//                username: {
//                    required: true,
//                    minlength: 8
//                }
////                password: {
////                    required: true,
////                    minlength: 5
////                },
////                confirm_password: {
////                    required: true,
////                    minlength: 5,
////                    equalTo: \"#password\"
////                },
////                email: {
////                    required: true,
////                    email: true
////                },
////                topic: {
////                    required: \"#newsletter:checked\",
////                    minlength: 2
////                },
////                agree: \"required\"
//            },
//            messages: {
////                firstname: \"Please enter your firstname\",
////                lastname: \"Please enter your lastname\",
//                username: {
//                    required: \"Please enter a username\",
//                    minlength: \"Your username must consist of at least 8 characters\"
//                }
////                password: {
////                    required: \"Please provide a password\",
////                    minlength: \"Your password must be at least 5 characters long\"
////                },
////                confirm_password: {
////                    required: \"Please provide a password\",
////                    minlength: \"Your password must be at least 5 characters long\",
////                    equalTo: \"Please enter the same password as above\"
////                },
////                email: \"Please enter a valid email address\",
////                agree: \"Please accept our policy\"
//            }
//        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 63,  171 => 62,  167 => 61,  164 => 60,  157 => 58,  154 => 57,  151 => 56,  143 => 53,  137 => 51,  134 => 50,  131 => 49,  128 => 48,  117 => 40,  111 => 39,  101 => 33,  95 => 32,  87 => 27,  83 => 25,  77 => 21,  75 => 19,  70 => 17,  66 => 15,  63 => 14,  56 => 11,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  34 => 3,);
    }
}
