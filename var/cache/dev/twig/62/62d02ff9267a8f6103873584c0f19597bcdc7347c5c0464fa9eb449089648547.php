<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_115c30cfffb380ba9958a1b6b59c240d16a7050c1d3aea6f77904fda05d2d805 extends Twig_Template
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
        $__internal_a63b8a9c0491c836550e9b567a2218d2a9a14e8c6c2542bf72da751466414f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63b8a9c0491c836550e9b567a2218d2a9a14e8c6c2542bf72da751466414f17->enter($__internal_a63b8a9c0491c836550e9b567a2218d2a9a14e8c6c2542bf72da751466414f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_14ca0f1f896465af06a79e7918a2b21248bcb262657c0454cdba10a08612315e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ca0f1f896465af06a79e7918a2b21248bcb262657c0454cdba10a08612315e->enter($__internal_14ca0f1f896465af06a79e7918a2b21248bcb262657c0454cdba10a08612315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a63b8a9c0491c836550e9b567a2218d2a9a14e8c6c2542bf72da751466414f17->leave($__internal_a63b8a9c0491c836550e9b567a2218d2a9a14e8c6c2542bf72da751466414f17_prof);

        
        $__internal_14ca0f1f896465af06a79e7918a2b21248bcb262657c0454cdba10a08612315e->leave($__internal_14ca0f1f896465af06a79e7918a2b21248bcb262657c0454cdba10a08612315e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
