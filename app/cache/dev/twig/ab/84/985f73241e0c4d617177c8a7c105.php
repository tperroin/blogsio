<?php

/* tperroinBlogSioBundle:Projet:projets.html.twig */
class __TwigTemplate_ab84985f73241e0c4d617177c8a7c105 extends Twig_Template
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
                <li><a href=\"#\">Contact Us</a></li>
            </ul>
        </div>
    ";
    }

    // line 15
    public function block_image_accueil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 17
    public function block_corps($context, array $blocks = array())
    {
        // line 18
        echo "
        ";
        // line 19
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
            // line 20
            echo "
        ";
            // line 21
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 2)) {
                // line 22
                echo "            <div class=\"row\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\"><div class=\"large-6 columns\">
                    <div class=\"panel\">
                        <h5>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                        <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                    </div>
                </div></a>
            </div>
        ";
            } else {
                // line 31
                echo "            <div class=\"row\">
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">
                    <div class=\"large-6 columns\">
                        <div class=\"panel callout radius\">
                            <h5>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre"), "html", null, true);
                echo "</h5>
                            <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "teaser"), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </a>
            </div>
        ";
            }
            // line 42
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
        // line 44
        echo "          
          
        



    ";
    }

    public function getTemplateName()
    {
        return "tperroinBlogSioBundle:Projet:projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  192 => 66,  204 => 70,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  630 => 381,  628 => 377,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 78,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 75,  160 => 18,  129 => 36,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 72,  161 => 79,  156 => 67,  148 => 65,  124 => 34,  113 => 64,  99 => 23,  12 => 45,  635 => 209,  608 => 370,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 78,  214 => 65,  210 => 64,  185 => 64,  182 => 82,  174 => 23,  117 => 47,  140 => 58,  97 => 44,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 389,  640 => 211,  634 => 383,  632 => 194,  629 => 207,  623 => 191,  621 => 202,  618 => 374,  612 => 199,  610 => 186,  604 => 368,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 346,  559 => 341,  553 => 111,  549 => 334,  546 => 109,  532 => 128,  524 => 103,  504 => 306,  501 => 96,  492 => 299,  485 => 292,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 179,  360 => 140,  355 => 170,  352 => 171,  338 => 170,  332 => 168,  305 => 182,  299 => 161,  291 => 151,  287 => 155,  285 => 168,  278 => 142,  266 => 138,  252 => 119,  241 => 101,  235 => 130,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 81,  137 => 41,  86 => 27,  335 => 94,  326 => 90,  306 => 87,  303 => 163,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 68,  169 => 46,  167 => 71,  164 => 19,  134 => 55,  77 => 28,  65 => 20,  56 => 18,  53 => 9,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 204,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 106,  521 => 317,  517 => 101,  512 => 99,  509 => 98,  506 => 160,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 146,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 217,  377 => 148,  375 => 231,  371 => 145,  366 => 178,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 42,  110 => 46,  90 => 19,  87 => 34,  69 => 11,  49 => 8,  23 => 3,  82 => 49,  62 => 15,  40 => 12,  20 => 1,  479 => 87,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 166,  308 => 97,  304 => 155,  297 => 177,  293 => 158,  284 => 89,  282 => 144,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 80,  181 => 50,  176 => 62,  170 => 22,  168 => 69,  146 => 49,  142 => 63,  128 => 35,  125 => 35,  107 => 25,  38 => 4,  144 => 73,  141 => 58,  135 => 55,  126 => 56,  109 => 59,  103 => 24,  67 => 16,  61 => 14,  47 => 12,  105 => 35,  93 => 20,  76 => 47,  72 => 28,  68 => 17,  225 => 95,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 84,  159 => 61,  154 => 66,  147 => 74,  132 => 108,  127 => 65,  121 => 63,  118 => 31,  114 => 39,  104 => 25,  100 => 33,  78 => 31,  75 => 30,  71 => 18,  58 => 23,  34 => 26,  27 => 5,  91 => 20,  84 => 35,  44 => 11,  25 => 3,  28 => 13,  24 => 4,  19 => 1,  94 => 21,  88 => 29,  79 => 25,  59 => 18,  31 => 2,  26 => 14,  21 => 12,  70 => 17,  63 => 23,  46 => 13,  22 => 3,  163 => 80,  155 => 51,  152 => 43,  149 => 54,  145 => 60,  139 => 57,  131 => 24,  123 => 43,  120 => 43,  115 => 30,  106 => 48,  101 => 45,  96 => 22,  83 => 39,  80 => 34,  74 => 19,  66 => 35,  55 => 17,  52 => 18,  50 => 22,  43 => 12,  41 => 11,  37 => 18,  35 => 7,  32 => 7,  29 => 4,  184 => 74,  178 => 88,  171 => 66,  165 => 63,  162 => 69,  157 => 17,  153 => 44,  151 => 55,  143 => 59,  138 => 42,  136 => 70,  133 => 69,  130 => 54,  122 => 104,  119 => 32,  116 => 31,  111 => 39,  108 => 26,  102 => 37,  98 => 22,  95 => 21,  92 => 52,  89 => 28,  85 => 31,  81 => 32,  73 => 18,  64 => 40,  60 => 19,  57 => 25,  54 => 36,  51 => 35,  48 => 17,  45 => 7,  42 => 10,  39 => 18,  36 => 17,  33 => 5,  30 => 16,);
    }
}
