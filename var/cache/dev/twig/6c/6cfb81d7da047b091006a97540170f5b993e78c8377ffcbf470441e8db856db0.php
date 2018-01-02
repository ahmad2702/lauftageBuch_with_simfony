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
        $__internal_36aff0e518f10b2ca920ab6d98c75ed49fedbb7731b9f0449efce8d356c4722e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36aff0e518f10b2ca920ab6d98c75ed49fedbb7731b9f0449efce8d356c4722e->enter($__internal_36aff0e518f10b2ca920ab6d98c75ed49fedbb7731b9f0449efce8d356c4722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_54bcd0539f4de75fe3360a951e4e64449665c3de38902b246e936f309ca81491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bcd0539f4de75fe3360a951e4e64449665c3de38902b246e936f309ca81491->enter($__internal_54bcd0539f4de75fe3360a951e4e64449665c3de38902b246e936f309ca81491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_36aff0e518f10b2ca920ab6d98c75ed49fedbb7731b9f0449efce8d356c4722e->leave($__internal_36aff0e518f10b2ca920ab6d98c75ed49fedbb7731b9f0449efce8d356c4722e_prof);

        
        $__internal_54bcd0539f4de75fe3360a951e4e64449665c3de38902b246e936f309ca81491->leave($__internal_54bcd0539f4de75fe3360a951e4e64449665c3de38902b246e936f309ca81491_prof);

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
