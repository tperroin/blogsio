<?php

/* tperroinBlogSioBundle:Projet:index.html.twig */
class __TwigTemplate_3a6953fbadc5c41953232775199f6597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataNewsBundle:Post:archive.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 6
    public function block_image_accueil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 8
    public function block_corps($context, array $blocks = array())
    {
        // line 9
        echo "          <div class=\"row\">
  <hr />
  </div>

        ";
        // line 13
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
            // line 14
            echo "
        ";
            // line 15
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 2)) {
                // line 16
                echo "            
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><div class=\"large-6 columns\">
                    <div class=\"panel\">
                        <h5>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                        <p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                    </div>
                </div></a>
            </div>
        ";
            } else {
                // line 25
                echo "            <div class=\"row\">
                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">
                    <div class=\"large-6 columns\">
                        <div class=\"panel callout radius\">
                            <h5>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                            <p>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </a>
        ";
            }
            // line 35
            echo "         ";
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
        // line 36
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
        return array (  129 => 36,  115 => 35,  107 => 30,  103 => 29,  97 => 26,  94 => 25,  86 => 20,  82 => 19,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  52 => 13,  46 => 9,  43 => 8,  37 => 6,  30 => 2,);
    }
}
