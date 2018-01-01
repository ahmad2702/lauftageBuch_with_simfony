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
        $__internal_4121615bd12a9bab67d6bc789f4530ecc8f9ca686873f7ecb4f677c86138d5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4121615bd12a9bab67d6bc789f4530ecc8f9ca686873f7ecb4f677c86138d5da->enter($__internal_4121615bd12a9bab67d6bc789f4530ecc8f9ca686873f7ecb4f677c86138d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_61968a04e92a57f0144009001dcdcbf323467ff3acc37b1d6dff74b7e1b20621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61968a04e92a57f0144009001dcdcbf323467ff3acc37b1d6dff74b7e1b20621->enter($__internal_61968a04e92a57f0144009001dcdcbf323467ff3acc37b1d6dff74b7e1b20621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4121615bd12a9bab67d6bc789f4530ecc8f9ca686873f7ecb4f677c86138d5da->leave($__internal_4121615bd12a9bab67d6bc789f4530ecc8f9ca686873f7ecb4f677c86138d5da_prof);

        
        $__internal_61968a04e92a57f0144009001dcdcbf323467ff3acc37b1d6dff74b7e1b20621->leave($__internal_61968a04e92a57f0144009001dcdcbf323467ff3acc37b1d6dff74b7e1b20621_prof);

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
