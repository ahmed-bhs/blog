<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0b59d7294be36c917b6289107c29990bceb2a9631b652ce06a2e3dadb50d9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c433946c8fb142c85ecadd28a9c85c5fb77336beecc5ba73ad3b85e345006e75 = $this->env->getExtension("native_profiler");
        $__internal_c433946c8fb142c85ecadd28a9c85c5fb77336beecc5ba73ad3b85e345006e75->enter($__internal_c433946c8fb142c85ecadd28a9c85c5fb77336beecc5ba73ad3b85e345006e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c433946c8fb142c85ecadd28a9c85c5fb77336beecc5ba73ad3b85e345006e75->leave($__internal_c433946c8fb142c85ecadd28a9c85c5fb77336beecc5ba73ad3b85e345006e75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d65896d09f96b6bce671797e8738900c4255fb2b7e3b732d6aa8c09714732173 = $this->env->getExtension("native_profiler");
        $__internal_d65896d09f96b6bce671797e8738900c4255fb2b7e3b732d6aa8c09714732173->enter($__internal_d65896d09f96b6bce671797e8738900c4255fb2b7e3b732d6aa8c09714732173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d65896d09f96b6bce671797e8738900c4255fb2b7e3b732d6aa8c09714732173->leave($__internal_d65896d09f96b6bce671797e8738900c4255fb2b7e3b732d6aa8c09714732173_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e3d42b68fdef2bee2a0f7a8d410a474462692c62b3e40e4c4282f3345e24fb1 = $this->env->getExtension("native_profiler");
        $__internal_3e3d42b68fdef2bee2a0f7a8d410a474462692c62b3e40e4c4282f3345e24fb1->enter($__internal_3e3d42b68fdef2bee2a0f7a8d410a474462692c62b3e40e4c4282f3345e24fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e3d42b68fdef2bee2a0f7a8d410a474462692c62b3e40e4c4282f3345e24fb1->leave($__internal_3e3d42b68fdef2bee2a0f7a8d410a474462692c62b3e40e4c4282f3345e24fb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68900cb1d862248345c9fd600afca8a9e7d2cbae11394eb13fdc7792dfce4c8 = $this->env->getExtension("native_profiler");
        $__internal_a68900cb1d862248345c9fd600afca8a9e7d2cbae11394eb13fdc7792dfce4c8->enter($__internal_a68900cb1d862248345c9fd600afca8a9e7d2cbae11394eb13fdc7792dfce4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a68900cb1d862248345c9fd600afca8a9e7d2cbae11394eb13fdc7792dfce4c8->leave($__internal_a68900cb1d862248345c9fd600afca8a9e7d2cbae11394eb13fdc7792dfce4c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
