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
        $__internal_7a533c45e2e1653427428550f3bd22d76af3218ed6a88bb637d01d3d99372a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a533c45e2e1653427428550f3bd22d76af3218ed6a88bb637d01d3d99372a9d->enter($__internal_7a533c45e2e1653427428550f3bd22d76af3218ed6a88bb637d01d3d99372a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e38e42838f950df25791d2d01a886d169797cfadd283b52e512b8a4aa9b621a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38e42838f950df25791d2d01a886d169797cfadd283b52e512b8a4aa9b621a6->enter($__internal_e38e42838f950df25791d2d01a886d169797cfadd283b52e512b8a4aa9b621a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7a533c45e2e1653427428550f3bd22d76af3218ed6a88bb637d01d3d99372a9d->leave($__internal_7a533c45e2e1653427428550f3bd22d76af3218ed6a88bb637d01d3d99372a9d_prof);

        
        $__internal_e38e42838f950df25791d2d01a886d169797cfadd283b52e512b8a4aa9b621a6->leave($__internal_e38e42838f950df25791d2d01a886d169797cfadd283b52e512b8a4aa9b621a6_prof);

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
