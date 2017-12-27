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
        $__internal_2d6ee1c3ad3472be3967d7e42787928140d18f10af000e5b5f6d7baa2b914002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6ee1c3ad3472be3967d7e42787928140d18f10af000e5b5f6d7baa2b914002->enter($__internal_2d6ee1c3ad3472be3967d7e42787928140d18f10af000e5b5f6d7baa2b914002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_94e4cc1ca7b4798ef39735b05f3d450ab71ea4f6840c14a96373a79e2320adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e4cc1ca7b4798ef39735b05f3d450ab71ea4f6840c14a96373a79e2320adb5->enter($__internal_94e4cc1ca7b4798ef39735b05f3d450ab71ea4f6840c14a96373a79e2320adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6ee1c3ad3472be3967d7e42787928140d18f10af000e5b5f6d7baa2b914002->leave($__internal_2d6ee1c3ad3472be3967d7e42787928140d18f10af000e5b5f6d7baa2b914002_prof);

        
        $__internal_94e4cc1ca7b4798ef39735b05f3d450ab71ea4f6840c14a96373a79e2320adb5->leave($__internal_94e4cc1ca7b4798ef39735b05f3d450ab71ea4f6840c14a96373a79e2320adb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1ef27b8c2c125daefc4f50cb2bd3601902404a6855714c03ca1d841d3e7222c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ef27b8c2c125daefc4f50cb2bd3601902404a6855714c03ca1d841d3e7222c->enter($__internal_e1ef27b8c2c125daefc4f50cb2bd3601902404a6855714c03ca1d841d3e7222c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58573e1fc1a5296c834786d0b36500d0384c38630383521798415c58abac9678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58573e1fc1a5296c834786d0b36500d0384c38630383521798415c58abac9678->enter($__internal_58573e1fc1a5296c834786d0b36500d0384c38630383521798415c58abac9678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_58573e1fc1a5296c834786d0b36500d0384c38630383521798415c58abac9678->leave($__internal_58573e1fc1a5296c834786d0b36500d0384c38630383521798415c58abac9678_prof);

        
        $__internal_e1ef27b8c2c125daefc4f50cb2bd3601902404a6855714c03ca1d841d3e7222c->leave($__internal_e1ef27b8c2c125daefc4f50cb2bd3601902404a6855714c03ca1d841d3e7222c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5729476bb38d885545e0e85e72e4873e0ca6f8e6d45caf98f084b6445fa28972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5729476bb38d885545e0e85e72e4873e0ca6f8e6d45caf98f084b6445fa28972->enter($__internal_5729476bb38d885545e0e85e72e4873e0ca6f8e6d45caf98f084b6445fa28972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9decee172f9edca76c89171b0ec0a669642008e3b3e27ac77aa93d75d46b6e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9decee172f9edca76c89171b0ec0a669642008e3b3e27ac77aa93d75d46b6e49->enter($__internal_9decee172f9edca76c89171b0ec0a669642008e3b3e27ac77aa93d75d46b6e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9decee172f9edca76c89171b0ec0a669642008e3b3e27ac77aa93d75d46b6e49->leave($__internal_9decee172f9edca76c89171b0ec0a669642008e3b3e27ac77aa93d75d46b6e49_prof);

        
        $__internal_5729476bb38d885545e0e85e72e4873e0ca6f8e6d45caf98f084b6445fa28972->leave($__internal_5729476bb38d885545e0e85e72e4873e0ca6f8e6d45caf98f084b6445fa28972_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_afef26bff4a8f675e4f75dc3d867009cf27d83dd0a85325d90e849167c1a1522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afef26bff4a8f675e4f75dc3d867009cf27d83dd0a85325d90e849167c1a1522->enter($__internal_afef26bff4a8f675e4f75dc3d867009cf27d83dd0a85325d90e849167c1a1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c229b0bacc5e08fb41fac877c0a38b4728c2db002209b3304e1956a1fd00f61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c229b0bacc5e08fb41fac877c0a38b4728c2db002209b3304e1956a1fd00f61d->enter($__internal_c229b0bacc5e08fb41fac877c0a38b4728c2db002209b3304e1956a1fd00f61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c229b0bacc5e08fb41fac877c0a38b4728c2db002209b3304e1956a1fd00f61d->leave($__internal_c229b0bacc5e08fb41fac877c0a38b4728c2db002209b3304e1956a1fd00f61d_prof);

        
        $__internal_afef26bff4a8f675e4f75dc3d867009cf27d83dd0a85325d90e849167c1a1522->leave($__internal_afef26bff4a8f675e4f75dc3d867009cf27d83dd0a85325d90e849167c1a1522_prof);

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
