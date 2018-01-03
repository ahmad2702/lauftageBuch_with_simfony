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
        $__internal_e3a33e419d9af4874093b43c8b804be4f6f3a1665c7bae7e5035fc6429e9d92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a33e419d9af4874093b43c8b804be4f6f3a1665c7bae7e5035fc6429e9d92b->enter($__internal_e3a33e419d9af4874093b43c8b804be4f6f3a1665c7bae7e5035fc6429e9d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_63341db668840bf7635b9990e1c58a6f6b1425865e8643c9eb15b612f80fc1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63341db668840bf7635b9990e1c58a6f6b1425865e8643c9eb15b612f80fc1ba->enter($__internal_63341db668840bf7635b9990e1c58a6f6b1425865e8643c9eb15b612f80fc1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e3a33e419d9af4874093b43c8b804be4f6f3a1665c7bae7e5035fc6429e9d92b->leave($__internal_e3a33e419d9af4874093b43c8b804be4f6f3a1665c7bae7e5035fc6429e9d92b_prof);

        
        $__internal_63341db668840bf7635b9990e1c58a6f6b1425865e8643c9eb15b612f80fc1ba->leave($__internal_63341db668840bf7635b9990e1c58a6f6b1425865e8643c9eb15b612f80fc1ba_prof);

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
