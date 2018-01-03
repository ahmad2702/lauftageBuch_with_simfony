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
        $__internal_5f595179b5c95bf123baa9b421c52fffc29659351e7ecd2a698ae1c4d0bc3e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f595179b5c95bf123baa9b421c52fffc29659351e7ecd2a698ae1c4d0bc3e70->enter($__internal_5f595179b5c95bf123baa9b421c52fffc29659351e7ecd2a698ae1c4d0bc3e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ac3ab8094fb48d734cd1f208c787638483cb1b760e83fb8ebf085c7af12c51d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3ab8094fb48d734cd1f208c787638483cb1b760e83fb8ebf085c7af12c51d9->enter($__internal_ac3ab8094fb48d734cd1f208c787638483cb1b760e83fb8ebf085c7af12c51d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5f595179b5c95bf123baa9b421c52fffc29659351e7ecd2a698ae1c4d0bc3e70->leave($__internal_5f595179b5c95bf123baa9b421c52fffc29659351e7ecd2a698ae1c4d0bc3e70_prof);

        
        $__internal_ac3ab8094fb48d734cd1f208c787638483cb1b760e83fb8ebf085c7af12c51d9->leave($__internal_ac3ab8094fb48d734cd1f208c787638483cb1b760e83fb8ebf085c7af12c51d9_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
