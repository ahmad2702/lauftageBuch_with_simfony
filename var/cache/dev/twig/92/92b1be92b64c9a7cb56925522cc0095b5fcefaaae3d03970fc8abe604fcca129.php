<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f16a68fea9c7520a98ab379e19659130f59d9d09a9820faedd42d7dc649f115f extends Twig_Template
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
        $__internal_63fc95a91c10f3e7543630b3d0abe92aee433926601b502b4483b62c8a0f9083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fc95a91c10f3e7543630b3d0abe92aee433926601b502b4483b62c8a0f9083->enter($__internal_63fc95a91c10f3e7543630b3d0abe92aee433926601b502b4483b62c8a0f9083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_98791f608899e536c9afe51bcbd4418b2b982616427762ed7ed0de739e1e8874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98791f608899e536c9afe51bcbd4418b2b982616427762ed7ed0de739e1e8874->enter($__internal_98791f608899e536c9afe51bcbd4418b2b982616427762ed7ed0de739e1e8874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_63fc95a91c10f3e7543630b3d0abe92aee433926601b502b4483b62c8a0f9083->leave($__internal_63fc95a91c10f3e7543630b3d0abe92aee433926601b502b4483b62c8a0f9083_prof);

        
        $__internal_98791f608899e536c9afe51bcbd4418b2b982616427762ed7ed0de739e1e8874->leave($__internal_98791f608899e536c9afe51bcbd4418b2b982616427762ed7ed0de739e1e8874_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
