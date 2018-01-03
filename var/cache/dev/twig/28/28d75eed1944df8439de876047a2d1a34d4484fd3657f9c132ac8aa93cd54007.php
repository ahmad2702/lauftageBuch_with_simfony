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
        $__internal_dc6d38e9f48fcfd160290908a93238e0a7493a7d272c7c500e89ddb77baf28db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6d38e9f48fcfd160290908a93238e0a7493a7d272c7c500e89ddb77baf28db->enter($__internal_dc6d38e9f48fcfd160290908a93238e0a7493a7d272c7c500e89ddb77baf28db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dee9a64ecff1d7248e6af3e438a4363e3b1076a957c5f2c140f814cf37251a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee9a64ecff1d7248e6af3e438a4363e3b1076a957c5f2c140f814cf37251a6c->enter($__internal_dee9a64ecff1d7248e6af3e438a4363e3b1076a957c5f2c140f814cf37251a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dc6d38e9f48fcfd160290908a93238e0a7493a7d272c7c500e89ddb77baf28db->leave($__internal_dc6d38e9f48fcfd160290908a93238e0a7493a7d272c7c500e89ddb77baf28db_prof);

        
        $__internal_dee9a64ecff1d7248e6af3e438a4363e3b1076a957c5f2c140f814cf37251a6c->leave($__internal_dee9a64ecff1d7248e6af3e438a4363e3b1076a957c5f2c140f814cf37251a6c_prof);

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
