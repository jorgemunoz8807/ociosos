<?php

/* AdminBundle:Centro:index.html.twig */
class __TwigTemplate_ed4ef792ded1670c793974650a2102d8af3eb66d6a440574c1bf0506a3c64449 extends Twig_Template
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/grids.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/Pagination.css"), "html", null, true);
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
        echo " &raquo; <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_portada");
        echo "\">Administraci&oacute;n</a> ";
    }

    // line 14
    public function block_header_title($context, array $blocks = array())
    {
        echo " <p id=\"title\">Centros</p> ";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 17
        echo "

<div class=\"grid\">
    <div class=\"dataGrid\">
        <div class=\"button-container\">
            <a class=\"button\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_centro_crear");
        echo "\">Nuevo Centro</a>
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/images/add2.png"), "html", null, true);
        echo "\" />
        </div>
        
        <table>
            <thead>
            <tr>
                <th>Siglas</th>
                <th>Nombre del Centro</th>
                <th>Email</th>
                <th>Organizaci&oacute;n a que pertenece</th>
                <th>Municipio</th>
                <th>Operaciones</th>
            </tr>

            </thead>
            <tbody>
            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["centro"]) {
            // line 40
            echo "                <tr>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "siglas"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "nombre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "email"), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "organizacion"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "municipio"), "html", null, true);
            echo "</td>
                    <td class=\"operations\">

                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_centro_detalles", array("id" => $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "id"))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/ociosos/web/bundles/admin/images/magnifier.png"), "html", null, true);
            echo "\" alt=\"Detalles\" title=\"Detalles\"><img/></a> &nbsp;</a> &nbsp;
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_centro_editar", array("id" => $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "id"))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/ociosos/web/bundles/admin/images/edit.png"), "html", null, true);
            echo "\" alt=\"Editar\" title=\"Editar\"><img/></a> &nbsp;
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_centro_eliminar", array("id" => $this->getAttribute((isset($context["centro"]) ? $context["centro"] : $this->getContext($context, "centro")), "id"))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/ociosos/web/bundles/admin/images/delete.png"), "html", null, true);
            echo "\" alt=\"Eliminar\" title=\"Eliminar\"><img/></a> &nbsp;</a> &nbsp;</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>
        <div class=\"navigation\">
            ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
        <div class=\"count\">
            <p> ( ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo " centros) </p>
        </div>
        ";
        // line 66
        echo "    </div>
</div>


";
    }

    // line 72
    public function block_footerNav($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["footerMenu"] = $this->env->loadTemplate("::footer_admin_menu.html.twig");
        // line 74
        echo "    ";
        echo $context["footerMenu"]->getadmin_footer_nav("entity", "list");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Centro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 74,  193 => 73,  190 => 72,  182 => 66,  177 => 63,  171 => 60,  166 => 57,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  111 => 40,  107 => 39,  88 => 23,  84 => 22,  77 => 17,  74 => 16,  68 => 14,  60 => 13,  53 => 10,  50 => 9,  47 => 8,  41 => 5,  36 => 4,  33 => 3,);
    }
}
