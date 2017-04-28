<?php

/* SCDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_042b6424a1ef71f6ed5d5a408f6cfd822568d023467c7c0b8f990ee16b9043b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collot_datetime_widget' => array($this, 'block_collot_datetime_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79837525da88d0e555b6fd948a772035edfc5e0a177778449b755f8aad0fad07 = $this->env->getExtension("native_profiler");
        $__internal_79837525da88d0e555b6fd948a772035edfc5e0a177778449b755f8aad0fad07->enter($__internal_79837525da88d0e555b6fd948a772035edfc5e0a177778449b755f8aad0fad07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:div_layout.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('collot_datetime_widget', $context, $blocks);
        // line 24
        echo "

";
        
        $__internal_79837525da88d0e555b6fd948a772035edfc5e0a177778449b755f8aad0fad07->leave($__internal_79837525da88d0e555b6fd948a772035edfc5e0a177778449b755f8aad0fad07_prof);

    }

    // line 3
    public function block_collot_datetime_widget($context, array $blocks = array())
    {
        $__internal_b992cd1f443a56c37a72846182554b28cc8ab773dbdf0fdc9aae41696b4167d5 = $this->env->getExtension("native_profiler");
        $__internal_b992cd1f443a56c37a72846182554b28cc8ab773dbdf0fdc9aae41696b4167d5->enter($__internal_b992cd1f443a56c37a72846182554b28cc8ab773dbdf0fdc9aae41696b4167d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_widget"));

        // line 4
        ob_start();
        // line 5
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 6
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 9
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 10
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 12
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 13
            echo "

            ";
            // line 15
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 16
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 17
            echo "            ";
            $context["value"] = "";
            // line 18
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
            // line 19
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b992cd1f443a56c37a72846182554b28cc8ab773dbdf0fdc9aae41696b4167d5->leave($__internal_b992cd1f443a56c37a72846182554b28cc8ab773dbdf0fdc9aae41696b4167d5_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  77 => 18,  74 => 17,  71 => 16,  69 => 15,  65 => 13,  63 => 12,  62 => 11,  61 => 10,  60 => 9,  55 => 8,  49 => 6,  46 => 5,  44 => 4,  38 => 3,  29 => 24,  27 => 3,  23 => 1,);
    }

    public function getSource()
    {
        return "

{% block collot_datetime_widget %}
{% spaceless %}
    {% if widget == \"single_text\" %}
        {{ block(\"form_widget_simple\") }}
    {% else %}
        <div {{ block(\"widget_container_attributes\") }}>
            {{ date_pattern|replace({
                \"{{ year }}\":  form_widget(form.year),
                \"{{ month }}\": form_widget(form.month),
                \"{{ day }}\":   form_widget(form.day),
            })|raw }}

            {% set attr = {\"size\": 10}|merge(attr) %}
            {% set id = \"datepicker_\" ~ id %}
            {% set value = '' %}
            {% set full_name = \"datepicker_\" ~ full_name %}
            {{ block(\"hidden_widget\") }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock collot_datetime_widget %}


";
    }
}
