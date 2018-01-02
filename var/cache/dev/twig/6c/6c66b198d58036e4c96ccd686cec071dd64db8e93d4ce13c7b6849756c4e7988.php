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
        $__internal_fc02e6f04bfb80dd9c720577ee416466fb06e6c44ec42b109399d7afbea80d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc02e6f04bfb80dd9c720577ee416466fb06e6c44ec42b109399d7afbea80d93->enter($__internal_fc02e6f04bfb80dd9c720577ee416466fb06e6c44ec42b109399d7afbea80d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d10380710ac6799b3f5b7ee20ca792c30966f398dea6c8940b4d8daf9adb0a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10380710ac6799b3f5b7ee20ca792c30966f398dea6c8940b4d8daf9adb0a2f->enter($__internal_d10380710ac6799b3f5b7ee20ca792c30966f398dea6c8940b4d8daf9adb0a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fc02e6f04bfb80dd9c720577ee416466fb06e6c44ec42b109399d7afbea80d93->leave($__internal_fc02e6f04bfb80dd9c720577ee416466fb06e6c44ec42b109399d7afbea80d93_prof);

        
        $__internal_d10380710ac6799b3f5b7ee20ca792c30966f398dea6c8940b4d8daf9adb0a2f->leave($__internal_d10380710ac6799b3f5b7ee20ca792c30966f398dea6c8940b4d8daf9adb0a2f_prof);

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
