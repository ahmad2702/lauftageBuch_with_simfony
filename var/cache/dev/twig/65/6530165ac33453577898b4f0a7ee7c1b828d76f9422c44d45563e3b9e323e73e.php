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
        $__internal_d19b42dce0c79c174e08e4558119fa7d3382ac33659cb92e6b015eda1891faa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19b42dce0c79c174e08e4558119fa7d3382ac33659cb92e6b015eda1891faa4->enter($__internal_d19b42dce0c79c174e08e4558119fa7d3382ac33659cb92e6b015eda1891faa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_84a4ff7f468bc332eb5e6d862301d3c5d13f27365ae3b036f0a89a6f8c8adae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a4ff7f468bc332eb5e6d862301d3c5d13f27365ae3b036f0a89a6f8c8adae7->enter($__internal_84a4ff7f468bc332eb5e6d862301d3c5d13f27365ae3b036f0a89a6f8c8adae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19b42dce0c79c174e08e4558119fa7d3382ac33659cb92e6b015eda1891faa4->leave($__internal_d19b42dce0c79c174e08e4558119fa7d3382ac33659cb92e6b015eda1891faa4_prof);

        
        $__internal_84a4ff7f468bc332eb5e6d862301d3c5d13f27365ae3b036f0a89a6f8c8adae7->leave($__internal_84a4ff7f468bc332eb5e6d862301d3c5d13f27365ae3b036f0a89a6f8c8adae7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef5c5e9c095f8039d9f1e10e1a9728d03f41bd37d8ad1f25617b17b857b3bc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5c5e9c095f8039d9f1e10e1a9728d03f41bd37d8ad1f25617b17b857b3bc84->enter($__internal_ef5c5e9c095f8039d9f1e10e1a9728d03f41bd37d8ad1f25617b17b857b3bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34d1559574dd1ba5ccb5cea0e253ccb3c3a482fcb5b7ab0c9ae27ae6613d6723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d1559574dd1ba5ccb5cea0e253ccb3c3a482fcb5b7ab0c9ae27ae6613d6723->enter($__internal_34d1559574dd1ba5ccb5cea0e253ccb3c3a482fcb5b7ab0c9ae27ae6613d6723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_34d1559574dd1ba5ccb5cea0e253ccb3c3a482fcb5b7ab0c9ae27ae6613d6723->leave($__internal_34d1559574dd1ba5ccb5cea0e253ccb3c3a482fcb5b7ab0c9ae27ae6613d6723_prof);

        
        $__internal_ef5c5e9c095f8039d9f1e10e1a9728d03f41bd37d8ad1f25617b17b857b3bc84->leave($__internal_ef5c5e9c095f8039d9f1e10e1a9728d03f41bd37d8ad1f25617b17b857b3bc84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aee6cedb7a0d0862ce620ae42cdb0af55130101073a42318166ba0826119183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aee6cedb7a0d0862ce620ae42cdb0af55130101073a42318166ba0826119183->enter($__internal_2aee6cedb7a0d0862ce620ae42cdb0af55130101073a42318166ba0826119183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b6471c6c9ac10587a399627bfca24480e75b3eea140f357fdd1f0d189c22c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6471c6c9ac10587a399627bfca24480e75b3eea140f357fdd1f0d189c22c0f->enter($__internal_8b6471c6c9ac10587a399627bfca24480e75b3eea140f357fdd1f0d189c22c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b6471c6c9ac10587a399627bfca24480e75b3eea140f357fdd1f0d189c22c0f->leave($__internal_8b6471c6c9ac10587a399627bfca24480e75b3eea140f357fdd1f0d189c22c0f_prof);

        
        $__internal_2aee6cedb7a0d0862ce620ae42cdb0af55130101073a42318166ba0826119183->leave($__internal_2aee6cedb7a0d0862ce620ae42cdb0af55130101073a42318166ba0826119183_prof);

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
