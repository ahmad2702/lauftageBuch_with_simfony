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
        $__internal_6cf3452db4f0743a89be29c7d30868a6bc72ba6aa74ff40afb807a9de4c37b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf3452db4f0743a89be29c7d30868a6bc72ba6aa74ff40afb807a9de4c37b45->enter($__internal_6cf3452db4f0743a89be29c7d30868a6bc72ba6aa74ff40afb807a9de4c37b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_06a458526c232ca79a24ea6d9916ebd29d7f068a44be31c61f345461f1d9d381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a458526c232ca79a24ea6d9916ebd29d7f068a44be31c61f345461f1d9d381->enter($__internal_06a458526c232ca79a24ea6d9916ebd29d7f068a44be31c61f345461f1d9d381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_6cf3452db4f0743a89be29c7d30868a6bc72ba6aa74ff40afb807a9de4c37b45->leave($__internal_6cf3452db4f0743a89be29c7d30868a6bc72ba6aa74ff40afb807a9de4c37b45_prof);

        
        $__internal_06a458526c232ca79a24ea6d9916ebd29d7f068a44be31c61f345461f1d9d381->leave($__internal_06a458526c232ca79a24ea6d9916ebd29d7f068a44be31c61f345461f1d9d381_prof);

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
