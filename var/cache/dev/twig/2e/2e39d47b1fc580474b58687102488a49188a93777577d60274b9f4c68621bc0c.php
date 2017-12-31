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
        $__internal_94e86d766d20861c5c2d529fcf04f4803a05a709e7e7891abcac82a3a0194c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e86d766d20861c5c2d529fcf04f4803a05a709e7e7891abcac82a3a0194c5f->enter($__internal_94e86d766d20861c5c2d529fcf04f4803a05a709e7e7891abcac82a3a0194c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0a225fb5cf99b0027db6695ecaa5c5e40057b06fd7b04127f96185f07ad31720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a225fb5cf99b0027db6695ecaa5c5e40057b06fd7b04127f96185f07ad31720->enter($__internal_0a225fb5cf99b0027db6695ecaa5c5e40057b06fd7b04127f96185f07ad31720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_94e86d766d20861c5c2d529fcf04f4803a05a709e7e7891abcac82a3a0194c5f->leave($__internal_94e86d766d20861c5c2d529fcf04f4803a05a709e7e7891abcac82a3a0194c5f_prof);

        
        $__internal_0a225fb5cf99b0027db6695ecaa5c5e40057b06fd7b04127f96185f07ad31720->leave($__internal_0a225fb5cf99b0027db6695ecaa5c5e40057b06fd7b04127f96185f07ad31720_prof);

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
