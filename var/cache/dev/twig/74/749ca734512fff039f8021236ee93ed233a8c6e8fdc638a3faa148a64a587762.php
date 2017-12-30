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
        $__internal_9d1557187d52f3db9dd7d4095345a0ddc33323b75fe23949b600a0f12ceffff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1557187d52f3db9dd7d4095345a0ddc33323b75fe23949b600a0f12ceffff9->enter($__internal_9d1557187d52f3db9dd7d4095345a0ddc33323b75fe23949b600a0f12ceffff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_551965a07e5b0b8e92ff3450fb0b04b6a0c1020da970a09c691bf80d4ea4a24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551965a07e5b0b8e92ff3450fb0b04b6a0c1020da970a09c691bf80d4ea4a24a->enter($__internal_551965a07e5b0b8e92ff3450fb0b04b6a0c1020da970a09c691bf80d4ea4a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9d1557187d52f3db9dd7d4095345a0ddc33323b75fe23949b600a0f12ceffff9->leave($__internal_9d1557187d52f3db9dd7d4095345a0ddc33323b75fe23949b600a0f12ceffff9_prof);

        
        $__internal_551965a07e5b0b8e92ff3450fb0b04b6a0c1020da970a09c691bf80d4ea4a24a->leave($__internal_551965a07e5b0b8e92ff3450fb0b04b6a0c1020da970a09c691bf80d4ea4a24a_prof);

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
