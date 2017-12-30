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
        $__internal_7215e8d3cc4f53854162536052a53de29f9ff4cc42bbbc0334f914d9283cda2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7215e8d3cc4f53854162536052a53de29f9ff4cc42bbbc0334f914d9283cda2b->enter($__internal_7215e8d3cc4f53854162536052a53de29f9ff4cc42bbbc0334f914d9283cda2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_80709a792b9bb7d29a766ae738fa26fc0a7b8d3de7512bd311578a7a3906929f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80709a792b9bb7d29a766ae738fa26fc0a7b8d3de7512bd311578a7a3906929f->enter($__internal_80709a792b9bb7d29a766ae738fa26fc0a7b8d3de7512bd311578a7a3906929f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7215e8d3cc4f53854162536052a53de29f9ff4cc42bbbc0334f914d9283cda2b->leave($__internal_7215e8d3cc4f53854162536052a53de29f9ff4cc42bbbc0334f914d9283cda2b_prof);

        
        $__internal_80709a792b9bb7d29a766ae738fa26fc0a7b8d3de7512bd311578a7a3906929f->leave($__internal_80709a792b9bb7d29a766ae738fa26fc0a7b8d3de7512bd311578a7a3906929f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b1df509bbc848f3a050f20d6bc4ee2c8760761f2e8b3442370ac2b9f86255b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1df509bbc848f3a050f20d6bc4ee2c8760761f2e8b3442370ac2b9f86255b1d->enter($__internal_b1df509bbc848f3a050f20d6bc4ee2c8760761f2e8b3442370ac2b9f86255b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_53fa5c645a2173ea134abc7465cded59fc1fee28412734bea1dc75af32daefc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fa5c645a2173ea134abc7465cded59fc1fee28412734bea1dc75af32daefc9->enter($__internal_53fa5c645a2173ea134abc7465cded59fc1fee28412734bea1dc75af32daefc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_53fa5c645a2173ea134abc7465cded59fc1fee28412734bea1dc75af32daefc9->leave($__internal_53fa5c645a2173ea134abc7465cded59fc1fee28412734bea1dc75af32daefc9_prof);

        
        $__internal_b1df509bbc848f3a050f20d6bc4ee2c8760761f2e8b3442370ac2b9f86255b1d->leave($__internal_b1df509bbc848f3a050f20d6bc4ee2c8760761f2e8b3442370ac2b9f86255b1d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efd24881de3e63819a9fc30c557ca7fcc256d5afe0122d3c9f2a9137c79ffd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd24881de3e63819a9fc30c557ca7fcc256d5afe0122d3c9f2a9137c79ffd4d->enter($__internal_efd24881de3e63819a9fc30c557ca7fcc256d5afe0122d3c9f2a9137c79ffd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1313006d58fa7c382e19b61a90c25a588a9986fa7f01c374c2e5b816945fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1313006d58fa7c382e19b61a90c25a588a9986fa7f01c374c2e5b816945fe76->enter($__internal_a1313006d58fa7c382e19b61a90c25a588a9986fa7f01c374c2e5b816945fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a1313006d58fa7c382e19b61a90c25a588a9986fa7f01c374c2e5b816945fe76->leave($__internal_a1313006d58fa7c382e19b61a90c25a588a9986fa7f01c374c2e5b816945fe76_prof);

        
        $__internal_efd24881de3e63819a9fc30c557ca7fcc256d5afe0122d3c9f2a9137c79ffd4d->leave($__internal_efd24881de3e63819a9fc30c557ca7fcc256d5afe0122d3c9f2a9137c79ffd4d_prof);

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
