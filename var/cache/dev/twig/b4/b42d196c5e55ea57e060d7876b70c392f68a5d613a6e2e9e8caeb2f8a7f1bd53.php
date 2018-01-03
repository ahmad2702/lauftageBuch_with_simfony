<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a0c993e54b5e68893ece89e787798ec04154e5df688e2abae2ee3e72750c1d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dffcd446dafcefbec97a95859bfe13c1cf65198dbb90fabbf8fa4117135db67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dffcd446dafcefbec97a95859bfe13c1cf65198dbb90fabbf8fa4117135db67->enter($__internal_9dffcd446dafcefbec97a95859bfe13c1cf65198dbb90fabbf8fa4117135db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_75d58ed1c4392c7256a50ca1c8954db14583af1f5f6d7a636010a61dc729932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d58ed1c4392c7256a50ca1c8954db14583af1f5f6d7a636010a61dc729932c->enter($__internal_75d58ed1c4392c7256a50ca1c8954db14583af1f5f6d7a636010a61dc729932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dffcd446dafcefbec97a95859bfe13c1cf65198dbb90fabbf8fa4117135db67->leave($__internal_9dffcd446dafcefbec97a95859bfe13c1cf65198dbb90fabbf8fa4117135db67_prof);

        
        $__internal_75d58ed1c4392c7256a50ca1c8954db14583af1f5f6d7a636010a61dc729932c->leave($__internal_75d58ed1c4392c7256a50ca1c8954db14583af1f5f6d7a636010a61dc729932c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9282135433f03509ec11b2ce499f4a5a69e792a8f1ff1159376ef7c3f268ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9282135433f03509ec11b2ce499f4a5a69e792a8f1ff1159376ef7c3f268ffc->enter($__internal_f9282135433f03509ec11b2ce499f4a5a69e792a8f1ff1159376ef7c3f268ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4914a7ce8105c6562b985490bb8022604248698bea7d84f54c5e984c955e9898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4914a7ce8105c6562b985490bb8022604248698bea7d84f54c5e984c955e9898->enter($__internal_4914a7ce8105c6562b985490bb8022604248698bea7d84f54c5e984c955e9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4914a7ce8105c6562b985490bb8022604248698bea7d84f54c5e984c955e9898->leave($__internal_4914a7ce8105c6562b985490bb8022604248698bea7d84f54c5e984c955e9898_prof);

        
        $__internal_f9282135433f03509ec11b2ce499f4a5a69e792a8f1ff1159376ef7c3f268ffc->leave($__internal_f9282135433f03509ec11b2ce499f4a5a69e792a8f1ff1159376ef7c3f268ffc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_221321f7c53b7b6ffe1c5aa4aa49ef976c7c7e7c14140ba03276d64f9d210c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221321f7c53b7b6ffe1c5aa4aa49ef976c7c7e7c14140ba03276d64f9d210c74->enter($__internal_221321f7c53b7b6ffe1c5aa4aa49ef976c7c7e7c14140ba03276d64f9d210c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0285d3fb785fa63ccb9764d216429422091e806d7fb0a0ea6ea98fa5b6ae2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0285d3fb785fa63ccb9764d216429422091e806d7fb0a0ea6ea98fa5b6ae2d6->enter($__internal_a0285d3fb785fa63ccb9764d216429422091e806d7fb0a0ea6ea98fa5b6ae2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a0285d3fb785fa63ccb9764d216429422091e806d7fb0a0ea6ea98fa5b6ae2d6->leave($__internal_a0285d3fb785fa63ccb9764d216429422091e806d7fb0a0ea6ea98fa5b6ae2d6_prof);

        
        $__internal_221321f7c53b7b6ffe1c5aa4aa49ef976c7c7e7c14140ba03276d64f9d210c74->leave($__internal_221321f7c53b7b6ffe1c5aa4aa49ef976c7c7e7c14140ba03276d64f9d210c74_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3dbb5d653a8cf8401669b7fea1a0d5c492170956f61aa217bd98b9874be43ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dbb5d653a8cf8401669b7fea1a0d5c492170956f61aa217bd98b9874be43ef->enter($__internal_b3dbb5d653a8cf8401669b7fea1a0d5c492170956f61aa217bd98b9874be43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a831036657648cdbe54097dae20694236a9f4da421ec6ae7b39cb94859dc8002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a831036657648cdbe54097dae20694236a9f4da421ec6ae7b39cb94859dc8002->enter($__internal_a831036657648cdbe54097dae20694236a9f4da421ec6ae7b39cb94859dc8002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a831036657648cdbe54097dae20694236a9f4da421ec6ae7b39cb94859dc8002->leave($__internal_a831036657648cdbe54097dae20694236a9f4da421ec6ae7b39cb94859dc8002_prof);

        
        $__internal_b3dbb5d653a8cf8401669b7fea1a0d5c492170956f61aa217bd98b9874be43ef->leave($__internal_b3dbb5d653a8cf8401669b7fea1a0d5c492170956f61aa217bd98b9874be43ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
