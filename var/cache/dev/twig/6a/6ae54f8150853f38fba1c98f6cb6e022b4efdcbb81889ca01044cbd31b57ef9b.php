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
        $__internal_06388cbcfdec74529f7591060b17ff4179733c6e8ab0221bd9aafebafe6f43b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06388cbcfdec74529f7591060b17ff4179733c6e8ab0221bd9aafebafe6f43b9->enter($__internal_06388cbcfdec74529f7591060b17ff4179733c6e8ab0221bd9aafebafe6f43b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b3d1e5527c7b9bc3c6d1c989ec452d212a188da5e7e3d5f46a573addc5cc4e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d1e5527c7b9bc3c6d1c989ec452d212a188da5e7e3d5f46a573addc5cc4e7d->enter($__internal_b3d1e5527c7b9bc3c6d1c989ec452d212a188da5e7e3d5f46a573addc5cc4e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_06388cbcfdec74529f7591060b17ff4179733c6e8ab0221bd9aafebafe6f43b9->leave($__internal_06388cbcfdec74529f7591060b17ff4179733c6e8ab0221bd9aafebafe6f43b9_prof);

        
        $__internal_b3d1e5527c7b9bc3c6d1c989ec452d212a188da5e7e3d5f46a573addc5cc4e7d->leave($__internal_b3d1e5527c7b9bc3c6d1c989ec452d212a188da5e7e3d5f46a573addc5cc4e7d_prof);

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
