<?php

/* ComunBundle::captcha.html.twig */
class __TwigTemplate_8b47949833b0c6401c8f1e185048676595f2a9d6d03e81b39e14de49510438b0 extends Twig_Template
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
        // line 3
        echo "<img class=\"captcha-image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/comun/images/captcha.png"), "html", null, true);
        echo ".'?'.";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/y/h:m:s"), "html", null, true);
        echo "\" width=\"132\" height=\"46\" alt=\"Captcha image\">";
    }

    public function getTemplateName()
    {
        return "ComunBundle::captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 90,  287 => 88,  281 => 86,  278 => 85,  266 => 81,  260 => 79,  245 => 74,  232 => 69,  230 => 68,  226 => 66,  220 => 64,  214 => 62,  211 => 61,  205 => 59,  199 => 57,  196 => 56,  190 => 54,  184 => 52,  181 => 51,  169 => 47,  166 => 46,  163 => 45,  151 => 41,  142 => 38,  133 => 35,  127 => 33,  121 => 31,  118 => 30,  106 => 26,  97 => 23,  85 => 19,  79 => 17,  70 => 14,  64 => 12,  58 => 10,  37 => 3,  272 => 83,  268 => 87,  262 => 85,  256 => 83,  254 => 82,  251 => 76,  244 => 78,  242 => 73,  240 => 76,  238 => 75,  234 => 70,  228 => 67,  222 => 69,  219 => 68,  213 => 66,  207 => 64,  204 => 63,  198 => 61,  192 => 59,  183 => 56,  177 => 54,  175 => 49,  172 => 52,  168 => 50,  162 => 48,  156 => 46,  147 => 43,  141 => 41,  132 => 38,  126 => 36,  123 => 35,  117 => 33,  108 => 30,  87 => 22,  75 => 18,  72 => 17,  66 => 15,  60 => 13,  51 => 10,  38 => 5,  30 => 4,  26 => 3,  21 => 1,  19 => 3,  274 => 115,  267 => 111,  263 => 80,  257 => 78,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 71,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 58,  178 => 54,  170 => 48,  167 => 47,  157 => 43,  148 => 40,  144 => 33,  140 => 32,  120 => 20,  112 => 28,  107 => 6,  91 => 21,  76 => 101,  53 => 11,  48 => 10,  45 => 8,  43 => 5,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 45,  146 => 25,  143 => 24,  138 => 40,  136 => 36,  130 => 62,  128 => 22,  124 => 59,  115 => 8,  103 => 25,  101 => 45,  94 => 25,  92 => 40,  88 => 20,  83 => 120,  73 => 15,  71 => 20,  62 => 18,  57 => 12,  50 => 11,  47 => 10,  41 => 6,  36 => 5,  33 => 2,  125 => 21,  122 => 58,  119 => 46,  111 => 31,  105 => 47,  102 => 28,  99 => 39,  96 => 26,  81 => 20,  78 => 24,  74 => 19,  69 => 17,  61 => 14,  55 => 9,  52 => 9,  49 => 7,  46 => 7,  40 => 4,  34 => 2,);
    }
}
