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
        $__internal_ab13749f4061a1a3af1a642dff4465003d2db4089a6d14c9dbc351ecc5b7561f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab13749f4061a1a3af1a642dff4465003d2db4089a6d14c9dbc351ecc5b7561f->enter($__internal_ab13749f4061a1a3af1a642dff4465003d2db4089a6d14c9dbc351ecc5b7561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2cd4ca4eccdac6d35b1acb0c793eeec889b8ee6d707abcb772f1301097c2bca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd4ca4eccdac6d35b1acb0c793eeec889b8ee6d707abcb772f1301097c2bca8->enter($__internal_2cd4ca4eccdac6d35b1acb0c793eeec889b8ee6d707abcb772f1301097c2bca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ab13749f4061a1a3af1a642dff4465003d2db4089a6d14c9dbc351ecc5b7561f->leave($__internal_ab13749f4061a1a3af1a642dff4465003d2db4089a6d14c9dbc351ecc5b7561f_prof);

        
        $__internal_2cd4ca4eccdac6d35b1acb0c793eeec889b8ee6d707abcb772f1301097c2bca8->leave($__internal_2cd4ca4eccdac6d35b1acb0c793eeec889b8ee6d707abcb772f1301097c2bca8_prof);

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
