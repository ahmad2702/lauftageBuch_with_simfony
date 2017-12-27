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
        $__internal_3235a8e3824c3125f4e5a641236c2b1fc6a57c3f87ceb51a65dbaa77f862cd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3235a8e3824c3125f4e5a641236c2b1fc6a57c3f87ceb51a65dbaa77f862cd45->enter($__internal_3235a8e3824c3125f4e5a641236c2b1fc6a57c3f87ceb51a65dbaa77f862cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_04e977933a3f7f23259039279337423a191067c0c34aa35e896f94cecfaab683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e977933a3f7f23259039279337423a191067c0c34aa35e896f94cecfaab683->enter($__internal_04e977933a3f7f23259039279337423a191067c0c34aa35e896f94cecfaab683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3235a8e3824c3125f4e5a641236c2b1fc6a57c3f87ceb51a65dbaa77f862cd45->leave($__internal_3235a8e3824c3125f4e5a641236c2b1fc6a57c3f87ceb51a65dbaa77f862cd45_prof);

        
        $__internal_04e977933a3f7f23259039279337423a191067c0c34aa35e896f94cecfaab683->leave($__internal_04e977933a3f7f23259039279337423a191067c0c34aa35e896f94cecfaab683_prof);

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
