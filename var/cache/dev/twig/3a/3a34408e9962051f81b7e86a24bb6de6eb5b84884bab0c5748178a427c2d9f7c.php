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
        $__internal_2258a328bd094f9a491a7bfbf23ac7fa79e99f2529abc923b772b7f514ec2e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2258a328bd094f9a491a7bfbf23ac7fa79e99f2529abc923b772b7f514ec2e2d->enter($__internal_2258a328bd094f9a491a7bfbf23ac7fa79e99f2529abc923b772b7f514ec2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5070d1972e8c336f3e243da0fa015dac6e89d1d675dec6d4934d66d3515b1eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5070d1972e8c336f3e243da0fa015dac6e89d1d675dec6d4934d66d3515b1eb1->enter($__internal_5070d1972e8c336f3e243da0fa015dac6e89d1d675dec6d4934d66d3515b1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2258a328bd094f9a491a7bfbf23ac7fa79e99f2529abc923b772b7f514ec2e2d->leave($__internal_2258a328bd094f9a491a7bfbf23ac7fa79e99f2529abc923b772b7f514ec2e2d_prof);

        
        $__internal_5070d1972e8c336f3e243da0fa015dac6e89d1d675dec6d4934d66d3515b1eb1->leave($__internal_5070d1972e8c336f3e243da0fa015dac6e89d1d675dec6d4934d66d3515b1eb1_prof);

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
