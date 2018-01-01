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
        $__internal_cb18414018d18b8c7d6cfa05ff38bbb81e23163bd899b2b4e87f380f809198d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb18414018d18b8c7d6cfa05ff38bbb81e23163bd899b2b4e87f380f809198d0->enter($__internal_cb18414018d18b8c7d6cfa05ff38bbb81e23163bd899b2b4e87f380f809198d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2f061b6f0935f45cb9ec8c5dfffeafd3a5d404788545fe5797f48ed089f51408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f061b6f0935f45cb9ec8c5dfffeafd3a5d404788545fe5797f48ed089f51408->enter($__internal_2f061b6f0935f45cb9ec8c5dfffeafd3a5d404788545fe5797f48ed089f51408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_cb18414018d18b8c7d6cfa05ff38bbb81e23163bd899b2b4e87f380f809198d0->leave($__internal_cb18414018d18b8c7d6cfa05ff38bbb81e23163bd899b2b4e87f380f809198d0_prof);

        
        $__internal_2f061b6f0935f45cb9ec8c5dfffeafd3a5d404788545fe5797f48ed089f51408->leave($__internal_2f061b6f0935f45cb9ec8c5dfffeafd3a5d404788545fe5797f48ed089f51408_prof);

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
