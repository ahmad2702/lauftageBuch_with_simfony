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
        $__internal_09b1b9e82fc3a8a69fc5cc001784a088a0092353c03417f73901cf6d1c26f915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b1b9e82fc3a8a69fc5cc001784a088a0092353c03417f73901cf6d1c26f915->enter($__internal_09b1b9e82fc3a8a69fc5cc001784a088a0092353c03417f73901cf6d1c26f915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3125564bcdc7331f845241fdad24ac82501936425a4bc6514b1b8ba0933aa426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3125564bcdc7331f845241fdad24ac82501936425a4bc6514b1b8ba0933aa426->enter($__internal_3125564bcdc7331f845241fdad24ac82501936425a4bc6514b1b8ba0933aa426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_09b1b9e82fc3a8a69fc5cc001784a088a0092353c03417f73901cf6d1c26f915->leave($__internal_09b1b9e82fc3a8a69fc5cc001784a088a0092353c03417f73901cf6d1c26f915_prof);

        
        $__internal_3125564bcdc7331f845241fdad24ac82501936425a4bc6514b1b8ba0933aa426->leave($__internal_3125564bcdc7331f845241fdad24ac82501936425a4bc6514b1b8ba0933aa426_prof);

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
