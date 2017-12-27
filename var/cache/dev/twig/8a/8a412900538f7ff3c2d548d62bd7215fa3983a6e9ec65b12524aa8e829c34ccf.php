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
        $__internal_0eb6bcf94de1cb711dc80421a58f0a87289784eb265c281f78b520fd4d021b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb6bcf94de1cb711dc80421a58f0a87289784eb265c281f78b520fd4d021b0e->enter($__internal_0eb6bcf94de1cb711dc80421a58f0a87289784eb265c281f78b520fd4d021b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c1022eda89dcb98d4b2ec8c234b972867c60eccda33c7836ba0de33e40e7bb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1022eda89dcb98d4b2ec8c234b972867c60eccda33c7836ba0de33e40e7bb22->enter($__internal_c1022eda89dcb98d4b2ec8c234b972867c60eccda33c7836ba0de33e40e7bb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb6bcf94de1cb711dc80421a58f0a87289784eb265c281f78b520fd4d021b0e->leave($__internal_0eb6bcf94de1cb711dc80421a58f0a87289784eb265c281f78b520fd4d021b0e_prof);

        
        $__internal_c1022eda89dcb98d4b2ec8c234b972867c60eccda33c7836ba0de33e40e7bb22->leave($__internal_c1022eda89dcb98d4b2ec8c234b972867c60eccda33c7836ba0de33e40e7bb22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04d70cd56c8a38f255d875ed65c10484ba5d8d3dd18168b15c896ef0d4e51ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d70cd56c8a38f255d875ed65c10484ba5d8d3dd18168b15c896ef0d4e51ee6->enter($__internal_04d70cd56c8a38f255d875ed65c10484ba5d8d3dd18168b15c896ef0d4e51ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6ca02cd17347bc759476fb6a3fae99876f3ca723fe805575e0c6958bd3b5ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ca02cd17347bc759476fb6a3fae99876f3ca723fe805575e0c6958bd3b5ee0->enter($__internal_e6ca02cd17347bc759476fb6a3fae99876f3ca723fe805575e0c6958bd3b5ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6ca02cd17347bc759476fb6a3fae99876f3ca723fe805575e0c6958bd3b5ee0->leave($__internal_e6ca02cd17347bc759476fb6a3fae99876f3ca723fe805575e0c6958bd3b5ee0_prof);

        
        $__internal_04d70cd56c8a38f255d875ed65c10484ba5d8d3dd18168b15c896ef0d4e51ee6->leave($__internal_04d70cd56c8a38f255d875ed65c10484ba5d8d3dd18168b15c896ef0d4e51ee6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c51a62cdb0510f661817ccd6a6717644f4a49cedf833d6a82da53ecbbf7d321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c51a62cdb0510f661817ccd6a6717644f4a49cedf833d6a82da53ecbbf7d321->enter($__internal_9c51a62cdb0510f661817ccd6a6717644f4a49cedf833d6a82da53ecbbf7d321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a65ae5a06fce6c428d29fa71deb667afc15711710ad6e366d8c63ee2ff29cf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65ae5a06fce6c428d29fa71deb667afc15711710ad6e366d8c63ee2ff29cf0b->enter($__internal_a65ae5a06fce6c428d29fa71deb667afc15711710ad6e366d8c63ee2ff29cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a65ae5a06fce6c428d29fa71deb667afc15711710ad6e366d8c63ee2ff29cf0b->leave($__internal_a65ae5a06fce6c428d29fa71deb667afc15711710ad6e366d8c63ee2ff29cf0b_prof);

        
        $__internal_9c51a62cdb0510f661817ccd6a6717644f4a49cedf833d6a82da53ecbbf7d321->leave($__internal_9c51a62cdb0510f661817ccd6a6717644f4a49cedf833d6a82da53ecbbf7d321_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8c5446a99dc0924af9e10e8a9355f405f597c322f2c44e6c45c2f91a5d0a546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c5446a99dc0924af9e10e8a9355f405f597c322f2c44e6c45c2f91a5d0a546->enter($__internal_f8c5446a99dc0924af9e10e8a9355f405f597c322f2c44e6c45c2f91a5d0a546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a6b2555772b323e3efdf736d00d30640018bf8e9fc3fa5ac00cfa7a8e8f5278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6b2555772b323e3efdf736d00d30640018bf8e9fc3fa5ac00cfa7a8e8f5278->enter($__internal_6a6b2555772b323e3efdf736d00d30640018bf8e9fc3fa5ac00cfa7a8e8f5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6a6b2555772b323e3efdf736d00d30640018bf8e9fc3fa5ac00cfa7a8e8f5278->leave($__internal_6a6b2555772b323e3efdf736d00d30640018bf8e9fc3fa5ac00cfa7a8e8f5278_prof);

        
        $__internal_f8c5446a99dc0924af9e10e8a9355f405f597c322f2c44e6c45c2f91a5d0a546->leave($__internal_f8c5446a99dc0924af9e10e8a9355f405f597c322f2c44e6c45c2f91a5d0a546_prof);

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
