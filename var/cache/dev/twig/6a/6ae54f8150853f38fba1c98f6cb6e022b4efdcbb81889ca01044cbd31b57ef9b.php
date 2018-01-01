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
        $__internal_f5100e99d1337b4ffc5ab2780aa042e379185ea96b1b36aa7f4cb61acba206fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5100e99d1337b4ffc5ab2780aa042e379185ea96b1b36aa7f4cb61acba206fa->enter($__internal_f5100e99d1337b4ffc5ab2780aa042e379185ea96b1b36aa7f4cb61acba206fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_24a3d3daf54a7d589d0dcb3f00b30fe48b435d23066fe31a61da9859bcafb0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a3d3daf54a7d589d0dcb3f00b30fe48b435d23066fe31a61da9859bcafb0cf->enter($__internal_24a3d3daf54a7d589d0dcb3f00b30fe48b435d23066fe31a61da9859bcafb0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f5100e99d1337b4ffc5ab2780aa042e379185ea96b1b36aa7f4cb61acba206fa->leave($__internal_f5100e99d1337b4ffc5ab2780aa042e379185ea96b1b36aa7f4cb61acba206fa_prof);

        
        $__internal_24a3d3daf54a7d589d0dcb3f00b30fe48b435d23066fe31a61da9859bcafb0cf->leave($__internal_24a3d3daf54a7d589d0dcb3f00b30fe48b435d23066fe31a61da9859bcafb0cf_prof);

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
