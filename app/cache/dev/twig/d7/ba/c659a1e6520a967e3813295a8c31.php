<?php

/* SonataNewsBundle:Post:comments.html.twig */
class __TwigTemplate_d7bac659a1e6520a967e3813295a8c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"sonata-blog-comment-container\">
    <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_comments", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-blog-comment-list\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "pager"), "results"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "            <div class=\"sonata-blog-comment\">
                <div class=\"sonata-blog-comment-name\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "url"), "html", null, true);
            echo "\" target=\"new\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "name"), "html", null, true);
            echo "</a>
                </div>
                <div class=\"sonata-blog-comment-date\">
                    ";
            // line 24
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getContext($context, "comment"), "createdAt"));
            echo "
                </div>
                <div class=\"sonata-blog-comment-message\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "message"), "html", null, true);
            echo "
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_comments_available", array(), "SonataNewsBundle"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,  171 => 66,  165 => 63,  162 => 62,  159 => 61,  156 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 51,  141 => 50,  129 => 41,  121 => 35,  118 => 34,  108 => 27,  102 => 26,  95 => 21,  92 => 20,  87 => 18,  82 => 70,  80 => 50,  77 => 49,  75 => 34,  72 => 33,  70 => 33,  67 => 19,  65 => 18,  62 => 17,  59 => 16,  49 => 9,  45 => 8,  41 => 7,  33 => 3,);
    }
}
