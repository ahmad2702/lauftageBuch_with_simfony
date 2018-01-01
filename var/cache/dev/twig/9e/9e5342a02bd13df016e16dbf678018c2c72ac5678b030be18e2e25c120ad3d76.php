<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_2b4bc95460d4467eb4e93f07bdf483e11e7c811cad87fb94ed597cdc0307795d extends Twig_Template
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
        $__internal_dd99976cb9a571846451b1bdc83ec25592587c1a4a94b573af413b7ab81d0f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd99976cb9a571846451b1bdc83ec25592587c1a4a94b573af413b7ab81d0f42->enter($__internal_dd99976cb9a571846451b1bdc83ec25592587c1a4a94b573af413b7ab81d0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_65ff07e5fdbb7c4f3210a170a9726337ac48314d01bfaf9631f471c2b5b502da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ff07e5fdbb7c4f3210a170a9726337ac48314d01bfaf9631f471c2b5b502da->enter($__internal_65ff07e5fdbb7c4f3210a170a9726337ac48314d01bfaf9631f471c2b5b502da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_dd99976cb9a571846451b1bdc83ec25592587c1a4a94b573af413b7ab81d0f42->leave($__internal_dd99976cb9a571846451b1bdc83ec25592587c1a4a94b573af413b7ab81d0f42_prof);

        
        $__internal_65ff07e5fdbb7c4f3210a170a9726337ac48314d01bfaf9631f471c2b5b502da->leave($__internal_65ff07e5fdbb7c4f3210a170a9726337ac48314d01bfaf9631f471c2b5b502da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
