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
        $__internal_8db6c585f1a14e7e168bcaf255ecedca458982a632c28732a107744b9d7a2fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db6c585f1a14e7e168bcaf255ecedca458982a632c28732a107744b9d7a2fab->enter($__internal_8db6c585f1a14e7e168bcaf255ecedca458982a632c28732a107744b9d7a2fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2939f3307c9c5396375e09685bdfb291ba5acdec196d923b5034b95b2917bb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2939f3307c9c5396375e09685bdfb291ba5acdec196d923b5034b95b2917bb00->enter($__internal_2939f3307c9c5396375e09685bdfb291ba5acdec196d923b5034b95b2917bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8db6c585f1a14e7e168bcaf255ecedca458982a632c28732a107744b9d7a2fab->leave($__internal_8db6c585f1a14e7e168bcaf255ecedca458982a632c28732a107744b9d7a2fab_prof);

        
        $__internal_2939f3307c9c5396375e09685bdfb291ba5acdec196d923b5034b95b2917bb00->leave($__internal_2939f3307c9c5396375e09685bdfb291ba5acdec196d923b5034b95b2917bb00_prof);

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
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
