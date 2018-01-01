<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1d2b64cc590765c1f98ac9a8e4ebb5c734b980c7afaabf4646f5ed379b8e9de extends Twig_Template
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
        $__internal_c0ac8137053ba1aa7bdd0ee16ba51a48025cb9a0bdb2cad205634e8c98a63521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ac8137053ba1aa7bdd0ee16ba51a48025cb9a0bdb2cad205634e8c98a63521->enter($__internal_c0ac8137053ba1aa7bdd0ee16ba51a48025cb9a0bdb2cad205634e8c98a63521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f0d68ebc019979d990bd40b3bf9f8ee124b728936a108433771b2ce29e3ea9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d68ebc019979d990bd40b3bf9f8ee124b728936a108433771b2ce29e3ea9ab->enter($__internal_f0d68ebc019979d990bd40b3bf9f8ee124b728936a108433771b2ce29e3ea9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c0ac8137053ba1aa7bdd0ee16ba51a48025cb9a0bdb2cad205634e8c98a63521->leave($__internal_c0ac8137053ba1aa7bdd0ee16ba51a48025cb9a0bdb2cad205634e8c98a63521_prof);

        
        $__internal_f0d68ebc019979d990bd40b3bf9f8ee124b728936a108433771b2ce29e3ea9ab->leave($__internal_f0d68ebc019979d990bd40b3bf9f8ee124b728936a108433771b2ce29e3ea9ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
