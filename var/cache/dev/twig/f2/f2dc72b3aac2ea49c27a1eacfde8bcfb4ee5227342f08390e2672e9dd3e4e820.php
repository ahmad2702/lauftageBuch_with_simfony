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
        $__internal_f149014063e52f549c8be2a7a7474446c31e29b838f6acbd0533c77e1d31090f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f149014063e52f549c8be2a7a7474446c31e29b838f6acbd0533c77e1d31090f->enter($__internal_f149014063e52f549c8be2a7a7474446c31e29b838f6acbd0533c77e1d31090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_291f1cd2e3e4ef7a80ce45a35725dc53c275755f160a46e3e5029975787caade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291f1cd2e3e4ef7a80ce45a35725dc53c275755f160a46e3e5029975787caade->enter($__internal_291f1cd2e3e4ef7a80ce45a35725dc53c275755f160a46e3e5029975787caade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f149014063e52f549c8be2a7a7474446c31e29b838f6acbd0533c77e1d31090f->leave($__internal_f149014063e52f549c8be2a7a7474446c31e29b838f6acbd0533c77e1d31090f_prof);

        
        $__internal_291f1cd2e3e4ef7a80ce45a35725dc53c275755f160a46e3e5029975787caade->leave($__internal_291f1cd2e3e4ef7a80ce45a35725dc53c275755f160a46e3e5029975787caade_prof);

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
", "@Twig/Exception/error.atom.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
