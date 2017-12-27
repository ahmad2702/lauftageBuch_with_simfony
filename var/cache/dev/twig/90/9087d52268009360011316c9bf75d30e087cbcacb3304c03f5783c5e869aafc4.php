<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_89cd54514381d2f5525bb27a15aab0459b1a44ef0578f6a6db0752089e397b21 extends Twig_Template
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
        $__internal_aa6f44180a8706c7a59c729b01b077d9d9b7c1f0e3e90350dfb368370f36311e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6f44180a8706c7a59c729b01b077d9d9b7c1f0e3e90350dfb368370f36311e->enter($__internal_aa6f44180a8706c7a59c729b01b077d9d9b7c1f0e3e90350dfb368370f36311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_dded26c07c1de7c8c5a346c3c4d4a78eaeb967d9161115359cb7cd37b6867632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dded26c07c1de7c8c5a346c3c4d4a78eaeb967d9161115359cb7cd37b6867632->enter($__internal_dded26c07c1de7c8c5a346c3c4d4a78eaeb967d9161115359cb7cd37b6867632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_aa6f44180a8706c7a59c729b01b077d9d9b7c1f0e3e90350dfb368370f36311e->leave($__internal_aa6f44180a8706c7a59c729b01b077d9d9b7c1f0e3e90350dfb368370f36311e_prof);

        
        $__internal_dded26c07c1de7c8c5a346c3c4d4a78eaeb967d9161115359cb7cd37b6867632->leave($__internal_dded26c07c1de7c8c5a346c3c4d4a78eaeb967d9161115359cb7cd37b6867632_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
