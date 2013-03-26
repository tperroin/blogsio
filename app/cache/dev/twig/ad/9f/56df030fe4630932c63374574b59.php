<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_ad9f56df030fe4630932c63374574b59 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  24 => 2,  19 => 1,  46 => 9,  20 => 1,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  659 => 204,  656 => 203,  654 => 202,  651 => 201,  645 => 199,  643 => 198,  640 => 197,  634 => 195,  632 => 194,  629 => 193,  623 => 191,  621 => 190,  618 => 189,  612 => 187,  610 => 186,  607 => 185,  604 => 184,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  575 => 149,  570 => 148,  567 => 147,  562 => 146,  559 => 145,  553 => 111,  549 => 110,  546 => 109,  538 => 106,  532 => 105,  524 => 103,  521 => 102,  517 => 101,  512 => 99,  509 => 98,  504 => 97,  501 => 96,  498 => 95,  492 => 94,  485 => 88,  479 => 87,  474 => 86,  471 => 85,  465 => 49,  461 => 48,  457 => 47,  453 => 46,  448 => 44,  443 => 42,  439 => 41,  434 => 40,  431 => 39,  425 => 36,  421 => 35,  415 => 32,  411 => 31,  406 => 29,  403 => 28,  400 => 27,  393 => 222,  391 => 217,  384 => 212,  382 => 184,  378 => 183,  375 => 182,  369 => 179,  366 => 178,  364 => 177,  360 => 175,  355 => 172,  352 => 171,  338 => 170,  332 => 168,  329 => 167,  311 => 166,  305 => 164,  303 => 163,  299 => 161,  297 => 160,  293 => 158,  291 => 157,  287 => 155,  285 => 145,  282 => 144,  278 => 142,  272 => 140,  269 => 139,  266 => 138,  252 => 137,  246 => 135,  241 => 132,  235 => 130,  227 => 128,  225 => 127,  222 => 126,  219 => 125,  201 => 124,  198 => 123,  196 => 122,  193 => 121,  191 => 120,  184 => 115,  179 => 112,  176 => 111,  173 => 95,  171 => 94,  166 => 91,  164 => 85,  157 => 83,  155 => 82,  143 => 72,  137 => 70,  133 => 68,  130 => 67,  127 => 66,  110 => 64,  106 => 62,  103 => 61,  86 => 60,  83 => 59,  80 => 58,  74 => 56,  72 => 55,  67 => 53,  61 => 39,  58 => 38,  56 => 27,  47 => 20,  43 => 8,  41 => 17,  35 => 7,  33 => 13,  31 => 6,  84 => 35,  76 => 30,  63 => 51,  55 => 15,  49 => 12,  45 => 19,  39 => 16,  37 => 6,  32 => 5,  29 => 3,  26 => 3,);
    }
}
