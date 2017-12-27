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
        $__internal_c6a55e8141f72a798bfce58d5e8e7747f8bc8c7a6d3061496939169659afed7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a55e8141f72a798bfce58d5e8e7747f8bc8c7a6d3061496939169659afed7a->enter($__internal_c6a55e8141f72a798bfce58d5e8e7747f8bc8c7a6d3061496939169659afed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7d3f340b9c24651d1bc8383be2a98ffc9f74515917659c48b51a3a179fe84003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3f340b9c24651d1bc8383be2a98ffc9f74515917659c48b51a3a179fe84003->enter($__internal_7d3f340b9c24651d1bc8383be2a98ffc9f74515917659c48b51a3a179fe84003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c6a55e8141f72a798bfce58d5e8e7747f8bc8c7a6d3061496939169659afed7a->leave($__internal_c6a55e8141f72a798bfce58d5e8e7747f8bc8c7a6d3061496939169659afed7a_prof);

        
        $__internal_7d3f340b9c24651d1bc8383be2a98ffc9f74515917659c48b51a3a179fe84003->leave($__internal_7d3f340b9c24651d1bc8383be2a98ffc9f74515917659c48b51a3a179fe84003_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
