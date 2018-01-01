<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e10b0188a2a73fd0b093698fef304517dfba6bfb7b753bbc55a995f9e6a6b79b extends Twig_Template
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
        $__internal_e4973887a615c79ad0d4c4645083a29e00631921baefa19bd0ee6e5e88238525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4973887a615c79ad0d4c4645083a29e00631921baefa19bd0ee6e5e88238525->enter($__internal_e4973887a615c79ad0d4c4645083a29e00631921baefa19bd0ee6e5e88238525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f7c9cc79bcfe1fac8b236928c9bd7c285bbc49322dc287de3bb5695ab212bb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c9cc79bcfe1fac8b236928c9bd7c285bbc49322dc287de3bb5695ab212bb6b->enter($__internal_f7c9cc79bcfe1fac8b236928c9bd7c285bbc49322dc287de3bb5695ab212bb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e4973887a615c79ad0d4c4645083a29e00631921baefa19bd0ee6e5e88238525->leave($__internal_e4973887a615c79ad0d4c4645083a29e00631921baefa19bd0ee6e5e88238525_prof);

        
        $__internal_f7c9cc79bcfe1fac8b236928c9bd7c285bbc49322dc287de3bb5695ab212bb6b->leave($__internal_f7c9cc79bcfe1fac8b236928c9bd7c285bbc49322dc287de3bb5695ab212bb6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
