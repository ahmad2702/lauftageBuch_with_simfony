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
        $__internal_4ac0d1303568b692a8253b6084010d1fa06691c13b30b92f2b521f278b9d940d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac0d1303568b692a8253b6084010d1fa06691c13b30b92f2b521f278b9d940d->enter($__internal_4ac0d1303568b692a8253b6084010d1fa06691c13b30b92f2b521f278b9d940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_dff0dc9ac6f2176792eac27b41056050c30e8d0e09daf2af1f7e299c011c6e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff0dc9ac6f2176792eac27b41056050c30e8d0e09daf2af1f7e299c011c6e26->enter($__internal_dff0dc9ac6f2176792eac27b41056050c30e8d0e09daf2af1f7e299c011c6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4ac0d1303568b692a8253b6084010d1fa06691c13b30b92f2b521f278b9d940d->leave($__internal_4ac0d1303568b692a8253b6084010d1fa06691c13b30b92f2b521f278b9d940d_prof);

        
        $__internal_dff0dc9ac6f2176792eac27b41056050c30e8d0e09daf2af1f7e299c011c6e26->leave($__internal_dff0dc9ac6f2176792eac27b41056050c30e8d0e09daf2af1f7e299c011c6e26_prof);

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
