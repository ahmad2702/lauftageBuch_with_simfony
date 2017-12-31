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
        $__internal_461553af6aa0dfc7f1c526bec442776e2be5db906375b3c71c8af57f55a8ca7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461553af6aa0dfc7f1c526bec442776e2be5db906375b3c71c8af57f55a8ca7f->enter($__internal_461553af6aa0dfc7f1c526bec442776e2be5db906375b3c71c8af57f55a8ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_819955064bd9d9ed8eac09b07e71dee6313e5369b69e23354d64a1b73711534f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819955064bd9d9ed8eac09b07e71dee6313e5369b69e23354d64a1b73711534f->enter($__internal_819955064bd9d9ed8eac09b07e71dee6313e5369b69e23354d64a1b73711534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461553af6aa0dfc7f1c526bec442776e2be5db906375b3c71c8af57f55a8ca7f->leave($__internal_461553af6aa0dfc7f1c526bec442776e2be5db906375b3c71c8af57f55a8ca7f_prof);

        
        $__internal_819955064bd9d9ed8eac09b07e71dee6313e5369b69e23354d64a1b73711534f->leave($__internal_819955064bd9d9ed8eac09b07e71dee6313e5369b69e23354d64a1b73711534f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_087e37808ccca48c5062d31eba05b62d83af009102ed1b84b74c45df3a547445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087e37808ccca48c5062d31eba05b62d83af009102ed1b84b74c45df3a547445->enter($__internal_087e37808ccca48c5062d31eba05b62d83af009102ed1b84b74c45df3a547445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6c1429b9828a68b8447554de1e1a20178f1c8ca5eecd96b31a9f2a4e867616f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c1429b9828a68b8447554de1e1a20178f1c8ca5eecd96b31a9f2a4e867616f->enter($__internal_d6c1429b9828a68b8447554de1e1a20178f1c8ca5eecd96b31a9f2a4e867616f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d6c1429b9828a68b8447554de1e1a20178f1c8ca5eecd96b31a9f2a4e867616f->leave($__internal_d6c1429b9828a68b8447554de1e1a20178f1c8ca5eecd96b31a9f2a4e867616f_prof);

        
        $__internal_087e37808ccca48c5062d31eba05b62d83af009102ed1b84b74c45df3a547445->leave($__internal_087e37808ccca48c5062d31eba05b62d83af009102ed1b84b74c45df3a547445_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a75cc4b891883a09f533534b8634da3597d11280f0f2783802c60c0a5211446f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75cc4b891883a09f533534b8634da3597d11280f0f2783802c60c0a5211446f->enter($__internal_a75cc4b891883a09f533534b8634da3597d11280f0f2783802c60c0a5211446f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50e55ac032f641eb2799b39e04236171441f0a7f669fb45d7b2193a302782e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e55ac032f641eb2799b39e04236171441f0a7f669fb45d7b2193a302782e51->enter($__internal_50e55ac032f641eb2799b39e04236171441f0a7f669fb45d7b2193a302782e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_50e55ac032f641eb2799b39e04236171441f0a7f669fb45d7b2193a302782e51->leave($__internal_50e55ac032f641eb2799b39e04236171441f0a7f669fb45d7b2193a302782e51_prof);

        
        $__internal_a75cc4b891883a09f533534b8634da3597d11280f0f2783802c60c0a5211446f->leave($__internal_a75cc4b891883a09f533534b8634da3597d11280f0f2783802c60c0a5211446f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88457cce48b09bfec451f82c58e471bc6613f6c41b7fb88cad3269d9ba159dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88457cce48b09bfec451f82c58e471bc6613f6c41b7fb88cad3269d9ba159dee->enter($__internal_88457cce48b09bfec451f82c58e471bc6613f6c41b7fb88cad3269d9ba159dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0294e4e7ee205fdbca3c094505535e9c95d4b6dd4fb1e0c1ab36ae0353be4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0294e4e7ee205fdbca3c094505535e9c95d4b6dd4fb1e0c1ab36ae0353be4e8->enter($__internal_c0294e4e7ee205fdbca3c094505535e9c95d4b6dd4fb1e0c1ab36ae0353be4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0294e4e7ee205fdbca3c094505535e9c95d4b6dd4fb1e0c1ab36ae0353be4e8->leave($__internal_c0294e4e7ee205fdbca3c094505535e9c95d4b6dd4fb1e0c1ab36ae0353be4e8_prof);

        
        $__internal_88457cce48b09bfec451f82c58e471bc6613f6c41b7fb88cad3269d9ba159dee->leave($__internal_88457cce48b09bfec451f82c58e471bc6613f6c41b7fb88cad3269d9ba159dee_prof);

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
