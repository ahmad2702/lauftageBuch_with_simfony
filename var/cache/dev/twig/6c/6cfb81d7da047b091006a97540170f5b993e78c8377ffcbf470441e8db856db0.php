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
        $__internal_b1d919eafffc3b67654259f10b91e9feecf26b5f372b2f934c992c80146c83f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d919eafffc3b67654259f10b91e9feecf26b5f372b2f934c992c80146c83f5->enter($__internal_b1d919eafffc3b67654259f10b91e9feecf26b5f372b2f934c992c80146c83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_20854f5ad269f72274c4e8da9df2a42dce4ce8661d0b75bab3be548b7dbd1e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20854f5ad269f72274c4e8da9df2a42dce4ce8661d0b75bab3be548b7dbd1e05->enter($__internal_20854f5ad269f72274c4e8da9df2a42dce4ce8661d0b75bab3be548b7dbd1e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b1d919eafffc3b67654259f10b91e9feecf26b5f372b2f934c992c80146c83f5->leave($__internal_b1d919eafffc3b67654259f10b91e9feecf26b5f372b2f934c992c80146c83f5_prof);

        
        $__internal_20854f5ad269f72274c4e8da9df2a42dce4ce8661d0b75bab3be548b7dbd1e05->leave($__internal_20854f5ad269f72274c4e8da9df2a42dce4ce8661d0b75bab3be548b7dbd1e05_prof);

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
