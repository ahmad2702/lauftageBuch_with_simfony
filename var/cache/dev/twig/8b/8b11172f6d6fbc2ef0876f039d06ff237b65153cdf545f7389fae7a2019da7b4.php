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
        $__internal_43ebc0c7384f7bd8ed4c1edf976b26661292bb4fd6a6d73f9d3dc388c99f93c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ebc0c7384f7bd8ed4c1edf976b26661292bb4fd6a6d73f9d3dc388c99f93c9->enter($__internal_43ebc0c7384f7bd8ed4c1edf976b26661292bb4fd6a6d73f9d3dc388c99f93c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7de3d972dc5ea193415a8fc795b17a285e7d66f034b9122f40d02db6aa68fa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de3d972dc5ea193415a8fc795b17a285e7d66f034b9122f40d02db6aa68fa1a->enter($__internal_7de3d972dc5ea193415a8fc795b17a285e7d66f034b9122f40d02db6aa68fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_43ebc0c7384f7bd8ed4c1edf976b26661292bb4fd6a6d73f9d3dc388c99f93c9->leave($__internal_43ebc0c7384f7bd8ed4c1edf976b26661292bb4fd6a6d73f9d3dc388c99f93c9_prof);

        
        $__internal_7de3d972dc5ea193415a8fc795b17a285e7d66f034b9122f40d02db6aa68fa1a->leave($__internal_7de3d972dc5ea193415a8fc795b17a285e7d66f034b9122f40d02db6aa68fa1a_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
