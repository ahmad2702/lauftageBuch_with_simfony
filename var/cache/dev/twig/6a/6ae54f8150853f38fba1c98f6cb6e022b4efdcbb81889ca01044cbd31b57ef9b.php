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
        $__internal_6259d60aefbbc99a4a8ebe42d04d427fd5dbfc7f0c72e0c9636b6e56530536f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6259d60aefbbc99a4a8ebe42d04d427fd5dbfc7f0c72e0c9636b6e56530536f8->enter($__internal_6259d60aefbbc99a4a8ebe42d04d427fd5dbfc7f0c72e0c9636b6e56530536f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_80e7a5cc80d9b28be3e0c12286b44f714eb1e3dcf65cd1a861da4c644ff1e214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e7a5cc80d9b28be3e0c12286b44f714eb1e3dcf65cd1a861da4c644ff1e214->enter($__internal_80e7a5cc80d9b28be3e0c12286b44f714eb1e3dcf65cd1a861da4c644ff1e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6259d60aefbbc99a4a8ebe42d04d427fd5dbfc7f0c72e0c9636b6e56530536f8->leave($__internal_6259d60aefbbc99a4a8ebe42d04d427fd5dbfc7f0c72e0c9636b6e56530536f8_prof);

        
        $__internal_80e7a5cc80d9b28be3e0c12286b44f714eb1e3dcf65cd1a861da4c644ff1e214->leave($__internal_80e7a5cc80d9b28be3e0c12286b44f714eb1e3dcf65cd1a861da4c644ff1e214_prof);

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
", "@Twig/Exception/error.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
