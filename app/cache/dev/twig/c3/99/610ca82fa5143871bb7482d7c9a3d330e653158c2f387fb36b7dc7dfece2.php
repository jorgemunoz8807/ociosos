<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c399610ca82fa5143871bb7482d7c9a3d330e653158c2f387fb36b7dc7dfece2 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  32 => 6,  24 => 2,  293 => 90,  287 => 88,  281 => 86,  278 => 85,  266 => 81,  260 => 79,  245 => 74,  232 => 69,  230 => 68,  226 => 66,  220 => 64,  214 => 62,  211 => 61,  205 => 59,  199 => 57,  196 => 56,  190 => 54,  184 => 52,  181 => 51,  169 => 47,  166 => 46,  163 => 45,  151 => 41,  142 => 38,  133 => 35,  127 => 33,  121 => 31,  118 => 30,  106 => 26,  97 => 23,  85 => 19,  79 => 29,  70 => 26,  64 => 12,  58 => 10,  37 => 3,  272 => 83,  268 => 87,  262 => 85,  256 => 83,  254 => 82,  251 => 76,  244 => 78,  242 => 73,  240 => 76,  238 => 75,  234 => 70,  228 => 67,  222 => 69,  219 => 68,  213 => 66,  207 => 64,  204 => 63,  198 => 61,  192 => 59,  183 => 56,  177 => 54,  175 => 49,  172 => 52,  168 => 50,  162 => 48,  156 => 46,  147 => 43,  141 => 41,  132 => 38,  126 => 36,  123 => 35,  117 => 33,  108 => 30,  87 => 22,  75 => 28,  72 => 17,  66 => 25,  60 => 13,  51 => 10,  38 => 5,  30 => 5,  26 => 3,  21 => 1,  19 => 1,  274 => 115,  267 => 111,  263 => 80,  257 => 78,  252 => 106,  250 => 105,  247 => 104,  241 => 47,  236 => 71,  229 => 97,  215 => 84,  206 => 76,  203 => 75,  195 => 68,  189 => 58,  178 => 54,  170 => 48,  167 => 47,  157 => 43,  148 => 40,  144 => 33,  140 => 32,  120 => 20,  112 => 28,  107 => 6,  91 => 35,  76 => 101,  53 => 11,  48 => 10,  45 => 8,  43 => 5,  35 => 6,  29 => 1,  165 => 46,  159 => 41,  153 => 45,  146 => 25,  143 => 24,  138 => 40,  136 => 36,  130 => 62,  128 => 22,  124 => 59,  115 => 8,  103 => 25,  101 => 45,  94 => 25,  92 => 40,  88 => 20,  83 => 30,  73 => 15,  71 => 20,  62 => 24,  57 => 12,  50 => 15,  47 => 10,  41 => 6,  36 => 5,  33 => 2,  125 => 21,  122 => 58,  119 => 46,  111 => 31,  105 => 47,  102 => 28,  99 => 39,  96 => 26,  81 => 20,  78 => 24,  74 => 19,  69 => 17,  61 => 14,  55 => 9,  52 => 9,  49 => 7,  46 => 14,  40 => 4,  34 => 2,);
    }
}
