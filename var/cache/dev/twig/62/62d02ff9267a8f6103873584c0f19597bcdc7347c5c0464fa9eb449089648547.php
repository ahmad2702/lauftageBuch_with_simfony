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
        $__internal_a54941dd1eb3f6763ff7d69925d78a82fe78f2782abe0c8f7f0e89d365a51646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54941dd1eb3f6763ff7d69925d78a82fe78f2782abe0c8f7f0e89d365a51646->enter($__internal_a54941dd1eb3f6763ff7d69925d78a82fe78f2782abe0c8f7f0e89d365a51646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_86945287ff3826bc1b543845ff84f37ba29e37d040a0d89f7815f3e740741b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86945287ff3826bc1b543845ff84f37ba29e37d040a0d89f7815f3e740741b94->enter($__internal_86945287ff3826bc1b543845ff84f37ba29e37d040a0d89f7815f3e740741b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a54941dd1eb3f6763ff7d69925d78a82fe78f2782abe0c8f7f0e89d365a51646->leave($__internal_a54941dd1eb3f6763ff7d69925d78a82fe78f2782abe0c8f7f0e89d365a51646_prof);

        
        $__internal_86945287ff3826bc1b543845ff84f37ba29e37d040a0d89f7815f3e740741b94->leave($__internal_86945287ff3826bc1b543845ff84f37ba29e37d040a0d89f7815f3e740741b94_prof);

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
