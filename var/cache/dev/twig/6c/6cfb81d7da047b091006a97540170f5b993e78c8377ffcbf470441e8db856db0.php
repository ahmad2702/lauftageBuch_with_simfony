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
        $__internal_364fef21fff2682c72358567f51a1ff1b33f3d835cd9d096ead723252f30a8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364fef21fff2682c72358567f51a1ff1b33f3d835cd9d096ead723252f30a8e8->enter($__internal_364fef21fff2682c72358567f51a1ff1b33f3d835cd9d096ead723252f30a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f26fe34fa3ad74dc1c21ec626f85521f7e34ca5f352e2df24726675ab9b29e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26fe34fa3ad74dc1c21ec626f85521f7e34ca5f352e2df24726675ab9b29e1f->enter($__internal_f26fe34fa3ad74dc1c21ec626f85521f7e34ca5f352e2df24726675ab9b29e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_364fef21fff2682c72358567f51a1ff1b33f3d835cd9d096ead723252f30a8e8->leave($__internal_364fef21fff2682c72358567f51a1ff1b33f3d835cd9d096ead723252f30a8e8_prof);

        
        $__internal_f26fe34fa3ad74dc1c21ec626f85521f7e34ca5f352e2df24726675ab9b29e1f->leave($__internal_f26fe34fa3ad74dc1c21ec626f85521f7e34ca5f352e2df24726675ab9b29e1f_prof);

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
