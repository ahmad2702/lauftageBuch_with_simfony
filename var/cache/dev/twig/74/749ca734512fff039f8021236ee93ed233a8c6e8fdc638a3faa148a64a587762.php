<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ce36d71f1b5b661a400d476b0b464887fa2855cfe3753cae42238dd4e1c315ac extends Twig_Template
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
        $__internal_6c8a3d043789eea902ddb89ca165fd6d02f3e76c93d5da43374f8c978f82112b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8a3d043789eea902ddb89ca165fd6d02f3e76c93d5da43374f8c978f82112b->enter($__internal_6c8a3d043789eea902ddb89ca165fd6d02f3e76c93d5da43374f8c978f82112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a07acb7a66f025024271ab4ce6069b274a7cf7aeffb94f9dd1330d8aae4de592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07acb7a66f025024271ab4ce6069b274a7cf7aeffb94f9dd1330d8aae4de592->enter($__internal_a07acb7a66f025024271ab4ce6069b274a7cf7aeffb94f9dd1330d8aae4de592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6c8a3d043789eea902ddb89ca165fd6d02f3e76c93d5da43374f8c978f82112b->leave($__internal_6c8a3d043789eea902ddb89ca165fd6d02f3e76c93d5da43374f8c978f82112b_prof);

        
        $__internal_a07acb7a66f025024271ab4ce6069b274a7cf7aeffb94f9dd1330d8aae4de592->leave($__internal_a07acb7a66f025024271ab4ce6069b274a7cf7aeffb94f9dd1330d8aae4de592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
