<?php

/* tperroinBlogSioBundle:Projet:show.html.twig */
class __TwigTemplate_147d4d9072f5234192c6ffd0f3e53b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'image_accueil' => array($this, 'block_image_accueil'),
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

    // line 7
    public function block_navprojets($context, array $blocks = array())
    {
        // line 8
        echo "    
   <!--     <div class=\"twelve columns \">
            <div class=\"row\">
                <dl class=\"sub-nav\">
                    <dd class=\"active\"><a href=\"#presentation\">Présentation</a></dd>
                    <dd><a href=\"#ressources\">Ressources</a></dd>
                    <dd><a href=\"#dossierTechnique\">Dossier technique</a></dd>
                    <dd><a href=\"#configSources\">Configuration et code sources</a></dd>
                    <dd><a href=\"#activitesCompetences\">Activités et compétences</a></dd>
                    <dd><a href=\"#bilan\">Bilan</a></dd>

                </dl>
            </div>
        </div>
  -->
<div class=\"row\">
        <dl id=\"magellanTopNav\" class=\"sub-nav\" data-magellan-expedition=\"fixed\" >
            <dd class=\"active\" data-magellan-arrival=\"presentation\">
                <a href=\"#presentation\">Présentation</a>
            </dd>
            <dd data-magellan-arrival=\"ressources\" >
                <a href=\"#ressources\">Ressources</a>
            </dd>
            <dd data-magellan-arrival=\"dossierTechnique\">
                <a href=\"#dossierTechnique\">Dossier technique</a>
            </dd>
            <dd data-magellan-arrival=\"configSources\">
                <a href=\"#configSources\">Configuration et code source</a>
            </dd>
            <dd data-magellan-arrival=\"activitesCompetences\">
                <a href=\"#activitesCompetences\">Activités et compétences</a>
            </dd>
            <dd data-magellan-arrival=\"bilan\">
                <a href=\"#bilan\">Bilan</a>
            </dd>
        </dl>
</div>
  
";
    }

    // line 48
    public function block_corps($context, array $blocks = array())
    {
        // line 49
        echo "
<div class=\"large-12 columns\">
    <div class=\"row\">
        <div class=\"right\">
        Créé le : ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "auteur"), "html", null, true);
        echo "
        </div>
        <hr/>
    </div>
    <div class=\"row\">
        <h1>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
        echo "</h1>
    </div>
        
    <div id=\"presentation\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"presentation\" >Présentation :</h3>
        <p>";
        // line 63
        echo $this->getAttribute($this->getContext($context, "entity"), "presentation");
        echo "</p>
    </div>
        
    <div id=\"ressources\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"ressources\" >Ressources :</h3>
        <p>";
        // line 68
        echo $this->getAttribute($this->getContext($context, "entity"), "ressources");
        echo "</p>
    </div>
        
    <div id=\"dossierTechnique\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"dossierTechnique\" >Dossier technique :</h3>
        <p>";
        // line 73
        echo $this->getAttribute($this->getContext($context, "entity"), "dossierTechnique");
        echo "</p>
    </div>

    <div id=\"configSources\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"configSources\" >Configuration et code sources :</h3>
        <p>";
        // line 78
        echo $this->getAttribute($this->getContext($context, "entity"), "configSources");
        echo "</p>
    </div>
        
    <div id=\"activitesCompetences\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"activitesCompetences\" >Activités et compétences :</h3>
        <p>";
        // line 83
        echo $this->getAttribute($this->getContext($context, "entity"), "activitesCompetences");
        echo "</p>
    </div> 
        
    <div id=\"bilan\" class=\"row blocBlanc\">
        <h3 data-magellan-destination=\"bilan\" >Bilan :</h3>
        <p>";
        // line 88
        echo $this->getAttribute($this->getContext($context, "entity"), "bilan");
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
        return array (  148 => 88,  140 => 83,  132 => 78,  124 => 73,  116 => 68,  108 => 63,  100 => 58,  90 => 53,  84 => 49,  81 => 48,  39 => 8,  36 => 7,  30 => 3,);
    }
}
