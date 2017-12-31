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
        $__internal_8fc7f8bc47a8d4ec6bf8a8ad71f3f65ba6eb6659ed71481d9bd04fb74818c95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc7f8bc47a8d4ec6bf8a8ad71f3f65ba6eb6659ed71481d9bd04fb74818c95e->enter($__internal_8fc7f8bc47a8d4ec6bf8a8ad71f3f65ba6eb6659ed71481d9bd04fb74818c95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8a7faa3d55d5a5a72ec318d6028c4d83f10737014133d4119c45a2c1d6b50bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7faa3d55d5a5a72ec318d6028c4d83f10737014133d4119c45a2c1d6b50bef->enter($__internal_8a7faa3d55d5a5a72ec318d6028c4d83f10737014133d4119c45a2c1d6b50bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8fc7f8bc47a8d4ec6bf8a8ad71f3f65ba6eb6659ed71481d9bd04fb74818c95e->leave($__internal_8fc7f8bc47a8d4ec6bf8a8ad71f3f65ba6eb6659ed71481d9bd04fb74818c95e_prof);

        
        $__internal_8a7faa3d55d5a5a72ec318d6028c4d83f10737014133d4119c45a2c1d6b50bef->leave($__internal_8a7faa3d55d5a5a72ec318d6028c4d83f10737014133d4119c45a2c1d6b50bef_prof);

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
