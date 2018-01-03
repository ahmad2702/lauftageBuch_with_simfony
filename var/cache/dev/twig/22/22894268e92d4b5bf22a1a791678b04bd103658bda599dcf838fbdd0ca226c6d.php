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
        $__internal_0b46cd835621cfd25edb5c5691ff47f091ef25f7ab2bd9b64fd70b5188d37ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b46cd835621cfd25edb5c5691ff47f091ef25f7ab2bd9b64fd70b5188d37ae0->enter($__internal_0b46cd835621cfd25edb5c5691ff47f091ef25f7ab2bd9b64fd70b5188d37ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_646f0dbafec7a2e38e37cd2e520b19dc80bdf35fb6adebec64fe2fd6d1e66041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646f0dbafec7a2e38e37cd2e520b19dc80bdf35fb6adebec64fe2fd6d1e66041->enter($__internal_646f0dbafec7a2e38e37cd2e520b19dc80bdf35fb6adebec64fe2fd6d1e66041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b46cd835621cfd25edb5c5691ff47f091ef25f7ab2bd9b64fd70b5188d37ae0->leave($__internal_0b46cd835621cfd25edb5c5691ff47f091ef25f7ab2bd9b64fd70b5188d37ae0_prof);

        
        $__internal_646f0dbafec7a2e38e37cd2e520b19dc80bdf35fb6adebec64fe2fd6d1e66041->leave($__internal_646f0dbafec7a2e38e37cd2e520b19dc80bdf35fb6adebec64fe2fd6d1e66041_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90308bb442a3e337dbddd8c95b55873ed56ccc213a96addb7261c1725d5b941d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90308bb442a3e337dbddd8c95b55873ed56ccc213a96addb7261c1725d5b941d->enter($__internal_90308bb442a3e337dbddd8c95b55873ed56ccc213a96addb7261c1725d5b941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f4e001fdc3e4492e102eab488dea9a342a4cc697dea4a2a29379f88621b4122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4e001fdc3e4492e102eab488dea9a342a4cc697dea4a2a29379f88621b4122->enter($__internal_2f4e001fdc3e4492e102eab488dea9a342a4cc697dea4a2a29379f88621b4122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f4e001fdc3e4492e102eab488dea9a342a4cc697dea4a2a29379f88621b4122->leave($__internal_2f4e001fdc3e4492e102eab488dea9a342a4cc697dea4a2a29379f88621b4122_prof);

        
        $__internal_90308bb442a3e337dbddd8c95b55873ed56ccc213a96addb7261c1725d5b941d->leave($__internal_90308bb442a3e337dbddd8c95b55873ed56ccc213a96addb7261c1725d5b941d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfd21c097dc703099aab137df93e2073f2b953d733135c43ca159d6c633be129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd21c097dc703099aab137df93e2073f2b953d733135c43ca159d6c633be129->enter($__internal_bfd21c097dc703099aab137df93e2073f2b953d733135c43ca159d6c633be129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49813cdc7a681c468759dd6bcde198b474d9a5fd9f28e54fc281a91b0194f095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49813cdc7a681c468759dd6bcde198b474d9a5fd9f28e54fc281a91b0194f095->enter($__internal_49813cdc7a681c468759dd6bcde198b474d9a5fd9f28e54fc281a91b0194f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_49813cdc7a681c468759dd6bcde198b474d9a5fd9f28e54fc281a91b0194f095->leave($__internal_49813cdc7a681c468759dd6bcde198b474d9a5fd9f28e54fc281a91b0194f095_prof);

        
        $__internal_bfd21c097dc703099aab137df93e2073f2b953d733135c43ca159d6c633be129->leave($__internal_bfd21c097dc703099aab137df93e2073f2b953d733135c43ca159d6c633be129_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c8a962c08739b362c72a74392cf22fbe7977608398961f6c7e2d91fab71596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c8a962c08739b362c72a74392cf22fbe7977608398961f6c7e2d91fab71596->enter($__internal_05c8a962c08739b362c72a74392cf22fbe7977608398961f6c7e2d91fab71596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e8abeec2949f0462e5dd7ff5a16966f506fa63ecbfca7cf029ef3467be5911d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8abeec2949f0462e5dd7ff5a16966f506fa63ecbfca7cf029ef3467be5911d->enter($__internal_5e8abeec2949f0462e5dd7ff5a16966f506fa63ecbfca7cf029ef3467be5911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5e8abeec2949f0462e5dd7ff5a16966f506fa63ecbfca7cf029ef3467be5911d->leave($__internal_5e8abeec2949f0462e5dd7ff5a16966f506fa63ecbfca7cf029ef3467be5911d_prof);

        
        $__internal_05c8a962c08739b362c72a74392cf22fbe7977608398961f6c7e2d91fab71596->leave($__internal_05c8a962c08739b362c72a74392cf22fbe7977608398961f6c7e2d91fab71596_prof);

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
