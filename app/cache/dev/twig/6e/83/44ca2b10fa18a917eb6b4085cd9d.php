<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_6e8344ca2b10fa18a917eb6b4085cd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        // line 17
        echo "    </div>
";
    }

    // line 20
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 25
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute($this->getContext($context, "admin"), "filterParameters"))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <table class=\"table table-bordered table-striped\">
                ";
            // line 27
            $this->displayBlock('table_header', $context, $blocks);
            // line 59
            echo "
                ";
            // line 60
            $this->displayBlock('table_body', $context, $blocks);
            // line 75
            echo "
                ";
            // line 76
            $this->displayBlock('table_footer', $context, $blocks);
            // line 178
            echo "            </table>
        </form>
    ";
        } else {
            // line 181
            echo "        <p class=\"notice\">
            ";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 27
    public function block_table_header($context, array $blocks = array())
    {
        // line 28
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 31
            echo "                                ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_batch") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 32
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } elseif ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 36
                echo "                                    \t";
                // line 37
                echo "                                ";
            } else {
                // line 38
                echo "                                    ";
                $context["sortable"] = false;
                // line 39
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 40
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 41
                    echo "                                        ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getContext($context, "field_description"));
                    // line 42
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array(0 => $this->getContext($context, "field_description"), 1 => $this->getAttribute($this->getContext($context, "admin"), "datagrid")), "method");
                    // line 43
                    echo "                                        ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 44
                    echo "                                        ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 45
                    echo "                                    ";
                }
                // line 46
                echo "
                                    ";
                // line 47
                ob_start();
                // line 48
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                            ";
                // line 49
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "sort_parameters")), "method"), "html", null, true);
                    echo "\">";
                }
                // line 50
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "label")), "method"), "html", null, true);
                echo "
                                            ";
                // line 51
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 52
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 54
                echo "                                ";
            }
            // line 55
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 60
    public function block_table_body($context, array $blocks = array())
    {
        // line 61
        echo "                    <tbody>
                        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 63
            echo "                            <tr>
                                ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 65
                echo "                                    ";
                if ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                    // line 66
                    echo "                                    \t";
                    // line 67
                    echo "                                \t";
                } else {
                    // line 68
                    echo "                                    \t";
                    echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                    echo "
                                   \t";
                }
                // line 70
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "                    </tbody>
                ";
    }

    // line 76
    public function block_table_footer($context, array $blocks = array())
    {
        // line 77
        echo "                    <tr>
                        <th colspan=\"";
        // line 78
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")) - (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? (2) : (0))), "html", null, true);
        echo "\">
                            <div class=\"form-inline\">
                                ";
        // line 80
        if (((!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
            // line 81
            echo "                                    ";
            $this->displayBlock('batch', $context, $blocks);
            // line 139
            echo "                                ";
        }
        // line 140
        echo "                            </div>
                        </th>
                    </tr>
                    ";
        // line 143
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 144
            echo "                        <tr>
                            <td colspan=\"";
            // line 145
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
            echo "\">
                                <div class=\"pagination pagination-centered\">
                                    <ul>
                                        ";
            // line 148
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != 1)) {
                // line 149
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                        ";
            }
            // line 151
            echo "
                                        ";
            // line 152
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
                // line 153
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                        ";
            }
            // line 155
            echo "
                                        ";
            // line 157
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 158
                echo "                                            ";
                if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                    // line 159
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                            ";
                } else {
                    // line 161
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 163
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 164
            echo "
                                        ";
            // line 165
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
                // line 166
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                        ";
            }
            // line 168
            echo "
                                        ";
            // line 169
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"))) {
                // line 170
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                        ";
            }
            // line 172
            echo "                                    </ul>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        // line 177
        echo "                ";
    }

    // line 81
    public function block_batch($context, array $blocks = array())
    {
        // line 82
        echo "                                        <script type=\"text/javascript\">
                                            ";
        // line 83
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 93
        echo "                                        </script>

                                        ";
        // line 95
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 138
        echo "                                    ";
    }

    // line 83
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 84
        echo "                                            jQuery(document).ready(function (\$) {
                                                \$('#list_batch_checkbox').click(function () {
                                                    \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                });
                                                \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function () {
                                                    \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                                                });
                                            });
                                            ";
    }

    // line 95
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 96
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
        echo "_all_elements\"/>
                                                ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\">
                                                ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 103
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "                                            </select>

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\"/>
                                            <div class=\"pull-right\">
                                                ";
        // line 109
        if ((($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "export"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method")))) {
            // line 110
            echo "                                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                                    ";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 112
                echo "                                                            <a
                                                            href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 0), "method") + array("format" => $this->getContext($context, "format")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "format"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ",";
                }
                // line 114
                echo "                                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 115
            echo "
                                                    &nbsp;-&nbsp;
                                                ";
        }
        // line 118
        echo "
                                                ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "

                                                &nbsp;-&nbsp;

                                                ";
        // line 123
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 124
        echo "
                                                ";
        // line 125
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
            // line 126
            echo "                                                    &nbsp;-&nbsp;
                                                    <label class=\"control-label\" for=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
            echo "_per_page\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
            echo "</label>
                                                    <select class=\"per-page small\" id=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
            echo "_per_page\" style=\"width: auto; height: auto\">
                                                        ";
            // line 129
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getperpageoptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
                // line 130
                echo "                                                            <option ";
                if (($this->getContext($context, "per_page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "maxperpage"))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), array("_per_page" => $this->getContext($context, "per_page"))))), "method"), "html", null, true);
                echo "\">
                                                                ";
                // line 131
                echo twig_escape_filter($this->env, $this->getContext($context, "per_page"), "html", null, true);
                echo "
                                                            </option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 134
            echo "                                                    </select>
                                                ";
        }
        // line 136
        echo "                                            </div>
                                        ";
    }

    // line 187
    public function block_list_filters($context, array $blocks = array())
    {
        // line 188
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 189
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 191
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 193
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <table class=\"table table-bordered\">
                        ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 196
                echo "                        <tr id=\"filter_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filter"), "name"), "html", null, true);
                echo "_row\" class=\"filter ";
                echo (($this->getAttribute($this->getContext($context, "filter"), "isActive")) ? ("active") : ("inactive"));
                echo "\">
                                <td class=\"filter-title\">";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "filter"), "label")), "method"), "html", null, true);
                echo "</td>
                                <td class=\"filter-type\">";
                // line 198
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget');
                echo "</td>
                                <td class=\"filter-value\">";
                // line 199
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), $this->getAttribute($this->getContext($context, "filter"), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 202
            echo "                    </table>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 206
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 207
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
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
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 211,  635 => 209,  629 => 207,  621 => 202,  612 => 199,  604 => 197,  597 => 196,  593 => 195,  588 => 193,  573 => 189,  570 => 188,  567 => 187,  540 => 130,  536 => 129,  532 => 128,  526 => 127,  523 => 126,  518 => 124,  516 => 123,  507 => 119,  504 => 118,  499 => 115,  485 => 114,  474 => 112,  445 => 107,  441 => 105,  430 => 103,  419 => 98,  410 => 96,  407 => 95,  395 => 84,  388 => 138,  374 => 81,  370 => 177,  363 => 172,  350 => 168,  342 => 166,  323 => 161,  315 => 159,  307 => 157,  296 => 153,  294 => 152,  281 => 148,  275 => 145,  270 => 143,  265 => 140,  262 => 139,  249 => 77,  217 => 66,  214 => 65,  210 => 64,  185 => 55,  182 => 54,  174 => 51,  117 => 36,  140 => 44,  97 => 27,  672 => 216,  667 => 209,  661 => 206,  655 => 203,  652 => 202,  650 => 201,  647 => 200,  641 => 198,  630 => 194,  628 => 193,  625 => 192,  619 => 190,  617 => 189,  614 => 188,  608 => 198,  606 => 185,  603 => 184,  600 => 183,  595 => 156,  591 => 153,  576 => 149,  571 => 148,  563 => 146,  558 => 134,  549 => 131,  545 => 109,  542 => 108,  534 => 105,  528 => 104,  520 => 102,  513 => 100,  508 => 98,  505 => 97,  497 => 95,  494 => 94,  488 => 93,  481 => 87,  470 => 85,  467 => 84,  461 => 48,  457 => 111,  448 => 44,  431 => 39,  425 => 36,  415 => 97,  411 => 31,  403 => 28,  393 => 221,  384 => 211,  382 => 93,  369 => 178,  360 => 174,  355 => 170,  352 => 170,  338 => 169,  332 => 167,  305 => 163,  299 => 160,  291 => 151,  287 => 154,  285 => 144,  278 => 141,  266 => 137,  252 => 78,  241 => 73,  235 => 129,  227 => 127,  222 => 68,  193 => 120,  179 => 111,  166 => 90,  137 => 43,  86 => 181,  335 => 94,  326 => 90,  306 => 87,  303 => 162,  283 => 149,  279 => 82,  276 => 81,  273 => 80,  271 => 79,  268 => 78,  259 => 81,  255 => 69,  245 => 66,  218 => 57,  211 => 53,  206 => 51,  190 => 50,  187 => 49,  169 => 50,  167 => 42,  164 => 84,  134 => 42,  77 => 8,  65 => 5,  56 => 27,  53 => 77,  686 => 206,  680 => 203,  677 => 202,  675 => 217,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 197,  636 => 196,  627 => 206,  624 => 184,  607 => 182,  590 => 181,  585 => 152,  581 => 191,  578 => 177,  575 => 176,  572 => 175,  566 => 147,  562 => 136,  560 => 168,  555 => 144,  538 => 165,  521 => 125,  517 => 101,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 96,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 148,  477 => 113,  475 => 86,  472 => 145,  462 => 123,  453 => 46,  450 => 109,  437 => 138,  435 => 137,  432 => 136,  423 => 132,  421 => 35,  416 => 129,  405 => 127,  402 => 126,  400 => 27,  391 => 216,  377 => 82,  375 => 181,  371 => 109,  366 => 177,  356 => 105,  353 => 169,  343 => 98,  337 => 164,  331 => 163,  329 => 166,  324 => 92,  318 => 90,  312 => 158,  310 => 87,  302 => 86,  298 => 84,  289 => 81,  286 => 85,  274 => 77,  272 => 144,  269 => 138,  254 => 68,  250 => 67,  247 => 66,  243 => 65,  238 => 64,  236 => 63,  233 => 62,  208 => 57,  203 => 62,  200 => 61,  197 => 60,  175 => 45,  173 => 94,  112 => 48,  110 => 63,  90 => 18,  87 => 17,  69 => 27,  49 => 22,  23 => 12,  82 => 35,  62 => 156,  40 => 17,  20 => 11,  479 => 162,  473 => 161,  468 => 125,  460 => 155,  456 => 121,  452 => 110,  443 => 42,  439 => 41,  436 => 147,  434 => 40,  429 => 144,  426 => 102,  422 => 142,  412 => 134,  408 => 132,  406 => 29,  401 => 130,  397 => 129,  392 => 83,  386 => 95,  383 => 121,  380 => 83,  378 => 182,  373 => 116,  367 => 112,  364 => 176,  361 => 110,  359 => 106,  354 => 106,  340 => 165,  336 => 103,  321 => 91,  313 => 99,  311 => 165,  308 => 97,  304 => 155,  297 => 159,  293 => 157,  284 => 89,  282 => 143,  277 => 78,  267 => 85,  263 => 71,  257 => 80,  251 => 80,  246 => 76,  240 => 64,  234 => 71,  228 => 70,  223 => 58,  219 => 67,  213 => 69,  207 => 63,  198 => 122,  181 => 47,  176 => 110,  170 => 61,  168 => 60,  146 => 46,  142 => 56,  128 => 40,  125 => 39,  107 => 24,  38 => 15,  144 => 32,  141 => 51,  135 => 47,  126 => 45,  109 => 18,  103 => 60,  67 => 52,  61 => 17,  47 => 25,  105 => 24,  93 => 41,  76 => 75,  72 => 54,  68 => 6,  225 => 126,  216 => 90,  212 => 88,  205 => 84,  201 => 123,  196 => 121,  194 => 79,  191 => 56,  189 => 77,  186 => 76,  180 => 72,  172 => 44,  159 => 61,  154 => 59,  147 => 33,  132 => 48,  127 => 52,  121 => 29,  118 => 28,  114 => 42,  104 => 30,  100 => 28,  78 => 21,  75 => 23,  71 => 59,  58 => 16,  34 => 15,  27 => 14,  91 => 20,  84 => 16,  44 => 27,  25 => 3,  28 => 14,  24 => 12,  19 => 1,  94 => 39,  88 => 6,  79 => 76,  59 => 155,  31 => 15,  26 => 14,  21 => 2,  70 => 20,  63 => 25,  46 => 21,  22 => 11,  163 => 49,  155 => 81,  152 => 35,  149 => 47,  145 => 46,  139 => 31,  131 => 41,  123 => 51,  120 => 21,  115 => 49,  106 => 61,  101 => 43,  96 => 21,  83 => 58,  80 => 57,  74 => 60,  66 => 15,  55 => 24,  52 => 15,  50 => 75,  43 => 17,  41 => 16,  37 => 21,  35 => 14,  32 => 32,  29 => 13,  184 => 114,  178 => 52,  171 => 93,  165 => 58,  162 => 57,  157 => 82,  153 => 54,  151 => 48,  143 => 45,  138 => 51,  136 => 50,  133 => 67,  130 => 66,  122 => 38,  119 => 37,  116 => 35,  111 => 32,  108 => 31,  102 => 30,  98 => 21,  95 => 20,  92 => 19,  89 => 182,  85 => 25,  81 => 178,  73 => 7,  64 => 18,  60 => 24,  57 => 23,  54 => 22,  51 => 21,  48 => 20,  45 => 19,  42 => 26,  39 => 16,  36 => 16,  33 => 15,  30 => 15,);
    }
}
