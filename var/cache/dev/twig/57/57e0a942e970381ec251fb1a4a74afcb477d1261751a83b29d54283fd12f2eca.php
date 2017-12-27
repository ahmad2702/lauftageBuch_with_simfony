<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ea414f923c8daea9d3187806cb5ce0ebf8b5b8db2db905f83f658806e05ffedb extends Twig_Template
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
        $__internal_05c2272730be5905496aa01c8eb5c292d2bba4550e5eb877dfa7eee62750f039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c2272730be5905496aa01c8eb5c292d2bba4550e5eb877dfa7eee62750f039->enter($__internal_05c2272730be5905496aa01c8eb5c292d2bba4550e5eb877dfa7eee62750f039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a33f61ae2c155aa06a1f74b5aa784a5c0aa6ac158d6689a76ebadbd7a70b1bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33f61ae2c155aa06a1f74b5aa784a5c0aa6ac158d6689a76ebadbd7a70b1bec->enter($__internal_a33f61ae2c155aa06a1f74b5aa784a5c0aa6ac158d6689a76ebadbd7a70b1bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_05c2272730be5905496aa01c8eb5c292d2bba4550e5eb877dfa7eee62750f039->leave($__internal_05c2272730be5905496aa01c8eb5c292d2bba4550e5eb877dfa7eee62750f039_prof);

        
        $__internal_a33f61ae2c155aa06a1f74b5aa784a5c0aa6ac158d6689a76ebadbd7a70b1bec->leave($__internal_a33f61ae2c155aa06a1f74b5aa784a5c0aa6ac158d6689a76ebadbd7a70b1bec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
