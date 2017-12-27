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
        $__internal_eabf1cd49391c9af0c57088fac88838fff818f007f8203cedc7657520a2c0b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabf1cd49391c9af0c57088fac88838fff818f007f8203cedc7657520a2c0b90->enter($__internal_eabf1cd49391c9af0c57088fac88838fff818f007f8203cedc7657520a2c0b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e5bb50b07b0500edf0c3bdde170747ee63933428021a7c3d8e49d32ab1d162e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bb50b07b0500edf0c3bdde170747ee63933428021a7c3d8e49d32ab1d162e8->enter($__internal_e5bb50b07b0500edf0c3bdde170747ee63933428021a7c3d8e49d32ab1d162e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eabf1cd49391c9af0c57088fac88838fff818f007f8203cedc7657520a2c0b90->leave($__internal_eabf1cd49391c9af0c57088fac88838fff818f007f8203cedc7657520a2c0b90_prof);

        
        $__internal_e5bb50b07b0500edf0c3bdde170747ee63933428021a7c3d8e49d32ab1d162e8->leave($__internal_e5bb50b07b0500edf0c3bdde170747ee63933428021a7c3d8e49d32ab1d162e8_prof);

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
