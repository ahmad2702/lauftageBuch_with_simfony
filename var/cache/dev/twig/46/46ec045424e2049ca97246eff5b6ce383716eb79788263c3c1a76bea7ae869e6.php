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
        $__internal_e4bb4515b3ddc1835daea06384aab4099b193fc20559976e32c478efd0bb5caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bb4515b3ddc1835daea06384aab4099b193fc20559976e32c478efd0bb5caf->enter($__internal_e4bb4515b3ddc1835daea06384aab4099b193fc20559976e32c478efd0bb5caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_275e9682aabd026374b3b8d5b5cc289e25b04de4db10633d415d7db91bd04496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275e9682aabd026374b3b8d5b5cc289e25b04de4db10633d415d7db91bd04496->enter($__internal_275e9682aabd026374b3b8d5b5cc289e25b04de4db10633d415d7db91bd04496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e4bb4515b3ddc1835daea06384aab4099b193fc20559976e32c478efd0bb5caf->leave($__internal_e4bb4515b3ddc1835daea06384aab4099b193fc20559976e32c478efd0bb5caf_prof);

        
        $__internal_275e9682aabd026374b3b8d5b5cc289e25b04de4db10633d415d7db91bd04496->leave($__internal_275e9682aabd026374b3b8d5b5cc289e25b04de4db10633d415d7db91bd04496_prof);

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
