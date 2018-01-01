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
        $__internal_3484ce6819ab7a586987b630ecc498996f3fe32cea91eefad11d4b8dbb8bad04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3484ce6819ab7a586987b630ecc498996f3fe32cea91eefad11d4b8dbb8bad04->enter($__internal_3484ce6819ab7a586987b630ecc498996f3fe32cea91eefad11d4b8dbb8bad04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e00f068101f3401109b9040f47b65a9b447702a303ea8bec384b027dd212b737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00f068101f3401109b9040f47b65a9b447702a303ea8bec384b027dd212b737->enter($__internal_e00f068101f3401109b9040f47b65a9b447702a303ea8bec384b027dd212b737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3484ce6819ab7a586987b630ecc498996f3fe32cea91eefad11d4b8dbb8bad04->leave($__internal_3484ce6819ab7a586987b630ecc498996f3fe32cea91eefad11d4b8dbb8bad04_prof);

        
        $__internal_e00f068101f3401109b9040f47b65a9b447702a303ea8bec384b027dd212b737->leave($__internal_e00f068101f3401109b9040f47b65a9b447702a303ea8bec384b027dd212b737_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
