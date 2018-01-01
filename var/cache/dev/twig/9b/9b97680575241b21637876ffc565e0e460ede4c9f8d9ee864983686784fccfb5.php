<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0215e962e89914587a101577c1d08e663090b3727baf7dbff023c06e666c4225 extends Twig_Template
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
        $__internal_c204bf9070b2b4c60a828ccbba2a35b57a3e4955d1b81f220358cd88b9936e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c204bf9070b2b4c60a828ccbba2a35b57a3e4955d1b81f220358cd88b9936e56->enter($__internal_c204bf9070b2b4c60a828ccbba2a35b57a3e4955d1b81f220358cd88b9936e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9e203385695f6216f7b801dc4018f04d74d29b3e3801af89017ec7d3c90571bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e203385695f6216f7b801dc4018f04d74d29b3e3801af89017ec7d3c90571bf->enter($__internal_9e203385695f6216f7b801dc4018f04d74d29b3e3801af89017ec7d3c90571bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_c204bf9070b2b4c60a828ccbba2a35b57a3e4955d1b81f220358cd88b9936e56->leave($__internal_c204bf9070b2b4c60a828ccbba2a35b57a3e4955d1b81f220358cd88b9936e56_prof);

        
        $__internal_9e203385695f6216f7b801dc4018f04d74d29b3e3801af89017ec7d3c90571bf->leave($__internal_9e203385695f6216f7b801dc4018f04d74d29b3e3801af89017ec7d3c90571bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
