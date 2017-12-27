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
        $__internal_1d543805caed7b675a9beeb01d1aa564700878dd3ad1b3b1d73aa3ccca586b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d543805caed7b675a9beeb01d1aa564700878dd3ad1b3b1d73aa3ccca586b98->enter($__internal_1d543805caed7b675a9beeb01d1aa564700878dd3ad1b3b1d73aa3ccca586b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cea73df333cdf7f2d4c1a993f6fef03851b23191ffd8698b385bb53a625a2de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea73df333cdf7f2d4c1a993f6fef03851b23191ffd8698b385bb53a625a2de2->enter($__internal_cea73df333cdf7f2d4c1a993f6fef03851b23191ffd8698b385bb53a625a2de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d543805caed7b675a9beeb01d1aa564700878dd3ad1b3b1d73aa3ccca586b98->leave($__internal_1d543805caed7b675a9beeb01d1aa564700878dd3ad1b3b1d73aa3ccca586b98_prof);

        
        $__internal_cea73df333cdf7f2d4c1a993f6fef03851b23191ffd8698b385bb53a625a2de2->leave($__internal_cea73df333cdf7f2d4c1a993f6fef03851b23191ffd8698b385bb53a625a2de2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b023839b410ab17fb60322453c3ae9ee5254694cf2571c5aa41e3993910a5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b023839b410ab17fb60322453c3ae9ee5254694cf2571c5aa41e3993910a5b3->enter($__internal_4b023839b410ab17fb60322453c3ae9ee5254694cf2571c5aa41e3993910a5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54a5967032cce1964673facde9e8ea6ff82b8c5432f0e213170555570f706f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a5967032cce1964673facde9e8ea6ff82b8c5432f0e213170555570f706f16->enter($__internal_54a5967032cce1964673facde9e8ea6ff82b8c5432f0e213170555570f706f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_54a5967032cce1964673facde9e8ea6ff82b8c5432f0e213170555570f706f16->leave($__internal_54a5967032cce1964673facde9e8ea6ff82b8c5432f0e213170555570f706f16_prof);

        
        $__internal_4b023839b410ab17fb60322453c3ae9ee5254694cf2571c5aa41e3993910a5b3->leave($__internal_4b023839b410ab17fb60322453c3ae9ee5254694cf2571c5aa41e3993910a5b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_03b2c4e2a59d3c2d428140614a66e2088999de752bcf14325cc75890bb8efe03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b2c4e2a59d3c2d428140614a66e2088999de752bcf14325cc75890bb8efe03->enter($__internal_03b2c4e2a59d3c2d428140614a66e2088999de752bcf14325cc75890bb8efe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e48df831dca59db346f80f3c1aa14f67b686889a4c078d1a143851031871381e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48df831dca59db346f80f3c1aa14f67b686889a4c078d1a143851031871381e->enter($__internal_e48df831dca59db346f80f3c1aa14f67b686889a4c078d1a143851031871381e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e48df831dca59db346f80f3c1aa14f67b686889a4c078d1a143851031871381e->leave($__internal_e48df831dca59db346f80f3c1aa14f67b686889a4c078d1a143851031871381e_prof);

        
        $__internal_03b2c4e2a59d3c2d428140614a66e2088999de752bcf14325cc75890bb8efe03->leave($__internal_03b2c4e2a59d3c2d428140614a66e2088999de752bcf14325cc75890bb8efe03_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
