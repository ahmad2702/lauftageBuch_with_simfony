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
        $__internal_8d1255e01e605eea67f638bb351be01eb5551129ae7f6b58d79a47f8300e1896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1255e01e605eea67f638bb351be01eb5551129ae7f6b58d79a47f8300e1896->enter($__internal_8d1255e01e605eea67f638bb351be01eb5551129ae7f6b58d79a47f8300e1896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_fb50a007f78a4080114c0eb8a905dac484ac0f81ddc8b89051de7b7c388fef76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb50a007f78a4080114c0eb8a905dac484ac0f81ddc8b89051de7b7c388fef76->enter($__internal_fb50a007f78a4080114c0eb8a905dac484ac0f81ddc8b89051de7b7c388fef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1255e01e605eea67f638bb351be01eb5551129ae7f6b58d79a47f8300e1896->leave($__internal_8d1255e01e605eea67f638bb351be01eb5551129ae7f6b58d79a47f8300e1896_prof);

        
        $__internal_fb50a007f78a4080114c0eb8a905dac484ac0f81ddc8b89051de7b7c388fef76->leave($__internal_fb50a007f78a4080114c0eb8a905dac484ac0f81ddc8b89051de7b7c388fef76_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe18f1e0482e6caef596da2d0b0ad51a2799e19397ae8a7f596e31ca5fa71a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe18f1e0482e6caef596da2d0b0ad51a2799e19397ae8a7f596e31ca5fa71a19->enter($__internal_fe18f1e0482e6caef596da2d0b0ad51a2799e19397ae8a7f596e31ca5fa71a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9a3713204226d46a9308e7973d94d0d256ca75c00e980d13c058cd43141a05e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3713204226d46a9308e7973d94d0d256ca75c00e980d13c058cd43141a05e1->enter($__internal_9a3713204226d46a9308e7973d94d0d256ca75c00e980d13c058cd43141a05e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9a3713204226d46a9308e7973d94d0d256ca75c00e980d13c058cd43141a05e1->leave($__internal_9a3713204226d46a9308e7973d94d0d256ca75c00e980d13c058cd43141a05e1_prof);

        
        $__internal_fe18f1e0482e6caef596da2d0b0ad51a2799e19397ae8a7f596e31ca5fa71a19->leave($__internal_fe18f1e0482e6caef596da2d0b0ad51a2799e19397ae8a7f596e31ca5fa71a19_prof);

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


{% endblock %}", "authentications/login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/authentications/login.php.twig");
    }
}
