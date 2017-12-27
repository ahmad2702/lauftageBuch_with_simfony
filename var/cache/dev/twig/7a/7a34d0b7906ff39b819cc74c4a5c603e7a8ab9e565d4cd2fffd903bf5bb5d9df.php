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
        $__internal_a57623e8ec1e1b490f3951412ca11a1aa25b937d784781ca9ce3d4a972e3702d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57623e8ec1e1b490f3951412ca11a1aa25b937d784781ca9ce3d4a972e3702d->enter($__internal_a57623e8ec1e1b490f3951412ca11a1aa25b937d784781ca9ce3d4a972e3702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d265f91b5f90f59fc5fc5fd65fd6e396ecbf67a64fcf056a4730d2b24a56966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d265f91b5f90f59fc5fc5fd65fd6e396ecbf67a64fcf056a4730d2b24a56966d->enter($__internal_d265f91b5f90f59fc5fc5fd65fd6e396ecbf67a64fcf056a4730d2b24a56966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a57623e8ec1e1b490f3951412ca11a1aa25b937d784781ca9ce3d4a972e3702d->leave($__internal_a57623e8ec1e1b490f3951412ca11a1aa25b937d784781ca9ce3d4a972e3702d_prof);

        
        $__internal_d265f91b5f90f59fc5fc5fd65fd6e396ecbf67a64fcf056a4730d2b24a56966d->leave($__internal_d265f91b5f90f59fc5fc5fd65fd6e396ecbf67a64fcf056a4730d2b24a56966d_prof);

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
