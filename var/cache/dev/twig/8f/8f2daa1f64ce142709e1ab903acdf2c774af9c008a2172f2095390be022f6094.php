<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fdd53bc02f1e6db8b1e1bfbbad3c38950499d00b9e04ab61671de66d77d0d6f0 extends Twig_Template
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
        $__internal_ec74870388c7b2c11c919b82092341de7e8a7544ef8c2ad120845a24fae4311d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec74870388c7b2c11c919b82092341de7e8a7544ef8c2ad120845a24fae4311d->enter($__internal_ec74870388c7b2c11c919b82092341de7e8a7544ef8c2ad120845a24fae4311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1578c1eb092db4ff9f80ccd61e598aa9d9bf28241d119071b402998b741b49e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1578c1eb092db4ff9f80ccd61e598aa9d9bf28241d119071b402998b741b49e9->enter($__internal_1578c1eb092db4ff9f80ccd61e598aa9d9bf28241d119071b402998b741b49e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ec74870388c7b2c11c919b82092341de7e8a7544ef8c2ad120845a24fae4311d->leave($__internal_ec74870388c7b2c11c919b82092341de7e8a7544ef8c2ad120845a24fae4311d_prof);

        
        $__internal_1578c1eb092db4ff9f80ccd61e598aa9d9bf28241d119071b402998b741b49e9->leave($__internal_1578c1eb092db4ff9f80ccd61e598aa9d9bf28241d119071b402998b741b49e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
