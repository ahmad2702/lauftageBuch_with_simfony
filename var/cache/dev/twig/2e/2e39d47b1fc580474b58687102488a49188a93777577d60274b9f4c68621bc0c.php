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
        $__internal_b6a6d810f6df9dbed2a773a8993e1905907847a9f49a36e8532e1ca9fa5a68e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a6d810f6df9dbed2a773a8993e1905907847a9f49a36e8532e1ca9fa5a68e7->enter($__internal_b6a6d810f6df9dbed2a773a8993e1905907847a9f49a36e8532e1ca9fa5a68e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a8c82f4aabd814656970d2907cfc8c1317e8e8e60d5ffeadf5d35cd4a88ab9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c82f4aabd814656970d2907cfc8c1317e8e8e60d5ffeadf5d35cd4a88ab9c2->enter($__internal_a8c82f4aabd814656970d2907cfc8c1317e8e8e60d5ffeadf5d35cd4a88ab9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b6a6d810f6df9dbed2a773a8993e1905907847a9f49a36e8532e1ca9fa5a68e7->leave($__internal_b6a6d810f6df9dbed2a773a8993e1905907847a9f49a36e8532e1ca9fa5a68e7_prof);

        
        $__internal_a8c82f4aabd814656970d2907cfc8c1317e8e8e60d5ffeadf5d35cd4a88ab9c2->leave($__internal_a8c82f4aabd814656970d2907cfc8c1317e8e8e60d5ffeadf5d35cd4a88ab9c2_prof);

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
