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
        $__internal_66fb14f792e964532abe3f771b82648cc5dc874440b2479d45b1694a917b331c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fb14f792e964532abe3f771b82648cc5dc874440b2479d45b1694a917b331c->enter($__internal_66fb14f792e964532abe3f771b82648cc5dc874440b2479d45b1694a917b331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_09c3a9c5cd8fbde6515b16d0b2d13a9122484bf3dce65725906ca4049f786b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c3a9c5cd8fbde6515b16d0b2d13a9122484bf3dce65725906ca4049f786b70->enter($__internal_09c3a9c5cd8fbde6515b16d0b2d13a9122484bf3dce65725906ca4049f786b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_66fb14f792e964532abe3f771b82648cc5dc874440b2479d45b1694a917b331c->leave($__internal_66fb14f792e964532abe3f771b82648cc5dc874440b2479d45b1694a917b331c_prof);

        
        $__internal_09c3a9c5cd8fbde6515b16d0b2d13a9122484bf3dce65725906ca4049f786b70->leave($__internal_09c3a9c5cd8fbde6515b16d0b2d13a9122484bf3dce65725906ca4049f786b70_prof);

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
