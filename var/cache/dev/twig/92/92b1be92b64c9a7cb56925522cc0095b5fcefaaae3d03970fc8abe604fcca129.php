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
        $__internal_9e2bd38ab41c1c05f8979b3d096c0940c1f1cf75abd80e67782c2aa5a6d991bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2bd38ab41c1c05f8979b3d096c0940c1f1cf75abd80e67782c2aa5a6d991bb->enter($__internal_9e2bd38ab41c1c05f8979b3d096c0940c1f1cf75abd80e67782c2aa5a6d991bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4854b6e478c51de24e0bab7bbc66e1d2f5a948525bcdefb44a56da0f0c57d590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4854b6e478c51de24e0bab7bbc66e1d2f5a948525bcdefb44a56da0f0c57d590->enter($__internal_4854b6e478c51de24e0bab7bbc66e1d2f5a948525bcdefb44a56da0f0c57d590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9e2bd38ab41c1c05f8979b3d096c0940c1f1cf75abd80e67782c2aa5a6d991bb->leave($__internal_9e2bd38ab41c1c05f8979b3d096c0940c1f1cf75abd80e67782c2aa5a6d991bb_prof);

        
        $__internal_4854b6e478c51de24e0bab7bbc66e1d2f5a948525bcdefb44a56da0f0c57d590->leave($__internal_4854b6e478c51de24e0bab7bbc66e1d2f5a948525bcdefb44a56da0f0c57d590_prof);

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
