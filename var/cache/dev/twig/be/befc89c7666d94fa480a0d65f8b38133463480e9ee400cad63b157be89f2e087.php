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
        $__internal_6efe7ddfe515d48a2c1403dfc30b2d363e3a0baa5be6f49f32b232097e5f1e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efe7ddfe515d48a2c1403dfc30b2d363e3a0baa5be6f49f32b232097e5f1e89->enter($__internal_6efe7ddfe515d48a2c1403dfc30b2d363e3a0baa5be6f49f32b232097e5f1e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4d84723db6288495e497cdf0ad802a579300c7465321020d2567549c30d8f248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d84723db6288495e497cdf0ad802a579300c7465321020d2567549c30d8f248->enter($__internal_4d84723db6288495e497cdf0ad802a579300c7465321020d2567549c30d8f248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6efe7ddfe515d48a2c1403dfc30b2d363e3a0baa5be6f49f32b232097e5f1e89->leave($__internal_6efe7ddfe515d48a2c1403dfc30b2d363e3a0baa5be6f49f32b232097e5f1e89_prof);

        
        $__internal_4d84723db6288495e497cdf0ad802a579300c7465321020d2567549c30d8f248->leave($__internal_4d84723db6288495e497cdf0ad802a579300c7465321020d2567549c30d8f248_prof);

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
