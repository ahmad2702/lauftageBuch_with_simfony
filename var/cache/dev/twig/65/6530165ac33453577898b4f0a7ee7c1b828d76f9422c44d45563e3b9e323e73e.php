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
        $__internal_56113024a576b1f16c013ae45546e45ff2cb541896a3ee11e356988dc5c0842e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56113024a576b1f16c013ae45546e45ff2cb541896a3ee11e356988dc5c0842e->enter($__internal_56113024a576b1f16c013ae45546e45ff2cb541896a3ee11e356988dc5c0842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_aa8da49014f4689c59706fe269588c84d49be1db5397f1490dce258d11aa6798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8da49014f4689c59706fe269588c84d49be1db5397f1490dce258d11aa6798->enter($__internal_aa8da49014f4689c59706fe269588c84d49be1db5397f1490dce258d11aa6798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56113024a576b1f16c013ae45546e45ff2cb541896a3ee11e356988dc5c0842e->leave($__internal_56113024a576b1f16c013ae45546e45ff2cb541896a3ee11e356988dc5c0842e_prof);

        
        $__internal_aa8da49014f4689c59706fe269588c84d49be1db5397f1490dce258d11aa6798->leave($__internal_aa8da49014f4689c59706fe269588c84d49be1db5397f1490dce258d11aa6798_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_133334dd1fec712a691be48637231cff9149dc3b2adf3388774420579a7f7590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133334dd1fec712a691be48637231cff9149dc3b2adf3388774420579a7f7590->enter($__internal_133334dd1fec712a691be48637231cff9149dc3b2adf3388774420579a7f7590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28ebc71282167903f033ac9f251b3d8bf63cac53f1459c0850115fd105c02eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ebc71282167903f033ac9f251b3d8bf63cac53f1459c0850115fd105c02eda->enter($__internal_28ebc71282167903f033ac9f251b3d8bf63cac53f1459c0850115fd105c02eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_28ebc71282167903f033ac9f251b3d8bf63cac53f1459c0850115fd105c02eda->leave($__internal_28ebc71282167903f033ac9f251b3d8bf63cac53f1459c0850115fd105c02eda_prof);

        
        $__internal_133334dd1fec712a691be48637231cff9149dc3b2adf3388774420579a7f7590->leave($__internal_133334dd1fec712a691be48637231cff9149dc3b2adf3388774420579a7f7590_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af808a4cc1eb1c8b45a107159f3526d96b7919507188253686a0a80458bff713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af808a4cc1eb1c8b45a107159f3526d96b7919507188253686a0a80458bff713->enter($__internal_af808a4cc1eb1c8b45a107159f3526d96b7919507188253686a0a80458bff713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b41bff1ad7f39f0206f1e760aa226010abf3abd7a3f2bc5552fe01a5545ac5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b41bff1ad7f39f0206f1e760aa226010abf3abd7a3f2bc5552fe01a5545ac5f->enter($__internal_6b41bff1ad7f39f0206f1e760aa226010abf3abd7a3f2bc5552fe01a5545ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b41bff1ad7f39f0206f1e760aa226010abf3abd7a3f2bc5552fe01a5545ac5f->leave($__internal_6b41bff1ad7f39f0206f1e760aa226010abf3abd7a3f2bc5552fe01a5545ac5f_prof);

        
        $__internal_af808a4cc1eb1c8b45a107159f3526d96b7919507188253686a0a80458bff713->leave($__internal_af808a4cc1eb1c8b45a107159f3526d96b7919507188253686a0a80458bff713_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
