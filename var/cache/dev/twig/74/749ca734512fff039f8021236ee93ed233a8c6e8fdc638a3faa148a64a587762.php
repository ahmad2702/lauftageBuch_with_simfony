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
        $__internal_ca3426bc34e96616dcb920cad3457ee300fef2c6013859ea5725ba6e749e7769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3426bc34e96616dcb920cad3457ee300fef2c6013859ea5725ba6e749e7769->enter($__internal_ca3426bc34e96616dcb920cad3457ee300fef2c6013859ea5725ba6e749e7769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a2ba8efe392d5372cd2ddb6a9aaed8490983d13a4927fd2f3fcd4a1009fbd053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ba8efe392d5372cd2ddb6a9aaed8490983d13a4927fd2f3fcd4a1009fbd053->enter($__internal_a2ba8efe392d5372cd2ddb6a9aaed8490983d13a4927fd2f3fcd4a1009fbd053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ca3426bc34e96616dcb920cad3457ee300fef2c6013859ea5725ba6e749e7769->leave($__internal_ca3426bc34e96616dcb920cad3457ee300fef2c6013859ea5725ba6e749e7769_prof);

        
        $__internal_a2ba8efe392d5372cd2ddb6a9aaed8490983d13a4927fd2f3fcd4a1009fbd053->leave($__internal_a2ba8efe392d5372cd2ddb6a9aaed8490983d13a4927fd2f3fcd4a1009fbd053_prof);

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
