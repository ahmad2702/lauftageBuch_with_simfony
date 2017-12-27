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
        $__internal_9a5bb07f1faf49b1e466a30d2981749106ac37542a0c48eafa3805f57f996d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5bb07f1faf49b1e466a30d2981749106ac37542a0c48eafa3805f57f996d78->enter($__internal_9a5bb07f1faf49b1e466a30d2981749106ac37542a0c48eafa3805f57f996d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_54ea9126badad91d5011270e4023d5fa136cf239683f8a8198038f989866e718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ea9126badad91d5011270e4023d5fa136cf239683f8a8198038f989866e718->enter($__internal_54ea9126badad91d5011270e4023d5fa136cf239683f8a8198038f989866e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9a5bb07f1faf49b1e466a30d2981749106ac37542a0c48eafa3805f57f996d78->leave($__internal_9a5bb07f1faf49b1e466a30d2981749106ac37542a0c48eafa3805f57f996d78_prof);

        
        $__internal_54ea9126badad91d5011270e4023d5fa136cf239683f8a8198038f989866e718->leave($__internal_54ea9126badad91d5011270e4023d5fa136cf239683f8a8198038f989866e718_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
