<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_6b4100be146a156b899e69ee7eedf7e3aa4e6ef18f049da9f14d027eb929ac63 extends Twig_Template
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
        $__internal_99f24a9fbd81559a72be114f20f2c9e14e9bce8d437e86d850caf9a3cfb7d401 = $this->env->getExtension("native_profiler");
        $__internal_99f24a9fbd81559a72be114f20f2c9e14e9bce8d437e86d850caf9a3cfb7d401->enter($__internal_99f24a9fbd81559a72be114f20f2c9e14e9bce8d437e86d850caf9a3cfb7d401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_99f24a9fbd81559a72be114f20f2c9e14e9bce8d437e86d850caf9a3cfb7d401->leave($__internal_99f24a9fbd81559a72be114f20f2c9e14e9bce8d437e86d850caf9a3cfb7d401_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    public function getSource()
    {
        return "{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
";
    }
}
