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
        $__internal_0c6f3e8dadc3848e2ea87017a2d482870a5c35a3fc7b142f7ad50fc97b2e4413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6f3e8dadc3848e2ea87017a2d482870a5c35a3fc7b142f7ad50fc97b2e4413->enter($__internal_0c6f3e8dadc3848e2ea87017a2d482870a5c35a3fc7b142f7ad50fc97b2e4413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e01ed1ae89542097f5514eea5c7dc3b29812cf01c2d13079dea07b10186de274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01ed1ae89542097f5514eea5c7dc3b29812cf01c2d13079dea07b10186de274->enter($__internal_e01ed1ae89542097f5514eea5c7dc3b29812cf01c2d13079dea07b10186de274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0c6f3e8dadc3848e2ea87017a2d482870a5c35a3fc7b142f7ad50fc97b2e4413->leave($__internal_0c6f3e8dadc3848e2ea87017a2d482870a5c35a3fc7b142f7ad50fc97b2e4413_prof);

        
        $__internal_e01ed1ae89542097f5514eea5c7dc3b29812cf01c2d13079dea07b10186de274->leave($__internal_e01ed1ae89542097f5514eea5c7dc3b29812cf01c2d13079dea07b10186de274_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
