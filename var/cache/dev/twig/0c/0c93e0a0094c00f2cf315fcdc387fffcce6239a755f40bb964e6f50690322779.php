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
        $__internal_053fd43622625d44d40408a1ad11eecd1fb6461dd27b4ea138975abd6e93ed6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053fd43622625d44d40408a1ad11eecd1fb6461dd27b4ea138975abd6e93ed6a->enter($__internal_053fd43622625d44d40408a1ad11eecd1fb6461dd27b4ea138975abd6e93ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1a2ce58c37abed79cb3976a077951725d5c5505c1418306ab1715814d5d4980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2ce58c37abed79cb3976a077951725d5c5505c1418306ab1715814d5d4980c->enter($__internal_1a2ce58c37abed79cb3976a077951725d5c5505c1418306ab1715814d5d4980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053fd43622625d44d40408a1ad11eecd1fb6461dd27b4ea138975abd6e93ed6a->leave($__internal_053fd43622625d44d40408a1ad11eecd1fb6461dd27b4ea138975abd6e93ed6a_prof);

        
        $__internal_1a2ce58c37abed79cb3976a077951725d5c5505c1418306ab1715814d5d4980c->leave($__internal_1a2ce58c37abed79cb3976a077951725d5c5505c1418306ab1715814d5d4980c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b561c6b16bf38021c9bdd5a34d95bd84137fcc44ecc2f166eb3235936c9fe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b561c6b16bf38021c9bdd5a34d95bd84137fcc44ecc2f166eb3235936c9fe41->enter($__internal_6b561c6b16bf38021c9bdd5a34d95bd84137fcc44ecc2f166eb3235936c9fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e814d99aaad6e146752e0b6f65dda27b82ceb954ef54eb1873fc9412db674d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e814d99aaad6e146752e0b6f65dda27b82ceb954ef54eb1873fc9412db674d0->enter($__internal_9e814d99aaad6e146752e0b6f65dda27b82ceb954ef54eb1873fc9412db674d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9e814d99aaad6e146752e0b6f65dda27b82ceb954ef54eb1873fc9412db674d0->leave($__internal_9e814d99aaad6e146752e0b6f65dda27b82ceb954ef54eb1873fc9412db674d0_prof);

        
        $__internal_6b561c6b16bf38021c9bdd5a34d95bd84137fcc44ecc2f166eb3235936c9fe41->leave($__internal_6b561c6b16bf38021c9bdd5a34d95bd84137fcc44ecc2f166eb3235936c9fe41_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb67919390ec99889e97d7020ea6f73930e6dcec7d31ff7871a343021a5c9672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb67919390ec99889e97d7020ea6f73930e6dcec7d31ff7871a343021a5c9672->enter($__internal_eb67919390ec99889e97d7020ea6f73930e6dcec7d31ff7871a343021a5c9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_723d9f1e24242b619305e43988bbaab26b4259ed736025ee6bc19632fe0ca061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723d9f1e24242b619305e43988bbaab26b4259ed736025ee6bc19632fe0ca061->enter($__internal_723d9f1e24242b619305e43988bbaab26b4259ed736025ee6bc19632fe0ca061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_723d9f1e24242b619305e43988bbaab26b4259ed736025ee6bc19632fe0ca061->leave($__internal_723d9f1e24242b619305e43988bbaab26b4259ed736025ee6bc19632fe0ca061_prof);

        
        $__internal_eb67919390ec99889e97d7020ea6f73930e6dcec7d31ff7871a343021a5c9672->leave($__internal_eb67919390ec99889e97d7020ea6f73930e6dcec7d31ff7871a343021a5c9672_prof);

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
