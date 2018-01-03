<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f16a68fea9c7520a98ab379e19659130f59d9d09a9820faedd42d7dc649f115f extends Twig_Template
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
        $__internal_9ebcf332e17d27da2170afd37649ea520d711cf990d993010b4c1bf7c311f2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebcf332e17d27da2170afd37649ea520d711cf990d993010b4c1bf7c311f2d8->enter($__internal_9ebcf332e17d27da2170afd37649ea520d711cf990d993010b4c1bf7c311f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_38d4b357ab060ac8ec7a47c9444f841bd7597955d077318d8bd69888980cafb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d4b357ab060ac8ec7a47c9444f841bd7597955d077318d8bd69888980cafb6->enter($__internal_38d4b357ab060ac8ec7a47c9444f841bd7597955d077318d8bd69888980cafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9ebcf332e17d27da2170afd37649ea520d711cf990d993010b4c1bf7c311f2d8->leave($__internal_9ebcf332e17d27da2170afd37649ea520d711cf990d993010b4c1bf7c311f2d8_prof);

        
        $__internal_38d4b357ab060ac8ec7a47c9444f841bd7597955d077318d8bd69888980cafb6->leave($__internal_38d4b357ab060ac8ec7a47c9444f841bd7597955d077318d8bd69888980cafb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
