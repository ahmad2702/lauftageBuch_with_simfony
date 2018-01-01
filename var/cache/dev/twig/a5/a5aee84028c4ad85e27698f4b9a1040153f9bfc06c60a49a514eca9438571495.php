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
        $__internal_78ce11c0acf5e7702ee666d9fb26dea23798de63f7c074a50d8b3fd74cc71ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ce11c0acf5e7702ee666d9fb26dea23798de63f7c074a50d8b3fd74cc71ede->enter($__internal_78ce11c0acf5e7702ee666d9fb26dea23798de63f7c074a50d8b3fd74cc71ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c6db0c1dfec55181b398ad725e5df62c9f36b42a2a1b5f3af6da27617fa31418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6db0c1dfec55181b398ad725e5df62c9f36b42a2a1b5f3af6da27617fa31418->enter($__internal_c6db0c1dfec55181b398ad725e5df62c9f36b42a2a1b5f3af6da27617fa31418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_78ce11c0acf5e7702ee666d9fb26dea23798de63f7c074a50d8b3fd74cc71ede->leave($__internal_78ce11c0acf5e7702ee666d9fb26dea23798de63f7c074a50d8b3fd74cc71ede_prof);

        
        $__internal_c6db0c1dfec55181b398ad725e5df62c9f36b42a2a1b5f3af6da27617fa31418->leave($__internal_c6db0c1dfec55181b398ad725e5df62c9f36b42a2a1b5f3af6da27617fa31418_prof);

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
", "@Twig/Exception/exception.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
