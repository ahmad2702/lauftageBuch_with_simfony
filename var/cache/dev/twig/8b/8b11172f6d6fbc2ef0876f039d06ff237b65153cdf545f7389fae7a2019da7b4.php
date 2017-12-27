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
        $__internal_d0eaf8ff539bbf53026446106fa4fc78fe7c6e97d3ae2865dd5be6be002876a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0eaf8ff539bbf53026446106fa4fc78fe7c6e97d3ae2865dd5be6be002876a8->enter($__internal_d0eaf8ff539bbf53026446106fa4fc78fe7c6e97d3ae2865dd5be6be002876a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_15e6f07730d55506d3cc758caf78bca93240384b5e57c59ae594e3b8a48c7e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e6f07730d55506d3cc758caf78bca93240384b5e57c59ae594e3b8a48c7e1b->enter($__internal_15e6f07730d55506d3cc758caf78bca93240384b5e57c59ae594e3b8a48c7e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d0eaf8ff539bbf53026446106fa4fc78fe7c6e97d3ae2865dd5be6be002876a8->leave($__internal_d0eaf8ff539bbf53026446106fa4fc78fe7c6e97d3ae2865dd5be6be002876a8_prof);

        
        $__internal_15e6f07730d55506d3cc758caf78bca93240384b5e57c59ae594e3b8a48c7e1b->leave($__internal_15e6f07730d55506d3cc758caf78bca93240384b5e57c59ae594e3b8a48c7e1b_prof);

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
