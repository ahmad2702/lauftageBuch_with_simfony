<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_651f90583c42de981f6d2376cd4cd003d9bb67e599b1422f35641a8daf212a69 extends Twig_Template
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
        $__internal_daeaba51891e824d4f2d96d149f1b1579adb4c3f61324ed976f3def33f98cdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daeaba51891e824d4f2d96d149f1b1579adb4c3f61324ed976f3def33f98cdf0->enter($__internal_daeaba51891e824d4f2d96d149f1b1579adb4c3f61324ed976f3def33f98cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_61d4acbe5a0b7a002c2a44d839e6172bf9e3f7f14ca43408db871d13c62b57bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d4acbe5a0b7a002c2a44d839e6172bf9e3f7f14ca43408db871d13c62b57bd->enter($__internal_61d4acbe5a0b7a002c2a44d839e6172bf9e3f7f14ca43408db871d13c62b57bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_daeaba51891e824d4f2d96d149f1b1579adb4c3f61324ed976f3def33f98cdf0->leave($__internal_daeaba51891e824d4f2d96d149f1b1579adb4c3f61324ed976f3def33f98cdf0_prof);

        
        $__internal_61d4acbe5a0b7a002c2a44d839e6172bf9e3f7f14ca43408db871d13c62b57bd->leave($__internal_61d4acbe5a0b7a002c2a44d839e6172bf9e3f7f14ca43408db871d13c62b57bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
