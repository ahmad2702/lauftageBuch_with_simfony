<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_51e702831d9cf97104fe0d08eb8e63fcc64e6a3d71d271ee86bc9f1c94fb1ec7 extends Twig_Template
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
        $__internal_0cf428a4b37136e29be1c8ec18e2cc49fc0dac0fd1dde5d67a43e6fa9e3294af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf428a4b37136e29be1c8ec18e2cc49fc0dac0fd1dde5d67a43e6fa9e3294af->enter($__internal_0cf428a4b37136e29be1c8ec18e2cc49fc0dac0fd1dde5d67a43e6fa9e3294af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cd31c81e86576ac1d24a1d20fccd324a2a17877f0e2928b020ae7babc1da8af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd31c81e86576ac1d24a1d20fccd324a2a17877f0e2928b020ae7babc1da8af1->enter($__internal_cd31c81e86576ac1d24a1d20fccd324a2a17877f0e2928b020ae7babc1da8af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0cf428a4b37136e29be1c8ec18e2cc49fc0dac0fd1dde5d67a43e6fa9e3294af->leave($__internal_0cf428a4b37136e29be1c8ec18e2cc49fc0dac0fd1dde5d67a43e6fa9e3294af_prof);

        
        $__internal_cd31c81e86576ac1d24a1d20fccd324a2a17877f0e2928b020ae7babc1da8af1->leave($__internal_cd31c81e86576ac1d24a1d20fccd324a2a17877f0e2928b020ae7babc1da8af1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
