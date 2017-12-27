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
        $__internal_b929da51474f93b77af89a9b6b093ec8531e949b2fc664887fb19151da316847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b929da51474f93b77af89a9b6b093ec8531e949b2fc664887fb19151da316847->enter($__internal_b929da51474f93b77af89a9b6b093ec8531e949b2fc664887fb19151da316847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_be960d4f799d28b2b36be47f3a278b8e0bedced330b7564bcd3330e6756eaa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be960d4f799d28b2b36be47f3a278b8e0bedced330b7564bcd3330e6756eaa20->enter($__internal_be960d4f799d28b2b36be47f3a278b8e0bedced330b7564bcd3330e6756eaa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b929da51474f93b77af89a9b6b093ec8531e949b2fc664887fb19151da316847->leave($__internal_b929da51474f93b77af89a9b6b093ec8531e949b2fc664887fb19151da316847_prof);

        
        $__internal_be960d4f799d28b2b36be47f3a278b8e0bedced330b7564bcd3330e6756eaa20->leave($__internal_be960d4f799d28b2b36be47f3a278b8e0bedced330b7564bcd3330e6756eaa20_prof);

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
