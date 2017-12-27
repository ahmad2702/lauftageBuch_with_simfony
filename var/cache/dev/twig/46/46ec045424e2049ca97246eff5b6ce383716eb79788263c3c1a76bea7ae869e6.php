<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0ca78c9c1968de9b155212a82bfe84731405ec866305e88d1c2ab2264c922558 extends Twig_Template
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
        $__internal_9ece2c6620c8311ce2d2189cf616e38d580a8fe5c89ce41d40c054d548e728d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ece2c6620c8311ce2d2189cf616e38d580a8fe5c89ce41d40c054d548e728d3->enter($__internal_9ece2c6620c8311ce2d2189cf616e38d580a8fe5c89ce41d40c054d548e728d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a78e25bfbf3f77bd106a13950d0c29b02f9665c82c3997001cc2cada95cf74b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78e25bfbf3f77bd106a13950d0c29b02f9665c82c3997001cc2cada95cf74b5->enter($__internal_a78e25bfbf3f77bd106a13950d0c29b02f9665c82c3997001cc2cada95cf74b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9ece2c6620c8311ce2d2189cf616e38d580a8fe5c89ce41d40c054d548e728d3->leave($__internal_9ece2c6620c8311ce2d2189cf616e38d580a8fe5c89ce41d40c054d548e728d3_prof);

        
        $__internal_a78e25bfbf3f77bd106a13950d0c29b02f9665c82c3997001cc2cada95cf74b5->leave($__internal_a78e25bfbf3f77bd106a13950d0c29b02f9665c82c3997001cc2cada95cf74b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
