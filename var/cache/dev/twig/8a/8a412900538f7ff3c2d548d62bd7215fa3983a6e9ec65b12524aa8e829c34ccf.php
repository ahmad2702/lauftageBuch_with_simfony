<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0499015d60673f2b3664922a9f949ff928dc151dd49886789bfcf67ba3004590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_25900adfa78228af7796d51041e8a9adba4040d63efacecf5cd1ff94a41a59ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25900adfa78228af7796d51041e8a9adba4040d63efacecf5cd1ff94a41a59ae->enter($__internal_25900adfa78228af7796d51041e8a9adba4040d63efacecf5cd1ff94a41a59ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2598a66cb6a255f8dbce7fa7dfd27e68d8d6a8dd891bda2781573db094d37a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2598a66cb6a255f8dbce7fa7dfd27e68d8d6a8dd891bda2781573db094d37a8a->enter($__internal_2598a66cb6a255f8dbce7fa7dfd27e68d8d6a8dd891bda2781573db094d37a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25900adfa78228af7796d51041e8a9adba4040d63efacecf5cd1ff94a41a59ae->leave($__internal_25900adfa78228af7796d51041e8a9adba4040d63efacecf5cd1ff94a41a59ae_prof);

        
        $__internal_2598a66cb6a255f8dbce7fa7dfd27e68d8d6a8dd891bda2781573db094d37a8a->leave($__internal_2598a66cb6a255f8dbce7fa7dfd27e68d8d6a8dd891bda2781573db094d37a8a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b10aeb778ddc465fb0ec9959ff237b626a66c78445860f0c181c48ab2261c61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10aeb778ddc465fb0ec9959ff237b626a66c78445860f0c181c48ab2261c61c->enter($__internal_b10aeb778ddc465fb0ec9959ff237b626a66c78445860f0c181c48ab2261c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bad663ca269bdf03d4bb18432a954eb207ebe4f264d30a5b42c18048b5aaf1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad663ca269bdf03d4bb18432a954eb207ebe4f264d30a5b42c18048b5aaf1d1->enter($__internal_bad663ca269bdf03d4bb18432a954eb207ebe4f264d30a5b42c18048b5aaf1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bad663ca269bdf03d4bb18432a954eb207ebe4f264d30a5b42c18048b5aaf1d1->leave($__internal_bad663ca269bdf03d4bb18432a954eb207ebe4f264d30a5b42c18048b5aaf1d1_prof);

        
        $__internal_b10aeb778ddc465fb0ec9959ff237b626a66c78445860f0c181c48ab2261c61c->leave($__internal_b10aeb778ddc465fb0ec9959ff237b626a66c78445860f0c181c48ab2261c61c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28d4b69244f8544ce2af0e79f6a7df055e3d3b7918eb9c99a90b007c4c354e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d4b69244f8544ce2af0e79f6a7df055e3d3b7918eb9c99a90b007c4c354e8b->enter($__internal_28d4b69244f8544ce2af0e79f6a7df055e3d3b7918eb9c99a90b007c4c354e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc41f6be2b633e63b83353e9c7295164e915ea0899df1db4e0e9a9867e4ef678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc41f6be2b633e63b83353e9c7295164e915ea0899df1db4e0e9a9867e4ef678->enter($__internal_fc41f6be2b633e63b83353e9c7295164e915ea0899df1db4e0e9a9867e4ef678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc41f6be2b633e63b83353e9c7295164e915ea0899df1db4e0e9a9867e4ef678->leave($__internal_fc41f6be2b633e63b83353e9c7295164e915ea0899df1db4e0e9a9867e4ef678_prof);

        
        $__internal_28d4b69244f8544ce2af0e79f6a7df055e3d3b7918eb9c99a90b007c4c354e8b->leave($__internal_28d4b69244f8544ce2af0e79f6a7df055e3d3b7918eb9c99a90b007c4c354e8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8971c5d8693164a5ff2e051cd65b3a0873869318e2a3ce577d73939f10f53d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8971c5d8693164a5ff2e051cd65b3a0873869318e2a3ce577d73939f10f53d03->enter($__internal_8971c5d8693164a5ff2e051cd65b3a0873869318e2a3ce577d73939f10f53d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13d73ef53c6a7aced8a8e421ac1504bbf5082ba6eb51b6163c940ddc660a9d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d73ef53c6a7aced8a8e421ac1504bbf5082ba6eb51b6163c940ddc660a9d67->enter($__internal_13d73ef53c6a7aced8a8e421ac1504bbf5082ba6eb51b6163c940ddc660a9d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_13d73ef53c6a7aced8a8e421ac1504bbf5082ba6eb51b6163c940ddc660a9d67->leave($__internal_13d73ef53c6a7aced8a8e421ac1504bbf5082ba6eb51b6163c940ddc660a9d67_prof);

        
        $__internal_8971c5d8693164a5ff2e051cd65b3a0873869318e2a3ce577d73939f10f53d03->leave($__internal_8971c5d8693164a5ff2e051cd65b3a0873869318e2a3ce577d73939f10f53d03_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
