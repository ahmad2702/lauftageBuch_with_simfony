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
        $__internal_f6737a2fc1addadb9d43f77034d8247d467c29c23efaed3d9af608c079acb242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6737a2fc1addadb9d43f77034d8247d467c29c23efaed3d9af608c079acb242->enter($__internal_f6737a2fc1addadb9d43f77034d8247d467c29c23efaed3d9af608c079acb242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ee6f685f9386643bfc649e000550ce8319e3b968140589b09415061670fa7f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6f685f9386643bfc649e000550ce8319e3b968140589b09415061670fa7f66->enter($__internal_ee6f685f9386643bfc649e000550ce8319e3b968140589b09415061670fa7f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f6737a2fc1addadb9d43f77034d8247d467c29c23efaed3d9af608c079acb242->leave($__internal_f6737a2fc1addadb9d43f77034d8247d467c29c23efaed3d9af608c079acb242_prof);

        
        $__internal_ee6f685f9386643bfc649e000550ce8319e3b968140589b09415061670fa7f66->leave($__internal_ee6f685f9386643bfc649e000550ce8319e3b968140589b09415061670fa7f66_prof);

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
