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
        $__internal_c3524cdbe7bc8583cc8fb4b6fac4a1a524c412169e556e71472e3a7ea54453ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3524cdbe7bc8583cc8fb4b6fac4a1a524c412169e556e71472e3a7ea54453ea->enter($__internal_c3524cdbe7bc8583cc8fb4b6fac4a1a524c412169e556e71472e3a7ea54453ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_7ce278e6fc972bb8cc1391ff55cfc2290d54d4d4933010fc5d2f50ce78ecc4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce278e6fc972bb8cc1391ff55cfc2290d54d4d4933010fc5d2f50ce78ecc4e7->enter($__internal_7ce278e6fc972bb8cc1391ff55cfc2290d54d4d4933010fc5d2f50ce78ecc4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c3524cdbe7bc8583cc8fb4b6fac4a1a524c412169e556e71472e3a7ea54453ea->leave($__internal_c3524cdbe7bc8583cc8fb4b6fac4a1a524c412169e556e71472e3a7ea54453ea_prof);

        
        $__internal_7ce278e6fc972bb8cc1391ff55cfc2290d54d4d4933010fc5d2f50ce78ecc4e7->leave($__internal_7ce278e6fc972bb8cc1391ff55cfc2290d54d4d4933010fc5d2f50ce78ecc4e7_prof);

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
