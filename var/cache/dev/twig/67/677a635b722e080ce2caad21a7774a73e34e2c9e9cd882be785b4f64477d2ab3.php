<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0a1994abaea4c5ef21dfb301d07edba09b17c743f6f1b8801487b9b905d08ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92d3ddad21cfeedab2eaf765253da83cbe85e6bf19003ccbf4d72e5d627f09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92d3ddad21cfeedab2eaf765253da83cbe85e6bf19003ccbf4d72e5d627f09d->enter($__internal_c92d3ddad21cfeedab2eaf765253da83cbe85e6bf19003ccbf4d72e5d627f09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_50b37e78eb30dd0c7b28c1d0dd2009c554d24f1b75526e7809ec3779364cb6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b37e78eb30dd0c7b28c1d0dd2009c554d24f1b75526e7809ec3779364cb6cb->enter($__internal_50b37e78eb30dd0c7b28c1d0dd2009c554d24f1b75526e7809ec3779364cb6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92d3ddad21cfeedab2eaf765253da83cbe85e6bf19003ccbf4d72e5d627f09d->leave($__internal_c92d3ddad21cfeedab2eaf765253da83cbe85e6bf19003ccbf4d72e5d627f09d_prof);

        
        $__internal_50b37e78eb30dd0c7b28c1d0dd2009c554d24f1b75526e7809ec3779364cb6cb->leave($__internal_50b37e78eb30dd0c7b28c1d0dd2009c554d24f1b75526e7809ec3779364cb6cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90946e9ab3429c5276fd18e4782c31b1af7679e81e97692f95737597e30ea699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90946e9ab3429c5276fd18e4782c31b1af7679e81e97692f95737597e30ea699->enter($__internal_90946e9ab3429c5276fd18e4782c31b1af7679e81e97692f95737597e30ea699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77636e54df8e6ce3a6f4deddb79ef13d87c15939597a5b68d02b7ffe5dee905b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77636e54df8e6ce3a6f4deddb79ef13d87c15939597a5b68d02b7ffe5dee905b->enter($__internal_77636e54df8e6ce3a6f4deddb79ef13d87c15939597a5b68d02b7ffe5dee905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_77636e54df8e6ce3a6f4deddb79ef13d87c15939597a5b68d02b7ffe5dee905b->leave($__internal_77636e54df8e6ce3a6f4deddb79ef13d87c15939597a5b68d02b7ffe5dee905b_prof);

        
        $__internal_90946e9ab3429c5276fd18e4782c31b1af7679e81e97692f95737597e30ea699->leave($__internal_90946e9ab3429c5276fd18e4782c31b1af7679e81e97692f95737597e30ea699_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
