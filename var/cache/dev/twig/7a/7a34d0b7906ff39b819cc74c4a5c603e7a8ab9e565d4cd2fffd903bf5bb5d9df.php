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
        $__internal_87251a41d0feeefa9de7ae82aef33ae36a82e860387380fcb5071bf0805c91dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87251a41d0feeefa9de7ae82aef33ae36a82e860387380fcb5071bf0805c91dd->enter($__internal_87251a41d0feeefa9de7ae82aef33ae36a82e860387380fcb5071bf0805c91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9393f26d1e9fe0c367f941dbfe708a50ac5bff78a96c9b5b458057c5dcd7633a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9393f26d1e9fe0c367f941dbfe708a50ac5bff78a96c9b5b458057c5dcd7633a->enter($__internal_9393f26d1e9fe0c367f941dbfe708a50ac5bff78a96c9b5b458057c5dcd7633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_87251a41d0feeefa9de7ae82aef33ae36a82e860387380fcb5071bf0805c91dd->leave($__internal_87251a41d0feeefa9de7ae82aef33ae36a82e860387380fcb5071bf0805c91dd_prof);

        
        $__internal_9393f26d1e9fe0c367f941dbfe708a50ac5bff78a96c9b5b458057c5dcd7633a->leave($__internal_9393f26d1e9fe0c367f941dbfe708a50ac5bff78a96c9b5b458057c5dcd7633a_prof);

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
