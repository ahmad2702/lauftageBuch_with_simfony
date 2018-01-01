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
        $__internal_9a1d5f8c0f438e8fb76b961f17d90e270b8f7ee99ec20b95d77de49f53b1f162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1d5f8c0f438e8fb76b961f17d90e270b8f7ee99ec20b95d77de49f53b1f162->enter($__internal_9a1d5f8c0f438e8fb76b961f17d90e270b8f7ee99ec20b95d77de49f53b1f162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4fa07649f0cc9f25a51c822ab51b257d4b561df873872d1876699fd70c8d3975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa07649f0cc9f25a51c822ab51b257d4b561df873872d1876699fd70c8d3975->enter($__internal_4fa07649f0cc9f25a51c822ab51b257d4b561df873872d1876699fd70c8d3975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1d5f8c0f438e8fb76b961f17d90e270b8f7ee99ec20b95d77de49f53b1f162->leave($__internal_9a1d5f8c0f438e8fb76b961f17d90e270b8f7ee99ec20b95d77de49f53b1f162_prof);

        
        $__internal_4fa07649f0cc9f25a51c822ab51b257d4b561df873872d1876699fd70c8d3975->leave($__internal_4fa07649f0cc9f25a51c822ab51b257d4b561df873872d1876699fd70c8d3975_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3fa117ceb14d48ffe2f76fe557fd04152d19a2d5eb6e767e985df6f4d1a59d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fa117ceb14d48ffe2f76fe557fd04152d19a2d5eb6e767e985df6f4d1a59d0->enter($__internal_e3fa117ceb14d48ffe2f76fe557fd04152d19a2d5eb6e767e985df6f4d1a59d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24872476b7a0d929810c5d92b215b6af04ecc4eb566f93068314c1f223603422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24872476b7a0d929810c5d92b215b6af04ecc4eb566f93068314c1f223603422->enter($__internal_24872476b7a0d929810c5d92b215b6af04ecc4eb566f93068314c1f223603422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_24872476b7a0d929810c5d92b215b6af04ecc4eb566f93068314c1f223603422->leave($__internal_24872476b7a0d929810c5d92b215b6af04ecc4eb566f93068314c1f223603422_prof);

        
        $__internal_e3fa117ceb14d48ffe2f76fe557fd04152d19a2d5eb6e767e985df6f4d1a59d0->leave($__internal_e3fa117ceb14d48ffe2f76fe557fd04152d19a2d5eb6e767e985df6f4d1a59d0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4797eda9fa4155f0d2189edd3cf70956590fab4d2d0c7e39d4ce38d682787a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4797eda9fa4155f0d2189edd3cf70956590fab4d2d0c7e39d4ce38d682787a34->enter($__internal_4797eda9fa4155f0d2189edd3cf70956590fab4d2d0c7e39d4ce38d682787a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e94e4a9704decc1f9eba615764fa8469cc735141496e2447ff0795377b64c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e94e4a9704decc1f9eba615764fa8469cc735141496e2447ff0795377b64c36->enter($__internal_6e94e4a9704decc1f9eba615764fa8469cc735141496e2447ff0795377b64c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6e94e4a9704decc1f9eba615764fa8469cc735141496e2447ff0795377b64c36->leave($__internal_6e94e4a9704decc1f9eba615764fa8469cc735141496e2447ff0795377b64c36_prof);

        
        $__internal_4797eda9fa4155f0d2189edd3cf70956590fab4d2d0c7e39d4ce38d682787a34->leave($__internal_4797eda9fa4155f0d2189edd3cf70956590fab4d2d0c7e39d4ce38d682787a34_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8c1b0832fc2017897fb8d7ecc9738a8721dbbd09cbeb0836a8d05ea6f90b7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c1b0832fc2017897fb8d7ecc9738a8721dbbd09cbeb0836a8d05ea6f90b7e9->enter($__internal_a8c1b0832fc2017897fb8d7ecc9738a8721dbbd09cbeb0836a8d05ea6f90b7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_521ef7b80c52eb3e471e9b1ec472415179204dcb3b923ec339bc76aa9205a77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521ef7b80c52eb3e471e9b1ec472415179204dcb3b923ec339bc76aa9205a77d->enter($__internal_521ef7b80c52eb3e471e9b1ec472415179204dcb3b923ec339bc76aa9205a77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_521ef7b80c52eb3e471e9b1ec472415179204dcb3b923ec339bc76aa9205a77d->leave($__internal_521ef7b80c52eb3e471e9b1ec472415179204dcb3b923ec339bc76aa9205a77d_prof);

        
        $__internal_a8c1b0832fc2017897fb8d7ecc9738a8721dbbd09cbeb0836a8d05ea6f90b7e9->leave($__internal_a8c1b0832fc2017897fb8d7ecc9738a8721dbbd09cbeb0836a8d05ea6f90b7e9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
