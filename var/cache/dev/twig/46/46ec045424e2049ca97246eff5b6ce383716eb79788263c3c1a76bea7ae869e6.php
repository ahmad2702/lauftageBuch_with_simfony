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
        $__internal_4adeccfc48ed50a06f7f9efe52196c634b3cf9a0c2f4a3f03c5720078534aa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adeccfc48ed50a06f7f9efe52196c634b3cf9a0c2f4a3f03c5720078534aa31->enter($__internal_4adeccfc48ed50a06f7f9efe52196c634b3cf9a0c2f4a3f03c5720078534aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f3be166d95014ff414ae2c0bd7da9a386e4dac383b119d9ebdd529c66783a19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3be166d95014ff414ae2c0bd7da9a386e4dac383b119d9ebdd529c66783a19f->enter($__internal_f3be166d95014ff414ae2c0bd7da9a386e4dac383b119d9ebdd529c66783a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4adeccfc48ed50a06f7f9efe52196c634b3cf9a0c2f4a3f03c5720078534aa31->leave($__internal_4adeccfc48ed50a06f7f9efe52196c634b3cf9a0c2f4a3f03c5720078534aa31_prof);

        
        $__internal_f3be166d95014ff414ae2c0bd7da9a386e4dac383b119d9ebdd529c66783a19f->leave($__internal_f3be166d95014ff414ae2c0bd7da9a386e4dac383b119d9ebdd529c66783a19f_prof);

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
