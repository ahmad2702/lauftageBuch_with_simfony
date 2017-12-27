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
        $__internal_25ee895cb4b21cc52df7a710cb53ac00d05d5afb46940fc0228a61e089cb14eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ee895cb4b21cc52df7a710cb53ac00d05d5afb46940fc0228a61e089cb14eb->enter($__internal_25ee895cb4b21cc52df7a710cb53ac00d05d5afb46940fc0228a61e089cb14eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9ef5351be71efe3ebfe3548c04ca61c8a9e80816c0270278d0d091d7c1884999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef5351be71efe3ebfe3548c04ca61c8a9e80816c0270278d0d091d7c1884999->enter($__internal_9ef5351be71efe3ebfe3548c04ca61c8a9e80816c0270278d0d091d7c1884999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ee895cb4b21cc52df7a710cb53ac00d05d5afb46940fc0228a61e089cb14eb->leave($__internal_25ee895cb4b21cc52df7a710cb53ac00d05d5afb46940fc0228a61e089cb14eb_prof);

        
        $__internal_9ef5351be71efe3ebfe3548c04ca61c8a9e80816c0270278d0d091d7c1884999->leave($__internal_9ef5351be71efe3ebfe3548c04ca61c8a9e80816c0270278d0d091d7c1884999_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30beb0b2a21a423b0652df5e39f81f39e8beff3309d96b333869f467a07c00f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30beb0b2a21a423b0652df5e39f81f39e8beff3309d96b333869f467a07c00f8->enter($__internal_30beb0b2a21a423b0652df5e39f81f39e8beff3309d96b333869f467a07c00f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edb73bee6c605b45751cc6939045e5e84b615a1aa7d0e8a7e3071774c4b6a20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb73bee6c605b45751cc6939045e5e84b615a1aa7d0e8a7e3071774c4b6a20e->enter($__internal_edb73bee6c605b45751cc6939045e5e84b615a1aa7d0e8a7e3071774c4b6a20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_edb73bee6c605b45751cc6939045e5e84b615a1aa7d0e8a7e3071774c4b6a20e->leave($__internal_edb73bee6c605b45751cc6939045e5e84b615a1aa7d0e8a7e3071774c4b6a20e_prof);

        
        $__internal_30beb0b2a21a423b0652df5e39f81f39e8beff3309d96b333869f467a07c00f8->leave($__internal_30beb0b2a21a423b0652df5e39f81f39e8beff3309d96b333869f467a07c00f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_318ccbfc0aa628f350a2776402bb3809359895456852d398b867beacd5268a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318ccbfc0aa628f350a2776402bb3809359895456852d398b867beacd5268a89->enter($__internal_318ccbfc0aa628f350a2776402bb3809359895456852d398b867beacd5268a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a40633c3a87da9b2760bb6dcb5726d0287270163da40a16b74c41282dfaf410c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40633c3a87da9b2760bb6dcb5726d0287270163da40a16b74c41282dfaf410c->enter($__internal_a40633c3a87da9b2760bb6dcb5726d0287270163da40a16b74c41282dfaf410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a40633c3a87da9b2760bb6dcb5726d0287270163da40a16b74c41282dfaf410c->leave($__internal_a40633c3a87da9b2760bb6dcb5726d0287270163da40a16b74c41282dfaf410c_prof);

        
        $__internal_318ccbfc0aa628f350a2776402bb3809359895456852d398b867beacd5268a89->leave($__internal_318ccbfc0aa628f350a2776402bb3809359895456852d398b867beacd5268a89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8f5fb58f407470289d5800d2865f33785f348f0c87b15fcc5bc0355bf096bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f5fb58f407470289d5800d2865f33785f348f0c87b15fcc5bc0355bf096bff->enter($__internal_c8f5fb58f407470289d5800d2865f33785f348f0c87b15fcc5bc0355bf096bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9e046f5729c3e598af20676ed1cf84c9a77f343187d1325614d31b5bf7dd29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e046f5729c3e598af20676ed1cf84c9a77f343187d1325614d31b5bf7dd29d->enter($__internal_c9e046f5729c3e598af20676ed1cf84c9a77f343187d1325614d31b5bf7dd29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c9e046f5729c3e598af20676ed1cf84c9a77f343187d1325614d31b5bf7dd29d->leave($__internal_c9e046f5729c3e598af20676ed1cf84c9a77f343187d1325614d31b5bf7dd29d_prof);

        
        $__internal_c8f5fb58f407470289d5800d2865f33785f348f0c87b15fcc5bc0355bf096bff->leave($__internal_c8f5fb58f407470289d5800d2865f33785f348f0c87b15fcc5bc0355bf096bff_prof);

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
