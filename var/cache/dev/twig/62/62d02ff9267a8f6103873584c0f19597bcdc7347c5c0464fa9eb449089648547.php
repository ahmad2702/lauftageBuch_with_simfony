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
        $__internal_d655caa69755f87125cf25292bb60871f329ec7a044bf850bdef6cb4b38bc666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d655caa69755f87125cf25292bb60871f329ec7a044bf850bdef6cb4b38bc666->enter($__internal_d655caa69755f87125cf25292bb60871f329ec7a044bf850bdef6cb4b38bc666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b6215c950d4dab14f2442896ca3eeb58db9bc6bb8cb2e7e5d4f0c533e26d9d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6215c950d4dab14f2442896ca3eeb58db9bc6bb8cb2e7e5d4f0c533e26d9d9b->enter($__internal_b6215c950d4dab14f2442896ca3eeb58db9bc6bb8cb2e7e5d4f0c533e26d9d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d655caa69755f87125cf25292bb60871f329ec7a044bf850bdef6cb4b38bc666->leave($__internal_d655caa69755f87125cf25292bb60871f329ec7a044bf850bdef6cb4b38bc666_prof);

        
        $__internal_b6215c950d4dab14f2442896ca3eeb58db9bc6bb8cb2e7e5d4f0c533e26d9d9b->leave($__internal_b6215c950d4dab14f2442896ca3eeb58db9bc6bb8cb2e7e5d4f0c533e26d9d9b_prof);

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
