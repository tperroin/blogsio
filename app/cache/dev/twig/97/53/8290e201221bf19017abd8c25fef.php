<?php

/* SonataAdminBundle:CRUD:list__action_view.html.twig */
class __TwigTemplate_97538290e201221bf19017abd8c25fef extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "show"), "method")) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "show", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\" class=\"btn view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  39 => 3,  22 => 2,  36 => 18,  33 => 16,  28 => 14,  52 => 20,  47 => 25,  37 => 21,  31 => 15,  29 => 4,  20 => 11,  23 => 12,  19 => 1,  640 => 211,  635 => 209,  629 => 207,  627 => 206,  621 => 202,  612 => 199,  608 => 198,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  581 => 191,  573 => 189,  570 => 188,  567 => 187,  562 => 136,  558 => 134,  549 => 131,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  521 => 125,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  477 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 109,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 138,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  370 => 177,  363 => 172,  355 => 170,  353 => 169,  350 => 168,  342 => 166,  340 => 165,  337 => 164,  331 => 163,  323 => 161,  315 => 159,  312 => 158,  307 => 157,  304 => 155,  296 => 153,  294 => 152,  291 => 151,  283 => 149,  281 => 148,  275 => 145,  272 => 144,  270 => 143,  265 => 140,  262 => 139,  259 => 81,  257 => 80,  252 => 78,  249 => 77,  246 => 76,  241 => 73,  234 => 71,  228 => 70,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 64,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 52,  174 => 51,  169 => 50,  163 => 49,  151 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 182,  86 => 181,  81 => 178,  79 => 76,  76 => 75,  74 => 60,  71 => 59,  69 => 27,  63 => 25,  60 => 24,  57 => 5,  54 => 22,  48 => 20,  43 => 4,  41 => 23,  38 => 15,  35 => 20,);
    }
}
