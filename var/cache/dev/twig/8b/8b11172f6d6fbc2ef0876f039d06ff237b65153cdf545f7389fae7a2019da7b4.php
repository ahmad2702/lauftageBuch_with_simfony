<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_51e702831d9cf97104fe0d08eb8e63fcc64e6a3d71d271ee86bc9f1c94fb1ec7 extends Twig_Template
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
        $__internal_b3b3cd456742fce77af443f2a2967400ff0468cec1bb5b60584cfae150e719de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b3cd456742fce77af443f2a2967400ff0468cec1bb5b60584cfae150e719de->enter($__internal_b3b3cd456742fce77af443f2a2967400ff0468cec1bb5b60584cfae150e719de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1aa1c363c19bcd802503a9e9de2652620ee606a51d126f3ed09f1b37300954cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa1c363c19bcd802503a9e9de2652620ee606a51d126f3ed09f1b37300954cd->enter($__internal_1aa1c363c19bcd802503a9e9de2652620ee606a51d126f3ed09f1b37300954cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b3b3cd456742fce77af443f2a2967400ff0468cec1bb5b60584cfae150e719de->leave($__internal_b3b3cd456742fce77af443f2a2967400ff0468cec1bb5b60584cfae150e719de_prof);

        
        $__internal_1aa1c363c19bcd802503a9e9de2652620ee606a51d126f3ed09f1b37300954cd->leave($__internal_1aa1c363c19bcd802503a9e9de2652620ee606a51d126f3ed09f1b37300954cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
