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
        $__internal_a3e1fb8cd35b0859d504bdcc5a4b923796b64de953e9030228817a3ebd6b1313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e1fb8cd35b0859d504bdcc5a4b923796b64de953e9030228817a3ebd6b1313->enter($__internal_a3e1fb8cd35b0859d504bdcc5a4b923796b64de953e9030228817a3ebd6b1313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_bb791b3e83cd9615f3b13f0fc2242f01b7ea5d0a5eddf32598cb90d36dbe898a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb791b3e83cd9615f3b13f0fc2242f01b7ea5d0a5eddf32598cb90d36dbe898a->enter($__internal_bb791b3e83cd9615f3b13f0fc2242f01b7ea5d0a5eddf32598cb90d36dbe898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a3e1fb8cd35b0859d504bdcc5a4b923796b64de953e9030228817a3ebd6b1313->leave($__internal_a3e1fb8cd35b0859d504bdcc5a4b923796b64de953e9030228817a3ebd6b1313_prof);

        
        $__internal_bb791b3e83cd9615f3b13f0fc2242f01b7ea5d0a5eddf32598cb90d36dbe898a->leave($__internal_bb791b3e83cd9615f3b13f0fc2242f01b7ea5d0a5eddf32598cb90d36dbe898a_prof);

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
", "@Twig/Exception/error.rdf.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
