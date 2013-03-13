<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_30961e0136bde45d89dd59f47235a826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, $this->getContext($context, "read_only_choices")) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "read_only_choices"));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "choice"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 9,  28 => 3,  26 => 2,  48 => 11,  357 => 107,  351 => 104,  345 => 102,  342 => 101,  336 => 99,  333 => 98,  327 => 96,  315 => 92,  309 => 90,  306 => 89,  300 => 87,  297 => 86,  291 => 84,  288 => 83,  279 => 80,  273 => 78,  270 => 77,  255 => 72,  246 => 69,  240 => 67,  234 => 65,  231 => 64,  219 => 60,  214 => 58,  187 => 49,  154 => 38,  145 => 35,  142 => 34,  136 => 32,  133 => 31,  116 => 25,  111 => 24,  97 => 23,  94 => 22,  88 => 20,  56 => 16,  33 => 5,  31 => 4,  25 => 3,  22 => 2,  20 => 1,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 147,  475 => 146,  472 => 145,  468 => 125,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 137,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 119,  391 => 118,  386 => 115,  380 => 112,  377 => 111,  375 => 110,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 93,  324 => 95,  321 => 91,  318 => 93,  312 => 88,  310 => 87,  302 => 86,  298 => 84,  286 => 80,  282 => 81,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  203 => 56,  200 => 55,  197 => 54,  178 => 46,  173 => 42,  152 => 38,  149 => 36,  146 => 34,  139 => 31,  115 => 27,  107 => 24,  101 => 22,  95 => 20,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  79 => 22,  57 => 145,  52 => 104,  47 => 11,  44 => 74,  42 => 8,  39 => 61,  34 => 53,  301 => 137,  295 => 135,  292 => 134,  289 => 81,  281 => 129,  275 => 127,  269 => 75,  263 => 71,  257 => 121,  254 => 68,  249 => 70,  245 => 115,  233 => 62,  227 => 105,  221 => 102,  216 => 100,  213 => 99,  202 => 54,  196 => 91,  191 => 50,  186 => 88,  184 => 48,  181 => 86,  175 => 43,  169 => 43,  164 => 78,  160 => 40,  157 => 41,  155 => 75,  150 => 73,  144 => 33,  137 => 67,  132 => 59,  123 => 30,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  86 => 19,  80 => 41,  78 => 40,  75 => 39,  70 => 33,  62 => 19,  59 => 17,  54 => 12,  51 => 13,  38 => 17,  264 => 75,  261 => 74,  256 => 69,  252 => 119,  247 => 66,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  225 => 62,  220 => 59,  217 => 59,  211 => 98,  208 => 56,  205 => 54,  199 => 53,  193 => 51,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 44,  167 => 76,  163 => 41,  161 => 46,  156 => 44,  153 => 43,  151 => 37,  148 => 41,  140 => 68,  134 => 60,  128 => 58,  125 => 34,  121 => 29,  112 => 26,  110 => 25,  105 => 26,  89 => 21,  83 => 20,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 7,  37 => 54,  35 => 5,  32 => 13,  29 => 11,  23 => 1,  127 => 29,  124 => 28,  118 => 26,  113 => 40,  108 => 38,  102 => 36,  99 => 24,  96 => 34,  91 => 21,  85 => 30,  82 => 23,  77 => 18,  71 => 25,  69 => 190,  66 => 20,  63 => 14,  55 => 11,  49 => 103,  46 => 21,  43 => 20,  12 => 45,);
    }
}
