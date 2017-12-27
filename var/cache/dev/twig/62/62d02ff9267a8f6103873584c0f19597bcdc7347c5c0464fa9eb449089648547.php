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
        $__internal_2308a8f0e26e80cb80638fb0fe366288241a821919eaa2999038f1ea9d928af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2308a8f0e26e80cb80638fb0fe366288241a821919eaa2999038f1ea9d928af3->enter($__internal_2308a8f0e26e80cb80638fb0fe366288241a821919eaa2999038f1ea9d928af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7181472b9ed87d061ec51a059ccf144d3c31b1a6d0ce0703a83702df993c6f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7181472b9ed87d061ec51a059ccf144d3c31b1a6d0ce0703a83702df993c6f10->enter($__internal_7181472b9ed87d061ec51a059ccf144d3c31b1a6d0ce0703a83702df993c6f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2308a8f0e26e80cb80638fb0fe366288241a821919eaa2999038f1ea9d928af3->leave($__internal_2308a8f0e26e80cb80638fb0fe366288241a821919eaa2999038f1ea9d928af3_prof);

        
        $__internal_7181472b9ed87d061ec51a059ccf144d3c31b1a6d0ce0703a83702df993c6f10->leave($__internal_7181472b9ed87d061ec51a059ccf144d3c31b1a6d0ce0703a83702df993c6f10_prof);

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
