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
        $__internal_1ad6725619b9106d54c5515166e40540736d1236aae19f4add44dec3dcaedfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad6725619b9106d54c5515166e40540736d1236aae19f4add44dec3dcaedfef->enter($__internal_1ad6725619b9106d54c5515166e40540736d1236aae19f4add44dec3dcaedfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bef0591219533e69ff0894964569b1c61987cbbd854a2d9cf183a0d6c07ceb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef0591219533e69ff0894964569b1c61987cbbd854a2d9cf183a0d6c07ceb01->enter($__internal_bef0591219533e69ff0894964569b1c61987cbbd854a2d9cf183a0d6c07ceb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1ad6725619b9106d54c5515166e40540736d1236aae19f4add44dec3dcaedfef->leave($__internal_1ad6725619b9106d54c5515166e40540736d1236aae19f4add44dec3dcaedfef_prof);

        
        $__internal_bef0591219533e69ff0894964569b1c61987cbbd854a2d9cf183a0d6c07ceb01->leave($__internal_bef0591219533e69ff0894964569b1c61987cbbd854a2d9cf183a0d6c07ceb01_prof);

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
