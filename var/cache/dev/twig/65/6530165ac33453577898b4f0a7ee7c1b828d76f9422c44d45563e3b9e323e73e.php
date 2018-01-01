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
        $__internal_458a742cb07073cd3641e11dca05ec421112e80e1e1992d107e37eda0c859744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458a742cb07073cd3641e11dca05ec421112e80e1e1992d107e37eda0c859744->enter($__internal_458a742cb07073cd3641e11dca05ec421112e80e1e1992d107e37eda0c859744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b8dae607ea1ae6995976d60c073f8c56471043dceb0ca55fdc5d0fac423b3f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dae607ea1ae6995976d60c073f8c56471043dceb0ca55fdc5d0fac423b3f80->enter($__internal_b8dae607ea1ae6995976d60c073f8c56471043dceb0ca55fdc5d0fac423b3f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458a742cb07073cd3641e11dca05ec421112e80e1e1992d107e37eda0c859744->leave($__internal_458a742cb07073cd3641e11dca05ec421112e80e1e1992d107e37eda0c859744_prof);

        
        $__internal_b8dae607ea1ae6995976d60c073f8c56471043dceb0ca55fdc5d0fac423b3f80->leave($__internal_b8dae607ea1ae6995976d60c073f8c56471043dceb0ca55fdc5d0fac423b3f80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95ebef191dc838c1a933911fde56ba6e90405df55e43f1e1e4ece8136e2b8fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ebef191dc838c1a933911fde56ba6e90405df55e43f1e1e4ece8136e2b8fb1->enter($__internal_95ebef191dc838c1a933911fde56ba6e90405df55e43f1e1e4ece8136e2b8fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6649c7485826d1655fe7c3a7195863b2365d6a92d06bc79df4a5d093b886fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6649c7485826d1655fe7c3a7195863b2365d6a92d06bc79df4a5d093b886fbc->enter($__internal_b6649c7485826d1655fe7c3a7195863b2365d6a92d06bc79df4a5d093b886fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b6649c7485826d1655fe7c3a7195863b2365d6a92d06bc79df4a5d093b886fbc->leave($__internal_b6649c7485826d1655fe7c3a7195863b2365d6a92d06bc79df4a5d093b886fbc_prof);

        
        $__internal_95ebef191dc838c1a933911fde56ba6e90405df55e43f1e1e4ece8136e2b8fb1->leave($__internal_95ebef191dc838c1a933911fde56ba6e90405df55e43f1e1e4ece8136e2b8fb1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa826ac6071149b5e44e660bfef07ee34f4a00ab5d6c06ad804f70d67076e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa826ac6071149b5e44e660bfef07ee34f4a00ab5d6c06ad804f70d67076e1d->enter($__internal_4fa826ac6071149b5e44e660bfef07ee34f4a00ab5d6c06ad804f70d67076e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a7c186de74fc82fc84366703e0712b9c3cfce89cc60980649a63193f18334b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7c186de74fc82fc84366703e0712b9c3cfce89cc60980649a63193f18334b0->enter($__internal_4a7c186de74fc82fc84366703e0712b9c3cfce89cc60980649a63193f18334b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a7c186de74fc82fc84366703e0712b9c3cfce89cc60980649a63193f18334b0->leave($__internal_4a7c186de74fc82fc84366703e0712b9c3cfce89cc60980649a63193f18334b0_prof);

        
        $__internal_4fa826ac6071149b5e44e660bfef07ee34f4a00ab5d6c06ad804f70d67076e1d->leave($__internal_4fa826ac6071149b5e44e660bfef07ee34f4a00ab5d6c06ad804f70d67076e1d_prof);

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
