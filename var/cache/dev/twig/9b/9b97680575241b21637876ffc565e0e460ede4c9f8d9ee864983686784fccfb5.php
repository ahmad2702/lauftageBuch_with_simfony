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
        $__internal_9bdcd338bd51d18a86d89f5ebbee539366bf6f7e9ec0509ef3b2aea2cad8ae99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdcd338bd51d18a86d89f5ebbee539366bf6f7e9ec0509ef3b2aea2cad8ae99->enter($__internal_9bdcd338bd51d18a86d89f5ebbee539366bf6f7e9ec0509ef3b2aea2cad8ae99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7940877e0c359282178183aefa5fd9eebf047e697a3701cd1467f1df11f39aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7940877e0c359282178183aefa5fd9eebf047e697a3701cd1467f1df11f39aa9->enter($__internal_7940877e0c359282178183aefa5fd9eebf047e697a3701cd1467f1df11f39aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_9bdcd338bd51d18a86d89f5ebbee539366bf6f7e9ec0509ef3b2aea2cad8ae99->leave($__internal_9bdcd338bd51d18a86d89f5ebbee539366bf6f7e9ec0509ef3b2aea2cad8ae99_prof);

        
        $__internal_7940877e0c359282178183aefa5fd9eebf047e697a3701cd1467f1df11f39aa9->leave($__internal_7940877e0c359282178183aefa5fd9eebf047e697a3701cd1467f1df11f39aa9_prof);

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
