<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d88dc0f7bef61a568700a77752870c44d33f71e7ba7818fc0bdf790f3597c4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5460678ec50275fa7fe655a1606f50d2f8ab7c0e8414ba0c645da45864d2711d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5460678ec50275fa7fe655a1606f50d2f8ab7c0e8414ba0c645da45864d2711d->enter($__internal_5460678ec50275fa7fe655a1606f50d2f8ab7c0e8414ba0c645da45864d2711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f56bb2134b0139653eb09b63db4683f78847a2682dc53b53955cbe03db7b4a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56bb2134b0139653eb09b63db4683f78847a2682dc53b53955cbe03db7b4a0a->enter($__internal_f56bb2134b0139653eb09b63db4683f78847a2682dc53b53955cbe03db7b4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5460678ec50275fa7fe655a1606f50d2f8ab7c0e8414ba0c645da45864d2711d->leave($__internal_5460678ec50275fa7fe655a1606f50d2f8ab7c0e8414ba0c645da45864d2711d_prof);

        
        $__internal_f56bb2134b0139653eb09b63db4683f78847a2682dc53b53955cbe03db7b4a0a->leave($__internal_f56bb2134b0139653eb09b63db4683f78847a2682dc53b53955cbe03db7b4a0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b09335a2dd53471163430fa4ba61bfaf8740d390d9056ed8a96b20e1b929710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b09335a2dd53471163430fa4ba61bfaf8740d390d9056ed8a96b20e1b929710->enter($__internal_7b09335a2dd53471163430fa4ba61bfaf8740d390d9056ed8a96b20e1b929710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_252f5ecd52f5a509e074a7ea53e74524d2f105fdcc5369ba91d07f5a6cf99ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252f5ecd52f5a509e074a7ea53e74524d2f105fdcc5369ba91d07f5a6cf99ea7->enter($__internal_252f5ecd52f5a509e074a7ea53e74524d2f105fdcc5369ba91d07f5a6cf99ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_252f5ecd52f5a509e074a7ea53e74524d2f105fdcc5369ba91d07f5a6cf99ea7->leave($__internal_252f5ecd52f5a509e074a7ea53e74524d2f105fdcc5369ba91d07f5a6cf99ea7_prof);

        
        $__internal_7b09335a2dd53471163430fa4ba61bfaf8740d390d9056ed8a96b20e1b929710->leave($__internal_7b09335a2dd53471163430fa4ba61bfaf8740d390d9056ed8a96b20e1b929710_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0c3b3e3788066ec86517a5dbd6b13b903d1196cec8d77ad1bf2105d459e4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0c3b3e3788066ec86517a5dbd6b13b903d1196cec8d77ad1bf2105d459e4ce->enter($__internal_6b0c3b3e3788066ec86517a5dbd6b13b903d1196cec8d77ad1bf2105d459e4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ce42193b6e4d09f8b573d87fbab09de2118cff0419c30da2103190600ba26b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce42193b6e4d09f8b573d87fbab09de2118cff0419c30da2103190600ba26b4->enter($__internal_6ce42193b6e4d09f8b573d87fbab09de2118cff0419c30da2103190600ba26b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_6ce42193b6e4d09f8b573d87fbab09de2118cff0419c30da2103190600ba26b4->leave($__internal_6ce42193b6e4d09f8b573d87fbab09de2118cff0419c30da2103190600ba26b4_prof);

        
        $__internal_6b0c3b3e3788066ec86517a5dbd6b13b903d1196cec8d77ad1bf2105d459e4ce->leave($__internal_6b0c3b3e3788066ec86517a5dbd6b13b903d1196cec8d77ad1bf2105d459e4ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
