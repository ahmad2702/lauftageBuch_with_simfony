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
        $__internal_a02c01ce8e7d750c58d8dd900b7c2c6a861eeaa9813f0ffd47a4b7275135c2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02c01ce8e7d750c58d8dd900b7c2c6a861eeaa9813f0ffd47a4b7275135c2e4->enter($__internal_a02c01ce8e7d750c58d8dd900b7c2c6a861eeaa9813f0ffd47a4b7275135c2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5e849048c1a29a5ac8798fabfbcf1e380b00bc71ff2b12df2cd49f6eeb0f0067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e849048c1a29a5ac8798fabfbcf1e380b00bc71ff2b12df2cd49f6eeb0f0067->enter($__internal_5e849048c1a29a5ac8798fabfbcf1e380b00bc71ff2b12df2cd49f6eeb0f0067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a02c01ce8e7d750c58d8dd900b7c2c6a861eeaa9813f0ffd47a4b7275135c2e4->leave($__internal_a02c01ce8e7d750c58d8dd900b7c2c6a861eeaa9813f0ffd47a4b7275135c2e4_prof);

        
        $__internal_5e849048c1a29a5ac8798fabfbcf1e380b00bc71ff2b12df2cd49f6eeb0f0067->leave($__internal_5e849048c1a29a5ac8798fabfbcf1e380b00bc71ff2b12df2cd49f6eeb0f0067_prof);

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
