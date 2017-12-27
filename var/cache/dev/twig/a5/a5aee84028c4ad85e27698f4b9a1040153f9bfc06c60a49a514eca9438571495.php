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
        $__internal_e58a2237fa38b0b6c48046a4543b74da098c8d53406a623c42dc3eb7191c25a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58a2237fa38b0b6c48046a4543b74da098c8d53406a623c42dc3eb7191c25a5->enter($__internal_e58a2237fa38b0b6c48046a4543b74da098c8d53406a623c42dc3eb7191c25a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_30bdd0dd028028603e80daf158d89742cf091738bd0be5b023df9fb0d1b3e299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bdd0dd028028603e80daf158d89742cf091738bd0be5b023df9fb0d1b3e299->enter($__internal_30bdd0dd028028603e80daf158d89742cf091738bd0be5b023df9fb0d1b3e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e58a2237fa38b0b6c48046a4543b74da098c8d53406a623c42dc3eb7191c25a5->leave($__internal_e58a2237fa38b0b6c48046a4543b74da098c8d53406a623c42dc3eb7191c25a5_prof);

        
        $__internal_30bdd0dd028028603e80daf158d89742cf091738bd0be5b023df9fb0d1b3e299->leave($__internal_30bdd0dd028028603e80daf158d89742cf091738bd0be5b023df9fb0d1b3e299_prof);

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
