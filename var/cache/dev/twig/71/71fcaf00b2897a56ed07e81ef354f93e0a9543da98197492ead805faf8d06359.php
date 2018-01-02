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
        $__internal_14e338cf2bf52c5ca9b5c32058f1d1a4104eda539a0c2dd3a465aeefaf7a0a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e338cf2bf52c5ca9b5c32058f1d1a4104eda539a0c2dd3a465aeefaf7a0a8b->enter($__internal_14e338cf2bf52c5ca9b5c32058f1d1a4104eda539a0c2dd3a465aeefaf7a0a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7b6d364955e3e82fdb2c09583a9f09d2954cc8b4143667186b856f823743de16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6d364955e3e82fdb2c09583a9f09d2954cc8b4143667186b856f823743de16->enter($__internal_7b6d364955e3e82fdb2c09583a9f09d2954cc8b4143667186b856f823743de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14e338cf2bf52c5ca9b5c32058f1d1a4104eda539a0c2dd3a465aeefaf7a0a8b->leave($__internal_14e338cf2bf52c5ca9b5c32058f1d1a4104eda539a0c2dd3a465aeefaf7a0a8b_prof);

        
        $__internal_7b6d364955e3e82fdb2c09583a9f09d2954cc8b4143667186b856f823743de16->leave($__internal_7b6d364955e3e82fdb2c09583a9f09d2954cc8b4143667186b856f823743de16_prof);

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
