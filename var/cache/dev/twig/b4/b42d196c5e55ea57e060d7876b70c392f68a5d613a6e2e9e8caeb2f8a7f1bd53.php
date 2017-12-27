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
        $__internal_20ed0c75b220414ceeddec5dcc8a5cd1a59bb5580efeea18fbd25f8ec0bfb5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ed0c75b220414ceeddec5dcc8a5cd1a59bb5580efeea18fbd25f8ec0bfb5b4->enter($__internal_20ed0c75b220414ceeddec5dcc8a5cd1a59bb5580efeea18fbd25f8ec0bfb5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2b58042e9bc473496934fbe7e0035f3aa45ab3fa2a601491486920add7d9bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b58042e9bc473496934fbe7e0035f3aa45ab3fa2a601491486920add7d9bd26->enter($__internal_2b58042e9bc473496934fbe7e0035f3aa45ab3fa2a601491486920add7d9bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ed0c75b220414ceeddec5dcc8a5cd1a59bb5580efeea18fbd25f8ec0bfb5b4->leave($__internal_20ed0c75b220414ceeddec5dcc8a5cd1a59bb5580efeea18fbd25f8ec0bfb5b4_prof);

        
        $__internal_2b58042e9bc473496934fbe7e0035f3aa45ab3fa2a601491486920add7d9bd26->leave($__internal_2b58042e9bc473496934fbe7e0035f3aa45ab3fa2a601491486920add7d9bd26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa3b3ff808612a9d36d4fcd8f198a49913d6ae2387dba4a74eeb48cd8a41547b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3b3ff808612a9d36d4fcd8f198a49913d6ae2387dba4a74eeb48cd8a41547b->enter($__internal_fa3b3ff808612a9d36d4fcd8f198a49913d6ae2387dba4a74eeb48cd8a41547b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bbabd6546dd87a3ef06cfe302dab51e263143825e9b10acaac2a901deb1859c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbabd6546dd87a3ef06cfe302dab51e263143825e9b10acaac2a901deb1859c1->enter($__internal_bbabd6546dd87a3ef06cfe302dab51e263143825e9b10acaac2a901deb1859c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bbabd6546dd87a3ef06cfe302dab51e263143825e9b10acaac2a901deb1859c1->leave($__internal_bbabd6546dd87a3ef06cfe302dab51e263143825e9b10acaac2a901deb1859c1_prof);

        
        $__internal_fa3b3ff808612a9d36d4fcd8f198a49913d6ae2387dba4a74eeb48cd8a41547b->leave($__internal_fa3b3ff808612a9d36d4fcd8f198a49913d6ae2387dba4a74eeb48cd8a41547b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f94eecbd01aba743bd7432a66fe048ae8c576a62a3a0df6129f4d60a0c05d657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94eecbd01aba743bd7432a66fe048ae8c576a62a3a0df6129f4d60a0c05d657->enter($__internal_f94eecbd01aba743bd7432a66fe048ae8c576a62a3a0df6129f4d60a0c05d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a65902d78fa1ee1cd66a3b3af056decc108a5ef5a90cddb6ca49ae3c4364a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a65902d78fa1ee1cd66a3b3af056decc108a5ef5a90cddb6ca49ae3c4364a2d->enter($__internal_3a65902d78fa1ee1cd66a3b3af056decc108a5ef5a90cddb6ca49ae3c4364a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3a65902d78fa1ee1cd66a3b3af056decc108a5ef5a90cddb6ca49ae3c4364a2d->leave($__internal_3a65902d78fa1ee1cd66a3b3af056decc108a5ef5a90cddb6ca49ae3c4364a2d_prof);

        
        $__internal_f94eecbd01aba743bd7432a66fe048ae8c576a62a3a0df6129f4d60a0c05d657->leave($__internal_f94eecbd01aba743bd7432a66fe048ae8c576a62a3a0df6129f4d60a0c05d657_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c9164879b01e6e51f1fe7f627249d457a1ee465a51abaa7545b7dfa0e51a408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9164879b01e6e51f1fe7f627249d457a1ee465a51abaa7545b7dfa0e51a408->enter($__internal_4c9164879b01e6e51f1fe7f627249d457a1ee465a51abaa7545b7dfa0e51a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e79b8ada23fcaddf8930441641b00336a66c0bea7bd18ef4caddcff55e20bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e79b8ada23fcaddf8930441641b00336a66c0bea7bd18ef4caddcff55e20bd2->enter($__internal_6e79b8ada23fcaddf8930441641b00336a66c0bea7bd18ef4caddcff55e20bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6e79b8ada23fcaddf8930441641b00336a66c0bea7bd18ef4caddcff55e20bd2->leave($__internal_6e79b8ada23fcaddf8930441641b00336a66c0bea7bd18ef4caddcff55e20bd2_prof);

        
        $__internal_4c9164879b01e6e51f1fe7f627249d457a1ee465a51abaa7545b7dfa0e51a408->leave($__internal_4c9164879b01e6e51f1fe7f627249d457a1ee465a51abaa7545b7dfa0e51a408_prof);

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
