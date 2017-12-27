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
        $__internal_1c7b2c233bb5a2822c452927e6b241622c65b2e0e61117f3032d7d8e4fdbfe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7b2c233bb5a2822c452927e6b241622c65b2e0e61117f3032d7d8e4fdbfe0b->enter($__internal_1c7b2c233bb5a2822c452927e6b241622c65b2e0e61117f3032d7d8e4fdbfe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2cf73b188b3d420adf459a719b196e82a6175ffccbc09385c424c42864252365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf73b188b3d420adf459a719b196e82a6175ffccbc09385c424c42864252365->enter($__internal_2cf73b188b3d420adf459a719b196e82a6175ffccbc09385c424c42864252365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_1c7b2c233bb5a2822c452927e6b241622c65b2e0e61117f3032d7d8e4fdbfe0b->leave($__internal_1c7b2c233bb5a2822c452927e6b241622c65b2e0e61117f3032d7d8e4fdbfe0b_prof);

        
        $__internal_2cf73b188b3d420adf459a719b196e82a6175ffccbc09385c424c42864252365->leave($__internal_2cf73b188b3d420adf459a719b196e82a6175ffccbc09385c424c42864252365_prof);

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
