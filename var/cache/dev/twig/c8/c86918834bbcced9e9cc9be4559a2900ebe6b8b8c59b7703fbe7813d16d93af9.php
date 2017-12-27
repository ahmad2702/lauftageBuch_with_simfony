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
        $__internal_aab59f6c4e4f5412323c8f54695f2e8f463cdeb6273821523e05440663789e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab59f6c4e4f5412323c8f54695f2e8f463cdeb6273821523e05440663789e59->enter($__internal_aab59f6c4e4f5412323c8f54695f2e8f463cdeb6273821523e05440663789e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cac2f071157980bde737dcd09417e4cd4a5c43970515330f66caaad467b68996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac2f071157980bde737dcd09417e4cd4a5c43970515330f66caaad467b68996->enter($__internal_cac2f071157980bde737dcd09417e4cd4a5c43970515330f66caaad467b68996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aab59f6c4e4f5412323c8f54695f2e8f463cdeb6273821523e05440663789e59->leave($__internal_aab59f6c4e4f5412323c8f54695f2e8f463cdeb6273821523e05440663789e59_prof);

        
        $__internal_cac2f071157980bde737dcd09417e4cd4a5c43970515330f66caaad467b68996->leave($__internal_cac2f071157980bde737dcd09417e4cd4a5c43970515330f66caaad467b68996_prof);

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
