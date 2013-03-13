<?php

/* ::layout.html.twig */
class __TwigTemplate_8f1fd2bc16dbcf44a5107530eccd91b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "1b37284"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b37284") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1b37284.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/javascript/jquery.foundation.tooltips"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "      
    <!-- Header and Nav -->
  
  <div class=\"row\">
     
    ";
        // line 20
        $this->displayBlock('logo', $context, $blocks);
        // line 25
        echo "      
    <div class=\"eight columns\">
        <ul class=\"link-list right\">
            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_admin_dashboard"), "html", null, true);
        echo "\">Administration</a></li>
        </ul>
    </div>
    
    ";
        // line 32
        $this->displayBlock('navbar', $context, $blocks);
        // line 42
        echo "      
  </div>
  <!-- End Header and Nav -->
  
  
  <!-- First Band (Image) -->
    
  ";
        // line 49
        $this->displayBlock('image_accueil', $context, $blocks);
        // line 57
        echo "  
  
  ";
        // line 59
        $this->displayBlock('corps', $context, $blocks);
        // line 60
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

    // line 20
    public function block_logo($context, array $blocks = array())
    {
        echo " 
        <div class=\"three columns\">
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>
        </div>
    ";
    }

    // line 32
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li class=\"active\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    ";
    }

    // line 49
    public function block_image_accueil($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"row\">
        <div class=\"twelve columns\">
          <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/image_accueil.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
          <hr />
        </div>      
    </div>
  ";
    }

    // line 59
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
        return array (  187 => 59,  178 => 52,  174 => 50,  171 => 49,  162 => 37,  158 => 36,  154 => 35,  147 => 32,  138 => 22,  132 => 20,  125 => 9,  122 => 8,  116 => 6,  94 => 60,  92 => 59,  88 => 57,  86 => 49,  77 => 42,  75 => 32,  68 => 28,  63 => 25,  61 => 20,  54 => 15,  47 => 13,  42 => 12,  39 => 11,  37 => 8,  32 => 6,  25 => 1,);
    }
}
