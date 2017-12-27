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
        $__internal_afa1edd31e4804a96e1cea442097e9d032ade4941f4c1f0c7b44433a1c4de980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa1edd31e4804a96e1cea442097e9d032ade4941f4c1f0c7b44433a1c4de980->enter($__internal_afa1edd31e4804a96e1cea442097e9d032ade4941f4c1f0c7b44433a1c4de980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_65741f3c1199bc3303556eef3d0aaa8ad63b9570d31fd0176c62c5043d17bd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65741f3c1199bc3303556eef3d0aaa8ad63b9570d31fd0176c62c5043d17bd4c->enter($__internal_65741f3c1199bc3303556eef3d0aaa8ad63b9570d31fd0176c62c5043d17bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_afa1edd31e4804a96e1cea442097e9d032ade4941f4c1f0c7b44433a1c4de980->leave($__internal_afa1edd31e4804a96e1cea442097e9d032ade4941f4c1f0c7b44433a1c4de980_prof);

        
        $__internal_65741f3c1199bc3303556eef3d0aaa8ad63b9570d31fd0176c62c5043d17bd4c->leave($__internal_65741f3c1199bc3303556eef3d0aaa8ad63b9570d31fd0176c62c5043d17bd4c_prof);

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
