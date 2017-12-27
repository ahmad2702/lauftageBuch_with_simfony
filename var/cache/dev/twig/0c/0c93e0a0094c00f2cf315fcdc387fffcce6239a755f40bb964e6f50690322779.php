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
        $__internal_2384188ecf5fd6c7ce330c2b592433ad7599800c8acb9f403c587241cec2e005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2384188ecf5fd6c7ce330c2b592433ad7599800c8acb9f403c587241cec2e005->enter($__internal_2384188ecf5fd6c7ce330c2b592433ad7599800c8acb9f403c587241cec2e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0347c5bd9ad3818dd96dfada11016eb88c1022d2bbb14b0aa19068e052cd35c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0347c5bd9ad3818dd96dfada11016eb88c1022d2bbb14b0aa19068e052cd35c0->enter($__internal_0347c5bd9ad3818dd96dfada11016eb88c1022d2bbb14b0aa19068e052cd35c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2384188ecf5fd6c7ce330c2b592433ad7599800c8acb9f403c587241cec2e005->leave($__internal_2384188ecf5fd6c7ce330c2b592433ad7599800c8acb9f403c587241cec2e005_prof);

        
        $__internal_0347c5bd9ad3818dd96dfada11016eb88c1022d2bbb14b0aa19068e052cd35c0->leave($__internal_0347c5bd9ad3818dd96dfada11016eb88c1022d2bbb14b0aa19068e052cd35c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24089cac6cd4333cf16f86bdd5eec2aabdcc9ece23e23e86fdd068907b24bf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24089cac6cd4333cf16f86bdd5eec2aabdcc9ece23e23e86fdd068907b24bf18->enter($__internal_24089cac6cd4333cf16f86bdd5eec2aabdcc9ece23e23e86fdd068907b24bf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_763d2c7e27f1ac7e05e830c2cc36efb2db3ef5f7e9a9fd341cee4e7adc955e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763d2c7e27f1ac7e05e830c2cc36efb2db3ef5f7e9a9fd341cee4e7adc955e3e->enter($__internal_763d2c7e27f1ac7e05e830c2cc36efb2db3ef5f7e9a9fd341cee4e7adc955e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_763d2c7e27f1ac7e05e830c2cc36efb2db3ef5f7e9a9fd341cee4e7adc955e3e->leave($__internal_763d2c7e27f1ac7e05e830c2cc36efb2db3ef5f7e9a9fd341cee4e7adc955e3e_prof);

        
        $__internal_24089cac6cd4333cf16f86bdd5eec2aabdcc9ece23e23e86fdd068907b24bf18->leave($__internal_24089cac6cd4333cf16f86bdd5eec2aabdcc9ece23e23e86fdd068907b24bf18_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ef90075db8a7bf6d9be89cd9244bd53b6963ec7e08da3fdd904395fd2fd6b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef90075db8a7bf6d9be89cd9244bd53b6963ec7e08da3fdd904395fd2fd6b7f->enter($__internal_6ef90075db8a7bf6d9be89cd9244bd53b6963ec7e08da3fdd904395fd2fd6b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0fb59e947645ca958d706aad3a29ac69abcbf85c8ffc3a49d077b2f3048860b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb59e947645ca958d706aad3a29ac69abcbf85c8ffc3a49d077b2f3048860b->enter($__internal_e0fb59e947645ca958d706aad3a29ac69abcbf85c8ffc3a49d077b2f3048860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0fb59e947645ca958d706aad3a29ac69abcbf85c8ffc3a49d077b2f3048860b->leave($__internal_e0fb59e947645ca958d706aad3a29ac69abcbf85c8ffc3a49d077b2f3048860b_prof);

        
        $__internal_6ef90075db8a7bf6d9be89cd9244bd53b6963ec7e08da3fdd904395fd2fd6b7f->leave($__internal_6ef90075db8a7bf6d9be89cd9244bd53b6963ec7e08da3fdd904395fd2fd6b7f_prof);

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
