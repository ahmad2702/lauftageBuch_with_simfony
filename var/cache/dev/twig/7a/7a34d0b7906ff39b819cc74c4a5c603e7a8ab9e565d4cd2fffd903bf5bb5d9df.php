<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_268790b5f078f20b95352f1529cbdf31c8e8d2fc3edba55a5551e29d0a8a3946 extends Twig_Template
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
        $__internal_27e43cc9236c050bdf03389d19aa0ca9a86f7c1a5bbf98e17d619fbf6e5e6440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e43cc9236c050bdf03389d19aa0ca9a86f7c1a5bbf98e17d619fbf6e5e6440->enter($__internal_27e43cc9236c050bdf03389d19aa0ca9a86f7c1a5bbf98e17d619fbf6e5e6440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_547b06f17373fd31675986f60d499646b3b60fbdce52630f8e79516c43b9446a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547b06f17373fd31675986f60d499646b3b60fbdce52630f8e79516c43b9446a->enter($__internal_547b06f17373fd31675986f60d499646b3b60fbdce52630f8e79516c43b9446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_27e43cc9236c050bdf03389d19aa0ca9a86f7c1a5bbf98e17d619fbf6e5e6440->leave($__internal_27e43cc9236c050bdf03389d19aa0ca9a86f7c1a5bbf98e17d619fbf6e5e6440_prof);

        
        $__internal_547b06f17373fd31675986f60d499646b3b60fbdce52630f8e79516c43b9446a->leave($__internal_547b06f17373fd31675986f60d499646b3b60fbdce52630f8e79516c43b9446a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
