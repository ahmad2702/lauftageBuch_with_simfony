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
        $__internal_5dd71bf811ff8eeacd618d1e7c54b8d6a7d840466747a59559844411671930ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd71bf811ff8eeacd618d1e7c54b8d6a7d840466747a59559844411671930ad->enter($__internal_5dd71bf811ff8eeacd618d1e7c54b8d6a7d840466747a59559844411671930ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d9d7553bae90dc88002d944855b25ec539ea223fc5b659ab81cb81bfe649fd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d7553bae90dc88002d944855b25ec539ea223fc5b659ab81cb81bfe649fd29->enter($__internal_d9d7553bae90dc88002d944855b25ec539ea223fc5b659ab81cb81bfe649fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dd71bf811ff8eeacd618d1e7c54b8d6a7d840466747a59559844411671930ad->leave($__internal_5dd71bf811ff8eeacd618d1e7c54b8d6a7d840466747a59559844411671930ad_prof);

        
        $__internal_d9d7553bae90dc88002d944855b25ec539ea223fc5b659ab81cb81bfe649fd29->leave($__internal_d9d7553bae90dc88002d944855b25ec539ea223fc5b659ab81cb81bfe649fd29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26293826319f57667b58155e2e3068a2f7646abbc167cf60a29dba55b348ee45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26293826319f57667b58155e2e3068a2f7646abbc167cf60a29dba55b348ee45->enter($__internal_26293826319f57667b58155e2e3068a2f7646abbc167cf60a29dba55b348ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ef0f8ddeae8b4817c221d389773a53066673f62986dc4a39d9daef6cae81a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef0f8ddeae8b4817c221d389773a53066673f62986dc4a39d9daef6cae81a58->enter($__internal_7ef0f8ddeae8b4817c221d389773a53066673f62986dc4a39d9daef6cae81a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7ef0f8ddeae8b4817c221d389773a53066673f62986dc4a39d9daef6cae81a58->leave($__internal_7ef0f8ddeae8b4817c221d389773a53066673f62986dc4a39d9daef6cae81a58_prof);

        
        $__internal_26293826319f57667b58155e2e3068a2f7646abbc167cf60a29dba55b348ee45->leave($__internal_26293826319f57667b58155e2e3068a2f7646abbc167cf60a29dba55b348ee45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34bfd4d1b22066f3eefb277723ceee02471740fcb7afce94772ca3e8203a1c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bfd4d1b22066f3eefb277723ceee02471740fcb7afce94772ca3e8203a1c0c->enter($__internal_34bfd4d1b22066f3eefb277723ceee02471740fcb7afce94772ca3e8203a1c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_decafce4cd1343f80960d37b2289b27faeba317279301da15af8d8a8642c6b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decafce4cd1343f80960d37b2289b27faeba317279301da15af8d8a8642c6b6f->enter($__internal_decafce4cd1343f80960d37b2289b27faeba317279301da15af8d8a8642c6b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_decafce4cd1343f80960d37b2289b27faeba317279301da15af8d8a8642c6b6f->leave($__internal_decafce4cd1343f80960d37b2289b27faeba317279301da15af8d8a8642c6b6f_prof);

        
        $__internal_34bfd4d1b22066f3eefb277723ceee02471740fcb7afce94772ca3e8203a1c0c->leave($__internal_34bfd4d1b22066f3eefb277723ceee02471740fcb7afce94772ca3e8203a1c0c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_004b31b4c02675f5b4d04c9c7ad4216d19902cd1a35453406c837fb0c4ccebbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004b31b4c02675f5b4d04c9c7ad4216d19902cd1a35453406c837fb0c4ccebbd->enter($__internal_004b31b4c02675f5b4d04c9c7ad4216d19902cd1a35453406c837fb0c4ccebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5f49c0b5b9e1b1d78c72b4d96c1d20008fa33e79559398838caeefd88c2457f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f49c0b5b9e1b1d78c72b4d96c1d20008fa33e79559398838caeefd88c2457f->enter($__internal_b5f49c0b5b9e1b1d78c72b4d96c1d20008fa33e79559398838caeefd88c2457f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b5f49c0b5b9e1b1d78c72b4d96c1d20008fa33e79559398838caeefd88c2457f->leave($__internal_b5f49c0b5b9e1b1d78c72b4d96c1d20008fa33e79559398838caeefd88c2457f_prof);

        
        $__internal_004b31b4c02675f5b4d04c9c7ad4216d19902cd1a35453406c837fb0c4ccebbd->leave($__internal_004b31b4c02675f5b4d04c9c7ad4216d19902cd1a35453406c837fb0c4ccebbd_prof);

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
