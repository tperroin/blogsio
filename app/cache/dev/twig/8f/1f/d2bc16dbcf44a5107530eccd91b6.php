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
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'navbar' => array($this, 'block_navbar'),
            'image_accueil' => array($this, 'block_image_accueil'),
            'navprojets' => array($this, 'block_navprojets'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\" />

        <!-- Set the viewport width to device width for mobile -->
        <meta name=\"viewport\" content=\"width=device-width\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "            
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
    </head>

    <body>

        <!-- Header and Nav -->
        
        
        
            
        ";
        // line 36
        $this->displayBlock('logo', $context, $blocks);
        // line 43
        echo "


        ";
        // line 46
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "        <!-- End Header and Nav -->

        <!-- First Band (Image) -->
        ";
        // line 60
        $this->displayBlock('image_accueil', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('navprojets', $context, $blocks);
        // line 70
        echo "        
        ";
        // line 71
        $this->displayBlock('corps', $context, $blocks);
        // line 72
        echo "
        <script>
  document.write('<script src=\"http://foundation.zurb.com/docs/assets/vendor/'
        + ('__proto__' in {} ? 'zepto' : 'jquery')
        + '.js\"><\\/script>');
</script>
<script>
      \$(document).foundation();
      // For Kitchen Sink Page
      \$('#start-jr').on('click', function() {
        \$(document).foundation('joyride','start');
      });
    </script>
    </body>

    <footer class=\"row\">
        <div class=\"large-12 columns\">
            <hr />
            <div class=\"row\">
                <div class=\"large-6 columns\">
                    <p>&copy; Copyright Perroin Thibault</p>
                </div>
                <div class=\"large-6 columns\">
                    <ul class=\"link-list right\">
                        <li><a href=\"http://tpdoc.tpdev.fr/\">tpdoc</a></li>
                    </ul>
                </div>
            </div>
        </div> 
    </footer>

    
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Blog sio";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylesheets/foundation.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylesheets/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylesheets/app.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/stylesheets/foundation.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/javascripts/vendor/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/javascripts/vendor/zepto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/javascripts/foundation/foundation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/javascripts/foundation/foundation.magellan.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        ";
    }

    // line 36
    public function block_logo($context, array $blocks = array())
    {
        echo " 
        <div class=\"row head\">
            <div class=\"large-3 columns\">
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/logo.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>
            </div>
           
        ";
    }

    // line 46
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
            <div class=\"large-9 columns\">
                <ul class=\"button-group right\">
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\" class=\"button\">Accueil</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\" class=\"button\">Blog</a></li>
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\" class=\"button\">Projets</a></li>
                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"button\">Administration</a></li>
                </ul>
            </div>
        </div>
        ";
    }

    // line 60
    public function block_image_accueil($context, array $blocks = array())
    {
        // line 61
        echo "            <div class=\"row\">
                <div class=\"large-12 columns\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/accueil/image_accueil.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    <br></br>
                </div>
            </div>
        ";
    }

    // line 69
    public function block_navprojets($context, array $blocks = array())
    {
    }

    // line 71
    public function block_corps($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 71,  236 => 69,  227 => 63,  223 => 61,  220 => 60,  211 => 52,  207 => 51,  203 => 50,  199 => 49,  192 => 46,  182 => 39,  175 => 36,  168 => 23,  164 => 22,  160 => 21,  155 => 20,  152 => 19,  146 => 16,  142 => 15,  138 => 14,  133 => 13,  130 => 12,  124 => 10,  88 => 72,  86 => 71,  83 => 70,  81 => 69,  78 => 68,  76 => 60,  71 => 57,  69 => 46,  64 => 43,  62 => 36,  50 => 26,  48 => 19,  45 => 18,  43 => 12,  38 => 10,  27 => 1,);
    }
}
