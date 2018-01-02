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
        $__internal_65077a91be0051fd98d8886b91cdecfd7d87dfbae6e0ce7f2c7959afe75db632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65077a91be0051fd98d8886b91cdecfd7d87dfbae6e0ce7f2c7959afe75db632->enter($__internal_65077a91be0051fd98d8886b91cdecfd7d87dfbae6e0ce7f2c7959afe75db632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3eee8791f10315b5960a34a21ae2e360d0e5379719b00195ea960d7667c21519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eee8791f10315b5960a34a21ae2e360d0e5379719b00195ea960d7667c21519->enter($__internal_3eee8791f10315b5960a34a21ae2e360d0e5379719b00195ea960d7667c21519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_65077a91be0051fd98d8886b91cdecfd7d87dfbae6e0ce7f2c7959afe75db632->leave($__internal_65077a91be0051fd98d8886b91cdecfd7d87dfbae6e0ce7f2c7959afe75db632_prof);

        
        $__internal_3eee8791f10315b5960a34a21ae2e360d0e5379719b00195ea960d7667c21519->leave($__internal_3eee8791f10315b5960a34a21ae2e360d0e5379719b00195ea960d7667c21519_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
