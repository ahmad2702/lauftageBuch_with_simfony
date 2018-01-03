<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a0a529f23c3f34bde6e3594f172919c29cbe7f74747e0b99420311d569ddc164 extends Twig_Template
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
        $__internal_ae691544584bb65335c57c8bf787e0e921ade1496a6cf1be6fc23632b9a945ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae691544584bb65335c57c8bf787e0e921ade1496a6cf1be6fc23632b9a945ea->enter($__internal_ae691544584bb65335c57c8bf787e0e921ade1496a6cf1be6fc23632b9a945ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4d3d2debddbf4075d9eb80e30b9dd593975ec69a1ae7752fb0edeb689953f464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d2debddbf4075d9eb80e30b9dd593975ec69a1ae7752fb0edeb689953f464->enter($__internal_4d3d2debddbf4075d9eb80e30b9dd593975ec69a1ae7752fb0edeb689953f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_ae691544584bb65335c57c8bf787e0e921ade1496a6cf1be6fc23632b9a945ea->leave($__internal_ae691544584bb65335c57c8bf787e0e921ade1496a6cf1be6fc23632b9a945ea_prof);

        
        $__internal_4d3d2debddbf4075d9eb80e30b9dd593975ec69a1ae7752fb0edeb689953f464->leave($__internal_4d3d2debddbf4075d9eb80e30b9dd593975ec69a1ae7752fb0edeb689953f464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
