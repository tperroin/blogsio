<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_11bd766166375bf61dd575e374d8c063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"control-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "var"), "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute($this->getContext($context, "field_description"), "help")) {
            // line 26
            echo "            <span class=\"help-inline\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getContext($context, "field_description"), "help");
    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 44,  148 => 41,  124 => 47,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  570 => 188,  567 => 187,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 148,  275 => 145,  270 => 143,  265 => 140,  262 => 139,  249 => 77,  217 => 58,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 36,  140 => 56,  97 => 40,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 198,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 131,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 93,  369 => 178,  360 => 174,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 151,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 68,  241 => 73,  235 => 129,  227 => 127,  222 => 68,  193 => 50,  179 => 111,  166 => 90,  137 => 43,  86 => 25,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 66,  218 => 57,  211 => 56,  206 => 51,  190 => 49,  187 => 49,  169 => 50,  167 => 76,  164 => 84,  134 => 37,  77 => 13,  65 => 5,  56 => 25,  53 => 10,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 125,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 82,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 166,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 85,  274 => 77,  272 => 144,  269 => 138,  254 => 68,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 62,  208 => 55,  203 => 62,  200 => 61,  197 => 60,  175 => 45,  173 => 94,  112 => 47,  110 => 29,  90 => 39,  87 => 17,  69 => 31,  49 => 28,  23 => 11,  82 => 36,  62 => 27,  40 => 24,  20 => 11,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 69,  207 => 63,  198 => 122,  181 => 47,  176 => 110,  170 => 61,  168 => 60,  146 => 46,  142 => 56,  128 => 35,  125 => 51,  107 => 44,  38 => 14,  144 => 32,  141 => 51,  135 => 47,  126 => 45,  109 => 47,  103 => 45,  67 => 30,  61 => 29,  47 => 21,  105 => 26,  93 => 41,  76 => 19,  72 => 19,  68 => 24,  225 => 60,  216 => 90,  212 => 88,  205 => 54,  201 => 123,  196 => 121,  194 => 79,  191 => 56,  189 => 77,  186 => 76,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 58,  132 => 48,  127 => 52,  121 => 33,  118 => 49,  114 => 46,  104 => 42,  100 => 42,  78 => 21,  75 => 32,  71 => 30,  58 => 12,  34 => 13,  27 => 14,  91 => 38,  84 => 36,  44 => 27,  25 => 12,  28 => 14,  24 => 12,  19 => 11,  94 => 40,  88 => 6,  79 => 34,  59 => 26,  31 => 15,  26 => 12,  21 => 2,  70 => 20,  63 => 28,  46 => 9,  22 => 11,  163 => 74,  155 => 81,  152 => 35,  149 => 47,  145 => 46,  139 => 31,  131 => 55,  123 => 52,  120 => 21,  115 => 48,  106 => 44,  101 => 44,  96 => 42,  83 => 15,  80 => 14,  74 => 31,  66 => 28,  55 => 25,  52 => 24,  50 => 23,  43 => 25,  41 => 20,  37 => 17,  35 => 17,  32 => 14,  29 => 4,  184 => 114,  178 => 52,  171 => 93,  165 => 58,  162 => 57,  157 => 82,  153 => 43,  151 => 42,  143 => 45,  138 => 57,  136 => 50,  133 => 54,  130 => 66,  122 => 50,  119 => 49,  116 => 35,  111 => 30,  108 => 44,  102 => 41,  98 => 21,  95 => 19,  92 => 39,  89 => 17,  85 => 37,  81 => 178,  73 => 30,  64 => 30,  60 => 15,  57 => 26,  54 => 25,  51 => 29,  48 => 15,  45 => 21,  42 => 20,  39 => 21,  36 => 20,  33 => 16,  30 => 15,);
    }
}
