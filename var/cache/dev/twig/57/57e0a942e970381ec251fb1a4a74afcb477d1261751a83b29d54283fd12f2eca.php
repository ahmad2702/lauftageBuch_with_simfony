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
        $__internal_ec50e0fe8acd74b39da7bc33f0ef6b21db81f156d00415b4db3f750905b32fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec50e0fe8acd74b39da7bc33f0ef6b21db81f156d00415b4db3f750905b32fb2->enter($__internal_ec50e0fe8acd74b39da7bc33f0ef6b21db81f156d00415b4db3f750905b32fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2a42da4e67f5a6043dff5c0ff8749924f393cb9432a5036ba42b26e4e20eb293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a42da4e67f5a6043dff5c0ff8749924f393cb9432a5036ba42b26e4e20eb293->enter($__internal_2a42da4e67f5a6043dff5c0ff8749924f393cb9432a5036ba42b26e4e20eb293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ec50e0fe8acd74b39da7bc33f0ef6b21db81f156d00415b4db3f750905b32fb2->leave($__internal_ec50e0fe8acd74b39da7bc33f0ef6b21db81f156d00415b4db3f750905b32fb2_prof);

        
        $__internal_2a42da4e67f5a6043dff5c0ff8749924f393cb9432a5036ba42b26e4e20eb293->leave($__internal_2a42da4e67f5a6043dff5c0ff8749924f393cb9432a5036ba42b26e4e20eb293_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
