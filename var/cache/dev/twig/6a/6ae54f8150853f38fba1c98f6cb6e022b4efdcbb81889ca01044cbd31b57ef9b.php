<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2ba5f2a8a0f6725b82d8a59d2fabbabaa62f2de8bd6f9096656e5891ab73305c extends Twig_Template
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
        $__internal_d78d8416d31327a495bad66c166fbb1010b4b2f74210235eaff0fb071cd5fe6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78d8416d31327a495bad66c166fbb1010b4b2f74210235eaff0fb071cd5fe6a->enter($__internal_d78d8416d31327a495bad66c166fbb1010b4b2f74210235eaff0fb071cd5fe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_cf42a6f909367ef97a099e0ffd3190123bf75bfc0495c4eae0f547ad58d77306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf42a6f909367ef97a099e0ffd3190123bf75bfc0495c4eae0f547ad58d77306->enter($__internal_cf42a6f909367ef97a099e0ffd3190123bf75bfc0495c4eae0f547ad58d77306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d78d8416d31327a495bad66c166fbb1010b4b2f74210235eaff0fb071cd5fe6a->leave($__internal_d78d8416d31327a495bad66c166fbb1010b4b2f74210235eaff0fb071cd5fe6a_prof);

        
        $__internal_cf42a6f909367ef97a099e0ffd3190123bf75bfc0495c4eae0f547ad58d77306->leave($__internal_cf42a6f909367ef97a099e0ffd3190123bf75bfc0495c4eae0f547ad58d77306_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
