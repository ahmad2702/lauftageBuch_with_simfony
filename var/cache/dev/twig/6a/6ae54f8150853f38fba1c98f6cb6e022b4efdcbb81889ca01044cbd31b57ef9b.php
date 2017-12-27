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
        $__internal_981cb199a479f6901cf3da930b37a273ec84582515853560a752764b5c8b9e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981cb199a479f6901cf3da930b37a273ec84582515853560a752764b5c8b9e4a->enter($__internal_981cb199a479f6901cf3da930b37a273ec84582515853560a752764b5c8b9e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_8c4a714a5e5dded7e1fd3e6cd543aa5e31a7897c1f417e42e791ce2d461d20bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4a714a5e5dded7e1fd3e6cd543aa5e31a7897c1f417e42e791ce2d461d20bb->enter($__internal_8c4a714a5e5dded7e1fd3e6cd543aa5e31a7897c1f417e42e791ce2d461d20bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_981cb199a479f6901cf3da930b37a273ec84582515853560a752764b5c8b9e4a->leave($__internal_981cb199a479f6901cf3da930b37a273ec84582515853560a752764b5c8b9e4a_prof);

        
        $__internal_8c4a714a5e5dded7e1fd3e6cd543aa5e31a7897c1f417e42e791ce2d461d20bb->leave($__internal_8c4a714a5e5dded7e1fd3e6cd543aa5e31a7897c1f417e42e791ce2d461d20bb_prof);

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
