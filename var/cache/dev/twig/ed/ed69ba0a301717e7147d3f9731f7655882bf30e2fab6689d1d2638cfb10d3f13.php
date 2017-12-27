<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_55fad747edc362841d89513991e6545dc74aa493beba76d471180c93cf5c9834 extends Twig_Template
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
        $__internal_ee323d5881a4d839114a7911efb702b24c91de362e8f7d808343e6002200f397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee323d5881a4d839114a7911efb702b24c91de362e8f7d808343e6002200f397->enter($__internal_ee323d5881a4d839114a7911efb702b24c91de362e8f7d808343e6002200f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1e2e2ac8c92effbc32adecd4bf7986321ffbbc1d3a6248d10892ba487777f146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2e2ac8c92effbc32adecd4bf7986321ffbbc1d3a6248d10892ba487777f146->enter($__internal_1e2e2ac8c92effbc32adecd4bf7986321ffbbc1d3a6248d10892ba487777f146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_ee323d5881a4d839114a7911efb702b24c91de362e8f7d808343e6002200f397->leave($__internal_ee323d5881a4d839114a7911efb702b24c91de362e8f7d808343e6002200f397_prof);

        
        $__internal_1e2e2ac8c92effbc32adecd4bf7986321ffbbc1d3a6248d10892ba487777f146->leave($__internal_1e2e2ac8c92effbc32adecd4bf7986321ffbbc1d3a6248d10892ba487777f146_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
