<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_268790b5f078f20b95352f1529cbdf31c8e8d2fc3edba55a5551e29d0a8a3946 extends Twig_Template
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
        $__internal_f0774ebbae58557f3815394b16ef6e84c788b63fee896b407f6577211b51662d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0774ebbae58557f3815394b16ef6e84c788b63fee896b407f6577211b51662d->enter($__internal_f0774ebbae58557f3815394b16ef6e84c788b63fee896b407f6577211b51662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3f0eb65f6b23b5d6dd0ee892d64c50bee5c9832b0c35f9ea59c032821603dff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0eb65f6b23b5d6dd0ee892d64c50bee5c9832b0c35f9ea59c032821603dff3->enter($__internal_3f0eb65f6b23b5d6dd0ee892d64c50bee5c9832b0c35f9ea59c032821603dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f0774ebbae58557f3815394b16ef6e84c788b63fee896b407f6577211b51662d->leave($__internal_f0774ebbae58557f3815394b16ef6e84c788b63fee896b407f6577211b51662d_prof);

        
        $__internal_3f0eb65f6b23b5d6dd0ee892d64c50bee5c9832b0c35f9ea59c032821603dff3->leave($__internal_3f0eb65f6b23b5d6dd0ee892d64c50bee5c9832b0c35f9ea59c032821603dff3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
