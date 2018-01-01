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
        $__internal_c032327e4bfb6220ea36649a84a7432798faf9e80e78b2eed389a7f24069890e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c032327e4bfb6220ea36649a84a7432798faf9e80e78b2eed389a7f24069890e->enter($__internal_c032327e4bfb6220ea36649a84a7432798faf9e80e78b2eed389a7f24069890e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ae486af05d74150a8020294515fda59240f2d34b3cc929b1b6d226777df042b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae486af05d74150a8020294515fda59240f2d34b3cc929b1b6d226777df042b5->enter($__internal_ae486af05d74150a8020294515fda59240f2d34b3cc929b1b6d226777df042b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c032327e4bfb6220ea36649a84a7432798faf9e80e78b2eed389a7f24069890e->leave($__internal_c032327e4bfb6220ea36649a84a7432798faf9e80e78b2eed389a7f24069890e_prof);

        
        $__internal_ae486af05d74150a8020294515fda59240f2d34b3cc929b1b6d226777df042b5->leave($__internal_ae486af05d74150a8020294515fda59240f2d34b3cc929b1b6d226777df042b5_prof);

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
