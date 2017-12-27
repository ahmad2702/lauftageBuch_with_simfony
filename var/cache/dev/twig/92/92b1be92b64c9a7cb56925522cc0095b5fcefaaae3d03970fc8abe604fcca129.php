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
        $__internal_aa377b34e528e1555760f00c80aa5abada0e77ddc6c0e648aa7f29f1a4053891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa377b34e528e1555760f00c80aa5abada0e77ddc6c0e648aa7f29f1a4053891->enter($__internal_aa377b34e528e1555760f00c80aa5abada0e77ddc6c0e648aa7f29f1a4053891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_76a152a2a2440b2b4f3ba54714468c871443366f8dc6552e3c5ed92317db1c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a152a2a2440b2b4f3ba54714468c871443366f8dc6552e3c5ed92317db1c27->enter($__internal_76a152a2a2440b2b4f3ba54714468c871443366f8dc6552e3c5ed92317db1c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_aa377b34e528e1555760f00c80aa5abada0e77ddc6c0e648aa7f29f1a4053891->leave($__internal_aa377b34e528e1555760f00c80aa5abada0e77ddc6c0e648aa7f29f1a4053891_prof);

        
        $__internal_76a152a2a2440b2b4f3ba54714468c871443366f8dc6552e3c5ed92317db1c27->leave($__internal_76a152a2a2440b2b4f3ba54714468c871443366f8dc6552e3c5ed92317db1c27_prof);

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
