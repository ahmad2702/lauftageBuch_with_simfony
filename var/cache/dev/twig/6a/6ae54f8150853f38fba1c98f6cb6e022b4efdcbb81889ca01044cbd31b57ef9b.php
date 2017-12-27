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
        $__internal_f43d6702a937bf80f21bb221255e9cb1eafabe97394847d9faf6d722a1130ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43d6702a937bf80f21bb221255e9cb1eafabe97394847d9faf6d722a1130ab9->enter($__internal_f43d6702a937bf80f21bb221255e9cb1eafabe97394847d9faf6d722a1130ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ab49ed77bb09d977904f1a2c669e076a5f76de237d2e32323259a14df242f291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab49ed77bb09d977904f1a2c669e076a5f76de237d2e32323259a14df242f291->enter($__internal_ab49ed77bb09d977904f1a2c669e076a5f76de237d2e32323259a14df242f291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f43d6702a937bf80f21bb221255e9cb1eafabe97394847d9faf6d722a1130ab9->leave($__internal_f43d6702a937bf80f21bb221255e9cb1eafabe97394847d9faf6d722a1130ab9_prof);

        
        $__internal_ab49ed77bb09d977904f1a2c669e076a5f76de237d2e32323259a14df242f291->leave($__internal_ab49ed77bb09d977904f1a2c669e076a5f76de237d2e32323259a14df242f291_prof);

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
