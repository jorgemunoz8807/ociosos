<?php

/* ComunBundle:Default:portada.html.twig */
class __TwigTemplate_dcd05229cc787fbfa4ac21299ff9c4bfc4c1c62758779bf3ef70a0b61d690fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'separador' => array($this, 'block_separador'),
            'nav' => array($this, 'block_nav'),
            'banner' => array($this, 'block_banner'),
            'main' => array($this, 'block_main'),
            'group2' => array($this, 'block_group2'),
            'group1' => array($this, 'block_group1'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 5
    public function block_separador($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_menu.html.twig");
        // line 9
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 10
            echo "        ";
            echo $context["mainMenu"]->getnavigation("home", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"));
            echo "
    ";
        } else {
            // line 12
            echo "        ";
            echo $context["mainMenu"]->getnavigation("home", "");
            echo "
    ";
        }
    }

    // line 17
    public function block_banner($context, array $blocks = array())
    {
        echo " 
";
        // line 19
        echo "    ";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"main\">
    <p class=\"static-text\">
        Sistema para la Administración y Control de los Inventarios de
        productos ociosos y de lenta rotación de las entidades del
        Ministerio de Ciencia, Tecnología y Medio Ambiente. <br />
        Esta aplicación tiene como objetivo contribuir a una más rápida
        identificación de aquellos productos que siendo ociosos y de
        lento movimiento para algunas entidades son necesarios o
        deficitarios en otras.
    </p>
</div>
";
    }

    // line 38
    public function block_group2($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 40
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("home", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"), "group2");
            echo "
    ";
        } else {
            // line 43
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("home", "", "group2");
            echo "
    ";
        }
    }

    // line 46
    public function block_group1($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 48
        echo "    ";
        echo $context["footerMenu"]->getfooter_nav("", "", "group1");
        echo "
";
    }

    public function getTemplateName()
    {
        return "ComunBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  122 => 47,  119 => 46,  111 => 43,  105 => 41,  102 => 40,  99 => 39,  96 => 38,  81 => 25,  78 => 24,  74 => 19,  69 => 17,  61 => 12,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  40 => 5,  34 => 4,);
    }
}
