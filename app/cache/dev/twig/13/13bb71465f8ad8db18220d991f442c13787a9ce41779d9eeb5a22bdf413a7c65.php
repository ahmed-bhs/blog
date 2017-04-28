<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_506edd1ca67bfaf2b9a37912ca77db41833dd9c97fb25d9187fdfb43c741873a extends Twig_Template
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
        $__internal_025bc08fe197e54fa833d7a8c11d290be5c0f0999e2b0ad6680c17d0a066654c = $this->env->getExtension("native_profiler");
        $__internal_025bc08fe197e54fa833d7a8c11d290be5c0f0999e2b0ad6680c17d0a066654c->enter($__internal_025bc08fe197e54fa833d7a8c11d290be5c0f0999e2b0ad6680c17d0a066654c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_025bc08fe197e54fa833d7a8c11d290be5c0f0999e2b0ad6680c17d0a066654c->leave($__internal_025bc08fe197e54fa833d7a8c11d290be5c0f0999e2b0ad6680c17d0a066654c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
";
    }
}
