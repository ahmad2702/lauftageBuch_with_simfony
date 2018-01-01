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
        $__internal_ae65b01d5e6ed7f22142709f77e283df8d1d2dabeac06ceffcacb3bcaaad00e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae65b01d5e6ed7f22142709f77e283df8d1d2dabeac06ceffcacb3bcaaad00e2->enter($__internal_ae65b01d5e6ed7f22142709f77e283df8d1d2dabeac06ceffcacb3bcaaad00e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b9187094d251ee37a2f3e4f40531678fa0e813f7b66e2052eb05bda62aa14aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9187094d251ee37a2f3e4f40531678fa0e813f7b66e2052eb05bda62aa14aaa->enter($__internal_b9187094d251ee37a2f3e4f40531678fa0e813f7b66e2052eb05bda62aa14aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_ae65b01d5e6ed7f22142709f77e283df8d1d2dabeac06ceffcacb3bcaaad00e2->leave($__internal_ae65b01d5e6ed7f22142709f77e283df8d1d2dabeac06ceffcacb3bcaaad00e2_prof);

        
        $__internal_b9187094d251ee37a2f3e4f40531678fa0e813f7b66e2052eb05bda62aa14aaa->leave($__internal_b9187094d251ee37a2f3e4f40531678fa0e813f7b66e2052eb05bda62aa14aaa_prof);

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
", "@Twig/Exception/exception.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
