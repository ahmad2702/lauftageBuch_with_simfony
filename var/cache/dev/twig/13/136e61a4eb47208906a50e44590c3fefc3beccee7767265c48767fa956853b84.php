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
        $__internal_0b9463226f3737085e3f0ce44971b6cc22ed9ad980a99eb6e0b12535f5852c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9463226f3737085e3f0ce44971b6cc22ed9ad980a99eb6e0b12535f5852c89->enter($__internal_0b9463226f3737085e3f0ce44971b6cc22ed9ad980a99eb6e0b12535f5852c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_765ffc71067f715c3de865655bfc1f776b1f0146e64e9d064a257386db1779e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765ffc71067f715c3de865655bfc1f776b1f0146e64e9d064a257386db1779e4->enter($__internal_765ffc71067f715c3de865655bfc1f776b1f0146e64e9d064a257386db1779e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0b9463226f3737085e3f0ce44971b6cc22ed9ad980a99eb6e0b12535f5852c89->leave($__internal_0b9463226f3737085e3f0ce44971b6cc22ed9ad980a99eb6e0b12535f5852c89_prof);

        
        $__internal_765ffc71067f715c3de865655bfc1f776b1f0146e64e9d064a257386db1779e4->leave($__internal_765ffc71067f715c3de865655bfc1f776b1f0146e64e9d064a257386db1779e4_prof);

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
