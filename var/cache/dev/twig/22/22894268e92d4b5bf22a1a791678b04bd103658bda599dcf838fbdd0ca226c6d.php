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
        $__internal_4a4c6ade4868c1799a7377de1e53219fb4a9ada6404705ef6bcfe40ff0b5fb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c6ade4868c1799a7377de1e53219fb4a9ada6404705ef6bcfe40ff0b5fb70->enter($__internal_4a4c6ade4868c1799a7377de1e53219fb4a9ada6404705ef6bcfe40ff0b5fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0e3207f0bff2c0153f9edd5b2e98c3101453228e502f3866657b133b08e1699a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3207f0bff2c0153f9edd5b2e98c3101453228e502f3866657b133b08e1699a->enter($__internal_0e3207f0bff2c0153f9edd5b2e98c3101453228e502f3866657b133b08e1699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a4c6ade4868c1799a7377de1e53219fb4a9ada6404705ef6bcfe40ff0b5fb70->leave($__internal_4a4c6ade4868c1799a7377de1e53219fb4a9ada6404705ef6bcfe40ff0b5fb70_prof);

        
        $__internal_0e3207f0bff2c0153f9edd5b2e98c3101453228e502f3866657b133b08e1699a->leave($__internal_0e3207f0bff2c0153f9edd5b2e98c3101453228e502f3866657b133b08e1699a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e50376329fb37b1025cd191b5c975a42562e1d6a8706e1f8fc70ec78d738ff62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50376329fb37b1025cd191b5c975a42562e1d6a8706e1f8fc70ec78d738ff62->enter($__internal_e50376329fb37b1025cd191b5c975a42562e1d6a8706e1f8fc70ec78d738ff62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c5ff9e07458c713d9a615bf527c9eb448fa8d247829ed5974fc92b81f90b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5ff9e07458c713d9a615bf527c9eb448fa8d247829ed5974fc92b81f90b3c9->enter($__internal_1c5ff9e07458c713d9a615bf527c9eb448fa8d247829ed5974fc92b81f90b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1c5ff9e07458c713d9a615bf527c9eb448fa8d247829ed5974fc92b81f90b3c9->leave($__internal_1c5ff9e07458c713d9a615bf527c9eb448fa8d247829ed5974fc92b81f90b3c9_prof);

        
        $__internal_e50376329fb37b1025cd191b5c975a42562e1d6a8706e1f8fc70ec78d738ff62->leave($__internal_e50376329fb37b1025cd191b5c975a42562e1d6a8706e1f8fc70ec78d738ff62_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02546e0747bbb2b9b2f92e04976a1739b3bd58da3a7242ea26a9b60692b4cc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02546e0747bbb2b9b2f92e04976a1739b3bd58da3a7242ea26a9b60692b4cc37->enter($__internal_02546e0747bbb2b9b2f92e04976a1739b3bd58da3a7242ea26a9b60692b4cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d13a806db2203abbe1beb19479cd7eda552a7c285636255511f4707db70cd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d13a806db2203abbe1beb19479cd7eda552a7c285636255511f4707db70cd6d->enter($__internal_5d13a806db2203abbe1beb19479cd7eda552a7c285636255511f4707db70cd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5d13a806db2203abbe1beb19479cd7eda552a7c285636255511f4707db70cd6d->leave($__internal_5d13a806db2203abbe1beb19479cd7eda552a7c285636255511f4707db70cd6d_prof);

        
        $__internal_02546e0747bbb2b9b2f92e04976a1739b3bd58da3a7242ea26a9b60692b4cc37->leave($__internal_02546e0747bbb2b9b2f92e04976a1739b3bd58da3a7242ea26a9b60692b4cc37_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3206f7bfa584ef26b70b84b9eae24799cb0a772528185b4d950fd5bff8780135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3206f7bfa584ef26b70b84b9eae24799cb0a772528185b4d950fd5bff8780135->enter($__internal_3206f7bfa584ef26b70b84b9eae24799cb0a772528185b4d950fd5bff8780135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ee2af2b3d37aa7925119d35a73e9be2c01106afa2646120d73880743b94bbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee2af2b3d37aa7925119d35a73e9be2c01106afa2646120d73880743b94bbaf->enter($__internal_2ee2af2b3d37aa7925119d35a73e9be2c01106afa2646120d73880743b94bbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2ee2af2b3d37aa7925119d35a73e9be2c01106afa2646120d73880743b94bbaf->leave($__internal_2ee2af2b3d37aa7925119d35a73e9be2c01106afa2646120d73880743b94bbaf_prof);

        
        $__internal_3206f7bfa584ef26b70b84b9eae24799cb0a772528185b4d950fd5bff8780135->leave($__internal_3206f7bfa584ef26b70b84b9eae24799cb0a772528185b4d950fd5bff8780135_prof);

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
