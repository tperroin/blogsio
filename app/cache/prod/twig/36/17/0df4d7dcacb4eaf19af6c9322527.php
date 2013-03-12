<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_36170df4d7dcacb4eaf19af6c9322527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
        <title>
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 54
        if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
        if ((!twig_test_empty($__title_))) {
            // line 55
            echo "                ";
            if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
            echo $__title_;
            echo "
            ";
        } else {
            // line 57
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 58
                echo "                    -
                    ";
                // line 59
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 60
                    echo "                        ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "first"))) {
                        // line 61
                        echo "                            &gt;
                        ";
                    }
                    // line 63
                    echo "                        ";
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $_label_, "html", null, true);
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 65
                echo "                ";
            }
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 69
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if (twig_test_empty($__side_menu_)) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 71
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 81
        if (array_key_exists("admin_pool", $context)) {
            // line 82
            echo "                        <div class=\"navbar-text pull-right\">";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $template = $this->env->resolveTemplate($this->getAttribute($_admin_pool_, "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 84
            $this->displayBlock('logo', $context, $blocks);
            // line 90
            echo "
                        <div class=\"nav-collapse\">
                            <ul class=\"nav\">
                                ";
            // line 93
            $this->displayBlock('top_bar_before_nav', $context, $blocks);
            // line 94
            echo "                                ";
            $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
            // line 110
            echo "                                ";
            $this->displayBlock('top_bar_after_nav', $context, $blocks);
            // line 111
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 114
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 119
        if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
        if (((!twig_test_empty($__breadcrumb_)) || array_key_exists("action", $context))) {
            // line 120
            echo "                <ul class=\"breadcrumb\">
                    ";
            // line 121
            if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
            if (twig_test_empty($__breadcrumb_)) {
                // line 122
                echo "                        ";
                if (array_key_exists("action", $context)) {
                    // line 123
                    echo "                            ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                        // line 124
                        echo "                                ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if ((!$this->getAttribute($_loop_, "last"))) {
                            // line 125
                            echo "                                    <li>
                                        ";
                            // line 126
                            if (isset($context["uri"])) { $_uri_ = $context["uri"]; } else { $_uri_ = null; }
                            if ((!twig_test_empty($_uri_))) {
                                // line 127
                                echo "                                            <a href=\"";
                                if (isset($context["uri"])) { $_uri_ = $context["uri"]; } else { $_uri_ = null; }
                                echo twig_escape_filter($this->env, $_uri_, "html", null, true);
                                echo "\">";
                                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                                echo "</a>
                                        ";
                            } else {
                                // line 129
                                echo "                                            ";
                                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                                echo "
                                        ";
                            }
                            // line 131
                            echo "                                        <span class=\"divider\">/</span>
                                    </li>
                                ";
                        } else {
                            // line 134
                            echo "                                    <li class=\"active\">";
                            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                            echo twig_escape_filter($this->env, $_label_, "html", null, true);
                            echo "</li>
                                ";
                        }
                        // line 136
                        echo "                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 137
                    echo "                        ";
                }
                // line 138
                echo "                    ";
            } else {
                // line 139
                echo "                        ";
                if (isset($context["_breadcrumb"])) { $__breadcrumb_ = $context["_breadcrumb"]; } else { $__breadcrumb_ = null; }
                echo $__breadcrumb_;
                echo "
                    ";
            }
            // line 141
            echo "                </ul>
            ";
        }
        // line 143
        echo "
            ";
        // line 144
        $this->displayBlock('notice', $context, $blocks);
        // line 154
        echo "
            <div style=\"float: right\">
                ";
        // line 156
        $this->displayBlock('actions', $context, $blocks);
        // line 157
        echo "            </div>

            ";
        // line 159
        if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
        if (((!twig_test_empty($__title_)) || array_key_exists("action", $context))) {
            // line 160
            echo "                <div class=\"page-header\">
                    <h1>
                        ";
            // line 162
            if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
            if ((!twig_test_empty($__title_))) {
                // line 163
                echo "                            ";
                if (isset($context["_title"])) { $__title_ = $context["_title"]; } else { $__title_ = null; }
                echo $__title_;
                echo "
                        ";
            } elseif (array_key_exists("action", $context)) {
                // line 165
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "breadcrumbs", array(0 => $_action_), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                    // line 166
                    echo "                                ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "last")) {
                        // line 167
                        echo "                                    ";
                        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                        echo twig_escape_filter($this->env, $_label_, "html", null, true);
                        echo "
                                ";
                    }
                    // line 169
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 170
                echo "                        ";
            }
            // line 171
            echo "                    </h1>
                </div>
            ";
        }
        // line 174
        echo "
            <div class=\"row-fluid\">
                ";
        // line 176
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        if ((!twig_test_empty($__side_menu_))) {
            // line 177
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 178
            if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
            echo $__side_menu_;
            echo "</div>
                    </div>
                ";
        }
        // line 181
        echo "
                <div class=\"content ";
        // line 182
        if (isset($context["_side_menu"])) { $__side_menu_ = $context["_side_menu"]; } else { $__side_menu_ = null; }
        echo (((!twig_test_empty($__side_menu_))) ? (" span10") : ("span12"));
        echo "\">
                ";
        // line 183
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 211
        echo "                </div>


            </div>

            ";
        // line 216
        $this->displayBlock('footer', $context, $blocks);
        // line 221
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.0.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 84
    public function block_logo($context, array $blocks = array())
    {
        // line 85
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 86
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_admin_pool_, "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "\" />
                                ";
        // line 87
        if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_admin_pool_, "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 93
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 94
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 95
        echo "                                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 96
            echo "                                        ";
            if (isset($context["admin_pool"])) { $_admin_pool_ = $context["admin_pool"]; } else { $_admin_pool_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_pool_, "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 97
                echo "                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 98
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_group_, "label"), array(), $this->getAttribute($_group_, "label_catalogue")), "html", null, true);
                echo " <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 100
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 101
                    echo "                                                        ";
                    if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                    if (($this->getAttribute($_admin_, "hasroute", array(0 => "list"), "method") && $this->getAttribute($_admin_, "isGranted", array(0 => "LIST"), "method"))) {
                        // line 102
                        echo "                                                            <li><a href=\"";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_admin_, "generateUrl", array(0 => "list"), "method"), "html", null, true);
                        echo "\">";
                        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_admin_, "label"), array(), $this->getAttribute($_admin_, "translationdomain")), "html", null, true);
                        echo "</a></li>
                                                        ";
                    }
                    // line 104
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 105
                echo "                                                </ul>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 108
            echo "                                    ";
        }
        // line 109
        echo "                                ";
    }

    // line 110
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 144
    public function block_notice($context, array $blocks = array())
    {
        // line 145
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 146
            echo "                    ";
            if (isset($context["notice_level"])) { $_notice_level_ = $context["notice_level"]; } else { $_notice_level_ = null; }
            $context["session_var"] = ("sonata_flash_" . $_notice_level_);
            // line 147
            echo "                    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["session_var"])) { $_session_var_ = $context["session_var"]; } else { $_session_var_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "get", array(0 => $_session_var_), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 148
                echo "                        <div class=\"alert ";
                if (isset($context["notice_level"])) { $_notice_level_ = $context["notice_level"]; } else { $_notice_level_ = null; }
                echo twig_escape_filter($this->env, ("alert-" . $_notice_level_), "html", null, true);
                echo "\">
                            ";
                // line 149
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_flash_, array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 152
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 153
        echo "            ";
    }

    // line 156
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 183
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 184
        echo "
                    ";
        // line 185
        if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
        if ((!twig_test_empty($__preview_))) {
            // line 186
            echo "                        <div class=\"sonata-ba-preview\">";
            if (isset($context["_preview"])) { $__preview_ = $context["_preview"]; } else { $__preview_ = null; }
            echo $__preview_;
            echo "</div>
                    ";
        }
        // line 188
        echo "
                    ";
        // line 189
        if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
        if ((!twig_test_empty($__content_))) {
            // line 190
            echo "                        <div class=\"sonata-ba-content\">";
            if (isset($context["_content"])) { $__content_ = $context["_content"]; } else { $__content_ = null; }
            echo $__content_;
            echo "</div>
                    ";
        }
        // line 192
        echo "
                    ";
        // line 193
        if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
        if ((!twig_test_empty($__show_))) {
            // line 194
            echo "                        <div class=\"sonata-ba-show\">";
            if (isset($context["_show"])) { $__show_ = $context["_show"]; } else { $__show_ = null; }
            echo $__show_;
            echo "</div>
                    ";
        }
        // line 196
        echo "
                    ";
        // line 197
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if ((!twig_test_empty($__form_))) {
            // line 198
            echo "                        <div class=\"sonata-ba-form\">";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            echo $__form_;
            echo "</div>
                    ";
        }
        // line 200
        echo "
                    ";
        // line 201
        if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
        if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
        if (((!twig_test_empty($__list_table_)) || (!twig_test_empty($__list_filters_)))) {
            // line 202
            echo "                        <div class=\"sonata-ba-filter\">
                            ";
            // line 203
            if (isset($context["_list_filters"])) { $__list_filters_ = $context["_list_filters"]; } else { $__list_filters_ = null; }
            echo $__list_filters_;
            echo "
                        </div>
                        <div class=\"sonata-ba-list\">
                            ";
            // line 206
            if (isset($context["_list_table"])) { $__list_table_ = $context["_list_table"]; } else { $__list_table_ = null; }
            echo $__list_table_;
            echo "
                        </div>
                    ";
        }
        // line 209
        echo "
                ";
    }

    // line 216
    public function block_footer($context, array $blocks = array())
    {
        // line 217
        echo "                <div class=\"pull-right clearfix\">
                    <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 217,  728 => 216,  723 => 209,  716 => 206,  709 => 203,  706 => 202,  702 => 201,  699 => 200,  692 => 198,  689 => 197,  686 => 196,  679 => 194,  676 => 193,  673 => 192,  666 => 190,  663 => 189,  660 => 188,  653 => 186,  650 => 185,  647 => 184,  644 => 183,  639 => 156,  635 => 153,  629 => 152,  619 => 149,  613 => 148,  606 => 147,  602 => 146,  597 => 145,  594 => 144,  588 => 110,  584 => 109,  581 => 108,  573 => 105,  567 => 104,  557 => 102,  553 => 101,  548 => 100,  542 => 98,  539 => 97,  533 => 96,  529 => 95,  526 => 94,  520 => 93,  512 => 87,  504 => 86,  499 => 85,  496 => 84,  490 => 48,  486 => 47,  482 => 46,  477 => 44,  472 => 42,  468 => 41,  463 => 40,  460 => 39,  454 => 36,  450 => 35,  444 => 32,  440 => 31,  435 => 29,  432 => 28,  429 => 27,  422 => 221,  420 => 216,  413 => 211,  411 => 183,  406 => 182,  403 => 181,  396 => 178,  393 => 177,  390 => 176,  386 => 174,  381 => 171,  378 => 170,  364 => 169,  357 => 167,  353 => 166,  333 => 165,  326 => 163,  323 => 162,  319 => 160,  316 => 159,  312 => 157,  310 => 156,  306 => 154,  304 => 144,  301 => 143,  297 => 141,  290 => 139,  287 => 138,  284 => 137,  270 => 136,  263 => 134,  258 => 131,  251 => 129,  241 => 127,  238 => 126,  235 => 125,  231 => 124,  211 => 123,  208 => 122,  205 => 121,  202 => 120,  199 => 119,  192 => 114,  187 => 111,  184 => 110,  181 => 94,  179 => 93,  174 => 90,  172 => 84,  164 => 82,  162 => 81,  150 => 71,  143 => 69,  139 => 67,  136 => 66,  133 => 65,  115 => 63,  111 => 61,  107 => 60,  88 => 59,  85 => 58,  82 => 57,  75 => 55,  72 => 54,  67 => 52,  63 => 50,  61 => 39,  58 => 38,  56 => 27,  45 => 19,  43 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  31 => 12,  87 => 35,  79 => 30,  66 => 20,  57 => 15,  51 => 12,  47 => 20,  40 => 8,  37 => 15,  32 => 5,  29 => 11,  26 => 3,);
    }
}
