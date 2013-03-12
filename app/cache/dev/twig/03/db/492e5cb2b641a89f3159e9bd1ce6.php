<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_03db492e5cb2b641a89f3159e9bd1ce6 extends Twig_Template
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
        echo "Symfony - Configure global Secret";
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
    <h1>Global Secret</h1>
    <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
        <div class=\"symfony-form-row\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
            <div class=\"symfony-form-field\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                <a class=\"symfony-button-grey\" href=\"#\" onclick=\"generateSecret(); return false;\">Generate</a>
                <div class=\"symfony-form-errors\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                </div>
            </div>
        </div>

        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>

    </form>

    <script type=\"text/javascript\">
        function generateSecret()
        {
            var result = '';
            for (i=0; i < 32; i++) {
                result += Math.round(Math.random()*16).toString(16);
            }
            document.getElementById('distributionbundle_secret_step_secret').value = result;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 235,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  644 => 443,  633 => 442,  609 => 434,  385 => 159,  362 => 153,  344 => 147,  330 => 140,  320 => 135,  314 => 131,  280 => 114,  258 => 103,  347 => 160,  325 => 138,  316 => 145,  204 => 94,  209 => 77,  357 => 151,  345 => 102,  333 => 141,  327 => 139,  309 => 141,  300 => 87,  14 => 1,  229 => 96,  192 => 72,  381 => 150,  365 => 142,  351 => 104,  346 => 136,  339 => 145,  319 => 123,  288 => 129,  239 => 82,  231 => 88,  226 => 86,  215 => 79,  643 => 389,  634 => 383,  618 => 437,  613 => 435,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 158,  248 => 89,  183 => 63,  158 => 56,  301 => 125,  295 => 121,  292 => 120,  221 => 83,  202 => 73,  150 => 75,  160 => 59,  129 => 51,  264 => 105,  261 => 74,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 53,  188 => 66,  177 => 59,  161 => 80,  156 => 77,  148 => 74,  124 => 28,  113 => 40,  99 => 38,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 432,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 398,  536 => 129,  532 => 128,  526 => 127,  523 => 397,  518 => 395,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 160,  374 => 81,  370 => 156,  363 => 172,  350 => 168,  342 => 146,  323 => 149,  315 => 92,  307 => 157,  296 => 153,  294 => 152,  281 => 125,  275 => 111,  270 => 77,  265 => 140,  262 => 236,  249 => 70,  217 => 83,  214 => 82,  210 => 64,  185 => 68,  182 => 69,  174 => 58,  117 => 19,  140 => 42,  97 => 23,  672 => 216,  667 => 209,  661 => 444,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 433,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 401,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 396,  513 => 393,  508 => 391,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 152,  355 => 170,  352 => 149,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 84,  287 => 118,  285 => 168,  278 => 141,  266 => 137,  252 => 138,  241 => 101,  235 => 129,  227 => 105,  222 => 138,  193 => 68,  179 => 61,  166 => 82,  137 => 56,  86 => 29,  335 => 157,  326 => 90,  306 => 128,  303 => 162,  283 => 107,  279 => 80,  276 => 248,  273 => 110,  271 => 163,  268 => 107,  259 => 109,  255 => 72,  245 => 96,  218 => 91,  211 => 81,  206 => 78,  190 => 89,  187 => 49,  169 => 56,  167 => 64,  164 => 63,  134 => 54,  77 => 21,  65 => 17,  56 => 39,  53 => 38,  686 => 451,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 431,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 157,  375 => 231,  371 => 145,  366 => 155,  356 => 163,  353 => 138,  343 => 159,  337 => 164,  331 => 163,  329 => 127,  324 => 95,  318 => 93,  312 => 158,  310 => 184,  302 => 137,  298 => 84,  289 => 119,  286 => 85,  274 => 121,  272 => 144,  269 => 125,  254 => 101,  250 => 67,  247 => 97,  243 => 87,  238 => 218,  236 => 63,  233 => 98,  208 => 56,  203 => 77,  200 => 61,  197 => 68,  175 => 60,  173 => 85,  112 => 39,  110 => 38,  90 => 41,  87 => 33,  69 => 15,  49 => 15,  23 => 3,  82 => 26,  62 => 16,  40 => 8,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 150,  340 => 158,  336 => 99,  321 => 91,  313 => 99,  311 => 130,  308 => 129,  304 => 155,  297 => 86,  293 => 157,  284 => 89,  282 => 115,  277 => 104,  267 => 99,  263 => 123,  257 => 234,  251 => 105,  246 => 69,  240 => 219,  234 => 89,  228 => 87,  223 => 58,  219 => 60,  213 => 99,  207 => 95,  198 => 74,  181 => 87,  176 => 61,  170 => 60,  168 => 69,  146 => 49,  142 => 34,  128 => 45,  125 => 44,  107 => 37,  38 => 6,  144 => 73,  141 => 58,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 17,  61 => 18,  47 => 15,  105 => 35,  93 => 42,  76 => 34,  72 => 21,  68 => 30,  225 => 88,  216 => 72,  212 => 78,  205 => 71,  201 => 69,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 88,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 63,  118 => 26,  114 => 39,  104 => 37,  100 => 36,  78 => 25,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  27 => 5,  91 => 28,  84 => 23,  44 => 8,  25 => 3,  28 => 3,  24 => 2,  19 => 1,  94 => 22,  88 => 30,  79 => 35,  59 => 15,  31 => 6,  26 => 3,  21 => 1,  70 => 20,  63 => 16,  46 => 14,  22 => 2,  163 => 81,  155 => 51,  152 => 50,  149 => 54,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 47,  101 => 33,  96 => 35,  83 => 24,  80 => 32,  74 => 22,  66 => 19,  55 => 15,  52 => 18,  50 => 12,  43 => 12,  41 => 7,  37 => 6,  35 => 5,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 17,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 32,  133 => 31,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 24,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 31,  89 => 28,  85 => 31,  81 => 24,  73 => 20,  64 => 17,  60 => 20,  57 => 20,  54 => 13,  51 => 16,  48 => 11,  45 => 11,  42 => 12,  39 => 10,  36 => 9,  33 => 10,  30 => 5,);
    }
}
