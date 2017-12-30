<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_cbe7a19ce2afbaee1a4291453a915dd2c6be7e46e7038e06df5c408d204fbb3c extends Twig_Template
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
        $__internal_81756734ae11fe1ba62f2da4e7be45bd91ffd5914ed67677af38f29472c10a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81756734ae11fe1ba62f2da4e7be45bd91ffd5914ed67677af38f29472c10a5d->enter($__internal_81756734ae11fe1ba62f2da4e7be45bd91ffd5914ed67677af38f29472c10a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5c406768c2660ecbaf096952291f887ebd74a3eb59a3f90c06bbf2a9c5a09c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c406768c2660ecbaf096952291f887ebd74a3eb59a3f90c06bbf2a9c5a09c42->enter($__internal_5c406768c2660ecbaf096952291f887ebd74a3eb59a3f90c06bbf2a9c5a09c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_81756734ae11fe1ba62f2da4e7be45bd91ffd5914ed67677af38f29472c10a5d->leave($__internal_81756734ae11fe1ba62f2da4e7be45bd91ffd5914ed67677af38f29472c10a5d_prof);

        
        $__internal_5c406768c2660ecbaf096952291f887ebd74a3eb59a3f90c06bbf2a9c5a09c42->leave($__internal_5c406768c2660ecbaf096952291f887ebd74a3eb59a3f90c06bbf2a9c5a09c42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
