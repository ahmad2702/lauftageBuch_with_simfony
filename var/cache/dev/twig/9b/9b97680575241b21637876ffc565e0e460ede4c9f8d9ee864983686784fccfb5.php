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
        $__internal_d906b05e6af2cd3ce7cbf1a8778321419c0155ce10282e2833b050864f92af94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d906b05e6af2cd3ce7cbf1a8778321419c0155ce10282e2833b050864f92af94->enter($__internal_d906b05e6af2cd3ce7cbf1a8778321419c0155ce10282e2833b050864f92af94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_006a1b43e8dee3ff9469ff139b099ca00ce176a15042361dd9848c78a32389c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006a1b43e8dee3ff9469ff139b099ca00ce176a15042361dd9848c78a32389c4->enter($__internal_006a1b43e8dee3ff9469ff139b099ca00ce176a15042361dd9848c78a32389c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_d906b05e6af2cd3ce7cbf1a8778321419c0155ce10282e2833b050864f92af94->leave($__internal_d906b05e6af2cd3ce7cbf1a8778321419c0155ce10282e2833b050864f92af94_prof);

        
        $__internal_006a1b43e8dee3ff9469ff139b099ca00ce176a15042361dd9848c78a32389c4->leave($__internal_006a1b43e8dee3ff9469ff139b099ca00ce176a15042361dd9848c78a32389c4_prof);

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
", "@Twig/Exception/error.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
