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
        $__internal_ae4daef82bec26356fe7133fad33510e674df2edbeeded87f86fb534da5b0962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4daef82bec26356fe7133fad33510e674df2edbeeded87f86fb534da5b0962->enter($__internal_ae4daef82bec26356fe7133fad33510e674df2edbeeded87f86fb534da5b0962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e28ef82743843fdbe20769800616d1d3660befafac6e2c9637e08fb81fe6da98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28ef82743843fdbe20769800616d1d3660befafac6e2c9637e08fb81fe6da98->enter($__internal_e28ef82743843fdbe20769800616d1d3660befafac6e2c9637e08fb81fe6da98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_ae4daef82bec26356fe7133fad33510e674df2edbeeded87f86fb534da5b0962->leave($__internal_ae4daef82bec26356fe7133fad33510e674df2edbeeded87f86fb534da5b0962_prof);

        
        $__internal_e28ef82743843fdbe20769800616d1d3660befafac6e2c9637e08fb81fe6da98->leave($__internal_e28ef82743843fdbe20769800616d1d3660befafac6e2c9637e08fb81fe6da98_prof);

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
", "@Twig/Exception/error.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
