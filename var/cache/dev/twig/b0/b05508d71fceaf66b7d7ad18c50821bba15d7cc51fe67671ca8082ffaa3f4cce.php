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
        $__internal_dcff668b5861f2fb7d69d14a7713d8820d886ddc879a3ce776deba58ff081f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcff668b5861f2fb7d69d14a7713d8820d886ddc879a3ce776deba58ff081f2b->enter($__internal_dcff668b5861f2fb7d69d14a7713d8820d886ddc879a3ce776deba58ff081f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d6cfab1b7bb6eb621836c7f4737374b0b38671fec80ef7ee193a1ea8636bed09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cfab1b7bb6eb621836c7f4737374b0b38671fec80ef7ee193a1ea8636bed09->enter($__internal_d6cfab1b7bb6eb621836c7f4737374b0b38671fec80ef7ee193a1ea8636bed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_dcff668b5861f2fb7d69d14a7713d8820d886ddc879a3ce776deba58ff081f2b->leave($__internal_dcff668b5861f2fb7d69d14a7713d8820d886ddc879a3ce776deba58ff081f2b_prof);

        
        $__internal_d6cfab1b7bb6eb621836c7f4737374b0b38671fec80ef7ee193a1ea8636bed09->leave($__internal_d6cfab1b7bb6eb621836c7f4737374b0b38671fec80ef7ee193a1ea8636bed09_prof);

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
