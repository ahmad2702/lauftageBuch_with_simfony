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
        $__internal_43a9fa77665bff94ad796bdb84870222776b224b3f6ea8cc0ca6981e584796de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a9fa77665bff94ad796bdb84870222776b224b3f6ea8cc0ca6981e584796de->enter($__internal_43a9fa77665bff94ad796bdb84870222776b224b3f6ea8cc0ca6981e584796de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3b6a721a78d5652239ee130d0b55d9e751a0aeb640e0f1b274b5dc9c0f94ef3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6a721a78d5652239ee130d0b55d9e751a0aeb640e0f1b274b5dc9c0f94ef3a->enter($__internal_3b6a721a78d5652239ee130d0b55d9e751a0aeb640e0f1b274b5dc9c0f94ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43a9fa77665bff94ad796bdb84870222776b224b3f6ea8cc0ca6981e584796de->leave($__internal_43a9fa77665bff94ad796bdb84870222776b224b3f6ea8cc0ca6981e584796de_prof);

        
        $__internal_3b6a721a78d5652239ee130d0b55d9e751a0aeb640e0f1b274b5dc9c0f94ef3a->leave($__internal_3b6a721a78d5652239ee130d0b55d9e751a0aeb640e0f1b274b5dc9c0f94ef3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edf20c75cfc01fc6c6bd5206cc81ca147b364a6f9481ff41660c78bc15520efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf20c75cfc01fc6c6bd5206cc81ca147b364a6f9481ff41660c78bc15520efa->enter($__internal_edf20c75cfc01fc6c6bd5206cc81ca147b364a6f9481ff41660c78bc15520efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_669337bfefdb002c29772f7d5d32f5cf68dc7ad9a492d993c64d493ce2902bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669337bfefdb002c29772f7d5d32f5cf68dc7ad9a492d993c64d493ce2902bbd->enter($__internal_669337bfefdb002c29772f7d5d32f5cf68dc7ad9a492d993c64d493ce2902bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_669337bfefdb002c29772f7d5d32f5cf68dc7ad9a492d993c64d493ce2902bbd->leave($__internal_669337bfefdb002c29772f7d5d32f5cf68dc7ad9a492d993c64d493ce2902bbd_prof);

        
        $__internal_edf20c75cfc01fc6c6bd5206cc81ca147b364a6f9481ff41660c78bc15520efa->leave($__internal_edf20c75cfc01fc6c6bd5206cc81ca147b364a6f9481ff41660c78bc15520efa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c28787a3e5ba92c56885e159d259b0e9e13e35fb5d6f85d4359deb562da8dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c28787a3e5ba92c56885e159d259b0e9e13e35fb5d6f85d4359deb562da8dda->enter($__internal_9c28787a3e5ba92c56885e159d259b0e9e13e35fb5d6f85d4359deb562da8dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff992d3f17d01cdda7582d2dbfac2f73722a9df6d3229f87141c4aae98f592cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff992d3f17d01cdda7582d2dbfac2f73722a9df6d3229f87141c4aae98f592cb->enter($__internal_ff992d3f17d01cdda7582d2dbfac2f73722a9df6d3229f87141c4aae98f592cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff992d3f17d01cdda7582d2dbfac2f73722a9df6d3229f87141c4aae98f592cb->leave($__internal_ff992d3f17d01cdda7582d2dbfac2f73722a9df6d3229f87141c4aae98f592cb_prof);

        
        $__internal_9c28787a3e5ba92c56885e159d259b0e9e13e35fb5d6f85d4359deb562da8dda->leave($__internal_9c28787a3e5ba92c56885e159d259b0e9e13e35fb5d6f85d4359deb562da8dda_prof);

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
