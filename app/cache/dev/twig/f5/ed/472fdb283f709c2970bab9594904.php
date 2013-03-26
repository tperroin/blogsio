<?php

/* tperroinBlogSioBundle:Projet:show.html.twig */
class __TwigTemplate_f5ed472fdb283f709c2970bab9594904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'image_accueil' => array($this, 'block_image_accueil'),
            'javascripts' => array($this, 'block_javascripts'),
            'navbar' => array($this, 'block_navbar'),
            'navprojets' => array($this, 'block_navprojets'),
            'corps' => array($this, 'block_corps'),
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
    public function block_image_accueil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tperroinblogsio/js/app.js"), "html", null, true);
        echo "\"></script>
        
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tperroinblogsio/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tperroinblogsio/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tperroinblogsio/js/modernizr.foundation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tperroinblogsio/js/jquery.foundation.accordion.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 14
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li class=\"active\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
            </ul>
        </div>
";
    }

    // line 24
    public function block_navprojets($context, array $blocks = array())
    {
        // line 25
        echo "
";
    }

    // line 28
    public function block_corps($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"twelve columns\">
    <div class=\"row\">
        <div class=\"right\">
        Créé le : ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "auteur"), "html", null, true);
        echo "
        </div>
        <hr/>
    </div>
    <div class=\"row\">
        <h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row\">
        <p>";
        // line 40
        echo $this->getAttribute($this->getContext($context, "entity"), "contenu");
        echo "</p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Projet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  114 => 37,  104 => 32,  99 => 29,  96 => 28,  91 => 25,  88 => 24,  80 => 19,  76 => 18,  72 => 17,  65 => 14,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 6,  38 => 5,  32 => 3,);
    }
}
