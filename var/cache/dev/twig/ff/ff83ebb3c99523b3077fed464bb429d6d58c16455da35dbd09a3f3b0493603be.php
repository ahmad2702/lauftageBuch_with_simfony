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
        $__internal_6f27bb0b4cbdacf4e96ad8f5effb6b88c2a4833597ee13edc3b669310ad30e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f27bb0b4cbdacf4e96ad8f5effb6b88c2a4833597ee13edc3b669310ad30e3d->enter($__internal_6f27bb0b4cbdacf4e96ad8f5effb6b88c2a4833597ee13edc3b669310ad30e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bfe94f9c68cede796aaac9dd94da2a7e76bdc96453af58916c11104890141749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe94f9c68cede796aaac9dd94da2a7e76bdc96453af58916c11104890141749->enter($__internal_bfe94f9c68cede796aaac9dd94da2a7e76bdc96453af58916c11104890141749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6f27bb0b4cbdacf4e96ad8f5effb6b88c2a4833597ee13edc3b669310ad30e3d->leave($__internal_6f27bb0b4cbdacf4e96ad8f5effb6b88c2a4833597ee13edc3b669310ad30e3d_prof);

        
        $__internal_bfe94f9c68cede796aaac9dd94da2a7e76bdc96453af58916c11104890141749->leave($__internal_bfe94f9c68cede796aaac9dd94da2a7e76bdc96453af58916c11104890141749_prof);

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
