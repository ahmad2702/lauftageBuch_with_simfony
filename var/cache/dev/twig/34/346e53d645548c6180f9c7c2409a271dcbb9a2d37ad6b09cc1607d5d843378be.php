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
        $__internal_43b501adc74d427c9bf90042fb30b9fe734fb041196fbb7d309e3c5ee8a779fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b501adc74d427c9bf90042fb30b9fe734fb041196fbb7d309e3c5ee8a779fd->enter($__internal_43b501adc74d427c9bf90042fb30b9fe734fb041196fbb7d309e3c5ee8a779fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4b23ace7451f9aa83b6e28a051670b7332ed40500347f4e3f4c4fc4c3a3ba655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b23ace7451f9aa83b6e28a051670b7332ed40500347f4e3f4c4fc4c3a3ba655->enter($__internal_4b23ace7451f9aa83b6e28a051670b7332ed40500347f4e3f4c4fc4c3a3ba655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_43b501adc74d427c9bf90042fb30b9fe734fb041196fbb7d309e3c5ee8a779fd->leave($__internal_43b501adc74d427c9bf90042fb30b9fe734fb041196fbb7d309e3c5ee8a779fd_prof);

        
        $__internal_4b23ace7451f9aa83b6e28a051670b7332ed40500347f4e3f4c4fc4c3a3ba655->leave($__internal_4b23ace7451f9aa83b6e28a051670b7332ed40500347f4e3f4c4fc4c3a3ba655_prof);

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
