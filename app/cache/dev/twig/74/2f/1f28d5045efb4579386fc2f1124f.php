<?php

/* CraueFormFlowBundle:FormFlow:stepList_content.html.twig */
class __TwigTemplate_742f1f28d5045efb4579386fc2f1124f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "flow"), "getStepDescriptions", array(), "method")))) {
            // line 4
            echo "<ol class=\"craue_formflow_steplist\">
\t\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "flow"), "getStepDescriptions", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["stepDescription"]) {
                // line 6
                echo "\t\t\t<li";
                $this->displayBlock("craue_flow_stepList_class", $context, $blocks);
                echo ">";
                // line 7
                if (((($this->getAttribute($this->getContext($context, "flow"), "isAllowDynamicStepNavigation", array(), "method") && ($this->getAttribute($this->getContext($context, "loop"), "index") != $this->getAttribute($this->getContext($context, "flow"), "getCurrentStep", array(), "method"))) && $this->getAttribute($this->getContext($context, "flow"), "isStepDone", array(0 => $this->getAttribute($this->getContext($context, "loop"), "index")), "method")) && (!$this->getAttribute($this->getContext($context, "flow"), "hasSkipStep", array(0 => $this->getAttribute($this->getContext($context, "loop"), "index")), "method")))) {
                    // line 8
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), $this->env->getExtension('craue_formflow')->addDynamicStepNavigationParameter(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "all"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route_params"), "method")), $this->getContext($context, "flow"), $this->getAttribute($this->getContext($context, "loop"), "index"))), "html", null, true);
                    // line 10
                    echo "\">";
                    // line 11
                    $this->displayBlock("craue_flow_stepDescription", $context, $blocks);
                    // line 12
                    echo "</a>";
                } else {
                    // line 14
                    $this->displayBlock("craue_flow_stepDescription", $context, $blocks);
                }
                // line 16
                echo "</li>
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepDescription'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "\t</ol>";
        }
    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  14 => 1,  229 => 96,  192 => 66,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 78,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 75,  160 => 18,  129 => 51,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 72,  161 => 79,  156 => 67,  148 => 65,  124 => 64,  113 => 64,  99 => 38,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 64,  182 => 82,  174 => 23,  117 => 19,  140 => 58,  97 => 44,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 151,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 101,  235 => 129,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 81,  137 => 56,  86 => 27,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 59,  169 => 80,  167 => 71,  164 => 19,  134 => 55,  77 => 28,  65 => 20,  56 => 18,  53 => 6,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 42,  110 => 46,  90 => 38,  87 => 18,  69 => 14,  49 => 34,  23 => 1,  82 => 49,  62 => 10,  40 => 29,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 177,  293 => 157,  284 => 89,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 80,  181 => 115,  176 => 62,  170 => 22,  168 => 69,  146 => 49,  142 => 51,  128 => 44,  125 => 9,  107 => 40,  38 => 10,  144 => 73,  141 => 58,  135 => 55,  126 => 24,  109 => 59,  103 => 34,  67 => 19,  61 => 39,  47 => 12,  105 => 35,  93 => 37,  76 => 47,  72 => 16,  68 => 25,  225 => 95,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 84,  159 => 61,  154 => 66,  147 => 74,  132 => 108,  127 => 65,  121 => 63,  118 => 103,  114 => 39,  104 => 43,  100 => 33,  78 => 31,  75 => 30,  71 => 26,  58 => 23,  34 => 26,  27 => 5,  91 => 29,  84 => 35,  44 => 11,  25 => 3,  28 => 13,  24 => 4,  19 => 2,  94 => 30,  88 => 57,  79 => 25,  59 => 8,  31 => 3,  26 => 14,  21 => 12,  70 => 43,  63 => 23,  46 => 13,  22 => 3,  163 => 80,  155 => 51,  152 => 50,  149 => 54,  145 => 60,  139 => 57,  131 => 55,  123 => 43,  120 => 43,  115 => 75,  106 => 47,  101 => 45,  96 => 35,  83 => 39,  80 => 34,  74 => 31,  66 => 12,  55 => 17,  52 => 16,  50 => 22,  43 => 12,  41 => 11,  37 => 8,  35 => 7,  32 => 7,  29 => 6,  184 => 74,  178 => 88,  171 => 66,  165 => 63,  162 => 69,  157 => 17,  153 => 63,  151 => 55,  143 => 59,  138 => 47,  136 => 70,  133 => 69,  130 => 54,  122 => 104,  119 => 62,  116 => 61,  111 => 39,  108 => 36,  102 => 37,  98 => 47,  95 => 21,  92 => 52,  89 => 28,  85 => 31,  81 => 32,  73 => 23,  64 => 11,  60 => 19,  57 => 7,  54 => 36,  51 => 35,  48 => 7,  45 => 19,  42 => 10,  39 => 18,  36 => 5,  33 => 4,  30 => 16,);
    }
}
