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
        $__internal_318e32f0523fb3d57729d1d3c6c2356007a6d900c4ce6239b243217aa7a70f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318e32f0523fb3d57729d1d3c6c2356007a6d900c4ce6239b243217aa7a70f66->enter($__internal_318e32f0523fb3d57729d1d3c6c2356007a6d900c4ce6239b243217aa7a70f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b0c53f1c0cab2cd52b5f0da6c477168f8ff74895d9b445704a85387c498d1d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c53f1c0cab2cd52b5f0da6c477168f8ff74895d9b445704a85387c498d1d76->enter($__internal_b0c53f1c0cab2cd52b5f0da6c477168f8ff74895d9b445704a85387c498d1d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_318e32f0523fb3d57729d1d3c6c2356007a6d900c4ce6239b243217aa7a70f66->leave($__internal_318e32f0523fb3d57729d1d3c6c2356007a6d900c4ce6239b243217aa7a70f66_prof);

        
        $__internal_b0c53f1c0cab2cd52b5f0da6c477168f8ff74895d9b445704a85387c498d1d76->leave($__internal_b0c53f1c0cab2cd52b5f0da6c477168f8ff74895d9b445704a85387c498d1d76_prof);

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
