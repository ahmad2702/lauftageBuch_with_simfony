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
        $__internal_01b5136f69f5ddc54a162c7eca200561aa32d2c2b550f1139b84683fe39e498f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b5136f69f5ddc54a162c7eca200561aa32d2c2b550f1139b84683fe39e498f->enter($__internal_01b5136f69f5ddc54a162c7eca200561aa32d2c2b550f1139b84683fe39e498f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79b3f10a75be0a5a519ac5ecb5ceb1f4a0749d92d0960d7660b7269d853efc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b3f10a75be0a5a519ac5ecb5ceb1f4a0749d92d0960d7660b7269d853efc73->enter($__internal_79b3f10a75be0a5a519ac5ecb5ceb1f4a0749d92d0960d7660b7269d853efc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b5136f69f5ddc54a162c7eca200561aa32d2c2b550f1139b84683fe39e498f->leave($__internal_01b5136f69f5ddc54a162c7eca200561aa32d2c2b550f1139b84683fe39e498f_prof);

        
        $__internal_79b3f10a75be0a5a519ac5ecb5ceb1f4a0749d92d0960d7660b7269d853efc73->leave($__internal_79b3f10a75be0a5a519ac5ecb5ceb1f4a0749d92d0960d7660b7269d853efc73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_033a24097c6624293fdcd1d1055a0a44b7b42fa2ea15df4884f10199c4870a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033a24097c6624293fdcd1d1055a0a44b7b42fa2ea15df4884f10199c4870a44->enter($__internal_033a24097c6624293fdcd1d1055a0a44b7b42fa2ea15df4884f10199c4870a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b6fdeb1681e0f1628cf465aa3250d11b1283a26f9ed46f4f35cc244044b51b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6fdeb1681e0f1628cf465aa3250d11b1283a26f9ed46f4f35cc244044b51b0->enter($__internal_6b6fdeb1681e0f1628cf465aa3250d11b1283a26f9ed46f4f35cc244044b51b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6b6fdeb1681e0f1628cf465aa3250d11b1283a26f9ed46f4f35cc244044b51b0->leave($__internal_6b6fdeb1681e0f1628cf465aa3250d11b1283a26f9ed46f4f35cc244044b51b0_prof);

        
        $__internal_033a24097c6624293fdcd1d1055a0a44b7b42fa2ea15df4884f10199c4870a44->leave($__internal_033a24097c6624293fdcd1d1055a0a44b7b42fa2ea15df4884f10199c4870a44_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cc7c4e548f1e5c36e2232091d7b7a9108f164a449aeffaf290302d6c165b14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc7c4e548f1e5c36e2232091d7b7a9108f164a449aeffaf290302d6c165b14a->enter($__internal_7cc7c4e548f1e5c36e2232091d7b7a9108f164a449aeffaf290302d6c165b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2603bebacde5db53932fc4dccba375ec150ebc8e12dc26195ef0092ae1dc719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2603bebacde5db53932fc4dccba375ec150ebc8e12dc26195ef0092ae1dc719->enter($__internal_f2603bebacde5db53932fc4dccba375ec150ebc8e12dc26195ef0092ae1dc719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f2603bebacde5db53932fc4dccba375ec150ebc8e12dc26195ef0092ae1dc719->leave($__internal_f2603bebacde5db53932fc4dccba375ec150ebc8e12dc26195ef0092ae1dc719_prof);

        
        $__internal_7cc7c4e548f1e5c36e2232091d7b7a9108f164a449aeffaf290302d6c165b14a->leave($__internal_7cc7c4e548f1e5c36e2232091d7b7a9108f164a449aeffaf290302d6c165b14a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56121afa0720a99af5efafc9df95addf7a89f222f3253148f9b8cc9fc76aec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56121afa0720a99af5efafc9df95addf7a89f222f3253148f9b8cc9fc76aec7->enter($__internal_e56121afa0720a99af5efafc9df95addf7a89f222f3253148f9b8cc9fc76aec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_130536a7608ba0a2317ddce5f6260bd5f7c5305bc136e164764302b2b68ed2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130536a7608ba0a2317ddce5f6260bd5f7c5305bc136e164764302b2b68ed2ec->enter($__internal_130536a7608ba0a2317ddce5f6260bd5f7c5305bc136e164764302b2b68ed2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_130536a7608ba0a2317ddce5f6260bd5f7c5305bc136e164764302b2b68ed2ec->leave($__internal_130536a7608ba0a2317ddce5f6260bd5f7c5305bc136e164764302b2b68ed2ec_prof);

        
        $__internal_e56121afa0720a99af5efafc9df95addf7a89f222f3253148f9b8cc9fc76aec7->leave($__internal_e56121afa0720a99af5efafc9df95addf7a89f222f3253148f9b8cc9fc76aec7_prof);

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
