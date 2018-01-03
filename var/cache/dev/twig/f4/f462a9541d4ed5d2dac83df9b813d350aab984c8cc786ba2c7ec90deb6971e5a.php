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
        $__internal_e4470b1313256361f83c322842ab9bbb6c332b9492006dbe6c7f757bbea1a783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4470b1313256361f83c322842ab9bbb6c332b9492006dbe6c7f757bbea1a783->enter($__internal_e4470b1313256361f83c322842ab9bbb6c332b9492006dbe6c7f757bbea1a783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6b428ec53fd07efe4aa08b4097cafcdc46ce3b41a4be4e56621e597cfae73cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b428ec53fd07efe4aa08b4097cafcdc46ce3b41a4be4e56621e597cfae73cf0->enter($__internal_6b428ec53fd07efe4aa08b4097cafcdc46ce3b41a4be4e56621e597cfae73cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e4470b1313256361f83c322842ab9bbb6c332b9492006dbe6c7f757bbea1a783->leave($__internal_e4470b1313256361f83c322842ab9bbb6c332b9492006dbe6c7f757bbea1a783_prof);

        
        $__internal_6b428ec53fd07efe4aa08b4097cafcdc46ce3b41a4be4e56621e597cfae73cf0->leave($__internal_6b428ec53fd07efe4aa08b4097cafcdc46ce3b41a4be4e56621e597cfae73cf0_prof);

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
