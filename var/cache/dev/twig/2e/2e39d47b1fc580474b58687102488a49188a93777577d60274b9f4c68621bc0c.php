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
        $__internal_6a19a3744bc1b9a86f4c36f54e260afe0cc329df87f6376b87b937eb7ee69c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a19a3744bc1b9a86f4c36f54e260afe0cc329df87f6376b87b937eb7ee69c29->enter($__internal_6a19a3744bc1b9a86f4c36f54e260afe0cc329df87f6376b87b937eb7ee69c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cc746e2231eb9b43baafd6b64414d706078564c6acf4a450a6c567357a01a437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc746e2231eb9b43baafd6b64414d706078564c6acf4a450a6c567357a01a437->enter($__internal_cc746e2231eb9b43baafd6b64414d706078564c6acf4a450a6c567357a01a437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6a19a3744bc1b9a86f4c36f54e260afe0cc329df87f6376b87b937eb7ee69c29->leave($__internal_6a19a3744bc1b9a86f4c36f54e260afe0cc329df87f6376b87b937eb7ee69c29_prof);

        
        $__internal_cc746e2231eb9b43baafd6b64414d706078564c6acf4a450a6c567357a01a437->leave($__internal_cc746e2231eb9b43baafd6b64414d706078564c6acf4a450a6c567357a01a437_prof);

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
