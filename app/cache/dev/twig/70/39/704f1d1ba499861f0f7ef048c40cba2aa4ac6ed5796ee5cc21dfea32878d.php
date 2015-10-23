<?php

/* ComunBundle:Buscar:terminos.html.twig */
class __TwigTemplate_7039704f1d1ba499861f0f7ef048c40cba2aa4ac6ed5796ee5cc21dfea32878d extends Twig_Template
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
        echo "Resultados";
    }

    // line 4
    public function block_additionalCss($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/Grids.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/Pagination.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/Filters.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_menu.html.twig");
        // line 13
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "        ";
            echo $context["mainMenu"]->getnavigation("", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"));
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $context["mainMenu"]->getnavigation("", "");
            echo "
    ";
        }
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "    <div id=\"main\">
        <h1>Resultados para la palabra \"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "html", null, true);
        echo "\":</h1>
        <input type=\"hidden\" name=\"word\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "html", null, true);
        echo "\" />
        <div id=\"res-terminos\">
            <ul>
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 27
            echo "                    <li>
                        <div class=\"prod-item\">
                            <p class=\"prod-name\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</p>
                            <div class=\"prod-description\">
                                <p><span class=\"p-header\">C&oacute;digo:</span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codigo"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Categor&iacute;a:</span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "categoria"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Siglas del Centro:</span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "centro"), "siglas"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Cantidad:</span> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "cantidad"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Estado:</span> ";
            // line 35
            if (($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "estado") == "O")) {
                echo " Ocioso ";
            } else {
                echo " Lenta Rotaci&oacute;n ";
            }
            echo "</p>
                            </div>
                            <div class=\"prod-buttons\">
                                <a class=\"details\" id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('routing')->getPath("buscar_termino_detalles");
            echo "\">Detalles</a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("send_aplication_view", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"))), "html", null, true);
            echo "\">Solicitar</a>
                            </div>
                            <div class=\"prod-image\">
                                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/box2.png"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
            <div class=\"navigation\">
                ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
            <div class=\"count\">
                ";
        // line 52
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount") != 0)) {
            // line 53
            echo "                    <p> ( ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
            echo " productos) </p>
                ";
        } else {
            // line 55
            echo "                    <p id=\"not-found\"> No hay productos con esa clasificaci&oacute;n </p>
                ";
        }
        // line 57
        echo "            </div>
        </div>

        <div id=\"backLoad\">
        </div>
        <div id=\"loading\">
            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/loading2.gif"), "html", null, true);
        echo "\" />
        </div>

        ";
        // line 67
        echo "    </div>
";
    }

    // line 70
    public function block_group2($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 72
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 73
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"), "group2");
            echo "
    ";
        } else {
            // line 75
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("", "", "group2");
            echo "
    ";
        }
    }

    // line 78
    public function block_group1($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 80
        echo "    ";
        echo $context["footerMenu"]->getfooter_nav("", "", "group1");
        echo "
";
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        // line 84
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/jqueryui/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Terms/terminos.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Consultas/details.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ComunBundle:Buscar:terminos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 86,  248 => 85,  243 => 84,  240 => 83,  233 => 80,  230 => 79,  227 => 78,  219 => 75,  213 => 73,  210 => 72,  207 => 71,  204 => 70,  199 => 67,  193 => 63,  185 => 57,  181 => 55,  175 => 53,  173 => 52,  167 => 49,  163 => 47,  152 => 42,  146 => 39,  140 => 38,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  109 => 29,  105 => 27,  101 => 26,  95 => 23,  91 => 22,  88 => 21,  85 => 20,  77 => 16,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  56 => 8,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  34 => 3,);
    }
}
