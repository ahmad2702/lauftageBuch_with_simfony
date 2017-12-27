<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_aa39f2283e6c4c6fcf20bb7f7cb170250d88806e4b2057286fe82cf29f74e861 extends Twig_Template
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
        $__internal_2b18967d117277ec07196abf43921fc56c88c45f5a1ed435cd04f60f653d8e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b18967d117277ec07196abf43921fc56c88c45f5a1ed435cd04f60f653d8e26->enter($__internal_2b18967d117277ec07196abf43921fc56c88c45f5a1ed435cd04f60f653d8e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9d0260c471e6c77088cc70482430affa4fdfc8dd0f04a396b29b3ec646346cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0260c471e6c77088cc70482430affa4fdfc8dd0f04a396b29b3ec646346cef->enter($__internal_9d0260c471e6c77088cc70482430affa4fdfc8dd0f04a396b29b3ec646346cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2b18967d117277ec07196abf43921fc56c88c45f5a1ed435cd04f60f653d8e26->leave($__internal_2b18967d117277ec07196abf43921fc56c88c45f5a1ed435cd04f60f653d8e26_prof);

        
        $__internal_9d0260c471e6c77088cc70482430affa4fdfc8dd0f04a396b29b3ec646346cef->leave($__internal_9d0260c471e6c77088cc70482430affa4fdfc8dd0f04a396b29b3ec646346cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
