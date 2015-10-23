<?php

/* ComunBundle:Buscar:consultas.html.twig */
class __TwigTemplate_af22296312b87dcf6521a01c7ae5c6252192ae6c55f44d304930fe04ffc5e7a8 extends Twig_Template
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
        echo "Buscar por Filtros";
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
            echo $context["mainMenu"]->getnavigation("consults", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"));
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $context["mainMenu"]->getnavigation("consults", "");
            echo "
    ";
        }
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "    <div id=\"main\" >
        <div id=\"filters\">
            <form name=\"consultasFrm\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("res_consultas");
        echo "\" method=\"post\">
                <div id=\"all-filters\">
                    <div id=\"state-filter\">
                        <div class=\"editor-label\">Provincia:</div>
                        <div class=\"editor-field\">
                            <select name=\"ProvinciaSlct\">
                                <option selected>--Todas las Provincias--</option>
                                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : $this->getContext($context, "provincias")));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 31
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincia"]) ? $context["provincia"] : $this->getContext($context, "provincia")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincia"]) ? $context["provincia"] : $this->getContext($context, "provincia")), "nombre"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            </select>
                        </div>
                    </div>

                    <div id=\"category-filter\">
                        <div class=\"editor-label\">Categor&iacute;a:</div>
                        <div class=\"editor-field\">
                            <select name=\"CategoriaSlct\">
                                <option selected>--Todas las Categor&iacute;as--</option>
                                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 43
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </select>
                        </div>
                    </div>

                    <div id=\"entity-filter\">
                        <div class=\"editor-label\">Entidad:</div>
                        <div class=\"editor-field\">
                            <select name=\"CentroSlct\">
                                <option selected>--Todas las Entidades--</option>
                                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centros"]) ? $context["centros"] : $this->getContext($context, "centros")));
        foreach ($context['_seq'] as $context["_key"] => $context["centro"]) {
            // line 55
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "siglas"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id=\"res-consultas\">
            <ul>
                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 67
            echo "                    <li>
                        <div class=\"prod-item\">
                            <p class=\"prod-name\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre"), "html", null, true);
            echo "</p>
                            <div class=\"prod-description\">
                                <p><span class=\"p-header\">C&oacute;digo:</span> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "codigo"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Categor&iacute;a:</span> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "categoria"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Siglas del Centro:</span> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "centro"), "siglas"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Cantidad:</span> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "cantidad"), "html", null, true);
            echo "</p>
                                <p><span class=\"p-header\">Estado:</span> ";
            // line 75
            if (($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "estado") == "O")) {
                echo " Ocioso ";
            } else {
                echo " Lenta Rotaci&oacute;n ";
            }
            echo "</p>
                            </div>
                            <div class=\"prod-buttons\">
                                <a class=\"details\" id=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('routing')->getPath("buscar_termino_detalles");
            echo "\">Detalles</a>
                                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("send_aplication_view", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id"))), "html", null, true);
            echo "\">Solicitar</a>
                            </div>
                            <div class=\"prod-image\">
                                <img src=\"";
            // line 82
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
        // line 87
        echo "            </ul>
            <div class=\"navigation\">
                ";
        // line 89
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
            <div class=\"count\">
                <p> ( ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo " productos) </p>
            </div>
            <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Consultas/details.js"), "html", null, true);
        echo "\"></script>
        </div>
        <div id=\"backLoad\">
        </div>
        <div id=\"loading\">
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/loading2.gif"), "html", null, true);
        echo "\" />
        </div>
    </div>
";
    }

    // line 104
    public function block_group2($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 106
        echo "    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_VIEWER") || $this->env->getExtension('security')->isGranted("ROLE_EDITOR")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 107
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("consults", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "role"), "group2");
            echo "
    ";
        } else {
            // line 109
            echo "        ";
            echo $context["footerMenu"]->getfooter_nav("consults", "", "group2");
            echo "
    ";
        }
    }

    // line 112
    public function block_group1($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_menu.html.twig");
        // line 114
        echo "    ";
        echo $context["footerMenu"]->getfooter_nav("", "", "group1");
        echo "
";
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/jqueryui/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Consultas/consultas.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ComunBundle:Buscar:consultas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 119,  312 => 118,  309 => 117,  302 => 114,  299 => 113,  296 => 112,  288 => 109,  282 => 107,  279 => 106,  276 => 105,  273 => 104,  265 => 99,  257 => 94,  252 => 92,  246 => 89,  242 => 87,  231 => 82,  225 => 79,  219 => 78,  209 => 75,  205 => 74,  201 => 73,  197 => 72,  193 => 71,  188 => 69,  184 => 67,  180 => 66,  169 => 57,  158 => 55,  154 => 54,  143 => 45,  132 => 43,  128 => 42,  117 => 33,  106 => 31,  102 => 30,  92 => 23,  88 => 21,  85 => 20,  77 => 16,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  56 => 8,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  34 => 3,);
    }
}
