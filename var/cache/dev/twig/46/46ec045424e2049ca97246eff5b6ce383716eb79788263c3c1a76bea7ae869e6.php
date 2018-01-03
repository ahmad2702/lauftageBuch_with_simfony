<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0ca78c9c1968de9b155212a82bfe84731405ec866305e88d1c2ab2264c922558 extends Twig_Template
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
        $__internal_e316773f83f23426b16d4a292d226ab740ef0822d74f97bc98717d59483260a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e316773f83f23426b16d4a292d226ab740ef0822d74f97bc98717d59483260a2->enter($__internal_e316773f83f23426b16d4a292d226ab740ef0822d74f97bc98717d59483260a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9c6cc5c36d230a36d6ff4c02d8f7f4f246cb7dbf178053474f6b82c046b8a86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6cc5c36d230a36d6ff4c02d8f7f4f246cb7dbf178053474f6b82c046b8a86a->enter($__internal_9c6cc5c36d230a36d6ff4c02d8f7f4f246cb7dbf178053474f6b82c046b8a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e316773f83f23426b16d4a292d226ab740ef0822d74f97bc98717d59483260a2->leave($__internal_e316773f83f23426b16d4a292d226ab740ef0822d74f97bc98717d59483260a2_prof);

        
        $__internal_9c6cc5c36d230a36d6ff4c02d8f7f4f246cb7dbf178053474f6b82c046b8a86a->leave($__internal_9c6cc5c36d230a36d6ff4c02d8f7f4f246cb7dbf178053474f6b82c046b8a86a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
