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
        $__internal_a84cb939d0583d7e6ea368a8109c2f28ddac15bc32b2877b1aefb510f0d1e8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84cb939d0583d7e6ea368a8109c2f28ddac15bc32b2877b1aefb510f0d1e8ce->enter($__internal_a84cb939d0583d7e6ea368a8109c2f28ddac15bc32b2877b1aefb510f0d1e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ffae66edc1bdd69e330d6eb15720629460596189f127fac2cd0efba0de13dc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffae66edc1bdd69e330d6eb15720629460596189f127fac2cd0efba0de13dc13->enter($__internal_ffae66edc1bdd69e330d6eb15720629460596189f127fac2cd0efba0de13dc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a84cb939d0583d7e6ea368a8109c2f28ddac15bc32b2877b1aefb510f0d1e8ce->leave($__internal_a84cb939d0583d7e6ea368a8109c2f28ddac15bc32b2877b1aefb510f0d1e8ce_prof);

        
        $__internal_ffae66edc1bdd69e330d6eb15720629460596189f127fac2cd0efba0de13dc13->leave($__internal_ffae66edc1bdd69e330d6eb15720629460596189f127fac2cd0efba0de13dc13_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
