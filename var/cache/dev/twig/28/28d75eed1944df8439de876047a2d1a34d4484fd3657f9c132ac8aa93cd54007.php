<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f3c69dc02f9f55f93f96dd9f55e3bd0cca8c6e8bde7aa10cc9ba00b36324f783 extends Twig_Template
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
        $__internal_2fd6037530bad698c49e7b770726c101791fef6fc0a24fe9324e2b4550b5a50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd6037530bad698c49e7b770726c101791fef6fc0a24fe9324e2b4550b5a50e->enter($__internal_2fd6037530bad698c49e7b770726c101791fef6fc0a24fe9324e2b4550b5a50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b2dd5aff51dc5b221e2b709f6489946bb1bf692099b8b2fc82291d06c4ead32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd5aff51dc5b221e2b709f6489946bb1bf692099b8b2fc82291d06c4ead32d->enter($__internal_b2dd5aff51dc5b221e2b709f6489946bb1bf692099b8b2fc82291d06c4ead32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2fd6037530bad698c49e7b770726c101791fef6fc0a24fe9324e2b4550b5a50e->leave($__internal_2fd6037530bad698c49e7b770726c101791fef6fc0a24fe9324e2b4550b5a50e_prof);

        
        $__internal_b2dd5aff51dc5b221e2b709f6489946bb1bf692099b8b2fc82291d06c4ead32d->leave($__internal_b2dd5aff51dc5b221e2b709f6489946bb1bf692099b8b2fc82291d06c4ead32d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
