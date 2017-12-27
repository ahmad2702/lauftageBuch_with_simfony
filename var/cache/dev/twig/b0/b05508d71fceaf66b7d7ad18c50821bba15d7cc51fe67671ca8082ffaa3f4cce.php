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
        $__internal_3f13eaa8f8d7b49428d00c48dbc9378d7c295ef3cda2f4a04882ce079d5423d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f13eaa8f8d7b49428d00c48dbc9378d7c295ef3cda2f4a04882ce079d5423d4->enter($__internal_3f13eaa8f8d7b49428d00c48dbc9378d7c295ef3cda2f4a04882ce079d5423d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8aa4ceaf26a457d6e420d4fae3f200da907ae186f385579c007e22b9f2b49b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa4ceaf26a457d6e420d4fae3f200da907ae186f385579c007e22b9f2b49b8f->enter($__internal_8aa4ceaf26a457d6e420d4fae3f200da907ae186f385579c007e22b9f2b49b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3f13eaa8f8d7b49428d00c48dbc9378d7c295ef3cda2f4a04882ce079d5423d4->leave($__internal_3f13eaa8f8d7b49428d00c48dbc9378d7c295ef3cda2f4a04882ce079d5423d4_prof);

        
        $__internal_8aa4ceaf26a457d6e420d4fae3f200da907ae186f385579c007e22b9f2b49b8f->leave($__internal_8aa4ceaf26a457d6e420d4fae3f200da907ae186f385579c007e22b9f2b49b8f_prof);

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
