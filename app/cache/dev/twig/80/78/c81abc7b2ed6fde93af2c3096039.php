<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_8078c81abc7b2ed6fde93af2c3096039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget', array("attr" => array("class" => "title")));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 44,  148 => 41,  124 => 47,  113 => 40,  99 => 23,  12 => 45,  635 => 209,  608 => 198,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 148,  275 => 145,  270 => 143,  265 => 140,  262 => 139,  249 => 77,  217 => 58,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 36,  140 => 56,  97 => 40,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 198,  640 => 211,  634 => 195,  632 => 194,  629 => 207,  623 => 191,  621 => 202,  618 => 189,  612 => 199,  610 => 186,  604 => 197,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 187,  559 => 145,  553 => 111,  549 => 131,  546 => 109,  532 => 128,  524 => 103,  504 => 118,  501 => 96,  492 => 94,  485 => 114,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 222,  384 => 212,  382 => 93,  369 => 179,  360 => 175,  355 => 170,  352 => 171,  338 => 170,  332 => 168,  305 => 164,  299 => 161,  291 => 151,  287 => 155,  285 => 145,  278 => 142,  266 => 138,  252 => 68,  241 => 73,  235 => 130,  227 => 128,  222 => 68,  193 => 50,  179 => 112,  166 => 91,  137 => 43,  86 => 25,  335 => 94,  326 => 90,  306 => 87,  303 => 163,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 66,  218 => 57,  211 => 56,  206 => 51,  190 => 49,  187 => 49,  169 => 50,  167 => 76,  164 => 85,  134 => 37,  77 => 13,  65 => 5,  56 => 25,  53 => 10,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 204,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 106,  521 => 125,  517 => 101,  512 => 99,  509 => 98,  506 => 160,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 146,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 217,  377 => 82,  375 => 182,  371 => 109,  366 => 178,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 167,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 85,  274 => 77,  272 => 144,  269 => 139,  254 => 68,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 62,  208 => 55,  203 => 62,  200 => 61,  197 => 60,  175 => 45,  173 => 95,  112 => 47,  110 => 29,  90 => 39,  87 => 17,  69 => 31,  49 => 28,  23 => 11,  82 => 36,  62 => 27,  40 => 24,  20 => 11,  479 => 87,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 166,  308 => 97,  304 => 155,  297 => 160,  293 => 158,  284 => 89,  282 => 144,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 69,  207 => 63,  198 => 123,  181 => 47,  176 => 111,  170 => 61,  168 => 60,  146 => 46,  142 => 56,  128 => 35,  125 => 51,  107 => 44,  38 => 14,  144 => 32,  141 => 51,  135 => 47,  126 => 45,  109 => 47,  103 => 45,  67 => 30,  61 => 29,  47 => 21,  105 => 26,  93 => 41,  76 => 19,  72 => 19,  68 => 24,  225 => 60,  216 => 90,  212 => 88,  205 => 54,  201 => 124,  196 => 122,  194 => 79,  191 => 56,  189 => 77,  186 => 76,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 58,  132 => 48,  127 => 52,  121 => 33,  118 => 49,  114 => 46,  104 => 42,  100 => 42,  78 => 21,  75 => 32,  71 => 30,  58 => 12,  34 => 13,  27 => 14,  91 => 38,  84 => 36,  44 => 27,  25 => 12,  28 => 13,  24 => 12,  19 => 1,  94 => 40,  88 => 6,  79 => 34,  59 => 26,  31 => 14,  26 => 14,  21 => 2,  70 => 20,  63 => 28,  46 => 9,  22 => 2,  163 => 74,  155 => 82,  152 => 35,  149 => 47,  145 => 46,  139 => 31,  131 => 55,  123 => 52,  120 => 21,  115 => 48,  106 => 44,  101 => 44,  96 => 42,  83 => 15,  80 => 14,  74 => 31,  66 => 28,  55 => 25,  52 => 24,  50 => 23,  43 => 4,  41 => 20,  37 => 17,  35 => 17,  32 => 14,  29 => 4,  184 => 115,  178 => 52,  171 => 94,  165 => 58,  162 => 57,  157 => 83,  153 => 43,  151 => 42,  143 => 45,  138 => 57,  136 => 50,  133 => 54,  130 => 67,  122 => 50,  119 => 49,  116 => 35,  111 => 30,  108 => 44,  102 => 41,  98 => 21,  95 => 19,  92 => 39,  89 => 17,  85 => 37,  81 => 178,  73 => 30,  64 => 30,  60 => 15,  57 => 5,  54 => 25,  51 => 29,  48 => 15,  45 => 21,  42 => 20,  39 => 3,  36 => 17,  33 => 15,  30 => 15,);
    }
}
