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
        $__internal_b50113074bac54ad998d7e5002cb961fa880afa2a968e3e3c445ef85773adc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50113074bac54ad998d7e5002cb961fa880afa2a968e3e3c445ef85773adc61->enter($__internal_b50113074bac54ad998d7e5002cb961fa880afa2a968e3e3c445ef85773adc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d18c443c8464adb948cac95d3ac9be92307af570c916123d34f5d13c02110b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18c443c8464adb948cac95d3ac9be92307af570c916123d34f5d13c02110b60->enter($__internal_d18c443c8464adb948cac95d3ac9be92307af570c916123d34f5d13c02110b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50113074bac54ad998d7e5002cb961fa880afa2a968e3e3c445ef85773adc61->leave($__internal_b50113074bac54ad998d7e5002cb961fa880afa2a968e3e3c445ef85773adc61_prof);

        
        $__internal_d18c443c8464adb948cac95d3ac9be92307af570c916123d34f5d13c02110b60->leave($__internal_d18c443c8464adb948cac95d3ac9be92307af570c916123d34f5d13c02110b60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ba550c20b48a9fc12aaf724a23e01d7c58496f3a88101de62fe49c844ce0a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba550c20b48a9fc12aaf724a23e01d7c58496f3a88101de62fe49c844ce0a24->enter($__internal_7ba550c20b48a9fc12aaf724a23e01d7c58496f3a88101de62fe49c844ce0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_547f13f7c6b093d5dc1c9a11139f03f63fb7d1a8af58350684a0dd1f0a8ec342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f13f7c6b093d5dc1c9a11139f03f63fb7d1a8af58350684a0dd1f0a8ec342->enter($__internal_547f13f7c6b093d5dc1c9a11139f03f63fb7d1a8af58350684a0dd1f0a8ec342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_547f13f7c6b093d5dc1c9a11139f03f63fb7d1a8af58350684a0dd1f0a8ec342->leave($__internal_547f13f7c6b093d5dc1c9a11139f03f63fb7d1a8af58350684a0dd1f0a8ec342_prof);

        
        $__internal_7ba550c20b48a9fc12aaf724a23e01d7c58496f3a88101de62fe49c844ce0a24->leave($__internal_7ba550c20b48a9fc12aaf724a23e01d7c58496f3a88101de62fe49c844ce0a24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e10d9e206c11e916cc10f489d172cff63328ba78124bb071c16f18bb04a9e03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10d9e206c11e916cc10f489d172cff63328ba78124bb071c16f18bb04a9e03d->enter($__internal_e10d9e206c11e916cc10f489d172cff63328ba78124bb071c16f18bb04a9e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a6192b2ebc007e49376968a541dd50c42e9a538e406a353501b8ce08baa2434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6192b2ebc007e49376968a541dd50c42e9a538e406a353501b8ce08baa2434->enter($__internal_0a6192b2ebc007e49376968a541dd50c42e9a538e406a353501b8ce08baa2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a6192b2ebc007e49376968a541dd50c42e9a538e406a353501b8ce08baa2434->leave($__internal_0a6192b2ebc007e49376968a541dd50c42e9a538e406a353501b8ce08baa2434_prof);

        
        $__internal_e10d9e206c11e916cc10f489d172cff63328ba78124bb071c16f18bb04a9e03d->leave($__internal_e10d9e206c11e916cc10f489d172cff63328ba78124bb071c16f18bb04a9e03d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_199fb048ba6a5907e0b72443e336d15e1fb5854acfab7df15304d769d17f0f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199fb048ba6a5907e0b72443e336d15e1fb5854acfab7df15304d769d17f0f15->enter($__internal_199fb048ba6a5907e0b72443e336d15e1fb5854acfab7df15304d769d17f0f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44b4722d80f20dabb82211feb7fab0cc673693a027cb9f7606db14eded2c9810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b4722d80f20dabb82211feb7fab0cc673693a027cb9f7606db14eded2c9810->enter($__internal_44b4722d80f20dabb82211feb7fab0cc673693a027cb9f7606db14eded2c9810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_44b4722d80f20dabb82211feb7fab0cc673693a027cb9f7606db14eded2c9810->leave($__internal_44b4722d80f20dabb82211feb7fab0cc673693a027cb9f7606db14eded2c9810_prof);

        
        $__internal_199fb048ba6a5907e0b72443e336d15e1fb5854acfab7df15304d769d17f0f15->leave($__internal_199fb048ba6a5907e0b72443e336d15e1fb5854acfab7df15304d769d17f0f15_prof);

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
