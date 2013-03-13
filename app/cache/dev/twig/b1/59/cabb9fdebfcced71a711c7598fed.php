<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_b159cabb9fdebfcced71a711c7598fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig");

        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" >
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('actions')->renderAction("sonata.admin.controller.admin:getShortObjectDescriptionAction", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))));
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </span>
        <span style=\"display: none\" >
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </span>

        <span id=\"field_actions_";
        // line 73
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" class=\"field-actions\">

            ";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 76
            echo "
                <a  href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_list_";
            // line 78
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-list\"></i>
                    ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 88
            echo "                <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                    onclick=\"return start_field_dialog_form_add_";
            // line 89
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 97
        echo "
            ";
        // line 98
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "DELETE"), "method"))) {
            // line 99
            echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 108
        echo "        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">

        </div>
    </div>

    ";
        // line 115
        $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
    }

    // line 118
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 121
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 123
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 125
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 127
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 129
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "
    ";
        }
    }

    // line 133
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 135
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 137
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 137,  295 => 135,  292 => 134,  221 => 102,  202 => 94,  150 => 73,  160 => 77,  129 => 55,  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 65,  148 => 63,  124 => 47,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  570 => 188,  567 => 187,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 129,  275 => 127,  270 => 143,  265 => 140,  262 => 139,  249 => 118,  217 => 58,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 47,  140 => 68,  97 => 39,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 198,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 131,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 93,  369 => 178,  360 => 174,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 151,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 119,  241 => 73,  235 => 129,  227 => 105,  222 => 68,  193 => 50,  179 => 111,  166 => 90,  137 => 67,  86 => 43,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 49,  187 => 49,  169 => 80,  167 => 76,  164 => 78,  134 => 60,  77 => 28,  65 => 24,  56 => 26,  53 => 23,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 125,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 82,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 166,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 120,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 108,  208 => 97,  203 => 62,  200 => 61,  197 => 60,  175 => 83,  173 => 70,  112 => 52,  110 => 51,  90 => 39,  87 => 17,  69 => 26,  49 => 24,  23 => 11,  82 => 30,  62 => 29,  40 => 19,  20 => 1,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 99,  207 => 63,  198 => 122,  181 => 86,  176 => 110,  170 => 61,  168 => 60,  146 => 46,  142 => 56,  128 => 58,  125 => 51,  107 => 44,  38 => 17,  144 => 70,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 45,  67 => 32,  61 => 18,  47 => 17,  105 => 26,  93 => 43,  76 => 28,  72 => 37,  68 => 22,  225 => 60,  216 => 100,  212 => 88,  205 => 54,  201 => 123,  196 => 91,  194 => 79,  191 => 89,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 58,  132 => 59,  127 => 54,  121 => 52,  118 => 51,  114 => 46,  104 => 49,  100 => 40,  78 => 40,  75 => 39,  71 => 30,  58 => 12,  34 => 4,  27 => 14,  91 => 38,  84 => 19,  44 => 19,  25 => 12,  28 => 14,  24 => 13,  19 => 11,  94 => 38,  88 => 31,  79 => 16,  59 => 28,  31 => 3,  26 => 13,  21 => 2,  70 => 33,  63 => 28,  46 => 21,  22 => 12,  163 => 74,  155 => 75,  152 => 64,  149 => 47,  145 => 62,  139 => 61,  131 => 55,  123 => 57,  120 => 56,  115 => 50,  106 => 44,  101 => 44,  96 => 42,  83 => 15,  80 => 41,  74 => 15,  66 => 28,  55 => 25,  52 => 20,  50 => 22,  43 => 20,  41 => 18,  37 => 18,  35 => 16,  32 => 16,  29 => 14,  184 => 87,  178 => 52,  171 => 93,  165 => 58,  162 => 57,  157 => 76,  153 => 43,  151 => 42,  143 => 45,  138 => 57,  136 => 50,  133 => 57,  130 => 66,  122 => 50,  119 => 49,  116 => 35,  111 => 45,  108 => 44,  102 => 41,  98 => 47,  95 => 19,  92 => 45,  89 => 22,  85 => 37,  81 => 178,  73 => 27,  64 => 13,  60 => 23,  57 => 27,  54 => 25,  51 => 24,  48 => 15,  45 => 20,  42 => 7,  39 => 16,  36 => 17,  33 => 16,  30 => 15,);
    }
}
