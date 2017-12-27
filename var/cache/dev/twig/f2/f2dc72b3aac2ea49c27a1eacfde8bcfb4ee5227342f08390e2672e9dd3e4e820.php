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
        $__internal_66788e3805ca18cd0a72a92172046e4ed5d967da799c375051c0bb5c663bfa01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66788e3805ca18cd0a72a92172046e4ed5d967da799c375051c0bb5c663bfa01->enter($__internal_66788e3805ca18cd0a72a92172046e4ed5d967da799c375051c0bb5c663bfa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_15cb855884c1cc7cbd2c50ec35646a79fd0a9aea5d979141b0348a98748c4ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cb855884c1cc7cbd2c50ec35646a79fd0a9aea5d979141b0348a98748c4ba0->enter($__internal_15cb855884c1cc7cbd2c50ec35646a79fd0a9aea5d979141b0348a98748c4ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66788e3805ca18cd0a72a92172046e4ed5d967da799c375051c0bb5c663bfa01->leave($__internal_66788e3805ca18cd0a72a92172046e4ed5d967da799c375051c0bb5c663bfa01_prof);

        
        $__internal_15cb855884c1cc7cbd2c50ec35646a79fd0a9aea5d979141b0348a98748c4ba0->leave($__internal_15cb855884c1cc7cbd2c50ec35646a79fd0a9aea5d979141b0348a98748c4ba0_prof);

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
