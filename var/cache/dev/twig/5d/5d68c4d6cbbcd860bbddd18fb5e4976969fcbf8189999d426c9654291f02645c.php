<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_45454215c3666239f861252c600c377171d089af12be95b38b420924289b8f18 extends Twig_Template
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
        $__internal_f3799180887db9eb3247295117892c0d1bd7f124e0a7ed0733d3cce74e420291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3799180887db9eb3247295117892c0d1bd7f124e0a7ed0733d3cce74e420291->enter($__internal_f3799180887db9eb3247295117892c0d1bd7f124e0a7ed0733d3cce74e420291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_453f40ca04e7a01538a1e7a778fdd25ec8c108cd78bc301f935e54904ff74826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453f40ca04e7a01538a1e7a778fdd25ec8c108cd78bc301f935e54904ff74826->enter($__internal_453f40ca04e7a01538a1e7a778fdd25ec8c108cd78bc301f935e54904ff74826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f3799180887db9eb3247295117892c0d1bd7f124e0a7ed0733d3cce74e420291->leave($__internal_f3799180887db9eb3247295117892c0d1bd7f124e0a7ed0733d3cce74e420291_prof);

        
        $__internal_453f40ca04e7a01538a1e7a778fdd25ec8c108cd78bc301f935e54904ff74826->leave($__internal_453f40ca04e7a01538a1e7a778fdd25ec8c108cd78bc301f935e54904ff74826_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
