<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8620a9c55012ee7cf79b59a727b2123fcd90163ebf0621898e4f453b5863e716 extends Twig_Template
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
        $__internal_5575fc697034bc56bc700a1834ca3fcf0d6feef52988d5994c88aa2f7e088f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5575fc697034bc56bc700a1834ca3fcf0d6feef52988d5994c88aa2f7e088f97->enter($__internal_5575fc697034bc56bc700a1834ca3fcf0d6feef52988d5994c88aa2f7e088f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_214538b895da24bdf50787c825e5e1f465ad5f2da22bb6a478a5164c10a57220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214538b895da24bdf50787c825e5e1f465ad5f2da22bb6a478a5164c10a57220->enter($__internal_214538b895da24bdf50787c825e5e1f465ad5f2da22bb6a478a5164c10a57220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5575fc697034bc56bc700a1834ca3fcf0d6feef52988d5994c88aa2f7e088f97->leave($__internal_5575fc697034bc56bc700a1834ca3fcf0d6feef52988d5994c88aa2f7e088f97_prof);

        
        $__internal_214538b895da24bdf50787c825e5e1f465ad5f2da22bb6a478a5164c10a57220->leave($__internal_214538b895da24bdf50787c825e5e1f465ad5f2da22bb6a478a5164c10a57220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
