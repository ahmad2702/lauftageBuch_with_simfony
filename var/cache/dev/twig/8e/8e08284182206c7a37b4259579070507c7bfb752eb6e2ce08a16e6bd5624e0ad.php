<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_651f90583c42de981f6d2376cd4cd003d9bb67e599b1422f35641a8daf212a69 extends Twig_Template
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
        $__internal_0575dd2f67d83c1b4ced5c3820b04503ac0f9efa9f6531220b25e1b9459ec7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0575dd2f67d83c1b4ced5c3820b04503ac0f9efa9f6531220b25e1b9459ec7b4->enter($__internal_0575dd2f67d83c1b4ced5c3820b04503ac0f9efa9f6531220b25e1b9459ec7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e1e613eee4bce03c4577295d8a9d7e0ef914f77c550e853d8108493e02f98242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e613eee4bce03c4577295d8a9d7e0ef914f77c550e853d8108493e02f98242->enter($__internal_e1e613eee4bce03c4577295d8a9d7e0ef914f77c550e853d8108493e02f98242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0575dd2f67d83c1b4ced5c3820b04503ac0f9efa9f6531220b25e1b9459ec7b4->leave($__internal_0575dd2f67d83c1b4ced5c3820b04503ac0f9efa9f6531220b25e1b9459ec7b4_prof);

        
        $__internal_e1e613eee4bce03c4577295d8a9d7e0ef914f77c550e853d8108493e02f98242->leave($__internal_e1e613eee4bce03c4577295d8a9d7e0ef914f77c550e853d8108493e02f98242_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
