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
        $__internal_17fe587525b41257592f79ae7955030de5bde029186f972f7a3ec7b94cb10423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fe587525b41257592f79ae7955030de5bde029186f972f7a3ec7b94cb10423->enter($__internal_17fe587525b41257592f79ae7955030de5bde029186f972f7a3ec7b94cb10423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c97c6d8860aab7bd687e34655c9befaff7f3d05ca154c639d1bded0d0c38408d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97c6d8860aab7bd687e34655c9befaff7f3d05ca154c639d1bded0d0c38408d->enter($__internal_c97c6d8860aab7bd687e34655c9befaff7f3d05ca154c639d1bded0d0c38408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_17fe587525b41257592f79ae7955030de5bde029186f972f7a3ec7b94cb10423->leave($__internal_17fe587525b41257592f79ae7955030de5bde029186f972f7a3ec7b94cb10423_prof);

        
        $__internal_c97c6d8860aab7bd687e34655c9befaff7f3d05ca154c639d1bded0d0c38408d->leave($__internal_c97c6d8860aab7bd687e34655c9befaff7f3d05ca154c639d1bded0d0c38408d_prof);

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
