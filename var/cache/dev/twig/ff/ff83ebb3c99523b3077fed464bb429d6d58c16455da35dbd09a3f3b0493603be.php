<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6417cd2c47bc1132ee35f5e77f07d0fc3353e4ac1415d3de2bedc5e60d4aa21a extends Twig_Template
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
        $__internal_05a66167a4b8a7c234f252dd181ecafcadb20d5692df87ce73d373003adc1139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a66167a4b8a7c234f252dd181ecafcadb20d5692df87ce73d373003adc1139->enter($__internal_05a66167a4b8a7c234f252dd181ecafcadb20d5692df87ce73d373003adc1139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a59636463bec56c1a9b7b4ae8794941a7712b82402ed120c8ef8e439b6b4bd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59636463bec56c1a9b7b4ae8794941a7712b82402ed120c8ef8e439b6b4bd55->enter($__internal_a59636463bec56c1a9b7b4ae8794941a7712b82402ed120c8ef8e439b6b4bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_05a66167a4b8a7c234f252dd181ecafcadb20d5692df87ce73d373003adc1139->leave($__internal_05a66167a4b8a7c234f252dd181ecafcadb20d5692df87ce73d373003adc1139_prof);

        
        $__internal_a59636463bec56c1a9b7b4ae8794941a7712b82402ed120c8ef8e439b6b4bd55->leave($__internal_a59636463bec56c1a9b7b4ae8794941a7712b82402ed120c8ef8e439b6b4bd55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
