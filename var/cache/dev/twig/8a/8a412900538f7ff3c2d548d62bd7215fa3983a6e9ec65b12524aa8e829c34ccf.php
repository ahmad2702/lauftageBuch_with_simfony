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
        $__internal_12e9dccb39f5d02a1d181743292a837cd8bdaaa10f717d2ba3debd582796209a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e9dccb39f5d02a1d181743292a837cd8bdaaa10f717d2ba3debd582796209a->enter($__internal_12e9dccb39f5d02a1d181743292a837cd8bdaaa10f717d2ba3debd582796209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_27ed68c68a9149c8e557473a5e413ad1c227899748ca3a87fdfc18902a63a44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ed68c68a9149c8e557473a5e413ad1c227899748ca3a87fdfc18902a63a44d->enter($__internal_27ed68c68a9149c8e557473a5e413ad1c227899748ca3a87fdfc18902a63a44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e9dccb39f5d02a1d181743292a837cd8bdaaa10f717d2ba3debd582796209a->leave($__internal_12e9dccb39f5d02a1d181743292a837cd8bdaaa10f717d2ba3debd582796209a_prof);

        
        $__internal_27ed68c68a9149c8e557473a5e413ad1c227899748ca3a87fdfc18902a63a44d->leave($__internal_27ed68c68a9149c8e557473a5e413ad1c227899748ca3a87fdfc18902a63a44d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13b834986d783eb5379ebcae480de5184f3ef8508285f43d2ca4de3d1f0cba9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b834986d783eb5379ebcae480de5184f3ef8508285f43d2ca4de3d1f0cba9c->enter($__internal_13b834986d783eb5379ebcae480de5184f3ef8508285f43d2ca4de3d1f0cba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b269ce11a51b474e86b6081c12a5f76e2bb5a87a89a107f586014f4dcd8574b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b269ce11a51b474e86b6081c12a5f76e2bb5a87a89a107f586014f4dcd8574b->enter($__internal_9b269ce11a51b474e86b6081c12a5f76e2bb5a87a89a107f586014f4dcd8574b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b269ce11a51b474e86b6081c12a5f76e2bb5a87a89a107f586014f4dcd8574b->leave($__internal_9b269ce11a51b474e86b6081c12a5f76e2bb5a87a89a107f586014f4dcd8574b_prof);

        
        $__internal_13b834986d783eb5379ebcae480de5184f3ef8508285f43d2ca4de3d1f0cba9c->leave($__internal_13b834986d783eb5379ebcae480de5184f3ef8508285f43d2ca4de3d1f0cba9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2617d1e72ef66dd3c264d8aac3232fac7164406a8a83328b528bcb49a58fc42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2617d1e72ef66dd3c264d8aac3232fac7164406a8a83328b528bcb49a58fc42a->enter($__internal_2617d1e72ef66dd3c264d8aac3232fac7164406a8a83328b528bcb49a58fc42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2af4cdd58ce640271d65dccb536a6a4cc85556dbadde8977eee69dd89bf2fab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af4cdd58ce640271d65dccb536a6a4cc85556dbadde8977eee69dd89bf2fab0->enter($__internal_2af4cdd58ce640271d65dccb536a6a4cc85556dbadde8977eee69dd89bf2fab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2af4cdd58ce640271d65dccb536a6a4cc85556dbadde8977eee69dd89bf2fab0->leave($__internal_2af4cdd58ce640271d65dccb536a6a4cc85556dbadde8977eee69dd89bf2fab0_prof);

        
        $__internal_2617d1e72ef66dd3c264d8aac3232fac7164406a8a83328b528bcb49a58fc42a->leave($__internal_2617d1e72ef66dd3c264d8aac3232fac7164406a8a83328b528bcb49a58fc42a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fccff92b69b8c237038a22664c4f10469603d65b9f32d586afd786d91c5caa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fccff92b69b8c237038a22664c4f10469603d65b9f32d586afd786d91c5caa6->enter($__internal_7fccff92b69b8c237038a22664c4f10469603d65b9f32d586afd786d91c5caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee758ea79efcb8d8f02d6564fccd054583d448dc30e8d2fa9069819e94994b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee758ea79efcb8d8f02d6564fccd054583d448dc30e8d2fa9069819e94994b73->enter($__internal_ee758ea79efcb8d8f02d6564fccd054583d448dc30e8d2fa9069819e94994b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ee758ea79efcb8d8f02d6564fccd054583d448dc30e8d2fa9069819e94994b73->leave($__internal_ee758ea79efcb8d8f02d6564fccd054583d448dc30e8d2fa9069819e94994b73_prof);

        
        $__internal_7fccff92b69b8c237038a22664c4f10469603d65b9f32d586afd786d91c5caa6->leave($__internal_7fccff92b69b8c237038a22664c4f10469603d65b9f32d586afd786d91c5caa6_prof);

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
