<?php

/* SonataMediaBundle:MediaAdmin:list_custom.html.twig */
class __TwigTemplate_a653282e668eb84a05c4d6f5f16ac49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <div>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "object")))), "method"), "html", null, true);
        echo "\" style=\"float: left; margin-right: 6px;\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getContext($context, "object"), "admin", array("width" => 75, "height" => 60));
        echo "</a>
        <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "name"), "html", null, true);
        echo "</strong> <br />
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "object"), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "width"), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "height"), "html", null, true);
        echo " <br />
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  28 => 14,  244 => 84,  239 => 82,  233 => 80,  231 => 79,  225 => 75,  216 => 72,  212 => 71,  208 => 70,  201 => 69,  197 => 68,  192 => 66,  185 => 64,  179 => 61,  175 => 60,  167 => 58,  164 => 57,  161 => 56,  155 => 51,  152 => 50,  146 => 49,  138 => 47,  130 => 45,  127 => 44,  123 => 43,  120 => 42,  112 => 40,  104 => 38,  102 => 37,  96 => 35,  94 => 34,  91 => 33,  89 => 32,  86 => 31,  80 => 30,  72 => 28,  64 => 26,  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  44 => 18,  40 => 17,  36 => 17,  32 => 15,  29 => 14,);
    }
}
