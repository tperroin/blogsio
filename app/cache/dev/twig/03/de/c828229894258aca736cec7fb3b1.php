<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_03dec828229894258aca736cec7fb3b1 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                success: function(html) {
                   field_dialog_";
        // line 49
        echo $this->getContext($context, "id");
        echo ".html(html);
                }
            });

            return;
        }

        jQuery('#";
        // line 56
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 57
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 59
        echo $this->getContext($context, "id");
        echo ".dialog('close');
    }


    // handle the add link
    var field_dialog_form_list_";
        // line 64
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 66
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 71
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 83
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 86
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 88
        echo $this->getContext($context, "id");
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 92
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 93
        echo $this->getContext($context, "id");
        echo ").live('submit', function(event) {
                    event.preventDefault();

                    var form = jQuery(this);

                    jQuery(form).ajaxSubmit({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        dataType: 'html',
                        data: {_xml_http_request: true},
                        success: function(html) {
                           field_dialog_";
        // line 104
        echo $this->getContext($context, "id");
        echo ".html(html);
                        }
                    });
                });

                // open the dialog in modal mode
                field_dialog_";
        // line 110
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 115
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 118
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 119
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    },
                    zIndex: 9998,
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 128
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 129
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 136
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 138
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 146
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_";
        // line 149
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 153
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 154
        echo $this->getContext($context, "id");
        echo ").live('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 157
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 650,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 163
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 165
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] dialog closed - removing `live` events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 167
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 168
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 177
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 182
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 184
        echo $this->getContext($context, "id");
        echo "();

        var element = jQuery(this);

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 200
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 210
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 219
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                if (typeof data == 'string') {
                    field_dialog_";
        // line 222
        echo $this->getContext($context, "id");
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 229
        echo $this->getContext($context, "id");
        echo ".dialog('close');

                    ";
        // line 231
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 232
            echo "                        ";
            // line 236
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 237
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 240
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 242
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 243
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 248
            echo "',
                            data: {_xml_http_request: true },
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 252
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 253
            echo $this->getContext($context, "id");
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 260
            echo $this->getContext($context, "id");
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 265
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 270
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 272
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 275
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 282
        echo $this->getContext($context, "id");
        echo " = false;

    function initialize_popup_";
        // line 284
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 286
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 287
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 290
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 292
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 299
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 301
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 306
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 310
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 317
        echo $this->getContext($context, "id");
        echo ");


    ";
        // line 320
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 321
            echo "        ";
            // line 324
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 326
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 330
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 334
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 341
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 346
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 353
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 356
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 357
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 360
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 361
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 368
            echo "
        // update the label
        jQuery('#";
            // line 370
            echo $this->getContext($context, "id");
            echo "').live('change', function(event) {

            Admin.log('[";
            // line 372
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 374
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 377
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code")));
            // line 381
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                success: function(html) {
                    jQuery('#field_widget_";
            // line 383
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 389
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 389,  634 => 383,  630 => 381,  628 => 377,  618 => 374,  613 => 372,  608 => 370,  604 => 368,  597 => 361,  593 => 360,  587 => 357,  583 => 356,  577 => 353,  567 => 346,  559 => 341,  549 => 334,  542 => 330,  535 => 326,  531 => 324,  529 => 321,  527 => 320,  511 => 310,  504 => 306,  496 => 301,  492 => 299,  485 => 292,  463 => 284,  458 => 282,  446 => 275,  440 => 272,  428 => 265,  420 => 260,  410 => 253,  406 => 252,  398 => 243,  394 => 242,  390 => 240,  384 => 237,  379 => 236,  370 => 229,  360 => 222,  354 => 219,  342 => 210,  305 => 182,  297 => 177,  285 => 168,  276 => 165,  271 => 163,  262 => 157,  248 => 153,  241 => 149,  222 => 138,  207 => 129,  187 => 118,  126 => 83,  100 => 66,  68 => 49,  56 => 40,  31 => 22,  26 => 20,  183 => 83,  170 => 75,  158 => 69,  145 => 64,  133 => 58,  106 => 47,  94 => 43,  65 => 31,  50 => 20,  45 => 19,  30 => 15,  24 => 13,  22 => 12,  19 => 11,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  636 => 191,  627 => 185,  624 => 184,  607 => 182,  590 => 181,  585 => 179,  581 => 178,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  560 => 168,  555 => 167,  538 => 165,  521 => 317,  517 => 163,  512 => 162,  509 => 161,  506 => 160,  503 => 159,  500 => 158,  498 => 157,  495 => 156,  486 => 151,  482 => 149,  480 => 290,  477 => 147,  475 => 146,  472 => 287,  468 => 286,  462 => 123,  456 => 121,  453 => 120,  450 => 119,  443 => 140,  437 => 138,  435 => 270,  432 => 136,  426 => 133,  423 => 132,  421 => 131,  416 => 129,  405 => 127,  402 => 126,  400 => 248,  391 => 118,  386 => 115,  380 => 112,  377 => 232,  375 => 231,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  353 => 104,  343 => 98,  340 => 97,  337 => 96,  331 => 94,  329 => 200,  324 => 92,  321 => 91,  318 => 90,  312 => 88,  310 => 184,  302 => 86,  298 => 84,  286 => 80,  282 => 79,  277 => 78,  274 => 77,  272 => 76,  250 => 67,  243 => 65,  238 => 64,  236 => 63,  228 => 59,  223 => 58,  203 => 128,  200 => 55,  197 => 54,  178 => 45,  173 => 110,  152 => 38,  149 => 36,  146 => 34,  139 => 61,  115 => 75,  107 => 24,  101 => 45,  95 => 64,  90 => 18,  87 => 59,  84 => 16,  81 => 15,  79 => 14,  57 => 22,  52 => 21,  47 => 75,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  301 => 137,  295 => 135,  292 => 134,  289 => 81,  281 => 167,  275 => 127,  269 => 75,  263 => 71,  257 => 121,  254 => 154,  249 => 118,  245 => 115,  233 => 146,  227 => 105,  221 => 102,  216 => 100,  213 => 99,  202 => 94,  196 => 91,  191 => 119,  186 => 88,  184 => 47,  181 => 115,  175 => 78,  169 => 80,  164 => 104,  160 => 77,  157 => 41,  155 => 75,  150 => 93,  144 => 92,  137 => 88,  132 => 86,  123 => 55,  120 => 56,  104 => 23,  98 => 21,  92 => 19,  86 => 40,  80 => 37,  78 => 56,  75 => 36,  70 => 33,  62 => 30,  59 => 23,  54 => 144,  51 => 38,  38 => 32,  264 => 72,  261 => 71,  256 => 69,  252 => 119,  247 => 66,  244 => 66,  237 => 110,  232 => 63,  230 => 62,  225 => 60,  220 => 59,  217 => 136,  211 => 98,  208 => 57,  205 => 54,  199 => 52,  193 => 50,  190 => 49,  188 => 48,  185 => 47,  182 => 46,  177 => 42,  172 => 16,  167 => 76,  163 => 74,  161 => 46,  156 => 44,  153 => 67,  151 => 42,  148 => 65,  140 => 68,  134 => 60,  128 => 56,  125 => 34,  121 => 54,  112 => 50,  110 => 25,  105 => 26,  89 => 41,  83 => 20,  76 => 13,  72 => 191,  67 => 175,  64 => 174,  58 => 12,  53 => 10,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 21,  23 => 18,  127 => 48,  124 => 47,  118 => 53,  113 => 40,  108 => 71,  102 => 36,  99 => 24,  96 => 44,  91 => 22,  85 => 30,  82 => 57,  77 => 27,  71 => 25,  69 => 33,  66 => 23,  63 => 22,  55 => 11,  49 => 103,  46 => 21,  43 => 33,  12 => 45,);
    }
}
