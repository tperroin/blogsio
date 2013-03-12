<?php

/* SonataMediaBundle:Provider:thumbnail.html.twig */
class __TwigTemplate_fc414272d8fe0b07189cecff5a43f30f extends Twig_Template
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
        return "SonataMediaBundle:Provider:thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  34 => 16,  31 => 15,  28 => 14,  244 => 84,  239 => 82,  233 => 80,  231 => 79,  225 => 75,  216 => 72,  212 => 71,  208 => 70,  201 => 69,  197 => 68,  192 => 66,  185 => 64,  179 => 61,  175 => 60,  167 => 58,  164 => 57,  161 => 56,  155 => 51,  152 => 50,  146 => 49,  138 => 47,  130 => 45,  127 => 44,  123 => 43,  120 => 42,  112 => 40,  104 => 38,  102 => 37,  96 => 35,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  80 => 30,  72 => 28,  64 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  44 => 18,  40 => 17,  36 => 17,  32 => 15,  29 => 14,);
    }
}
