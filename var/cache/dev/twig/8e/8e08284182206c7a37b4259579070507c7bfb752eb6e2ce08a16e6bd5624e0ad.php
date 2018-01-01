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
        $__internal_314f71e13eafdbd62447a24d0f14887604c40e6d60f42309534a65a714ba11b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314f71e13eafdbd62447a24d0f14887604c40e6d60f42309534a65a714ba11b6->enter($__internal_314f71e13eafdbd62447a24d0f14887604c40e6d60f42309534a65a714ba11b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6bf73a367930aba734c1b3dde59e528dc6fa4d9ff0835906d9bccbb8539a2a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf73a367930aba734c1b3dde59e528dc6fa4d9ff0835906d9bccbb8539a2a46->enter($__internal_6bf73a367930aba734c1b3dde59e528dc6fa4d9ff0835906d9bccbb8539a2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_314f71e13eafdbd62447a24d0f14887604c40e6d60f42309534a65a714ba11b6->leave($__internal_314f71e13eafdbd62447a24d0f14887604c40e6d60f42309534a65a714ba11b6_prof);

        
        $__internal_6bf73a367930aba734c1b3dde59e528dc6fa4d9ff0835906d9bccbb8539a2a46->leave($__internal_6bf73a367930aba734c1b3dde59e528dc6fa4d9ff0835906d9bccbb8539a2a46_prof);

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
