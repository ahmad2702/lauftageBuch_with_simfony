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
        $__internal_0c42bef9f06b44acf5c42dc825c8ed44a0aee14072fef55857e5135116176365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c42bef9f06b44acf5c42dc825c8ed44a0aee14072fef55857e5135116176365->enter($__internal_0c42bef9f06b44acf5c42dc825c8ed44a0aee14072fef55857e5135116176365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0f46f00b52a745eda2b00bcd6a768c403d4bd88af3037cb7ab6a1856b4ddf5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f46f00b52a745eda2b00bcd6a768c403d4bd88af3037cb7ab6a1856b4ddf5ca->enter($__internal_0f46f00b52a745eda2b00bcd6a768c403d4bd88af3037cb7ab6a1856b4ddf5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c42bef9f06b44acf5c42dc825c8ed44a0aee14072fef55857e5135116176365->leave($__internal_0c42bef9f06b44acf5c42dc825c8ed44a0aee14072fef55857e5135116176365_prof);

        
        $__internal_0f46f00b52a745eda2b00bcd6a768c403d4bd88af3037cb7ab6a1856b4ddf5ca->leave($__internal_0f46f00b52a745eda2b00bcd6a768c403d4bd88af3037cb7ab6a1856b4ddf5ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb9db6a81b7f422421c25840ca2095f5526e6f08c87fd690c5008efeb3ac01f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9db6a81b7f422421c25840ca2095f5526e6f08c87fd690c5008efeb3ac01f1->enter($__internal_bb9db6a81b7f422421c25840ca2095f5526e6f08c87fd690c5008efeb3ac01f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f6e6a19c79b1fb92fc79f6ffaef8b380ade90b1621ea465f9c70b49fbb16f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6e6a19c79b1fb92fc79f6ffaef8b380ade90b1621ea465f9c70b49fbb16f73->enter($__internal_1f6e6a19c79b1fb92fc79f6ffaef8b380ade90b1621ea465f9c70b49fbb16f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f6e6a19c79b1fb92fc79f6ffaef8b380ade90b1621ea465f9c70b49fbb16f73->leave($__internal_1f6e6a19c79b1fb92fc79f6ffaef8b380ade90b1621ea465f9c70b49fbb16f73_prof);

        
        $__internal_bb9db6a81b7f422421c25840ca2095f5526e6f08c87fd690c5008efeb3ac01f1->leave($__internal_bb9db6a81b7f422421c25840ca2095f5526e6f08c87fd690c5008efeb3ac01f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c0b8c30464230dd1ec69965da0c9e3252be41d87f41a014a75b41c10ed81c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0b8c30464230dd1ec69965da0c9e3252be41d87f41a014a75b41c10ed81c89->enter($__internal_9c0b8c30464230dd1ec69965da0c9e3252be41d87f41a014a75b41c10ed81c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b5291dd8880eac6d107d97bb2801262b235189bc15b474d72ba43b605034c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5291dd8880eac6d107d97bb2801262b235189bc15b474d72ba43b605034c7e->enter($__internal_7b5291dd8880eac6d107d97bb2801262b235189bc15b474d72ba43b605034c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b5291dd8880eac6d107d97bb2801262b235189bc15b474d72ba43b605034c7e->leave($__internal_7b5291dd8880eac6d107d97bb2801262b235189bc15b474d72ba43b605034c7e_prof);

        
        $__internal_9c0b8c30464230dd1ec69965da0c9e3252be41d87f41a014a75b41c10ed81c89->leave($__internal_9c0b8c30464230dd1ec69965da0c9e3252be41d87f41a014a75b41c10ed81c89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12d14dcab485a167127fbd52d85f0de75f703f68eeb9c1f3ed134555c1dd9b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d14dcab485a167127fbd52d85f0de75f703f68eeb9c1f3ed134555c1dd9b66->enter($__internal_12d14dcab485a167127fbd52d85f0de75f703f68eeb9c1f3ed134555c1dd9b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f17aed745c5055e7be6be85bba6a42b07032c0aa2ba9ebcfb8fb838aa4057ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17aed745c5055e7be6be85bba6a42b07032c0aa2ba9ebcfb8fb838aa4057ecf->enter($__internal_f17aed745c5055e7be6be85bba6a42b07032c0aa2ba9ebcfb8fb838aa4057ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f17aed745c5055e7be6be85bba6a42b07032c0aa2ba9ebcfb8fb838aa4057ecf->leave($__internal_f17aed745c5055e7be6be85bba6a42b07032c0aa2ba9ebcfb8fb838aa4057ecf_prof);

        
        $__internal_12d14dcab485a167127fbd52d85f0de75f703f68eeb9c1f3ed134555c1dd9b66->leave($__internal_12d14dcab485a167127fbd52d85f0de75f703f68eeb9c1f3ed134555c1dd9b66_prof);

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
