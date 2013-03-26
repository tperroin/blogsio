<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_8e923954b1041dfc973e19945fd85d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute($this->getContext($context, "field_description"), "hasassociationadmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "element")), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getContext($context, "field_description"));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 381,  628 => 377,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 240,  379 => 236,  248 => 153,  183 => 83,  158 => 69,  301 => 137,  295 => 135,  292 => 134,  221 => 102,  202 => 94,  150 => 93,  160 => 77,  129 => 55,  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 65,  148 => 65,  124 => 47,  113 => 40,  99 => 23,  12 => 45,  635 => 209,  608 => 370,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  558 => 134,  540 => 130,  536 => 129,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  499 => 115,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 210,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 143,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 47,  140 => 68,  97 => 39,  679 => 218,  676 => 217,  671 => 210,  665 => 207,  656 => 203,  651 => 201,  645 => 199,  643 => 389,  640 => 211,  634 => 383,  632 => 194,  629 => 207,  623 => 191,  621 => 202,  618 => 374,  612 => 199,  610 => 186,  604 => 368,  599 => 157,  595 => 154,  589 => 153,  580 => 150,  570 => 188,  567 => 346,  559 => 341,  553 => 111,  549 => 334,  546 => 109,  532 => 128,  524 => 103,  504 => 306,  501 => 96,  492 => 299,  485 => 292,  474 => 112,  471 => 85,  465 => 49,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 222,  384 => 237,  382 => 93,  369 => 179,  360 => 222,  355 => 170,  352 => 171,  338 => 170,  332 => 168,  305 => 182,  299 => 161,  291 => 151,  287 => 155,  285 => 168,  278 => 142,  266 => 138,  252 => 119,  241 => 149,  235 => 130,  227 => 105,  222 => 138,  193 => 50,  179 => 112,  166 => 91,  137 => 88,  86 => 40,  335 => 94,  326 => 90,  306 => 87,  303 => 163,  283 => 149,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 49,  187 => 118,  169 => 80,  167 => 76,  164 => 104,  134 => 60,  77 => 58,  65 => 31,  56 => 40,  53 => 23,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 204,  654 => 202,  642 => 193,  639 => 192,  636 => 191,  627 => 206,  624 => 184,  607 => 185,  590 => 181,  585 => 179,  581 => 191,  578 => 177,  575 => 149,  572 => 175,  566 => 171,  562 => 136,  560 => 168,  555 => 167,  538 => 106,  521 => 317,  517 => 101,  512 => 99,  509 => 98,  506 => 160,  503 => 159,  500 => 158,  498 => 95,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 146,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 217,  377 => 232,  375 => 231,  371 => 109,  366 => 178,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 200,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 86,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 154,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 146,  208 => 97,  203 => 128,  200 => 61,  197 => 60,  175 => 78,  173 => 110,  112 => 50,  110 => 51,  90 => 39,  87 => 59,  69 => 24,  49 => 24,  23 => 18,  82 => 57,  62 => 30,  40 => 19,  20 => 1,  479 => 87,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 183,  373 => 116,  367 => 112,  364 => 177,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 166,  308 => 97,  304 => 155,  297 => 177,  293 => 158,  284 => 89,  282 => 144,  277 => 78,  267 => 85,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 123,  181 => 115,  176 => 111,  170 => 75,  168 => 60,  146 => 46,  142 => 56,  128 => 56,  125 => 51,  107 => 44,  38 => 32,  144 => 92,  141 => 61,  135 => 47,  126 => 83,  109 => 44,  103 => 45,  67 => 51,  61 => 18,  47 => 17,  105 => 26,  93 => 43,  76 => 28,  72 => 25,  68 => 49,  225 => 60,  216 => 100,  212 => 88,  205 => 54,  201 => 124,  196 => 91,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 58,  132 => 86,  127 => 54,  121 => 54,  118 => 53,  114 => 46,  104 => 49,  100 => 66,  78 => 29,  75 => 28,  71 => 30,  58 => 23,  34 => 16,  27 => 14,  91 => 38,  84 => 62,  44 => 19,  25 => 12,  28 => 14,  24 => 13,  19 => 11,  94 => 43,  88 => 31,  79 => 16,  59 => 23,  31 => 15,  26 => 20,  21 => 2,  70 => 33,  63 => 24,  46 => 35,  22 => 12,  163 => 74,  155 => 75,  152 => 64,  149 => 47,  145 => 64,  139 => 61,  131 => 55,  123 => 55,  120 => 56,  115 => 75,  106 => 47,  101 => 71,  96 => 21,  83 => 15,  80 => 37,  74 => 15,  66 => 25,  55 => 22,  52 => 17,  50 => 20,  43 => 33,  41 => 18,  37 => 17,  35 => 16,  32 => 16,  29 => 21,  184 => 87,  178 => 52,  171 => 94,  165 => 58,  162 => 57,  157 => 76,  153 => 67,  151 => 42,  143 => 45,  138 => 57,  136 => 50,  133 => 58,  130 => 67,  122 => 50,  119 => 49,  116 => 23,  111 => 45,  108 => 71,  102 => 22,  98 => 47,  95 => 64,  92 => 67,  89 => 41,  85 => 37,  81 => 178,  73 => 27,  64 => 13,  60 => 22,  57 => 22,  54 => 25,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 16,  36 => 17,  33 => 16,  30 => 15,);
    }
}
