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
        $__internal_50dda79dc1720dbbe668d51e92ff96f57304706bc8ebc211c7262da61457cb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dda79dc1720dbbe668d51e92ff96f57304706bc8ebc211c7262da61457cb2b->enter($__internal_50dda79dc1720dbbe668d51e92ff96f57304706bc8ebc211c7262da61457cb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_1bdce02e29f89a2a2d8d1c6a5b708b83f868623cd6825d47d4cc5ed1f6e93623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdce02e29f89a2a2d8d1c6a5b708b83f868623cd6825d47d4cc5ed1f6e93623->enter($__internal_1bdce02e29f89a2a2d8d1c6a5b708b83f868623cd6825d47d4cc5ed1f6e93623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_50dda79dc1720dbbe668d51e92ff96f57304706bc8ebc211c7262da61457cb2b->leave($__internal_50dda79dc1720dbbe668d51e92ff96f57304706bc8ebc211c7262da61457cb2b_prof);

        
        $__internal_1bdce02e29f89a2a2d8d1c6a5b708b83f868623cd6825d47d4cc5ed1f6e93623->leave($__internal_1bdce02e29f89a2a2d8d1c6a5b708b83f868623cd6825d47d4cc5ed1f6e93623_prof);

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
