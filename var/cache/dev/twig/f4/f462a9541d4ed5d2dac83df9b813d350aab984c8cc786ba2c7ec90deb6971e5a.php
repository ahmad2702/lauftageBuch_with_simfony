<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_49da8526e0c6f092f9c66cc143f9aa52c07419cf09cbb497ac85c3dbae76ef5b extends Twig_Template
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
        $__internal_488d7d6e6fa9cea98b840f49bd936768dd2ea6189f601593ab90a0eab410727e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488d7d6e6fa9cea98b840f49bd936768dd2ea6189f601593ab90a0eab410727e->enter($__internal_488d7d6e6fa9cea98b840f49bd936768dd2ea6189f601593ab90a0eab410727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2b9b6406a60786a4f1bb220f0949cdf375833516082bf798f58790f7e681424e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9b6406a60786a4f1bb220f0949cdf375833516082bf798f58790f7e681424e->enter($__internal_2b9b6406a60786a4f1bb220f0949cdf375833516082bf798f58790f7e681424e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_488d7d6e6fa9cea98b840f49bd936768dd2ea6189f601593ab90a0eab410727e->leave($__internal_488d7d6e6fa9cea98b840f49bd936768dd2ea6189f601593ab90a0eab410727e_prof);

        
        $__internal_2b9b6406a60786a4f1bb220f0949cdf375833516082bf798f58790f7e681424e->leave($__internal_2b9b6406a60786a4f1bb220f0949cdf375833516082bf798f58790f7e681424e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
