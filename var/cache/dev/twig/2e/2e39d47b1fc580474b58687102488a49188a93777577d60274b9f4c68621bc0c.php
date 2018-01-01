<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b7671f54f32d36aa7a945e2162896960402ab4be20573cc13d8c839ed2cefe63 extends Twig_Template
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
        $__internal_9125f6c1bb9164cd04d5ec23455e96912006f2c0cd0b839a54c738cc658265d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9125f6c1bb9164cd04d5ec23455e96912006f2c0cd0b839a54c738cc658265d2->enter($__internal_9125f6c1bb9164cd04d5ec23455e96912006f2c0cd0b839a54c738cc658265d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5472918a5b1e61432a86d8eb95e72e8874ee13b8e564a7f28120587f27261865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5472918a5b1e61432a86d8eb95e72e8874ee13b8e564a7f28120587f27261865->enter($__internal_5472918a5b1e61432a86d8eb95e72e8874ee13b8e564a7f28120587f27261865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9125f6c1bb9164cd04d5ec23455e96912006f2c0cd0b839a54c738cc658265d2->leave($__internal_9125f6c1bb9164cd04d5ec23455e96912006f2c0cd0b839a54c738cc658265d2_prof);

        
        $__internal_5472918a5b1e61432a86d8eb95e72e8874ee13b8e564a7f28120587f27261865->leave($__internal_5472918a5b1e61432a86d8eb95e72e8874ee13b8e564a7f28120587f27261865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
