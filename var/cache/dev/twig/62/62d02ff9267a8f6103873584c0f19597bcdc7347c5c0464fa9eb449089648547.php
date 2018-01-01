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
        $__internal_64c3a4409a68cbcc79e11e6d0d36d85182e38db0a72b294c6b3fb32e46afeb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c3a4409a68cbcc79e11e6d0d36d85182e38db0a72b294c6b3fb32e46afeb6c->enter($__internal_64c3a4409a68cbcc79e11e6d0d36d85182e38db0a72b294c6b3fb32e46afeb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_76200d2a0f43f058c2bd901c04888f7a715e0b80379f8bb1492f32b14ea3f777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76200d2a0f43f058c2bd901c04888f7a715e0b80379f8bb1492f32b14ea3f777->enter($__internal_76200d2a0f43f058c2bd901c04888f7a715e0b80379f8bb1492f32b14ea3f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64c3a4409a68cbcc79e11e6d0d36d85182e38db0a72b294c6b3fb32e46afeb6c->leave($__internal_64c3a4409a68cbcc79e11e6d0d36d85182e38db0a72b294c6b3fb32e46afeb6c_prof);

        
        $__internal_76200d2a0f43f058c2bd901c04888f7a715e0b80379f8bb1492f32b14ea3f777->leave($__internal_76200d2a0f43f058c2bd901c04888f7a715e0b80379f8bb1492f32b14ea3f777_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
