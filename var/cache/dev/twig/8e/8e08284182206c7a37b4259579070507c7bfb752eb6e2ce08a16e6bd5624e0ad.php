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
        $__internal_fd3ea72b1412c94e05f3ce7224a64a7b5ecd002d12f93eed7ad3cb0d649009ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3ea72b1412c94e05f3ce7224a64a7b5ecd002d12f93eed7ad3cb0d649009ca->enter($__internal_fd3ea72b1412c94e05f3ce7224a64a7b5ecd002d12f93eed7ad3cb0d649009ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_62a39555711d28a7c792ea184366eadb912ec8f8ddadb9ae1df15941e925f492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a39555711d28a7c792ea184366eadb912ec8f8ddadb9ae1df15941e925f492->enter($__internal_62a39555711d28a7c792ea184366eadb912ec8f8ddadb9ae1df15941e925f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_fd3ea72b1412c94e05f3ce7224a64a7b5ecd002d12f93eed7ad3cb0d649009ca->leave($__internal_fd3ea72b1412c94e05f3ce7224a64a7b5ecd002d12f93eed7ad3cb0d649009ca_prof);

        
        $__internal_62a39555711d28a7c792ea184366eadb912ec8f8ddadb9ae1df15941e925f492->leave($__internal_62a39555711d28a7c792ea184366eadb912ec8f8ddadb9ae1df15941e925f492_prof);

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
