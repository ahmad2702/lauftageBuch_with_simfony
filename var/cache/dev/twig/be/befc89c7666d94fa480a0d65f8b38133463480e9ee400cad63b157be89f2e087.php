<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_58079b6d336c9432689e13464d25509701e6820ab10f256181b5775337ad6765 extends Twig_Template
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
        $__internal_1c65939ce4e893f2ac8409762a554253006fd3983323eb3863712f3afda1ae44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c65939ce4e893f2ac8409762a554253006fd3983323eb3863712f3afda1ae44->enter($__internal_1c65939ce4e893f2ac8409762a554253006fd3983323eb3863712f3afda1ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bba9e120e8c35ef445101347e3f9f551940e717d7d9421ecc31d22163c2d1a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba9e120e8c35ef445101347e3f9f551940e717d7d9421ecc31d22163c2d1a2f->enter($__internal_bba9e120e8c35ef445101347e3f9f551940e717d7d9421ecc31d22163c2d1a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1c65939ce4e893f2ac8409762a554253006fd3983323eb3863712f3afda1ae44->leave($__internal_1c65939ce4e893f2ac8409762a554253006fd3983323eb3863712f3afda1ae44_prof);

        
        $__internal_bba9e120e8c35ef445101347e3f9f551940e717d7d9421ecc31d22163c2d1a2f->leave($__internal_bba9e120e8c35ef445101347e3f9f551940e717d7d9421ecc31d22163c2d1a2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
