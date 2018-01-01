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
        $__internal_315d5a4ebc95f538df6d7c0314a8de4a6b96c998051286d10dacbc2a72bec2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315d5a4ebc95f538df6d7c0314a8de4a6b96c998051286d10dacbc2a72bec2c5->enter($__internal_315d5a4ebc95f538df6d7c0314a8de4a6b96c998051286d10dacbc2a72bec2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e5b2748cec68a35a3dcc2a73d35f5dfc53de5fd879fe1faf7892ab113ce943b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b2748cec68a35a3dcc2a73d35f5dfc53de5fd879fe1faf7892ab113ce943b1->enter($__internal_e5b2748cec68a35a3dcc2a73d35f5dfc53de5fd879fe1faf7892ab113ce943b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315d5a4ebc95f538df6d7c0314a8de4a6b96c998051286d10dacbc2a72bec2c5->leave($__internal_315d5a4ebc95f538df6d7c0314a8de4a6b96c998051286d10dacbc2a72bec2c5_prof);

        
        $__internal_e5b2748cec68a35a3dcc2a73d35f5dfc53de5fd879fe1faf7892ab113ce943b1->leave($__internal_e5b2748cec68a35a3dcc2a73d35f5dfc53de5fd879fe1faf7892ab113ce943b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81bf899d32b068d6d352e84142f94d50117854a8971daf702c9a9d17363adb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bf899d32b068d6d352e84142f94d50117854a8971daf702c9a9d17363adb88->enter($__internal_81bf899d32b068d6d352e84142f94d50117854a8971daf702c9a9d17363adb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66ff9375829d6d28545cfb238b521c502214ec60272f0070f71cf9c49a0f27a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ff9375829d6d28545cfb238b521c502214ec60272f0070f71cf9c49a0f27a0->enter($__internal_66ff9375829d6d28545cfb238b521c502214ec60272f0070f71cf9c49a0f27a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_66ff9375829d6d28545cfb238b521c502214ec60272f0070f71cf9c49a0f27a0->leave($__internal_66ff9375829d6d28545cfb238b521c502214ec60272f0070f71cf9c49a0f27a0_prof);

        
        $__internal_81bf899d32b068d6d352e84142f94d50117854a8971daf702c9a9d17363adb88->leave($__internal_81bf899d32b068d6d352e84142f94d50117854a8971daf702c9a9d17363adb88_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee91dbf0132126d5df3bdaeb8d8c8798df123007b8b588d9dcd2a9a386a8418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee91dbf0132126d5df3bdaeb8d8c8798df123007b8b588d9dcd2a9a386a8418->enter($__internal_3ee91dbf0132126d5df3bdaeb8d8c8798df123007b8b588d9dcd2a9a386a8418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7d940665381774358b90ec4ece5dfdd79a809c4ca8702b3fa3708528843139a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d940665381774358b90ec4ece5dfdd79a809c4ca8702b3fa3708528843139a->enter($__internal_f7d940665381774358b90ec4ece5dfdd79a809c4ca8702b3fa3708528843139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7d940665381774358b90ec4ece5dfdd79a809c4ca8702b3fa3708528843139a->leave($__internal_f7d940665381774358b90ec4ece5dfdd79a809c4ca8702b3fa3708528843139a_prof);

        
        $__internal_3ee91dbf0132126d5df3bdaeb8d8c8798df123007b8b588d9dcd2a9a386a8418->leave($__internal_3ee91dbf0132126d5df3bdaeb8d8c8798df123007b8b588d9dcd2a9a386a8418_prof);

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
