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
        $__internal_06d8309cb6aa47702ceb8937cdd411ab5ef47156ec607646aed5d21a3336f4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d8309cb6aa47702ceb8937cdd411ab5ef47156ec607646aed5d21a3336f4dd->enter($__internal_06d8309cb6aa47702ceb8937cdd411ab5ef47156ec607646aed5d21a3336f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e2c5b4855a270c350e1656e525689f12173aed1b11023a559c1276d5a805c898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c5b4855a270c350e1656e525689f12173aed1b11023a559c1276d5a805c898->enter($__internal_e2c5b4855a270c350e1656e525689f12173aed1b11023a559c1276d5a805c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_06d8309cb6aa47702ceb8937cdd411ab5ef47156ec607646aed5d21a3336f4dd->leave($__internal_06d8309cb6aa47702ceb8937cdd411ab5ef47156ec607646aed5d21a3336f4dd_prof);

        
        $__internal_e2c5b4855a270c350e1656e525689f12173aed1b11023a559c1276d5a805c898->leave($__internal_e2c5b4855a270c350e1656e525689f12173aed1b11023a559c1276d5a805c898_prof);

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