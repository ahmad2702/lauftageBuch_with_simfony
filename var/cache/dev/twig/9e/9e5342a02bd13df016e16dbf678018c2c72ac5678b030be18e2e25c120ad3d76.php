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
        $__internal_e6136070c9ec0e9adb71f420fc54fdede69b5c5aaf9d173af82b3a4118c1a488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6136070c9ec0e9adb71f420fc54fdede69b5c5aaf9d173af82b3a4118c1a488->enter($__internal_e6136070c9ec0e9adb71f420fc54fdede69b5c5aaf9d173af82b3a4118c1a488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_95f0065559b32391491aae23fbe2b6520ac8ecf226e01694ee95b29b249ecaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f0065559b32391491aae23fbe2b6520ac8ecf226e01694ee95b29b249ecaad->enter($__internal_95f0065559b32391491aae23fbe2b6520ac8ecf226e01694ee95b29b249ecaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_e6136070c9ec0e9adb71f420fc54fdede69b5c5aaf9d173af82b3a4118c1a488->leave($__internal_e6136070c9ec0e9adb71f420fc54fdede69b5c5aaf9d173af82b3a4118c1a488_prof);

        
        $__internal_95f0065559b32391491aae23fbe2b6520ac8ecf226e01694ee95b29b249ecaad->leave($__internal_95f0065559b32391491aae23fbe2b6520ac8ecf226e01694ee95b29b249ecaad_prof);

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
", "@WebProfiler/Collector/exception.css.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
