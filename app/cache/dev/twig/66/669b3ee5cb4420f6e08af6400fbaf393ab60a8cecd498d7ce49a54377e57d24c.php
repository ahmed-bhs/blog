<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d286c1195953cb3d94f09d6cb15c43955fa32bf96571e405cbba38c8fecebf14 extends Twig_Template
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
        $__internal_579fd09e0ae4d79b6fe8feadb3a930fe27c4b6c6e78c80c3f5e05dae227784f7 = $this->env->getExtension("native_profiler");
        $__internal_579fd09e0ae4d79b6fe8feadb3a930fe27c4b6c6e78c80c3f5e05dae227784f7->enter($__internal_579fd09e0ae4d79b6fe8feadb3a930fe27c4b6c6e78c80c3f5e05dae227784f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_579fd09e0ae4d79b6fe8feadb3a930fe27c4b6c6e78c80c3f5e05dae227784f7->leave($__internal_579fd09e0ae4d79b6fe8feadb3a930fe27c4b6c6e78c80c3f5e05dae227784f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
";
    }
}
