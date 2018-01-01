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
        $__internal_80b33979cb63ba878fb6790ff73c3802940aa96dad43eefa3801f67df6850411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b33979cb63ba878fb6790ff73c3802940aa96dad43eefa3801f67df6850411->enter($__internal_80b33979cb63ba878fb6790ff73c3802940aa96dad43eefa3801f67df6850411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_555021e7af9057700d96bb8e2a97497adc35dafb87534282af9fd2384302f3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555021e7af9057700d96bb8e2a97497adc35dafb87534282af9fd2384302f3bb->enter($__internal_555021e7af9057700d96bb8e2a97497adc35dafb87534282af9fd2384302f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_80b33979cb63ba878fb6790ff73c3802940aa96dad43eefa3801f67df6850411->leave($__internal_80b33979cb63ba878fb6790ff73c3802940aa96dad43eefa3801f67df6850411_prof);

        
        $__internal_555021e7af9057700d96bb8e2a97497adc35dafb87534282af9fd2384302f3bb->leave($__internal_555021e7af9057700d96bb8e2a97497adc35dafb87534282af9fd2384302f3bb_prof);

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
