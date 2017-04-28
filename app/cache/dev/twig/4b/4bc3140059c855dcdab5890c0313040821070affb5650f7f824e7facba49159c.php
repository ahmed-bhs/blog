<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_40976aa9163b3c27db49140577bd3a53095858b8db3b7d015087e4edd1c1e3dc extends Twig_Template
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
        $__internal_c7451c47caba86faac9b127d46fd26ee70895165e35444d3ca62862d9c237741 = $this->env->getExtension("native_profiler");
        $__internal_c7451c47caba86faac9b127d46fd26ee70895165e35444d3ca62862d9c237741->enter($__internal_c7451c47caba86faac9b127d46fd26ee70895165e35444d3ca62862d9c237741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_c7451c47caba86faac9b127d46fd26ee70895165e35444d3ca62862d9c237741->leave($__internal_c7451c47caba86faac9b127d46fd26ee70895165e35444d3ca62862d9c237741_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
";
    }
}
