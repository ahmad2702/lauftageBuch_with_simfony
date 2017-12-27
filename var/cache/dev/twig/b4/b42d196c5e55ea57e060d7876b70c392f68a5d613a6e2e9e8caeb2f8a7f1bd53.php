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
        $__internal_ce692cde7971f7bc57297a64e598e7217deaca769a0b133d65c5106b43752bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce692cde7971f7bc57297a64e598e7217deaca769a0b133d65c5106b43752bd0->enter($__internal_ce692cde7971f7bc57297a64e598e7217deaca769a0b133d65c5106b43752bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_34485eb02bd2227ab52c9f7a6755bb0cf73b9a3e05fda8e6b66075136f6ca1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34485eb02bd2227ab52c9f7a6755bb0cf73b9a3e05fda8e6b66075136f6ca1f8->enter($__internal_34485eb02bd2227ab52c9f7a6755bb0cf73b9a3e05fda8e6b66075136f6ca1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce692cde7971f7bc57297a64e598e7217deaca769a0b133d65c5106b43752bd0->leave($__internal_ce692cde7971f7bc57297a64e598e7217deaca769a0b133d65c5106b43752bd0_prof);

        
        $__internal_34485eb02bd2227ab52c9f7a6755bb0cf73b9a3e05fda8e6b66075136f6ca1f8->leave($__internal_34485eb02bd2227ab52c9f7a6755bb0cf73b9a3e05fda8e6b66075136f6ca1f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c9d762c7edc640cce2106e7bf2120eb7af2803b50e7a1c64011daf3bde56f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9d762c7edc640cce2106e7bf2120eb7af2803b50e7a1c64011daf3bde56f65->enter($__internal_4c9d762c7edc640cce2106e7bf2120eb7af2803b50e7a1c64011daf3bde56f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2d34094a395a9bb1931aec947ecdf7756a232d0a0894aadc6b8919c27ee7530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d34094a395a9bb1931aec947ecdf7756a232d0a0894aadc6b8919c27ee7530->enter($__internal_b2d34094a395a9bb1931aec947ecdf7756a232d0a0894aadc6b8919c27ee7530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b2d34094a395a9bb1931aec947ecdf7756a232d0a0894aadc6b8919c27ee7530->leave($__internal_b2d34094a395a9bb1931aec947ecdf7756a232d0a0894aadc6b8919c27ee7530_prof);

        
        $__internal_4c9d762c7edc640cce2106e7bf2120eb7af2803b50e7a1c64011daf3bde56f65->leave($__internal_4c9d762c7edc640cce2106e7bf2120eb7af2803b50e7a1c64011daf3bde56f65_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82af52e15b593205fd1527583c55f34e821caed2cbec46cbbcd740e49460fdf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82af52e15b593205fd1527583c55f34e821caed2cbec46cbbcd740e49460fdf5->enter($__internal_82af52e15b593205fd1527583c55f34e821caed2cbec46cbbcd740e49460fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_362494f705c9484986ef057e85a99b88a648e668ea080b6682378eaef48b9596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362494f705c9484986ef057e85a99b88a648e668ea080b6682378eaef48b9596->enter($__internal_362494f705c9484986ef057e85a99b88a648e668ea080b6682378eaef48b9596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_362494f705c9484986ef057e85a99b88a648e668ea080b6682378eaef48b9596->leave($__internal_362494f705c9484986ef057e85a99b88a648e668ea080b6682378eaef48b9596_prof);

        
        $__internal_82af52e15b593205fd1527583c55f34e821caed2cbec46cbbcd740e49460fdf5->leave($__internal_82af52e15b593205fd1527583c55f34e821caed2cbec46cbbcd740e49460fdf5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0ce398656011ea0f8049e50a1c2877e757070442cc4a99b81aa33371029f2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ce398656011ea0f8049e50a1c2877e757070442cc4a99b81aa33371029f2a3->enter($__internal_f0ce398656011ea0f8049e50a1c2877e757070442cc4a99b81aa33371029f2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab6a4d027e437df72a18b993862c2ecf7651db4776e48a4a073dfcc3dc5427a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6a4d027e437df72a18b993862c2ecf7651db4776e48a4a073dfcc3dc5427a9->enter($__internal_ab6a4d027e437df72a18b993862c2ecf7651db4776e48a4a073dfcc3dc5427a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ab6a4d027e437df72a18b993862c2ecf7651db4776e48a4a073dfcc3dc5427a9->leave($__internal_ab6a4d027e437df72a18b993862c2ecf7651db4776e48a4a073dfcc3dc5427a9_prof);

        
        $__internal_f0ce398656011ea0f8049e50a1c2877e757070442cc4a99b81aa33371029f2a3->leave($__internal_f0ce398656011ea0f8049e50a1c2877e757070442cc4a99b81aa33371029f2a3_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
