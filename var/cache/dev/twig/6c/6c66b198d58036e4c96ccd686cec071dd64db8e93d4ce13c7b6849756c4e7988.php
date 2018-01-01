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
        $__internal_633e6eb9cd5ec6e796a716fc668ec394dc749026290cd6f8e0e213ec69c42d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633e6eb9cd5ec6e796a716fc668ec394dc749026290cd6f8e0e213ec69c42d9b->enter($__internal_633e6eb9cd5ec6e796a716fc668ec394dc749026290cd6f8e0e213ec69c42d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_32d5496f1add724a722a26ce8dc056c7b565f57ec3d89f21f265f20b37d52742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d5496f1add724a722a26ce8dc056c7b565f57ec3d89f21f265f20b37d52742->enter($__internal_32d5496f1add724a722a26ce8dc056c7b565f57ec3d89f21f265f20b37d52742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_633e6eb9cd5ec6e796a716fc668ec394dc749026290cd6f8e0e213ec69c42d9b->leave($__internal_633e6eb9cd5ec6e796a716fc668ec394dc749026290cd6f8e0e213ec69c42d9b_prof);

        
        $__internal_32d5496f1add724a722a26ce8dc056c7b565f57ec3d89f21f265f20b37d52742->leave($__internal_32d5496f1add724a722a26ce8dc056c7b565f57ec3d89f21f265f20b37d52742_prof);

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
