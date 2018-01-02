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
        $__internal_043a89a924907dd00c728d2a462191c059c547808129c4c261909e7970f97411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043a89a924907dd00c728d2a462191c059c547808129c4c261909e7970f97411->enter($__internal_043a89a924907dd00c728d2a462191c059c547808129c4c261909e7970f97411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ac9f3a1fe542e50fc4b55363c44a85419b1cd1afccf6074aad14147612778a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9f3a1fe542e50fc4b55363c44a85419b1cd1afccf6074aad14147612778a3e->enter($__internal_ac9f3a1fe542e50fc4b55363c44a85419b1cd1afccf6074aad14147612778a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043a89a924907dd00c728d2a462191c059c547808129c4c261909e7970f97411->leave($__internal_043a89a924907dd00c728d2a462191c059c547808129c4c261909e7970f97411_prof);

        
        $__internal_ac9f3a1fe542e50fc4b55363c44a85419b1cd1afccf6074aad14147612778a3e->leave($__internal_ac9f3a1fe542e50fc4b55363c44a85419b1cd1afccf6074aad14147612778a3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b51cabc0e044985f97ae80668621df5b66b1a3b24c61fbe883c9e4da65d554de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51cabc0e044985f97ae80668621df5b66b1a3b24c61fbe883c9e4da65d554de->enter($__internal_b51cabc0e044985f97ae80668621df5b66b1a3b24c61fbe883c9e4da65d554de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b1c2cb4b5613e16722bacaf890d3832969ad9809f774f2c0f64d4f6f60bcebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1c2cb4b5613e16722bacaf890d3832969ad9809f774f2c0f64d4f6f60bcebf->enter($__internal_6b1c2cb4b5613e16722bacaf890d3832969ad9809f774f2c0f64d4f6f60bcebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6b1c2cb4b5613e16722bacaf890d3832969ad9809f774f2c0f64d4f6f60bcebf->leave($__internal_6b1c2cb4b5613e16722bacaf890d3832969ad9809f774f2c0f64d4f6f60bcebf_prof);

        
        $__internal_b51cabc0e044985f97ae80668621df5b66b1a3b24c61fbe883c9e4da65d554de->leave($__internal_b51cabc0e044985f97ae80668621df5b66b1a3b24c61fbe883c9e4da65d554de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_675bf095d7a6835ad927220032264d4063828594486558d01fd12c176fd7a6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675bf095d7a6835ad927220032264d4063828594486558d01fd12c176fd7a6bb->enter($__internal_675bf095d7a6835ad927220032264d4063828594486558d01fd12c176fd7a6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_077ec97779603b57966062e33a5e3a336d00a37ebaaef96855bd21b33c30ac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077ec97779603b57966062e33a5e3a336d00a37ebaaef96855bd21b33c30ac08->enter($__internal_077ec97779603b57966062e33a5e3a336d00a37ebaaef96855bd21b33c30ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_077ec97779603b57966062e33a5e3a336d00a37ebaaef96855bd21b33c30ac08->leave($__internal_077ec97779603b57966062e33a5e3a336d00a37ebaaef96855bd21b33c30ac08_prof);

        
        $__internal_675bf095d7a6835ad927220032264d4063828594486558d01fd12c176fd7a6bb->leave($__internal_675bf095d7a6835ad927220032264d4063828594486558d01fd12c176fd7a6bb_prof);

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
