<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a482b88b71c7de531c2889cddd5acf98c50494c0dc2414d1b70f252fa368a3cc extends Twig_Template
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
        $__internal_e12f72c0a20498db4c9340e95192d38344e7475b986bcd5245f500554641e4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12f72c0a20498db4c9340e95192d38344e7475b986bcd5245f500554641e4aa->enter($__internal_e12f72c0a20498db4c9340e95192d38344e7475b986bcd5245f500554641e4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9735a39506d969bf734c2a202d5d765dc8c8cfae5682a2d81ec52942ff993c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9735a39506d969bf734c2a202d5d765dc8c8cfae5682a2d81ec52942ff993c98->enter($__internal_9735a39506d969bf734c2a202d5d765dc8c8cfae5682a2d81ec52942ff993c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e12f72c0a20498db4c9340e95192d38344e7475b986bcd5245f500554641e4aa->leave($__internal_e12f72c0a20498db4c9340e95192d38344e7475b986bcd5245f500554641e4aa_prof);

        
        $__internal_9735a39506d969bf734c2a202d5d765dc8c8cfae5682a2d81ec52942ff993c98->leave($__internal_9735a39506d969bf734c2a202d5d765dc8c8cfae5682a2d81ec52942ff993c98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
