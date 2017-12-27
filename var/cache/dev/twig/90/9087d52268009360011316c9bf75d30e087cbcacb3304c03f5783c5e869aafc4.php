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
        $__internal_cb507707b86eff4bdc24ab6a94f35223aaf976406f01c98272a87237077f9d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb507707b86eff4bdc24ab6a94f35223aaf976406f01c98272a87237077f9d17->enter($__internal_cb507707b86eff4bdc24ab6a94f35223aaf976406f01c98272a87237077f9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_70bb3b57c995bfb6c756202819400f291cf0773c7dca42cf7639d7192074f980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bb3b57c995bfb6c756202819400f291cf0773c7dca42cf7639d7192074f980->enter($__internal_70bb3b57c995bfb6c756202819400f291cf0773c7dca42cf7639d7192074f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_cb507707b86eff4bdc24ab6a94f35223aaf976406f01c98272a87237077f9d17->leave($__internal_cb507707b86eff4bdc24ab6a94f35223aaf976406f01c98272a87237077f9d17_prof);

        
        $__internal_70bb3b57c995bfb6c756202819400f291cf0773c7dca42cf7639d7192074f980->leave($__internal_70bb3b57c995bfb6c756202819400f291cf0773c7dca42cf7639d7192074f980_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
