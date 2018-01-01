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
        $__internal_b6f5150e96103f9cc7bcc5dd9087c23f18b842cf68675ca3b3588f93133c16b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f5150e96103f9cc7bcc5dd9087c23f18b842cf68675ca3b3588f93133c16b5->enter($__internal_b6f5150e96103f9cc7bcc5dd9087c23f18b842cf68675ca3b3588f93133c16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_611d6e2d13e2e642e29f271599607e48ebc273c71dcda21c99f014a1dad4e69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611d6e2d13e2e642e29f271599607e48ebc273c71dcda21c99f014a1dad4e69b->enter($__internal_611d6e2d13e2e642e29f271599607e48ebc273c71dcda21c99f014a1dad4e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f5150e96103f9cc7bcc5dd9087c23f18b842cf68675ca3b3588f93133c16b5->leave($__internal_b6f5150e96103f9cc7bcc5dd9087c23f18b842cf68675ca3b3588f93133c16b5_prof);

        
        $__internal_611d6e2d13e2e642e29f271599607e48ebc273c71dcda21c99f014a1dad4e69b->leave($__internal_611d6e2d13e2e642e29f271599607e48ebc273c71dcda21c99f014a1dad4e69b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f717d743d626ee6d728e2e82a0ef3c0dd1e1036f62bbedab4bbbcca88b68b666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f717d743d626ee6d728e2e82a0ef3c0dd1e1036f62bbedab4bbbcca88b68b666->enter($__internal_f717d743d626ee6d728e2e82a0ef3c0dd1e1036f62bbedab4bbbcca88b68b666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f0fa745c1dfa85c6b134db24dfc653dc000fe1a11c97b94aacc2e2b17ee3af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0fa745c1dfa85c6b134db24dfc653dc000fe1a11c97b94aacc2e2b17ee3af8->enter($__internal_0f0fa745c1dfa85c6b134db24dfc653dc000fe1a11c97b94aacc2e2b17ee3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0f0fa745c1dfa85c6b134db24dfc653dc000fe1a11c97b94aacc2e2b17ee3af8->leave($__internal_0f0fa745c1dfa85c6b134db24dfc653dc000fe1a11c97b94aacc2e2b17ee3af8_prof);

        
        $__internal_f717d743d626ee6d728e2e82a0ef3c0dd1e1036f62bbedab4bbbcca88b68b666->leave($__internal_f717d743d626ee6d728e2e82a0ef3c0dd1e1036f62bbedab4bbbcca88b68b666_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1423ea37162cd46cbf62737e0df889db3dd838b529750d3e22ab9736662939f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1423ea37162cd46cbf62737e0df889db3dd838b529750d3e22ab9736662939f2->enter($__internal_1423ea37162cd46cbf62737e0df889db3dd838b529750d3e22ab9736662939f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af68501697ae1cc2ff94a0150da1f057eeaacc4cf3ce626f105ca5d027bd1260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af68501697ae1cc2ff94a0150da1f057eeaacc4cf3ce626f105ca5d027bd1260->enter($__internal_af68501697ae1cc2ff94a0150da1f057eeaacc4cf3ce626f105ca5d027bd1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_af68501697ae1cc2ff94a0150da1f057eeaacc4cf3ce626f105ca5d027bd1260->leave($__internal_af68501697ae1cc2ff94a0150da1f057eeaacc4cf3ce626f105ca5d027bd1260_prof);

        
        $__internal_1423ea37162cd46cbf62737e0df889db3dd838b529750d3e22ab9736662939f2->leave($__internal_1423ea37162cd46cbf62737e0df889db3dd838b529750d3e22ab9736662939f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b76d8f00d931c24b81496c77b429b12b225c8414c9e877ff006be557e37f6095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76d8f00d931c24b81496c77b429b12b225c8414c9e877ff006be557e37f6095->enter($__internal_b76d8f00d931c24b81496c77b429b12b225c8414c9e877ff006be557e37f6095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b42430ad2dfe39a6d77259ac02378f0a10198492fb88c3998fc7570f98a97b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b42430ad2dfe39a6d77259ac02378f0a10198492fb88c3998fc7570f98a97b5->enter($__internal_7b42430ad2dfe39a6d77259ac02378f0a10198492fb88c3998fc7570f98a97b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7b42430ad2dfe39a6d77259ac02378f0a10198492fb88c3998fc7570f98a97b5->leave($__internal_7b42430ad2dfe39a6d77259ac02378f0a10198492fb88c3998fc7570f98a97b5_prof);

        
        $__internal_b76d8f00d931c24b81496c77b429b12b225c8414c9e877ff006be557e37f6095->leave($__internal_b76d8f00d931c24b81496c77b429b12b225c8414c9e877ff006be557e37f6095_prof);

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
