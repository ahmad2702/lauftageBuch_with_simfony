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
        $__internal_8610be45410d9551d2fbc2cb21c53286a9965ce67792f1d3faeb285416d48f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8610be45410d9551d2fbc2cb21c53286a9965ce67792f1d3faeb285416d48f29->enter($__internal_8610be45410d9551d2fbc2cb21c53286a9965ce67792f1d3faeb285416d48f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_90a2f52bad43c270a7ea0f0557240ec93c2472e5e68e4c71da271bf789bdeb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a2f52bad43c270a7ea0f0557240ec93c2472e5e68e4c71da271bf789bdeb7a->enter($__internal_90a2f52bad43c270a7ea0f0557240ec93c2472e5e68e4c71da271bf789bdeb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8610be45410d9551d2fbc2cb21c53286a9965ce67792f1d3faeb285416d48f29->leave($__internal_8610be45410d9551d2fbc2cb21c53286a9965ce67792f1d3faeb285416d48f29_prof);

        
        $__internal_90a2f52bad43c270a7ea0f0557240ec93c2472e5e68e4c71da271bf789bdeb7a->leave($__internal_90a2f52bad43c270a7ea0f0557240ec93c2472e5e68e4c71da271bf789bdeb7a_prof);

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
