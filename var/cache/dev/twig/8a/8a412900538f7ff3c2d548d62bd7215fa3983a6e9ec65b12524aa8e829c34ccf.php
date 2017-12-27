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
        $__internal_f6d8683efde1d0d0d425e429c319b44945e835937462ebba4c5d75f8ae89d203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d8683efde1d0d0d425e429c319b44945e835937462ebba4c5d75f8ae89d203->enter($__internal_f6d8683efde1d0d0d425e429c319b44945e835937462ebba4c5d75f8ae89d203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6f15e7be47d7bcfb38b12113d22c2ca58abf8f423700d0e7a03d444a36fdd92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f15e7be47d7bcfb38b12113d22c2ca58abf8f423700d0e7a03d444a36fdd92b->enter($__internal_6f15e7be47d7bcfb38b12113d22c2ca58abf8f423700d0e7a03d444a36fdd92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d8683efde1d0d0d425e429c319b44945e835937462ebba4c5d75f8ae89d203->leave($__internal_f6d8683efde1d0d0d425e429c319b44945e835937462ebba4c5d75f8ae89d203_prof);

        
        $__internal_6f15e7be47d7bcfb38b12113d22c2ca58abf8f423700d0e7a03d444a36fdd92b->leave($__internal_6f15e7be47d7bcfb38b12113d22c2ca58abf8f423700d0e7a03d444a36fdd92b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c963b5594559b2fa6d39ec2beec68e68ffa19d8f32d42cc628d68894345d25fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c963b5594559b2fa6d39ec2beec68e68ffa19d8f32d42cc628d68894345d25fb->enter($__internal_c963b5594559b2fa6d39ec2beec68e68ffa19d8f32d42cc628d68894345d25fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3721be065dc3945d4328f51e9d61a264c5c2d4579ce2fda67f25043a63ae6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3721be065dc3945d4328f51e9d61a264c5c2d4579ce2fda67f25043a63ae6fa->enter($__internal_c3721be065dc3945d4328f51e9d61a264c5c2d4579ce2fda67f25043a63ae6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3721be065dc3945d4328f51e9d61a264c5c2d4579ce2fda67f25043a63ae6fa->leave($__internal_c3721be065dc3945d4328f51e9d61a264c5c2d4579ce2fda67f25043a63ae6fa_prof);

        
        $__internal_c963b5594559b2fa6d39ec2beec68e68ffa19d8f32d42cc628d68894345d25fb->leave($__internal_c963b5594559b2fa6d39ec2beec68e68ffa19d8f32d42cc628d68894345d25fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cf4f947dfc048158fda7b585c6c9291028798d8fd491517e6d9fc1c5b1a7522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf4f947dfc048158fda7b585c6c9291028798d8fd491517e6d9fc1c5b1a7522->enter($__internal_4cf4f947dfc048158fda7b585c6c9291028798d8fd491517e6d9fc1c5b1a7522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f27f2696ef88e641f9ad2abced077dacf442d08fe1c223e1748a2a5a1c538f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f27f2696ef88e641f9ad2abced077dacf442d08fe1c223e1748a2a5a1c538f4->enter($__internal_6f27f2696ef88e641f9ad2abced077dacf442d08fe1c223e1748a2a5a1c538f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f27f2696ef88e641f9ad2abced077dacf442d08fe1c223e1748a2a5a1c538f4->leave($__internal_6f27f2696ef88e641f9ad2abced077dacf442d08fe1c223e1748a2a5a1c538f4_prof);

        
        $__internal_4cf4f947dfc048158fda7b585c6c9291028798d8fd491517e6d9fc1c5b1a7522->leave($__internal_4cf4f947dfc048158fda7b585c6c9291028798d8fd491517e6d9fc1c5b1a7522_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1589a1cc7931cdb427ccabba400828436cddc91c7bda190cf1aae58c5c3d886b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1589a1cc7931cdb427ccabba400828436cddc91c7bda190cf1aae58c5c3d886b->enter($__internal_1589a1cc7931cdb427ccabba400828436cddc91c7bda190cf1aae58c5c3d886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1df6903c30f62ac26e3d504becc42d0985dc2f06644e139949853b0547d6a651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df6903c30f62ac26e3d504becc42d0985dc2f06644e139949853b0547d6a651->enter($__internal_1df6903c30f62ac26e3d504becc42d0985dc2f06644e139949853b0547d6a651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1df6903c30f62ac26e3d504becc42d0985dc2f06644e139949853b0547d6a651->leave($__internal_1df6903c30f62ac26e3d504becc42d0985dc2f06644e139949853b0547d6a651_prof);

        
        $__internal_1589a1cc7931cdb427ccabba400828436cddc91c7bda190cf1aae58c5c3d886b->leave($__internal_1589a1cc7931cdb427ccabba400828436cddc91c7bda190cf1aae58c5c3d886b_prof);

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
