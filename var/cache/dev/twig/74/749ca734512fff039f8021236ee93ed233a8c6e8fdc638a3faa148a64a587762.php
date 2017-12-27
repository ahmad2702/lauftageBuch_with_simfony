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
        $__internal_153246a2c67a96592ce9d283f219f81b0ef346b90cd425facd6e9c5f92e136d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153246a2c67a96592ce9d283f219f81b0ef346b90cd425facd6e9c5f92e136d0->enter($__internal_153246a2c67a96592ce9d283f219f81b0ef346b90cd425facd6e9c5f92e136d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_49873319873587daf43678399cf0a895ada902fd7275178ca71086087a22b1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49873319873587daf43678399cf0a895ada902fd7275178ca71086087a22b1bd->enter($__internal_49873319873587daf43678399cf0a895ada902fd7275178ca71086087a22b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_153246a2c67a96592ce9d283f219f81b0ef346b90cd425facd6e9c5f92e136d0->leave($__internal_153246a2c67a96592ce9d283f219f81b0ef346b90cd425facd6e9c5f92e136d0_prof);

        
        $__internal_49873319873587daf43678399cf0a895ada902fd7275178ca71086087a22b1bd->leave($__internal_49873319873587daf43678399cf0a895ada902fd7275178ca71086087a22b1bd_prof);

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
