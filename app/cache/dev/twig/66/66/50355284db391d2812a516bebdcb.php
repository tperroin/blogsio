<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_666650355284db391d2812a516bebdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this));
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>

    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = '";
        // line 8
        echo $this->env->getExtension('trim_asset_version')->trimAssetVersion($this->env->getExtension('assets')->getAssetUrl("bundles/ivoryckeditor/"));
        echo "';
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        var instance = CKEDITOR.instances['";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "'];
        if (instance) {
            instance.destroy(true);
        }

        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
        foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
            // line 20
            echo "            CKEDITOR.plugins.addExternal('";
            echo twig_escape_filter($this->env, $this->getContext($context, "pluginName"), "html", null, true);
            echo "', '";
            echo $this->env->getExtension('trim_asset_version')->trimAssetVersion($this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "plugin"), "path")));
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "filename"), "html", null, true);
            echo "');
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "
        CKEDITOR.replace(\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"";
        if ((!twig_test_empty($this->getContext($context, "config")))) {
            echo ", ";
            echo twig_jsonencode_filter($this->getContext($context, "config"));
        }
        echo ");
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  54 => 14,  48 => 11,  357 => 107,  351 => 104,  345 => 102,  342 => 101,  336 => 99,  333 => 98,  327 => 96,  324 => 95,  318 => 93,  315 => 92,  309 => 90,  306 => 89,  300 => 87,  297 => 86,  291 => 84,  288 => 83,  282 => 81,  279 => 80,  273 => 78,  270 => 77,  264 => 75,  261 => 74,  255 => 72,  249 => 70,  246 => 69,  240 => 67,  234 => 65,  231 => 64,  225 => 62,  219 => 60,  217 => 59,  214 => 58,  208 => 56,  202 => 54,  199 => 53,  193 => 51,  187 => 49,  184 => 48,  178 => 46,  172 => 44,  169 => 43,  163 => 41,  160 => 40,  145 => 35,  142 => 34,  136 => 32,  133 => 31,  127 => 29,  124 => 28,  116 => 25,  111 => 24,  97 => 23,  94 => 22,  88 => 20,  86 => 19,  56 => 16,  42 => 8,  31 => 4,  25 => 3,  20 => 1,  96 => 43,  91 => 21,  85 => 38,  81 => 37,  66 => 20,  55 => 26,  51 => 13,  47 => 11,  40 => 20,  36 => 19,  32 => 18,  27 => 16,  22 => 2,  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,  171 => 66,  165 => 63,  162 => 62,  159 => 61,  156 => 57,  154 => 38,  151 => 37,  149 => 54,  144 => 51,  141 => 50,  129 => 41,  121 => 35,  118 => 26,  108 => 27,  102 => 26,  95 => 21,  92 => 20,  87 => 18,  82 => 23,  80 => 50,  77 => 18,  75 => 34,  72 => 33,  70 => 32,  67 => 19,  65 => 18,  62 => 19,  59 => 17,  49 => 9,  45 => 8,  41 => 7,  33 => 5,);
    }
}
