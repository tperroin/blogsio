<?php

/* ::layout.html.twig */
class __TwigTemplate_5b43c025309d2b30dfa400125e3a2f71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navprojets' => array($this, 'block_navprojets'),
            'logo' => array($this, 'block_logo'),
            'navbar' => array($this, 'block_navbar'),
            'image_accueil' => array($this, 'block_image_accueil'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    
    ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        
    ";
        // line 14
        $this->displayBlock('navprojets', $context, $blocks);
        // line 15
        echo "    
  </head>
    <!-- Header and Nav -->
  
  <div class=\"row\">
     
    ";
        // line 21
        $this->displayBlock('logo', $context, $blocks);
        // line 26
        echo "      
    <div class=\"eight columns\">
        <ul class=\"link-list right\">
            <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_admin_dashboard"), "html", null, true);
        echo "\">Administration</a></li>
        </ul>
    </div>
    
    ";
        // line 33
        $this->displayBlock('navbar', $context, $blocks);
        // line 43
        echo "      
  </div>
  <!-- End Header and Nav -->
  
  
  <!-- First Band (Image) -->
    
  ";
        // line 50
        $this->displayBlock('image_accueil', $context, $blocks);
        // line 58
        echo "  
  
  ";
        // line 60
        $this->displayBlock('corps', $context, $blocks);
        // line 61
        echo "  
  
  <!-- Footer -->
  
  <footer class=\"row\">
    <div class=\"twelve columns\">
      <hr />
      <div class=\"row\">
        <div class=\"six columns\">
          <p>&copy; Copyright Perroin Thibault</p>
        </div>
        <div class=\"six columns\">
          <ul class=\"link-list right\">
            <li><a href=\"http://tpdoc.tpdev.fr/\">tpdoc</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Blog sio";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylesheets/foundation.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 14
    public function block_navprojets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_logo($context, array $blocks = array())
    {
        echo " 
        <div class=\"three columns\">
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>
        </div>
    ";
    }

    // line 33
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li class=\"active\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    ";
    }

    // line 50
    public function block_image_accueil($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"row\">
        <div class=\"twelve columns\">
          <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/image_accueil.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
          <hr />
        </div>      
    </div>
  ";
    }

    // line 60
    public function block_corps($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  186 => 53,  182 => 51,  179 => 50,  170 => 38,  166 => 37,  162 => 36,  155 => 33,  146 => 23,  135 => 14,  130 => 12,  123 => 9,  120 => 8,  114 => 6,  92 => 61,  84 => 50,  75 => 43,  66 => 29,  59 => 21,  51 => 15,  46 => 13,  44 => 12,  41 => 11,  39 => 8,  34 => 6,  27 => 1,  151 => 36,  143 => 30,  140 => 21,  131 => 24,  125 => 23,  119 => 19,  116 => 18,  105 => 46,  91 => 44,  88 => 29,  86 => 58,  83 => 17,  64 => 16,  32 => 3,  152 => 43,  137 => 41,  128 => 35,  124 => 34,  118 => 31,  115 => 30,  107 => 25,  103 => 24,  98 => 22,  95 => 21,  93 => 20,  90 => 60,  73 => 33,  70 => 17,  67 => 16,  61 => 26,  53 => 10,  49 => 14,  45 => 8,  38 => 5,  31 => 2,);
    }
}
