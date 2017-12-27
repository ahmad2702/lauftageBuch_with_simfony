<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_49da8526e0c6f092f9c66cc143f9aa52c07419cf09cbb497ac85c3dbae76ef5b extends Twig_Template
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
        $__internal_b56cb0c8b2752d287bbc3c4f154cd4f6598590917f33820ab900d9cd41b44f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56cb0c8b2752d287bbc3c4f154cd4f6598590917f33820ab900d9cd41b44f67->enter($__internal_b56cb0c8b2752d287bbc3c4f154cd4f6598590917f33820ab900d9cd41b44f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a9251235808df0fae598f3b13f8d6f39a95934f889b4d3234a7505790c532ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9251235808df0fae598f3b13f8d6f39a95934f889b4d3234a7505790c532ae8->enter($__internal_a9251235808df0fae598f3b13f8d6f39a95934f889b4d3234a7505790c532ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b56cb0c8b2752d287bbc3c4f154cd4f6598590917f33820ab900d9cd41b44f67->leave($__internal_b56cb0c8b2752d287bbc3c4f154cd4f6598590917f33820ab900d9cd41b44f67_prof);

        
        $__internal_a9251235808df0fae598f3b13f8d6f39a95934f889b4d3234a7505790c532ae8->leave($__internal_a9251235808df0fae598f3b13f8d6f39a95934f889b4d3234a7505790c532ae8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
