<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_89cd54514381d2f5525bb27a15aab0459b1a44ef0578f6a6db0752089e397b21 extends Twig_Template
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
        $__internal_2754bf5b8f539438d1d1a7ec957d564e7999083085c0eaab7b1acbbb9f208d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2754bf5b8f539438d1d1a7ec957d564e7999083085c0eaab7b1acbbb9f208d74->enter($__internal_2754bf5b8f539438d1d1a7ec957d564e7999083085c0eaab7b1acbbb9f208d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_62e4e24700a022c44f851b4251c4390edd0cddc16fb2e5924c9474639f0e4618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e4e24700a022c44f851b4251c4390edd0cddc16fb2e5924c9474639f0e4618->enter($__internal_62e4e24700a022c44f851b4251c4390edd0cddc16fb2e5924c9474639f0e4618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2754bf5b8f539438d1d1a7ec957d564e7999083085c0eaab7b1acbbb9f208d74->leave($__internal_2754bf5b8f539438d1d1a7ec957d564e7999083085c0eaab7b1acbbb9f208d74_prof);

        
        $__internal_62e4e24700a022c44f851b4251c4390edd0cddc16fb2e5924c9474639f0e4618->leave($__internal_62e4e24700a022c44f851b4251c4390edd0cddc16fb2e5924c9474639f0e4618_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
