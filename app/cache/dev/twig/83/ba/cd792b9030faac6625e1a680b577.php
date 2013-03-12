<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_83bacd792b9030faac6625e1a680b577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        ";
        // line 16
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">
            \t<i class=\"icon-plus\"></i>
            \t";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 22
            echo "            <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            \t<i class=\"icon-list\"></i>
            \t";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 26
        echo "    </div>
";
    }

    // line 29
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  66 => 29,  61 => 26,  56 => 24,  50 => 22,  47 => 21,  42 => 19,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  251 => 105,  241 => 101,  233 => 98,  229 => 96,  225 => 95,  218 => 91,  212 => 88,  205 => 84,  198 => 80,  194 => 79,  184 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 66,  158 => 64,  153 => 63,  147 => 61,  145 => 60,  140 => 58,  134 => 55,  130 => 54,  124 => 51,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  100 => 42,  94 => 39,  90 => 38,  84 => 35,  80 => 34,  77 => 32,  69 => 30,  65 => 28,  63 => 27,  57 => 24,  53 => 22,  51 => 21,  46 => 19,  38 => 17,  35 => 16,  29 => 14,);
    }
}
