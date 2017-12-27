<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b10f9d993d41016a804889abad60cacf47b60e99b81da28a15674978aded8acc extends Twig_Template
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
        $__internal_2d49f869366508e3483b53b6df061811e1d42b9c6c00d4ebd8b0157386c89f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d49f869366508e3483b53b6df061811e1d42b9c6c00d4ebd8b0157386c89f51->enter($__internal_2d49f869366508e3483b53b6df061811e1d42b9c6c00d4ebd8b0157386c89f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4ef39b1620c6cae02abe70d222f8798bc1b69d71394f4e292d3c9fb750090266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef39b1620c6cae02abe70d222f8798bc1b69d71394f4e292d3c9fb750090266->enter($__internal_4ef39b1620c6cae02abe70d222f8798bc1b69d71394f4e292d3c9fb750090266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2d49f869366508e3483b53b6df061811e1d42b9c6c00d4ebd8b0157386c89f51->leave($__internal_2d49f869366508e3483b53b6df061811e1d42b9c6c00d4ebd8b0157386c89f51_prof);

        
        $__internal_4ef39b1620c6cae02abe70d222f8798bc1b69d71394f4e292d3c9fb750090266->leave($__internal_4ef39b1620c6cae02abe70d222f8798bc1b69d71394f4e292d3c9fb750090266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
