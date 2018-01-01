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
        $__internal_3b90b876c75525c31879dd4a86e894d2c3663c25ec35b03f4b85e0e8f140cee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b90b876c75525c31879dd4a86e894d2c3663c25ec35b03f4b85e0e8f140cee8->enter($__internal_3b90b876c75525c31879dd4a86e894d2c3663c25ec35b03f4b85e0e8f140cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $__internal_8ac2211e401ac4ba344339a72d5fb25c030582ee003462357e0ba73c19200fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac2211e401ac4ba344339a72d5fb25c030582ee003462357e0ba73c19200fa5->enter($__internal_8ac2211e401ac4ba344339a72d5fb25c030582ee003462357e0ba73c19200fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b90b876c75525c31879dd4a86e894d2c3663c25ec35b03f4b85e0e8f140cee8->leave($__internal_3b90b876c75525c31879dd4a86e894d2c3663c25ec35b03f4b85e0e8f140cee8_prof);

        
        $__internal_8ac2211e401ac4ba344339a72d5fb25c030582ee003462357e0ba73c19200fa5->leave($__internal_8ac2211e401ac4ba344339a72d5fb25c030582ee003462357e0ba73c19200fa5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_77c210a859def818e4e325f55e05b51d5d2ac0c692866ad63be9a69f73eb4368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c210a859def818e4e325f55e05b51d5d2ac0c692866ad63be9a69f73eb4368->enter($__internal_77c210a859def818e4e325f55e05b51d5d2ac0c692866ad63be9a69f73eb4368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1018899a33d725fdb2d5994550d6f75f9922ee462b0bfc8725ec90b30adda495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1018899a33d725fdb2d5994550d6f75f9922ee462b0bfc8725ec90b30adda495->enter($__internal_1018899a33d725fdb2d5994550d6f75f9922ee462b0bfc8725ec90b30adda495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1018899a33d725fdb2d5994550d6f75f9922ee462b0bfc8725ec90b30adda495->leave($__internal_1018899a33d725fdb2d5994550d6f75f9922ee462b0bfc8725ec90b30adda495_prof);

        
        $__internal_77c210a859def818e4e325f55e05b51d5d2ac0c692866ad63be9a69f73eb4368->leave($__internal_77c210a859def818e4e325f55e05b51d5d2ac0c692866ad63be9a69f73eb4368_prof);

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
