<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_ba314eecf7f330cb99753a9d3b1127d5b0178a92b8d855fe0bc62037e4a6fcef extends Twig_Template
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
        $__internal_51f888504a38eb56fcbe52c08993a3128e826f769376e45846c08e027969c2b8 = $this->env->getExtension("native_profiler");
        $__internal_51f888504a38eb56fcbe52c08993a3128e826f769376e45846c08e027969c2b8->enter($__internal_51f888504a38eb56fcbe52c08993a3128e826f769376e45846c08e027969c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_51f888504a38eb56fcbe52c08993a3128e826f769376e45846c08e027969c2b8->leave($__internal_51f888504a38eb56fcbe52c08993a3128e826f769376e45846c08e027969c2b8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
        return "<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
";
    }
}
