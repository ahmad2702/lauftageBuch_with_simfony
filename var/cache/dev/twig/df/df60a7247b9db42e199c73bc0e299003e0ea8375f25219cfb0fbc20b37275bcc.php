<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d8f8dcf2facae7b515be4dcc58c0b78639775872642c471b9ce1a276f9ad2e80 extends Twig_Template
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
        $__internal_fc3f8e80d87e1a37af33771d6c846b15452e070e21f93e8b68465775c1b1e200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3f8e80d87e1a37af33771d6c846b15452e070e21f93e8b68465775c1b1e200->enter($__internal_fc3f8e80d87e1a37af33771d6c846b15452e070e21f93e8b68465775c1b1e200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_71931e13805c8f6cf77474a877ca4dc393a30dfed6ffed257b57f034756486cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71931e13805c8f6cf77474a877ca4dc393a30dfed6ffed257b57f034756486cc->enter($__internal_71931e13805c8f6cf77474a877ca4dc393a30dfed6ffed257b57f034756486cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fc3f8e80d87e1a37af33771d6c846b15452e070e21f93e8b68465775c1b1e200->leave($__internal_fc3f8e80d87e1a37af33771d6c846b15452e070e21f93e8b68465775c1b1e200_prof);

        
        $__internal_71931e13805c8f6cf77474a877ca4dc393a30dfed6ffed257b57f034756486cc->leave($__internal_71931e13805c8f6cf77474a877ca4dc393a30dfed6ffed257b57f034756486cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
