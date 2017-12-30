<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5a2bde0c62848c5ac96bff84fdce9d68fdf55a38fb03f5c896d959b9a0676520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e3b481321007cd6d32bf332469c841ec94e6906979c4cc395b4b70397a6870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3b481321007cd6d32bf332469c841ec94e6906979c4cc395b4b70397a6870b->enter($__internal_1e3b481321007cd6d32bf332469c841ec94e6906979c4cc395b4b70397a6870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d593ac5044b9504a522603bec1d237570abcdd4ef39c215bdfbcd97ed403e772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d593ac5044b9504a522603bec1d237570abcdd4ef39c215bdfbcd97ed403e772->enter($__internal_d593ac5044b9504a522603bec1d237570abcdd4ef39c215bdfbcd97ed403e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e3b481321007cd6d32bf332469c841ec94e6906979c4cc395b4b70397a6870b->leave($__internal_1e3b481321007cd6d32bf332469c841ec94e6906979c4cc395b4b70397a6870b_prof);

        
        $__internal_d593ac5044b9504a522603bec1d237570abcdd4ef39c215bdfbcd97ed403e772->leave($__internal_d593ac5044b9504a522603bec1d237570abcdd4ef39c215bdfbcd97ed403e772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49189e7074b52bc8314209c41c68d00b539e1f3d640b60ac48c1fd8ff2109e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49189e7074b52bc8314209c41c68d00b539e1f3d640b60ac48c1fd8ff2109e9c->enter($__internal_49189e7074b52bc8314209c41c68d00b539e1f3d640b60ac48c1fd8ff2109e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c621f2334541e106800b90385d7569a26e3167634bd3994bf79b98cf48784e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c621f2334541e106800b90385d7569a26e3167634bd3994bf79b98cf48784e21->enter($__internal_c621f2334541e106800b90385d7569a26e3167634bd3994bf79b98cf48784e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c621f2334541e106800b90385d7569a26e3167634bd3994bf79b98cf48784e21->leave($__internal_c621f2334541e106800b90385d7569a26e3167634bd3994bf79b98cf48784e21_prof);

        
        $__internal_49189e7074b52bc8314209c41c68d00b539e1f3d640b60ac48c1fd8ff2109e9c->leave($__internal_49189e7074b52bc8314209c41c68d00b539e1f3d640b60ac48c1fd8ff2109e9c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_566dd030fc9cb8f02feb5c89e0ef873a2c4a177b9099bdee36749542f44e4398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566dd030fc9cb8f02feb5c89e0ef873a2c4a177b9099bdee36749542f44e4398->enter($__internal_566dd030fc9cb8f02feb5c89e0ef873a2c4a177b9099bdee36749542f44e4398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d476f9f747f3ba1d41693debbf9e6a3473c00289ddb3bed5007fa0ef73a28b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d476f9f747f3ba1d41693debbf9e6a3473c00289ddb3bed5007fa0ef73a28b00->enter($__internal_d476f9f747f3ba1d41693debbf9e6a3473c00289ddb3bed5007fa0ef73a28b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d476f9f747f3ba1d41693debbf9e6a3473c00289ddb3bed5007fa0ef73a28b00->leave($__internal_d476f9f747f3ba1d41693debbf9e6a3473c00289ddb3bed5007fa0ef73a28b00_prof);

        
        $__internal_566dd030fc9cb8f02feb5c89e0ef873a2c4a177b9099bdee36749542f44e4398->leave($__internal_566dd030fc9cb8f02feb5c89e0ef873a2c4a177b9099bdee36749542f44e4398_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ea74702f2ce83bc1915181d41b478d1894a5556996e970f4b9f7eb1e1093259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea74702f2ce83bc1915181d41b478d1894a5556996e970f4b9f7eb1e1093259->enter($__internal_4ea74702f2ce83bc1915181d41b478d1894a5556996e970f4b9f7eb1e1093259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac1788e47b7e726040fc400039fe3a91517fb86f79272951d3f77ea65b36f14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1788e47b7e726040fc400039fe3a91517fb86f79272951d3f77ea65b36f14a->enter($__internal_ac1788e47b7e726040fc400039fe3a91517fb86f79272951d3f77ea65b36f14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ac1788e47b7e726040fc400039fe3a91517fb86f79272951d3f77ea65b36f14a->leave($__internal_ac1788e47b7e726040fc400039fe3a91517fb86f79272951d3f77ea65b36f14a_prof);

        
        $__internal_4ea74702f2ce83bc1915181d41b478d1894a5556996e970f4b9f7eb1e1093259->leave($__internal_4ea74702f2ce83bc1915181d41b478d1894a5556996e970f4b9f7eb1e1093259_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
