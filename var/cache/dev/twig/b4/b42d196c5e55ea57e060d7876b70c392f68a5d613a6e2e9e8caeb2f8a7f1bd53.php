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
        $__internal_2a2a8e8a250f77a52dee40fc92a158847ba82b69e6ed4d6b81c284e70d4943e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2a8e8a250f77a52dee40fc92a158847ba82b69e6ed4d6b81c284e70d4943e5->enter($__internal_2a2a8e8a250f77a52dee40fc92a158847ba82b69e6ed4d6b81c284e70d4943e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d26986cfb65f9a5fb69140ce8c8877d79df9f5c1b666586d3bf1b991d7f54669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26986cfb65f9a5fb69140ce8c8877d79df9f5c1b666586d3bf1b991d7f54669->enter($__internal_d26986cfb65f9a5fb69140ce8c8877d79df9f5c1b666586d3bf1b991d7f54669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a2a8e8a250f77a52dee40fc92a158847ba82b69e6ed4d6b81c284e70d4943e5->leave($__internal_2a2a8e8a250f77a52dee40fc92a158847ba82b69e6ed4d6b81c284e70d4943e5_prof);

        
        $__internal_d26986cfb65f9a5fb69140ce8c8877d79df9f5c1b666586d3bf1b991d7f54669->leave($__internal_d26986cfb65f9a5fb69140ce8c8877d79df9f5c1b666586d3bf1b991d7f54669_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5866d678b1cb20d71af9b01e20cc68bb214d21904197b198ffb2f698ea8fc6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5866d678b1cb20d71af9b01e20cc68bb214d21904197b198ffb2f698ea8fc6dc->enter($__internal_5866d678b1cb20d71af9b01e20cc68bb214d21904197b198ffb2f698ea8fc6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f210fddd994f328e2cc776868605b975dba62cef67246ed00f88bc25cf8553a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f210fddd994f328e2cc776868605b975dba62cef67246ed00f88bc25cf8553a->enter($__internal_1f210fddd994f328e2cc776868605b975dba62cef67246ed00f88bc25cf8553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1f210fddd994f328e2cc776868605b975dba62cef67246ed00f88bc25cf8553a->leave($__internal_1f210fddd994f328e2cc776868605b975dba62cef67246ed00f88bc25cf8553a_prof);

        
        $__internal_5866d678b1cb20d71af9b01e20cc68bb214d21904197b198ffb2f698ea8fc6dc->leave($__internal_5866d678b1cb20d71af9b01e20cc68bb214d21904197b198ffb2f698ea8fc6dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f0eaac574d909fe8bcc4e3b5fe8dd00fbb936aac22558c77f7759b2937b3a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0eaac574d909fe8bcc4e3b5fe8dd00fbb936aac22558c77f7759b2937b3a1c->enter($__internal_0f0eaac574d909fe8bcc4e3b5fe8dd00fbb936aac22558c77f7759b2937b3a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a0979599e4b4fceaf836fb3db6df2851eb6998874d09af0cecdf28293410e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0979599e4b4fceaf836fb3db6df2851eb6998874d09af0cecdf28293410e80->enter($__internal_7a0979599e4b4fceaf836fb3db6df2851eb6998874d09af0cecdf28293410e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7a0979599e4b4fceaf836fb3db6df2851eb6998874d09af0cecdf28293410e80->leave($__internal_7a0979599e4b4fceaf836fb3db6df2851eb6998874d09af0cecdf28293410e80_prof);

        
        $__internal_0f0eaac574d909fe8bcc4e3b5fe8dd00fbb936aac22558c77f7759b2937b3a1c->leave($__internal_0f0eaac574d909fe8bcc4e3b5fe8dd00fbb936aac22558c77f7759b2937b3a1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_772d77c07407c5f5475d5ff5e0ddf9f5efb8243198caed0113e6f14467b1691f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772d77c07407c5f5475d5ff5e0ddf9f5efb8243198caed0113e6f14467b1691f->enter($__internal_772d77c07407c5f5475d5ff5e0ddf9f5efb8243198caed0113e6f14467b1691f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04d75874fb784fe0870218571acec205cf5250a486cff14233fc31f94d2bb0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d75874fb784fe0870218571acec205cf5250a486cff14233fc31f94d2bb0bf->enter($__internal_04d75874fb784fe0870218571acec205cf5250a486cff14233fc31f94d2bb0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_04d75874fb784fe0870218571acec205cf5250a486cff14233fc31f94d2bb0bf->leave($__internal_04d75874fb784fe0870218571acec205cf5250a486cff14233fc31f94d2bb0bf_prof);

        
        $__internal_772d77c07407c5f5475d5ff5e0ddf9f5efb8243198caed0113e6f14467b1691f->leave($__internal_772d77c07407c5f5475d5ff5e0ddf9f5efb8243198caed0113e6f14467b1691f_prof);

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
