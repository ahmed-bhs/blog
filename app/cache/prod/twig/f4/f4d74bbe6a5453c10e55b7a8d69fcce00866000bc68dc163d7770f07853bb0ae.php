<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de53d9caea944c2b215f29fc89de177a9a626b69b669ad530190d6c6ca1e4a40 extends Twig_Template
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
        $__internal_165bd13ec6ed665cf77e2e96c8d53ad79f97e34a29af5444b671164b882cd2ad = $this->env->getExtension("native_profiler");
        $__internal_165bd13ec6ed665cf77e2e96c8d53ad79f97e34a29af5444b671164b882cd2ad->enter($__internal_165bd13ec6ed665cf77e2e96c8d53ad79f97e34a29af5444b671164b882cd2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165bd13ec6ed665cf77e2e96c8d53ad79f97e34a29af5444b671164b882cd2ad->leave($__internal_165bd13ec6ed665cf77e2e96c8d53ad79f97e34a29af5444b671164b882cd2ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38b15cfa0daa973f6786120e968941706e35cbdf98a2bdfa6138fb36ba66ace7 = $this->env->getExtension("native_profiler");
        $__internal_38b15cfa0daa973f6786120e968941706e35cbdf98a2bdfa6138fb36ba66ace7->enter($__internal_38b15cfa0daa973f6786120e968941706e35cbdf98a2bdfa6138fb36ba66ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38b15cfa0daa973f6786120e968941706e35cbdf98a2bdfa6138fb36ba66ace7->leave($__internal_38b15cfa0daa973f6786120e968941706e35cbdf98a2bdfa6138fb36ba66ace7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cb448cb634c8fc4742ac7e8679ebfead2c95a172507e1db651e9e57fc64fab8 = $this->env->getExtension("native_profiler");
        $__internal_9cb448cb634c8fc4742ac7e8679ebfead2c95a172507e1db651e9e57fc64fab8->enter($__internal_9cb448cb634c8fc4742ac7e8679ebfead2c95a172507e1db651e9e57fc64fab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9cb448cb634c8fc4742ac7e8679ebfead2c95a172507e1db651e9e57fc64fab8->leave($__internal_9cb448cb634c8fc4742ac7e8679ebfead2c95a172507e1db651e9e57fc64fab8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a92bd2a4bf2e36d7b896e92c3f54c04d6523b7a33292cce915ef6b40cbfafe = $this->env->getExtension("native_profiler");
        $__internal_d7a92bd2a4bf2e36d7b896e92c3f54c04d6523b7a33292cce915ef6b40cbfafe->enter($__internal_d7a92bd2a4bf2e36d7b896e92c3f54c04d6523b7a33292cce915ef6b40cbfafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7a92bd2a4bf2e36d7b896e92c3f54c04d6523b7a33292cce915ef6b40cbfafe->leave($__internal_d7a92bd2a4bf2e36d7b896e92c3f54c04d6523b7a33292cce915ef6b40cbfafe_prof);

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
