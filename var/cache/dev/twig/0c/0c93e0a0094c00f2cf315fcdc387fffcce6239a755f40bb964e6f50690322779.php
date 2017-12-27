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
        $__internal_a215d8986d25f13f7f05e45962161cf44c899ff46cedca423b23e2b6fa42f12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a215d8986d25f13f7f05e45962161cf44c899ff46cedca423b23e2b6fa42f12e->enter($__internal_a215d8986d25f13f7f05e45962161cf44c899ff46cedca423b23e2b6fa42f12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_41e13897fa6a7de0cf61b63b79e81bb8d95cb49f73814d0728095703aea39015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e13897fa6a7de0cf61b63b79e81bb8d95cb49f73814d0728095703aea39015->enter($__internal_41e13897fa6a7de0cf61b63b79e81bb8d95cb49f73814d0728095703aea39015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a215d8986d25f13f7f05e45962161cf44c899ff46cedca423b23e2b6fa42f12e->leave($__internal_a215d8986d25f13f7f05e45962161cf44c899ff46cedca423b23e2b6fa42f12e_prof);

        
        $__internal_41e13897fa6a7de0cf61b63b79e81bb8d95cb49f73814d0728095703aea39015->leave($__internal_41e13897fa6a7de0cf61b63b79e81bb8d95cb49f73814d0728095703aea39015_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19bdb8b03bf63c818a1c5dcc020a2cfdf12a6ee47517fea1a77549f2e23263f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bdb8b03bf63c818a1c5dcc020a2cfdf12a6ee47517fea1a77549f2e23263f7->enter($__internal_19bdb8b03bf63c818a1c5dcc020a2cfdf12a6ee47517fea1a77549f2e23263f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad3eb128796f3a322c813e81a573efd83c686a8ee04b40e51b75a3fc0afe0be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3eb128796f3a322c813e81a573efd83c686a8ee04b40e51b75a3fc0afe0be0->enter($__internal_ad3eb128796f3a322c813e81a573efd83c686a8ee04b40e51b75a3fc0afe0be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ad3eb128796f3a322c813e81a573efd83c686a8ee04b40e51b75a3fc0afe0be0->leave($__internal_ad3eb128796f3a322c813e81a573efd83c686a8ee04b40e51b75a3fc0afe0be0_prof);

        
        $__internal_19bdb8b03bf63c818a1c5dcc020a2cfdf12a6ee47517fea1a77549f2e23263f7->leave($__internal_19bdb8b03bf63c818a1c5dcc020a2cfdf12a6ee47517fea1a77549f2e23263f7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60500475d660fd71f6b485e9a094a632ddbd5bb24f8a9782898e904a846adaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60500475d660fd71f6b485e9a094a632ddbd5bb24f8a9782898e904a846adaca->enter($__internal_60500475d660fd71f6b485e9a094a632ddbd5bb24f8a9782898e904a846adaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2272397f8bb84fff0b78089fcc77fc48d6704a445f619f567742469c5137d407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2272397f8bb84fff0b78089fcc77fc48d6704a445f619f567742469c5137d407->enter($__internal_2272397f8bb84fff0b78089fcc77fc48d6704a445f619f567742469c5137d407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2272397f8bb84fff0b78089fcc77fc48d6704a445f619f567742469c5137d407->leave($__internal_2272397f8bb84fff0b78089fcc77fc48d6704a445f619f567742469c5137d407_prof);

        
        $__internal_60500475d660fd71f6b485e9a094a632ddbd5bb24f8a9782898e904a846adaca->leave($__internal_60500475d660fd71f6b485e9a094a632ddbd5bb24f8a9782898e904a846adaca_prof);

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
