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
        $__internal_d70181eeebc7fe0dfc3dcbb158277821cfc1dd5b5ad8012a51f5367d00d5cdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70181eeebc7fe0dfc3dcbb158277821cfc1dd5b5ad8012a51f5367d00d5cdf6->enter($__internal_d70181eeebc7fe0dfc3dcbb158277821cfc1dd5b5ad8012a51f5367d00d5cdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_363694fbc5fa52a4ca6250a36d61a228d8522816cd69ffc90a63b30e54a591e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363694fbc5fa52a4ca6250a36d61a228d8522816cd69ffc90a63b30e54a591e9->enter($__internal_363694fbc5fa52a4ca6250a36d61a228d8522816cd69ffc90a63b30e54a591e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d70181eeebc7fe0dfc3dcbb158277821cfc1dd5b5ad8012a51f5367d00d5cdf6->leave($__internal_d70181eeebc7fe0dfc3dcbb158277821cfc1dd5b5ad8012a51f5367d00d5cdf6_prof);

        
        $__internal_363694fbc5fa52a4ca6250a36d61a228d8522816cd69ffc90a63b30e54a591e9->leave($__internal_363694fbc5fa52a4ca6250a36d61a228d8522816cd69ffc90a63b30e54a591e9_prof);

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
", "@Twig/Exception/error.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
