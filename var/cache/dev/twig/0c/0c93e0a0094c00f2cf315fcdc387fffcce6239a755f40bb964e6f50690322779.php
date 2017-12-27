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
        $__internal_8cd679187cfad91a4eb50222d1aab36cffd2ed63238c484da0192a1ca819ddca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd679187cfad91a4eb50222d1aab36cffd2ed63238c484da0192a1ca819ddca->enter($__internal_8cd679187cfad91a4eb50222d1aab36cffd2ed63238c484da0192a1ca819ddca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_01cbd6dffd8b7239ebfa28ea95ffa629e10d53df46f7de22427623922f38cb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cbd6dffd8b7239ebfa28ea95ffa629e10d53df46f7de22427623922f38cb78->enter($__internal_01cbd6dffd8b7239ebfa28ea95ffa629e10d53df46f7de22427623922f38cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd679187cfad91a4eb50222d1aab36cffd2ed63238c484da0192a1ca819ddca->leave($__internal_8cd679187cfad91a4eb50222d1aab36cffd2ed63238c484da0192a1ca819ddca_prof);

        
        $__internal_01cbd6dffd8b7239ebfa28ea95ffa629e10d53df46f7de22427623922f38cb78->leave($__internal_01cbd6dffd8b7239ebfa28ea95ffa629e10d53df46f7de22427623922f38cb78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b38fd777902ce3def6fd0010cee0be4d6b665d499138f38ebd90f18af294dd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38fd777902ce3def6fd0010cee0be4d6b665d499138f38ebd90f18af294dd4b->enter($__internal_b38fd777902ce3def6fd0010cee0be4d6b665d499138f38ebd90f18af294dd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31828013a14eb477f4283053d6775d3d792ddd1b99bccaae37135e874de3cdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31828013a14eb477f4283053d6775d3d792ddd1b99bccaae37135e874de3cdee->enter($__internal_31828013a14eb477f4283053d6775d3d792ddd1b99bccaae37135e874de3cdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_31828013a14eb477f4283053d6775d3d792ddd1b99bccaae37135e874de3cdee->leave($__internal_31828013a14eb477f4283053d6775d3d792ddd1b99bccaae37135e874de3cdee_prof);

        
        $__internal_b38fd777902ce3def6fd0010cee0be4d6b665d499138f38ebd90f18af294dd4b->leave($__internal_b38fd777902ce3def6fd0010cee0be4d6b665d499138f38ebd90f18af294dd4b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed830857848387d1836d09595dc84ddabea7cd4dc442b974e9d0581fc87df787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed830857848387d1836d09595dc84ddabea7cd4dc442b974e9d0581fc87df787->enter($__internal_ed830857848387d1836d09595dc84ddabea7cd4dc442b974e9d0581fc87df787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a55307e7985a7f8dd1ef401d0fa2d210d0f929fa3b7d3a1eaae62c6bceff353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a55307e7985a7f8dd1ef401d0fa2d210d0f929fa3b7d3a1eaae62c6bceff353->enter($__internal_1a55307e7985a7f8dd1ef401d0fa2d210d0f929fa3b7d3a1eaae62c6bceff353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a55307e7985a7f8dd1ef401d0fa2d210d0f929fa3b7d3a1eaae62c6bceff353->leave($__internal_1a55307e7985a7f8dd1ef401d0fa2d210d0f929fa3b7d3a1eaae62c6bceff353_prof);

        
        $__internal_ed830857848387d1836d09595dc84ddabea7cd4dc442b974e9d0581fc87df787->leave($__internal_ed830857848387d1836d09595dc84ddabea7cd4dc442b974e9d0581fc87df787_prof);

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
