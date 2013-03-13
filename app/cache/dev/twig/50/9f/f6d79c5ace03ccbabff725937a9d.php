<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_509ff6d79c5ace03ccbabff725937a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");

        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        // line 15
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "media_pool"), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 19
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "context"), "providers")) == 0)) {
                // line 20
                echo "                ";
                $context["urlParams"] = array("context" => $this->getContext($context, "name"));
                // line 21
                echo "            ";
            } else {
                // line 22
                echo "                ";
                $context["urlParams"] = array("context" => $this->getContext($context, "name"), "provider" => $this->getAttribute($this->getAttribute($this->getContext($context, "context"), "providers"), 0, array(), "array"));
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (($this->getContext($context, "name") == $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"))) {
                // line 26
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "urlParams")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 28
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "urlParams")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "
        ";
        // line 32
        $context["providers"] = $this->getAttribute($this->getContext($context, "media_pool"), "getProviderNamesByContext", array(0 => $this->getAttribute($this->getContext($context, "persistent_parameters"), "context")), "method");
        // line 33
        echo "
        ";
        // line 34
        if ((twig_length_filter($this->env, $this->getContext($context, "providers")) > 1)) {
            // line 35
            echo "            <li><a><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

            ";
            // line 37
            if ((!$this->getAttribute($this->getContext($context, "persistent_parameters"), "provider"))) {
                // line 38
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 40
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 42
            echo "
            ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "providers"));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 44
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "persistent_parameters"), "provider") == $this->getContext($context, "provider_name"))) {
                    // line 45
                    echo "                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"), "provider" => $this->getContext($context, "provider_name"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "provider_name"), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 47
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"), "provider" => $this->getContext($context, "provider_name"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "provider_name"), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 49
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </ul>

";
    }

    // line 56
    public function block_list_filters($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 58
            echo "        <form class=\"sonata-filter-form form-stacked ";
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">

            <input type=\"hidden\" name=\"context\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persistent_parameters"), "context"), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"provider\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persistent_parameters"), "provider"), "html", null, true);
            echo "\" />

            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 64
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 66
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <table class=\"table table-bordered\">
                        ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 69
                echo "                            <tr id=\"filter_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filter"), "name"), "html", null, true);
                echo "_row\" class=\"filter ";
                echo (($this->getAttribute($this->getContext($context, "filter"), "isActive")) ? ("active") : ("inactive"));
                echo "\">
                                <td class=\"filter-title\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "filter"), "label")), "method"), "html", null, true);
                echo "</td>
                                <td class=\"filter-type\">";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget');
                echo "</td>
                                <td class=\"filter-value\">";
                // line 72
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 75
            echo "                    </table>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 79
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 80
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>

                </div>
            </fieldset>

        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 66,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 36,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 77,  129 => 41,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 42,  161 => 56,  156 => 57,  148 => 65,  124 => 44,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 64,  182 => 82,  174 => 50,  117 => 19,  140 => 68,  97 => 44,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 151,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 149,  235 => 129,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 90,  137 => 88,  86 => 31,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 57,  211 => 98,  206 => 51,  190 => 69,  187 => 59,  169 => 80,  167 => 58,  164 => 57,  134 => 60,  77 => 49,  65 => 18,  56 => 23,  53 => 22,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 80,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 110,  112 => 40,  110 => 51,  90 => 35,  87 => 18,  69 => 30,  49 => 9,  23 => 15,  82 => 70,  62 => 25,  40 => 18,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 177,  293 => 157,  284 => 89,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 122,  181 => 115,  176 => 62,  170 => 75,  168 => 60,  146 => 49,  142 => 51,  128 => 56,  125 => 9,  107 => 44,  38 => 5,  144 => 51,  141 => 50,  135 => 47,  126 => 24,  109 => 44,  103 => 45,  67 => 19,  61 => 20,  47 => 20,  105 => 26,  93 => 43,  76 => 30,  72 => 28,  68 => 28,  225 => 75,  216 => 72,  212 => 71,  205 => 54,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 56,  147 => 32,  132 => 20,  127 => 44,  121 => 35,  118 => 34,  114 => 46,  104 => 38,  100 => 66,  78 => 20,  75 => 34,  71 => 30,  58 => 23,  34 => 16,  27 => 16,  91 => 33,  84 => 18,  44 => 19,  25 => 1,  28 => 14,  24 => 14,  19 => 2,  94 => 34,  88 => 57,  79 => 22,  59 => 24,  31 => 15,  26 => 2,  21 => 12,  70 => 20,  63 => 23,  46 => 24,  22 => 14,  163 => 74,  155 => 51,  152 => 50,  149 => 54,  145 => 64,  139 => 61,  131 => 55,  123 => 43,  120 => 42,  115 => 75,  106 => 47,  101 => 45,  96 => 35,  83 => 15,  80 => 30,  74 => 15,  66 => 31,  55 => 21,  52 => 27,  50 => 21,  43 => 8,  41 => 7,  37 => 8,  35 => 5,  32 => 15,  29 => 14,  184 => 87,  178 => 52,  171 => 66,  165 => 63,  162 => 62,  157 => 76,  153 => 67,  151 => 55,  143 => 45,  138 => 47,  136 => 48,  133 => 58,  130 => 45,  122 => 8,  119 => 42,  116 => 6,  111 => 39,  108 => 27,  102 => 37,  98 => 47,  95 => 21,  92 => 20,  89 => 32,  85 => 38,  81 => 37,  73 => 32,  64 => 26,  60 => 25,  57 => 34,  54 => 15,  51 => 20,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 17,  33 => 3,  30 => 15,);
    }
}
