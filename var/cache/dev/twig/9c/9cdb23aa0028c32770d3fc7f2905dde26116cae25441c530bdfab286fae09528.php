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
        $__internal_218779f05388465270ee67e3a7802d5e743b077cf17f656e79223ff858807ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218779f05388465270ee67e3a7802d5e743b077cf17f656e79223ff858807ad7->enter($__internal_218779f05388465270ee67e3a7802d5e743b077cf17f656e79223ff858807ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_74bc2f676de2d1739acdc4fcd3830098da05f133fd81326e91b654d90d1abfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bc2f676de2d1739acdc4fcd3830098da05f133fd81326e91b654d90d1abfba->enter($__internal_74bc2f676de2d1739acdc4fcd3830098da05f133fd81326e91b654d90d1abfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_218779f05388465270ee67e3a7802d5e743b077cf17f656e79223ff858807ad7->leave($__internal_218779f05388465270ee67e3a7802d5e743b077cf17f656e79223ff858807ad7_prof);

        
        $__internal_74bc2f676de2d1739acdc4fcd3830098da05f133fd81326e91b654d90d1abfba->leave($__internal_74bc2f676de2d1739acdc4fcd3830098da05f133fd81326e91b654d90d1abfba_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
