<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_3f5cf738ac88eb1422662bba28d2f99a605496b3ddd3558679860a540cb016ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa2e4724f79ad7f49e2ae1633e9d6c600182c1634cdcc9a696da9e71bfb72a5 = $this->env->getExtension("native_profiler");
        $__internal_6fa2e4724f79ad7f49e2ae1633e9d6c600182c1634cdcc9a696da9e71bfb72a5->enter($__internal_6fa2e4724f79ad7f49e2ae1633e9d6c600182c1634cdcc9a696da9e71bfb72a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"]) ? $context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"] : $this->getContext($context, "__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"))), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"]) ? $context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"] : $this->getContext($context, "__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa2e4724f79ad7f49e2ae1633e9d6c600182c1634cdcc9a696da9e71bfb72a5->leave($__internal_6fa2e4724f79ad7f49e2ae1633e9d6c600182c1634cdcc9a696da9e71bfb72a5_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_33df14e57a86391e22d88541e7442b2551b3d9353c380f0ce68e6fabf3067462 = $this->env->getExtension("native_profiler");
        $__internal_33df14e57a86391e22d88541e7442b2551b3d9353c380f0ce68e6fabf3067462->enter($__internal_33df14e57a86391e22d88541e7442b2551b3d9353c380f0ce68e6fabf3067462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_33df14e57a86391e22d88541e7442b2551b3d9353c380f0ce68e6fabf3067462->leave($__internal_33df14e57a86391e22d88541e7442b2551b3d9353c380f0ce68e6fabf3067462_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b6d817e88a30b0d94373a5f778dccd0abebc2e94a8ab17b63e75460614544cab = $this->env->getExtension("native_profiler");
        $__internal_b6d817e88a30b0d94373a5f778dccd0abebc2e94a8ab17b63e75460614544cab->enter($__internal_b6d817e88a30b0d94373a5f778dccd0abebc2e94a8ab17b63e75460614544cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b6d817e88a30b0d94373a5f778dccd0abebc2e94a8ab17b63e75460614544cab->leave($__internal_b6d817e88a30b0d94373a5f778dccd0abebc2e94a8ab17b63e75460614544cab_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e198b7ab8bd4591d7b93f089854d48bbe2d644bd76f26a427814be92f0759f6d = $this->env->getExtension("native_profiler");
        $__internal_e198b7ab8bd4591d7b93f089854d48bbe2d644bd76f26a427814be92f0759f6d->enter($__internal_e198b7ab8bd4591d7b93f089854d48bbe2d644bd76f26a427814be92f0759f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"]) ? $context["__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225"] : $this->getContext($context, "__internal_0461aa6b3d65f784f4f66d8ba7d38994f2cae5390891251cd9828837f0641225")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e198b7ab8bd4591d7b93f089854d48bbe2d644bd76f26a427814be92f0759f6d->leave($__internal_e198b7ab8bd4591d7b93f089854d48bbe2d644bd76f26a427814be92f0759f6d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_da68904d439e029b3b7e47a7452da130acf1d521a7704901f5ea4b5c3238ecc8 = $this->env->getExtension("native_profiler");
        $__internal_da68904d439e029b3b7e47a7452da130acf1d521a7704901f5ea4b5c3238ecc8->enter($__internal_da68904d439e029b3b7e47a7452da130acf1d521a7704901f5ea4b5c3238ecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_da68904d439e029b3b7e47a7452da130acf1d521a7704901f5ea4b5c3238ecc8->leave($__internal_da68904d439e029b3b7e47a7452da130acf1d521a7704901f5ea4b5c3238ecc8_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_975d66e2efa7a6440204ad6036bf313c43e6785e0c49834284e964d4f42824c8 = $this->env->getExtension("native_profiler");
        $__internal_975d66e2efa7a6440204ad6036bf313c43e6785e0c49834284e964d4f42824c8->enter($__internal_975d66e2efa7a6440204ad6036bf313c43e6785e0c49834284e964d4f42824c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_975d66e2efa7a6440204ad6036bf313c43e6785e0c49834284e964d4f42824c8->leave($__internal_975d66e2efa7a6440204ad6036bf313c43e6785e0c49834284e964d4f42824c8_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_02e2a0491cc46858f96ae81d72be637a82937fbdcfe8929d98a468670d90139b = $this->env->getExtension("native_profiler");
        $__internal_02e2a0491cc46858f96ae81d72be637a82937fbdcfe8929d98a468670d90139b->enter($__internal_02e2a0491cc46858f96ae81d72be637a82937fbdcfe8929d98a468670d90139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_02e2a0491cc46858f96ae81d72be637a82937fbdcfe8929d98a468670d90139b->leave($__internal_02e2a0491cc46858f96ae81d72be637a82937fbdcfe8929d98a468670d90139b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    public function getSource()
    {
        return "{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
";
    }
}
