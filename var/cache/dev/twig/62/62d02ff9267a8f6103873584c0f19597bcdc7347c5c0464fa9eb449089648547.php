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
        $__internal_d213e422f5458ede237b8f4fed5f987ec4f6f41a4a9b683f95ae7c37e98cbda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d213e422f5458ede237b8f4fed5f987ec4f6f41a4a9b683f95ae7c37e98cbda8->enter($__internal_d213e422f5458ede237b8f4fed5f987ec4f6f41a4a9b683f95ae7c37e98cbda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4e0a9cc077f477020fa7a4a0e9cc46948671e7efee0dad92691874598a8163f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0a9cc077f477020fa7a4a0e9cc46948671e7efee0dad92691874598a8163f0->enter($__internal_4e0a9cc077f477020fa7a4a0e9cc46948671e7efee0dad92691874598a8163f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d213e422f5458ede237b8f4fed5f987ec4f6f41a4a9b683f95ae7c37e98cbda8->leave($__internal_d213e422f5458ede237b8f4fed5f987ec4f6f41a4a9b683f95ae7c37e98cbda8_prof);

        
        $__internal_4e0a9cc077f477020fa7a4a0e9cc46948671e7efee0dad92691874598a8163f0->leave($__internal_4e0a9cc077f477020fa7a4a0e9cc46948671e7efee0dad92691874598a8163f0_prof);

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
