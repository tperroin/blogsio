<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_693cc42fbfc92e70b701682916c98f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo " method=\"POST\">
            ";
            // line 10
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 11
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 19
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fieldset-collapsed\"";
                }
                echo ">
                    <legend";
                // line 20
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    echo " class=\"sonata-ba-fieldset-collapsed-description\"";
                }
                echo ">
                        ";
                // line 21
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 22
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_expand", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 24
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 26
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 29
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    // line 30
                    echo "                            <p>";
                    echo $this->getAttribute($this->getContext($context, "form_group"), "description");
                    echo "</p>
                        ";
                }
                // line 32
                echo "
                        ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 34
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 35
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 37
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 38
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 41
            echo "
            ";
            // line 42
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 43
            echo "
            ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

            ";
            // line 46
            $this->displayBlock('formactions', $context, $blocks);
            // line 74
            echo "        </form>
    ";
        }
        // line 76
        echo "
";
    }

    // line 16
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 42
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 46
    public function block_formactions($context, array $blocks = array())
    {
        // line 47
        echo "                <div class=\"well form-actions\">
                    ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 49
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 50
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 52
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 54
            echo "                    ";
        } else {
            // line 55
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 56
                echo "                            <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 58
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 59
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 62
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 63
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 66
                echo "                        ";
            } else {
                // line 67
                echo "                            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 72,  261 => 71,  256 => 69,  244 => 66,  237 => 64,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 46,  156 => 44,  148 => 41,  124 => 47,  113 => 40,  99 => 24,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  570 => 188,  567 => 187,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 148,  275 => 145,  270 => 143,  265 => 140,  262 => 139,  249 => 77,  217 => 58,  214 => 65,  210 => 64,  185 => 47,  182 => 46,  174 => 51,  117 => 36,  140 => 38,  97 => 27,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 198,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 131,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 93,  369 => 178,  360 => 174,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 151,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 68,  241 => 73,  235 => 129,  227 => 127,  222 => 68,  193 => 50,  179 => 111,  166 => 90,  137 => 43,  86 => 181,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 66,  218 => 57,  211 => 56,  206 => 51,  190 => 49,  187 => 49,  169 => 50,  167 => 76,  164 => 84,  134 => 37,  77 => 27,  65 => 5,  56 => 24,  53 => 10,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 125,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 82,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 166,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 85,  274 => 77,  272 => 144,  269 => 138,  254 => 68,  250 => 67,  247 => 67,  243 => 65,  238 => 64,  236 => 63,  233 => 62,  208 => 55,  203 => 62,  200 => 61,  197 => 60,  175 => 45,  173 => 94,  112 => 30,  110 => 29,  90 => 18,  87 => 17,  69 => 17,  49 => 16,  23 => 1,  82 => 29,  62 => 156,  40 => 6,  20 => 11,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 69,  207 => 63,  198 => 122,  181 => 47,  176 => 110,  170 => 61,  168 => 60,  146 => 46,  142 => 56,  128 => 35,  125 => 34,  107 => 24,  38 => 15,  144 => 32,  141 => 51,  135 => 47,  126 => 45,  109 => 18,  103 => 60,  67 => 16,  61 => 26,  47 => 21,  105 => 26,  93 => 41,  76 => 19,  72 => 18,  68 => 24,  225 => 60,  216 => 90,  212 => 88,  205 => 54,  201 => 123,  196 => 121,  194 => 79,  191 => 56,  189 => 77,  186 => 76,  180 => 72,  172 => 16,  159 => 61,  154 => 59,  147 => 33,  132 => 48,  127 => 48,  121 => 33,  118 => 32,  114 => 42,  104 => 30,  100 => 28,  78 => 21,  75 => 23,  71 => 25,  58 => 12,  34 => 16,  27 => 14,  91 => 22,  84 => 16,  44 => 27,  25 => 3,  28 => 22,  24 => 12,  19 => 1,  94 => 39,  88 => 6,  79 => 76,  59 => 155,  31 => 23,  26 => 14,  21 => 11,  70 => 20,  63 => 22,  46 => 9,  22 => 11,  163 => 74,  155 => 81,  152 => 35,  149 => 47,  145 => 46,  139 => 31,  131 => 41,  123 => 51,  120 => 21,  115 => 49,  106 => 61,  101 => 43,  96 => 34,  83 => 20,  80 => 57,  74 => 31,  66 => 23,  55 => 11,  52 => 15,  50 => 22,  43 => 14,  41 => 16,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  184 => 114,  178 => 52,  171 => 93,  165 => 58,  162 => 57,  157 => 82,  153 => 43,  151 => 42,  143 => 45,  138 => 51,  136 => 50,  133 => 67,  130 => 66,  122 => 38,  119 => 37,  116 => 35,  111 => 32,  108 => 38,  102 => 36,  98 => 21,  95 => 20,  92 => 19,  89 => 21,  85 => 30,  81 => 178,  73 => 7,  64 => 15,  60 => 24,  57 => 18,  54 => 22,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 25,  36 => 17,  33 => 15,  30 => 15,);
    }
}
