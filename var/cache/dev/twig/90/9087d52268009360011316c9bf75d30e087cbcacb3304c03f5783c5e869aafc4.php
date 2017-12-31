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
        $__internal_fd1950db30eb3f890930bc26a68cd93cdb0b1ebea8e3a0c44821becd62be7af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1950db30eb3f890930bc26a68cd93cdb0b1ebea8e3a0c44821becd62be7af4->enter($__internal_fd1950db30eb3f890930bc26a68cd93cdb0b1ebea8e3a0c44821becd62be7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_eda6cc8733c184546599db321760e3bbb3dea81fd7b442f17d1969f1091583c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda6cc8733c184546599db321760e3bbb3dea81fd7b442f17d1969f1091583c9->enter($__internal_eda6cc8733c184546599db321760e3bbb3dea81fd7b442f17d1969f1091583c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_fd1950db30eb3f890930bc26a68cd93cdb0b1ebea8e3a0c44821becd62be7af4->leave($__internal_fd1950db30eb3f890930bc26a68cd93cdb0b1ebea8e3a0c44821becd62be7af4_prof);

        
        $__internal_eda6cc8733c184546599db321760e3bbb3dea81fd7b442f17d1969f1091583c9->leave($__internal_eda6cc8733c184546599db321760e3bbb3dea81fd7b442f17d1969f1091583c9_prof);

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
