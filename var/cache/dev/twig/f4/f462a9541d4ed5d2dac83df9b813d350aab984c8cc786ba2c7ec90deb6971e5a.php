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
        $__internal_914a9fba1c8b6502546c88e04fa101e6e23ba41298572bd3654137ea57816d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914a9fba1c8b6502546c88e04fa101e6e23ba41298572bd3654137ea57816d64->enter($__internal_914a9fba1c8b6502546c88e04fa101e6e23ba41298572bd3654137ea57816d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ae75cb89288f1d2c0a452cc954e105acf88b597f0f0a3e44369f769facaa9fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae75cb89288f1d2c0a452cc954e105acf88b597f0f0a3e44369f769facaa9fc4->enter($__internal_ae75cb89288f1d2c0a452cc954e105acf88b597f0f0a3e44369f769facaa9fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_914a9fba1c8b6502546c88e04fa101e6e23ba41298572bd3654137ea57816d64->leave($__internal_914a9fba1c8b6502546c88e04fa101e6e23ba41298572bd3654137ea57816d64_prof);

        
        $__internal_ae75cb89288f1d2c0a452cc954e105acf88b597f0f0a3e44369f769facaa9fc4->leave($__internal_ae75cb89288f1d2c0a452cc954e105acf88b597f0f0a3e44369f769facaa9fc4_prof);

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
