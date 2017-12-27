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
        $__internal_c14d49867f98a3e514374e8600f244ba8fc23e8eebbb545d81a89eda16c004a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14d49867f98a3e514374e8600f244ba8fc23e8eebbb545d81a89eda16c004a8->enter($__internal_c14d49867f98a3e514374e8600f244ba8fc23e8eebbb545d81a89eda16c004a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d7ca7eecd2428d8f4b773c4edb74b2d9679ba1041c7996f67c90c0c20b76f869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ca7eecd2428d8f4b773c4edb74b2d9679ba1041c7996f67c90c0c20b76f869->enter($__internal_d7ca7eecd2428d8f4b773c4edb74b2d9679ba1041c7996f67c90c0c20b76f869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c14d49867f98a3e514374e8600f244ba8fc23e8eebbb545d81a89eda16c004a8->leave($__internal_c14d49867f98a3e514374e8600f244ba8fc23e8eebbb545d81a89eda16c004a8_prof);

        
        $__internal_d7ca7eecd2428d8f4b773c4edb74b2d9679ba1041c7996f67c90c0c20b76f869->leave($__internal_d7ca7eecd2428d8f4b773c4edb74b2d9679ba1041c7996f67c90c0c20b76f869_prof);

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
