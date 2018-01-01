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
        $__internal_201edbd16b157d8ffa2a857bb2df496435ef3f1484a3ee4991a68869269e7cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201edbd16b157d8ffa2a857bb2df496435ef3f1484a3ee4991a68869269e7cbd->enter($__internal_201edbd16b157d8ffa2a857bb2df496435ef3f1484a3ee4991a68869269e7cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c92f50adc4a67ae33c084b793068aa1b3e59e7957856cf6d5de916a6e0e91bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92f50adc4a67ae33c084b793068aa1b3e59e7957856cf6d5de916a6e0e91bea->enter($__internal_c92f50adc4a67ae33c084b793068aa1b3e59e7957856cf6d5de916a6e0e91bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201edbd16b157d8ffa2a857bb2df496435ef3f1484a3ee4991a68869269e7cbd->leave($__internal_201edbd16b157d8ffa2a857bb2df496435ef3f1484a3ee4991a68869269e7cbd_prof);

        
        $__internal_c92f50adc4a67ae33c084b793068aa1b3e59e7957856cf6d5de916a6e0e91bea->leave($__internal_c92f50adc4a67ae33c084b793068aa1b3e59e7957856cf6d5de916a6e0e91bea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35e3b134956f919f509ade2dcacc28fe21734a9a8ccbbb6867b4a7fc88019172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e3b134956f919f509ade2dcacc28fe21734a9a8ccbbb6867b4a7fc88019172->enter($__internal_35e3b134956f919f509ade2dcacc28fe21734a9a8ccbbb6867b4a7fc88019172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51c4752e83c4d48ac87a7d29af80d1579e6200d84d893428ce8dc353b5c2595d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c4752e83c4d48ac87a7d29af80d1579e6200d84d893428ce8dc353b5c2595d->enter($__internal_51c4752e83c4d48ac87a7d29af80d1579e6200d84d893428ce8dc353b5c2595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51c4752e83c4d48ac87a7d29af80d1579e6200d84d893428ce8dc353b5c2595d->leave($__internal_51c4752e83c4d48ac87a7d29af80d1579e6200d84d893428ce8dc353b5c2595d_prof);

        
        $__internal_35e3b134956f919f509ade2dcacc28fe21734a9a8ccbbb6867b4a7fc88019172->leave($__internal_35e3b134956f919f509ade2dcacc28fe21734a9a8ccbbb6867b4a7fc88019172_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d12e4d4e2954515d522b2d42a3ca209c3b2b09ff2f06a20c2fab9af12aa731f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d12e4d4e2954515d522b2d42a3ca209c3b2b09ff2f06a20c2fab9af12aa731f->enter($__internal_2d12e4d4e2954515d522b2d42a3ca209c3b2b09ff2f06a20c2fab9af12aa731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4192a49b066099350081c8e4f23aa814036880f65b12ece9edffe2b130da2ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4192a49b066099350081c8e4f23aa814036880f65b12ece9edffe2b130da2ec8->enter($__internal_4192a49b066099350081c8e4f23aa814036880f65b12ece9edffe2b130da2ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4192a49b066099350081c8e4f23aa814036880f65b12ece9edffe2b130da2ec8->leave($__internal_4192a49b066099350081c8e4f23aa814036880f65b12ece9edffe2b130da2ec8_prof);

        
        $__internal_2d12e4d4e2954515d522b2d42a3ca209c3b2b09ff2f06a20c2fab9af12aa731f->leave($__internal_2d12e4d4e2954515d522b2d42a3ca209c3b2b09ff2f06a20c2fab9af12aa731f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b67531b827871d87cde3995085c52b1748cef466ca62c5c6749efa266f1700ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67531b827871d87cde3995085c52b1748cef466ca62c5c6749efa266f1700ec->enter($__internal_b67531b827871d87cde3995085c52b1748cef466ca62c5c6749efa266f1700ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_584be3ea8378a9d7adfbd1b325fd4ac6b6b49531f698d92efadc203bf4555022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584be3ea8378a9d7adfbd1b325fd4ac6b6b49531f698d92efadc203bf4555022->enter($__internal_584be3ea8378a9d7adfbd1b325fd4ac6b6b49531f698d92efadc203bf4555022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_584be3ea8378a9d7adfbd1b325fd4ac6b6b49531f698d92efadc203bf4555022->leave($__internal_584be3ea8378a9d7adfbd1b325fd4ac6b6b49531f698d92efadc203bf4555022_prof);

        
        $__internal_b67531b827871d87cde3995085c52b1748cef466ca62c5c6749efa266f1700ec->leave($__internal_b67531b827871d87cde3995085c52b1748cef466ca62c5c6749efa266f1700ec_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
