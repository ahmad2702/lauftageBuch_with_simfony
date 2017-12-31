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
        $__internal_6ca3d38f33a425111a7668311f972f8c1e3ab926a47fee96a33094876a05b067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca3d38f33a425111a7668311f972f8c1e3ab926a47fee96a33094876a05b067->enter($__internal_6ca3d38f33a425111a7668311f972f8c1e3ab926a47fee96a33094876a05b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a458366a88286dd17ce1a79302d9525592e8a0b2beee128c3f19961a92979fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a458366a88286dd17ce1a79302d9525592e8a0b2beee128c3f19961a92979fbc->enter($__internal_a458366a88286dd17ce1a79302d9525592e8a0b2beee128c3f19961a92979fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca3d38f33a425111a7668311f972f8c1e3ab926a47fee96a33094876a05b067->leave($__internal_6ca3d38f33a425111a7668311f972f8c1e3ab926a47fee96a33094876a05b067_prof);

        
        $__internal_a458366a88286dd17ce1a79302d9525592e8a0b2beee128c3f19961a92979fbc->leave($__internal_a458366a88286dd17ce1a79302d9525592e8a0b2beee128c3f19961a92979fbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fab1a343581e9c7cfa5c998210b33fa4cc4697b3262812cc0c11a8139639ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fab1a343581e9c7cfa5c998210b33fa4cc4697b3262812cc0c11a8139639ab5->enter($__internal_8fab1a343581e9c7cfa5c998210b33fa4cc4697b3262812cc0c11a8139639ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_efa96bdfece293a074b2526220172337c60ea8f267815e84554dcbdc3b697a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa96bdfece293a074b2526220172337c60ea8f267815e84554dcbdc3b697a11->enter($__internal_efa96bdfece293a074b2526220172337c60ea8f267815e84554dcbdc3b697a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_efa96bdfece293a074b2526220172337c60ea8f267815e84554dcbdc3b697a11->leave($__internal_efa96bdfece293a074b2526220172337c60ea8f267815e84554dcbdc3b697a11_prof);

        
        $__internal_8fab1a343581e9c7cfa5c998210b33fa4cc4697b3262812cc0c11a8139639ab5->leave($__internal_8fab1a343581e9c7cfa5c998210b33fa4cc4697b3262812cc0c11a8139639ab5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e727d6788d0e1304b472278b96c57dfe416cca19c560874e35f0436c8191908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e727d6788d0e1304b472278b96c57dfe416cca19c560874e35f0436c8191908->enter($__internal_5e727d6788d0e1304b472278b96c57dfe416cca19c560874e35f0436c8191908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fd9417af0a3095dfde741ee6362879349bfb4162580508c1f17db3d65ef79b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd9417af0a3095dfde741ee6362879349bfb4162580508c1f17db3d65ef79b3->enter($__internal_2fd9417af0a3095dfde741ee6362879349bfb4162580508c1f17db3d65ef79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fd9417af0a3095dfde741ee6362879349bfb4162580508c1f17db3d65ef79b3->leave($__internal_2fd9417af0a3095dfde741ee6362879349bfb4162580508c1f17db3d65ef79b3_prof);

        
        $__internal_5e727d6788d0e1304b472278b96c57dfe416cca19c560874e35f0436c8191908->leave($__internal_5e727d6788d0e1304b472278b96c57dfe416cca19c560874e35f0436c8191908_prof);

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
