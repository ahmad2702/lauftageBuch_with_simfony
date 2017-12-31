<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_9ece4a8b16e61c2638c70d2813fe92143abe8b0a0ba586a26159690ac30a278e extends Twig_Template
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
        $__internal_9aaeef6585e687280bd21742d337053c09ce8358b3e66e7202d2bb1570878a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaeef6585e687280bd21742d337053c09ce8358b3e66e7202d2bb1570878a5b->enter($__internal_9aaeef6585e687280bd21742d337053c09ce8358b3e66e7202d2bb1570878a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_1c549d18c1fae22c6d975ae939073db351e695d427e38e7a555494083a3d0d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c549d18c1fae22c6d975ae939073db351e695d427e38e7a555494083a3d0d3e->enter($__internal_1c549d18c1fae22c6d975ae939073db351e695d427e38e7a555494083a3d0d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9aaeef6585e687280bd21742d337053c09ce8358b3e66e7202d2bb1570878a5b->leave($__internal_9aaeef6585e687280bd21742d337053c09ce8358b3e66e7202d2bb1570878a5b_prof);

        
        $__internal_1c549d18c1fae22c6d975ae939073db351e695d427e38e7a555494083a3d0d3e->leave($__internal_1c549d18c1fae22c6d975ae939073db351e695d427e38e7a555494083a3d0d3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
