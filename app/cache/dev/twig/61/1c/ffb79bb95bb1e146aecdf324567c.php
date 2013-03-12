<?php

/* tperroinBlogSioBundle:Default:projets.html.twig */
class __TwigTemplate_611cffb79bb95bb1e146aecdf324567c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataNewsBundle:Post:archive.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'image_accueil' => array($this, 'block_image_accueil'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataNewsBundle:Post:archive.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Projets ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li class=\"active\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    ";
    }

    // line 15
    public function block_image_accueil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 17
    public function block_corps($context, array $blocks = array())
    {
        // line 18
        echo "
        
         <div class=\"row\">
          <div class=\"large-6 columns\">
            <div class=\"panel\">
                
                <h5>Projet GestStages</h5>
              <p>Application WEB en PHP de gestion de stages.</p>
            </div>
          </div>
          <div class=\"large-6 columns\">
            <div class=\"panel callout radius\">
              <h5>Projet Moskito</h5>
              <p>Application WEB en PHP sous Drupal 6 pour l'entreprise MANITOU BF.</p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"large-6 columns\">
            <div class=\"panel callout radius\">
              <h5>Projet AFPA</h5>
              <p>Application non terminée</p>
            </div>
          </div>
          <div class=\"large-6 columns\">
            <div class=\"panel\">
              <h5>Projet GestComptesInternet</h5>
              <p>Application Java de gestion de comptes bancaires sur Internet pour l'entreprise ETS BOUCHEREAU.</p>
            </div>
          </div>
        </div>



    ";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Default:projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  68 => 17,  62 => 15,  53 => 9,  49 => 8,  45 => 7,  38 => 4,  31 => 2,);
    }
}
