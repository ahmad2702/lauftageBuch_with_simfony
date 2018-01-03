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
        $__internal_1d4ecf42594e29a951c2c3676f61174706d8e64f5a54ca6a7241edb90673f8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4ecf42594e29a951c2c3676f61174706d8e64f5a54ca6a7241edb90673f8fd->enter($__internal_1d4ecf42594e29a951c2c3676f61174706d8e64f5a54ca6a7241edb90673f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_440b6f48233395f05e37b7ff40ac03457f41214d9979a76028fc6bf26fad5cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440b6f48233395f05e37b7ff40ac03457f41214d9979a76028fc6bf26fad5cf0->enter($__internal_440b6f48233395f05e37b7ff40ac03457f41214d9979a76028fc6bf26fad5cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_1d4ecf42594e29a951c2c3676f61174706d8e64f5a54ca6a7241edb90673f8fd->leave($__internal_1d4ecf42594e29a951c2c3676f61174706d8e64f5a54ca6a7241edb90673f8fd_prof);

        
        $__internal_440b6f48233395f05e37b7ff40ac03457f41214d9979a76028fc6bf26fad5cf0->leave($__internal_440b6f48233395f05e37b7ff40ac03457f41214d9979a76028fc6bf26fad5cf0_prof);

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
", "@Framework/Form/form_start.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
