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
        $__internal_f65fb82c55208282e84b2fe16434481b39c09ca387eaeb6ad30337a8577d4acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65fb82c55208282e84b2fe16434481b39c09ca387eaeb6ad30337a8577d4acc->enter($__internal_f65fb82c55208282e84b2fe16434481b39c09ca387eaeb6ad30337a8577d4acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e30fe6d885d6c4a5eda118c61cb431ce9ee4c72abb86d3f7e02700df7657126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30fe6d885d6c4a5eda118c61cb431ce9ee4c72abb86d3f7e02700df7657126b->enter($__internal_e30fe6d885d6c4a5eda118c61cb431ce9ee4c72abb86d3f7e02700df7657126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f65fb82c55208282e84b2fe16434481b39c09ca387eaeb6ad30337a8577d4acc->leave($__internal_f65fb82c55208282e84b2fe16434481b39c09ca387eaeb6ad30337a8577d4acc_prof);

        
        $__internal_e30fe6d885d6c4a5eda118c61cb431ce9ee4c72abb86d3f7e02700df7657126b->leave($__internal_e30fe6d885d6c4a5eda118c61cb431ce9ee4c72abb86d3f7e02700df7657126b_prof);

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
