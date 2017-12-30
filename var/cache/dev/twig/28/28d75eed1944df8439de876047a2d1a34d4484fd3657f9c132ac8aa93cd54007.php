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
        $__internal_4b363db8ca13799a04d3eecc3cf1ad38bc0126d45b8d1d1492b835872bb506ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b363db8ca13799a04d3eecc3cf1ad38bc0126d45b8d1d1492b835872bb506ef->enter($__internal_4b363db8ca13799a04d3eecc3cf1ad38bc0126d45b8d1d1492b835872bb506ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e76a93bb2244bb9b60c5b2df5a3abf2b3bf42f2ed1491c0680131b9830846d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76a93bb2244bb9b60c5b2df5a3abf2b3bf42f2ed1491c0680131b9830846d1b->enter($__internal_e76a93bb2244bb9b60c5b2df5a3abf2b3bf42f2ed1491c0680131b9830846d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4b363db8ca13799a04d3eecc3cf1ad38bc0126d45b8d1d1492b835872bb506ef->leave($__internal_4b363db8ca13799a04d3eecc3cf1ad38bc0126d45b8d1d1492b835872bb506ef_prof);

        
        $__internal_e76a93bb2244bb9b60c5b2df5a3abf2b3bf42f2ed1491c0680131b9830846d1b->leave($__internal_e76a93bb2244bb9b60c5b2df5a3abf2b3bf42f2ed1491c0680131b9830846d1b_prof);

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
