<?php

/* tperroinBlogSioBundle:Default:layout.html.twig */
class __TwigTemplate_f71e85b7b08c23cff54b7850a6c9f1a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Blog sio";
    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li class=\"active\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  46 => 11,  42 => 10,  35 => 7,  29 => 3,  67 => 37,  37 => 10,  31 => 6,  28 => 5,);
    }
}
