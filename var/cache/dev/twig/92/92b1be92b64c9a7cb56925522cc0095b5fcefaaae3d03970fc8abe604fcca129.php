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
        $__internal_b49f8fe1679de265ebd1f7df1597235881353fdb5199f97ab4c024f2ce64835e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49f8fe1679de265ebd1f7df1597235881353fdb5199f97ab4c024f2ce64835e->enter($__internal_b49f8fe1679de265ebd1f7df1597235881353fdb5199f97ab4c024f2ce64835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_270caab06e4a98598955cb591c4d7212aadb4f8674f3748f6c8d7ab5ed7f66d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270caab06e4a98598955cb591c4d7212aadb4f8674f3748f6c8d7ab5ed7f66d6->enter($__internal_270caab06e4a98598955cb591c4d7212aadb4f8674f3748f6c8d7ab5ed7f66d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b49f8fe1679de265ebd1f7df1597235881353fdb5199f97ab4c024f2ce64835e->leave($__internal_b49f8fe1679de265ebd1f7df1597235881353fdb5199f97ab4c024f2ce64835e_prof);

        
        $__internal_270caab06e4a98598955cb591c4d7212aadb4f8674f3748f6c8d7ab5ed7f66d6->leave($__internal_270caab06e4a98598955cb591c4d7212aadb4f8674f3748f6c8d7ab5ed7f66d6_prof);

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
