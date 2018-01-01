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
        $__internal_762f36b171ad5950a3d625c4b30c7b6b0285dc843117f72fbd1127c5d4e10241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762f36b171ad5950a3d625c4b30c7b6b0285dc843117f72fbd1127c5d4e10241->enter($__internal_762f36b171ad5950a3d625c4b30c7b6b0285dc843117f72fbd1127c5d4e10241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c6498109c6a2f3c7da3af4db45daf50141426ed9445f95f4cf7f80c865a1b8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6498109c6a2f3c7da3af4db45daf50141426ed9445f95f4cf7f80c865a1b8cf->enter($__internal_c6498109c6a2f3c7da3af4db45daf50141426ed9445f95f4cf7f80c865a1b8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_762f36b171ad5950a3d625c4b30c7b6b0285dc843117f72fbd1127c5d4e10241->leave($__internal_762f36b171ad5950a3d625c4b30c7b6b0285dc843117f72fbd1127c5d4e10241_prof);

        
        $__internal_c6498109c6a2f3c7da3af4db45daf50141426ed9445f95f4cf7f80c865a1b8cf->leave($__internal_c6498109c6a2f3c7da3af4db45daf50141426ed9445f95f4cf7f80c865a1b8cf_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
