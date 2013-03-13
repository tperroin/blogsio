<?php

/* SonataMediaBundle:MediaAdmin:view.html.twig */
class __TwigTemplate_618172f4f53511e3e2ac1d8d42661c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:action.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "name"), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "name"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "format"), "html", null, true);
        echo ")</h2>

    <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.media_preview", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
    <div>
        ";
        // line 21
        echo $this->env->getExtension('sonata_media')->media($this->getContext($context, "media"), $this->getContext($context, "format"), array());
        // line 22
        echo "    </div>

    <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.informations", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>

    <table>
        ";
        // line 27
        if (($this->getContext($context, "pixlr") && $this->getAttribute($this->getContext($context, "pixlr"), "isEditable", array(0 => $this->getContext($context, "media")), "method"))) {
            // line 28
            echo "            <tr>
                <td></td>
                <td><a class=\"btn\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_pixlr_open_editor", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 33
        echo "        <tr>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "size"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.width", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "width"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.height", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "height"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "contenttype"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.copyright", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "copyright"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author_name", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "authorname"), "html", null, true);
        echo "</td>
        <tr>
        <tr>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cdn", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>
                ";
        // line 60
        if ($this->getAttribute($this->getContext($context, "media"), "cdnisflushable")) {
            // line 61
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to_be_flushed", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 63
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.flushed_at", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                    ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "cdnflushat")), "html", null, true);
            echo "
                 ";
        }
        // line 66
        echo "            </td>
        <tr>
        <tr>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td>
                <input type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")))), "html", null, true);
        echo "\" style=\"width:500px\"/>
                <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.test_protected_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</a>
                <br />
                <span class=\"label warning\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.protected_download_url_notice", array(), "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "security"), "description"), "html", null, true);
        echo "
            </td>
        <tr>

        <tr>
            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.public_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</td>
            <td><input type=\"text\" value=\"";
        // line 80
        echo $this->env->getExtension('sonata_media')->path($this->getContext($context, "media"), $this->getContext($context, "format"));
        echo "\" style=\"width:500px\"/></td>
        <tr>
    </table>

    <h3>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
    <table>
        <tr>
            <td>
                <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "view", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "format" => "reference")), "method"), "html", null, true);
        echo "\">reference</a>
            </td>
            <td>
                <input type=\"text\" value=\"";
        // line 91
        echo $this->env->getExtension('sonata_media')->path($this->getContext($context, "media"), "reference");
        echo "\"  style=\"width:500px\" />
            </td>
        </tr>

        ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "formats"));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 96
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "view", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "format" => $this->getContext($context, "name"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</a>
                </td>
                <td>
                    <input type=\"text\" value=\"";
            // line 101
            echo $this->env->getExtension('sonata_media')->path($this->getContext($context, "media"), $this->getContext($context, "name"));
            echo "\"  style=\"width:500px\"/>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  192 => 66,  381 => 150,  365 => 142,  351 => 137,  346 => 136,  339 => 133,  319 => 123,  288 => 109,  239 => 82,  231 => 79,  226 => 81,  215 => 76,  643 => 389,  634 => 383,  618 => 374,  613 => 372,  587 => 357,  583 => 356,  577 => 353,  559 => 341,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  496 => 301,  492 => 299,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  398 => 243,  394 => 242,  390 => 155,  379 => 236,  248 => 89,  183 => 83,  158 => 64,  301 => 137,  295 => 135,  292 => 134,  221 => 78,  202 => 72,  150 => 66,  160 => 77,  129 => 41,  264 => 98,  261 => 96,  256 => 69,  244 => 84,  237 => 110,  232 => 63,  230 => 62,  220 => 59,  199 => 52,  188 => 48,  177 => 72,  161 => 56,  156 => 57,  148 => 65,  124 => 51,  113 => 40,  99 => 23,  12 => 45,  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 368,  597 => 361,  593 => 360,  588 => 193,  573 => 189,  570 => 188,  567 => 346,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 306,  499 => 115,  485 => 292,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 253,  407 => 95,  395 => 84,  388 => 154,  374 => 81,  370 => 229,  363 => 172,  350 => 168,  342 => 134,  323 => 124,  315 => 122,  307 => 157,  296 => 153,  294 => 152,  281 => 167,  275 => 127,  270 => 100,  265 => 140,  262 => 157,  249 => 118,  217 => 136,  214 => 65,  210 => 64,  185 => 64,  182 => 82,  174 => 50,  117 => 19,  140 => 58,  97 => 44,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 381,  628 => 377,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 370,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 334,  545 => 109,  542 => 330,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 156,  384 => 237,  382 => 93,  369 => 178,  360 => 140,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 182,  299 => 160,  291 => 151,  287 => 154,  285 => 168,  278 => 141,  266 => 137,  252 => 119,  241 => 101,  235 => 129,  227 => 105,  222 => 138,  193 => 50,  179 => 61,  166 => 90,  137 => 88,  86 => 31,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 107,  279 => 82,  276 => 165,  273 => 80,  271 => 163,  268 => 78,  259 => 81,  255 => 69,  245 => 115,  218 => 91,  211 => 98,  206 => 51,  190 => 69,  187 => 59,  169 => 80,  167 => 58,  164 => 57,  134 => 55,  77 => 33,  65 => 28,  56 => 21,  53 => 22,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 317,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 113,  475 => 86,  472 => 287,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 270,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 216,  377 => 148,  375 => 231,  371 => 145,  366 => 177,  356 => 139,  353 => 138,  343 => 98,  337 => 164,  331 => 163,  329 => 127,  324 => 92,  318 => 90,  312 => 158,  310 => 184,  302 => 116,  298 => 84,  289 => 133,  286 => 85,  274 => 77,  272 => 144,  269 => 125,  254 => 92,  250 => 67,  247 => 67,  243 => 87,  238 => 64,  236 => 63,  233 => 98,  208 => 70,  203 => 128,  200 => 61,  197 => 68,  175 => 60,  173 => 71,  112 => 40,  110 => 46,  90 => 38,  87 => 18,  69 => 30,  49 => 9,  23 => 15,  82 => 70,  62 => 25,  40 => 18,  20 => 1,  479 => 162,  473 => 161,  468 => 286,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 252,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 219,  340 => 165,  336 => 131,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 177,  293 => 157,  284 => 89,  282 => 143,  277 => 104,  267 => 99,  263 => 123,  257 => 121,  251 => 105,  246 => 76,  240 => 64,  234 => 71,  228 => 82,  223 => 58,  219 => 67,  213 => 99,  207 => 129,  198 => 80,  181 => 115,  176 => 62,  170 => 75,  168 => 69,  146 => 49,  142 => 51,  128 => 56,  125 => 9,  107 => 44,  38 => 17,  144 => 51,  141 => 50,  135 => 47,  126 => 24,  109 => 44,  103 => 45,  67 => 19,  61 => 20,  47 => 20,  105 => 26,  93 => 43,  76 => 30,  72 => 28,  68 => 28,  225 => 95,  216 => 72,  212 => 88,  205 => 84,  201 => 69,  196 => 71,  194 => 79,  191 => 119,  189 => 77,  186 => 88,  180 => 72,  172 => 16,  159 => 61,  154 => 56,  147 => 61,  132 => 20,  127 => 44,  121 => 35,  118 => 34,  114 => 47,  104 => 43,  100 => 42,  78 => 20,  75 => 34,  71 => 30,  58 => 23,  34 => 16,  27 => 16,  91 => 33,  84 => 35,  44 => 19,  25 => 1,  28 => 14,  24 => 14,  19 => 2,  94 => 39,  88 => 57,  79 => 22,  59 => 24,  31 => 15,  26 => 2,  21 => 12,  70 => 20,  63 => 27,  46 => 19,  22 => 14,  163 => 66,  155 => 51,  152 => 50,  149 => 54,  145 => 60,  139 => 61,  131 => 55,  123 => 43,  120 => 50,  115 => 75,  106 => 47,  101 => 45,  96 => 35,  83 => 15,  80 => 34,  74 => 15,  66 => 31,  55 => 21,  52 => 27,  50 => 21,  43 => 8,  41 => 18,  37 => 8,  35 => 16,  32 => 15,  29 => 14,  184 => 74,  178 => 52,  171 => 66,  165 => 63,  162 => 62,  157 => 76,  153 => 63,  151 => 55,  143 => 45,  138 => 47,  136 => 48,  133 => 58,  130 => 54,  122 => 8,  119 => 42,  116 => 6,  111 => 39,  108 => 27,  102 => 37,  98 => 47,  95 => 21,  92 => 20,  89 => 32,  85 => 38,  81 => 37,  73 => 32,  64 => 26,  60 => 25,  57 => 24,  54 => 15,  51 => 21,  48 => 11,  45 => 8,  42 => 12,  39 => 11,  36 => 17,  33 => 3,  30 => 15,);
    }
}
