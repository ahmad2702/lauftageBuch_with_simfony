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
        $__internal_4e661ef4fec834b0d5a1741babde9d8b85982c4a2e725f1c3cde4025df5c0f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e661ef4fec834b0d5a1741babde9d8b85982c4a2e725f1c3cde4025df5c0f7d->enter($__internal_4e661ef4fec834b0d5a1741babde9d8b85982c4a2e725f1c3cde4025df5c0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3fa3e98ad62e605a7a477ddfbe669bede6231c8659168bee8afa997bf085ef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa3e98ad62e605a7a477ddfbe669bede6231c8659168bee8afa997bf085ef0e->enter($__internal_3fa3e98ad62e605a7a477ddfbe669bede6231c8659168bee8afa997bf085ef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4e661ef4fec834b0d5a1741babde9d8b85982c4a2e725f1c3cde4025df5c0f7d->leave($__internal_4e661ef4fec834b0d5a1741babde9d8b85982c4a2e725f1c3cde4025df5c0f7d_prof);

        
        $__internal_3fa3e98ad62e605a7a477ddfbe669bede6231c8659168bee8afa997bf085ef0e->leave($__internal_3fa3e98ad62e605a7a477ddfbe669bede6231c8659168bee8afa997bf085ef0e_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
