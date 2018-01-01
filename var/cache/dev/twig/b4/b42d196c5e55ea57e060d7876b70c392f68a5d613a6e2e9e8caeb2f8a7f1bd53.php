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
        $__internal_7938e7047e2c5583712efa8b7962a1c0aa25e64475f9ea28553b0f06bd4fbae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7938e7047e2c5583712efa8b7962a1c0aa25e64475f9ea28553b0f06bd4fbae0->enter($__internal_7938e7047e2c5583712efa8b7962a1c0aa25e64475f9ea28553b0f06bd4fbae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d513e0cc818ff99c26c10d2b810dc5da5aaeb52902932ef22818c4f8729f491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d513e0cc818ff99c26c10d2b810dc5da5aaeb52902932ef22818c4f8729f491->enter($__internal_4d513e0cc818ff99c26c10d2b810dc5da5aaeb52902932ef22818c4f8729f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7938e7047e2c5583712efa8b7962a1c0aa25e64475f9ea28553b0f06bd4fbae0->leave($__internal_7938e7047e2c5583712efa8b7962a1c0aa25e64475f9ea28553b0f06bd4fbae0_prof);

        
        $__internal_4d513e0cc818ff99c26c10d2b810dc5da5aaeb52902932ef22818c4f8729f491->leave($__internal_4d513e0cc818ff99c26c10d2b810dc5da5aaeb52902932ef22818c4f8729f491_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_395cd0af9c4716f0f80dc331a14e26d2a69bc41c99753436795609ad74520dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395cd0af9c4716f0f80dc331a14e26d2a69bc41c99753436795609ad74520dd8->enter($__internal_395cd0af9c4716f0f80dc331a14e26d2a69bc41c99753436795609ad74520dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aca05e85481cb0999334f56b914085bf2afefc0e85818b36bfbc23d9c8b5969d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca05e85481cb0999334f56b914085bf2afefc0e85818b36bfbc23d9c8b5969d->enter($__internal_aca05e85481cb0999334f56b914085bf2afefc0e85818b36bfbc23d9c8b5969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aca05e85481cb0999334f56b914085bf2afefc0e85818b36bfbc23d9c8b5969d->leave($__internal_aca05e85481cb0999334f56b914085bf2afefc0e85818b36bfbc23d9c8b5969d_prof);

        
        $__internal_395cd0af9c4716f0f80dc331a14e26d2a69bc41c99753436795609ad74520dd8->leave($__internal_395cd0af9c4716f0f80dc331a14e26d2a69bc41c99753436795609ad74520dd8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17c08a7c60aa36d8f92248101f6c423bb04fd16472569cda907ebb1a0730a2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c08a7c60aa36d8f92248101f6c423bb04fd16472569cda907ebb1a0730a2c3->enter($__internal_17c08a7c60aa36d8f92248101f6c423bb04fd16472569cda907ebb1a0730a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec1ba85f90aea97c1e90f9f68f4892e2f97bfe0675242fe2e81266cd957dd454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1ba85f90aea97c1e90f9f68f4892e2f97bfe0675242fe2e81266cd957dd454->enter($__internal_ec1ba85f90aea97c1e90f9f68f4892e2f97bfe0675242fe2e81266cd957dd454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec1ba85f90aea97c1e90f9f68f4892e2f97bfe0675242fe2e81266cd957dd454->leave($__internal_ec1ba85f90aea97c1e90f9f68f4892e2f97bfe0675242fe2e81266cd957dd454_prof);

        
        $__internal_17c08a7c60aa36d8f92248101f6c423bb04fd16472569cda907ebb1a0730a2c3->leave($__internal_17c08a7c60aa36d8f92248101f6c423bb04fd16472569cda907ebb1a0730a2c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2eb2ecac2c89d3b6f0ce30243d5ef55cc6359b11166801653132b10f58408e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eb2ecac2c89d3b6f0ce30243d5ef55cc6359b11166801653132b10f58408e4->enter($__internal_a2eb2ecac2c89d3b6f0ce30243d5ef55cc6359b11166801653132b10f58408e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f517cd97c241b1001933fc8ea53efbd6bb484ebc4e55ec4b13be58f09161247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f517cd97c241b1001933fc8ea53efbd6bb484ebc4e55ec4b13be58f09161247->enter($__internal_5f517cd97c241b1001933fc8ea53efbd6bb484ebc4e55ec4b13be58f09161247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5f517cd97c241b1001933fc8ea53efbd6bb484ebc4e55ec4b13be58f09161247->leave($__internal_5f517cd97c241b1001933fc8ea53efbd6bb484ebc4e55ec4b13be58f09161247_prof);

        
        $__internal_a2eb2ecac2c89d3b6f0ce30243d5ef55cc6359b11166801653132b10f58408e4->leave($__internal_a2eb2ecac2c89d3b6f0ce30243d5ef55cc6359b11166801653132b10f58408e4_prof);

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
