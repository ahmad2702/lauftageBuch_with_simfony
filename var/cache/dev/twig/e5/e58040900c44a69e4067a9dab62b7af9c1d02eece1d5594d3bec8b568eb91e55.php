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
        $__internal_213be5081b519762b1f86edf1f66c02c3c799634136001938815870e2e5747ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213be5081b519762b1f86edf1f66c02c3c799634136001938815870e2e5747ff->enter($__internal_213be5081b519762b1f86edf1f66c02c3c799634136001938815870e2e5747ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_04c70549896837d790a6b230781231aab408640e2bdc82243bab8265a3b6852d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c70549896837d790a6b230781231aab408640e2bdc82243bab8265a3b6852d->enter($__internal_04c70549896837d790a6b230781231aab408640e2bdc82243bab8265a3b6852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_213be5081b519762b1f86edf1f66c02c3c799634136001938815870e2e5747ff->leave($__internal_213be5081b519762b1f86edf1f66c02c3c799634136001938815870e2e5747ff_prof);

        
        $__internal_04c70549896837d790a6b230781231aab408640e2bdc82243bab8265a3b6852d->leave($__internal_04c70549896837d790a6b230781231aab408640e2bdc82243bab8265a3b6852d_prof);

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
