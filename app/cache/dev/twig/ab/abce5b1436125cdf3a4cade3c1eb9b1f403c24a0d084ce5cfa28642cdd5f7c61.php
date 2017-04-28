<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_641d736eec5adaa7c414384eee023e7ccb54abf087b5aea311b1e7e5d6ad0b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_row' => array($this, 'block_easyadmin_autocomplete_row'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9e1f3b7efb2b464249a5a5c1ddc16a529987e305c24a7f7ce936cd3e505f08d = $this->env->getExtension("native_profiler");
        $__internal_f9e1f3b7efb2b464249a5a5c1ddc16a529987e305c24a7f7ce936cd3e505f08d->enter($__internal_f9e1f3b7efb2b464249a5a5c1ddc16a529987e305c24a7f7ce936cd3e505f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('form_label', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('choice_label', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 221
        echo "
";
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('collection_row', $context, $blocks);
        // line 283
        echo "
";
        // line 284
        $this->displayBlock('button_row', $context, $blocks);
        // line 289
        echo "
";
        // line 290
        $this->displayBlock('choice_row', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('date_row', $context, $blocks);
        // line 299
        echo "
";
        // line 300
        $this->displayBlock('time_row', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 316
        echo "
";
        // line 317
        $this->displayBlock('radio_row', $context, $blocks);
        // line 323
        echo "
";
        // line 325
        $this->displayBlock('form_errors', $context, $blocks);
        // line 343
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 354
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 386
        echo "
";
        // line 387
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 416
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 498
        echo "
";
        // line 500
        $this->displayBlock('easyadmin_autocomplete_row', $context, $blocks);
        // line 511
        echo "
";
        // line 512
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 516
        echo "
";
        // line 518
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 523
        echo "
";
        // line 525
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_f9e1f3b7efb2b464249a5a5c1ddc16a529987e305c24a7f7ce936cd3e505f08d->leave($__internal_f9e1f3b7efb2b464249a5a5c1ddc16a529987e305c24a7f7ce936cd3e505f08d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_15ee01be1f626e288f49aa6992e227e056342c89fb6e26b398536f950a52931d = $this->env->getExtension("native_profiler");
        $__internal_15ee01be1f626e288f49aa6992e227e056342c89fb6e26b398536f950a52931d->enter($__internal_15ee01be1f626e288f49aa6992e227e056342c89fb6e26b398536f950a52931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_15ee01be1f626e288f49aa6992e227e056342c89fb6e26b398536f950a52931d->leave($__internal_15ee01be1f626e288f49aa6992e227e056342c89fb6e26b398536f950a52931d_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_f36ae35284d64e04d62172401602f59c4d32e34fde6f830ba53983a0b776f1bc = $this->env->getExtension("native_profiler");
        $__internal_f36ae35284d64e04d62172401602f59c4d32e34fde6f830ba53983a0b776f1bc->enter($__internal_f36ae35284d64e04d62172401602f59c4d32e34fde6f830ba53983a0b776f1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_f36ae35284d64e04d62172401602f59c4d32e34fde6f830ba53983a0b776f1bc->leave($__internal_f36ae35284d64e04d62172401602f59c4d32e34fde6f830ba53983a0b776f1bc_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_02b7804a0812c2e2a4c196cc8cc7b59039ed1b02dc632bde0028b1bd60ac0800 = $this->env->getExtension("native_profiler");
        $__internal_02b7804a0812c2e2a4c196cc8cc7b59039ed1b02dc632bde0028b1bd60ac0800->enter($__internal_02b7804a0812c2e2a4c196cc8cc7b59039ed1b02dc632bde0028b1bd60ac0800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_02b7804a0812c2e2a4c196cc8cc7b59039ed1b02dc632bde0028b1bd60ac0800->leave($__internal_02b7804a0812c2e2a4c196cc8cc7b59039ed1b02dc632bde0028b1bd60ac0800_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cc5bada683e5d90bae2403dad4f037e9605711b2bf5d63d50e49ed65a7b0bcc8 = $this->env->getExtension("native_profiler");
        $__internal_cc5bada683e5d90bae2403dad4f037e9605711b2bf5d63d50e49ed65a7b0bcc8->enter($__internal_cc5bada683e5d90bae2403dad4f037e9605711b2bf5d63d50e49ed65a7b0bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_cc5bada683e5d90bae2403dad4f037e9605711b2bf5d63d50e49ed65a7b0bcc8->leave($__internal_cc5bada683e5d90bae2403dad4f037e9605711b2bf5d63d50e49ed65a7b0bcc8_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_87541807de305f16bc61fdc2263fca5d5f698465868428fe4641b134bddb1172 = $this->env->getExtension("native_profiler");
        $__internal_87541807de305f16bc61fdc2263fca5d5f698465868428fe4641b134bddb1172->enter($__internal_87541807de305f16bc61fdc2263fca5d5f698465868428fe4641b134bddb1172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_87541807de305f16bc61fdc2263fca5d5f698465868428fe4641b134bddb1172->leave($__internal_87541807de305f16bc61fdc2263fca5d5f698465868428fe4641b134bddb1172_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3eff2e99fb2f4aee6b164a539f3f7591fbfef09603b325f15a3da19d49bbb1f6 = $this->env->getExtension("native_profiler");
        $__internal_3eff2e99fb2f4aee6b164a539f3f7591fbfef09603b325f15a3da19d49bbb1f6->enter($__internal_3eff2e99fb2f4aee6b164a539f3f7591fbfef09603b325f15a3da19d49bbb1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_3eff2e99fb2f4aee6b164a539f3f7591fbfef09603b325f15a3da19d49bbb1f6->leave($__internal_3eff2e99fb2f4aee6b164a539f3f7591fbfef09603b325f15a3da19d49bbb1f6_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_56c16556b48bb43d34ee29e6aa6a04337bb23886980c527318149736f4314c9b = $this->env->getExtension("native_profiler");
        $__internal_56c16556b48bb43d34ee29e6aa6a04337bb23886980c527318149736f4314c9b->enter($__internal_56c16556b48bb43d34ee29e6aa6a04337bb23886980c527318149736f4314c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_56c16556b48bb43d34ee29e6aa6a04337bb23886980c527318149736f4314c9b->leave($__internal_56c16556b48bb43d34ee29e6aa6a04337bb23886980c527318149736f4314c9b_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_30ab6c3d12eaa2ad44d580aca5576fc1c1ea60cd53a418a871e2b7ffaf4ca5be = $this->env->getExtension("native_profiler");
        $__internal_30ab6c3d12eaa2ad44d580aca5576fc1c1ea60cd53a418a871e2b7ffaf4ca5be->enter($__internal_30ab6c3d12eaa2ad44d580aca5576fc1c1ea60cd53a418a871e2b7ffaf4ca5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_30ab6c3d12eaa2ad44d580aca5576fc1c1ea60cd53a418a871e2b7ffaf4ca5be->leave($__internal_30ab6c3d12eaa2ad44d580aca5576fc1c1ea60cd53a418a871e2b7ffaf4ca5be_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_25b1ee232515e4e3cbfcc97c0675ecdff86d165a537c4d8f0ea4fc1eef146327 = $this->env->getExtension("native_profiler");
        $__internal_25b1ee232515e4e3cbfcc97c0675ecdff86d165a537c4d8f0ea4fc1eef146327->enter($__internal_25b1ee232515e4e3cbfcc97c0675ecdff86d165a537c4d8f0ea4fc1eef146327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_25b1ee232515e4e3cbfcc97c0675ecdff86d165a537c4d8f0ea4fc1eef146327->leave($__internal_25b1ee232515e4e3cbfcc97c0675ecdff86d165a537c4d8f0ea4fc1eef146327_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_96710333dec5ff05cea7b91996d8394966afe4a089b5c59a2c7755044eb7427c = $this->env->getExtension("native_profiler");
        $__internal_96710333dec5ff05cea7b91996d8394966afe4a089b5c59a2c7755044eb7427c->enter($__internal_96710333dec5ff05cea7b91996d8394966afe4a089b5c59a2c7755044eb7427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_96710333dec5ff05cea7b91996d8394966afe4a089b5c59a2c7755044eb7427c->leave($__internal_96710333dec5ff05cea7b91996d8394966afe4a089b5c59a2c7755044eb7427c_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bd634d6f2aba09e287b71d13b9cf14f8d04fc676e0fbd21211858ccfbb357995 = $this->env->getExtension("native_profiler");
        $__internal_bd634d6f2aba09e287b71d13b9cf14f8d04fc676e0fbd21211858ccfbb357995->enter($__internal_bd634d6f2aba09e287b71d13b9cf14f8d04fc676e0fbd21211858ccfbb357995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_bd634d6f2aba09e287b71d13b9cf14f8d04fc676e0fbd21211858ccfbb357995->leave($__internal_bd634d6f2aba09e287b71d13b9cf14f8d04fc676e0fbd21211858ccfbb357995_prof);

    }

    // line 140
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8c1c45913d418f5ceac5af56fda0a1685364696b4da49b66b28e5d33ca0df8e5 = $this->env->getExtension("native_profiler");
        $__internal_8c1c45913d418f5ceac5af56fda0a1685364696b4da49b66b28e5d33ca0df8e5->enter($__internal_8c1c45913d418f5ceac5af56fda0a1685364696b4da49b66b28e5d33ca0df8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 141
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 142
            echo "<div class=\"control-group\">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</div>";
        } else {
            // line 150
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 152
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 153
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "</div>";
        }
        
        $__internal_8c1c45913d418f5ceac5af56fda0a1685364696b4da49b66b28e5d33ca0df8e5->leave($__internal_8c1c45913d418f5ceac5af56fda0a1685364696b4da49b66b28e5d33ca0df8e5_prof);

    }

    // line 160
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b0f83e4466859c962c214f5861854a7e4e10a7da1ca991eb11923293325f50df = $this->env->getExtension("native_profiler");
        $__internal_b0f83e4466859c962c214f5861854a7e4e10a7da1ca991eb11923293325f50df->enter($__internal_b0f83e4466859c962c214f5861854a7e4e10a7da1ca991eb11923293325f50df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 161
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 162
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 163
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 165
            echo "<div class=\"checkbox\">";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 167
            echo "</div>";
        }
        
        $__internal_b0f83e4466859c962c214f5861854a7e4e10a7da1ca991eb11923293325f50df->leave($__internal_b0f83e4466859c962c214f5861854a7e4e10a7da1ca991eb11923293325f50df_prof);

    }

    // line 171
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2182cd533ff8f661526053c8e6cfbc825de2599ad38b7e76fb2040a5b3e5daba = $this->env->getExtension("native_profiler");
        $__internal_2182cd533ff8f661526053c8e6cfbc825de2599ad38b7e76fb2040a5b3e5daba->enter($__internal_2182cd533ff8f661526053c8e6cfbc825de2599ad38b7e76fb2040a5b3e5daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 173
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 176
            echo "<div class=\"radio\">";
            // line 177
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 178
            echo "</div>";
        }
        
        $__internal_2182cd533ff8f661526053c8e6cfbc825de2599ad38b7e76fb2040a5b3e5daba->leave($__internal_2182cd533ff8f661526053c8e6cfbc825de2599ad38b7e76fb2040a5b3e5daba_prof);

    }

    // line 184
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_916b133762575e707b7893f6483d93911dbaf9a0f141c14d21f82a71db80b468 = $this->env->getExtension("native_profiler");
        $__internal_916b133762575e707b7893f6483d93911dbaf9a0f141c14d21f82a71db80b468->enter($__internal_916b133762575e707b7893f6483d93911dbaf9a0f141c14d21f82a71db80b468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 185
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 186
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_916b133762575e707b7893f6483d93911dbaf9a0f141c14d21f82a71db80b468->leave($__internal_916b133762575e707b7893f6483d93911dbaf9a0f141c14d21f82a71db80b468_prof);

    }

    // line 189
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d33c7da84cdb659070ac37f7fa2b3e9f15eab545969217dee18e7da42487fd65 = $this->env->getExtension("native_profiler");
        $__internal_d33c7da84cdb659070ac37f7fa2b3e9f15eab545969217dee18e7da42487fd65->enter($__internal_d33c7da84cdb659070ac37f7fa2b3e9f15eab545969217dee18e7da42487fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 191
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 192
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d33c7da84cdb659070ac37f7fa2b3e9f15eab545969217dee18e7da42487fd65->leave($__internal_d33c7da84cdb659070ac37f7fa2b3e9f15eab545969217dee18e7da42487fd65_prof);

    }

    // line 195
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ea3e9124fe5e9c6749a2f06a65ddf2c478a20fdf91eace230d057a01d0d44bed = $this->env->getExtension("native_profiler");
        $__internal_ea3e9124fe5e9c6749a2f06a65ddf2c478a20fdf91eace230d057a01d0d44bed->enter($__internal_ea3e9124fe5e9c6749a2f06a65ddf2c478a20fdf91eace230d057a01d0d44bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ea3e9124fe5e9c6749a2f06a65ddf2c478a20fdf91eace230d057a01d0d44bed->leave($__internal_ea3e9124fe5e9c6749a2f06a65ddf2c478a20fdf91eace230d057a01d0d44bed_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b29d529b4ffac2f9ca02ee92b7e9f44e66cef2467ef6eeea767ae848497f5e72 = $this->env->getExtension("native_profiler");
        $__internal_b29d529b4ffac2f9ca02ee92b7e9f44e66cef2467ef6eeea767ae848497f5e72->enter($__internal_b29d529b4ffac2f9ca02ee92b7e9f44e66cef2467ef6eeea767ae848497f5e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b29d529b4ffac2f9ca02ee92b7e9f44e66cef2467ef6eeea767ae848497f5e72->leave($__internal_b29d529b4ffac2f9ca02ee92b7e9f44e66cef2467ef6eeea767ae848497f5e72_prof);

    }

    // line 203
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b3a12898aa2fd13c3d72755224fc04739bf5d6aa08d9583f52dfb01c76cfa082 = $this->env->getExtension("native_profiler");
        $__internal_b3a12898aa2fd13c3d72755224fc04739bf5d6aa08d9583f52dfb01c76cfa082->enter($__internal_b3a12898aa2fd13c3d72755224fc04739bf5d6aa08d9583f52dfb01c76cfa082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 204
        echo "    ";
        // line 205
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 206
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 210
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 211
                echo "        ";
            }
            // line 212
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 213
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 214
                echo "        ";
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 217
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 218
            echo "</label>
    ";
        }
        
        $__internal_b3a12898aa2fd13c3d72755224fc04739bf5d6aa08d9583f52dfb01c76cfa082->leave($__internal_b3a12898aa2fd13c3d72755224fc04739bf5d6aa08d9583f52dfb01c76cfa082_prof);

    }

    // line 224
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a2203099e9f4b7417ff6bb89d3b14e190c4998c90882cc2668f86c7e1add9905 = $this->env->getExtension("native_profiler");
        $__internal_a2203099e9f4b7417ff6bb89d3b14e190c4998c90882cc2668f86c7e1add9905->enter($__internal_a2203099e9f4b7417ff6bb89d3b14e190c4998c90882cc2668f86c7e1add9905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 225
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 226
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 227
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 232
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 234
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 243
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 245
        echo "    </div>";
        
        $__internal_a2203099e9f4b7417ff6bb89d3b14e190c4998c90882cc2668f86c7e1add9905->leave($__internal_a2203099e9f4b7417ff6bb89d3b14e190c4998c90882cc2668f86c7e1add9905_prof);

    }

    // line 248
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_79cae77e3f192c15300bca4835252ec5cad450e978adf31f6712e331aeae5dc3 = $this->env->getExtension("native_profiler");
        $__internal_79cae77e3f192c15300bca4835252ec5cad450e978adf31f6712e331aeae5dc3->enter($__internal_79cae77e3f192c15300bca4835252ec5cad450e978adf31f6712e331aeae5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 249
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 251
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 252
            echo "        ";
            ob_start();
            // line 253
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 256
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 274
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 276
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_79cae77e3f192c15300bca4835252ec5cad450e978adf31f6712e331aeae5dc3->leave($__internal_79cae77e3f192c15300bca4835252ec5cad450e978adf31f6712e331aeae5dc3_prof);

    }

    // line 284
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_19b15c7e599e153f7aae9be0de568680f29b6cb6061e693cc446276978bd7de0 = $this->env->getExtension("native_profiler");
        $__internal_19b15c7e599e153f7aae9be0de568680f29b6cb6061e693cc446276978bd7de0->enter($__internal_19b15c7e599e153f7aae9be0de568680f29b6cb6061e693cc446276978bd7de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 285
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 287
        echo "</div>";
        
        $__internal_19b15c7e599e153f7aae9be0de568680f29b6cb6061e693cc446276978bd7de0->leave($__internal_19b15c7e599e153f7aae9be0de568680f29b6cb6061e693cc446276978bd7de0_prof);

    }

    // line 290
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cc7fb23466a2698cd8a50c2c6f8ee55f977485914e489a21cc2e4dc8332f4aba = $this->env->getExtension("native_profiler");
        $__internal_cc7fb23466a2698cd8a50c2c6f8ee55f977485914e489a21cc2e4dc8332f4aba->enter($__internal_cc7fb23466a2698cd8a50c2c6f8ee55f977485914e489a21cc2e4dc8332f4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 291
        $context["force_error"] = true;
        // line 292
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cc7fb23466a2698cd8a50c2c6f8ee55f977485914e489a21cc2e4dc8332f4aba->leave($__internal_cc7fb23466a2698cd8a50c2c6f8ee55f977485914e489a21cc2e4dc8332f4aba_prof);

    }

    // line 295
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_eebe775f825a5868dfa42ca46d807d5b50db25804c5c04917e978a31901ca070 = $this->env->getExtension("native_profiler");
        $__internal_eebe775f825a5868dfa42ca46d807d5b50db25804c5c04917e978a31901ca070->enter($__internal_eebe775f825a5868dfa42ca46d807d5b50db25804c5c04917e978a31901ca070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 296
        $context["force_error"] = true;
        // line 297
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eebe775f825a5868dfa42ca46d807d5b50db25804c5c04917e978a31901ca070->leave($__internal_eebe775f825a5868dfa42ca46d807d5b50db25804c5c04917e978a31901ca070_prof);

    }

    // line 300
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e994d20c9f34b770c51a08b985cb1e6c53f50c93310ce0a2e45b92f436ef7b94 = $this->env->getExtension("native_profiler");
        $__internal_e994d20c9f34b770c51a08b985cb1e6c53f50c93310ce0a2e45b92f436ef7b94->enter($__internal_e994d20c9f34b770c51a08b985cb1e6c53f50c93310ce0a2e45b92f436ef7b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 301
        $context["force_error"] = true;
        // line 302
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e994d20c9f34b770c51a08b985cb1e6c53f50c93310ce0a2e45b92f436ef7b94->leave($__internal_e994d20c9f34b770c51a08b985cb1e6c53f50c93310ce0a2e45b92f436ef7b94_prof);

    }

    // line 305
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5e696086da51eb047e164494de8f40c826b7bec50d9f50a0935461403aac5afe = $this->env->getExtension("native_profiler");
        $__internal_5e696086da51eb047e164494de8f40c826b7bec50d9f50a0935461403aac5afe->enter($__internal_5e696086da51eb047e164494de8f40c826b7bec50d9f50a0935461403aac5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 306
        $context["force_error"] = true;
        // line 307
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5e696086da51eb047e164494de8f40c826b7bec50d9f50a0935461403aac5afe->leave($__internal_5e696086da51eb047e164494de8f40c826b7bec50d9f50a0935461403aac5afe_prof);

    }

    // line 310
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b8e1ccce75919b23e29836ef707f4afdbe9ec3ce6a88fcaffc76c4d6d767aadd = $this->env->getExtension("native_profiler");
        $__internal_b8e1ccce75919b23e29836ef707f4afdbe9ec3ce6a88fcaffc76c4d6d767aadd->enter($__internal_b8e1ccce75919b23e29836ef707f4afdbe9ec3ce6a88fcaffc76c4d6d767aadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 311
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 313
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 314
        echo "</div>";
        
        $__internal_b8e1ccce75919b23e29836ef707f4afdbe9ec3ce6a88fcaffc76c4d6d767aadd->leave($__internal_b8e1ccce75919b23e29836ef707f4afdbe9ec3ce6a88fcaffc76c4d6d767aadd_prof);

    }

    // line 317
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_64a724c2c353dd8b28921fe0a98cf91ef4975bcf39c3067b1c7620827f2a6a49 = $this->env->getExtension("native_profiler");
        $__internal_64a724c2c353dd8b28921fe0a98cf91ef4975bcf39c3067b1c7620827f2a6a49->enter($__internal_64a724c2c353dd8b28921fe0a98cf91ef4975bcf39c3067b1c7620827f2a6a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 318
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 319
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 321
        echo "</div>";
        
        $__internal_64a724c2c353dd8b28921fe0a98cf91ef4975bcf39c3067b1c7620827f2a6a49->leave($__internal_64a724c2c353dd8b28921fe0a98cf91ef4975bcf39c3067b1c7620827f2a6a49_prof);

    }

    // line 325
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c0dd97fe0d3b48959f744c019ab1d05508f2799a0c5c0d5f8835641443e155a9 = $this->env->getExtension("native_profiler");
        $__internal_c0dd97fe0d3b48959f744c019ab1d05508f2799a0c5c0d5f8835641443e155a9->enter($__internal_c0dd97fe0d3b48959f744c019ab1d05508f2799a0c5c0d5f8835641443e155a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 326
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 327
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 328
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 329
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 330
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 331
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 333
                echo "                <ul>
                    ";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 335
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                </ul>
            ";
            }
            // line 339
            echo "        </div>
    ";
        }
        
        $__internal_c0dd97fe0d3b48959f744c019ab1d05508f2799a0c5c0d5f8835641443e155a9->leave($__internal_c0dd97fe0d3b48959f744c019ab1d05508f2799a0c5c0d5f8835641443e155a9_prof);

    }

    // line 343
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0a85a88fb71a53bdb1ff0b7989d307d3f0e82f2b7067ac51fb9aea0d3f289840 = $this->env->getExtension("native_profiler");
        $__internal_0a85a88fb71a53bdb1ff0b7989d307d3f0e82f2b7067ac51fb9aea0d3f289840->enter($__internal_0a85a88fb71a53bdb1ff0b7989d307d3f0e82f2b7067ac51fb9aea0d3f289840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 344
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 345
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 347
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 348
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" => $this->renderBlock("empty_collection", $context, $blocks)));
            // line 349
            echo "    ";
        }
        // line 350
        echo "
    ";
        // line 351
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_0a85a88fb71a53bdb1ff0b7989d307d3f0e82f2b7067ac51fb9aea0d3f289840->leave($__internal_0a85a88fb71a53bdb1ff0b7989d307d3f0e82f2b7067ac51fb9aea0d3f289840_prof);

    }

    // line 354
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_f238ba684d3a9e8f46eb1ac633325bbc7fba94cd02dc4899e126b735603362a7 = $this->env->getExtension("native_profiler");
        $__internal_f238ba684d3a9e8f46eb1ac633325bbc7fba94cd02dc4899e126b735603362a7->enter($__internal_f238ba684d3a9e8f46eb1ac633325bbc7fba94cd02dc4899e126b735603362a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 355
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 356
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_f238ba684d3a9e8f46eb1ac633325bbc7fba94cd02dc4899e126b735603362a7->leave($__internal_f238ba684d3a9e8f46eb1ac633325bbc7fba94cd02dc4899e126b735603362a7_prof);

    }

    // line 360
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_76a85e1236ecd970df9b188a5a7830984ffe4e12e4f5b5baa5aa0c63186e7e63 = $this->env->getExtension("native_profiler");
        $__internal_76a85e1236ecd970df9b188a5a7830984ffe4e12e4f5b5baa5aa0c63186e7e63->enter($__internal_76a85e1236ecd970df9b188a5a7830984ffe4e12e4f5b5baa5aa0c63186e7e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 361
        echo "    ";
        $context["force_error"] = true;
        // line 362
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_76a85e1236ecd970df9b188a5a7830984ffe4e12e4f5b5baa5aa0c63186e7e63->leave($__internal_76a85e1236ecd970df9b188a5a7830984ffe4e12e4f5b5baa5aa0c63186e7e63_prof);

    }

    // line 365
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_ee30d4882cfda9547e0a103d8f35ba279ef5ae8e295df504be84dfa1a2e09372 = $this->env->getExtension("native_profiler");
        $__internal_ee30d4882cfda9547e0a103d8f35ba279ef5ae8e295df504be84dfa1a2e09372->enter($__internal_ee30d4882cfda9547e0a103d8f35ba279ef5ae8e295df504be84dfa1a2e09372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 366
        ob_start();
        // line 367
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 368
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 369
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 370
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 372
        echo "
        <div class=\"row\">
            ";
        // line 374
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 375
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 376
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 379
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ee30d4882cfda9547e0a103d8f35ba279ef5ae8e295df504be84dfa1a2e09372->leave($__internal_ee30d4882cfda9547e0a103d8f35ba279ef5ae8e295df504be84dfa1a2e09372_prof);

    }

    // line 387
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_08a013f7bd91e3f6061df7ca93ee164b5b9adbcec2020f29f1c4560efd9a50cc = $this->env->getExtension("native_profiler");
        $__internal_08a013f7bd91e3f6061df7ca93ee164b5b9adbcec2020f29f1c4560efd9a50cc->enter($__internal_08a013f7bd91e3f6061df7ca93ee164b5b9adbcec2020f29f1c4560efd9a50cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 388
        echo "    ";
        $context["force_error"] = true;
        // line 389
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_08a013f7bd91e3f6061df7ca93ee164b5b9adbcec2020f29f1c4560efd9a50cc->leave($__internal_08a013f7bd91e3f6061df7ca93ee164b5b9adbcec2020f29f1c4560efd9a50cc_prof);

    }

    // line 392
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_5270d9aee6fac66f7504661c35140063c1a20c0b2e7cd4af2ce05ab17a126d42 = $this->env->getExtension("native_profiler");
        $__internal_5270d9aee6fac66f7504661c35140063c1a20c0b2e7cd4af2ce05ab17a126d42->enter($__internal_5270d9aee6fac66f7504661c35140063c1a20c0b2e7cd4af2ce05ab17a126d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 393
        ob_start();
        // line 394
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 395
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 396
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 397
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 399
        echo "
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 402
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 403
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 404
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 407
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 408
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 411
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5270d9aee6fac66f7504661c35140063c1a20c0b2e7cd4af2ce05ab17a126d42->leave($__internal_5270d9aee6fac66f7504661c35140063c1a20c0b2e7cd4af2ce05ab17a126d42_prof);

    }

    // line 416
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_108777d04aaea32104a7deb808fc424b740155051c731c8d597764d52ae72ff6 = $this->env->getExtension("native_profiler");
        $__internal_108777d04aaea32104a7deb808fc424b740155051c731c8d597764d52ae72ff6->enter($__internal_108777d04aaea32104a7deb808fc424b740155051c731c8d597764d52ae72ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 417
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 418
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 419
        echo "
    ";
        // line 420
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 421
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 423
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 428
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 430
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 431
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 433
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 434
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 436
                echo "                                ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 440
            echo "
                    <div class=\"box-body\">
                        ";
            // line 442
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 443
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 445
            echo "
                        <div class=\"row\">
                            ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 448
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 449
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 457
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 458
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 459
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 469
        $this->displayBlock('item_actions', $context, $blocks);
        // line 493
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_108777d04aaea32104a7deb808fc424b740155051c731c8d597764d52ae72ff6->leave($__internal_108777d04aaea32104a7deb808fc424b740155051c731c8d597764d52ae72ff6_prof);

    }

    // line 469
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_9caba313698a3a05347779f95661a5184d00bf851025cff622c3eb9b554da0e7 = $this->env->getExtension("native_profiler");
        $__internal_9caba313698a3a05347779f95661a5184d00bf851025cff622c3eb9b554da0e7->enter($__internal_9caba313698a3a05347779f95661a5184d00bf851025cff622c3eb9b554da0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 470
        echo "                        ";
        // line 471
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 475
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 476
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 477
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 478
        echo "
                        ";
        // line 479
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 481
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 482
        echo "
                        ";
        // line 483
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 484
        echo "
                        ";
        // line 485
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 486
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 487
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 488
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 489
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 490
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 491
        echo "
                    ";
        
        $__internal_9caba313698a3a05347779f95661a5184d00bf851025cff622c3eb9b554da0e7->leave($__internal_9caba313698a3a05347779f95661a5184d00bf851025cff622c3eb9b554da0e7_prof);

    }

    // line 500
    public function block_easyadmin_autocomplete_row($context, array $blocks = array())
    {
        $__internal_1ebfe5f33c42415cda0b74041990f0e5b2d31bd927d50bb0286ee3ab2762eba0 = $this->env->getExtension("native_profiler");
        $__internal_1ebfe5f33c42415cda0b74041990f0e5b2d31bd927d50bb0286ee3ab2762eba0->enter($__internal_1ebfe5f33c42415cda0b74041990f0e5b2d31bd927d50bb0286ee3ab2762eba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_row"));

        // line 501
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'row', array("attr" => twig_array_merge(        // line 502
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 506
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 509
        echo "
";
        
        $__internal_1ebfe5f33c42415cda0b74041990f0e5b2d31bd927d50bb0286ee3ab2762eba0->leave($__internal_1ebfe5f33c42415cda0b74041990f0e5b2d31bd927d50bb0286ee3ab2762eba0_prof);

    }

    // line 512
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_4dbadf8bae3d77de95677e75579d8fe8f9e4a8711f405cba55aa573df9996b28 = $this->env->getExtension("native_profiler");
        $__internal_4dbadf8bae3d77de95677e75579d8fe8f9e4a8711f405cba55aa573df9996b28->enter($__internal_4dbadf8bae3d77de95677e75579d8fe8f9e4a8711f405cba55aa573df9996b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 513
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 514
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4dbadf8bae3d77de95677e75579d8fe8f9e4a8711f405cba55aa573df9996b28->leave($__internal_4dbadf8bae3d77de95677e75579d8fe8f9e4a8711f405cba55aa573df9996b28_prof);

    }

    // line 518
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_50832a7419c568b109237597078954bef27535c7f44ce8c511113979cf81d7e0 = $this->env->getExtension("native_profiler");
        $__internal_50832a7419c568b109237597078954bef27535c7f44ce8c511113979cf81d7e0->enter($__internal_50832a7419c568b109237597078954bef27535c7f44ce8c511113979cf81d7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 519
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_50832a7419c568b109237597078954bef27535c7f44ce8c511113979cf81d7e0->leave($__internal_50832a7419c568b109237597078954bef27535c7f44ce8c511113979cf81d7e0_prof);

    }

    // line 525
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_bbd1d8711f4ea6f2ce26152f5a5e0bb0bbe508870a25815418f1220c19e6e630 = $this->env->getExtension("native_profiler");
        $__internal_bbd1d8711f4ea6f2ce26152f5a5e0bb0bbe508870a25815418f1220c19e6e630->enter($__internal_bbd1d8711f4ea6f2ce26152f5a5e0bb0bbe508870a25815418f1220c19e6e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 526
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 527
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 528
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 529
            echo "            <h2>
                ";
            // line 530
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 531
            echo "                ";
            echo $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 534
        echo "
        ";
        // line 535
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 536
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 538
        echo "    </div>
";
        
        $__internal_bbd1d8711f4ea6f2ce26152f5a5e0bb0bbe508870a25815418f1220c19e6e630->leave($__internal_bbd1d8711f4ea6f2ce26152f5a5e0bb0bbe508870a25815418f1220c19e6e630_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1640 => 538,  1634 => 536,  1632 => 535,  1629 => 534,  1622 => 531,  1616 => 530,  1613 => 529,  1611 => 528,  1606 => 527,  1603 => 526,  1597 => 525,  1587 => 519,  1581 => 518,  1574 => 514,  1571 => 513,  1565 => 512,  1557 => 509,  1555 => 506,  1554 => 502,  1552 => 501,  1546 => 500,  1538 => 491,  1536 => 490,  1535 => 489,  1534 => 488,  1533 => 487,  1532 => 486,  1531 => 485,  1528 => 484,  1526 => 483,  1523 => 482,  1521 => 481,  1520 => 479,  1517 => 478,  1515 => 477,  1514 => 476,  1513 => 475,  1507 => 472,  1504 => 471,  1502 => 470,  1496 => 469,  1485 => 493,  1483 => 469,  1475 => 463,  1469 => 462,  1459 => 459,  1454 => 458,  1448 => 457,  1439 => 452,  1429 => 449,  1424 => 448,  1419 => 447,  1415 => 445,  1409 => 443,  1407 => 442,  1403 => 440,  1395 => 436,  1389 => 434,  1387 => 433,  1383 => 431,  1381 => 430,  1375 => 428,  1370 => 427,  1364 => 424,  1361 => 423,  1355 => 421,  1353 => 420,  1350 => 419,  1347 => 418,  1344 => 417,  1338 => 416,  1329 => 411,  1323 => 408,  1319 => 407,  1313 => 404,  1309 => 403,  1306 => 402,  1303 => 401,  1301 => 400,  1298 => 399,  1292 => 397,  1290 => 396,  1286 => 395,  1283 => 394,  1281 => 393,  1275 => 392,  1265 => 389,  1262 => 388,  1256 => 387,  1243 => 380,  1238 => 379,  1232 => 376,  1229 => 375,  1227 => 374,  1223 => 372,  1215 => 370,  1212 => 369,  1210 => 368,  1207 => 367,  1205 => 366,  1199 => 365,  1189 => 362,  1186 => 361,  1180 => 360,  1170 => 356,  1167 => 355,  1161 => 354,  1154 => 351,  1151 => 350,  1148 => 349,  1145 => 348,  1142 => 347,  1136 => 345,  1134 => 344,  1128 => 343,  1119 => 339,  1115 => 337,  1106 => 335,  1102 => 334,  1099 => 333,  1093 => 331,  1091 => 330,  1087 => 329,  1084 => 328,  1081 => 327,  1078 => 326,  1072 => 325,  1065 => 321,  1063 => 320,  1061 => 319,  1053 => 318,  1047 => 317,  1040 => 314,  1038 => 313,  1036 => 312,  1028 => 311,  1022 => 310,  1015 => 307,  1013 => 306,  1007 => 305,  1000 => 302,  998 => 301,  992 => 300,  985 => 297,  983 => 296,  977 => 295,  970 => 292,  968 => 291,  962 => 290,  955 => 287,  953 => 286,  947 => 285,  941 => 284,  929 => 278,  924 => 276,  920 => 274,  906 => 265,  900 => 264,  889 => 256,  884 => 253,  881 => 252,  879 => 251,  873 => 249,  867 => 248,  860 => 245,  854 => 243,  852 => 242,  850 => 240,  843 => 235,  837 => 234,  833 => 232,  831 => 231,  829 => 229,  827 => 228,  825 => 227,  816 => 226,  814 => 225,  808 => 224,  799 => 218,  797 => 217,  795 => 216,  780 => 215,  777 => 214,  774 => 213,  771 => 212,  768 => 211,  765 => 210,  762 => 209,  759 => 208,  756 => 207,  753 => 206,  750 => 205,  748 => 204,  742 => 203,  735 => 200,  729 => 199,  722 => 196,  716 => 195,  709 => 192,  707 => 191,  701 => 189,  694 => 186,  692 => 185,  686 => 184,  678 => 178,  676 => 177,  674 => 176,  671 => 174,  669 => 173,  667 => 172,  661 => 171,  653 => 167,  651 => 166,  649 => 165,  646 => 163,  644 => 162,  642 => 161,  636 => 160,  628 => 156,  622 => 153,  621 => 152,  617 => 151,  613 => 150,  610 => 148,  604 => 145,  603 => 144,  599 => 143,  597 => 142,  595 => 141,  589 => 140,  582 => 137,  580 => 136,  574 => 135,  565 => 130,  562 => 129,  554 => 128,  549 => 126,  547 => 125,  545 => 124,  542 => 122,  540 => 121,  534 => 120,  525 => 115,  523 => 114,  521 => 112,  520 => 111,  519 => 110,  518 => 109,  513 => 107,  511 => 106,  509 => 105,  506 => 103,  504 => 102,  498 => 101,  490 => 97,  488 => 96,  486 => 95,  484 => 94,  482 => 93,  478 => 92,  476 => 91,  473 => 89,  471 => 88,  465 => 87,  457 => 83,  455 => 82,  453 => 81,  447 => 80,  440 => 77,  434 => 75,  432 => 74,  430 => 73,  424 => 71,  421 => 70,  419 => 69,  416 => 68,  410 => 67,  403 => 64,  401 => 63,  395 => 62,  388 => 59,  386 => 58,  380 => 57,  373 => 54,  370 => 52,  368 => 51,  362 => 50,  350 => 44,  345 => 42,  341 => 40,  328 => 30,  323 => 27,  320 => 26,  318 => 25,  316 => 23,  310 => 22,  303 => 17,  300 => 15,  298 => 13,  297 => 12,  296 => 11,  295 => 9,  294 => 8,  293 => 7,  291 => 5,  289 => 4,  283 => 3,  276 => 525,  273 => 523,  271 => 518,  268 => 516,  266 => 512,  263 => 511,  261 => 500,  258 => 498,  256 => 416,  253 => 414,  251 => 392,  248 => 391,  246 => 387,  243 => 386,  241 => 365,  238 => 364,  236 => 360,  233 => 359,  231 => 354,  229 => 343,  227 => 325,  224 => 323,  222 => 317,  219 => 316,  217 => 310,  214 => 309,  212 => 305,  209 => 304,  207 => 300,  204 => 299,  202 => 295,  199 => 294,  197 => 290,  194 => 289,  192 => 284,  189 => 283,  187 => 248,  184 => 247,  182 => 224,  179 => 223,  176 => 221,  174 => 203,  171 => 202,  169 => 199,  166 => 198,  164 => 195,  161 => 194,  159 => 189,  156 => 188,  154 => 184,  151 => 183,  148 => 181,  146 => 171,  143 => 170,  141 => 160,  138 => 159,  136 => 140,  133 => 139,  131 => 135,  128 => 134,  126 => 120,  123 => 119,  121 => 101,  118 => 100,  116 => 87,  113 => 86,  111 => 80,  108 => 79,  106 => 67,  103 => 66,  101 => 62,  98 => 61,  96 => 57,  93 => 56,  91 => 50,  88 => 49,  86 => 22,  83 => 21,  80 => 19,  78 => 3,  75 => 2,  14 => 1,);
    }

    public function getSource()
    {
        return "{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_row %}
    {{ form_row(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_row %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
";
    }
}
