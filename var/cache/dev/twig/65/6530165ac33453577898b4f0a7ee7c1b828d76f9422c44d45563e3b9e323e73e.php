<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3ed4cb8d77bf8229d8693a3ac538d0ad9330f7079a816399f3ba8c677246af0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff13b37dfad77ecbf385cfd688a6136d343055174118c858193888cb568e58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff13b37dfad77ecbf385cfd688a6136d343055174118c858193888cb568e58b->enter($__internal_9ff13b37dfad77ecbf385cfd688a6136d343055174118c858193888cb568e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7a337303089d5d6d9be366cc5d538a8896bf943eeda0019ed46a632fa8a8086a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a337303089d5d6d9be366cc5d538a8896bf943eeda0019ed46a632fa8a8086a->enter($__internal_7a337303089d5d6d9be366cc5d538a8896bf943eeda0019ed46a632fa8a8086a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff13b37dfad77ecbf385cfd688a6136d343055174118c858193888cb568e58b->leave($__internal_9ff13b37dfad77ecbf385cfd688a6136d343055174118c858193888cb568e58b_prof);

        
        $__internal_7a337303089d5d6d9be366cc5d538a8896bf943eeda0019ed46a632fa8a8086a->leave($__internal_7a337303089d5d6d9be366cc5d538a8896bf943eeda0019ed46a632fa8a8086a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d31c5e650fec4d3745d7f6596188e518821e598137fb71a68b9db8c4833733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d31c5e650fec4d3745d7f6596188e518821e598137fb71a68b9db8c4833733->enter($__internal_f7d31c5e650fec4d3745d7f6596188e518821e598137fb71a68b9db8c4833733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c113f341fe54251e57c1cfd1768d63f414354dee7d59ce3b1b2beea220d041c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c113f341fe54251e57c1cfd1768d63f414354dee7d59ce3b1b2beea220d041c->enter($__internal_3c113f341fe54251e57c1cfd1768d63f414354dee7d59ce3b1b2beea220d041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c113f341fe54251e57c1cfd1768d63f414354dee7d59ce3b1b2beea220d041c->leave($__internal_3c113f341fe54251e57c1cfd1768d63f414354dee7d59ce3b1b2beea220d041c_prof);

        
        $__internal_f7d31c5e650fec4d3745d7f6596188e518821e598137fb71a68b9db8c4833733->leave($__internal_f7d31c5e650fec4d3745d7f6596188e518821e598137fb71a68b9db8c4833733_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca78ae9d0bbccc040ce38ab0715c3c3b6292f89dd39b132cd724e610e455d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca78ae9d0bbccc040ce38ab0715c3c3b6292f89dd39b132cd724e610e455d66a->enter($__internal_ca78ae9d0bbccc040ce38ab0715c3c3b6292f89dd39b132cd724e610e455d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb8d8650ae23a0a3edb19ac3f14695cf9b451c024ed5daa416692768f6e3fc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8d8650ae23a0a3edb19ac3f14695cf9b451c024ed5daa416692768f6e3fc46->enter($__internal_eb8d8650ae23a0a3edb19ac3f14695cf9b451c024ed5daa416692768f6e3fc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb8d8650ae23a0a3edb19ac3f14695cf9b451c024ed5daa416692768f6e3fc46->leave($__internal_eb8d8650ae23a0a3edb19ac3f14695cf9b451c024ed5daa416692768f6e3fc46_prof);

        
        $__internal_ca78ae9d0bbccc040ce38ab0715c3c3b6292f89dd39b132cd724e610e455d66a->leave($__internal_ca78ae9d0bbccc040ce38ab0715c3c3b6292f89dd39b132cd724e610e455d66a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
