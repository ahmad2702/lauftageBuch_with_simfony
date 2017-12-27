<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f3c69dc02f9f55f93f96dd9f55e3bd0cca8c6e8bde7aa10cc9ba00b36324f783 extends Twig_Template
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
        $__internal_25e0ac429a9f5354c49d654134dd97a078208a3b536ef9d607d4f0aa07dc5fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e0ac429a9f5354c49d654134dd97a078208a3b536ef9d607d4f0aa07dc5fb8->enter($__internal_25e0ac429a9f5354c49d654134dd97a078208a3b536ef9d607d4f0aa07dc5fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6a0f7757bb200bb09ce95fe0425dfe6ec6d502c8a42419699edb6a057ed408cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0f7757bb200bb09ce95fe0425dfe6ec6d502c8a42419699edb6a057ed408cd->enter($__internal_6a0f7757bb200bb09ce95fe0425dfe6ec6d502c8a42419699edb6a057ed408cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_25e0ac429a9f5354c49d654134dd97a078208a3b536ef9d607d4f0aa07dc5fb8->leave($__internal_25e0ac429a9f5354c49d654134dd97a078208a3b536ef9d607d4f0aa07dc5fb8_prof);

        
        $__internal_6a0f7757bb200bb09ce95fe0425dfe6ec6d502c8a42419699edb6a057ed408cd->leave($__internal_6a0f7757bb200bb09ce95fe0425dfe6ec6d502c8a42419699edb6a057ed408cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
