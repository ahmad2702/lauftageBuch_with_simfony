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
        $__internal_d270f2a6f9c4bb853181e526a7acb01b15cd94b9d180e3ccd0266c93bb3a93fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d270f2a6f9c4bb853181e526a7acb01b15cd94b9d180e3ccd0266c93bb3a93fe->enter($__internal_d270f2a6f9c4bb853181e526a7acb01b15cd94b9d180e3ccd0266c93bb3a93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c452270581a4367b8c80daecee23ce85bbcadeffe669fc27fcd1254d6b5f44bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c452270581a4367b8c80daecee23ce85bbcadeffe669fc27fcd1254d6b5f44bd->enter($__internal_c452270581a4367b8c80daecee23ce85bbcadeffe669fc27fcd1254d6b5f44bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d270f2a6f9c4bb853181e526a7acb01b15cd94b9d180e3ccd0266c93bb3a93fe->leave($__internal_d270f2a6f9c4bb853181e526a7acb01b15cd94b9d180e3ccd0266c93bb3a93fe_prof);

        
        $__internal_c452270581a4367b8c80daecee23ce85bbcadeffe669fc27fcd1254d6b5f44bd->leave($__internal_c452270581a4367b8c80daecee23ce85bbcadeffe669fc27fcd1254d6b5f44bd_prof);

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
