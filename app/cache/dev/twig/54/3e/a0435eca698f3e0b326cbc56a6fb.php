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
        return array (  357 => 107,  345 => 102,  333 => 98,  327 => 96,  309 => 90,  300 => 87,  14 => 1,  229 => 96,  192 => 66,  381 => 150,  365 => 142,  351 => 104,  346 => 136,  339 => 133,  319 => 123,  288 => 83,  239 => 82,  231 => 64,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 78,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 54,  150 => 75,  160 => 40,  129 => 51,  264 => 75,  261 => 74,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 53,  188 => 48,  177 => 72,  161 => 79,  156 => 67,  148 => 65,  124 => 28,  113 => 64,  99 => 38,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 101,  323 => 124,  315 => 92,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 77,  265 => 140,  262 => 157,  249 => 70,  217 => 59,  214 => 58,  210 => 64,  185 => 64,  182 => 82,  174 => 23,  117 => 19,  140 => 58,  97 => 23,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 84,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 101,  235 => 129,  227 => 105,  222 => 138,  193 => 51,  179 => 61,  166 => 81,  137 => 56,  86 => 19,  335 => 94,  326 => 90,  306 => 89,  303 => 162,  283 => 107,  279 => 80,  276 => 165,  273 => 78,  271 => 163,  268 => 78,  259 => 81,  255 => 72,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 49,  169 => 43,  167 => 71,  164 => 19,  134 => 55,  77 => 18,  65 => 20,  56 => 16,  53 => 9,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 95,  318 => 93,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 56,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 42,  110 => 46,  90 => 38,  87 => 18,  69 => 14,  49 => 8,  23 => 10,  82 => 49,  62 => 15,  40 => 14,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 99,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 86,  293 => 157,  284 => 89,  282 => 81,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 69,  240 => 67,  234 => 65,  228 => 82,  223 => 58,  219 => 60,  213 => 99,  207 => 129,  198 => 80,  181 => 115,  176 => 62,  170 => 22,  168 => 69,  146 => 49,  142 => 34,  128 => 44,  125 => 9,  107 => 40,  38 => 4,  144 => 73,  141 => 58,  135 => 55,  126 => 24,  109 => 59,  103 => 34,  67 => 37,  61 => 23,  47 => 11,  105 => 35,  93 => 37,  76 => 47,  72 => 16,  68 => 17,  225 => 62,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 44,  159 => 61,  154 => 38,  147 => 74,  132 => 108,  127 => 29,  121 => 63,  118 => 26,  114 => 39,  104 => 43,  100 => 33,  78 => 31,  75 => 30,  71 => 18,  58 => 22,  34 => 10,  27 => 5,  91 => 21,  84 => 35,  44 => 16,  25 => 3,  28 => 5,  24 => 4,  19 => 1,  94 => 22,  88 => 20,  79 => 25,  59 => 17,  31 => 4,  26 => 11,  21 => 2,  70 => 43,  63 => 23,  46 => 11,  22 => 2,  163 => 41,  155 => 51,  152 => 50,  149 => 54,  145 => 35,  139 => 57,  131 => 55,  123 => 43,  120 => 43,  115 => 75,  106 => 47,  101 => 45,  96 => 35,  83 => 39,  80 => 34,  74 => 31,  66 => 25,  55 => 17,  52 => 19,  50 => 12,  43 => 12,  41 => 7,  37 => 10,  35 => 7,  32 => 9,  29 => 3,  184 => 48,  178 => 46,  171 => 66,  165 => 63,  162 => 69,  157 => 17,  153 => 63,  151 => 37,  143 => 59,  138 => 47,  136 => 32,  133 => 31,  130 => 54,  122 => 104,  119 => 62,  116 => 25,  111 => 24,  108 => 36,  102 => 37,  98 => 47,  95 => 21,  92 => 52,  89 => 28,  85 => 31,  81 => 32,  73 => 23,  64 => 24,  60 => 19,  57 => 7,  54 => 20,  51 => 13,  48 => 18,  45 => 7,  42 => 9,  39 => 18,  36 => 5,  33 => 5,  30 => 8,);
    }
}
