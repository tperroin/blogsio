<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_dbf47e7aa95796c534fe3e0ca1fdbb4d extends Twig_Template
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
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute($this->getContext($context, "admin"), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getContext($context, "admin"), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create", 1 => array("subclass" => $this->getContext($context, "subclass"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "subclass"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1176 => 331,  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1140 => 325,  1134 => 324,  1128 => 323,  1112 => 317,  1105 => 316,  1103 => 315,  1100 => 314,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1030 => 301,  1028 => 300,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  997 => 287,  990 => 282,  983 => 280,  980 => 276,  976 => 275,  973 => 274,  970 => 273,  968 => 272,  965 => 271,  957 => 267,  955 => 266,  952 => 265,  945 => 260,  942 => 259,  934 => 254,  930 => 253,  926 => 252,  923 => 251,  921 => 250,  918 => 249,  910 => 245,  908 => 241,  906 => 240,  903 => 239,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  853 => 223,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  826 => 209,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  805 => 200,  802 => 199,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  775 => 187,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  744 => 173,  741 => 172,  733 => 168,  730 => 167,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  707 => 157,  700 => 152,  692 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  559 => 102,  542 => 98,  530 => 96,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  347 => 34,  345 => 33,  334 => 27,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  278 => 8,  269 => 5,  267 => 4,  264 => 3,  260 => 331,  258 => 330,  256 => 329,  254 => 328,  248 => 325,  244 => 323,  238 => 320,  236 => 314,  233 => 313,  231 => 307,  226 => 299,  223 => 298,  220 => 296,  215 => 286,  213 => 271,  208 => 265,  205 => 264,  202 => 262,  195 => 249,  192 => 248,  179 => 221,  176 => 219,  171 => 212,  166 => 205,  161 => 198,  159 => 192,  156 => 191,  154 => 185,  141 => 171,  139 => 165,  136 => 164,  129 => 145,  126 => 144,  124 => 129,  121 => 128,  116 => 113,  114 => 108,  106 => 101,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  84 => 41,  66 => 12,  64 => 3,  61 => 2,  26 => 2,  335 => 94,  329 => 26,  326 => 90,  306 => 87,  303 => 86,  286 => 85,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  255 => 69,  250 => 326,  245 => 66,  243 => 65,  240 => 64,  218 => 287,  211 => 53,  206 => 51,  190 => 239,  187 => 238,  184 => 236,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  164 => 199,  152 => 35,  147 => 33,  144 => 172,  120 => 21,  115 => 20,  112 => 19,  109 => 102,  103 => 16,  101 => 86,  93 => 14,  80 => 9,  77 => 8,  73 => 7,  68 => 30,  65 => 5,  56 => 78,  53 => 77,  50 => 25,  45 => 9,  42 => 8,  40 => 7,  34 => 38,  32 => 32,  27 => 14,  24 => 13,  21 => 2,  39 => 3,  22 => 12,  36 => 18,  33 => 16,  28 => 3,  52 => 20,  47 => 25,  37 => 40,  31 => 4,  29 => 31,  20 => 1,  23 => 12,  19 => 11,  640 => 211,  635 => 209,  629 => 207,  627 => 206,  621 => 202,  612 => 199,  608 => 198,  604 => 115,  597 => 196,  593 => 195,  588 => 193,  581 => 191,  573 => 189,  570 => 188,  567 => 187,  562 => 103,  558 => 134,  549 => 131,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 93,  521 => 92,  518 => 124,  516 => 91,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  477 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 72,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 59,  395 => 84,  392 => 83,  388 => 138,  386 => 95,  382 => 48,  380 => 83,  377 => 82,  374 => 81,  370 => 177,  363 => 172,  355 => 170,  353 => 36,  350 => 35,  342 => 32,  340 => 165,  337 => 164,  331 => 92,  323 => 24,  315 => 159,  312 => 89,  307 => 157,  304 => 155,  296 => 153,  294 => 152,  291 => 151,  283 => 84,  281 => 148,  275 => 145,  272 => 6,  270 => 143,  265 => 140,  262 => 139,  259 => 70,  257 => 80,  252 => 327,  249 => 77,  246 => 324,  241 => 322,  234 => 71,  228 => 306,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 270,  207 => 63,  203 => 62,  200 => 259,  197 => 258,  191 => 56,  185 => 55,  182 => 222,  178 => 46,  174 => 213,  169 => 206,  163 => 49,  151 => 184,  149 => 178,  146 => 177,  143 => 45,  140 => 44,  137 => 43,  134 => 157,  131 => 156,  128 => 24,  125 => 39,  122 => 22,  119 => 114,  117 => 36,  111 => 107,  108 => 31,  104 => 87,  100 => 28,  97 => 27,  89 => 47,  86 => 46,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  63 => 14,  60 => 3,  57 => 27,  54 => 26,  48 => 64,  43 => 21,  41 => 23,  38 => 18,  35 => 5,);
    }
}
