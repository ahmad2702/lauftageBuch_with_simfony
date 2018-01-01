<?php

/* authentications/login.php.twig */
class __TwigTemplate_01e60b03f92e595ab699787fddb186bd92413e95ffb181a151ac0e41f5362e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login.php.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8325d0bd0c501fbe8f0d45aa4fe6f8ea0124228ba243519d5870fd32306eb0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8325d0bd0c501fbe8f0d45aa4fe6f8ea0124228ba243519d5870fd32306eb0fd->enter($__internal_8325d0bd0c501fbe8f0d45aa4fe6f8ea0124228ba243519d5870fd32306eb0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_a474f1cf6b383b91c9118dd99441b6bcfa79f586c8478a793dc2557ee901893f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a474f1cf6b383b91c9118dd99441b6bcfa79f586c8478a793dc2557ee901893f->enter($__internal_a474f1cf6b383b91c9118dd99441b6bcfa79f586c8478a793dc2557ee901893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8325d0bd0c501fbe8f0d45aa4fe6f8ea0124228ba243519d5870fd32306eb0fd->leave($__internal_8325d0bd0c501fbe8f0d45aa4fe6f8ea0124228ba243519d5870fd32306eb0fd_prof);

        
        $__internal_a474f1cf6b383b91c9118dd99441b6bcfa79f586c8478a793dc2557ee901893f->leave($__internal_a474f1cf6b383b91c9118dd99441b6bcfa79f586c8478a793dc2557ee901893f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d74b0a602020cc9beac76772d965f29ced1b412faa0901b729ffab897756ee4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74b0a602020cc9beac76772d965f29ced1b412faa0901b729ffab897756ee4f->enter($__internal_d74b0a602020cc9beac76772d965f29ced1b412faa0901b729ffab897756ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1a67721254f114614b66430f5e39c30825c75509c6c55ebd131f9185c7f21ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a67721254f114614b66430f5e39c30825c75509c6c55ebd131f9185c7f21ae6->enter($__internal_1a67721254f114614b66430f5e39c30825c75509c6c55ebd131f9185c7f21ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_1a67721254f114614b66430f5e39c30825c75509c6c55ebd131f9185c7f21ae6->leave($__internal_1a67721254f114614b66430f5e39c30825c75509c6c55ebd131f9185c7f21ae6_prof);

        
        $__internal_d74b0a602020cc9beac76772d965f29ced1b412faa0901b729ffab897756ee4f->leave($__internal_d74b0a602020cc9beac76772d965f29ced1b412faa0901b729ffab897756ee4f_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 16,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {{ form_start(form) }}

        {{ form_row(form._username) }}
        {{ form_row(form._password) }}

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    {{ form_end(form) }}


{% endblock %}", "authentications/login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/authentications/login.php.twig");
    }
}
