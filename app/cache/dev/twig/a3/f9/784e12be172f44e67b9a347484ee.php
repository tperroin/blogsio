<?php

/* SonataNewsBundle:Post:comment_form.html.twig */
class __TwigTemplate_a3f9784e12be172f44e67b9a347484ee extends Twig_Template
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
<h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_leave_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>

<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_add_comment", array("id" => $this->getContext($context, "post_id"))), "html", null, true);
        echo "\" method=\"POST\" >
    <div class=\"clearfix\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "
    </div>

    <div class=\"clearfix\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "
    </div>

    <div class=\"clearfix\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'widget');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "url"), 'errors');
        echo "
    </div>

    <div class=\"clearfix\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'label');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'widget');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'errors');
        echo "
    </div>

    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

    <input type=\"submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_add_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 86,  231 => 83,  226 => 81,  215 => 76,  630 => 381,  628 => 377,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 69,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 23,  129 => 55,  264 => 98,  261 => 96,  256 => 69,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 58,  156 => 55,  148 => 65,  124 => 44,  113 => 40,  99 => 23,  12 => 45,  635 => 209,  608 => 370,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 67,  182 => 82,  174 => 77,  117 => 47,  140 => 68,  97 => 44,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 389,  640 => 211,  634 => 383,  632 => 194,  629 => 207,  623 => 191,  621 => 202,  618 => 374,  612 => 199,  610 => 186,  604 => 368,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 346,  559 => 341,  553 => 111,  549 => 334,  546 => 109,  532 => 128,  524 => 103,  504 => 306,  501 => 96,  492 => 299,  485 => 292,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 179,  360 => 140,  355 => 170,  352 => 171,  338 => 170,  332 => 168,  305 => 182,  299 => 161,  291 => 151,  287 => 155,  285 => 168,  278 => 142,  266 => 138,  252 => 119,  241 => 149,  235 => 130,  227 => 105,  222 => 138,  193 => 50,  179 => 63,  166 => 91,  137 => 88,  86 => 40,  335 => 94,  326 => 90,  306 => 87,  303 => 163,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 69,  187 => 68,  169 => 80,  167 => 60,  164 => 72,  134 => 60,  77 => 36,  65 => 39,  56 => 28,  53 => 23,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 204,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 106,  521 => 317,  517 => 101,  512 => 99,  509 => 98,  506 => 160,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 146,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 217,  377 => 148,  375 => 231,  371 => 145,  366 => 178,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 84,  208 => 73,  203 => 128,  200 => 61,  197 => 60,  175 => 78,  173 => 110,  112 => 51,  110 => 51,  90 => 35,  87 => 59,  69 => 30,  49 => 12,  23 => 18,  82 => 39,  62 => 30,  40 => 20,  20 => 1,  479 => 87,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 166,  308 => 97,  304 => 155,  297 => 177,  293 => 158,  284 => 89,  282 => 144,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 123,  181 => 115,  176 => 62,  170 => 75,  168 => 60,  146 => 64,  142 => 63,  128 => 56,  125 => 51,  107 => 44,  38 => 25,  144 => 92,  141 => 61,  135 => 47,  126 => 56,  109 => 44,  103 => 45,  67 => 27,  61 => 18,  47 => 24,  105 => 26,  93 => 43,  76 => 36,  72 => 35,  68 => 49,  225 => 60,  216 => 100,  212 => 75,  205 => 54,  201 => 124,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 20,  147 => 58,  132 => 59,  127 => 54,  121 => 54,  118 => 53,  114 => 46,  104 => 49,  100 => 66,  78 => 20,  75 => 19,  71 => 30,  58 => 23,  34 => 16,  27 => 16,  91 => 41,  84 => 35,  44 => 24,  25 => 14,  28 => 3,  24 => 14,  19 => 13,  94 => 43,  88 => 31,  79 => 31,  59 => 23,  31 => 4,  26 => 2,  21 => 12,  70 => 32,  63 => 14,  46 => 9,  22 => 14,  163 => 74,  155 => 75,  152 => 64,  149 => 53,  145 => 64,  139 => 61,  131 => 55,  123 => 55,  120 => 56,  115 => 75,  106 => 48,  101 => 45,  96 => 43,  83 => 15,  80 => 36,  74 => 15,  66 => 31,  55 => 26,  52 => 27,  50 => 11,  43 => 8,  41 => 17,  37 => 18,  35 => 5,  32 => 18,  29 => 3,  184 => 87,  178 => 52,  171 => 61,  165 => 58,  162 => 57,  157 => 21,  153 => 67,  151 => 42,  143 => 45,  138 => 57,  136 => 60,  133 => 58,  130 => 46,  122 => 55,  119 => 42,  116 => 52,  111 => 39,  108 => 71,  102 => 47,  98 => 47,  95 => 64,  92 => 43,  89 => 41,  85 => 38,  81 => 37,  73 => 32,  64 => 26,  60 => 25,  57 => 34,  54 => 12,  51 => 25,  48 => 21,  45 => 9,  42 => 8,  39 => 19,  36 => 19,  33 => 15,  30 => 15,);
    }
}
