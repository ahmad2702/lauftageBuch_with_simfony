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
        $__internal_23acb70a83048b8ff4b59569dba8199f27c81491d8ffe1613e882b188bf5cca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23acb70a83048b8ff4b59569dba8199f27c81491d8ffe1613e882b188bf5cca7->enter($__internal_23acb70a83048b8ff4b59569dba8199f27c81491d8ffe1613e882b188bf5cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a237d1ed17d369df81ed4a34a7dec3ef24ac07c42babefd0f554c6f5b953bed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a237d1ed17d369df81ed4a34a7dec3ef24ac07c42babefd0f554c6f5b953bed3->enter($__internal_a237d1ed17d369df81ed4a34a7dec3ef24ac07c42babefd0f554c6f5b953bed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_23acb70a83048b8ff4b59569dba8199f27c81491d8ffe1613e882b188bf5cca7->leave($__internal_23acb70a83048b8ff4b59569dba8199f27c81491d8ffe1613e882b188bf5cca7_prof);

        
        $__internal_a237d1ed17d369df81ed4a34a7dec3ef24ac07c42babefd0f554c6f5b953bed3->leave($__internal_a237d1ed17d369df81ed4a34a7dec3ef24ac07c42babefd0f554c6f5b953bed3_prof);

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
