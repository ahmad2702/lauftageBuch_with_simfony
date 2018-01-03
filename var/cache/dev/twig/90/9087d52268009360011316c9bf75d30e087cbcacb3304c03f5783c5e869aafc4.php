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
        $__internal_5de63bd7148a32856ef2641c4425f31fd66ae9b0addd0422839e321bc3532311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de63bd7148a32856ef2641c4425f31fd66ae9b0addd0422839e321bc3532311->enter($__internal_5de63bd7148a32856ef2641c4425f31fd66ae9b0addd0422839e321bc3532311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_42149831d5dc28e50a78099818bb375b7b09c2ecabfb3f786a1fb2a7c4121532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42149831d5dc28e50a78099818bb375b7b09c2ecabfb3f786a1fb2a7c4121532->enter($__internal_42149831d5dc28e50a78099818bb375b7b09c2ecabfb3f786a1fb2a7c4121532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5de63bd7148a32856ef2641c4425f31fd66ae9b0addd0422839e321bc3532311->leave($__internal_5de63bd7148a32856ef2641c4425f31fd66ae9b0addd0422839e321bc3532311_prof);

        
        $__internal_42149831d5dc28e50a78099818bb375b7b09c2ecabfb3f786a1fb2a7c4121532->leave($__internal_42149831d5dc28e50a78099818bb375b7b09c2ecabfb3f786a1fb2a7c4121532_prof);

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
