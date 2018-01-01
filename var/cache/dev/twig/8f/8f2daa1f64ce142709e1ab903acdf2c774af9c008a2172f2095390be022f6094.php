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
        $__internal_9c5d8239d4acb0d05012f53e5d403de92a06d3ff5fe59a24f81e1f1a45af928a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5d8239d4acb0d05012f53e5d403de92a06d3ff5fe59a24f81e1f1a45af928a->enter($__internal_9c5d8239d4acb0d05012f53e5d403de92a06d3ff5fe59a24f81e1f1a45af928a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b4eef66eda1cb19b3165c163a9a48f13603a90c51f142844b0de2e11938c33ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4eef66eda1cb19b3165c163a9a48f13603a90c51f142844b0de2e11938c33ab->enter($__internal_b4eef66eda1cb19b3165c163a9a48f13603a90c51f142844b0de2e11938c33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9c5d8239d4acb0d05012f53e5d403de92a06d3ff5fe59a24f81e1f1a45af928a->leave($__internal_9c5d8239d4acb0d05012f53e5d403de92a06d3ff5fe59a24f81e1f1a45af928a_prof);

        
        $__internal_b4eef66eda1cb19b3165c163a9a48f13603a90c51f142844b0de2e11938c33ab->leave($__internal_b4eef66eda1cb19b3165c163a9a48f13603a90c51f142844b0de2e11938c33ab_prof);

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
