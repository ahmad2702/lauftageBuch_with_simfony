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
        $__internal_c85a80c61c9457c911e542ee35a07d3fcab78297ad178cd40826bd6c03dd578e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85a80c61c9457c911e542ee35a07d3fcab78297ad178cd40826bd6c03dd578e->enter($__internal_c85a80c61c9457c911e542ee35a07d3fcab78297ad178cd40826bd6c03dd578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9382c235ece05c9da102a290677dcfc0a710a60a7754892bd8ad94ae80386091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9382c235ece05c9da102a290677dcfc0a710a60a7754892bd8ad94ae80386091->enter($__internal_9382c235ece05c9da102a290677dcfc0a710a60a7754892bd8ad94ae80386091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c85a80c61c9457c911e542ee35a07d3fcab78297ad178cd40826bd6c03dd578e->leave($__internal_c85a80c61c9457c911e542ee35a07d3fcab78297ad178cd40826bd6c03dd578e_prof);

        
        $__internal_9382c235ece05c9da102a290677dcfc0a710a60a7754892bd8ad94ae80386091->leave($__internal_9382c235ece05c9da102a290677dcfc0a710a60a7754892bd8ad94ae80386091_prof);

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
