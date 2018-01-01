<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1d2b64cc590765c1f98ac9a8e4ebb5c734b980c7afaabf4646f5ed379b8e9de extends Twig_Template
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
        $__internal_5755c847e6c2c3a0356cee58773cd771361a926a52c8ab6d6cb70a152668e4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5755c847e6c2c3a0356cee58773cd771361a926a52c8ab6d6cb70a152668e4ac->enter($__internal_5755c847e6c2c3a0356cee58773cd771361a926a52c8ab6d6cb70a152668e4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_605784fdee13a3d15e3dee20c34734cdec202d207b30630168d112ed0d1cf3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605784fdee13a3d15e3dee20c34734cdec202d207b30630168d112ed0d1cf3df->enter($__internal_605784fdee13a3d15e3dee20c34734cdec202d207b30630168d112ed0d1cf3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5755c847e6c2c3a0356cee58773cd771361a926a52c8ab6d6cb70a152668e4ac->leave($__internal_5755c847e6c2c3a0356cee58773cd771361a926a52c8ab6d6cb70a152668e4ac_prof);

        
        $__internal_605784fdee13a3d15e3dee20c34734cdec202d207b30630168d112ed0d1cf3df->leave($__internal_605784fdee13a3d15e3dee20c34734cdec202d207b30630168d112ed0d1cf3df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
