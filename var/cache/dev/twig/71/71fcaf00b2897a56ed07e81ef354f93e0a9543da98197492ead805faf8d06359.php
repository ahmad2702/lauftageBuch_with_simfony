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
        $__internal_c969a922763fa6b520d5bba50e30bb3ca779db60551ade84d34038d1bbd3b2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c969a922763fa6b520d5bba50e30bb3ca779db60551ade84d34038d1bbd3b2eb->enter($__internal_c969a922763fa6b520d5bba50e30bb3ca779db60551ade84d34038d1bbd3b2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_08fcaeed5c5526b1b73d9b27dd78682d09acd65c91848f7b7f4e9ebff8ba34c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fcaeed5c5526b1b73d9b27dd78682d09acd65c91848f7b7f4e9ebff8ba34c4->enter($__internal_08fcaeed5c5526b1b73d9b27dd78682d09acd65c91848f7b7f4e9ebff8ba34c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c969a922763fa6b520d5bba50e30bb3ca779db60551ade84d34038d1bbd3b2eb->leave($__internal_c969a922763fa6b520d5bba50e30bb3ca779db60551ade84d34038d1bbd3b2eb_prof);

        
        $__internal_08fcaeed5c5526b1b73d9b27dd78682d09acd65c91848f7b7f4e9ebff8ba34c4->leave($__internal_08fcaeed5c5526b1b73d9b27dd78682d09acd65c91848f7b7f4e9ebff8ba34c4_prof);

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
