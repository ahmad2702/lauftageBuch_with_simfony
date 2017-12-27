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
        $__internal_59637ed67c5e5a545ec10361151c7bdf0aca613f27eb71418b95a5181e22de33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59637ed67c5e5a545ec10361151c7bdf0aca613f27eb71418b95a5181e22de33->enter($__internal_59637ed67c5e5a545ec10361151c7bdf0aca613f27eb71418b95a5181e22de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d71db4d76d5cf869e35f1a9e289e3ba07ab1b7494f459fa76dce0fccf91f4e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71db4d76d5cf869e35f1a9e289e3ba07ab1b7494f459fa76dce0fccf91f4e21->enter($__internal_d71db4d76d5cf869e35f1a9e289e3ba07ab1b7494f459fa76dce0fccf91f4e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_59637ed67c5e5a545ec10361151c7bdf0aca613f27eb71418b95a5181e22de33->leave($__internal_59637ed67c5e5a545ec10361151c7bdf0aca613f27eb71418b95a5181e22de33_prof);

        
        $__internal_d71db4d76d5cf869e35f1a9e289e3ba07ab1b7494f459fa76dce0fccf91f4e21->leave($__internal_d71db4d76d5cf869e35f1a9e289e3ba07ab1b7494f459fa76dce0fccf91f4e21_prof);

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
