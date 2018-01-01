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
        $__internal_db82d84de387838364ddd8a43d6fc21f47f827cef5dc32ba961e1549126dadd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db82d84de387838364ddd8a43d6fc21f47f827cef5dc32ba961e1549126dadd9->enter($__internal_db82d84de387838364ddd8a43d6fc21f47f827cef5dc32ba961e1549126dadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a6152e0881c227e0f6ca8a9adbcc2ef9827e4f5e9547544dd89e80ac97ae1d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6152e0881c227e0f6ca8a9adbcc2ef9827e4f5e9547544dd89e80ac97ae1d9d->enter($__internal_a6152e0881c227e0f6ca8a9adbcc2ef9827e4f5e9547544dd89e80ac97ae1d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_db82d84de387838364ddd8a43d6fc21f47f827cef5dc32ba961e1549126dadd9->leave($__internal_db82d84de387838364ddd8a43d6fc21f47f827cef5dc32ba961e1549126dadd9_prof);

        
        $__internal_a6152e0881c227e0f6ca8a9adbcc2ef9827e4f5e9547544dd89e80ac97ae1d9d->leave($__internal_a6152e0881c227e0f6ca8a9adbcc2ef9827e4f5e9547544dd89e80ac97ae1d9d_prof);

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
", "@Twig/Exception/error.xml.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
