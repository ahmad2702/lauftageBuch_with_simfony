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
        $__internal_1273a7ad59bfed43ba1ef60daa8a927927cd189902ada4b1f71e7a65e207e3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1273a7ad59bfed43ba1ef60daa8a927927cd189902ada4b1f71e7a65e207e3ed->enter($__internal_1273a7ad59bfed43ba1ef60daa8a927927cd189902ada4b1f71e7a65e207e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_fa8ae99cba6e0ba36e25e78c8a0b0b1eeb293fed9742d3e3f678c350deda07ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8ae99cba6e0ba36e25e78c8a0b0b1eeb293fed9742d3e3f678c350deda07ae->enter($__internal_fa8ae99cba6e0ba36e25e78c8a0b0b1eeb293fed9742d3e3f678c350deda07ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1273a7ad59bfed43ba1ef60daa8a927927cd189902ada4b1f71e7a65e207e3ed->leave($__internal_1273a7ad59bfed43ba1ef60daa8a927927cd189902ada4b1f71e7a65e207e3ed_prof);

        
        $__internal_fa8ae99cba6e0ba36e25e78c8a0b0b1eeb293fed9742d3e3f678c350deda07ae->leave($__internal_fa8ae99cba6e0ba36e25e78c8a0b0b1eeb293fed9742d3e3f678c350deda07ae_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_41d684b9ebf43ac35188c1546cfa15884e09d46e651d2d037b52f11c5268ee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d684b9ebf43ac35188c1546cfa15884e09d46e651d2d037b52f11c5268ee9c->enter($__internal_41d684b9ebf43ac35188c1546cfa15884e09d46e651d2d037b52f11c5268ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b6e59133e31b20e458e8e1500bdf9db0ea760ed46c31bbf8da4aa88c63f2370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e59133e31b20e458e8e1500bdf9db0ea760ed46c31bbf8da4aa88c63f2370f->enter($__internal_b6e59133e31b20e458e8e1500bdf9db0ea760ed46c31bbf8da4aa88c63f2370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b6e59133e31b20e458e8e1500bdf9db0ea760ed46c31bbf8da4aa88c63f2370f->leave($__internal_b6e59133e31b20e458e8e1500bdf9db0ea760ed46c31bbf8da4aa88c63f2370f_prof);

        
        $__internal_41d684b9ebf43ac35188c1546cfa15884e09d46e651d2d037b52f11c5268ee9c->leave($__internal_41d684b9ebf43ac35188c1546cfa15884e09d46e651d2d037b52f11c5268ee9c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e2239a7da8e1f7eade291487249edeb1605a0829a1fe51e5f80814ec2654abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2239a7da8e1f7eade291487249edeb1605a0829a1fe51e5f80814ec2654abd->enter($__internal_2e2239a7da8e1f7eade291487249edeb1605a0829a1fe51e5f80814ec2654abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_224f0ac4779d434137269fe7c43086cc57e1e34e1615fce69bc7a0d2d50730cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224f0ac4779d434137269fe7c43086cc57e1e34e1615fce69bc7a0d2d50730cd->enter($__internal_224f0ac4779d434137269fe7c43086cc57e1e34e1615fce69bc7a0d2d50730cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_224f0ac4779d434137269fe7c43086cc57e1e34e1615fce69bc7a0d2d50730cd->leave($__internal_224f0ac4779d434137269fe7c43086cc57e1e34e1615fce69bc7a0d2d50730cd_prof);

        
        $__internal_2e2239a7da8e1f7eade291487249edeb1605a0829a1fe51e5f80814ec2654abd->leave($__internal_2e2239a7da8e1f7eade291487249edeb1605a0829a1fe51e5f80814ec2654abd_prof);

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
