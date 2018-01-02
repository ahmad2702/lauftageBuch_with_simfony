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
        $__internal_c7adcc9b343e00214a091787be5f87ffccc3a49814e8734d82dcd3826f44c2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7adcc9b343e00214a091787be5f87ffccc3a49814e8734d82dcd3826f44c2a3->enter($__internal_c7adcc9b343e00214a091787be5f87ffccc3a49814e8734d82dcd3826f44c2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f2a6ea1edc789c205051709319adc4901fe1187f379de2802bd780815563eb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a6ea1edc789c205051709319adc4901fe1187f379de2802bd780815563eb81->enter($__internal_f2a6ea1edc789c205051709319adc4901fe1187f379de2802bd780815563eb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c7adcc9b343e00214a091787be5f87ffccc3a49814e8734d82dcd3826f44c2a3->leave($__internal_c7adcc9b343e00214a091787be5f87ffccc3a49814e8734d82dcd3826f44c2a3_prof);

        
        $__internal_f2a6ea1edc789c205051709319adc4901fe1187f379de2802bd780815563eb81->leave($__internal_f2a6ea1edc789c205051709319adc4901fe1187f379de2802bd780815563eb81_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
