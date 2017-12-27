<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_022626092395f5db5eb563c3a19d757301e375cffb08166872c4e240c207fe58 extends Twig_Template
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
        $__internal_3c4bf5033f1837ea40482e5fc21f37d0d087a99a602b08899055c68ed09da87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4bf5033f1837ea40482e5fc21f37d0d087a99a602b08899055c68ed09da87b->enter($__internal_3c4bf5033f1837ea40482e5fc21f37d0d087a99a602b08899055c68ed09da87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0dc53f0052c999a03ba49ab4989a5d46635014800de44b723b597ced38250b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc53f0052c999a03ba49ab4989a5d46635014800de44b723b597ced38250b68->enter($__internal_0dc53f0052c999a03ba49ab4989a5d46635014800de44b723b597ced38250b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3c4bf5033f1837ea40482e5fc21f37d0d087a99a602b08899055c68ed09da87b->leave($__internal_3c4bf5033f1837ea40482e5fc21f37d0d087a99a602b08899055c68ed09da87b_prof);

        
        $__internal_0dc53f0052c999a03ba49ab4989a5d46635014800de44b723b597ced38250b68->leave($__internal_0dc53f0052c999a03ba49ab4989a5d46635014800de44b723b597ced38250b68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
