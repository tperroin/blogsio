<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_508f061b4a65ad803e32b0f6a8bdb3ed extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"));
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "get", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "name")), "method"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderAction("sonata.admin.controller.admin:getShortObjectDescriptionAction", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))));
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 33
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 37
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 40
            echo "
        <span id=\"field_actions_";
            // line 41
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">

            ";
            // line 43
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 44
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_list_";
                // line 45
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-list\"></i>
                    ";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 53
            echo "
            ";
            // line 54
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 55
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 56
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-plus\"></i>
                    ";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 64
            echo "
            ";
            // line 65
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 66
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 67
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"btn sonata-ba-action\"
                    title=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                    >
                    <i class=\"icon-off\"></i>
                    ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 75
            echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 78
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 83
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 83,  158 => 69,  301 => 137,  295 => 135,  292 => 134,  221 => 102,  202 => 94,  150 => 66,  160 => 77,  129 => 55,  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 65,  148 => 65,  124 => 47,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  570 => 188,  567 => 187,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 129,  275 => 127,  270 => 143,  265 => 140,  262 => 139,  249 => 118,  217 => 58,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 47,  140 => 68,  97 => 39,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 198,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 131,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 93,  369 => 178,  360 => 174,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 151,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 119,  241 => 73,  235 => 129,  227 => 105,  222 => 68,  193 => 50,  179 => 111,  166 => 90,  137 => 67,  86 => 40,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 49,  187 => 49,  169 => 80,  167 => 76,  164 => 72,  134 => 60,  77 => 28,  65 => 31,  56 => 26,  53 => 23,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 125,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 82,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 166,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 120,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 108,  208 => 97,  203 => 62,  200 => 61,  197 => 60,  175 => 78,  173 => 70,  112 => 50,  110 => 51,  90 => 39,  87 => 17,  69 => 33,  49 => 24,  23 => 11,  82 => 30,  62 => 30,  40 => 19,  20 => 1,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 99,  207 => 63,  198 => 122,  181 => 86,  176 => 110,  170 => 75,  168 => 60,  146 => 46,  142 => 56,  128 => 56,  125 => 51,  107 => 44,  38 => 17,  144 => 70,  141 => 61,  135 => 47,  126 => 51,  109 => 44,  103 => 45,  67 => 32,  61 => 18,  47 => 17,  105 => 26,  93 => 43,  76 => 28,  72 => 37,  68 => 22,  225 => 60,  216 => 100,  212 => 88,  205 => 54,  201 => 123,  196 => 91,  194 => 79,  191 => 89,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 58,  132 => 59,  127 => 54,  121 => 54,  118 => 53,  114 => 46,  104 => 49,  100 => 40,  78 => 40,  75 => 36,  71 => 30,  58 => 12,  34 => 16,  27 => 14,  91 => 38,  84 => 19,  44 => 19,  25 => 12,  28 => 14,  24 => 13,  19 => 11,  94 => 43,  88 => 31,  79 => 16,  59 => 23,  31 => 15,  26 => 13,  21 => 2,  70 => 33,  63 => 28,  46 => 21,  22 => 12,  163 => 74,  155 => 75,  152 => 64,  149 => 47,  145 => 64,  139 => 61,  131 => 55,  123 => 55,  120 => 56,  115 => 50,  106 => 47,  101 => 45,  96 => 44,  83 => 15,  80 => 37,  74 => 15,  66 => 28,  55 => 25,  52 => 21,  50 => 20,  43 => 20,  41 => 18,  37 => 17,  35 => 16,  32 => 16,  29 => 14,  184 => 87,  178 => 52,  171 => 93,  165 => 58,  162 => 57,  157 => 76,  153 => 67,  151 => 42,  143 => 45,  138 => 57,  136 => 50,  133 => 58,  130 => 66,  122 => 50,  119 => 49,  116 => 35,  111 => 45,  108 => 44,  102 => 41,  98 => 47,  95 => 19,  92 => 45,  89 => 41,  85 => 37,  81 => 178,  73 => 27,  64 => 13,  60 => 23,  57 => 22,  54 => 25,  51 => 21,  48 => 15,  45 => 19,  42 => 7,  39 => 16,  36 => 17,  33 => 16,  30 => 15,);
    }
}
