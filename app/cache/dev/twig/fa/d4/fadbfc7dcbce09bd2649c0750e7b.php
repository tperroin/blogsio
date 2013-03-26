<?php

/* SonataNewsBundle:Post:archive.html.twig */
class __TwigTemplate_fad4fadbfc7dcbce09bd2649c0750e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'corps' => array($this, 'block_corps'),
            'titre_date' => array($this, 'block_titre_date'),
            'resume' => array($this, 'block_resume'),
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
        echo "Blog";
    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        echo " 
        <div class=\"twelve columns\">
            <ul class=\"nav-bar\">
                <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                <li class=\"active\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
            </ul>
        </div>
    ";
    }

    // line 15
    public function block_corps($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "pager"), "getResults", array(), "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "        
        ";
            // line 18
            $this->displayBlock('titre_date', $context, $blocks);
            // line 29
            echo "        ";
            $this->displayBlock('resume', $context, $blocks);
            // line 44
            echo "  
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 18
    public function block_titre_date($context, array $blocks = array())
    {
        // line 19
        echo "            <div class=\"row\">
                <div class=\"six columns\">
                    <div class=\"row\">
                        
                        <h2><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getContext($context, "post")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</a></h2>
                        ";
        // line 24
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getContext($context, "post"), "publicationDateStart"));
        echo "
                    </div>
                </div>
            </div>
        ";
    }

    // line 29
    public function block_resume($context, array $blocks = array())
    {
        // line 30
        echo "    
            &nbsp;
            
            <div class=\"row\">
                <div class=\"six columns\">
                    <div class=\"row\">
                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "abstract"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            
            &nbsp;
            
        ";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 36,  143 => 30,  140 => 29,  131 => 24,  125 => 23,  119 => 19,  116 => 18,  105 => 46,  91 => 44,  88 => 29,  86 => 18,  83 => 17,  64 => 16,  32 => 3,  152 => 43,  137 => 41,  128 => 35,  124 => 34,  118 => 31,  115 => 30,  107 => 25,  103 => 24,  98 => 22,  95 => 21,  93 => 20,  90 => 19,  73 => 18,  70 => 17,  67 => 16,  61 => 15,  53 => 10,  49 => 9,  45 => 8,  38 => 5,  31 => 2,);
    }
}
