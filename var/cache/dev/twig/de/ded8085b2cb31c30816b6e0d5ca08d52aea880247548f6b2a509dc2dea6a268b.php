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
        $__internal_aaff81516f0c6903e22894c683678b74cf6c1aaa344c48fa0f9383e3a7933b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaff81516f0c6903e22894c683678b74cf6c1aaa344c48fa0f9383e3a7933b34->enter($__internal_aaff81516f0c6903e22894c683678b74cf6c1aaa344c48fa0f9383e3a7933b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_26084ce1d4bb98f8999ae86165ee127e407acb0c5c927ddc575140e945b8c1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26084ce1d4bb98f8999ae86165ee127e407acb0c5c927ddc575140e945b8c1f6->enter($__internal_26084ce1d4bb98f8999ae86165ee127e407acb0c5c927ddc575140e945b8c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaff81516f0c6903e22894c683678b74cf6c1aaa344c48fa0f9383e3a7933b34->leave($__internal_aaff81516f0c6903e22894c683678b74cf6c1aaa344c48fa0f9383e3a7933b34_prof);

        
        $__internal_26084ce1d4bb98f8999ae86165ee127e407acb0c5c927ddc575140e945b8c1f6->leave($__internal_26084ce1d4bb98f8999ae86165ee127e407acb0c5c927ddc575140e945b8c1f6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3b2b05726214baf83f975e6a6f2eb73d16763d7fb764f0e3648f08d578130482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2b05726214baf83f975e6a6f2eb73d16763d7fb764f0e3648f08d578130482->enter($__internal_3b2b05726214baf83f975e6a6f2eb73d16763d7fb764f0e3648f08d578130482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2d55ae9ed6bf08493340add51d82318a4f266506b74b45705f959738359973c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d55ae9ed6bf08493340add51d82318a4f266506b74b45705f959738359973c3->enter($__internal_2d55ae9ed6bf08493340add51d82318a4f266506b74b45705f959738359973c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2d55ae9ed6bf08493340add51d82318a4f266506b74b45705f959738359973c3->leave($__internal_2d55ae9ed6bf08493340add51d82318a4f266506b74b45705f959738359973c3_prof);

        
        $__internal_3b2b05726214baf83f975e6a6f2eb73d16763d7fb764f0e3648f08d578130482->leave($__internal_3b2b05726214baf83f975e6a6f2eb73d16763d7fb764f0e3648f08d578130482_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e587d59954ae34016d8c364e881e64f324612eeb149928e9b486c23ab81c0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e587d59954ae34016d8c364e881e64f324612eeb149928e9b486c23ab81c0a1->enter($__internal_6e587d59954ae34016d8c364e881e64f324612eeb149928e9b486c23ab81c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25deaab6014ed3e1feee2135d8ddd1b564faefd1b5ac6fb53190dab1fe84bb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25deaab6014ed3e1feee2135d8ddd1b564faefd1b5ac6fb53190dab1fe84bb26->enter($__internal_25deaab6014ed3e1feee2135d8ddd1b564faefd1b5ac6fb53190dab1fe84bb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_25deaab6014ed3e1feee2135d8ddd1b564faefd1b5ac6fb53190dab1fe84bb26->leave($__internal_25deaab6014ed3e1feee2135d8ddd1b564faefd1b5ac6fb53190dab1fe84bb26_prof);

        
        $__internal_6e587d59954ae34016d8c364e881e64f324612eeb149928e9b486c23ab81c0a1->leave($__internal_6e587d59954ae34016d8c364e881e64f324612eeb149928e9b486c23ab81c0a1_prof);

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
