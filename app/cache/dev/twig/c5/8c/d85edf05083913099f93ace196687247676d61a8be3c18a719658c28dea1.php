<?php

/* ComunBundle:Email:messageSolicitud.html.twig */
class __TwigTemplate_c58cd85edf05083913099f93ace196687247676d61a8be3c18a719658c28dea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2> aplicación web Ociosos v2.0</h2>

<b>Informacion del usuario que realizó la  solicitud:</b>

<p> <b> Nombre:</b> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>

<p> <b>Correo:</b> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " </p>

<b>Información del producto que se ha solicitado:<b>

        Nombre:";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "
        Codigo:";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["codigo"]) ? $context["codigo"] : $this->getContext($context, "codigo")), "html", null, true);
        echo "

<b> Mensaje del solicitante:</b>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "ComunBundle:Email:messageSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  41 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }
}
