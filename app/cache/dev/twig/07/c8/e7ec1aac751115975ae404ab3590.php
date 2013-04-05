<?php

/* SonataNewsBundle:Post:archive.html.twig */
class __TwigTemplate_07c8e7ec1aac751115975ae404ab3590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 6
    public function block_corps($context, array $blocks = array())
    {
        // line 7
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
            // line 8
            echo "        
        ";
            // line 9
            $this->displayBlock('titre_date', $context, $blocks);
            // line 20
            echo "        ";
            $this->displayBlock('resume', $context, $blocks);
            // line 35
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
            // line 37
            echo "            <div class=\"row\">
                <div class=\"large-6 columns\">
                    <div class=\"row\">
        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "
                            </div>
                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 9
    public function block_titre_date($context, array $blocks = array())
    {
        // line 10
        echo "            <div class=\"row\">
                <div class=\"large-6 columns\">
                    <div class=\"row\">
                        
                        <h2><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getContext($context, "post")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</a></h2>
                        ";
        // line 15
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getContext($context, "post"), "publicationDateStart"));
        echo "
                    </div>
                </div>
            </div>
        ";
    }

    // line 20
    public function block_resume($context, array $blocks = array())
    {
        // line 21
        echo "    
            &nbsp;
            
            <div class=\"row\">
                <div class=\"large-6 columns\">
                    <div class=\"row\">
                        ";
        // line 27
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
        return array (  134 => 27,  126 => 21,  123 => 20,  114 => 15,  108 => 14,  102 => 10,  99 => 9,  86 => 40,  81 => 37,  67 => 35,  64 => 20,  62 => 9,  59 => 8,  40 => 7,  37 => 6,  31 => 3,);
    }
}
