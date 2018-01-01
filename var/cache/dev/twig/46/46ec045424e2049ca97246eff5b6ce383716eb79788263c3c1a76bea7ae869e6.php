<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0ca78c9c1968de9b155212a82bfe84731405ec866305e88d1c2ab2264c922558 extends Twig_Template
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
        $__internal_b8f7ec9fdb73510f21c094ee832521576308cfd22e5b892e19c99b40e3c77ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f7ec9fdb73510f21c094ee832521576308cfd22e5b892e19c99b40e3c77ab3->enter($__internal_b8f7ec9fdb73510f21c094ee832521576308cfd22e5b892e19c99b40e3c77ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9d091e714aeef5faefa3b35ba738d9b80baf6ea500f953bd558f405def422a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d091e714aeef5faefa3b35ba738d9b80baf6ea500f953bd558f405def422a27->enter($__internal_9d091e714aeef5faefa3b35ba738d9b80baf6ea500f953bd558f405def422a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b8f7ec9fdb73510f21c094ee832521576308cfd22e5b892e19c99b40e3c77ab3->leave($__internal_b8f7ec9fdb73510f21c094ee832521576308cfd22e5b892e19c99b40e3c77ab3_prof);

        
        $__internal_9d091e714aeef5faefa3b35ba738d9b80baf6ea500f953bd558f405def422a27->leave($__internal_9d091e714aeef5faefa3b35ba738d9b80baf6ea500f953bd558f405def422a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
