<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9df71321cc61a979c35049c2b91cef680cf77582e32bf5d1fc7cddb5407a0a95 extends Twig_Template
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
        $__internal_d2bc5826c518b60e670b2d62dfb15bb0de6b831f43b2ba11489de3d7a0f16624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bc5826c518b60e670b2d62dfb15bb0de6b831f43b2ba11489de3d7a0f16624->enter($__internal_d2bc5826c518b60e670b2d62dfb15bb0de6b831f43b2ba11489de3d7a0f16624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3198a095d7bc676d94ed0f780f9e7e3c4ded50bcb2ca7bb8803899d597a15834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3198a095d7bc676d94ed0f780f9e7e3c4ded50bcb2ca7bb8803899d597a15834->enter($__internal_3198a095d7bc676d94ed0f780f9e7e3c4ded50bcb2ca7bb8803899d597a15834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d2bc5826c518b60e670b2d62dfb15bb0de6b831f43b2ba11489de3d7a0f16624->leave($__internal_d2bc5826c518b60e670b2d62dfb15bb0de6b831f43b2ba11489de3d7a0f16624_prof);

        
        $__internal_3198a095d7bc676d94ed0f780f9e7e3c4ded50bcb2ca7bb8803899d597a15834->leave($__internal_3198a095d7bc676d94ed0f780f9e7e3c4ded50bcb2ca7bb8803899d597a15834_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
