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
        $__internal_5e588691c534317c931c9b9d5cb7bac5174f2c109f4ca9f75d35e9ff441d791c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e588691c534317c931c9b9d5cb7bac5174f2c109f4ca9f75d35e9ff441d791c->enter($__internal_5e588691c534317c931c9b9d5cb7bac5174f2c109f4ca9f75d35e9ff441d791c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d9dc1ce33cdfef4f5ea87c5829a433d0711dd200120506d19aa6a6d710778faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dc1ce33cdfef4f5ea87c5829a433d0711dd200120506d19aa6a6d710778faa->enter($__internal_d9dc1ce33cdfef4f5ea87c5829a433d0711dd200120506d19aa6a6d710778faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5e588691c534317c931c9b9d5cb7bac5174f2c109f4ca9f75d35e9ff441d791c->leave($__internal_5e588691c534317c931c9b9d5cb7bac5174f2c109f4ca9f75d35e9ff441d791c_prof);

        
        $__internal_d9dc1ce33cdfef4f5ea87c5829a433d0711dd200120506d19aa6a6d710778faa->leave($__internal_d9dc1ce33cdfef4f5ea87c5829a433d0711dd200120506d19aa6a6d710778faa_prof);

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
