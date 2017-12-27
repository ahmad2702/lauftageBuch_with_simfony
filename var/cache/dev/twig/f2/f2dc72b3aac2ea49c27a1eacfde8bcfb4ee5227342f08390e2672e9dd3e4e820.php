<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_cbe7a19ce2afbaee1a4291453a915dd2c6be7e46e7038e06df5c408d204fbb3c extends Twig_Template
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
        $__internal_4336b181a0dba1e5137de3d8c2225a70aa73916de3a8e0cce7c12adf7782f04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4336b181a0dba1e5137de3d8c2225a70aa73916de3a8e0cce7c12adf7782f04c->enter($__internal_4336b181a0dba1e5137de3d8c2225a70aa73916de3a8e0cce7c12adf7782f04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_29e9c1d92f23638de946e6bca8be52e64b334f85a7aacffd067b541787dcb969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e9c1d92f23638de946e6bca8be52e64b334f85a7aacffd067b541787dcb969->enter($__internal_29e9c1d92f23638de946e6bca8be52e64b334f85a7aacffd067b541787dcb969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4336b181a0dba1e5137de3d8c2225a70aa73916de3a8e0cce7c12adf7782f04c->leave($__internal_4336b181a0dba1e5137de3d8c2225a70aa73916de3a8e0cce7c12adf7782f04c_prof);

        
        $__internal_29e9c1d92f23638de946e6bca8be52e64b334f85a7aacffd067b541787dcb969->leave($__internal_29e9c1d92f23638de946e6bca8be52e64b334f85a7aacffd067b541787dcb969_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
