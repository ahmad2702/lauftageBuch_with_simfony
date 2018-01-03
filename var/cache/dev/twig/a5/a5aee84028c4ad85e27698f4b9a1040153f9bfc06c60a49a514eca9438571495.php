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
        $__internal_98df7191cff99ec5afb02a37679eb81e7cfb0fc1cb8eae137c20f652752c2fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98df7191cff99ec5afb02a37679eb81e7cfb0fc1cb8eae137c20f652752c2fd7->enter($__internal_98df7191cff99ec5afb02a37679eb81e7cfb0fc1cb8eae137c20f652752c2fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1ca7d41eb0f202ecdb7331f14f86e402abd9387070d73e4798a0f01971e92233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca7d41eb0f202ecdb7331f14f86e402abd9387070d73e4798a0f01971e92233->enter($__internal_1ca7d41eb0f202ecdb7331f14f86e402abd9387070d73e4798a0f01971e92233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_98df7191cff99ec5afb02a37679eb81e7cfb0fc1cb8eae137c20f652752c2fd7->leave($__internal_98df7191cff99ec5afb02a37679eb81e7cfb0fc1cb8eae137c20f652752c2fd7_prof);

        
        $__internal_1ca7d41eb0f202ecdb7331f14f86e402abd9387070d73e4798a0f01971e92233->leave($__internal_1ca7d41eb0f202ecdb7331f14f86e402abd9387070d73e4798a0f01971e92233_prof);

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
