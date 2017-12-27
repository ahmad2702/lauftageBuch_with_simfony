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
        $__internal_04edaadb0e228bffe979e2946b3a3587e64d7cb60b1c18d7e5c2efeba1642fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04edaadb0e228bffe979e2946b3a3587e64d7cb60b1c18d7e5c2efeba1642fa4->enter($__internal_04edaadb0e228bffe979e2946b3a3587e64d7cb60b1c18d7e5c2efeba1642fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_fe028c7e24b4a1f4edbbe7c3aa3f3c23e5b658aeaf3b353cae2ca3570f43f809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe028c7e24b4a1f4edbbe7c3aa3f3c23e5b658aeaf3b353cae2ca3570f43f809->enter($__internal_fe028c7e24b4a1f4edbbe7c3aa3f3c23e5b658aeaf3b353cae2ca3570f43f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_04edaadb0e228bffe979e2946b3a3587e64d7cb60b1c18d7e5c2efeba1642fa4->leave($__internal_04edaadb0e228bffe979e2946b3a3587e64d7cb60b1c18d7e5c2efeba1642fa4_prof);

        
        $__internal_fe028c7e24b4a1f4edbbe7c3aa3f3c23e5b658aeaf3b353cae2ca3570f43f809->leave($__internal_fe028c7e24b4a1f4edbbe7c3aa3f3c23e5b658aeaf3b353cae2ca3570f43f809_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
