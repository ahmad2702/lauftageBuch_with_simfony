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
        $__internal_4c5c4753468c712240d13572bc6f7b20ee486247e52734bd770ab3a48db31c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5c4753468c712240d13572bc6f7b20ee486247e52734bd770ab3a48db31c55->enter($__internal_4c5c4753468c712240d13572bc6f7b20ee486247e52734bd770ab3a48db31c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e9705f6f9214b29faf26a6e0b72fc38e9d93db6459d35ecfed5150b780901c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9705f6f9214b29faf26a6e0b72fc38e9d93db6459d35ecfed5150b780901c33->enter($__internal_e9705f6f9214b29faf26a6e0b72fc38e9d93db6459d35ecfed5150b780901c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4c5c4753468c712240d13572bc6f7b20ee486247e52734bd770ab3a48db31c55->leave($__internal_4c5c4753468c712240d13572bc6f7b20ee486247e52734bd770ab3a48db31c55_prof);

        
        $__internal_e9705f6f9214b29faf26a6e0b72fc38e9d93db6459d35ecfed5150b780901c33->leave($__internal_e9705f6f9214b29faf26a6e0b72fc38e9d93db6459d35ecfed5150b780901c33_prof);

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
", "@Twig/Exception/exception.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
