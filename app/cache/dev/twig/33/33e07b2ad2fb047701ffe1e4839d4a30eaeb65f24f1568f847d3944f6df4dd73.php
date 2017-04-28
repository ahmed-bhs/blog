<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_7426e58f1e50866db5b880432063e198d2e89649fe874794fa18c065445d1663 extends Twig_Template
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
        $__internal_3678c869b79fce216e895caf0a132c91e2d627e6810a5eda3152164ee4135cb8 = $this->env->getExtension("native_profiler");
        $__internal_3678c869b79fce216e895caf0a132c91e2d627e6810a5eda3152164ee4135cb8->enter($__internal_3678c869b79fce216e895caf0a132c91e2d627e6810a5eda3152164ee4135cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_3678c869b79fce216e895caf0a132c91e2d627e6810a5eda3152164ee4135cb8->leave($__internal_3678c869b79fce216e895caf0a132c91e2d627e6810a5eda3152164ee4135cb8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return "<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
";
    }
}
