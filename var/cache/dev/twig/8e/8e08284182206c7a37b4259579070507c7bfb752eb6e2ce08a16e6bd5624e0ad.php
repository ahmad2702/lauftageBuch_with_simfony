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
        $__internal_4bf32079e17aac70323c019338980a915ecee15a906415eb7799bc19de08595f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf32079e17aac70323c019338980a915ecee15a906415eb7799bc19de08595f->enter($__internal_4bf32079e17aac70323c019338980a915ecee15a906415eb7799bc19de08595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e9c3d9436ecb017b2aeac6ae7c4dd2ecb9bbc2def3482403af249d0d31884f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c3d9436ecb017b2aeac6ae7c4dd2ecb9bbc2def3482403af249d0d31884f02->enter($__internal_e9c3d9436ecb017b2aeac6ae7c4dd2ecb9bbc2def3482403af249d0d31884f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_4bf32079e17aac70323c019338980a915ecee15a906415eb7799bc19de08595f->leave($__internal_4bf32079e17aac70323c019338980a915ecee15a906415eb7799bc19de08595f_prof);

        
        $__internal_e9c3d9436ecb017b2aeac6ae7c4dd2ecb9bbc2def3482403af249d0d31884f02->leave($__internal_e9c3d9436ecb017b2aeac6ae7c4dd2ecb9bbc2def3482403af249d0d31884f02_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
