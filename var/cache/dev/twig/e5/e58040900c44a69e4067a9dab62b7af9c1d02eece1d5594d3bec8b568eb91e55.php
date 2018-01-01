<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_17b6bf48ada0c81b0cfa45ffec1d35a253bff017710200e161787644038a69d6 extends Twig_Template
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
        $__internal_912fd48a8b08d44414f5c04f406d6e7313f75003d7119a6b41d1530a5b45e3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912fd48a8b08d44414f5c04f406d6e7313f75003d7119a6b41d1530a5b45e3bf->enter($__internal_912fd48a8b08d44414f5c04f406d6e7313f75003d7119a6b41d1530a5b45e3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0ef11e3175ae5b3addd7b32a301f1b7adbcf67c64a26b53494ae8d8ac45cf631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef11e3175ae5b3addd7b32a301f1b7adbcf67c64a26b53494ae8d8ac45cf631->enter($__internal_0ef11e3175ae5b3addd7b32a301f1b7adbcf67c64a26b53494ae8d8ac45cf631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_912fd48a8b08d44414f5c04f406d6e7313f75003d7119a6b41d1530a5b45e3bf->leave($__internal_912fd48a8b08d44414f5c04f406d6e7313f75003d7119a6b41d1530a5b45e3bf_prof);

        
        $__internal_0ef11e3175ae5b3addd7b32a301f1b7adbcf67c64a26b53494ae8d8ac45cf631->leave($__internal_0ef11e3175ae5b3addd7b32a301f1b7adbcf67c64a26b53494ae8d8ac45cf631_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
