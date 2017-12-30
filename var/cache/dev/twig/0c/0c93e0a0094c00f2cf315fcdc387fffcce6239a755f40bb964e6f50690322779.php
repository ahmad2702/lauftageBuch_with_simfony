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
        $__internal_133521ddfa274b7476fd0a555e137efa128006582e91befe8ce61f19058b66a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133521ddfa274b7476fd0a555e137efa128006582e91befe8ce61f19058b66a6->enter($__internal_133521ddfa274b7476fd0a555e137efa128006582e91befe8ce61f19058b66a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6cc67d06b5079140e9d6d712e749c4520edf574fac2c02fa3b81b8554bd36770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc67d06b5079140e9d6d712e749c4520edf574fac2c02fa3b81b8554bd36770->enter($__internal_6cc67d06b5079140e9d6d712e749c4520edf574fac2c02fa3b81b8554bd36770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133521ddfa274b7476fd0a555e137efa128006582e91befe8ce61f19058b66a6->leave($__internal_133521ddfa274b7476fd0a555e137efa128006582e91befe8ce61f19058b66a6_prof);

        
        $__internal_6cc67d06b5079140e9d6d712e749c4520edf574fac2c02fa3b81b8554bd36770->leave($__internal_6cc67d06b5079140e9d6d712e749c4520edf574fac2c02fa3b81b8554bd36770_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b46dceacdd182c78240b7503de2dcf84e5a386d1e535a3e6a1e0fd1829aaaf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46dceacdd182c78240b7503de2dcf84e5a386d1e535a3e6a1e0fd1829aaaf44->enter($__internal_b46dceacdd182c78240b7503de2dcf84e5a386d1e535a3e6a1e0fd1829aaaf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91b18c658165e8ac3f3c8995cbdf8787b0bb61dc75dabb2e02a09a1e0afc8c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b18c658165e8ac3f3c8995cbdf8787b0bb61dc75dabb2e02a09a1e0afc8c45->enter($__internal_91b18c658165e8ac3f3c8995cbdf8787b0bb61dc75dabb2e02a09a1e0afc8c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_91b18c658165e8ac3f3c8995cbdf8787b0bb61dc75dabb2e02a09a1e0afc8c45->leave($__internal_91b18c658165e8ac3f3c8995cbdf8787b0bb61dc75dabb2e02a09a1e0afc8c45_prof);

        
        $__internal_b46dceacdd182c78240b7503de2dcf84e5a386d1e535a3e6a1e0fd1829aaaf44->leave($__internal_b46dceacdd182c78240b7503de2dcf84e5a386d1e535a3e6a1e0fd1829aaaf44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06ee184ab4338e39057db86d27b988907c2c9fd65f6c66f0c6c13d43500877e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ee184ab4338e39057db86d27b988907c2c9fd65f6c66f0c6c13d43500877e6->enter($__internal_06ee184ab4338e39057db86d27b988907c2c9fd65f6c66f0c6c13d43500877e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_402056b80a062b14b7ab0251390314566de1819d47b71c3b4ed8dfa7cd839726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402056b80a062b14b7ab0251390314566de1819d47b71c3b4ed8dfa7cd839726->enter($__internal_402056b80a062b14b7ab0251390314566de1819d47b71c3b4ed8dfa7cd839726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_402056b80a062b14b7ab0251390314566de1819d47b71c3b4ed8dfa7cd839726->leave($__internal_402056b80a062b14b7ab0251390314566de1819d47b71c3b4ed8dfa7cd839726_prof);

        
        $__internal_06ee184ab4338e39057db86d27b988907c2c9fd65f6c66f0c6c13d43500877e6->leave($__internal_06ee184ab4338e39057db86d27b988907c2c9fd65f6c66f0c6c13d43500877e6_prof);

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
