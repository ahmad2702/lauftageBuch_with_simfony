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
        $__internal_b9459a1a0c91d9eccf1d8a77ebd0a22aac863bfd3d88188929f42ffbe24afda5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9459a1a0c91d9eccf1d8a77ebd0a22aac863bfd3d88188929f42ffbe24afda5->enter($__internal_b9459a1a0c91d9eccf1d8a77ebd0a22aac863bfd3d88188929f42ffbe24afda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_bf6fef28d0e71d896b1ea646064cee32fb7e5a3e766476002689bd46c84a1172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6fef28d0e71d896b1ea646064cee32fb7e5a3e766476002689bd46c84a1172->enter($__internal_bf6fef28d0e71d896b1ea646064cee32fb7e5a3e766476002689bd46c84a1172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b9459a1a0c91d9eccf1d8a77ebd0a22aac863bfd3d88188929f42ffbe24afda5->leave($__internal_b9459a1a0c91d9eccf1d8a77ebd0a22aac863bfd3d88188929f42ffbe24afda5_prof);

        
        $__internal_bf6fef28d0e71d896b1ea646064cee32fb7e5a3e766476002689bd46c84a1172->leave($__internal_bf6fef28d0e71d896b1ea646064cee32fb7e5a3e766476002689bd46c84a1172_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
