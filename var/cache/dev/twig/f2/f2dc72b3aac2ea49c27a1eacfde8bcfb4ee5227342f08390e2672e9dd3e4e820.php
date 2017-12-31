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
        $__internal_38f56fb8217c57776a528b1345820e94139c4526aeabfd0cc478c26084deac66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f56fb8217c57776a528b1345820e94139c4526aeabfd0cc478c26084deac66->enter($__internal_38f56fb8217c57776a528b1345820e94139c4526aeabfd0cc478c26084deac66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ff932844b39455b51cb163e837bb20b398b94d1ddd391b2e937c9c2a997eaf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff932844b39455b51cb163e837bb20b398b94d1ddd391b2e937c9c2a997eaf82->enter($__internal_ff932844b39455b51cb163e837bb20b398b94d1ddd391b2e937c9c2a997eaf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_38f56fb8217c57776a528b1345820e94139c4526aeabfd0cc478c26084deac66->leave($__internal_38f56fb8217c57776a528b1345820e94139c4526aeabfd0cc478c26084deac66_prof);

        
        $__internal_ff932844b39455b51cb163e837bb20b398b94d1ddd391b2e937c9c2a997eaf82->leave($__internal_ff932844b39455b51cb163e837bb20b398b94d1ddd391b2e937c9c2a997eaf82_prof);

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
