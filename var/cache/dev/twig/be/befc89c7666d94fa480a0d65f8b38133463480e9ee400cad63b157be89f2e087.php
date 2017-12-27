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
        $__internal_4ba8b276fc571a4d52998529cef592cfc1e0a315908cc50fc75f89021bf9581c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba8b276fc571a4d52998529cef592cfc1e0a315908cc50fc75f89021bf9581c->enter($__internal_4ba8b276fc571a4d52998529cef592cfc1e0a315908cc50fc75f89021bf9581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0fbad6ad28f1d084189b347d3405180e8a7d1dd833841734bda1d4f136e61a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbad6ad28f1d084189b347d3405180e8a7d1dd833841734bda1d4f136e61a4c->enter($__internal_0fbad6ad28f1d084189b347d3405180e8a7d1dd833841734bda1d4f136e61a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4ba8b276fc571a4d52998529cef592cfc1e0a315908cc50fc75f89021bf9581c->leave($__internal_4ba8b276fc571a4d52998529cef592cfc1e0a315908cc50fc75f89021bf9581c_prof);

        
        $__internal_0fbad6ad28f1d084189b347d3405180e8a7d1dd833841734bda1d4f136e61a4c->leave($__internal_0fbad6ad28f1d084189b347d3405180e8a7d1dd833841734bda1d4f136e61a4c_prof);

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
