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
        $__internal_7801534ec5abff0159b76a778de666152273a24d0cae4606481af8cf827862c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7801534ec5abff0159b76a778de666152273a24d0cae4606481af8cf827862c0->enter($__internal_7801534ec5abff0159b76a778de666152273a24d0cae4606481af8cf827862c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3ba20a06ba3689fa424425982671f6556f9d8d50b6b0fdd156ecb42ee99b2f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba20a06ba3689fa424425982671f6556f9d8d50b6b0fdd156ecb42ee99b2f9a->enter($__internal_3ba20a06ba3689fa424425982671f6556f9d8d50b6b0fdd156ecb42ee99b2f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_7801534ec5abff0159b76a778de666152273a24d0cae4606481af8cf827862c0->leave($__internal_7801534ec5abff0159b76a778de666152273a24d0cae4606481af8cf827862c0_prof);

        
        $__internal_3ba20a06ba3689fa424425982671f6556f9d8d50b6b0fdd156ecb42ee99b2f9a->leave($__internal_3ba20a06ba3689fa424425982671f6556f9d8d50b6b0fdd156ecb42ee99b2f9a_prof);

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
