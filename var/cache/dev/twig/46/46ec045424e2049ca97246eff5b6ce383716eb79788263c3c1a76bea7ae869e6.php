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
        $__internal_7c5175bda8c9a0a0d34aa3a6a8fc99437a4d85529ba8079b767de863197b54f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5175bda8c9a0a0d34aa3a6a8fc99437a4d85529ba8079b767de863197b54f8->enter($__internal_7c5175bda8c9a0a0d34aa3a6a8fc99437a4d85529ba8079b767de863197b54f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_302cf78d708f2135af8ce8a68dfae6c573ab5ef27cd5a09b0171c7211060d764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302cf78d708f2135af8ce8a68dfae6c573ab5ef27cd5a09b0171c7211060d764->enter($__internal_302cf78d708f2135af8ce8a68dfae6c573ab5ef27cd5a09b0171c7211060d764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7c5175bda8c9a0a0d34aa3a6a8fc99437a4d85529ba8079b767de863197b54f8->leave($__internal_7c5175bda8c9a0a0d34aa3a6a8fc99437a4d85529ba8079b767de863197b54f8_prof);

        
        $__internal_302cf78d708f2135af8ce8a68dfae6c573ab5ef27cd5a09b0171c7211060d764->leave($__internal_302cf78d708f2135af8ce8a68dfae6c573ab5ef27cd5a09b0171c7211060d764_prof);

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
