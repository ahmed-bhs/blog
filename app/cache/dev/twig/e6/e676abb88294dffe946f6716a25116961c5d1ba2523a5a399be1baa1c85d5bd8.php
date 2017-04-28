<?php

/* SCDatetimepickerBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_9d31e90662b63ae7380d5ebf1c6543159ab19ae7a75febc8015832c79ce64fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'collot_datetime_javascript' => array($this, 'block_collot_datetime_javascript'),
            'collot_datetime_javascript_prototype' => array($this, 'block_collot_datetime_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14292477ea16c0ee2785afc528e1a8726f7633e69773c7a4a892487c36a4554f = $this->env->getExtension("native_profiler");
        $__internal_14292477ea16c0ee2785afc528e1a8726f7633e69773c7a4a892487c36a4554f->enter($__internal_14292477ea16c0ee2785afc528e1a8726f7633e69773c7a4a892487c36a4554f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('collot_datetime_javascript', $context, $blocks);
        
        $__internal_14292477ea16c0ee2785afc528e1a8726f7633e69773c7a4a892487c36a4554f->leave($__internal_14292477ea16c0ee2785afc528e1a8726f7633e69773c7a4a892487c36a4554f_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_e13a2bcfa4374771b589a3cee70bed42a698642fba7a5e831d96571e4a32e285 = $this->env->getExtension("native_profiler");
        $__internal_e13a2bcfa4374771b589a3cee70bed42a698642fba7a5e831d96571e4a32e285->enter($__internal_e13a2bcfa4374771b589a3cee70bed42a698642fba7a5e831d96571e4a32e285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('collot.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e13a2bcfa4374771b589a3cee70bed42a698642fba7a5e831d96571e4a32e285->leave($__internal_e13a2bcfa4374771b589a3cee70bed42a698642fba7a5e831d96571e4a32e285_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_ac2fb9cddcfadd7a9cea9a6aeeb3091e42b72f8faf9b595f486f389d91764d59 = $this->env->getExtension("native_profiler");
        $__internal_ac2fb9cddcfadd7a9cea9a6aeeb3091e42b72f8faf9b595f486f389d91764d59->enter($__internal_ac2fb9cddcfadd7a9cea9a6aeeb3091e42b72f8faf9b595f486f389d91764d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_ac2fb9cddcfadd7a9cea9a6aeeb3091e42b72f8faf9b595f486f389d91764d59->leave($__internal_ac2fb9cddcfadd7a9cea9a6aeeb3091e42b72f8faf9b595f486f389d91764d59_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_aacb3c856b2e71ef22c680f9953d75f76fb8bddf99dc583427e8445cb08de4cc = $this->env->getExtension("native_profiler");
        $__internal_aacb3c856b2e71ef22c680f9953d75f76fb8bddf99dc583427e8445cb08de4cc->enter($__internal_aacb3c856b2e71ef22c680f9953d75f76fb8bddf99dc583427e8445cb08de4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_aacb3c856b2e71ef22c680f9953d75f76fb8bddf99dc583427e8445cb08de4cc->leave($__internal_aacb3c856b2e71ef22c680f9953d75f76fb8bddf99dc583427e8445cb08de4cc_prof);

    }

    // line 13
    public function block_collot_datetime_javascript($context, array $blocks = array())
    {
        $__internal_23887510f9a9658b919de6af349b5227a726cf34794ccdadfa7d3a2aa355fe00 = $this->env->getExtension("native_profiler");
        $__internal_23887510f9a9658b919de6af349b5227a726cf34794ccdadfa7d3a2aa355fe00->enter($__internal_23887510f9a9658b919de6af349b5227a726cf34794ccdadfa7d3a2aa355fe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    ";
        // line 17
        if ($this->getAttribute((isset($context["pickerOptions"]) ? $context["pickerOptions"] : null), "language", array(), "any", true, true)) {
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker." . $this->getAttribute((isset($context["pickerOptions"]) ? $context["pickerOptions"] : $this->getContext($context, "pickerOptions")), "language", array())) . ".js")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        }
        // line 20
        echo "    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 23
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
            ";
        // line 25
        $this->displayBlock('collot_datetime_javascript_prototype', $context, $blocks);
        // line 42
        echo "        });
    </script>
    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_23887510f9a9658b919de6af349b5227a726cf34794ccdadfa7d3a2aa355fe00->leave($__internal_23887510f9a9658b919de6af349b5227a726cf34794ccdadfa7d3a2aa355fe00_prof);

    }

    // line 25
    public function block_collot_datetime_javascript_prototype($context, array $blocks = array())
    {
        $__internal_84d0065502bb8c9ba79934962617919bdf7eede8536aba9ddefcd92436347901 = $this->env->getExtension("native_profiler");
        $__internal_84d0065502bb8c9ba79934962617919bdf7eede8536aba9ddefcd92436347901->enter($__internal_84d0065502bb8c9ba79934962617919bdf7eede8536aba9ddefcd92436347901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_javascript_prototype"));

        // line 26
        echo "
                ";
        // line 27
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 28
            echo "                    var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$month = \$('#";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$day = \$('#";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                ";
        }
        // line 38
        echo "
                \$field.datetimepicker(";
        // line 39
        echo twig_jsonencode_filter((isset($context["pickerOptions"]) ? $context["pickerOptions"] : $this->getContext($context, "pickerOptions")));
        echo ");  

            ";
        
        $__internal_84d0065502bb8c9ba79934962617919bdf7eede8536aba9ddefcd92436347901->leave($__internal_84d0065502bb8c9ba79934962617919bdf7eede8536aba9ddefcd92436347901_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 39,  181 => 38,  170 => 30,  166 => 29,  161 => 28,  159 => 27,  156 => 26,  150 => 25,  139 => 42,  137 => 25,  129 => 23,  124 => 20,  118 => 18,  116 => 17,  112 => 16,  109 => 15,  107 => 14,  101 => 13,  89 => 11,  77 => 9,  62 => 4,  57 => 3,  55 => 2,  49 => 1,  42 => 13,  39 => 12,  37 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 1,);
    }

    public function getSource()
    {
        return "{% block form_javascript %}
{% spaceless %}
    {% for child in form %}
        {{ form_javascript(child) }}
    {% endfor %}
{% endspaceless %}
{% endblock form_javascript %}

{% block field_javascript \"\" %}

{% block button_javascript \"\" %}

{% block collot_datetime_javascript %}
{% spaceless %}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js') }}\" charset=\"UTF-8\"></script>
    {% if pickerOptions.language is defined %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker.'~ pickerOptions.language ~'.js') }}\" charset=\"UTF-8\"></script>
    {% endif %}
    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{% if widget != \"single_text\" %}datepicker_{% endif %}{{ id }}');
        
            {% block collot_datetime_javascript_prototype %}

                {% if widget != \"single_text\" %}
                    var \$year = \$('#{{ form.year.vars.id }}');
                    var \$month = \$('#{{ form.month.vars.id }}');
                    var \$day = \$('#{{ form.day.vars.id }}');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                {% endif %}

                \$field.datetimepicker({{ pickerOptions|json_encode|raw }});  

            {% endblock %}
        });
    </script>
    
{% endspaceless %}
{% endblock %}
";
    }
}
