<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_542bd25e748427170b7d3457d90dfdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 3
            echo "        ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_app_, "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (isset($context["sonata_user"])) { $_sonata_user_ = $context["sonata_user"]; } else { $_sonata_user_ = null; }
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute($_sonata_user_, "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                if (isset($context["sonata_user"])) { $_sonata_user_ = $context["sonata_user"]; } else { $_sonata_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($_sonata_user_, "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute($_sonata_user_, "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  30 => 3,  20 => 1,  731 => 217,  728 => 216,  723 => 209,  716 => 206,  709 => 203,  706 => 202,  702 => 201,  699 => 200,  692 => 198,  689 => 197,  686 => 196,  679 => 194,  676 => 193,  673 => 192,  666 => 190,  663 => 189,  660 => 188,  653 => 186,  650 => 185,  647 => 184,  644 => 183,  639 => 156,  635 => 153,  629 => 152,  619 => 149,  613 => 148,  606 => 147,  602 => 146,  597 => 145,  594 => 144,  588 => 110,  584 => 109,  581 => 108,  573 => 105,  567 => 104,  557 => 102,  553 => 101,  548 => 100,  542 => 98,  539 => 97,  533 => 96,  529 => 95,  526 => 94,  520 => 93,  512 => 87,  504 => 86,  499 => 85,  496 => 84,  490 => 48,  486 => 47,  482 => 46,  477 => 44,  472 => 42,  468 => 41,  463 => 40,  460 => 39,  454 => 36,  450 => 35,  444 => 32,  440 => 31,  435 => 29,  432 => 28,  429 => 27,  422 => 221,  420 => 216,  413 => 211,  411 => 183,  406 => 182,  403 => 181,  396 => 178,  393 => 177,  390 => 176,  386 => 174,  381 => 171,  378 => 170,  364 => 169,  357 => 167,  353 => 166,  333 => 165,  326 => 163,  323 => 162,  319 => 160,  316 => 159,  312 => 157,  310 => 156,  306 => 154,  304 => 144,  301 => 143,  297 => 141,  290 => 139,  287 => 138,  284 => 137,  270 => 136,  263 => 134,  258 => 131,  251 => 129,  241 => 127,  238 => 126,  235 => 125,  231 => 124,  211 => 123,  208 => 122,  205 => 121,  202 => 120,  199 => 119,  192 => 114,  187 => 111,  184 => 110,  181 => 94,  179 => 93,  174 => 90,  172 => 84,  164 => 82,  162 => 81,  150 => 71,  143 => 69,  139 => 67,  136 => 66,  133 => 65,  115 => 63,  111 => 61,  107 => 60,  88 => 59,  85 => 58,  82 => 57,  75 => 55,  72 => 54,  67 => 52,  63 => 50,  61 => 39,  58 => 38,  56 => 27,  45 => 19,  43 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  31 => 12,  87 => 35,  79 => 30,  66 => 20,  57 => 15,  51 => 12,  47 => 8,  40 => 6,  37 => 5,  32 => 5,  29 => 11,  26 => 2,);
    }
}
