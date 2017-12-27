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
        $__internal_a40f476ea01e95144796449a6da2a7bc45a00c7feb3cb0120fbac472ef96e2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40f476ea01e95144796449a6da2a7bc45a00c7feb3cb0120fbac472ef96e2a7->enter($__internal_a40f476ea01e95144796449a6da2a7bc45a00c7feb3cb0120fbac472ef96e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9b729913722430c44fc56839def4120a4712f7c1f9e79b4591883789e618e5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b729913722430c44fc56839def4120a4712f7c1f9e79b4591883789e618e5f7->enter($__internal_9b729913722430c44fc56839def4120a4712f7c1f9e79b4591883789e618e5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a40f476ea01e95144796449a6da2a7bc45a00c7feb3cb0120fbac472ef96e2a7->leave($__internal_a40f476ea01e95144796449a6da2a7bc45a00c7feb3cb0120fbac472ef96e2a7_prof);

        
        $__internal_9b729913722430c44fc56839def4120a4712f7c1f9e79b4591883789e618e5f7->leave($__internal_9b729913722430c44fc56839def4120a4712f7c1f9e79b4591883789e618e5f7_prof);

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
