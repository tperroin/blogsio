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
        return array (  63 => 14,  54 => 12,  50 => 11,  42 => 8,  35 => 5,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  96 => 43,  91 => 41,  85 => 38,  81 => 37,  66 => 31,  55 => 26,  51 => 25,  47 => 24,  40 => 7,  36 => 19,  32 => 18,  27 => 16,  22 => 14,  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,  171 => 66,  165 => 63,  162 => 62,  159 => 61,  156 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 51,  141 => 50,  129 => 41,  121 => 35,  118 => 34,  108 => 27,  102 => 26,  95 => 21,  92 => 20,  87 => 18,  82 => 70,  80 => 50,  77 => 36,  75 => 34,  72 => 33,  70 => 32,  67 => 19,  65 => 18,  62 => 30,  59 => 16,  49 => 9,  45 => 9,  41 => 7,  33 => 3,);
    }
}
