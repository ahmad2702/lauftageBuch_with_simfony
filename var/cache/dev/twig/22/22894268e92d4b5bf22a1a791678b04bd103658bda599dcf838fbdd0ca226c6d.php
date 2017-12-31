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
        $__internal_a7df7c23105250a35b98e4323ff537f3b5d8c5338ee1261290260d806fde929f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7df7c23105250a35b98e4323ff537f3b5d8c5338ee1261290260d806fde929f->enter($__internal_a7df7c23105250a35b98e4323ff537f3b5d8c5338ee1261290260d806fde929f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f22f8dc2ebb23759468ce8cfb98d53851b13f3380461796869281981de39fb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22f8dc2ebb23759468ce8cfb98d53851b13f3380461796869281981de39fb0e->enter($__internal_f22f8dc2ebb23759468ce8cfb98d53851b13f3380461796869281981de39fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7df7c23105250a35b98e4323ff537f3b5d8c5338ee1261290260d806fde929f->leave($__internal_a7df7c23105250a35b98e4323ff537f3b5d8c5338ee1261290260d806fde929f_prof);

        
        $__internal_f22f8dc2ebb23759468ce8cfb98d53851b13f3380461796869281981de39fb0e->leave($__internal_f22f8dc2ebb23759468ce8cfb98d53851b13f3380461796869281981de39fb0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25c535ffa8ac19cd5fca77024802e8212c79b75fb006b824655eccc52448b4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c535ffa8ac19cd5fca77024802e8212c79b75fb006b824655eccc52448b4e3->enter($__internal_25c535ffa8ac19cd5fca77024802e8212c79b75fb006b824655eccc52448b4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9cae2bd58d701c42571a175c7d4480797541e4aef9e8185b67947395c45510d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cae2bd58d701c42571a175c7d4480797541e4aef9e8185b67947395c45510d0->enter($__internal_9cae2bd58d701c42571a175c7d4480797541e4aef9e8185b67947395c45510d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9cae2bd58d701c42571a175c7d4480797541e4aef9e8185b67947395c45510d0->leave($__internal_9cae2bd58d701c42571a175c7d4480797541e4aef9e8185b67947395c45510d0_prof);

        
        $__internal_25c535ffa8ac19cd5fca77024802e8212c79b75fb006b824655eccc52448b4e3->leave($__internal_25c535ffa8ac19cd5fca77024802e8212c79b75fb006b824655eccc52448b4e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_915c2b358fb29c78acdb3ccaeeeffec6847de2c9bff7fb6b40eea6d84ca87340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915c2b358fb29c78acdb3ccaeeeffec6847de2c9bff7fb6b40eea6d84ca87340->enter($__internal_915c2b358fb29c78acdb3ccaeeeffec6847de2c9bff7fb6b40eea6d84ca87340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71e646b5da8197625d885540dc8a38c8e3bd2c80056b522ced336b82bfb078dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e646b5da8197625d885540dc8a38c8e3bd2c80056b522ced336b82bfb078dc->enter($__internal_71e646b5da8197625d885540dc8a38c8e3bd2c80056b522ced336b82bfb078dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_71e646b5da8197625d885540dc8a38c8e3bd2c80056b522ced336b82bfb078dc->leave($__internal_71e646b5da8197625d885540dc8a38c8e3bd2c80056b522ced336b82bfb078dc_prof);

        
        $__internal_915c2b358fb29c78acdb3ccaeeeffec6847de2c9bff7fb6b40eea6d84ca87340->leave($__internal_915c2b358fb29c78acdb3ccaeeeffec6847de2c9bff7fb6b40eea6d84ca87340_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f878ab234487b4ef9cf4933c515c3266ff6e3b2b7954b7c586ba81c0b54062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f878ab234487b4ef9cf4933c515c3266ff6e3b2b7954b7c586ba81c0b54062->enter($__internal_73f878ab234487b4ef9cf4933c515c3266ff6e3b2b7954b7c586ba81c0b54062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c6b943cce559d49aab029a4bd2db139c55e2d332c971acaecf90f0b4ea9f174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6b943cce559d49aab029a4bd2db139c55e2d332c971acaecf90f0b4ea9f174->enter($__internal_5c6b943cce559d49aab029a4bd2db139c55e2d332c971acaecf90f0b4ea9f174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5c6b943cce559d49aab029a4bd2db139c55e2d332c971acaecf90f0b4ea9f174->leave($__internal_5c6b943cce559d49aab029a4bd2db139c55e2d332c971acaecf90f0b4ea9f174_prof);

        
        $__internal_73f878ab234487b4ef9cf4933c515c3266ff6e3b2b7954b7c586ba81c0b54062->leave($__internal_73f878ab234487b4ef9cf4933c515c3266ff6e3b2b7954b7c586ba81c0b54062_prof);

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
