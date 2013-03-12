<?php

/* SonataMediaBundle:Extra:pixlr_editor.html.twig */
class __TwigTemplate_d6e5d09e988a70da59deb74d12acecdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        <title>Pixlr Editor</title>

        <style>
            .header {
                text-align: center;
                background: none repeat scroll 0 0 #222222;
                border-bottom: 5px solid #B6B6B6;
                padding: 15px 0;
            }

            body.sonata-bc {
               padding-top: 0;
               margin: 0px;
               padding: 0px;
            }

            a.box {
                text-align: center;
                width: 120px;
                float: left;
                margin: 30px;
                margin-left: 35px;
                margin-right: 35px;

                padding: 30px;
                text-decoration: none;

                color: #B6B6B6;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                border:9px solid #B6B6B6;
                background-color:#222222;
                /*-webkit-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*-moz-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*box-shadow: #B3B3B3 3px 3px 3px*/
            }

            a.box:hover {
                color: #222222;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                border:9px solid #222222;
                background-color:#B6B6B6;
                text-decoration: none;
                /*-webkit-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*-moz-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*box-shadow: #B3B3B3 3px 3px 3px*/
            }

            div.content {
                text-align: center;
                width: 550px;
                padding: 30px;
                margin-left: auto;
                margin-right: auto;
            }

            .footer {
                clear: both;
                text-align: center;
            }
        </style>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"header\">
            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/pixlr.png"), "html", null, true);
        echo "\" alt=\"Pixlr\"/>
        </div>

        <div class=\"content\">
            <div class=\"alert-message block-message warning\">
                ";
        // line 99
        echo $this->env->getExtension('translator')->trans("label.pixlr_warning", array(), "SonataMediaBundle");
        echo "
            </div>

            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "mode" => "express")), "html", null, true);
        echo "\" class=\"box\">
                <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/express_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Express\" style=\"margin-left: -5px;\"/>
                ";
        // line 104
        echo $this->env->getExtension('translator')->trans("label.pixlr_express_editor", array(), "SonataMediaBundle");
        echo "
            </a>

            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "mode" => "editor")), "html", null, true);
        echo "\" class=\"box\">
                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/editor_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Editor\" style=\"margin-left: -5px;\"/>
                ";
        // line 109
        echo $this->env->getExtension('translator')->trans("label.pixlr_advanced_editor", array(), "SonataMediaBundle");
        echo "
            </a>

            <div style=\"clear: both\"></div>
        </div>

        <div class=\"footer\">
            The Sonata Project is not linked to Pixlr and does not provide supports on the Pixlr service. <br />
            <a href=\"http://pixlr.com\" target=\"_blank\">Pixlr</a> is an external web service provided by <a href=\"http://usa.autodesk.com/adsk/servlet/pc/index?id=17483004&siteID=123112\" target=\"_blank\">Autodesk</a><br>
            <a href=\"http://pixlr.com/terms_of_service/\" target=\"_blank\">Pixlr's Terms of Service</a> and <a href=\"http://pixlr.com/privacy_policy/\" target=\"_blank\">Pixlr's Privacy Policy</a> <br />
        </div>
    </body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  192 => 66,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 64,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 18,  129 => 41,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 72,  161 => 56,  156 => 57,  148 => 65,  124 => 51,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 64,  182 => 82,  174 => 23,  117 => 19,  140 => 58,  97 => 44,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 151,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 101,  235 => 129,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 90,  137 => 88,  86 => 31,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 59,  169 => 80,  167 => 58,  164 => 19,  134 => 55,  77 => 33,  65 => 28,  56 => 21,  53 => 22,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 40,  110 => 46,  90 => 38,  87 => 18,  69 => 30,  49 => 9,  23 => 15,  82 => 70,  62 => 25,  40 => 18,  20 => 11,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 177,  293 => 157,  284 => 89,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 80,  181 => 115,  176 => 62,  170 => 22,  168 => 69,  146 => 49,  142 => 51,  128 => 107,  125 => 9,  107 => 44,  38 => 17,  144 => 51,  141 => 50,  135 => 47,  126 => 24,  109 => 44,  103 => 45,  67 => 19,  61 => 20,  47 => 20,  105 => 26,  93 => 43,  76 => 30,  72 => 28,  68 => 28,  225 => 95,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 16,  147 => 61,  132 => 108,  127 => 44,  121 => 35,  118 => 103,  114 => 102,  104 => 43,  100 => 94,  78 => 20,  75 => 34,  71 => 30,  58 => 23,  34 => 16,  27 => 16,  91 => 33,  84 => 35,  44 => 19,  25 => 1,  28 => 14,  24 => 14,  19 => 2,  94 => 39,  88 => 57,  79 => 22,  59 => 24,  31 => 15,  26 => 2,  21 => 12,  70 => 20,  63 => 27,  46 => 19,  22 => 14,  163 => 66,  155 => 51,  152 => 50,  149 => 54,  145 => 60,  139 => 61,  131 => 55,  123 => 43,  120 => 50,  115 => 75,  106 => 47,  101 => 45,  96 => 35,  83 => 15,  80 => 34,  74 => 15,  66 => 31,  55 => 21,  52 => 27,  50 => 21,  43 => 8,  41 => 18,  37 => 8,  35 => 16,  32 => 15,  29 => 25,  184 => 74,  178 => 52,  171 => 66,  165 => 63,  162 => 62,  157 => 17,  153 => 63,  151 => 55,  143 => 45,  138 => 47,  136 => 109,  133 => 58,  130 => 54,  122 => 104,  119 => 42,  116 => 6,  111 => 39,  108 => 99,  102 => 37,  98 => 47,  95 => 21,  92 => 20,  89 => 32,  85 => 38,  81 => 37,  73 => 32,  64 => 26,  60 => 25,  57 => 24,  54 => 15,  51 => 21,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 17,  33 => 3,  30 => 15,);
    }
}
