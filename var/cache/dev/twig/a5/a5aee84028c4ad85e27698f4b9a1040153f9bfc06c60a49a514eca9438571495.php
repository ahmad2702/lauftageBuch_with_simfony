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
        $__internal_8a738a5013e3ce400dd99b5702c8eb5f2e6776088926e1aef3523f446e7e6365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a738a5013e3ce400dd99b5702c8eb5f2e6776088926e1aef3523f446e7e6365->enter($__internal_8a738a5013e3ce400dd99b5702c8eb5f2e6776088926e1aef3523f446e7e6365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7c459dce77b08ca6a10e800e0100759b9b26ead02360decd29667d6254928e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c459dce77b08ca6a10e800e0100759b9b26ead02360decd29667d6254928e89->enter($__internal_7c459dce77b08ca6a10e800e0100759b9b26ead02360decd29667d6254928e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8a738a5013e3ce400dd99b5702c8eb5f2e6776088926e1aef3523f446e7e6365->leave($__internal_8a738a5013e3ce400dd99b5702c8eb5f2e6776088926e1aef3523f446e7e6365_prof);

        
        $__internal_7c459dce77b08ca6a10e800e0100759b9b26ead02360decd29667d6254928e89->leave($__internal_7c459dce77b08ca6a10e800e0100759b9b26ead02360decd29667d6254928e89_prof);

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
