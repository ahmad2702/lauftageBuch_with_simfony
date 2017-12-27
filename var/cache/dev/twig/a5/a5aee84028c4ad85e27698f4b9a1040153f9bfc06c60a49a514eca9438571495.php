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
        $__internal_358880ff5f06378052ee5c44e2dda70b8a3f8a1fd7b2f9b131fd2ecee6c364d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358880ff5f06378052ee5c44e2dda70b8a3f8a1fd7b2f9b131fd2ecee6c364d2->enter($__internal_358880ff5f06378052ee5c44e2dda70b8a3f8a1fd7b2f9b131fd2ecee6c364d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_95b8a96764f96190683024dba5ffb653a0cc55f69cabdf367725331bc093377f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b8a96764f96190683024dba5ffb653a0cc55f69cabdf367725331bc093377f->enter($__internal_95b8a96764f96190683024dba5ffb653a0cc55f69cabdf367725331bc093377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_358880ff5f06378052ee5c44e2dda70b8a3f8a1fd7b2f9b131fd2ecee6c364d2->leave($__internal_358880ff5f06378052ee5c44e2dda70b8a3f8a1fd7b2f9b131fd2ecee6c364d2_prof);

        
        $__internal_95b8a96764f96190683024dba5ffb653a0cc55f69cabdf367725331bc093377f->leave($__internal_95b8a96764f96190683024dba5ffb653a0cc55f69cabdf367725331bc093377f_prof);

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
