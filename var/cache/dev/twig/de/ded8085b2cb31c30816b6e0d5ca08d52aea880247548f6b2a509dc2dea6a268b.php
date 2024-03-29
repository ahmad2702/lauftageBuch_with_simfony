<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_7b662f8be774429c46fb738c09ad0d775d383139f62db35cbdb42b3b5711fe91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64aa4a437e9586e37ade556317db60bf3ce1228d3505a2be6697a95237e466df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64aa4a437e9586e37ade556317db60bf3ce1228d3505a2be6697a95237e466df->enter($__internal_64aa4a437e9586e37ade556317db60bf3ce1228d3505a2be6697a95237e466df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_563310ed85481521f3badccdd2d0faaeb4725e1804cb59bd325009737a7641c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563310ed85481521f3badccdd2d0faaeb4725e1804cb59bd325009737a7641c9->enter($__internal_563310ed85481521f3badccdd2d0faaeb4725e1804cb59bd325009737a7641c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64aa4a437e9586e37ade556317db60bf3ce1228d3505a2be6697a95237e466df->leave($__internal_64aa4a437e9586e37ade556317db60bf3ce1228d3505a2be6697a95237e466df_prof);

        
        $__internal_563310ed85481521f3badccdd2d0faaeb4725e1804cb59bd325009737a7641c9->leave($__internal_563310ed85481521f3badccdd2d0faaeb4725e1804cb59bd325009737a7641c9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6ea2575243be9e7f2b8cc4ffd485e0d5d1979067f297bd2c7700a040db842ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea2575243be9e7f2b8cc4ffd485e0d5d1979067f297bd2c7700a040db842ff5->enter($__internal_6ea2575243be9e7f2b8cc4ffd485e0d5d1979067f297bd2c7700a040db842ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bfabdea172c14306e8ac7d4f25ce2f83bae423d9a0e96abdaf311aaeaebbb454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfabdea172c14306e8ac7d4f25ce2f83bae423d9a0e96abdaf311aaeaebbb454->enter($__internal_bfabdea172c14306e8ac7d4f25ce2f83bae423d9a0e96abdaf311aaeaebbb454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bfabdea172c14306e8ac7d4f25ce2f83bae423d9a0e96abdaf311aaeaebbb454->leave($__internal_bfabdea172c14306e8ac7d4f25ce2f83bae423d9a0e96abdaf311aaeaebbb454_prof);

        
        $__internal_6ea2575243be9e7f2b8cc4ffd485e0d5d1979067f297bd2c7700a040db842ff5->leave($__internal_6ea2575243be9e7f2b8cc4ffd485e0d5d1979067f297bd2c7700a040db842ff5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83e96ff909f12dca1fef2f601cacecb02c00fb23fdd8db86cd196f9e992393d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e96ff909f12dca1fef2f601cacecb02c00fb23fdd8db86cd196f9e992393d3->enter($__internal_83e96ff909f12dca1fef2f601cacecb02c00fb23fdd8db86cd196f9e992393d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3478d2f241d4c91b308b0e395745041bc5ed04f403699ab0d0668bb5fc7c3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3478d2f241d4c91b308b0e395745041bc5ed04f403699ab0d0668bb5fc7c3ad->enter($__internal_e3478d2f241d4c91b308b0e395745041bc5ed04f403699ab0d0668bb5fc7c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e3478d2f241d4c91b308b0e395745041bc5ed04f403699ab0d0668bb5fc7c3ad->leave($__internal_e3478d2f241d4c91b308b0e395745041bc5ed04f403699ab0d0668bb5fc7c3ad_prof);

        
        $__internal_83e96ff909f12dca1fef2f601cacecb02c00fb23fdd8db86cd196f9e992393d3->leave($__internal_83e96ff909f12dca1fef2f601cacecb02c00fb23fdd8db86cd196f9e992393d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
