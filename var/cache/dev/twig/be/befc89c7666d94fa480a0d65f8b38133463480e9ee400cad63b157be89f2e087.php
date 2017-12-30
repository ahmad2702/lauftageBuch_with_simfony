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
        $__internal_f2b7a34772b1e3482e9b7bc5cd2efe531ea44b41620a992014cc5610f9bd2903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b7a34772b1e3482e9b7bc5cd2efe531ea44b41620a992014cc5610f9bd2903->enter($__internal_f2b7a34772b1e3482e9b7bc5cd2efe531ea44b41620a992014cc5610f9bd2903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6d908b7d0a2f5719e653e5647f45851c4fed505bc22a141e2c1aeb73abe4ba17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d908b7d0a2f5719e653e5647f45851c4fed505bc22a141e2c1aeb73abe4ba17->enter($__internal_6d908b7d0a2f5719e653e5647f45851c4fed505bc22a141e2c1aeb73abe4ba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f2b7a34772b1e3482e9b7bc5cd2efe531ea44b41620a992014cc5610f9bd2903->leave($__internal_f2b7a34772b1e3482e9b7bc5cd2efe531ea44b41620a992014cc5610f9bd2903_prof);

        
        $__internal_6d908b7d0a2f5719e653e5647f45851c4fed505bc22a141e2c1aeb73abe4ba17->leave($__internal_6d908b7d0a2f5719e653e5647f45851c4fed505bc22a141e2c1aeb73abe4ba17_prof);

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
