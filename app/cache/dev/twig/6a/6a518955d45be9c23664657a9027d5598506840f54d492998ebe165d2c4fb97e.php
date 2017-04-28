<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_b45392a0778ebba22c12eaf795d07ed948ca7ba7d54691eb19e3bd6cedb4e913 extends Twig_Template
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
        $__internal_77d0d3c9814128c7943c14be89bfb003c4e53aa8c1032c51798a382ccba75512 = $this->env->getExtension("native_profiler");
        $__internal_77d0d3c9814128c7943c14be89bfb003c4e53aa8c1032c51798a382ccba75512->enter($__internal_77d0d3c9814128c7943c14be89bfb003c4e53aa8c1032c51798a382ccba75512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_77d0d3c9814128c7943c14be89bfb003c4e53aa8c1032c51798a382ccba75512->leave($__internal_77d0d3c9814128c7943c14be89bfb003c4e53aa8c1032c51798a382ccba75512_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ value|date(field_options.format) }}
";
    }
}
