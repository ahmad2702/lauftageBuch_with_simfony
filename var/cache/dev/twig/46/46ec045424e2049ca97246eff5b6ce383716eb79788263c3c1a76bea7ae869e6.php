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
        $__internal_d5c20ce6a4b36f3e8bd71faa2d9d486c01c48d4fb6af696b13ecf6702b36e51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c20ce6a4b36f3e8bd71faa2d9d486c01c48d4fb6af696b13ecf6702b36e51a->enter($__internal_d5c20ce6a4b36f3e8bd71faa2d9d486c01c48d4fb6af696b13ecf6702b36e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ffd05ed85470b129d304f1c7888e4e3f28f365b370d64d8a02b57bd33a3e5793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd05ed85470b129d304f1c7888e4e3f28f365b370d64d8a02b57bd33a3e5793->enter($__internal_ffd05ed85470b129d304f1c7888e4e3f28f365b370d64d8a02b57bd33a3e5793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d5c20ce6a4b36f3e8bd71faa2d9d486c01c48d4fb6af696b13ecf6702b36e51a->leave($__internal_d5c20ce6a4b36f3e8bd71faa2d9d486c01c48d4fb6af696b13ecf6702b36e51a_prof);

        
        $__internal_ffd05ed85470b129d304f1c7888e4e3f28f365b370d64d8a02b57bd33a3e5793->leave($__internal_ffd05ed85470b129d304f1c7888e4e3f28f365b370d64d8a02b57bd33a3e5793_prof);

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
