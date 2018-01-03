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
        $__internal_98df6e8503b5f1846af14f4e5db9dc0754fd1d2f607522cb10918dfc7b34d5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98df6e8503b5f1846af14f4e5db9dc0754fd1d2f607522cb10918dfc7b34d5d6->enter($__internal_98df6e8503b5f1846af14f4e5db9dc0754fd1d2f607522cb10918dfc7b34d5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_84379851548a49d8fb06b5b67367da094c53d1af5cbd6e28e50b47c5ec1cdde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84379851548a49d8fb06b5b67367da094c53d1af5cbd6e28e50b47c5ec1cdde3->enter($__internal_84379851548a49d8fb06b5b67367da094c53d1af5cbd6e28e50b47c5ec1cdde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_98df6e8503b5f1846af14f4e5db9dc0754fd1d2f607522cb10918dfc7b34d5d6->leave($__internal_98df6e8503b5f1846af14f4e5db9dc0754fd1d2f607522cb10918dfc7b34d5d6_prof);

        
        $__internal_84379851548a49d8fb06b5b67367da094c53d1af5cbd6e28e50b47c5ec1cdde3->leave($__internal_84379851548a49d8fb06b5b67367da094c53d1af5cbd6e28e50b47c5ec1cdde3_prof);

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
