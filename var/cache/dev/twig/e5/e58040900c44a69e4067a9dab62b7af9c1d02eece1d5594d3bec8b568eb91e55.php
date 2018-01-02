<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_17b6bf48ada0c81b0cfa45ffec1d35a253bff017710200e161787644038a69d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5ab5da45ef99e1b1e68e55fa069f8ff8c3e9ddd1cd68629663cf2d5b76ddc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ab5da45ef99e1b1e68e55fa069f8ff8c3e9ddd1cd68629663cf2d5b76ddc49->enter($__internal_d5ab5da45ef99e1b1e68e55fa069f8ff8c3e9ddd1cd68629663cf2d5b76ddc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0f089ee338852267b9612ec1d2990654f6668b4edfe8449a5881e3d0200c3ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f089ee338852267b9612ec1d2990654f6668b4edfe8449a5881e3d0200c3ab4->enter($__internal_0f089ee338852267b9612ec1d2990654f6668b4edfe8449a5881e3d0200c3ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_d5ab5da45ef99e1b1e68e55fa069f8ff8c3e9ddd1cd68629663cf2d5b76ddc49->leave($__internal_d5ab5da45ef99e1b1e68e55fa069f8ff8c3e9ddd1cd68629663cf2d5b76ddc49_prof);

        
        $__internal_0f089ee338852267b9612ec1d2990654f6668b4edfe8449a5881e3d0200c3ab4->leave($__internal_0f089ee338852267b9612ec1d2990654f6668b4edfe8449a5881e3d0200c3ab4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
