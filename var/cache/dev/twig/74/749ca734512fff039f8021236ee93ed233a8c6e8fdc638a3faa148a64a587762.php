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
        $__internal_aa0d6d7552bc7dae23adfa8f7aceeb5480904d2049d363242258666dd282d8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0d6d7552bc7dae23adfa8f7aceeb5480904d2049d363242258666dd282d8ca->enter($__internal_aa0d6d7552bc7dae23adfa8f7aceeb5480904d2049d363242258666dd282d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_44b934c63c5acb7e910e70d0328b8ce8182ef0fbaeb37fcd74e8f62470837717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b934c63c5acb7e910e70d0328b8ce8182ef0fbaeb37fcd74e8f62470837717->enter($__internal_44b934c63c5acb7e910e70d0328b8ce8182ef0fbaeb37fcd74e8f62470837717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa0d6d7552bc7dae23adfa8f7aceeb5480904d2049d363242258666dd282d8ca->leave($__internal_aa0d6d7552bc7dae23adfa8f7aceeb5480904d2049d363242258666dd282d8ca_prof);

        
        $__internal_44b934c63c5acb7e910e70d0328b8ce8182ef0fbaeb37fcd74e8f62470837717->leave($__internal_44b934c63c5acb7e910e70d0328b8ce8182ef0fbaeb37fcd74e8f62470837717_prof);

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
