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
        $__internal_f70d314d839865af9ee272e2f1ea7419cf8b1497de71fd2dfd6f46a4791f8162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70d314d839865af9ee272e2f1ea7419cf8b1497de71fd2dfd6f46a4791f8162->enter($__internal_f70d314d839865af9ee272e2f1ea7419cf8b1497de71fd2dfd6f46a4791f8162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_240b4d13be908a285a95badc9fe4ffb2ada58c60674910e879c23f9cbf18fa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240b4d13be908a285a95badc9fe4ffb2ada58c60674910e879c23f9cbf18fa20->enter($__internal_240b4d13be908a285a95badc9fe4ffb2ada58c60674910e879c23f9cbf18fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70d314d839865af9ee272e2f1ea7419cf8b1497de71fd2dfd6f46a4791f8162->leave($__internal_f70d314d839865af9ee272e2f1ea7419cf8b1497de71fd2dfd6f46a4791f8162_prof);

        
        $__internal_240b4d13be908a285a95badc9fe4ffb2ada58c60674910e879c23f9cbf18fa20->leave($__internal_240b4d13be908a285a95badc9fe4ffb2ada58c60674910e879c23f9cbf18fa20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_649115558f2651a1695df91da8e7645aeb8fed086d75da368af8f2c644ab6177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649115558f2651a1695df91da8e7645aeb8fed086d75da368af8f2c644ab6177->enter($__internal_649115558f2651a1695df91da8e7645aeb8fed086d75da368af8f2c644ab6177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59c3fb5032e2c4976307c2d01c35194c22f17676403ed8977984067aef0063b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c3fb5032e2c4976307c2d01c35194c22f17676403ed8977984067aef0063b2->enter($__internal_59c3fb5032e2c4976307c2d01c35194c22f17676403ed8977984067aef0063b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59c3fb5032e2c4976307c2d01c35194c22f17676403ed8977984067aef0063b2->leave($__internal_59c3fb5032e2c4976307c2d01c35194c22f17676403ed8977984067aef0063b2_prof);

        
        $__internal_649115558f2651a1695df91da8e7645aeb8fed086d75da368af8f2c644ab6177->leave($__internal_649115558f2651a1695df91da8e7645aeb8fed086d75da368af8f2c644ab6177_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3524fc0e925821f73ee43e32edba64742613cbf47f347f24ef74ab12e38ea6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3524fc0e925821f73ee43e32edba64742613cbf47f347f24ef74ab12e38ea6de->enter($__internal_3524fc0e925821f73ee43e32edba64742613cbf47f347f24ef74ab12e38ea6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25460cee352bf7b68ab360cfa31366900df9d6e4730aecd5623b5c330a07db4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25460cee352bf7b68ab360cfa31366900df9d6e4730aecd5623b5c330a07db4c->enter($__internal_25460cee352bf7b68ab360cfa31366900df9d6e4730aecd5623b5c330a07db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25460cee352bf7b68ab360cfa31366900df9d6e4730aecd5623b5c330a07db4c->leave($__internal_25460cee352bf7b68ab360cfa31366900df9d6e4730aecd5623b5c330a07db4c_prof);

        
        $__internal_3524fc0e925821f73ee43e32edba64742613cbf47f347f24ef74ab12e38ea6de->leave($__internal_3524fc0e925821f73ee43e32edba64742613cbf47f347f24ef74ab12e38ea6de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d5d477b8f0c8331d49ab6ddd387693d8040d9da58b47ede019e2e61b6a5e8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5d477b8f0c8331d49ab6ddd387693d8040d9da58b47ede019e2e61b6a5e8b2->enter($__internal_3d5d477b8f0c8331d49ab6ddd387693d8040d9da58b47ede019e2e61b6a5e8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1001ffdea28541789b800d6d9ad673b1ea40e0bd50d6ab70a93542f0d2546ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1001ffdea28541789b800d6d9ad673b1ea40e0bd50d6ab70a93542f0d2546ef->enter($__internal_d1001ffdea28541789b800d6d9ad673b1ea40e0bd50d6ab70a93542f0d2546ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d1001ffdea28541789b800d6d9ad673b1ea40e0bd50d6ab70a93542f0d2546ef->leave($__internal_d1001ffdea28541789b800d6d9ad673b1ea40e0bd50d6ab70a93542f0d2546ef_prof);

        
        $__internal_3d5d477b8f0c8331d49ab6ddd387693d8040d9da58b47ede019e2e61b6a5e8b2->leave($__internal_3d5d477b8f0c8331d49ab6ddd387693d8040d9da58b47ede019e2e61b6a5e8b2_prof);

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
