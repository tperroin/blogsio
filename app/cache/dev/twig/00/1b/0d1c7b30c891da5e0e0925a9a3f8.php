<?php

/* tperroinBlogSioBundle:Default:index.html.twig */
class __TwigTemplate_001b0d1c7b30c891da5e0e0925a9a3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("tperroinBlogSioBundle:Default:layout.html.twig");

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tperroinBlogSioBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Second Band (Image Left with Text) -->
  
  <div class=\"row\">
    <div class=\"four columns\">
      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/b.jpg"), "html", null, true);
        echo "\" />
    </div>
    <div class=\"eight columns\">
      <h4>Base de connaissances.</h4>
      <div class=\"row\">
        <div class=\"large-six columns\">
            <p>Dans un soucis de veille technologique pour mes études, il m'a semblé important de créer ma propre base de connaissances. </p>
            <p>C'est pourquoi j'ai mis en place sur mon serveur un wiki, réalisé avec <span data-tooltip class=\"has-tip\" title=\"Site officiel de dokuwiki\"><a href=\"https://www.dokuwiki.org/\" target=\"_blank\">dokuwiki</a></span>, pour mettre en évidence les nouvelles technologies que j'ai utilisées pour mes projets.</p>
            <p>Vous pouvez accéder à mon dokuwiki à cette addresse : <span data-tooltip class=\"has-tip\" title=\"Mon dokuwiki\"><a href=\"http://www.tpdoc.tpdev.fr/\" target=\"_blank\">tpdoc.tpdev.fr</a></span>.</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Third Band (Image Right with Text) -->
  
  <div class=\"row\">
    <div class=\"eight columns\">
      <h4>Compétences.</h4>
      
      <p>Dans le cadre de mon BTS SIO (Services Informatiques aux Organisations), nous devons valider des compétences informatiques et les présenter sous forme d'un blog.</p>
      
      <p>Pour ajouter une nouvelle compétence à ce blog, j'ai décidé de le créer avec le Framework <span data-tooltip class=\"has-tip\" title=\"Site officiel de Symfony\"><a href=\"http://symfony.com/\" target=\"_blank\">Symfony</a></span> dans sa version 2.</p>
          
    </div>
    <div class=\"four columns\">
      <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/c.jpg"), "html", null, true);
        echo "\" />
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 37,  37 => 10,  31 => 6,  28 => 5,);
    }
}
