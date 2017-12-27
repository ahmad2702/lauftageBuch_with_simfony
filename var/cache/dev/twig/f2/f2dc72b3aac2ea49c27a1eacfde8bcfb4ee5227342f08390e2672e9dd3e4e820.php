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
        $__internal_3e98cd5413b24f53ce4c5f75e7f6f63c0ae9c865917b772dbf399b7eecffdf5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e98cd5413b24f53ce4c5f75e7f6f63c0ae9c865917b772dbf399b7eecffdf5c->enter($__internal_3e98cd5413b24f53ce4c5f75e7f6f63c0ae9c865917b772dbf399b7eecffdf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0ae27cedc3b0d6951fb65c22983a1b6dab7137f584fc9bfda99370622a5a1980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae27cedc3b0d6951fb65c22983a1b6dab7137f584fc9bfda99370622a5a1980->enter($__internal_0ae27cedc3b0d6951fb65c22983a1b6dab7137f584fc9bfda99370622a5a1980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3e98cd5413b24f53ce4c5f75e7f6f63c0ae9c865917b772dbf399b7eecffdf5c->leave($__internal_3e98cd5413b24f53ce4c5f75e7f6f63c0ae9c865917b772dbf399b7eecffdf5c_prof);

        
        $__internal_0ae27cedc3b0d6951fb65c22983a1b6dab7137f584fc9bfda99370622a5a1980->leave($__internal_0ae27cedc3b0d6951fb65c22983a1b6dab7137f584fc9bfda99370622a5a1980_prof);

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
