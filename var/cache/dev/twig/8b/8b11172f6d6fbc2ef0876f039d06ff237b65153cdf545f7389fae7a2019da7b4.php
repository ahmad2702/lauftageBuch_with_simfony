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
        $__internal_8c2f4d02e988f3e0b937f1ee1e7287a5de5534b3148e2da846951a6583ea2ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2f4d02e988f3e0b937f1ee1e7287a5de5534b3148e2da846951a6583ea2ac3->enter($__internal_8c2f4d02e988f3e0b937f1ee1e7287a5de5534b3148e2da846951a6583ea2ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_da409d52c3b266977607b6dde16f4d605295044a629029ed736351579f2dbb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da409d52c3b266977607b6dde16f4d605295044a629029ed736351579f2dbb3e->enter($__internal_da409d52c3b266977607b6dde16f4d605295044a629029ed736351579f2dbb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8c2f4d02e988f3e0b937f1ee1e7287a5de5534b3148e2da846951a6583ea2ac3->leave($__internal_8c2f4d02e988f3e0b937f1ee1e7287a5de5534b3148e2da846951a6583ea2ac3_prof);

        
        $__internal_da409d52c3b266977607b6dde16f4d605295044a629029ed736351579f2dbb3e->leave($__internal_da409d52c3b266977607b6dde16f4d605295044a629029ed736351579f2dbb3e_prof);

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
