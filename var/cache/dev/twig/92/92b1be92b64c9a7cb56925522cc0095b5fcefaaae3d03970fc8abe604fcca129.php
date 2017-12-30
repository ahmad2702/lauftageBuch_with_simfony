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
        $__internal_f9ebbd922ccd0dc72653e05c2a0460eec71afce9bb6695ffe60589bcb46bc106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ebbd922ccd0dc72653e05c2a0460eec71afce9bb6695ffe60589bcb46bc106->enter($__internal_f9ebbd922ccd0dc72653e05c2a0460eec71afce9bb6695ffe60589bcb46bc106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9babc8ba32ca3600605f5b074b8d7f8b1dfffc44e4b80213eab5fd0337e04855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9babc8ba32ca3600605f5b074b8d7f8b1dfffc44e4b80213eab5fd0337e04855->enter($__internal_9babc8ba32ca3600605f5b074b8d7f8b1dfffc44e4b80213eab5fd0337e04855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f9ebbd922ccd0dc72653e05c2a0460eec71afce9bb6695ffe60589bcb46bc106->leave($__internal_f9ebbd922ccd0dc72653e05c2a0460eec71afce9bb6695ffe60589bcb46bc106_prof);

        
        $__internal_9babc8ba32ca3600605f5b074b8d7f8b1dfffc44e4b80213eab5fd0337e04855->leave($__internal_9babc8ba32ca3600605f5b074b8d7f8b1dfffc44e4b80213eab5fd0337e04855_prof);

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
