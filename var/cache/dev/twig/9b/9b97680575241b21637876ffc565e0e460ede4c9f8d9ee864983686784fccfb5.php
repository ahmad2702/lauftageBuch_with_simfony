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
        $__internal_91545d0de0d1c36b540d2431bca0b8da09cdbd6ac84f277ebccd36e230ee2f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91545d0de0d1c36b540d2431bca0b8da09cdbd6ac84f277ebccd36e230ee2f46->enter($__internal_91545d0de0d1c36b540d2431bca0b8da09cdbd6ac84f277ebccd36e230ee2f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_97bbf686ea402c7a81e6bc2817527e40c0a11b37fa1b1facba60dcc6826f96de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bbf686ea402c7a81e6bc2817527e40c0a11b37fa1b1facba60dcc6826f96de->enter($__internal_97bbf686ea402c7a81e6bc2817527e40c0a11b37fa1b1facba60dcc6826f96de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_91545d0de0d1c36b540d2431bca0b8da09cdbd6ac84f277ebccd36e230ee2f46->leave($__internal_91545d0de0d1c36b540d2431bca0b8da09cdbd6ac84f277ebccd36e230ee2f46_prof);

        
        $__internal_97bbf686ea402c7a81e6bc2817527e40c0a11b37fa1b1facba60dcc6826f96de->leave($__internal_97bbf686ea402c7a81e6bc2817527e40c0a11b37fa1b1facba60dcc6826f96de_prof);

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
