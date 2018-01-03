<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a5423b7109d214e3402a796ae7799bbeb8a900cae7832fb9c88c0c86aa7b76f8 extends Twig_Template
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
        $__internal_a28b2c2a176e109b93659864fa21b751032423c17e5c39e20e702a33356c0bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28b2c2a176e109b93659864fa21b751032423c17e5c39e20e702a33356c0bed->enter($__internal_a28b2c2a176e109b93659864fa21b751032423c17e5c39e20e702a33356c0bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2b8f15afe071fe8adc11ebf9c618afec5b3b9eba97ebb7332102e90e9ee937a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8f15afe071fe8adc11ebf9c618afec5b3b9eba97ebb7332102e90e9ee937a5->enter($__internal_2b8f15afe071fe8adc11ebf9c618afec5b3b9eba97ebb7332102e90e9ee937a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a28b2c2a176e109b93659864fa21b751032423c17e5c39e20e702a33356c0bed->leave($__internal_a28b2c2a176e109b93659864fa21b751032423c17e5c39e20e702a33356c0bed_prof);

        
        $__internal_2b8f15afe071fe8adc11ebf9c618afec5b3b9eba97ebb7332102e90e9ee937a5->leave($__internal_2b8f15afe071fe8adc11ebf9c618afec5b3b9eba97ebb7332102e90e9ee937a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
