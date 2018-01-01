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
        $__internal_a2d61097b8f4fa6a58ace68e7b19b18887bd5005d19b57ddd9383b58679db001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d61097b8f4fa6a58ace68e7b19b18887bd5005d19b57ddd9383b58679db001->enter($__internal_a2d61097b8f4fa6a58ace68e7b19b18887bd5005d19b57ddd9383b58679db001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_85e6441615bd6fefa1ee18e6688f47aaf6daf57d07f58175c8f29acbe0159224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e6441615bd6fefa1ee18e6688f47aaf6daf57d07f58175c8f29acbe0159224->enter($__internal_85e6441615bd6fefa1ee18e6688f47aaf6daf57d07f58175c8f29acbe0159224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a2d61097b8f4fa6a58ace68e7b19b18887bd5005d19b57ddd9383b58679db001->leave($__internal_a2d61097b8f4fa6a58ace68e7b19b18887bd5005d19b57ddd9383b58679db001_prof);

        
        $__internal_85e6441615bd6fefa1ee18e6688f47aaf6daf57d07f58175c8f29acbe0159224->leave($__internal_85e6441615bd6fefa1ee18e6688f47aaf6daf57d07f58175c8f29acbe0159224_prof);

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
