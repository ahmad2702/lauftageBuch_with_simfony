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
        $__internal_8e36cbd1343f799cbb6cafa5a3fe08a2d16b79a37118a87cd7734b9fd99ccc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e36cbd1343f799cbb6cafa5a3fe08a2d16b79a37118a87cd7734b9fd99ccc49->enter($__internal_8e36cbd1343f799cbb6cafa5a3fe08a2d16b79a37118a87cd7734b9fd99ccc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_362b62dd728fa13b89c8446c1ed8f19ee0e89300367045bacb83f46889168029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362b62dd728fa13b89c8446c1ed8f19ee0e89300367045bacb83f46889168029->enter($__internal_362b62dd728fa13b89c8446c1ed8f19ee0e89300367045bacb83f46889168029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8e36cbd1343f799cbb6cafa5a3fe08a2d16b79a37118a87cd7734b9fd99ccc49->leave($__internal_8e36cbd1343f799cbb6cafa5a3fe08a2d16b79a37118a87cd7734b9fd99ccc49_prof);

        
        $__internal_362b62dd728fa13b89c8446c1ed8f19ee0e89300367045bacb83f46889168029->leave($__internal_362b62dd728fa13b89c8446c1ed8f19ee0e89300367045bacb83f46889168029_prof);

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
