<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_55fad747edc362841d89513991e6545dc74aa493beba76d471180c93cf5c9834 extends Twig_Template
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
        $__internal_29a38789ec57aaf8be9073bd16f68eec7f96a855571b4fc6c02ce856144edf07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a38789ec57aaf8be9073bd16f68eec7f96a855571b4fc6c02ce856144edf07->enter($__internal_29a38789ec57aaf8be9073bd16f68eec7f96a855571b4fc6c02ce856144edf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a5e5afeb0006873cc14bca176e94c1ee5e80887bbfb7024200212e0dd401e655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e5afeb0006873cc14bca176e94c1ee5e80887bbfb7024200212e0dd401e655->enter($__internal_a5e5afeb0006873cc14bca176e94c1ee5e80887bbfb7024200212e0dd401e655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_29a38789ec57aaf8be9073bd16f68eec7f96a855571b4fc6c02ce856144edf07->leave($__internal_29a38789ec57aaf8be9073bd16f68eec7f96a855571b4fc6c02ce856144edf07_prof);

        
        $__internal_a5e5afeb0006873cc14bca176e94c1ee5e80887bbfb7024200212e0dd401e655->leave($__internal_a5e5afeb0006873cc14bca176e94c1ee5e80887bbfb7024200212e0dd401e655_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
