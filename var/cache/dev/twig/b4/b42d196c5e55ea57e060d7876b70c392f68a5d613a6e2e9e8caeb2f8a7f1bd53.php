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
        $__internal_841e9f5a1827883f1980b20e50477ad482e57533a57db0cec19063805fbfdf02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841e9f5a1827883f1980b20e50477ad482e57533a57db0cec19063805fbfdf02->enter($__internal_841e9f5a1827883f1980b20e50477ad482e57533a57db0cec19063805fbfdf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0ecec97af3e30005583011750e91f63ac3ee1febafe5f1f8347f86238efb5eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecec97af3e30005583011750e91f63ac3ee1febafe5f1f8347f86238efb5eb9->enter($__internal_0ecec97af3e30005583011750e91f63ac3ee1febafe5f1f8347f86238efb5eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_841e9f5a1827883f1980b20e50477ad482e57533a57db0cec19063805fbfdf02->leave($__internal_841e9f5a1827883f1980b20e50477ad482e57533a57db0cec19063805fbfdf02_prof);

        
        $__internal_0ecec97af3e30005583011750e91f63ac3ee1febafe5f1f8347f86238efb5eb9->leave($__internal_0ecec97af3e30005583011750e91f63ac3ee1febafe5f1f8347f86238efb5eb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88e90d798ed4b3b6b883b4172ede6f685f845f8df8ea6508049f1510b763097c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e90d798ed4b3b6b883b4172ede6f685f845f8df8ea6508049f1510b763097c->enter($__internal_88e90d798ed4b3b6b883b4172ede6f685f845f8df8ea6508049f1510b763097c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_982394c89a8f6471576d89daa9c6931044a6216d66b65aca1a18e927c894186c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982394c89a8f6471576d89daa9c6931044a6216d66b65aca1a18e927c894186c->enter($__internal_982394c89a8f6471576d89daa9c6931044a6216d66b65aca1a18e927c894186c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_982394c89a8f6471576d89daa9c6931044a6216d66b65aca1a18e927c894186c->leave($__internal_982394c89a8f6471576d89daa9c6931044a6216d66b65aca1a18e927c894186c_prof);

        
        $__internal_88e90d798ed4b3b6b883b4172ede6f685f845f8df8ea6508049f1510b763097c->leave($__internal_88e90d798ed4b3b6b883b4172ede6f685f845f8df8ea6508049f1510b763097c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f0dbd9433b27b5b345a56223e0209411b797ba45c28c78828ba3db23dbadecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0dbd9433b27b5b345a56223e0209411b797ba45c28c78828ba3db23dbadecf->enter($__internal_7f0dbd9433b27b5b345a56223e0209411b797ba45c28c78828ba3db23dbadecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1319ce957cb300b8048c41640ba841ab2f1271686f2d6d6d69afb74a182393fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1319ce957cb300b8048c41640ba841ab2f1271686f2d6d6d69afb74a182393fa->enter($__internal_1319ce957cb300b8048c41640ba841ab2f1271686f2d6d6d69afb74a182393fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1319ce957cb300b8048c41640ba841ab2f1271686f2d6d6d69afb74a182393fa->leave($__internal_1319ce957cb300b8048c41640ba841ab2f1271686f2d6d6d69afb74a182393fa_prof);

        
        $__internal_7f0dbd9433b27b5b345a56223e0209411b797ba45c28c78828ba3db23dbadecf->leave($__internal_7f0dbd9433b27b5b345a56223e0209411b797ba45c28c78828ba3db23dbadecf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7cb739033d417f4a8b382c699b900a10cc6044f74024f3e6f29874359536be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cb739033d417f4a8b382c699b900a10cc6044f74024f3e6f29874359536be9->enter($__internal_f7cb739033d417f4a8b382c699b900a10cc6044f74024f3e6f29874359536be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33f7317929bfe21b04c53f043f04be604c16f890371bc500fee645f90488b798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f7317929bfe21b04c53f043f04be604c16f890371bc500fee645f90488b798->enter($__internal_33f7317929bfe21b04c53f043f04be604c16f890371bc500fee645f90488b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_33f7317929bfe21b04c53f043f04be604c16f890371bc500fee645f90488b798->leave($__internal_33f7317929bfe21b04c53f043f04be604c16f890371bc500fee645f90488b798_prof);

        
        $__internal_f7cb739033d417f4a8b382c699b900a10cc6044f74024f3e6f29874359536be9->leave($__internal_f7cb739033d417f4a8b382c699b900a10cc6044f74024f3e6f29874359536be9_prof);

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
