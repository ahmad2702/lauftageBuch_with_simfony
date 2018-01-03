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
        $__internal_232f3b74c5c997fee615565366be2d9e77b6d2ddc5f0afa665ab30d064fc9eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232f3b74c5c997fee615565366be2d9e77b6d2ddc5f0afa665ab30d064fc9eec->enter($__internal_232f3b74c5c997fee615565366be2d9e77b6d2ddc5f0afa665ab30d064fc9eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6490f752920d2c9fca31db226fe50f34c7f624313b0a082f3b7fb44bf6045a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6490f752920d2c9fca31db226fe50f34c7f624313b0a082f3b7fb44bf6045a87->enter($__internal_6490f752920d2c9fca31db226fe50f34c7f624313b0a082f3b7fb44bf6045a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_232f3b74c5c997fee615565366be2d9e77b6d2ddc5f0afa665ab30d064fc9eec->leave($__internal_232f3b74c5c997fee615565366be2d9e77b6d2ddc5f0afa665ab30d064fc9eec_prof);

        
        $__internal_6490f752920d2c9fca31db226fe50f34c7f624313b0a082f3b7fb44bf6045a87->leave($__internal_6490f752920d2c9fca31db226fe50f34c7f624313b0a082f3b7fb44bf6045a87_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
