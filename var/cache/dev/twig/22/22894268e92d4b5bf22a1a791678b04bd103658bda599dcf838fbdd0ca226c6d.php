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
        $__internal_62646020029c5d14d38879e8a333a30c30fa7e83b7738db68eb663d79fe09f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62646020029c5d14d38879e8a333a30c30fa7e83b7738db68eb663d79fe09f01->enter($__internal_62646020029c5d14d38879e8a333a30c30fa7e83b7738db68eb663d79fe09f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3bbf404d48fd82cd4631614949b48b3823124516766ad662aef7f4e656e6d097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbf404d48fd82cd4631614949b48b3823124516766ad662aef7f4e656e6d097->enter($__internal_3bbf404d48fd82cd4631614949b48b3823124516766ad662aef7f4e656e6d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62646020029c5d14d38879e8a333a30c30fa7e83b7738db68eb663d79fe09f01->leave($__internal_62646020029c5d14d38879e8a333a30c30fa7e83b7738db68eb663d79fe09f01_prof);

        
        $__internal_3bbf404d48fd82cd4631614949b48b3823124516766ad662aef7f4e656e6d097->leave($__internal_3bbf404d48fd82cd4631614949b48b3823124516766ad662aef7f4e656e6d097_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3b3b4ae99ae57c27edb0692d98c2ede6a88ea336606e243effce5d3e710c03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b3b4ae99ae57c27edb0692d98c2ede6a88ea336606e243effce5d3e710c03e->enter($__internal_f3b3b4ae99ae57c27edb0692d98c2ede6a88ea336606e243effce5d3e710c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65151e8b92a89e1286ac0581f8e19442f918b32eeea4d7145fe84d1efdfdf3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65151e8b92a89e1286ac0581f8e19442f918b32eeea4d7145fe84d1efdfdf3e9->enter($__internal_65151e8b92a89e1286ac0581f8e19442f918b32eeea4d7145fe84d1efdfdf3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_65151e8b92a89e1286ac0581f8e19442f918b32eeea4d7145fe84d1efdfdf3e9->leave($__internal_65151e8b92a89e1286ac0581f8e19442f918b32eeea4d7145fe84d1efdfdf3e9_prof);

        
        $__internal_f3b3b4ae99ae57c27edb0692d98c2ede6a88ea336606e243effce5d3e710c03e->leave($__internal_f3b3b4ae99ae57c27edb0692d98c2ede6a88ea336606e243effce5d3e710c03e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b1468484a12981ae15181913be2783a5e8158f6d2f226429c89955d5063f201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1468484a12981ae15181913be2783a5e8158f6d2f226429c89955d5063f201->enter($__internal_3b1468484a12981ae15181913be2783a5e8158f6d2f226429c89955d5063f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_db6cd549b762e2e1afc954595bf7112e9a94d6b3299ad1b96cb0412e43149ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6cd549b762e2e1afc954595bf7112e9a94d6b3299ad1b96cb0412e43149ad6->enter($__internal_db6cd549b762e2e1afc954595bf7112e9a94d6b3299ad1b96cb0412e43149ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_db6cd549b762e2e1afc954595bf7112e9a94d6b3299ad1b96cb0412e43149ad6->leave($__internal_db6cd549b762e2e1afc954595bf7112e9a94d6b3299ad1b96cb0412e43149ad6_prof);

        
        $__internal_3b1468484a12981ae15181913be2783a5e8158f6d2f226429c89955d5063f201->leave($__internal_3b1468484a12981ae15181913be2783a5e8158f6d2f226429c89955d5063f201_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0455b54625d8737cd75a4bad61e98710aeff938a5386d006e580a8ae088b3468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0455b54625d8737cd75a4bad61e98710aeff938a5386d006e580a8ae088b3468->enter($__internal_0455b54625d8737cd75a4bad61e98710aeff938a5386d006e580a8ae088b3468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3caae6733abda8e9729e59b810a0d740cc05cb9ea5e7e7976137397b048e2704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caae6733abda8e9729e59b810a0d740cc05cb9ea5e7e7976137397b048e2704->enter($__internal_3caae6733abda8e9729e59b810a0d740cc05cb9ea5e7e7976137397b048e2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3caae6733abda8e9729e59b810a0d740cc05cb9ea5e7e7976137397b048e2704->leave($__internal_3caae6733abda8e9729e59b810a0d740cc05cb9ea5e7e7976137397b048e2704_prof);

        
        $__internal_0455b54625d8737cd75a4bad61e98710aeff938a5386d006e580a8ae088b3468->leave($__internal_0455b54625d8737cd75a4bad61e98710aeff938a5386d006e580a8ae088b3468_prof);

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
