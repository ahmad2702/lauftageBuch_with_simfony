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
        $__internal_453bde6a5fcace9901583a7531606cf59f0dbd297a5105a1083d56a8061d4365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453bde6a5fcace9901583a7531606cf59f0dbd297a5105a1083d56a8061d4365->enter($__internal_453bde6a5fcace9901583a7531606cf59f0dbd297a5105a1083d56a8061d4365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_921f69dff857972cb293ba3729a5e9c41c285e420de547ac3edbded9b4c2a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921f69dff857972cb293ba3729a5e9c41c285e420de547ac3edbded9b4c2a191->enter($__internal_921f69dff857972cb293ba3729a5e9c41c285e420de547ac3edbded9b4c2a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_453bde6a5fcace9901583a7531606cf59f0dbd297a5105a1083d56a8061d4365->leave($__internal_453bde6a5fcace9901583a7531606cf59f0dbd297a5105a1083d56a8061d4365_prof);

        
        $__internal_921f69dff857972cb293ba3729a5e9c41c285e420de547ac3edbded9b4c2a191->leave($__internal_921f69dff857972cb293ba3729a5e9c41c285e420de547ac3edbded9b4c2a191_prof);

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
