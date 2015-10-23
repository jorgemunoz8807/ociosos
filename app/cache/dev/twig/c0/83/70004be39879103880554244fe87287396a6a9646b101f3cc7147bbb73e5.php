<?php

/* ComunBundle:Email:emailSolicitud.html.twig */
class __TwigTemplate_c08370004be39879103880554244fe87287396a6a9646b101f3cc7147bbb73e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/css/emailAplication.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div id=\"contact\">
    <h2>Solicitud del Producto <br>
        Nombre:";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "   Código:";
        echo twig_escape_filter($this->env, (isset($context["codigo"]) ? $context["codigo"] : $this->getContext($context, "codigo")), "html", null, true);
        echo " </h2>
    <div  id=\"contact-cont\" >
        <form id=\"formAplicationemail\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("send_aplication_email");
        echo "\" method=\"post\" >
            <div class=\"editor-full\">
                <div class=\"editor-field\">
                    <input type=\"text\"  id=\"nombre\" name=\"txtName\" placeholder=\"Su Nombre...\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"editor-full\">
                <div class=\"editor-field\">
                  ";
        // line 24
        echo " <input type=\"email\" id=\"email\" name=\"txtEmail\" placeholder=\"Su Correo...\" />
                </div>
            </div>
            <div class=\"editor-full\">
                <div class=\"editor-field\">
                      <textarea id=\"mensaje\" placeholder=\"Descripción de la solicitud...\" name=\"txtMessage\"></textarea>
                </div>
            </div>
            <div class=\"editor-full\">
                <input id=\"send_mail\" name=\"send_mail\" type=\"submit\" value=\"Enviar\" />
            </div>
        </form>
    </div>
</div>



";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            ";
        // line 46
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/js/Email/emailAplication.js"), "html", null, true);
        echo "\"></script>


        ";
    }

    public function getTemplateName()
    {
        return "ComunBundle:Email:emailSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  105 => 44,  102 => 43,  97 => 42,  76 => 24,  68 => 19,  61 => 15,  54 => 13,  48 => 10,  45 => 9,  39 => 6,  34 => 5,  31 => 4,);
    }
}
