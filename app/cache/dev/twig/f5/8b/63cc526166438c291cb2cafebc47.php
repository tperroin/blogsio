<?php

/* SonataNewsBundle:Post:view.html.twig */
class __TwigTemplate_f58b63cc526166438c291cb2cafebc47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'corps' => array($this, 'block_corps'),
            'image_accueil' => array($this, 'block_image_accueil'),
            'titre_date' => array($this, 'block_titre_date'),
            'contenu' => array($this, 'block_contenu'),
            'commentaires' => array($this, 'block_commentaires'),
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
    public function block_navbar($context, array $blocks = array())
    {
        echo " 

    <div class=\"twelve columns\">
        <ul class=\"nav-bar\">
            <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
            <li class=\"active\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
            <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
            <li><a href=\"#\">Contact Us</a></li>
        </ul>
    </div>

";
    }

    // line 16
    public function block_corps($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('image_accueil', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('titre_date', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('contenu', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('commentaires', $context, $blocks);
        // line 70
        echo "
";
    }

    // line 18
    public function block_image_accueil($context, array $blocks = array())
    {
    }

    // line 20
    public function block_titre_date($context, array $blocks = array())
    {
        // line 21
        echo "
        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">

                    <h2><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getContext($context, "post")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</a></h2>
                    ";
        // line 27
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getContext($context, "post"), "publicationDateStart"));
        echo "
                </div>
            </div>
        </div>

    ";
    }

    // line 34
    public function block_contenu($context, array $blocks = array())
    {
        // line 35
        echo "
        &nbsp;

        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">
                    ";
        // line 41
        echo $this->getAttribute($this->getContext($context, "post"), "content");
        echo "
                </div>
            </div>
        </div>

        &nbsp;

    ";
    }

    // line 50
    public function block_commentaires($context, array $blocks = array())
    {
        // line 51
        echo "        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">
        ";
        // line 54
        echo $this->env->getExtension('actions')->renderAction("SonataNewsBundle:Post:comments", array("postId" => $this->getAttribute($this->getContext($context, "post"), "id")), array());
        // line 55
        echo "
        ";
        // line 56
        if ($this->getAttribute($this->getContext($context, "post"), "iscommentable")) {
            // line 57
            echo "            ";
            echo $this->env->getExtension('actions')->renderAction("SonataNewsBundle:Post:addCommentForm", array("postId" => $this->getAttribute($this->getContext($context, "post"), "id"), "form" => $this->getContext($context, "form")), array());
            // line 61
            echo "        ";
        } else {
            // line 62
            echo "
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_comments_are_closed", array(), "SonataNewsBundle"), "html", null, true);
            echo "

        ";
        }
        // line 66
        echo "                        </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  165 => 63,  162 => 62,  159 => 61,  156 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 51,  141 => 50,  129 => 41,  121 => 35,  118 => 34,  108 => 27,  102 => 26,  95 => 21,  92 => 20,  87 => 18,  82 => 70,  80 => 50,  77 => 49,  75 => 34,  72 => 33,  70 => 20,  67 => 19,  65 => 18,  62 => 17,  59 => 16,  49 => 9,  45 => 8,  41 => 7,  33 => 3,);
    }
}
