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
        $__internal_8656cfe40e30afcef1db20c37bc832875fbe52f2f003782a4a13523f09c72adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8656cfe40e30afcef1db20c37bc832875fbe52f2f003782a4a13523f09c72adb->enter($__internal_8656cfe40e30afcef1db20c37bc832875fbe52f2f003782a4a13523f09c72adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_74e34bd507abdeacf5faf3241fcb7855490cc80274a1c49b939c84d5ebd28d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e34bd507abdeacf5faf3241fcb7855490cc80274a1c49b939c84d5ebd28d37->enter($__internal_74e34bd507abdeacf5faf3241fcb7855490cc80274a1c49b939c84d5ebd28d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8656cfe40e30afcef1db20c37bc832875fbe52f2f003782a4a13523f09c72adb->leave($__internal_8656cfe40e30afcef1db20c37bc832875fbe52f2f003782a4a13523f09c72adb_prof);

        
        $__internal_74e34bd507abdeacf5faf3241fcb7855490cc80274a1c49b939c84d5ebd28d37->leave($__internal_74e34bd507abdeacf5faf3241fcb7855490cc80274a1c49b939c84d5ebd28d37_prof);

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
