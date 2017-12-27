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
        $__internal_8c1e11b4c47f20c8b4b21400eb57b85cea2e8bc8d765ea5b2e4bd36c7d2f940a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1e11b4c47f20c8b4b21400eb57b85cea2e8bc8d765ea5b2e4bd36c7d2f940a->enter($__internal_8c1e11b4c47f20c8b4b21400eb57b85cea2e8bc8d765ea5b2e4bd36c7d2f940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ebe0ccb5004be0c09db4586b69b69609ffd10d3979ee54ab3d8fda28e06faf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe0ccb5004be0c09db4586b69b69609ffd10d3979ee54ab3d8fda28e06faf31->enter($__internal_ebe0ccb5004be0c09db4586b69b69609ffd10d3979ee54ab3d8fda28e06faf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8c1e11b4c47f20c8b4b21400eb57b85cea2e8bc8d765ea5b2e4bd36c7d2f940a->leave($__internal_8c1e11b4c47f20c8b4b21400eb57b85cea2e8bc8d765ea5b2e4bd36c7d2f940a_prof);

        
        $__internal_ebe0ccb5004be0c09db4586b69b69609ffd10d3979ee54ab3d8fda28e06faf31->leave($__internal_ebe0ccb5004be0c09db4586b69b69609ffd10d3979ee54ab3d8fda28e06faf31_prof);

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
