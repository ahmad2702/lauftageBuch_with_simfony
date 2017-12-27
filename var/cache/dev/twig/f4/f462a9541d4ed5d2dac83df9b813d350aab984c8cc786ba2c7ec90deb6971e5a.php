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
        $__internal_8cec4d902ca4616981612dd2f0373f2c2500f2a6d2e77be0603e7e741cbf0cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cec4d902ca4616981612dd2f0373f2c2500f2a6d2e77be0603e7e741cbf0cd9->enter($__internal_8cec4d902ca4616981612dd2f0373f2c2500f2a6d2e77be0603e7e741cbf0cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5d69388fdda48403b38848c49a343ca3d785f1aead7ef6472e06bd68e6d6bf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d69388fdda48403b38848c49a343ca3d785f1aead7ef6472e06bd68e6d6bf60->enter($__internal_5d69388fdda48403b38848c49a343ca3d785f1aead7ef6472e06bd68e6d6bf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8cec4d902ca4616981612dd2f0373f2c2500f2a6d2e77be0603e7e741cbf0cd9->leave($__internal_8cec4d902ca4616981612dd2f0373f2c2500f2a6d2e77be0603e7e741cbf0cd9_prof);

        
        $__internal_5d69388fdda48403b38848c49a343ca3d785f1aead7ef6472e06bd68e6d6bf60->leave($__internal_5d69388fdda48403b38848c49a343ca3d785f1aead7ef6472e06bd68e6d6bf60_prof);

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
