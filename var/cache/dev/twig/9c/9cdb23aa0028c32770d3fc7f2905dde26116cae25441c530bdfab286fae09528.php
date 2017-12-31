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
        $__internal_1af32f0716a3a4ae1ff076c988fbb5dd2091552dd708905a675d9b7fbf223b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af32f0716a3a4ae1ff076c988fbb5dd2091552dd708905a675d9b7fbf223b55->enter($__internal_1af32f0716a3a4ae1ff076c988fbb5dd2091552dd708905a675d9b7fbf223b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d193b4b1e9073a88fcd07f27679f0952078570c0b2012f0ed66ad0805ff74dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d193b4b1e9073a88fcd07f27679f0952078570c0b2012f0ed66ad0805ff74dbb->enter($__internal_d193b4b1e9073a88fcd07f27679f0952078570c0b2012f0ed66ad0805ff74dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1af32f0716a3a4ae1ff076c988fbb5dd2091552dd708905a675d9b7fbf223b55->leave($__internal_1af32f0716a3a4ae1ff076c988fbb5dd2091552dd708905a675d9b7fbf223b55_prof);

        
        $__internal_d193b4b1e9073a88fcd07f27679f0952078570c0b2012f0ed66ad0805ff74dbb->leave($__internal_d193b4b1e9073a88fcd07f27679f0952078570c0b2012f0ed66ad0805ff74dbb_prof);

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
