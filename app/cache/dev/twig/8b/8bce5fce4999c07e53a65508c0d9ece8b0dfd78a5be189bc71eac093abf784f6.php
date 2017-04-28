<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bf6d4f8d75482880e103afca9c04a7b250c9531ad17edb3b6ebf9a7d7a791656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89485ffb1b4792b3fd4e38ac3e11bf3731f291745a1cf2d574597453e0cf674c = $this->env->getExtension("native_profiler");
        $__internal_89485ffb1b4792b3fd4e38ac3e11bf3731f291745a1cf2d574597453e0cf674c->enter($__internal_89485ffb1b4792b3fd4e38ac3e11bf3731f291745a1cf2d574597453e0cf674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('radio_row', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('submit_row', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('reset_row', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_89485ffb1b4792b3fd4e38ac3e11bf3731f291745a1cf2d574597453e0cf674c->leave($__internal_89485ffb1b4792b3fd4e38ac3e11bf3731f291745a1cf2d574597453e0cf674c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5894484edb4c8862afcb48ded9b030e0faea49e19ab303101c74984789d2542a = $this->env->getExtension("native_profiler");
        $__internal_5894484edb4c8862afcb48ded9b030e0faea49e19ab303101c74984789d2542a->enter($__internal_5894484edb4c8862afcb48ded9b030e0faea49e19ab303101c74984789d2542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5894484edb4c8862afcb48ded9b030e0faea49e19ab303101c74984789d2542a->leave($__internal_5894484edb4c8862afcb48ded9b030e0faea49e19ab303101c74984789d2542a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_49213d0fad7f3473fb72bb5cb1b54146afe1babce7d5292dbc12fe1f9ecac729 = $this->env->getExtension("native_profiler");
        $__internal_49213d0fad7f3473fb72bb5cb1b54146afe1babce7d5292dbc12fe1f9ecac729->enter($__internal_49213d0fad7f3473fb72bb5cb1b54146afe1babce7d5292dbc12fe1f9ecac729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_49213d0fad7f3473fb72bb5cb1b54146afe1babce7d5292dbc12fe1f9ecac729->leave($__internal_49213d0fad7f3473fb72bb5cb1b54146afe1babce7d5292dbc12fe1f9ecac729_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d8d9085e789eb8e3e312796bc4ce37b4fa260c0a954930433814a982b2781276 = $this->env->getExtension("native_profiler");
        $__internal_d8d9085e789eb8e3e312796bc4ce37b4fa260c0a954930433814a982b2781276->enter($__internal_d8d9085e789eb8e3e312796bc4ce37b4fa260c0a954930433814a982b2781276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_d8d9085e789eb8e3e312796bc4ce37b4fa260c0a954930433814a982b2781276->leave($__internal_d8d9085e789eb8e3e312796bc4ce37b4fa260c0a954930433814a982b2781276_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7dcced3f8b14244afc932a96a7183e3155693983c1a1aa4b8774b5198b9dd595 = $this->env->getExtension("native_profiler");
        $__internal_7dcced3f8b14244afc932a96a7183e3155693983c1a1aa4b8774b5198b9dd595->enter($__internal_7dcced3f8b14244afc932a96a7183e3155693983c1a1aa4b8774b5198b9dd595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 34
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 35
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 37
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 45
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 46
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7dcced3f8b14244afc932a96a7183e3155693983c1a1aa4b8774b5198b9dd595->leave($__internal_7dcced3f8b14244afc932a96a7183e3155693983c1a1aa4b8774b5198b9dd595_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_820ffce6052536fffc44ade76f7ae7b086334cc99aa411dca1e0375cbc76d668 = $this->env->getExtension("native_profiler");
        $__internal_820ffce6052536fffc44ade76f7ae7b086334cc99aa411dca1e0375cbc76d668->enter($__internal_820ffce6052536fffc44ade76f7ae7b086334cc99aa411dca1e0375cbc76d668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_820ffce6052536fffc44ade76f7ae7b086334cc99aa411dca1e0375cbc76d668->leave($__internal_820ffce6052536fffc44ade76f7ae7b086334cc99aa411dca1e0375cbc76d668_prof);

    }

    // line 57
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dd52408101a1cfeef820b061b6ce485db80afe94651696a7b122115eb864e542 = $this->env->getExtension("native_profiler");
        $__internal_dd52408101a1cfeef820b061b6ce485db80afe94651696a7b122115eb864e542->enter($__internal_dd52408101a1cfeef820b061b6ce485db80afe94651696a7b122115eb864e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 58
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_dd52408101a1cfeef820b061b6ce485db80afe94651696a7b122115eb864e542->leave($__internal_dd52408101a1cfeef820b061b6ce485db80afe94651696a7b122115eb864e542_prof);

    }

    // line 61
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_318e71435d95874c6c7b41240258980fcfea2e289b42a2adfbf608635bd9b116 = $this->env->getExtension("native_profiler");
        $__internal_318e71435d95874c6c7b41240258980fcfea2e289b42a2adfbf608635bd9b116->enter($__internal_318e71435d95874c6c7b41240258980fcfea2e289b42a2adfbf608635bd9b116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 64
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 65
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_318e71435d95874c6c7b41240258980fcfea2e289b42a2adfbf608635bd9b116->leave($__internal_318e71435d95874c6c7b41240258980fcfea2e289b42a2adfbf608635bd9b116_prof);

    }

    // line 73
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_22dcc69e670346b0ce7742b129f68801cff472422c1af59285f57111925a1b09 = $this->env->getExtension("native_profiler");
        $__internal_22dcc69e670346b0ce7742b129f68801cff472422c1af59285f57111925a1b09->enter($__internal_22dcc69e670346b0ce7742b129f68801cff472422c1af59285f57111925a1b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 74
        ob_start();
        // line 75
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 76
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 77
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_22dcc69e670346b0ce7742b129f68801cff472422c1af59285f57111925a1b09->leave($__internal_22dcc69e670346b0ce7742b129f68801cff472422c1af59285f57111925a1b09_prof);

    }

    // line 84
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8bc906a8c17bbf899f96f9cbaa76eb8560d3439b3243cbb622f30899026bffbe = $this->env->getExtension("native_profiler");
        $__internal_8bc906a8c17bbf899f96f9cbaa76eb8560d3439b3243cbb622f30899026bffbe->enter($__internal_8bc906a8c17bbf899f96f9cbaa76eb8560d3439b3243cbb622f30899026bffbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 85
        ob_start();
        // line 86
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 87
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 88
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8bc906a8c17bbf899f96f9cbaa76eb8560d3439b3243cbb622f30899026bffbe->leave($__internal_8bc906a8c17bbf899f96f9cbaa76eb8560d3439b3243cbb622f30899026bffbe_prof);

    }

    // line 95
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e4ab253878f4d7ab894aa2307b8eb4fc6e85a582a36f206c09c3da64a5554223 = $this->env->getExtension("native_profiler");
        $__internal_e4ab253878f4d7ab894aa2307b8eb4fc6e85a582a36f206c09c3da64a5554223->enter($__internal_e4ab253878f4d7ab894aa2307b8eb4fc6e85a582a36f206c09c3da64a5554223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_e4ab253878f4d7ab894aa2307b8eb4fc6e85a582a36f206c09c3da64a5554223->leave($__internal_e4ab253878f4d7ab894aa2307b8eb4fc6e85a582a36f206c09c3da64a5554223_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  373 => 95,  361 => 89,  357 => 88,  353 => 87,  350 => 86,  348 => 85,  342 => 84,  330 => 78,  326 => 77,  322 => 76,  317 => 75,  315 => 74,  309 => 73,  297 => 67,  293 => 66,  289 => 65,  285 => 64,  276 => 63,  274 => 62,  268 => 61,  261 => 58,  255 => 57,  248 => 54,  242 => 53,  232 => 48,  226 => 46,  224 => 45,  219 => 43,  216 => 42,  209 => 38,  203 => 37,  199 => 35,  197 => 34,  192 => 32,  188 => 31,  183 => 30,  181 => 29,  172 => 28,  169 => 27,  167 => 26,  161 => 25,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 95,  95 => 94,  93 => 84,  90 => 83,  88 => 73,  85 => 72,  83 => 61,  80 => 60,  78 => 57,  75 => 56,  73 => 53,  70 => 52,  68 => 25,  65 => 24,  62 => 22,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }

    public function getSource()
    {
        return "{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{ form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
";
    }
}
