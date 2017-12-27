<?php

/* base.html.twig */
class __TwigTemplate_0cfa289ed6a218f2f3002752523abfa0cf8aacf94d2610131e7d1cb8bd9999f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1249d3bd76506756625fb816e8391f6116cc53b63f7cdc2798eac68a49281fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1249d3bd76506756625fb816e8391f6116cc53b63f7cdc2798eac68a49281fcb->enter($__internal_1249d3bd76506756625fb816e8391f6116cc53b63f7cdc2798eac68a49281fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_90795cce39c120a26ea9a22a546b189e13228237b14c10698b8d8b97794ad395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90795cce39c120a26ea9a22a546b189e13228237b14c10698b8d8b97794ad395->enter($__internal_90795cce39c120a26ea9a22a546b189e13228237b14c10698b8d8b97794ad395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_1249d3bd76506756625fb816e8391f6116cc53b63f7cdc2798eac68a49281fcb->leave($__internal_1249d3bd76506756625fb816e8391f6116cc53b63f7cdc2798eac68a49281fcb_prof);

        
        $__internal_90795cce39c120a26ea9a22a546b189e13228237b14c10698b8d8b97794ad395->leave($__internal_90795cce39c120a26ea9a22a546b189e13228237b14c10698b8d8b97794ad395_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_408694ad1598f27fc8e58659e8f4109e3f14b150f544b08163abff96f2f759e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408694ad1598f27fc8e58659e8f4109e3f14b150f544b08163abff96f2f759e4->enter($__internal_408694ad1598f27fc8e58659e8f4109e3f14b150f544b08163abff96f2f759e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c84516e71767a64f6667ccb0648b64023a7a32fa0ac71ea45bb8ae2590cdb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c84516e71767a64f6667ccb0648b64023a7a32fa0ac71ea45bb8ae2590cdb6b->enter($__internal_2c84516e71767a64f6667ccb0648b64023a7a32fa0ac71ea45bb8ae2590cdb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c84516e71767a64f6667ccb0648b64023a7a32fa0ac71ea45bb8ae2590cdb6b->leave($__internal_2c84516e71767a64f6667ccb0648b64023a7a32fa0ac71ea45bb8ae2590cdb6b_prof);

        
        $__internal_408694ad1598f27fc8e58659e8f4109e3f14b150f544b08163abff96f2f759e4->leave($__internal_408694ad1598f27fc8e58659e8f4109e3f14b150f544b08163abff96f2f759e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bff88fe23d685e19c56dcabd8b68b44f49ef3c52d43df333ab1f50f457d4fec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff88fe23d685e19c56dcabd8b68b44f49ef3c52d43df333ab1f50f457d4fec2->enter($__internal_bff88fe23d685e19c56dcabd8b68b44f49ef3c52d43df333ab1f50f457d4fec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_275ba5a768eab5179e4a52b4179bd9c1d05e86a6dc5ee7f74cff813f382c8ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275ba5a768eab5179e4a52b4179bd9c1d05e86a6dc5ee7f74cff813f382c8ae2->enter($__internal_275ba5a768eab5179e4a52b4179bd9c1d05e86a6dc5ee7f74cff813f382c8ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_275ba5a768eab5179e4a52b4179bd9c1d05e86a6dc5ee7f74cff813f382c8ae2->leave($__internal_275ba5a768eab5179e4a52b4179bd9c1d05e86a6dc5ee7f74cff813f382c8ae2_prof);

        
        $__internal_bff88fe23d685e19c56dcabd8b68b44f49ef3c52d43df333ab1f50f457d4fec2->leave($__internal_bff88fe23d685e19c56dcabd8b68b44f49ef3c52d43df333ab1f50f457d4fec2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_12799f734b92910c07105b1c8fd1975106fb544c192300ad0633fe227ed9a5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12799f734b92910c07105b1c8fd1975106fb544c192300ad0633fe227ed9a5da->enter($__internal_12799f734b92910c07105b1c8fd1975106fb544c192300ad0633fe227ed9a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2b96bc9846449f667096ed5d7f07bc3cdc5e60d46dbaab91a2d9a101986db00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b96bc9846449f667096ed5d7f07bc3cdc5e60d46dbaab91a2d9a101986db00->enter($__internal_d2b96bc9846449f667096ed5d7f07bc3cdc5e60d46dbaab91a2d9a101986db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2b96bc9846449f667096ed5d7f07bc3cdc5e60d46dbaab91a2d9a101986db00->leave($__internal_d2b96bc9846449f667096ed5d7f07bc3cdc5e60d46dbaab91a2d9a101986db00_prof);

        
        $__internal_12799f734b92910c07105b1c8fd1975106fb544c192300ad0633fe227ed9a5da->leave($__internal_12799f734b92910c07105b1c8fd1975106fb544c192300ad0633fe227ed9a5da_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eeed9caa59e82c55a1f0443695e40e87e11072b1892727926f7f15b4bf17c11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeed9caa59e82c55a1f0443695e40e87e11072b1892727926f7f15b4bf17c11e->enter($__internal_eeed9caa59e82c55a1f0443695e40e87e11072b1892727926f7f15b4bf17c11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_81e3f7ebb027ceb9580537d1d810d7e0f7084d6fa21c3112ce5aa3f23678fc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e3f7ebb027ceb9580537d1d810d7e0f7084d6fa21c3112ce5aa3f23678fc5d->enter($__internal_81e3f7ebb027ceb9580537d1d810d7e0f7084d6fa21c3112ce5aa3f23678fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_81e3f7ebb027ceb9580537d1d810d7e0f7084d6fa21c3112ce5aa3f23678fc5d->leave($__internal_81e3f7ebb027ceb9580537d1d810d7e0f7084d6fa21c3112ce5aa3f23678fc5d_prof);

        
        $__internal_eeed9caa59e82c55a1f0443695e40e87e11072b1892727926f7f15b4bf17c11e->leave($__internal_eeed9caa59e82c55a1f0443695e40e87e11072b1892727926f7f15b4bf17c11e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/base.html.twig");
    }
}
