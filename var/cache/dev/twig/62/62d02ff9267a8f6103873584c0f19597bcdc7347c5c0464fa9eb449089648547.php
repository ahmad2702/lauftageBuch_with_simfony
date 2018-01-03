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
        $__internal_16bb6413e2501f5ecec2451f960946881ff0136faa684f9ea16cbbe096b585c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bb6413e2501f5ecec2451f960946881ff0136faa684f9ea16cbbe096b585c4->enter($__internal_16bb6413e2501f5ecec2451f960946881ff0136faa684f9ea16cbbe096b585c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9fbb211daa11ab2f95180ce4688c39aaa4ac1578c6db9222e4bd23e4ac85896c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbb211daa11ab2f95180ce4688c39aaa4ac1578c6db9222e4bd23e4ac85896c->enter($__internal_9fbb211daa11ab2f95180ce4688c39aaa4ac1578c6db9222e4bd23e4ac85896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_16bb6413e2501f5ecec2451f960946881ff0136faa684f9ea16cbbe096b585c4->leave($__internal_16bb6413e2501f5ecec2451f960946881ff0136faa684f9ea16cbbe096b585c4_prof);

        
        $__internal_9fbb211daa11ab2f95180ce4688c39aaa4ac1578c6db9222e4bd23e4ac85896c->leave($__internal_9fbb211daa11ab2f95180ce4688c39aaa4ac1578c6db9222e4bd23e4ac85896c_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
