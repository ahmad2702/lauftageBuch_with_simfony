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
        $__internal_c317de785ea9bf94963eb48e6b41dd62a833eb7a81f7b9596a23bc4e75469e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c317de785ea9bf94963eb48e6b41dd62a833eb7a81f7b9596a23bc4e75469e35->enter($__internal_c317de785ea9bf94963eb48e6b41dd62a833eb7a81f7b9596a23bc4e75469e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_54c7cdf62871f91673fb4ab42056a79693ab1ea6fbde1dbe5bff1380f4a63add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c7cdf62871f91673fb4ab42056a79693ab1ea6fbde1dbe5bff1380f4a63add->enter($__internal_54c7cdf62871f91673fb4ab42056a79693ab1ea6fbde1dbe5bff1380f4a63add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c317de785ea9bf94963eb48e6b41dd62a833eb7a81f7b9596a23bc4e75469e35->leave($__internal_c317de785ea9bf94963eb48e6b41dd62a833eb7a81f7b9596a23bc4e75469e35_prof);

        
        $__internal_54c7cdf62871f91673fb4ab42056a79693ab1ea6fbde1dbe5bff1380f4a63add->leave($__internal_54c7cdf62871f91673fb4ab42056a79693ab1ea6fbde1dbe5bff1380f4a63add_prof);

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
