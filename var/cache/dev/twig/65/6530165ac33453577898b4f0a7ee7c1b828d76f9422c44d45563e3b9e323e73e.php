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
        $__internal_51e5d1c916ce77a3af47a41144a7dddbec8664c934ee803181ca6c76c1d1aa16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e5d1c916ce77a3af47a41144a7dddbec8664c934ee803181ca6c76c1d1aa16->enter($__internal_51e5d1c916ce77a3af47a41144a7dddbec8664c934ee803181ca6c76c1d1aa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e07751757efe3497d915a695b7cd622e2838325763bc7de7e3a07702966dacc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07751757efe3497d915a695b7cd622e2838325763bc7de7e3a07702966dacc3->enter($__internal_e07751757efe3497d915a695b7cd622e2838325763bc7de7e3a07702966dacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e5d1c916ce77a3af47a41144a7dddbec8664c934ee803181ca6c76c1d1aa16->leave($__internal_51e5d1c916ce77a3af47a41144a7dddbec8664c934ee803181ca6c76c1d1aa16_prof);

        
        $__internal_e07751757efe3497d915a695b7cd622e2838325763bc7de7e3a07702966dacc3->leave($__internal_e07751757efe3497d915a695b7cd622e2838325763bc7de7e3a07702966dacc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd073fa86201d78b5d0f63f99d9f19a2b6ccdebac5c075bf75fcb73677e4302a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd073fa86201d78b5d0f63f99d9f19a2b6ccdebac5c075bf75fcb73677e4302a->enter($__internal_fd073fa86201d78b5d0f63f99d9f19a2b6ccdebac5c075bf75fcb73677e4302a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_feaf4eda4c87dec7e749e52e387151b9b3308dac8cc5efb22021b4db198cdf80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaf4eda4c87dec7e749e52e387151b9b3308dac8cc5efb22021b4db198cdf80->enter($__internal_feaf4eda4c87dec7e749e52e387151b9b3308dac8cc5efb22021b4db198cdf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_feaf4eda4c87dec7e749e52e387151b9b3308dac8cc5efb22021b4db198cdf80->leave($__internal_feaf4eda4c87dec7e749e52e387151b9b3308dac8cc5efb22021b4db198cdf80_prof);

        
        $__internal_fd073fa86201d78b5d0f63f99d9f19a2b6ccdebac5c075bf75fcb73677e4302a->leave($__internal_fd073fa86201d78b5d0f63f99d9f19a2b6ccdebac5c075bf75fcb73677e4302a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c02756928ae8f4e979fca54a1076f0067e779be43823d21e6cb929d517e601ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02756928ae8f4e979fca54a1076f0067e779be43823d21e6cb929d517e601ab->enter($__internal_c02756928ae8f4e979fca54a1076f0067e779be43823d21e6cb929d517e601ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2010e1d29a8017dcd6f13873421652768611177f8eae0c0e9ee475ae9a754b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2010e1d29a8017dcd6f13873421652768611177f8eae0c0e9ee475ae9a754b8->enter($__internal_e2010e1d29a8017dcd6f13873421652768611177f8eae0c0e9ee475ae9a754b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2010e1d29a8017dcd6f13873421652768611177f8eae0c0e9ee475ae9a754b8->leave($__internal_e2010e1d29a8017dcd6f13873421652768611177f8eae0c0e9ee475ae9a754b8_prof);

        
        $__internal_c02756928ae8f4e979fca54a1076f0067e779be43823d21e6cb929d517e601ab->leave($__internal_c02756928ae8f4e979fca54a1076f0067e779be43823d21e6cb929d517e601ab_prof);

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
