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
        $__internal_a90cc924e76b14ae3687fa6d392b1ba9699f7b064225ff81206f95ad8d8e34f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90cc924e76b14ae3687fa6d392b1ba9699f7b064225ff81206f95ad8d8e34f7->enter($__internal_a90cc924e76b14ae3687fa6d392b1ba9699f7b064225ff81206f95ad8d8e34f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_62270ef3bd9821a8f8524a99ecc24a962ca6fd622033007bb2d9c2e690f0abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62270ef3bd9821a8f8524a99ecc24a962ca6fd622033007bb2d9c2e690f0abef->enter($__internal_62270ef3bd9821a8f8524a99ecc24a962ca6fd622033007bb2d9c2e690f0abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a90cc924e76b14ae3687fa6d392b1ba9699f7b064225ff81206f95ad8d8e34f7->leave($__internal_a90cc924e76b14ae3687fa6d392b1ba9699f7b064225ff81206f95ad8d8e34f7_prof);

        
        $__internal_62270ef3bd9821a8f8524a99ecc24a962ca6fd622033007bb2d9c2e690f0abef->leave($__internal_62270ef3bd9821a8f8524a99ecc24a962ca6fd622033007bb2d9c2e690f0abef_prof);

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
", "@Twig/Exception/error.js.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
