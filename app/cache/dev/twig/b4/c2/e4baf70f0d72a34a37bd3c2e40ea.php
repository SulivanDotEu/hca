<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_b4c2e4baf70f0d72a34a37bd3c2e40ea extends Twig_Template
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
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
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
        return array (  83 => 30,  75 => 28,  66 => 25,  62 => 24,  26 => 3,  24 => 2,  192 => 112,  167 => 96,  143 => 78,  130 => 71,  126 => 70,  112 => 62,  108 => 61,  93 => 52,  84 => 49,  74 => 45,  46 => 14,  19 => 1,  218 => 93,  214 => 92,  210 => 91,  207 => 90,  205 => 89,  202 => 88,  198 => 76,  195 => 75,  191 => 67,  188 => 111,  174 => 51,  171 => 97,  159 => 66,  153 => 62,  151 => 50,  144 => 45,  141 => 44,  136 => 77,  133 => 75,  128 => 43,  122 => 35,  119 => 34,  113 => 14,  109 => 13,  106 => 12,  103 => 59,  97 => 9,  91 => 35,  89 => 51,  78 => 46,  76 => 43,  69 => 38,  67 => 34,  59 => 28,  57 => 27,  44 => 16,  37 => 17,  28 => 2,  70 => 26,  64 => 19,  61 => 18,  53 => 13,  50 => 15,  45 => 8,  42 => 12,  35 => 4,  32 => 6,  161 => 68,  154 => 70,  150 => 68,  147 => 79,  138 => 76,  131 => 44,  127 => 55,  123 => 53,  121 => 68,  114 => 47,  110 => 45,  101 => 43,  96 => 42,  94 => 41,  86 => 36,  79 => 29,  72 => 28,  65 => 24,  58 => 20,  51 => 16,  43 => 10,  40 => 9,  33 => 5,  30 => 5,);
    }
}
