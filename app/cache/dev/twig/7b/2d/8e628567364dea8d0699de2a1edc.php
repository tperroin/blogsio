<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_7b2d8e628567364dea8d0699de2a1edc extends Twig_Template
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
        echo "<td class=\"sonata-ba-list-field sonata-ba-list-field-action\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "actions"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 3
            echo "        ";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "actions"), "template"));
            $template->display($context);
            // line 4
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  43 => 4,  39 => 3,  22 => 2,  19 => 1,  34 => 16,  31 => 15,  28 => 14,  244 => 84,  239 => 82,  233 => 80,  231 => 79,  225 => 75,  216 => 72,  212 => 71,  208 => 70,  201 => 69,  197 => 68,  192 => 66,  185 => 64,  179 => 61,  175 => 60,  167 => 58,  164 => 57,  161 => 56,  155 => 51,  152 => 50,  146 => 49,  138 => 47,  130 => 45,  127 => 44,  123 => 43,  120 => 42,  112 => 40,  104 => 38,  102 => 37,  96 => 35,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  80 => 30,  72 => 28,  64 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  44 => 18,  40 => 17,  36 => 17,  32 => 15,  29 => 14,);
    }
}
