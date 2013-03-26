<?php

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_ed1d46e171024ca15714e96e16905c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "settings"), "title")) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "title"), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-gallery-container\">
        <div id=\"sonata-media-block-gallery-";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\" class=\"nivoGallery\">
            <ul>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 22
            echo "                    <li data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "type"), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "title"), "html", null, true);
            echo "\" data-caption=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "caption"), "html", null, true);
            echo "\">
                        ";
            // line 23
            if (($this->getAttribute($this->getContext($context, "element"), "type") == "image")) {
                // line 24
                echo "                            ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getContext($context, "element"), "media"), $this->getAttribute($this->getContext($context, "settings"), "format"), array());
                // line 25
                echo "                        ";
            } elseif (($this->getAttribute($this->getContext($context, "element"), "type") == "video")) {
                // line 26
                echo "                            ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getContext($context, "element"), "media"), $this->getAttribute($this->getContext($context, "settings"), "format"), array());
                // line 27
                echo "                        ";
            }
            // line 28
            echo "                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                    ";
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "            </ul>
        </div>
    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            jQuery('#sonata-media-block-gallery-";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "').nivoGallery({
                 pauseTime:     ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "pauseTime"), "html", null, true);
        echo ",
                 animSpeed:     ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "animSpeed"), "html", null, true);
        echo ",
                 effect:        'fade',
                 startPaused:   ";
        // line 42
        if (($this->getAttribute($this->getContext($context, "settings"), "startPaused") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                 directionNav:  ";
        // line 43
        if (($this->getAttribute($this->getContext($context, "settings"), "directionNav") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                 progressBar:   ";
        // line 44
        if (($this->getAttribute($this->getContext($context, "settings"), "progressBar") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  192 => 66,  195 => 60,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  630 => 381,  628 => 377,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 64,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 18,  129 => 51,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 72,  161 => 56,  156 => 67,  148 => 65,  124 => 51,  113 => 40,  99 => 38,  12 => 45,  635 => 209,  608 => 370,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 64,  182 => 51,  174 => 23,  117 => 47,  140 => 58,  97 => 44,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 389,  640 => 211,  634 => 383,  632 => 194,  629 => 207,  623 => 191,  621 => 202,  618 => 374,  612 => 199,  610 => 186,  604 => 368,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 346,  559 => 341,  553 => 111,  549 => 334,  546 => 109,  532 => 128,  524 => 103,  504 => 306,  501 => 96,  492 => 299,  485 => 292,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 179,  360 => 140,  355 => 170,  352 => 171,  338 => 170,  332 => 168,  305 => 182,  299 => 161,  291 => 151,  287 => 155,  285 => 168,  278 => 142,  266 => 138,  252 => 119,  241 => 101,  235 => 130,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 37,  137 => 56,  86 => 31,  335 => 94,  326 => 90,  306 => 87,  303 => 163,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 68,  169 => 80,  167 => 71,  164 => 19,  134 => 55,  77 => 28,  65 => 24,  56 => 21,  53 => 23,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 204,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 106,  521 => 317,  517 => 101,  512 => 99,  509 => 98,  506 => 160,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 146,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 217,  377 => 148,  375 => 231,  371 => 145,  366 => 178,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 42,  110 => 46,  90 => 38,  87 => 34,  69 => 30,  49 => 21,  23 => 13,  82 => 70,  62 => 25,  40 => 17,  20 => 11,  479 => 87,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 166,  308 => 97,  304 => 155,  297 => 177,  293 => 158,  284 => 89,  282 => 144,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 80,  181 => 115,  176 => 62,  170 => 22,  168 => 69,  146 => 49,  142 => 63,  128 => 44,  125 => 23,  107 => 40,  38 => 16,  144 => 51,  141 => 58,  135 => 55,  126 => 56,  109 => 44,  103 => 39,  67 => 19,  61 => 26,  47 => 20,  105 => 46,  93 => 37,  76 => 36,  72 => 28,  68 => 25,  225 => 95,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 53,  180 => 72,  172 => 16,  159 => 61,  154 => 66,  147 => 61,  132 => 108,  127 => 44,  121 => 35,  118 => 103,  114 => 102,  104 => 43,  100 => 94,  78 => 31,  75 => 30,  71 => 26,  58 => 23,  34 => 15,  27 => 14,  91 => 32,  84 => 35,  44 => 19,  25 => 14,  28 => 13,  24 => 14,  19 => 11,  94 => 39,  88 => 29,  79 => 31,  59 => 26,  31 => 14,  26 => 2,  21 => 12,  70 => 20,  63 => 23,  46 => 20,  22 => 12,  163 => 66,  155 => 51,  152 => 50,  149 => 54,  145 => 60,  139 => 57,  131 => 24,  123 => 43,  120 => 43,  115 => 75,  106 => 48,  101 => 45,  96 => 35,  83 => 30,  80 => 34,  74 => 27,  66 => 29,  55 => 22,  52 => 22,  50 => 22,  43 => 8,  41 => 19,  37 => 18,  35 => 17,  32 => 15,  29 => 14,  184 => 74,  178 => 52,  171 => 66,  165 => 63,  162 => 69,  157 => 17,  153 => 63,  151 => 55,  143 => 59,  138 => 47,  136 => 109,  133 => 54,  130 => 54,  122 => 104,  119 => 19,  116 => 47,  111 => 39,  108 => 99,  102 => 37,  98 => 47,  95 => 21,  92 => 20,  89 => 32,  85 => 31,  81 => 32,  73 => 33,  64 => 26,  60 => 25,  57 => 25,  54 => 22,  51 => 21,  48 => 21,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 3,  30 => 15,);
    }
}
