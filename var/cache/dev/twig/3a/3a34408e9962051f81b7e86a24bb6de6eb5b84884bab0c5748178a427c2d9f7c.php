<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e10b0188a2a73fd0b093698fef304517dfba6bfb7b753bbc55a995f9e6a6b79b extends Twig_Template
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
        $__internal_ec7ddd0013d321ad495a85a78c87855b3e696abf01b360dcd94444cf2bdb4b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7ddd0013d321ad495a85a78c87855b3e696abf01b360dcd94444cf2bdb4b4d->enter($__internal_ec7ddd0013d321ad495a85a78c87855b3e696abf01b360dcd94444cf2bdb4b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c9a3bf85b632fea13d4c61723eb7490b9a5e1aa0b7516ec905910802c43a02d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a3bf85b632fea13d4c61723eb7490b9a5e1aa0b7516ec905910802c43a02d3->enter($__internal_c9a3bf85b632fea13d4c61723eb7490b9a5e1aa0b7516ec905910802c43a02d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ec7ddd0013d321ad495a85a78c87855b3e696abf01b360dcd94444cf2bdb4b4d->leave($__internal_ec7ddd0013d321ad495a85a78c87855b3e696abf01b360dcd94444cf2bdb4b4d_prof);

        
        $__internal_c9a3bf85b632fea13d4c61723eb7490b9a5e1aa0b7516ec905910802c43a02d3->leave($__internal_c9a3bf85b632fea13d4c61723eb7490b9a5e1aa0b7516ec905910802c43a02d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
