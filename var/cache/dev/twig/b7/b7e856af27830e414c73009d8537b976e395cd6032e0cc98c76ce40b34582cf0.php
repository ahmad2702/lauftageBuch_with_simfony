<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9df71321cc61a979c35049c2b91cef680cf77582e32bf5d1fc7cddb5407a0a95 extends Twig_Template
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
        $__internal_09bb8c07258deaf29766fa6cb5c4c3857e4f7b88069b22bf28108557bbfc40e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bb8c07258deaf29766fa6cb5c4c3857e4f7b88069b22bf28108557bbfc40e6->enter($__internal_09bb8c07258deaf29766fa6cb5c4c3857e4f7b88069b22bf28108557bbfc40e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ec0ce1c6c94f8e69f1cad47eee2e9020c66b9ba38e805d0e5900dfd77ee9ed8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0ce1c6c94f8e69f1cad47eee2e9020c66b9ba38e805d0e5900dfd77ee9ed8f->enter($__internal_ec0ce1c6c94f8e69f1cad47eee2e9020c66b9ba38e805d0e5900dfd77ee9ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_09bb8c07258deaf29766fa6cb5c4c3857e4f7b88069b22bf28108557bbfc40e6->leave($__internal_09bb8c07258deaf29766fa6cb5c4c3857e4f7b88069b22bf28108557bbfc40e6_prof);

        
        $__internal_ec0ce1c6c94f8e69f1cad47eee2e9020c66b9ba38e805d0e5900dfd77ee9ed8f->leave($__internal_ec0ce1c6c94f8e69f1cad47eee2e9020c66b9ba38e805d0e5900dfd77ee9ed8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
