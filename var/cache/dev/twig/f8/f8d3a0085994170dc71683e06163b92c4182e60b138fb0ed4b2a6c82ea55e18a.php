<?php

/* login.php.twig */
class __TwigTemplate_0129b75220a730fdec72895af35a22f91576d5efd0a1801a828fd1d2ce19ee9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "login.php.twig", 1);
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
        $__internal_1810b8632887581ea559dcf24c18fe5d6e9267a403fac6bc055297aed00b23ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1810b8632887581ea559dcf24c18fe5d6e9267a403fac6bc055297aed00b23ba->enter($__internal_1810b8632887581ea559dcf24c18fe5d6e9267a403fac6bc055297aed00b23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.php.twig"));

        $__internal_ce6d67b516912a76dc01f7fb67ddd7a9b24ba153c9a5bbd06bf37bb5d4d5d498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6d67b516912a76dc01f7fb67ddd7a9b24ba153c9a5bbd06bf37bb5d4d5d498->enter($__internal_ce6d67b516912a76dc01f7fb67ddd7a9b24ba153c9a5bbd06bf37bb5d4d5d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1810b8632887581ea559dcf24c18fe5d6e9267a403fac6bc055297aed00b23ba->leave($__internal_1810b8632887581ea559dcf24c18fe5d6e9267a403fac6bc055297aed00b23ba_prof);

        
        $__internal_ce6d67b516912a76dc01f7fb67ddd7a9b24ba153c9a5bbd06bf37bb5d4d5d498->leave($__internal_ce6d67b516912a76dc01f7fb67ddd7a9b24ba153c9a5bbd06bf37bb5d4d5d498_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_569886a406165939a7fe5101b0bbedacff9e0489bf7b08d95429390bc2bbcdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569886a406165939a7fe5101b0bbedacff9e0489bf7b08d95429390bc2bbcdae->enter($__internal_569886a406165939a7fe5101b0bbedacff9e0489bf7b08d95429390bc2bbcdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6cb7a84628b06b1de3c34cf164598865129caf835ccd67f440983ac1a36eb8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb7a84628b06b1de3c34cf164598865129caf835ccd67f440983ac1a36eb8a9->enter($__internal_6cb7a84628b06b1de3c34cf164598865129caf835ccd67f440983ac1a36eb8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6cb7a84628b06b1de3c34cf164598865129caf835ccd67f440983ac1a36eb8a9->leave($__internal_6cb7a84628b06b1de3c34cf164598865129caf835ccd67f440983ac1a36eb8a9_prof);

        
        $__internal_569886a406165939a7fe5101b0bbedacff9e0489bf7b08d95429390bc2bbcdae->leave($__internal_569886a406165939a7fe5101b0bbedacff9e0489bf7b08d95429390bc2bbcdae_prof);

    }

    public function getTemplateName()
    {
        return "login.php.twig";
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


{% endblock %}", "login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/login.php.twig");
    }
}
