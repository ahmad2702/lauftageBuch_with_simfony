<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3caeea85482567da5e3b2f82da9bc7fc6775e9a9f32c70f8bf5ed0951e0e0a22 extends Twig_Template
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
        $__internal_8f02928e2f3c56e9749567c7e261cf02cec4fc7cafc05ae51e13acc4c8a16cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f02928e2f3c56e9749567c7e261cf02cec4fc7cafc05ae51e13acc4c8a16cf3->enter($__internal_8f02928e2f3c56e9749567c7e261cf02cec4fc7cafc05ae51e13acc4c8a16cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_0e872918d349ea151672db64d14759705d26eeaff227151da3fcdc8b7a1b1f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e872918d349ea151672db64d14759705d26eeaff227151da3fcdc8b7a1b1f88->enter($__internal_0e872918d349ea151672db64d14759705d26eeaff227151da3fcdc8b7a1b1f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8f02928e2f3c56e9749567c7e261cf02cec4fc7cafc05ae51e13acc4c8a16cf3->leave($__internal_8f02928e2f3c56e9749567c7e261cf02cec4fc7cafc05ae51e13acc4c8a16cf3_prof);

        
        $__internal_0e872918d349ea151672db64d14759705d26eeaff227151da3fcdc8b7a1b1f88->leave($__internal_0e872918d349ea151672db64d14759705d26eeaff227151da3fcdc8b7a1b1f88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
