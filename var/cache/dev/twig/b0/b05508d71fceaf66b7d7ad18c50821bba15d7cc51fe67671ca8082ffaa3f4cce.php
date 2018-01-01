<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a482b88b71c7de531c2889cddd5acf98c50494c0dc2414d1b70f252fa368a3cc extends Twig_Template
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
        $__internal_dfa4811f2763ac963f0350661d19e4d39fe853574912b0d66eab834235b34168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa4811f2763ac963f0350661d19e4d39fe853574912b0d66eab834235b34168->enter($__internal_dfa4811f2763ac963f0350661d19e4d39fe853574912b0d66eab834235b34168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_da182be2688e884399332490148a34aa31eaa730b1137aea773239b10ea111bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da182be2688e884399332490148a34aa31eaa730b1137aea773239b10ea111bb->enter($__internal_da182be2688e884399332490148a34aa31eaa730b1137aea773239b10ea111bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_dfa4811f2763ac963f0350661d19e4d39fe853574912b0d66eab834235b34168->leave($__internal_dfa4811f2763ac963f0350661d19e4d39fe853574912b0d66eab834235b34168_prof);

        
        $__internal_da182be2688e884399332490148a34aa31eaa730b1137aea773239b10ea111bb->leave($__internal_da182be2688e884399332490148a34aa31eaa730b1137aea773239b10ea111bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
