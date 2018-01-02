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
        $__internal_1025cc977481a2274603de13c54c7b7264c3f4be16c76c6cb07b54f5b6283a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1025cc977481a2274603de13c54c7b7264c3f4be16c76c6cb07b54f5b6283a5e->enter($__internal_1025cc977481a2274603de13c54c7b7264c3f4be16c76c6cb07b54f5b6283a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e3f9903740ffa5e93bac8ee115464d6745d5bc71b2dc11f99e80ff01602f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3f9903740ffa5e93bac8ee115464d6745d5bc71b2dc11f99e80ff01602f932->enter($__internal_2e3f9903740ffa5e93bac8ee115464d6745d5bc71b2dc11f99e80ff01602f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1025cc977481a2274603de13c54c7b7264c3f4be16c76c6cb07b54f5b6283a5e->leave($__internal_1025cc977481a2274603de13c54c7b7264c3f4be16c76c6cb07b54f5b6283a5e_prof);

        
        $__internal_2e3f9903740ffa5e93bac8ee115464d6745d5bc71b2dc11f99e80ff01602f932->leave($__internal_2e3f9903740ffa5e93bac8ee115464d6745d5bc71b2dc11f99e80ff01602f932_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_025b20c3d8361dae2ac3b7ca656c376250d11cad04d4de0fd6b3823aeb2ace76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025b20c3d8361dae2ac3b7ca656c376250d11cad04d4de0fd6b3823aeb2ace76->enter($__internal_025b20c3d8361dae2ac3b7ca656c376250d11cad04d4de0fd6b3823aeb2ace76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_635c90636b34231d633e464bd6736885a985f82e5afa630759cb430379c14b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635c90636b34231d633e464bd6736885a985f82e5afa630759cb430379c14b46->enter($__internal_635c90636b34231d633e464bd6736885a985f82e5afa630759cb430379c14b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_635c90636b34231d633e464bd6736885a985f82e5afa630759cb430379c14b46->leave($__internal_635c90636b34231d633e464bd6736885a985f82e5afa630759cb430379c14b46_prof);

        
        $__internal_025b20c3d8361dae2ac3b7ca656c376250d11cad04d4de0fd6b3823aeb2ace76->leave($__internal_025b20c3d8361dae2ac3b7ca656c376250d11cad04d4de0fd6b3823aeb2ace76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14b961aaf8664b58ff50e72f7e564fa66cd6d1ce2bbb59e53b6f89c93fa00110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b961aaf8664b58ff50e72f7e564fa66cd6d1ce2bbb59e53b6f89c93fa00110->enter($__internal_14b961aaf8664b58ff50e72f7e564fa66cd6d1ce2bbb59e53b6f89c93fa00110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe1abe650c77791b54ea5be45846d9f1eb36a17f98052b2d7d6aede603b6fe39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1abe650c77791b54ea5be45846d9f1eb36a17f98052b2d7d6aede603b6fe39->enter($__internal_fe1abe650c77791b54ea5be45846d9f1eb36a17f98052b2d7d6aede603b6fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe1abe650c77791b54ea5be45846d9f1eb36a17f98052b2d7d6aede603b6fe39->leave($__internal_fe1abe650c77791b54ea5be45846d9f1eb36a17f98052b2d7d6aede603b6fe39_prof);

        
        $__internal_14b961aaf8664b58ff50e72f7e564fa66cd6d1ce2bbb59e53b6f89c93fa00110->leave($__internal_14b961aaf8664b58ff50e72f7e564fa66cd6d1ce2bbb59e53b6f89c93fa00110_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d14e9a8688a6ff8c6c7d9bd0f5bc5656a21a45f104bf625f309a65d45aad9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d14e9a8688a6ff8c6c7d9bd0f5bc5656a21a45f104bf625f309a65d45aad9dd->enter($__internal_9d14e9a8688a6ff8c6c7d9bd0f5bc5656a21a45f104bf625f309a65d45aad9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4b5e797786c6474768c44669a2d14c80c81fc9af79ecca1624e9b2e64623eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b5e797786c6474768c44669a2d14c80c81fc9af79ecca1624e9b2e64623eee->enter($__internal_d4b5e797786c6474768c44669a2d14c80c81fc9af79ecca1624e9b2e64623eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d4b5e797786c6474768c44669a2d14c80c81fc9af79ecca1624e9b2e64623eee->leave($__internal_d4b5e797786c6474768c44669a2d14c80c81fc9af79ecca1624e9b2e64623eee_prof);

        
        $__internal_9d14e9a8688a6ff8c6c7d9bd0f5bc5656a21a45f104bf625f309a65d45aad9dd->leave($__internal_9d14e9a8688a6ff8c6c7d9bd0f5bc5656a21a45f104bf625f309a65d45aad9dd_prof);

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
