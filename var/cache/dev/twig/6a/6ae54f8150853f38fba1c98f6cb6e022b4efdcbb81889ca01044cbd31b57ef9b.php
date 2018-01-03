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
        $__internal_80d6bdd11ee4cfc6e8c150e149b4c4f41cdcf8b43151cd1ca177df99576f3fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d6bdd11ee4cfc6e8c150e149b4c4f41cdcf8b43151cd1ca177df99576f3fec->enter($__internal_80d6bdd11ee4cfc6e8c150e149b4c4f41cdcf8b43151cd1ca177df99576f3fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0ce9ecb4822b70703ddf1ec89afcfcd9552963178df84b0a7af03d7dc62d2b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce9ecb4822b70703ddf1ec89afcfcd9552963178df84b0a7af03d7dc62d2b95->enter($__internal_0ce9ecb4822b70703ddf1ec89afcfcd9552963178df84b0a7af03d7dc62d2b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_80d6bdd11ee4cfc6e8c150e149b4c4f41cdcf8b43151cd1ca177df99576f3fec->leave($__internal_80d6bdd11ee4cfc6e8c150e149b4c4f41cdcf8b43151cd1ca177df99576f3fec_prof);

        
        $__internal_0ce9ecb4822b70703ddf1ec89afcfcd9552963178df84b0a7af03d7dc62d2b95->leave($__internal_0ce9ecb4822b70703ddf1ec89afcfcd9552963178df84b0a7af03d7dc62d2b95_prof);

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
