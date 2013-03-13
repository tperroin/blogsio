<?php

/* SonataNewsBundle:Post:view.html.twig */
class __TwigTemplate_f58b63cc526166438c291cb2cafebc47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'corps' => array($this, 'block_corps'),
            'image_accueil' => array($this, 'block_image_accueil'),
            'titre_date' => array($this, 'block_titre_date'),
            'contenu' => array($this, 'block_contenu'),
            'commentaires' => array($this, 'block_commentaires'),
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
    public function block_navbar($context, array $blocks = array())
    {
        echo " 

    <div class=\"twelve columns\">
        <ul class=\"nav-bar\">
            <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
            <li class=\"active\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_news_home"), "html", null, true);
        echo "\">Blog</a></li>
            <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tperroin_projets"), "html", null, true);
        echo "\">Projets</a></li>
            <li><a href=\"#\">Contact Us</a></li>
        </ul>
    </div>

";
    }

    // line 16
    public function block_corps($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('image_accueil', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('titre_date', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('contenu', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('commentaires', $context, $blocks);
        // line 70
        echo "
";
    }

    // line 18
    public function block_image_accueil($context, array $blocks = array())
    {
    }

    // line 20
    public function block_titre_date($context, array $blocks = array())
    {
        // line 21
        echo "
        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">

                    <h2><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getContext($context, "post")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</a></h2>
                    ";
        // line 27
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getContext($context, "post"), "publicationDateStart"));
        echo "
                </div>
            </div>
        </div>

    ";
    }

    // line 34
    public function block_contenu($context, array $blocks = array())
    {
        // line 35
        echo "
        &nbsp;

        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">
                    ";
        // line 41
        echo $this->getAttribute($this->getContext($context, "post"), "content");
        echo "
                </div>
            </div>
        </div>

        &nbsp;

    ";
    }

    // line 50
    public function block_commentaires($context, array $blocks = array())
    {
        // line 51
        echo "        <div class=\"row\">
            <div class=\"six columns\">
                <div class=\"row\">
        ";
        // line 54
        echo $this->env->getExtension('actions')->renderAction("SonataNewsBundle:Post:comments", array("postId" => $this->getAttribute($this->getContext($context, "post"), "id")), array());
        // line 55
        echo "
        ";
        // line 56
        if ($this->getAttribute($this->getContext($context, "post"), "iscommentable")) {
            // line 57
            echo "            ";
            echo $this->env->getExtension('actions')->renderAction("SonataNewsBundle:Post:addCommentForm", array("postId" => $this->getAttribute($this->getContext($context, "post"), "id"), "form" => $this->getContext($context, "form")), array());
            // line 61
            echo "        ";
        } else {
            // line 62
            echo "
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_comments_are_closed", array(), "SonataNewsBundle"), "html", null, true);
            echo "

        ";
        }
        // line 66
        echo "                        </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 86,  231 => 83,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 36,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 77,  129 => 41,  264 => 98,  261 => 96,  256 => 69,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 58,  156 => 57,  148 => 65,  124 => 44,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 67,  182 => 82,  174 => 50,  117 => 19,  140 => 68,  97 => 44,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 151,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 149,  235 => 129,  227 => 105,  222 => 138,  193 => 50,  179 => 63,  166 => 90,  137 => 88,  86 => 49,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 69,  187 => 59,  169 => 80,  167 => 60,  164 => 72,  134 => 60,  77 => 49,  65 => 18,  56 => 40,  53 => 10,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 84,  208 => 73,  203 => 128,  200 => 61,  197 => 60,  175 => 78,  173 => 110,  112 => 50,  110 => 51,  90 => 35,  87 => 18,  69 => 30,  49 => 9,  23 => 15,  82 => 70,  62 => 17,  40 => 17,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 177,  293 => 157,  284 => 89,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 122,  181 => 115,  176 => 62,  170 => 75,  168 => 60,  146 => 46,  142 => 51,  128 => 56,  125 => 9,  107 => 44,  38 => 5,  144 => 51,  141 => 50,  135 => 47,  126 => 24,  109 => 44,  103 => 45,  67 => 19,  61 => 20,  47 => 19,  105 => 26,  93 => 43,  76 => 30,  72 => 33,  68 => 28,  225 => 60,  216 => 100,  212 => 75,  205 => 54,  201 => 123,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 56,  147 => 32,  132 => 20,  127 => 54,  121 => 35,  118 => 34,  114 => 46,  104 => 49,  100 => 66,  78 => 20,  75 => 34,  71 => 30,  58 => 23,  34 => 19,  27 => 16,  91 => 41,  84 => 18,  44 => 18,  25 => 1,  28 => 3,  24 => 14,  19 => 11,  94 => 60,  88 => 57,  79 => 22,  59 => 16,  31 => 4,  26 => 2,  21 => 12,  70 => 20,  63 => 23,  46 => 24,  22 => 14,  163 => 74,  155 => 75,  152 => 37,  149 => 54,  145 => 64,  139 => 61,  131 => 55,  123 => 55,  120 => 20,  115 => 75,  106 => 47,  101 => 45,  96 => 43,  83 => 15,  80 => 50,  74 => 15,  66 => 31,  55 => 21,  52 => 27,  50 => 11,  43 => 8,  41 => 7,  37 => 8,  35 => 5,  32 => 15,  29 => 18,  184 => 87,  178 => 52,  171 => 66,  165 => 63,  162 => 62,  157 => 76,  153 => 67,  151 => 55,  143 => 45,  138 => 22,  136 => 48,  133 => 58,  130 => 46,  122 => 8,  119 => 42,  116 => 6,  111 => 39,  108 => 27,  102 => 26,  98 => 47,  95 => 21,  92 => 20,  89 => 30,  85 => 38,  81 => 37,  73 => 32,  64 => 26,  60 => 25,  57 => 34,  54 => 15,  51 => 20,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 16,  33 => 3,  30 => 15,);
    }
}
