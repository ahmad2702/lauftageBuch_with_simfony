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
        $__internal_19b6fa89c4792de388d66d483688e42e42a4a14359e3fd8ebad075b9d7fb66c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b6fa89c4792de388d66d483688e42e42a4a14359e3fd8ebad075b9d7fb66c8->enter($__internal_19b6fa89c4792de388d66d483688e42e42a4a14359e3fd8ebad075b9d7fb66c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_30c13a443b56768e0c7a97541a40f31bb889e11c1cd6c8447e49ecef839aa5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c13a443b56768e0c7a97541a40f31bb889e11c1cd6c8447e49ecef839aa5da->enter($__internal_30c13a443b56768e0c7a97541a40f31bb889e11c1cd6c8447e49ecef839aa5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_19b6fa89c4792de388d66d483688e42e42a4a14359e3fd8ebad075b9d7fb66c8->leave($__internal_19b6fa89c4792de388d66d483688e42e42a4a14359e3fd8ebad075b9d7fb66c8_prof);

        
        $__internal_30c13a443b56768e0c7a97541a40f31bb889e11c1cd6c8447e49ecef839aa5da->leave($__internal_30c13a443b56768e0c7a97541a40f31bb889e11c1cd6c8447e49ecef839aa5da_prof);

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
