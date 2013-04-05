<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_429656aebcdab7cc6e0b88c6e3d80efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "    ";
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"symfony-form-column\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "driver"), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "host"), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
        </div>
        <div class=\"symfony-form-column\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user"), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'row');
        echo "
        </div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 235,  786 => 466,  783 => 465,  772 => 463,  768 => 462,  764 => 460,  751 => 459,  725 => 454,  722 => 453,  703 => 451,  682 => 448,  678 => 447,  674 => 446,  670 => 445,  666 => 444,  662 => 443,  657 => 441,  614 => 434,  609 => 432,  605 => 431,  602 => 430,  556 => 399,  385 => 159,  362 => 153,  357 => 151,  344 => 147,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  280 => 114,  258 => 103,  347 => 160,  333 => 141,  325 => 138,  316 => 145,  309 => 141,  209 => 77,  229 => 96,  192 => 72,  204 => 71,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 145,  319 => 123,  288 => 129,  239 => 82,  231 => 88,  226 => 86,  215 => 79,  630 => 381,  628 => 377,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 391,  496 => 301,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 158,  248 => 89,  183 => 63,  158 => 56,  301 => 125,  295 => 121,  292 => 120,  221 => 83,  202 => 92,  150 => 75,  160 => 59,  129 => 36,  264 => 105,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 87,  177 => 59,  161 => 79,  156 => 67,  148 => 73,  124 => 59,  113 => 40,  99 => 43,  12 => 45,  635 => 209,  608 => 370,  597 => 361,  593 => 360,  588 => 429,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 394,  516 => 393,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 160,  374 => 81,  370 => 156,  363 => 172,  350 => 168,  342 => 146,  323 => 149,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 125,  275 => 111,  270 => 100,  265 => 140,  262 => 236,  249 => 118,  217 => 83,  214 => 82,  210 => 64,  185 => 68,  182 => 86,  174 => 58,  117 => 55,  140 => 42,  97 => 23,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 389,  640 => 440,  634 => 383,  632 => 194,  629 => 439,  623 => 191,  621 => 202,  618 => 374,  612 => 199,  610 => 186,  604 => 368,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 346,  559 => 341,  553 => 111,  549 => 334,  546 => 109,  532 => 128,  524 => 103,  504 => 306,  501 => 96,  492 => 299,  485 => 292,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 179,  360 => 152,  355 => 170,  352 => 149,  338 => 170,  332 => 168,  305 => 182,  299 => 161,  291 => 151,  287 => 118,  285 => 168,  278 => 142,  266 => 138,  252 => 100,  241 => 101,  235 => 130,  227 => 105,  222 => 138,  193 => 68,  179 => 85,  166 => 81,  137 => 69,  86 => 29,  335 => 157,  326 => 90,  306 => 128,  303 => 163,  283 => 107,  279 => 82,  276 => 248,  273 => 110,  271 => 163,  268 => 107,  259 => 109,  255 => 69,  245 => 96,  218 => 91,  211 => 81,  206 => 78,  190 => 67,  187 => 68,  169 => 82,  167 => 64,  164 => 80,  134 => 54,  77 => 21,  65 => 17,  56 => 39,  53 => 38,  686 => 450,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 442,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 396,  521 => 395,  517 => 101,  512 => 99,  509 => 98,  506 => 389,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 146,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 217,  377 => 157,  375 => 231,  371 => 145,  366 => 155,  356 => 163,  353 => 138,  343 => 159,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 137,  298 => 84,  289 => 119,  286 => 85,  274 => 121,  272 => 144,  269 => 125,  254 => 101,  250 => 136,  247 => 97,  243 => 87,  238 => 218,  236 => 63,  233 => 98,  208 => 70,  203 => 77,  200 => 61,  197 => 68,  175 => 94,  173 => 71,  112 => 39,  110 => 38,  90 => 28,  87 => 33,  69 => 15,  49 => 15,  23 => 3,  82 => 26,  62 => 16,  40 => 8,  20 => 1,  479 => 87,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 150,  340 => 158,  336 => 131,  321 => 91,  313 => 99,  311 => 130,  308 => 129,  304 => 155,  297 => 177,  293 => 158,  284 => 89,  282 => 115,  277 => 104,  267 => 99,  263 => 123,  257 => 234,  251 => 105,  246 => 76,  240 => 219,  234 => 89,  228 => 87,  223 => 58,  219 => 67,  213 => 99,  207 => 76,  198 => 74,  181 => 50,  176 => 84,  170 => 60,  168 => 69,  146 => 72,  142 => 71,  128 => 45,  125 => 44,  107 => 37,  38 => 6,  144 => 73,  141 => 58,  135 => 47,  126 => 56,  109 => 55,  103 => 25,  67 => 17,  61 => 18,  47 => 15,  105 => 35,  93 => 41,  76 => 17,  72 => 21,  68 => 20,  225 => 88,  216 => 72,  212 => 78,  205 => 93,  201 => 69,  196 => 69,  194 => 90,  191 => 70,  189 => 77,  186 => 88,  180 => 72,  172 => 64,  159 => 78,  154 => 75,  147 => 58,  132 => 47,  127 => 52,  121 => 63,  118 => 31,  114 => 39,  104 => 37,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  27 => 5,  91 => 28,  84 => 23,  44 => 8,  25 => 3,  28 => 3,  24 => 2,  19 => 1,  94 => 21,  88 => 30,  79 => 18,  59 => 15,  31 => 6,  26 => 3,  21 => 1,  70 => 13,  63 => 16,  46 => 12,  22 => 2,  163 => 80,  155 => 51,  152 => 43,  149 => 54,  145 => 57,  139 => 57,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 48,  101 => 33,  96 => 35,  83 => 24,  80 => 32,  74 => 22,  66 => 28,  55 => 15,  52 => 18,  50 => 12,  43 => 12,  41 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 62,  171 => 83,  165 => 54,  162 => 53,  157 => 17,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 70,  133 => 69,  130 => 39,  122 => 51,  119 => 43,  116 => 31,  111 => 39,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 31,  89 => 28,  85 => 38,  81 => 24,  73 => 20,  64 => 11,  60 => 20,  57 => 20,  54 => 13,  51 => 16,  48 => 20,  45 => 11,  42 => 11,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
