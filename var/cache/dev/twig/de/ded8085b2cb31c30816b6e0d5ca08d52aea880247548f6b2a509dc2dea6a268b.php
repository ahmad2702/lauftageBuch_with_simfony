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
        $__internal_f32ff8ba60f11e154faac626d62380c48e6e09394337aa3abb023b3b759ccf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32ff8ba60f11e154faac626d62380c48e6e09394337aa3abb023b3b759ccf0f->enter($__internal_f32ff8ba60f11e154faac626d62380c48e6e09394337aa3abb023b3b759ccf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bf535c88bf559ce7d4d464d58ad146ccfc80aadda58842b630d795c7fd1db3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf535c88bf559ce7d4d464d58ad146ccfc80aadda58842b630d795c7fd1db3d0->enter($__internal_bf535c88bf559ce7d4d464d58ad146ccfc80aadda58842b630d795c7fd1db3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32ff8ba60f11e154faac626d62380c48e6e09394337aa3abb023b3b759ccf0f->leave($__internal_f32ff8ba60f11e154faac626d62380c48e6e09394337aa3abb023b3b759ccf0f_prof);

        
        $__internal_bf535c88bf559ce7d4d464d58ad146ccfc80aadda58842b630d795c7fd1db3d0->leave($__internal_bf535c88bf559ce7d4d464d58ad146ccfc80aadda58842b630d795c7fd1db3d0_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_910934b682db1ed6677e45e4b17851f68987f8e877e1bb1441f5f942236b281d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910934b682db1ed6677e45e4b17851f68987f8e877e1bb1441f5f942236b281d->enter($__internal_910934b682db1ed6677e45e4b17851f68987f8e877e1bb1441f5f942236b281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dfdcc0ce3e641e2dd7107d771bdce121d744a3095ff96ce1f8246403e7036083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdcc0ce3e641e2dd7107d771bdce121d744a3095ff96ce1f8246403e7036083->enter($__internal_dfdcc0ce3e641e2dd7107d771bdce121d744a3095ff96ce1f8246403e7036083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dfdcc0ce3e641e2dd7107d771bdce121d744a3095ff96ce1f8246403e7036083->leave($__internal_dfdcc0ce3e641e2dd7107d771bdce121d744a3095ff96ce1f8246403e7036083_prof);

        
        $__internal_910934b682db1ed6677e45e4b17851f68987f8e877e1bb1441f5f942236b281d->leave($__internal_910934b682db1ed6677e45e4b17851f68987f8e877e1bb1441f5f942236b281d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7734e0c39aadb09876396a95005a13a3d6582777378014ef1855beca008a313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7734e0c39aadb09876396a95005a13a3d6582777378014ef1855beca008a313->enter($__internal_b7734e0c39aadb09876396a95005a13a3d6582777378014ef1855beca008a313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4728329b180091dc99a1b4bdae1ece6cb08afde4090024855560cb373adaad1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4728329b180091dc99a1b4bdae1ece6cb08afde4090024855560cb373adaad1d->enter($__internal_4728329b180091dc99a1b4bdae1ece6cb08afde4090024855560cb373adaad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4728329b180091dc99a1b4bdae1ece6cb08afde4090024855560cb373adaad1d->leave($__internal_4728329b180091dc99a1b4bdae1ece6cb08afde4090024855560cb373adaad1d_prof);

        
        $__internal_b7734e0c39aadb09876396a95005a13a3d6582777378014ef1855beca008a313->leave($__internal_b7734e0c39aadb09876396a95005a13a3d6582777378014ef1855beca008a313_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
