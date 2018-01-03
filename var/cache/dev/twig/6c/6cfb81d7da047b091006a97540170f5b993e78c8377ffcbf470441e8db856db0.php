<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_022626092395f5db5eb563c3a19d757301e375cffb08166872c4e240c207fe58 extends Twig_Template
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
        $__internal_7db55c2fa43fa8171a7b48379c729472846cf6b339fccf3850035c8b0acc37a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db55c2fa43fa8171a7b48379c729472846cf6b339fccf3850035c8b0acc37a6->enter($__internal_7db55c2fa43fa8171a7b48379c729472846cf6b339fccf3850035c8b0acc37a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a35d45a66a457ebb3ee5b77e2e9c15386de0251f9ae38bbeefeaf5cf561350f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35d45a66a457ebb3ee5b77e2e9c15386de0251f9ae38bbeefeaf5cf561350f1->enter($__internal_a35d45a66a457ebb3ee5b77e2e9c15386de0251f9ae38bbeefeaf5cf561350f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7db55c2fa43fa8171a7b48379c729472846cf6b339fccf3850035c8b0acc37a6->leave($__internal_7db55c2fa43fa8171a7b48379c729472846cf6b339fccf3850035c8b0acc37a6_prof);

        
        $__internal_a35d45a66a457ebb3ee5b77e2e9c15386de0251f9ae38bbeefeaf5cf561350f1->leave($__internal_a35d45a66a457ebb3ee5b77e2e9c15386de0251f9ae38bbeefeaf5cf561350f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
