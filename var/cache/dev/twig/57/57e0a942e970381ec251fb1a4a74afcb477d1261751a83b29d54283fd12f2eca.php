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
        $__internal_feeaef41442f479f16dda64c1fd417953889ac6d7570e9ad162110eb309cf0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeaef41442f479f16dda64c1fd417953889ac6d7570e9ad162110eb309cf0db->enter($__internal_feeaef41442f479f16dda64c1fd417953889ac6d7570e9ad162110eb309cf0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_eadfeabf0b391f99533f09a39b8f543b8f67ddecc03fc0dd8c312f24da4c2bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadfeabf0b391f99533f09a39b8f543b8f67ddecc03fc0dd8c312f24da4c2bf1->enter($__internal_eadfeabf0b391f99533f09a39b8f543b8f67ddecc03fc0dd8c312f24da4c2bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_feeaef41442f479f16dda64c1fd417953889ac6d7570e9ad162110eb309cf0db->leave($__internal_feeaef41442f479f16dda64c1fd417953889ac6d7570e9ad162110eb309cf0db_prof);

        
        $__internal_eadfeabf0b391f99533f09a39b8f543b8f67ddecc03fc0dd8c312f24da4c2bf1->leave($__internal_eadfeabf0b391f99533f09a39b8f543b8f67ddecc03fc0dd8c312f24da4c2bf1_prof);

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
