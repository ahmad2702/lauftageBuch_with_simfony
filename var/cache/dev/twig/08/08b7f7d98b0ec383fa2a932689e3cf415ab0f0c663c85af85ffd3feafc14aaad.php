<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_97024c199e1665c2de77222e79e2ef4904ab45158afc3a4afe711fc325b61eb2 extends Twig_Template
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
        $__internal_8f81e0ff2c94dbb70c584273764cf824ab221e8a935f8ddb36c0271f0f66ce15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f81e0ff2c94dbb70c584273764cf824ab221e8a935f8ddb36c0271f0f66ce15->enter($__internal_8f81e0ff2c94dbb70c584273764cf824ab221e8a935f8ddb36c0271f0f66ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_34216dc0ecaac298dc28b44cf9f6e2d4891adaf311427bde0342af3845870d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34216dc0ecaac298dc28b44cf9f6e2d4891adaf311427bde0342af3845870d2f->enter($__internal_34216dc0ecaac298dc28b44cf9f6e2d4891adaf311427bde0342af3845870d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_8f81e0ff2c94dbb70c584273764cf824ab221e8a935f8ddb36c0271f0f66ce15->leave($__internal_8f81e0ff2c94dbb70c584273764cf824ab221e8a935f8ddb36c0271f0f66ce15_prof);

        
        $__internal_34216dc0ecaac298dc28b44cf9f6e2d4891adaf311427bde0342af3845870d2f->leave($__internal_34216dc0ecaac298dc28b44cf9f6e2d4891adaf311427bde0342af3845870d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
