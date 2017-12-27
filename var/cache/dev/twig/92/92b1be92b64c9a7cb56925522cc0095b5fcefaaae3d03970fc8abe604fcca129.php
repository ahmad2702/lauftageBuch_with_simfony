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
        $__internal_3faa7bf835b5aa169de46256c4021f8fed640092d3492399c57659514c18a3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faa7bf835b5aa169de46256c4021f8fed640092d3492399c57659514c18a3ec->enter($__internal_3faa7bf835b5aa169de46256c4021f8fed640092d3492399c57659514c18a3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b6b8ea160c196523b200c6159e43f22048f1e982e444a3fe6a7799d43108e395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b8ea160c196523b200c6159e43f22048f1e982e444a3fe6a7799d43108e395->enter($__internal_b6b8ea160c196523b200c6159e43f22048f1e982e444a3fe6a7799d43108e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3faa7bf835b5aa169de46256c4021f8fed640092d3492399c57659514c18a3ec->leave($__internal_3faa7bf835b5aa169de46256c4021f8fed640092d3492399c57659514c18a3ec_prof);

        
        $__internal_b6b8ea160c196523b200c6159e43f22048f1e982e444a3fe6a7799d43108e395->leave($__internal_b6b8ea160c196523b200c6159e43f22048f1e982e444a3fe6a7799d43108e395_prof);

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
