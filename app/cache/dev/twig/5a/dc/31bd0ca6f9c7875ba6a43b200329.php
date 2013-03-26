<?php

/* tperroinBlogSioBundle:Projet:index.html.twig */
class __TwigTemplate_5adc31bd0ca6f9c7875ba6a43b200329 extends Twig_Template
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
            </ul>
        </div>
    ";
    }

    // line 14
    public function block_image_accueil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 16
    public function block_corps($context, array $blocks = array())
    {
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "
        ";
            // line 20
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 2)) {
                // line 21
                echo "            <div class=\"row\">
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><div class=\"large-6 columns\">
                    <div class=\"panel\">
                        <h5>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                        <p>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                    </div>
                </div></a>
            </div>
        ";
            } else {
                // line 30
                echo "            <div class=\"row\">
                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">
                    <div class=\"large-6 columns\">
                        <div class=\"panel callout radius\">
                            <h5>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                            <p>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </a>
            </div>
        ";
            }
            // line 41
            echo "         
         ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "          
          
        



    ";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  137 => 41,  128 => 35,  124 => 34,  118 => 31,  115 => 30,  107 => 25,  103 => 24,  98 => 22,  95 => 21,  93 => 20,  90 => 19,  73 => 18,  70 => 17,  67 => 16,  61 => 14,  53 => 9,  49 => 8,  45 => 7,  38 => 4,  31 => 2,);
    }
}
