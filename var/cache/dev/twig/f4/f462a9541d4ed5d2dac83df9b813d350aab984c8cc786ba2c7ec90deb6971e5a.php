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
        $__internal_bccd04f19250a226b98ca63e7f84ee72f203e8c619bce6944d61638dd5ac3e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd04f19250a226b98ca63e7f84ee72f203e8c619bce6944d61638dd5ac3e1a->enter($__internal_bccd04f19250a226b98ca63e7f84ee72f203e8c619bce6944d61638dd5ac3e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f074c53f84edc2a92eb9e743e348bbcbd57091324cd079a5d0c62ced3efe4126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f074c53f84edc2a92eb9e743e348bbcbd57091324cd079a5d0c62ced3efe4126->enter($__internal_f074c53f84edc2a92eb9e743e348bbcbd57091324cd079a5d0c62ced3efe4126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bccd04f19250a226b98ca63e7f84ee72f203e8c619bce6944d61638dd5ac3e1a->leave($__internal_bccd04f19250a226b98ca63e7f84ee72f203e8c619bce6944d61638dd5ac3e1a_prof);

        
        $__internal_f074c53f84edc2a92eb9e743e348bbcbd57091324cd079a5d0c62ced3efe4126->leave($__internal_f074c53f84edc2a92eb9e743e348bbcbd57091324cd079a5d0c62ced3efe4126_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
