<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_115c30cfffb380ba9958a1b6b59c240d16a7050c1d3aea6f77904fda05d2d805 extends Twig_Template
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
        $__internal_0d2e71af40d9175985924511b677d0cf7cdfd750a7f847e4fa87dca8fb891d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2e71af40d9175985924511b677d0cf7cdfd750a7f847e4fa87dca8fb891d91->enter($__internal_0d2e71af40d9175985924511b677d0cf7cdfd750a7f847e4fa87dca8fb891d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_88cec500f3c4fc9ed309826ed264599e63a82c040387bf0153f3422c82799ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cec500f3c4fc9ed309826ed264599e63a82c040387bf0153f3422c82799ef8->enter($__internal_88cec500f3c4fc9ed309826ed264599e63a82c040387bf0153f3422c82799ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0d2e71af40d9175985924511b677d0cf7cdfd750a7f847e4fa87dca8fb891d91->leave($__internal_0d2e71af40d9175985924511b677d0cf7cdfd750a7f847e4fa87dca8fb891d91_prof);

        
        $__internal_88cec500f3c4fc9ed309826ed264599e63a82c040387bf0153f3422c82799ef8->leave($__internal_88cec500f3c4fc9ed309826ed264599e63a82c040387bf0153f3422c82799ef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
