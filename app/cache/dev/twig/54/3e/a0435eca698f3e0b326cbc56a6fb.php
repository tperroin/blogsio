<?php

/* TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_543ea0435eca698f3e0b326cbc56a6fb extends Twig_Template
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
    ";
        // line 9
        echo "        var CKEDITOR_BASEPATH = '";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basePath") . "/") . $this->getContext($context, "base_path")), "js", null, true);
        echo "';
    ";
        // line 11
        echo "    </script>

    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getContext($context, "base_path") . "ckeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    ";
        // line 16
        echo "        ";
        $context["plugins"] = "";
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "external_plugins"));
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
        foreach ($context['_seq'] as $context["name"] => $context["external_plugin"]) {
            // line 18
            echo "            CKEDITOR.plugins.addExternal('";
            echo $this->getContext($context, "name");
            echo "', '";
            echo ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basePath") . $this->getAttribute($this->getContext($context, "external_plugin"), "path"));
            echo "', '";
            echo $this->getAttribute($this->getContext($context, "external_plugin"), "file");
            echo "');
            ";
            // line 19
            if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                // line 20
                echo "                ";
                $context["plugins"] = ($this->getContext($context, "plugins") . ",");
                // line 21
                echo "            ";
            }
            // line 22
            echo "            ";
            $context["plugins"] = ($this->getContext($context, "plugins") . $this->getContext($context, "name"));
            // line 23
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['external_plugin'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "        CKEDITOR.replace(\"";
        echo $this->getContext($context, "id");
        echo "\",{
            ";
        // line 25
        if ((!(null === $this->getContext($context, "width")))) {
            // line 26
            echo "                width: '";
            echo $this->getContext($context, "width");
            echo "',
            ";
        }
        // line 28
        echo "            ";
        if ((!(null === $this->getContext($context, "height")))) {
            // line 29
            echo "                height: '";
            echo $this->getContext($context, "height");
            echo "',
            ";
        }
        // line 31
        echo "            ";
        if ((!(null === $this->getContext($context, "force_paste_as_plaintext")))) {
            // line 32
            echo "                forcePasteAsPlainText: ";
            echo $this->getContext($context, "force_paste_as_plaintext");
            echo ",
            ";
        }
        // line 34
        echo "            ";
        if ((!(null === $this->getContext($context, "language")))) {
            // line 35
            echo "                language: '";
            echo $this->getContext($context, "language");
            echo "',
            ";
        }
        // line 37
        echo "            ";
        if ((!(null === $this->getContext($context, "ui_color")))) {
            // line 38
            echo "                uiColor: \"";
            echo $this->getContext($context, "ui_color");
            echo "\",
            ";
        }
        // line 40
        echo "            ";
        if (($this->getContext($context, "startup_outline_blocks") == true)) {
            // line 41
            echo "                startupOutlineBlocks: ";
            echo $this->getContext($context, "startup_outline_blocks");
            echo ",
            ";
        }
        // line 43
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "filebrowser_browse_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_browse_url"), "route"))))) {
            // line 44
            echo "                filebrowserBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_browse_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_browse_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_browse_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_browse_url"), "url"))))) {
            // line 46
            echo "                filebrowserBrowseUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_browse_url"), "url");
            echo "',
            ";
        }
        // line 48
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "filebrowser_upload_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_upload_url"), "route"))))) {
            // line 49
            echo "                filebrowserUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_upload_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_upload_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_upload_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_upload_url"), "url"))))) {
            // line 51
            echo "                filebrowserUploadUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_upload_url"), "url");
            echo "',
            ";
        }
        // line 53
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "filebrowser_image_browse_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_image_browse_url"), "route"))))) {
            // line 54
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_image_browse_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_image_browse_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_image_browse_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_image_browse_url"), "url"))))) {
            // line 56
            echo "                filebrowserImageBrowseUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_image_browse_url"), "url");
            echo "',
            ";
        }
        // line 58
        echo "
            ";
        // line 59
        if (($this->getAttribute($this->getContext($context, "filebrowser_image_upload_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_image_upload_url"), "route"))))) {
            // line 60
            echo "                filebrowserImageUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_image_upload_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_image_upload_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_image_upload_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_image_upload_url"), "url"))))) {
            // line 62
            echo "                filebrowserImageUploadUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_image_upload_url"), "url");
            echo "',
            ";
        }
        // line 64
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url"), "route"))))) {
            // line 65
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url"), "url"))))) {
            // line 67
            echo "                filebrowserFlashBrowseUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_flash_browse_url"), "url");
            echo "',
            ";
        }
        // line 69
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url", true), "route", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url"), "route"))))) {
            // line 70
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url"), "route"), $this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url"), "route_parameters"));
            echo "',
            ";
        } elseif (($this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url", true), "url", array(), "any", true, true) && (!(null === $this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url"), "url"))))) {
            // line 72
            echo "                filebrowserFlashUploadUrl: '";
            echo $this->getAttribute($this->getContext($context, "filebrowser_flash_upload_url"), "url");
            echo "',
            ";
        }
        // line 74
        echo "            ";
        if ((!(null === $this->getContext($context, "skin")))) {
            // line 75
            echo "                skin: '";
            echo $this->getContext($context, "skin");
            echo "',
            ";
        }
        // line 77
        echo "            ";
        if ((twig_length_filter($this->env, $this->getContext($context, "format_tags")) > 0)) {
            // line 78
            echo "                format_tags: '";
            echo twig_join_filter($this->getContext($context, "format_tags"), ";");
            echo "',
            ";
        }
        // line 80
        echo "            ";
        if ((!(null === $this->getContext($context, "base_href")))) {
            // line 81
            echo "                baseHref: '";
            echo $this->getContext($context, "base_href");
            echo "',
            ";
        }
        // line 83
        echo "            ";
        if ((!(null === $this->getContext($context, "body_class")))) {
            // line 84
            echo "                bodyClass: '";
            echo $this->getContext($context, "body_class");
            echo "',
            ";
        }
        // line 86
        echo "            ";
        if ((!(null === $this->getContext($context, "contents_css")))) {
            // line 87
            echo "                contentsCss: '";
            echo $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, "contents_css"));
            echo "',
            ";
        }
        // line 89
        echo "            ";
        if ((!(null === $this->getContext($context, "basic_entities")))) {
            // line 90
            echo "                basicEntities: '";
            echo $this->getContext($context, "basic_entities");
            echo "',
            ";
        }
        // line 92
        echo "            ";
        if ((!(null === $this->getContext($context, "entities")))) {
            // line 93
            echo "                entities: '";
            echo $this->getContext($context, "entities");
            echo "',
            ";
        }
        // line 95
        echo "            ";
        if ((!(null === $this->getContext($context, "entities_latin")))) {
            // line 96
            echo "                entities_latin: '";
            echo $this->getContext($context, "entities_latin");
            echo "',
            ";
        }
        // line 98
        echo "            ";
        if ((!(null === $this->getContext($context, "startup_mode")))) {
            // line 99
            echo "                startupMode: '";
            echo $this->getContext($context, "startup_mode");
            echo "',
            ";
        }
        // line 101
        echo "            ";
        if ($this->getContext($context, "plugins")) {
            // line 102
            echo "                extraPlugins: '";
            echo $this->getContext($context, "plugins");
            echo "',
            ";
        }
        // line 104
        echo "            toolbar: ";
        echo twig_jsonencode_filter($this->getContext($context, "toolbar"));
        echo "
        });
    ";
        // line 107
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrsteelCkeditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 107,  351 => 104,  345 => 102,  342 => 101,  336 => 99,  333 => 98,  327 => 96,  315 => 92,  309 => 90,  306 => 89,  300 => 87,  297 => 86,  291 => 84,  288 => 83,  279 => 80,  273 => 78,  270 => 77,  255 => 72,  246 => 69,  240 => 67,  234 => 65,  231 => 64,  219 => 60,  214 => 58,  187 => 49,  154 => 38,  145 => 35,  142 => 34,  136 => 32,  133 => 31,  116 => 25,  111 => 24,  97 => 23,  94 => 22,  88 => 20,  56 => 16,  33 => 5,  31 => 4,  25 => 3,  22 => 2,  20 => 1,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  375 => 110,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 93,  324 => 95,  321 => 91,  318 => 93,  312 => 88,  310 => 87,  302 => 86,  298 => 84,  286 => 80,  282 => 81,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  203 => 56,  200 => 55,  197 => 54,  178 => 46,  173 => 42,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  57 => 145,  52 => 104,  47 => 11,  44 => 74,  42 => 9,  39 => 61,  34 => 53,  301 => 137,  295 => 135,  292 => 134,  289 => 81,  281 => 129,  275 => 127,  269 => 75,  263 => 71,  257 => 121,  254 => 68,  249 => 70,  245 => 115,  233 => 62,  227 => 105,  221 => 102,  216 => 100,  213 => 99,  202 => 54,  196 => 91,  191 => 50,  186 => 88,  184 => 48,  181 => 86,  175 => 43,  169 => 43,  164 => 78,  160 => 40,  157 => 41,  155 => 75,  150 => 73,  144 => 33,  137 => 67,  132 => 59,  123 => 30,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  86 => 19,  80 => 41,  78 => 40,  75 => 39,  70 => 33,  62 => 156,  59 => 17,  54 => 144,  51 => 13,  38 => 17,  264 => 75,  261 => 74,  256 => 69,  252 => 119,  247 => 66,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  225 => 62,  220 => 59,  217 => 59,  211 => 98,  208 => 56,  205 => 54,  199 => 53,  193 => 51,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 44,  167 => 76,  163 => 41,  161 => 46,  156 => 44,  153 => 43,  151 => 37,  148 => 41,  140 => 68,  134 => 60,  128 => 58,  125 => 34,  121 => 29,  112 => 26,  110 => 25,  105 => 26,  89 => 21,  83 => 20,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  127 => 29,  124 => 28,  118 => 26,  113 => 40,  108 => 38,  102 => 36,  99 => 24,  96 => 34,  91 => 21,  85 => 30,  82 => 29,  77 => 18,  71 => 25,  69 => 190,  66 => 23,  63 => 22,  55 => 11,  49 => 103,  46 => 21,  43 => 20,  12 => 45,);
    }
}
