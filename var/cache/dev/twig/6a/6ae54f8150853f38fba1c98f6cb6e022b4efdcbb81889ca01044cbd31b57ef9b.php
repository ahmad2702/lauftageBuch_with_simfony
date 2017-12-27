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
        $__internal_67a0eb78bb30f38f6a86e090c9bbad3b365c138022f2575006edbb3e8e391731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a0eb78bb30f38f6a86e090c9bbad3b365c138022f2575006edbb3e8e391731->enter($__internal_67a0eb78bb30f38f6a86e090c9bbad3b365c138022f2575006edbb3e8e391731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e85907d1e51c413f54ae30043a42bd7f2f6819d6e006585865c99979da4d2d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85907d1e51c413f54ae30043a42bd7f2f6819d6e006585865c99979da4d2d1b->enter($__internal_e85907d1e51c413f54ae30043a42bd7f2f6819d6e006585865c99979da4d2d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_67a0eb78bb30f38f6a86e090c9bbad3b365c138022f2575006edbb3e8e391731->leave($__internal_67a0eb78bb30f38f6a86e090c9bbad3b365c138022f2575006edbb3e8e391731_prof);

        
        $__internal_e85907d1e51c413f54ae30043a42bd7f2f6819d6e006585865c99979da4d2d1b->leave($__internal_e85907d1e51c413f54ae30043a42bd7f2f6819d6e006585865c99979da4d2d1b_prof);

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
