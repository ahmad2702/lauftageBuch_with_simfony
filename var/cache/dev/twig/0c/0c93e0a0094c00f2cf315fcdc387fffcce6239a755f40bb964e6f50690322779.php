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
        $__internal_19f76687ccee7978413e744b83693bb49d730382b8c64f48b6208e020b0e210d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f76687ccee7978413e744b83693bb49d730382b8c64f48b6208e020b0e210d->enter($__internal_19f76687ccee7978413e744b83693bb49d730382b8c64f48b6208e020b0e210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_42c32752e5dd687a5ba8b38648b2565bbb6dd75a8b6e212e2ae8bd280a21f5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c32752e5dd687a5ba8b38648b2565bbb6dd75a8b6e212e2ae8bd280a21f5f0->enter($__internal_42c32752e5dd687a5ba8b38648b2565bbb6dd75a8b6e212e2ae8bd280a21f5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f76687ccee7978413e744b83693bb49d730382b8c64f48b6208e020b0e210d->leave($__internal_19f76687ccee7978413e744b83693bb49d730382b8c64f48b6208e020b0e210d_prof);

        
        $__internal_42c32752e5dd687a5ba8b38648b2565bbb6dd75a8b6e212e2ae8bd280a21f5f0->leave($__internal_42c32752e5dd687a5ba8b38648b2565bbb6dd75a8b6e212e2ae8bd280a21f5f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd8b2fda0a03cee442e89b8c17294608757598e88fe126891df7ceb52347ea32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8b2fda0a03cee442e89b8c17294608757598e88fe126891df7ceb52347ea32->enter($__internal_cd8b2fda0a03cee442e89b8c17294608757598e88fe126891df7ceb52347ea32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_482c369299222850580a1167844a3729c994a9117f70ea1f62330a8f27a83dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482c369299222850580a1167844a3729c994a9117f70ea1f62330a8f27a83dc5->enter($__internal_482c369299222850580a1167844a3729c994a9117f70ea1f62330a8f27a83dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_482c369299222850580a1167844a3729c994a9117f70ea1f62330a8f27a83dc5->leave($__internal_482c369299222850580a1167844a3729c994a9117f70ea1f62330a8f27a83dc5_prof);

        
        $__internal_cd8b2fda0a03cee442e89b8c17294608757598e88fe126891df7ceb52347ea32->leave($__internal_cd8b2fda0a03cee442e89b8c17294608757598e88fe126891df7ceb52347ea32_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c9cbd2af33f24a6c4c09ac44f00c266b506fa8a25bda85e1ce883afd30f275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c9cbd2af33f24a6c4c09ac44f00c266b506fa8a25bda85e1ce883afd30f275->enter($__internal_f7c9cbd2af33f24a6c4c09ac44f00c266b506fa8a25bda85e1ce883afd30f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba4393b2cac150c1bf0bd7252398630ec1d42a904f77d67a443ec723460a6300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4393b2cac150c1bf0bd7252398630ec1d42a904f77d67a443ec723460a6300->enter($__internal_ba4393b2cac150c1bf0bd7252398630ec1d42a904f77d67a443ec723460a6300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba4393b2cac150c1bf0bd7252398630ec1d42a904f77d67a443ec723460a6300->leave($__internal_ba4393b2cac150c1bf0bd7252398630ec1d42a904f77d67a443ec723460a6300_prof);

        
        $__internal_f7c9cbd2af33f24a6c4c09ac44f00c266b506fa8a25bda85e1ce883afd30f275->leave($__internal_f7c9cbd2af33f24a6c4c09ac44f00c266b506fa8a25bda85e1ce883afd30f275_prof);

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
