<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2ba5f2a8a0f6725b82d8a59d2fabbabaa62f2de8bd6f9096656e5891ab73305c extends Twig_Template
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
        $__internal_422f1840782011955a715b24371ba08535436f61c81cefaa605fbe215b7906fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422f1840782011955a715b24371ba08535436f61c81cefaa605fbe215b7906fc->enter($__internal_422f1840782011955a715b24371ba08535436f61c81cefaa605fbe215b7906fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_978cc373452a5e1aadc9f5ac8af9b9c19043e16eb6d84f35354da9e5cc1aebcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978cc373452a5e1aadc9f5ac8af9b9c19043e16eb6d84f35354da9e5cc1aebcc->enter($__internal_978cc373452a5e1aadc9f5ac8af9b9c19043e16eb6d84f35354da9e5cc1aebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_422f1840782011955a715b24371ba08535436f61c81cefaa605fbe215b7906fc->leave($__internal_422f1840782011955a715b24371ba08535436f61c81cefaa605fbe215b7906fc_prof);

        
        $__internal_978cc373452a5e1aadc9f5ac8af9b9c19043e16eb6d84f35354da9e5cc1aebcc->leave($__internal_978cc373452a5e1aadc9f5ac8af9b9c19043e16eb6d84f35354da9e5cc1aebcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
