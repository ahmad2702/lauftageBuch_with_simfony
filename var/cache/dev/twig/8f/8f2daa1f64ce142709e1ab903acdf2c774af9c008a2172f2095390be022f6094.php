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
        $__internal_0d5d9bb79748e29267433f5033ef6aa06be49e718ec1f6ea92734421e030e59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5d9bb79748e29267433f5033ef6aa06be49e718ec1f6ea92734421e030e59b->enter($__internal_0d5d9bb79748e29267433f5033ef6aa06be49e718ec1f6ea92734421e030e59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f711e5a17ecdffcecd27d3716c69191a788b4a0bb25569f8cb76e3b5f2041af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f711e5a17ecdffcecd27d3716c69191a788b4a0bb25569f8cb76e3b5f2041af6->enter($__internal_f711e5a17ecdffcecd27d3716c69191a788b4a0bb25569f8cb76e3b5f2041af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0d5d9bb79748e29267433f5033ef6aa06be49e718ec1f6ea92734421e030e59b->leave($__internal_0d5d9bb79748e29267433f5033ef6aa06be49e718ec1f6ea92734421e030e59b_prof);

        
        $__internal_f711e5a17ecdffcecd27d3716c69191a788b4a0bb25569f8cb76e3b5f2041af6->leave($__internal_f711e5a17ecdffcecd27d3716c69191a788b4a0bb25569f8cb76e3b5f2041af6_prof);

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
