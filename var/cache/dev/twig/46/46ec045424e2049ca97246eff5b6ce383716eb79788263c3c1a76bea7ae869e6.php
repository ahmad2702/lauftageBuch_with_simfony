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
        $__internal_ef803222a26af4b9a75bdb9ad83012dfe4e91fdaa46cd981bb4c27669260a97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef803222a26af4b9a75bdb9ad83012dfe4e91fdaa46cd981bb4c27669260a97d->enter($__internal_ef803222a26af4b9a75bdb9ad83012dfe4e91fdaa46cd981bb4c27669260a97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_92f0271ee48d4adeadef0e5c7c51ce6bc36f6b28f342595abfff79a1f68cae8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f0271ee48d4adeadef0e5c7c51ce6bc36f6b28f342595abfff79a1f68cae8e->enter($__internal_92f0271ee48d4adeadef0e5c7c51ce6bc36f6b28f342595abfff79a1f68cae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ef803222a26af4b9a75bdb9ad83012dfe4e91fdaa46cd981bb4c27669260a97d->leave($__internal_ef803222a26af4b9a75bdb9ad83012dfe4e91fdaa46cd981bb4c27669260a97d_prof);

        
        $__internal_92f0271ee48d4adeadef0e5c7c51ce6bc36f6b28f342595abfff79a1f68cae8e->leave($__internal_92f0271ee48d4adeadef0e5c7c51ce6bc36f6b28f342595abfff79a1f68cae8e_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
