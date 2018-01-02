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
        $__internal_b4ec32d8b9e6c68310d721a9675cf19d594e09a385e9c3bee037af3429ce1f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ec32d8b9e6c68310d721a9675cf19d594e09a385e9c3bee037af3429ce1f44->enter($__internal_b4ec32d8b9e6c68310d721a9675cf19d594e09a385e9c3bee037af3429ce1f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7af9c64c290dc7a934f49d0c3850b894e4e104115776ec3e76500b2fe2d2e050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af9c64c290dc7a934f49d0c3850b894e4e104115776ec3e76500b2fe2d2e050->enter($__internal_7af9c64c290dc7a934f49d0c3850b894e4e104115776ec3e76500b2fe2d2e050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b4ec32d8b9e6c68310d721a9675cf19d594e09a385e9c3bee037af3429ce1f44->leave($__internal_b4ec32d8b9e6c68310d721a9675cf19d594e09a385e9c3bee037af3429ce1f44_prof);

        
        $__internal_7af9c64c290dc7a934f49d0c3850b894e4e104115776ec3e76500b2fe2d2e050->leave($__internal_7af9c64c290dc7a934f49d0c3850b894e4e104115776ec3e76500b2fe2d2e050_prof);

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
