<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_89cd54514381d2f5525bb27a15aab0459b1a44ef0578f6a6db0752089e397b21 extends Twig_Template
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
        $__internal_a6c21dc73c4ae6d9f264e4ebedd6203d954d7cc124e3c107a44936cfad2b0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c21dc73c4ae6d9f264e4ebedd6203d954d7cc124e3c107a44936cfad2b0385->enter($__internal_a6c21dc73c4ae6d9f264e4ebedd6203d954d7cc124e3c107a44936cfad2b0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2a241e25ddf7c7007959f71d5c3c7580bc7c63deac657375c4afb8f270be6f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a241e25ddf7c7007959f71d5c3c7580bc7c63deac657375c4afb8f270be6f17->enter($__internal_2a241e25ddf7c7007959f71d5c3c7580bc7c63deac657375c4afb8f270be6f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a6c21dc73c4ae6d9f264e4ebedd6203d954d7cc124e3c107a44936cfad2b0385->leave($__internal_a6c21dc73c4ae6d9f264e4ebedd6203d954d7cc124e3c107a44936cfad2b0385_prof);

        
        $__internal_2a241e25ddf7c7007959f71d5c3c7580bc7c63deac657375c4afb8f270be6f17->leave($__internal_2a241e25ddf7c7007959f71d5c3c7580bc7c63deac657375c4afb8f270be6f17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
