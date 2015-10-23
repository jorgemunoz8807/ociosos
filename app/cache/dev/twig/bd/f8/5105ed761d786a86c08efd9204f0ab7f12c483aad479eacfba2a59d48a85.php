<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_bdf85105ed761d786a86c08efd9204f0ab7f12c483aad479eacfba2a59d48a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
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
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["mainMenu"] = $this->env->loadTemplate("::main_admin_menu.html.twig");
        // line 5
        echo "    ";
        echo $context["mainMenu"]->getadmin_navigation("admin");
        echo "
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    <div  id=\"main_area\">
        <p id=\"main_subtitle\">Módulo de administración, tendrá la capacidad de insertar, modificar o eliminar los nomencladores asociados a la aplicación.</p>

        <ul>
            <li>
                <div id=\"stoke_area\" class=\"areas\">
                    <p class=\"area_title\">Almacenes</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"Stoke Icon\" title=\"Stoke Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_almacen_index");
        echo "\">Almacenes</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar los almacenes donde se encuentran ubicados los productos.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"category_area\" class=\"areas\">
                    <p class=\"area_title\">Categor&iacute;as</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"Category Icon\" title=\"Category Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
        echo "\">Categor&iacute;as</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar las Categor&iacute;as</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"entity_area\" class=\"areas\">
                    <p class=\"area_title\">Centros</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"Entity Icon\" title=\"Entity Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_centro_index");
        echo "\">Centros del Citma</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar los Centros.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"state_area\" class=\"areas\">
                    <p class=\"area_title\">Municipios</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"State Icon\" title=\"State Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
        echo "\">Municipios</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar los Municipios.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"organization_area\" class=\"areas\">
                    <p class=\"area_title\">Organizaciones</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"Organization Icon\" title=\"Organization Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
        echo "\">Organizaciones</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar las Organizaciones.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"product_area\" class=\"areas\">
                    <p class=\"area_title\">Productos</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"Product Icon\" title=\"Product Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("admin_producto_index");
        echo "\">Productos</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar los Productos.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"city_area\" class=\"areas\">
                    <p class=\"area_title\">Provincias</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"City Icon\" title=\"City Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
        echo "\">Provincias</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar las Provincias.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id=\"user_area\" class=\"areas\">
                    <p class=\"area_title\">Usuarios</p>
                    <div class=\"body_area\">
                        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/configuration.png"), "html", null, true);
        echo "\" alt=\"User Icon\" title=\"User Icon\"/>
                        <div class=\"description\">
                            <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
        echo "\">Usuarios</a>
                            <p class=\"subtitle\">M&oacute;dulo para listar, adicionar, modificar o eliminar los Usuarios.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
";
    }

    // line 113
    public function block_footerNav($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_admin_menu.html.twig");
        // line 115
        echo "    ";
        echo $context["footerMenu"]->getadmin_footer_nav("", "");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 115,  203 => 114,  200 => 113,  187 => 103,  182 => 101,  169 => 91,  164 => 89,  151 => 79,  146 => 77,  133 => 67,  128 => 65,  115 => 55,  110 => 53,  97 => 43,  92 => 41,  79 => 31,  74 => 29,  61 => 19,  56 => 17,  46 => 9,  43 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
