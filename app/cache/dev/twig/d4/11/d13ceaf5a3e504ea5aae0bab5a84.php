<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d411d13ceaf5a3e504ea5aae0bab5a84 extends Twig_Template
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
        return array (  26 => 2,  335 => 94,  329 => 91,  326 => 90,  306 => 87,  303 => 86,  286 => 85,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  255 => 69,  250 => 67,  245 => 66,  243 => 65,  240 => 64,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  184 => 48,  181 => 47,  175 => 45,  172 => 44,  167 => 42,  164 => 41,  152 => 35,  147 => 33,  144 => 32,  120 => 21,  115 => 20,  112 => 19,  109 => 18,  103 => 16,  101 => 15,  93 => 14,  80 => 9,  77 => 8,  73 => 7,  68 => 6,  65 => 5,  56 => 78,  53 => 77,  50 => 11,  45 => 9,  42 => 8,  40 => 7,  34 => 38,  32 => 32,  27 => 3,  24 => 2,  21 => 2,  39 => 3,  22 => 2,  36 => 18,  33 => 16,  28 => 3,  52 => 20,  47 => 25,  37 => 40,  31 => 4,  29 => 31,  20 => 1,  23 => 12,  19 => 1,  640 => 211,  635 => 209,  629 => 207,  627 => 206,  621 => 202,  612 => 199,  608 => 198,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  581 => 191,  573 => 189,  570 => 188,  567 => 187,  562 => 136,  558 => 134,  549 => 131,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  521 => 125,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  477 => 113,  474 => 112,  457 => 111,  452 => 110,  450 => 109,  445 => 107,  441 => 105,  430 => 103,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  407 => 95,  395 => 84,  392 => 83,  388 => 138,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  374 => 81,  370 => 177,  363 => 172,  355 => 170,  353 => 169,  350 => 168,  342 => 166,  340 => 165,  337 => 164,  331 => 92,  323 => 161,  315 => 159,  312 => 89,  307 => 157,  304 => 155,  296 => 153,  294 => 152,  291 => 151,  283 => 84,  281 => 148,  275 => 145,  272 => 144,  270 => 143,  265 => 140,  262 => 139,  259 => 70,  257 => 80,  252 => 78,  249 => 77,  246 => 76,  241 => 73,  234 => 71,  228 => 70,  222 => 68,  219 => 67,  217 => 66,  214 => 65,  210 => 64,  207 => 63,  203 => 62,  200 => 61,  197 => 60,  191 => 56,  185 => 55,  182 => 54,  178 => 46,  174 => 51,  169 => 43,  163 => 49,  151 => 48,  149 => 34,  146 => 46,  143 => 45,  140 => 44,  137 => 43,  134 => 26,  131 => 25,  128 => 24,  125 => 39,  122 => 22,  119 => 37,  117 => 36,  111 => 32,  108 => 31,  104 => 30,  100 => 28,  97 => 27,  89 => 12,  86 => 181,  81 => 178,  79 => 76,  76 => 75,  74 => 60,  71 => 59,  69 => 27,  63 => 14,  60 => 3,  57 => 5,  54 => 12,  48 => 64,  43 => 4,  41 => 23,  38 => 15,  35 => 5,);
    }
}
