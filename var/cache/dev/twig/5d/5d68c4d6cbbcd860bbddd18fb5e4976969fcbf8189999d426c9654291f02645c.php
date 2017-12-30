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
        $__internal_cc1fdcd3c5dbf645bfb57d23e8ec2c1a70cefa9ff36cee4e593416d21fc226b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1fdcd3c5dbf645bfb57d23e8ec2c1a70cefa9ff36cee4e593416d21fc226b9->enter($__internal_cc1fdcd3c5dbf645bfb57d23e8ec2c1a70cefa9ff36cee4e593416d21fc226b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_6afcbe1024b36fcb83e71e92aee1b1cdb554c8e1bd806c47b7f7d4f9bde8a262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afcbe1024b36fcb83e71e92aee1b1cdb554c8e1bd806c47b7f7d4f9bde8a262->enter($__internal_6afcbe1024b36fcb83e71e92aee1b1cdb554c8e1bd806c47b7f7d4f9bde8a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_cc1fdcd3c5dbf645bfb57d23e8ec2c1a70cefa9ff36cee4e593416d21fc226b9->leave($__internal_cc1fdcd3c5dbf645bfb57d23e8ec2c1a70cefa9ff36cee4e593416d21fc226b9_prof);

        
        $__internal_6afcbe1024b36fcb83e71e92aee1b1cdb554c8e1bd806c47b7f7d4f9bde8a262->leave($__internal_6afcbe1024b36fcb83e71e92aee1b1cdb554c8e1bd806c47b7f7d4f9bde8a262_prof);

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
