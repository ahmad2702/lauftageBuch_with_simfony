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
        $__internal_1f5ec8cab852a06abe42f4d1777843ef2b36aee44417372c40831faa61dbfebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5ec8cab852a06abe42f4d1777843ef2b36aee44417372c40831faa61dbfebb->enter($__internal_1f5ec8cab852a06abe42f4d1777843ef2b36aee44417372c40831faa61dbfebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0fe5dc350f35de5718e7e23f116c8b43cc284972d97c6f62ad9c34c3d91d204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe5dc350f35de5718e7e23f116c8b43cc284972d97c6f62ad9c34c3d91d204d->enter($__internal_0fe5dc350f35de5718e7e23f116c8b43cc284972d97c6f62ad9c34c3d91d204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1f5ec8cab852a06abe42f4d1777843ef2b36aee44417372c40831faa61dbfebb->leave($__internal_1f5ec8cab852a06abe42f4d1777843ef2b36aee44417372c40831faa61dbfebb_prof);

        
        $__internal_0fe5dc350f35de5718e7e23f116c8b43cc284972d97c6f62ad9c34c3d91d204d->leave($__internal_0fe5dc350f35de5718e7e23f116c8b43cc284972d97c6f62ad9c34c3d91d204d_prof);

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
