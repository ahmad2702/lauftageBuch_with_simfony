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
        $__internal_f7e06f6fd37389097e5aa5b175c282943da9d048d9ace65f054b8c0d950f4d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e06f6fd37389097e5aa5b175c282943da9d048d9ace65f054b8c0d950f4d65->enter($__internal_f7e06f6fd37389097e5aa5b175c282943da9d048d9ace65f054b8c0d950f4d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_21012ae7d45cd45256d049add14be3fb60093d373cae95878998948de636bd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21012ae7d45cd45256d049add14be3fb60093d373cae95878998948de636bd5c->enter($__internal_21012ae7d45cd45256d049add14be3fb60093d373cae95878998948de636bd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f7e06f6fd37389097e5aa5b175c282943da9d048d9ace65f054b8c0d950f4d65->leave($__internal_f7e06f6fd37389097e5aa5b175c282943da9d048d9ace65f054b8c0d950f4d65_prof);

        
        $__internal_21012ae7d45cd45256d049add14be3fb60093d373cae95878998948de636bd5c->leave($__internal_21012ae7d45cd45256d049add14be3fb60093d373cae95878998948de636bd5c_prof);

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
