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
        $__internal_904e4f136c20466500d293cd7b07b31cd9e0468146c076668f5305aa06fde220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904e4f136c20466500d293cd7b07b31cd9e0468146c076668f5305aa06fde220->enter($__internal_904e4f136c20466500d293cd7b07b31cd9e0468146c076668f5305aa06fde220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a3bba67d0ffaeae52170717882f033a2a147ed0726ecd8ee978237be680d7818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bba67d0ffaeae52170717882f033a2a147ed0726ecd8ee978237be680d7818->enter($__internal_a3bba67d0ffaeae52170717882f033a2a147ed0726ecd8ee978237be680d7818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_904e4f136c20466500d293cd7b07b31cd9e0468146c076668f5305aa06fde220->leave($__internal_904e4f136c20466500d293cd7b07b31cd9e0468146c076668f5305aa06fde220_prof);

        
        $__internal_a3bba67d0ffaeae52170717882f033a2a147ed0726ecd8ee978237be680d7818->leave($__internal_a3bba67d0ffaeae52170717882f033a2a147ed0726ecd8ee978237be680d7818_prof);

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
