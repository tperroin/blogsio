<?php

/* SonataMediaBundle:Provider:view_image.html.twig */
class __TwigTemplate_cf1b4961ac3750df610ed90706c6ecf0 extends Twig_Template
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
        // line 11
        echo "
<img ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  74 => 31,  66 => 29,  61 => 26,  56 => 24,  50 => 22,  47 => 21,  42 => 19,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  251 => 105,  241 => 101,  233 => 98,  229 => 96,  225 => 95,  218 => 91,  212 => 88,  205 => 84,  198 => 80,  194 => 79,  184 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 66,  158 => 64,  153 => 63,  147 => 61,  145 => 60,  140 => 58,  134 => 55,  130 => 54,  124 => 51,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 32,  69 => 30,  65 => 28,  63 => 27,  57 => 24,  53 => 22,  51 => 21,  46 => 19,  38 => 17,  35 => 16,  29 => 14,);
    }
}
