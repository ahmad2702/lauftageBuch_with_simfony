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
        $__internal_a1f3fa8b5a85aa62756863c2511093c97a13d4545b3ae6c53a4e3de612468732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f3fa8b5a85aa62756863c2511093c97a13d4545b3ae6c53a4e3de612468732->enter($__internal_a1f3fa8b5a85aa62756863c2511093c97a13d4545b3ae6c53a4e3de612468732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fb764dcf372d3c3f7e3a71e0aade684947353af282dcff2b8ab376bd24c7853d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb764dcf372d3c3f7e3a71e0aade684947353af282dcff2b8ab376bd24c7853d->enter($__internal_fb764dcf372d3c3f7e3a71e0aade684947353af282dcff2b8ab376bd24c7853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a1f3fa8b5a85aa62756863c2511093c97a13d4545b3ae6c53a4e3de612468732->leave($__internal_a1f3fa8b5a85aa62756863c2511093c97a13d4545b3ae6c53a4e3de612468732_prof);

        
        $__internal_fb764dcf372d3c3f7e3a71e0aade684947353af282dcff2b8ab376bd24c7853d->leave($__internal_fb764dcf372d3c3f7e3a71e0aade684947353af282dcff2b8ab376bd24c7853d_prof);

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
