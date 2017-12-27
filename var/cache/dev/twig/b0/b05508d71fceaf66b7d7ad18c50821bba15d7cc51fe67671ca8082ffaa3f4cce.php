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
        $__internal_35918d24ef1ffbf4db2141957e45eff1c1d44da17db17e6458e7020fdfd95db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35918d24ef1ffbf4db2141957e45eff1c1d44da17db17e6458e7020fdfd95db1->enter($__internal_35918d24ef1ffbf4db2141957e45eff1c1d44da17db17e6458e7020fdfd95db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_82114fceae8ce6d11a887c7790be67d2bec4f586740da8667cde2056eb6a6bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82114fceae8ce6d11a887c7790be67d2bec4f586740da8667cde2056eb6a6bd6->enter($__internal_82114fceae8ce6d11a887c7790be67d2bec4f586740da8667cde2056eb6a6bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_35918d24ef1ffbf4db2141957e45eff1c1d44da17db17e6458e7020fdfd95db1->leave($__internal_35918d24ef1ffbf4db2141957e45eff1c1d44da17db17e6458e7020fdfd95db1_prof);

        
        $__internal_82114fceae8ce6d11a887c7790be67d2bec4f586740da8667cde2056eb6a6bd6->leave($__internal_82114fceae8ce6d11a887c7790be67d2bec4f586740da8667cde2056eb6a6bd6_prof);

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
