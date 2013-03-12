<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_30961e0136bde45d89dd59f47235a826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, $this->getContext($context, "read_only_choices")) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "read_only_choices"));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "choice"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  50 => 11,  35 => 5,  28 => 3,  26 => 2,  79 => 22,  54 => 12,  48 => 11,  357 => 107,  351 => 104,  345 => 102,  342 => 101,  336 => 99,  333 => 98,  327 => 96,  324 => 95,  318 => 93,  315 => 92,  309 => 90,  306 => 89,  300 => 87,  297 => 86,  291 => 84,  288 => 83,  282 => 81,  279 => 80,  273 => 78,  270 => 77,  264 => 75,  261 => 74,  255 => 72,  249 => 70,  246 => 69,  240 => 67,  234 => 65,  231 => 64,  225 => 62,  219 => 60,  217 => 59,  214 => 58,  208 => 56,  202 => 54,  199 => 53,  193 => 51,  187 => 49,  184 => 48,  178 => 46,  172 => 44,  169 => 43,  163 => 41,  160 => 40,  145 => 35,  142 => 34,  136 => 32,  133 => 31,  127 => 29,  124 => 28,  116 => 25,  111 => 24,  97 => 23,  94 => 22,  88 => 20,  86 => 19,  56 => 16,  42 => 8,  31 => 4,  25 => 3,  20 => 1,  96 => 43,  91 => 21,  85 => 38,  81 => 37,  66 => 20,  55 => 26,  51 => 13,  47 => 11,  40 => 7,  36 => 19,  32 => 18,  27 => 16,  22 => 2,  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,  171 => 66,  165 => 63,  162 => 62,  159 => 61,  156 => 57,  154 => 38,  151 => 37,  149 => 54,  144 => 51,  141 => 50,  129 => 41,  121 => 35,  118 => 26,  108 => 27,  102 => 26,  95 => 21,  92 => 20,  87 => 18,  82 => 23,  80 => 50,  77 => 18,  75 => 34,  72 => 33,  70 => 32,  67 => 19,  65 => 18,  62 => 19,  59 => 17,  49 => 9,  45 => 9,  41 => 7,  33 => 5,);
    }
}
