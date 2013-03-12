<?php

/* SonataAdminBundle:CRUD:list__action_view.html.twig */
class __TwigTemplate_c47ada572b9ee1b8a6d9add62973a19d extends Twig_Template
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
        return array (  21 => 2,  57 => 5,  43 => 4,  39 => 3,  22 => 2,  19 => 1,  34 => 16,  31 => 15,  28 => 14,  244 => 84,  239 => 82,  233 => 80,  231 => 79,  225 => 75,  216 => 72,  212 => 71,  208 => 70,  201 => 69,  197 => 68,  192 => 66,  185 => 64,  179 => 61,  175 => 60,  167 => 58,  164 => 57,  161 => 56,  155 => 51,  152 => 50,  146 => 49,  138 => 47,  130 => 45,  127 => 44,  123 => 43,  120 => 42,  112 => 40,  104 => 38,  102 => 37,  96 => 35,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  80 => 30,  72 => 28,  64 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  44 => 18,  40 => 17,  36 => 17,  32 => 15,  29 => 4,);
    }
}
