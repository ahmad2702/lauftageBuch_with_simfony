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
        $__internal_d0c84d6180e4453cf48e45373f851db761dfd20e6796284e71728b4bcf6b7ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c84d6180e4453cf48e45373f851db761dfd20e6796284e71728b4bcf6b7ac0->enter($__internal_d0c84d6180e4453cf48e45373f851db761dfd20e6796284e71728b4bcf6b7ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e8f2d9e522b55b7d670c732b2953a738b7681656e59cc025eee222394f12a6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f2d9e522b55b7d670c732b2953a738b7681656e59cc025eee222394f12a6f0->enter($__internal_e8f2d9e522b55b7d670c732b2953a738b7681656e59cc025eee222394f12a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d0c84d6180e4453cf48e45373f851db761dfd20e6796284e71728b4bcf6b7ac0->leave($__internal_d0c84d6180e4453cf48e45373f851db761dfd20e6796284e71728b4bcf6b7ac0_prof);

        
        $__internal_e8f2d9e522b55b7d670c732b2953a738b7681656e59cc025eee222394f12a6f0->leave($__internal_e8f2d9e522b55b7d670c732b2953a738b7681656e59cc025eee222394f12a6f0_prof);

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
