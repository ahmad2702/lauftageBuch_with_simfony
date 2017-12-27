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
        $__internal_fb60d57a46f96388031277a7979339a03169600e822679c3c631844fc2c7823b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb60d57a46f96388031277a7979339a03169600e822679c3c631844fc2c7823b->enter($__internal_fb60d57a46f96388031277a7979339a03169600e822679c3c631844fc2c7823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3097796cf5503baa56e6fb9610c0cb1003cf4c9efaf363088e65067c9e9ae587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3097796cf5503baa56e6fb9610c0cb1003cf4c9efaf363088e65067c9e9ae587->enter($__internal_3097796cf5503baa56e6fb9610c0cb1003cf4c9efaf363088e65067c9e9ae587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fb60d57a46f96388031277a7979339a03169600e822679c3c631844fc2c7823b->leave($__internal_fb60d57a46f96388031277a7979339a03169600e822679c3c631844fc2c7823b_prof);

        
        $__internal_3097796cf5503baa56e6fb9610c0cb1003cf4c9efaf363088e65067c9e9ae587->leave($__internal_3097796cf5503baa56e6fb9610c0cb1003cf4c9efaf363088e65067c9e9ae587_prof);

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
