<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_58de6709604c9620a22d850e53aed18f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $this->getContext($context, "val"), "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  97 => 42,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 186,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 145,  549 => 110,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 47,  448 => 44,  431 => 39,  425 => 36,  415 => 32,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 183,  369 => 178,  360 => 174,  355 => 171,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 156,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 136,  241 => 131,  235 => 129,  227 => 127,  222 => 125,  193 => 120,  179 => 111,  166 => 90,  137 => 69,  86 => 59,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 84,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 70,  255 => 69,  245 => 66,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  169 => 43,  167 => 42,  164 => 84,  134 => 26,  77 => 8,  65 => 5,  56 => 27,  53 => 77,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 169,  560 => 168,  555 => 144,  538 => 165,  521 => 164,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 119,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 111,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 104,  343 => 98,  337 => 96,  331 => 92,  329 => 166,  324 => 92,  318 => 90,  312 => 89,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 85,  274 => 77,  272 => 139,  269 => 138,  254 => 68,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  236 => 63,  233 => 62,  208 => 57,  203 => 56,  200 => 55,  197 => 54,  175 => 45,  173 => 94,  112 => 48,  110 => 63,  90 => 18,  87 => 17,  69 => 29,  49 => 22,  23 => 12,  82 => 35,  62 => 156,  40 => 17,  20 => 11,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 151,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 133,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 126,  386 => 115,  383 => 121,  380 => 112,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 97,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 95,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 81,  251 => 80,  246 => 134,  240 => 64,  234 => 74,  228 => 59,  223 => 58,  219 => 124,  213 => 69,  207 => 68,  198 => 122,  181 => 47,  176 => 110,  170 => 61,  168 => 60,  146 => 34,  142 => 56,  128 => 24,  125 => 44,  107 => 24,  38 => 24,  144 => 32,  141 => 51,  135 => 47,  126 => 45,  109 => 18,  103 => 60,  67 => 52,  61 => 17,  47 => 25,  105 => 24,  93 => 41,  76 => 22,  72 => 54,  68 => 6,  225 => 126,  216 => 90,  212 => 88,  205 => 84,  201 => 123,  196 => 121,  194 => 79,  191 => 119,  189 => 77,  186 => 76,  180 => 72,  172 => 44,  159 => 61,  154 => 59,  147 => 33,  132 => 48,  127 => 52,  121 => 29,  118 => 28,  114 => 42,  104 => 23,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  58 => 16,  34 => 15,  27 => 14,  91 => 20,  84 => 16,  44 => 27,  25 => 3,  28 => 14,  24 => 12,  19 => 1,  94 => 39,  88 => 6,  79 => 34,  59 => 155,  31 => 15,  26 => 2,  21 => 2,  70 => 20,  63 => 27,  46 => 21,  22 => 11,  163 => 59,  155 => 81,  152 => 35,  149 => 34,  145 => 46,  139 => 31,  131 => 25,  123 => 51,  120 => 21,  115 => 49,  106 => 61,  101 => 43,  96 => 21,  83 => 58,  80 => 57,  74 => 31,  66 => 15,  55 => 24,  52 => 15,  50 => 75,  43 => 18,  41 => 19,  37 => 21,  35 => 16,  32 => 32,  29 => 13,  184 => 114,  178 => 46,  171 => 93,  165 => 58,  162 => 57,  157 => 82,  153 => 54,  151 => 53,  143 => 71,  138 => 51,  136 => 50,  133 => 67,  130 => 66,  122 => 22,  119 => 50,  116 => 35,  111 => 37,  108 => 47,  102 => 30,  98 => 21,  95 => 20,  92 => 19,  89 => 40,  85 => 25,  81 => 26,  73 => 7,  64 => 18,  60 => 26,  57 => 23,  54 => 144,  51 => 21,  48 => 64,  45 => 19,  42 => 26,  39 => 16,  36 => 16,  33 => 15,  30 => 15,);
    }
}