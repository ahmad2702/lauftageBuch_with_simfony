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
        $__internal_e08644bcd73352bbc859fa906294a106b20209cf4b4a71ac6a78a463fc40cb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08644bcd73352bbc859fa906294a106b20209cf4b4a71ac6a78a463fc40cb08->enter($__internal_e08644bcd73352bbc859fa906294a106b20209cf4b4a71ac6a78a463fc40cb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_22c4323c792b269170becf669bbd8d7678fc9eaebd3612f3adb7dc3ce94ffd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c4323c792b269170becf669bbd8d7678fc9eaebd3612f3adb7dc3ce94ffd84->enter($__internal_22c4323c792b269170becf669bbd8d7678fc9eaebd3612f3adb7dc3ce94ffd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e08644bcd73352bbc859fa906294a106b20209cf4b4a71ac6a78a463fc40cb08->leave($__internal_e08644bcd73352bbc859fa906294a106b20209cf4b4a71ac6a78a463fc40cb08_prof);

        
        $__internal_22c4323c792b269170becf669bbd8d7678fc9eaebd3612f3adb7dc3ce94ffd84->leave($__internal_22c4323c792b269170becf669bbd8d7678fc9eaebd3612f3adb7dc3ce94ffd84_prof);

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
", "@Framework/Form/form.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
