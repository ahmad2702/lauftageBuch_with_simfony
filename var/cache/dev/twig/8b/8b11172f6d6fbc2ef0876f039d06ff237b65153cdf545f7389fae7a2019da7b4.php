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
        $__internal_509cde1a46c5b2892cb2768043ba6fd28b6cbef762322c8304d928eade4d11b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509cde1a46c5b2892cb2768043ba6fd28b6cbef762322c8304d928eade4d11b7->enter($__internal_509cde1a46c5b2892cb2768043ba6fd28b6cbef762322c8304d928eade4d11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_57ea8884967a1b18b0d8c2bf28f3d3c310faa277e2116f93b40121061d7782b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ea8884967a1b18b0d8c2bf28f3d3c310faa277e2116f93b40121061d7782b3->enter($__internal_57ea8884967a1b18b0d8c2bf28f3d3c310faa277e2116f93b40121061d7782b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_509cde1a46c5b2892cb2768043ba6fd28b6cbef762322c8304d928eade4d11b7->leave($__internal_509cde1a46c5b2892cb2768043ba6fd28b6cbef762322c8304d928eade4d11b7_prof);

        
        $__internal_57ea8884967a1b18b0d8c2bf28f3d3c310faa277e2116f93b40121061d7782b3->leave($__internal_57ea8884967a1b18b0d8c2bf28f3d3c310faa277e2116f93b40121061d7782b3_prof);

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
