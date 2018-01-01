<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9df71321cc61a979c35049c2b91cef680cf77582e32bf5d1fc7cddb5407a0a95 extends Twig_Template
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
        $__internal_b43c03bc8b86f7287c9df948050f2eb4813c9ed27b1e512542a912abb1030baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43c03bc8b86f7287c9df948050f2eb4813c9ed27b1e512542a912abb1030baf->enter($__internal_b43c03bc8b86f7287c9df948050f2eb4813c9ed27b1e512542a912abb1030baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b326dccfe81c6acbc4c3f891081a91664d9f21c52dea9557a47ffaec625cf2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b326dccfe81c6acbc4c3f891081a91664d9f21c52dea9557a47ffaec625cf2d5->enter($__internal_b326dccfe81c6acbc4c3f891081a91664d9f21c52dea9557a47ffaec625cf2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b43c03bc8b86f7287c9df948050f2eb4813c9ed27b1e512542a912abb1030baf->leave($__internal_b43c03bc8b86f7287c9df948050f2eb4813c9ed27b1e512542a912abb1030baf_prof);

        
        $__internal_b326dccfe81c6acbc4c3f891081a91664d9f21c52dea9557a47ffaec625cf2d5->leave($__internal_b326dccfe81c6acbc4c3f891081a91664d9f21c52dea9557a47ffaec625cf2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
