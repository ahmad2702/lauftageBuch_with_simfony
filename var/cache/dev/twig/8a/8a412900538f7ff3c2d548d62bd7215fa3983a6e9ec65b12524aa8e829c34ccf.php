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
        $__internal_7a04f6ed5e42dcf260030ede9989c5f8bc05c1dcbc9c80e195ae7b23fc2d50fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a04f6ed5e42dcf260030ede9989c5f8bc05c1dcbc9c80e195ae7b23fc2d50fb->enter($__internal_7a04f6ed5e42dcf260030ede9989c5f8bc05c1dcbc9c80e195ae7b23fc2d50fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_79ac7919d4f6f83f66656fa822eb3300007d953e27ee184527862e7de63aa3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ac7919d4f6f83f66656fa822eb3300007d953e27ee184527862e7de63aa3d9->enter($__internal_79ac7919d4f6f83f66656fa822eb3300007d953e27ee184527862e7de63aa3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a04f6ed5e42dcf260030ede9989c5f8bc05c1dcbc9c80e195ae7b23fc2d50fb->leave($__internal_7a04f6ed5e42dcf260030ede9989c5f8bc05c1dcbc9c80e195ae7b23fc2d50fb_prof);

        
        $__internal_79ac7919d4f6f83f66656fa822eb3300007d953e27ee184527862e7de63aa3d9->leave($__internal_79ac7919d4f6f83f66656fa822eb3300007d953e27ee184527862e7de63aa3d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34600878749072d8fe2016d054920c3dd679811b8916caaad992487d53bed979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34600878749072d8fe2016d054920c3dd679811b8916caaad992487d53bed979->enter($__internal_34600878749072d8fe2016d054920c3dd679811b8916caaad992487d53bed979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8228c394bea44f8ecfaa28725651d9b31b6bba2a3824891724d3374ebaa38ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8228c394bea44f8ecfaa28725651d9b31b6bba2a3824891724d3374ebaa38ac1->enter($__internal_8228c394bea44f8ecfaa28725651d9b31b6bba2a3824891724d3374ebaa38ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8228c394bea44f8ecfaa28725651d9b31b6bba2a3824891724d3374ebaa38ac1->leave($__internal_8228c394bea44f8ecfaa28725651d9b31b6bba2a3824891724d3374ebaa38ac1_prof);

        
        $__internal_34600878749072d8fe2016d054920c3dd679811b8916caaad992487d53bed979->leave($__internal_34600878749072d8fe2016d054920c3dd679811b8916caaad992487d53bed979_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3baf30234549ea24af2c490b00664cda4e8e4812c3c108533b9d36ef82df7e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3baf30234549ea24af2c490b00664cda4e8e4812c3c108533b9d36ef82df7e6b->enter($__internal_3baf30234549ea24af2c490b00664cda4e8e4812c3c108533b9d36ef82df7e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06d97ef70ac7223d02e092e9c6338a0c8ba0618a584acb2772aef28076f7f2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d97ef70ac7223d02e092e9c6338a0c8ba0618a584acb2772aef28076f7f2c0->enter($__internal_06d97ef70ac7223d02e092e9c6338a0c8ba0618a584acb2772aef28076f7f2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06d97ef70ac7223d02e092e9c6338a0c8ba0618a584acb2772aef28076f7f2c0->leave($__internal_06d97ef70ac7223d02e092e9c6338a0c8ba0618a584acb2772aef28076f7f2c0_prof);

        
        $__internal_3baf30234549ea24af2c490b00664cda4e8e4812c3c108533b9d36ef82df7e6b->leave($__internal_3baf30234549ea24af2c490b00664cda4e8e4812c3c108533b9d36ef82df7e6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bde661f142b603b9483420aaafc1eec0cea059b31136a9647e48cc9af4a8de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bde661f142b603b9483420aaafc1eec0cea059b31136a9647e48cc9af4a8de7->enter($__internal_2bde661f142b603b9483420aaafc1eec0cea059b31136a9647e48cc9af4a8de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b0d26c70e006a529dd8877c12df4710416ab6363c264aa99b4d16d036c88318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0d26c70e006a529dd8877c12df4710416ab6363c264aa99b4d16d036c88318->enter($__internal_2b0d26c70e006a529dd8877c12df4710416ab6363c264aa99b4d16d036c88318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2b0d26c70e006a529dd8877c12df4710416ab6363c264aa99b4d16d036c88318->leave($__internal_2b0d26c70e006a529dd8877c12df4710416ab6363c264aa99b4d16d036c88318_prof);

        
        $__internal_2bde661f142b603b9483420aaafc1eec0cea059b31136a9647e48cc9af4a8de7->leave($__internal_2bde661f142b603b9483420aaafc1eec0cea059b31136a9647e48cc9af4a8de7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
