<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_32bae7778ca06e4de032df03e7efbb12 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  91 => 20,  84 => 19,  44 => 10,  25 => 5,  28 => 3,  24 => 3,  19 => 1,  94 => 39,  88 => 6,  79 => 39,  59 => 22,  31 => 5,  26 => 3,  21 => 2,  70 => 14,  63 => 9,  46 => 11,  22 => 2,  163 => 32,  155 => 50,  152 => 49,  149 => 48,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 33,  96 => 31,  83 => 25,  80 => 24,  74 => 16,  66 => 15,  55 => 13,  52 => 15,  50 => 14,  43 => 7,  41 => 9,  37 => 8,  35 => 4,  32 => 9,  29 => 4,  184 => 70,  178 => 66,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 53,  143 => 48,  138 => 45,  136 => 44,  133 => 43,  130 => 42,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 32,  95 => 28,  92 => 29,  89 => 26,  85 => 24,  81 => 40,  73 => 19,  64 => 19,  60 => 8,  57 => 14,  54 => 6,  51 => 12,  48 => 14,  45 => 8,  42 => 12,  39 => 8,  36 => 7,  33 => 7,  30 => 3,);
    }
}