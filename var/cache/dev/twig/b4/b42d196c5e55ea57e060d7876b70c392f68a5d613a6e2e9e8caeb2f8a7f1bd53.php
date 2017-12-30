<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a0c993e54b5e68893ece89e787798ec04154e5df688e2abae2ee3e72750c1d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f0e60b69b75b428d318889f2d1d4443dd081c4f119c0026dfa1ee2fe8ea116c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0e60b69b75b428d318889f2d1d4443dd081c4f119c0026dfa1ee2fe8ea116c->enter($__internal_6f0e60b69b75b428d318889f2d1d4443dd081c4f119c0026dfa1ee2fe8ea116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_977f3a0c44d2905ba04d8ae00a655348a032b34155c0f0ba88d2154397d47dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977f3a0c44d2905ba04d8ae00a655348a032b34155c0f0ba88d2154397d47dcd->enter($__internal_977f3a0c44d2905ba04d8ae00a655348a032b34155c0f0ba88d2154397d47dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0e60b69b75b428d318889f2d1d4443dd081c4f119c0026dfa1ee2fe8ea116c->leave($__internal_6f0e60b69b75b428d318889f2d1d4443dd081c4f119c0026dfa1ee2fe8ea116c_prof);

        
        $__internal_977f3a0c44d2905ba04d8ae00a655348a032b34155c0f0ba88d2154397d47dcd->leave($__internal_977f3a0c44d2905ba04d8ae00a655348a032b34155c0f0ba88d2154397d47dcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dbe21a6e2e50d6144b0f0c107377cec8908bb9cae6432525d87b24ac4890654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbe21a6e2e50d6144b0f0c107377cec8908bb9cae6432525d87b24ac4890654->enter($__internal_0dbe21a6e2e50d6144b0f0c107377cec8908bb9cae6432525d87b24ac4890654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b49ad5d085b94f543977d81f7a978dcd46cb818cf256d6e9c217ff7ed80d9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b49ad5d085b94f543977d81f7a978dcd46cb818cf256d6e9c217ff7ed80d9c1->enter($__internal_5b49ad5d085b94f543977d81f7a978dcd46cb818cf256d6e9c217ff7ed80d9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5b49ad5d085b94f543977d81f7a978dcd46cb818cf256d6e9c217ff7ed80d9c1->leave($__internal_5b49ad5d085b94f543977d81f7a978dcd46cb818cf256d6e9c217ff7ed80d9c1_prof);

        
        $__internal_0dbe21a6e2e50d6144b0f0c107377cec8908bb9cae6432525d87b24ac4890654->leave($__internal_0dbe21a6e2e50d6144b0f0c107377cec8908bb9cae6432525d87b24ac4890654_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e77218004ae490c40cd1736203735e4c5e501807934dd84142690f0f291df386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77218004ae490c40cd1736203735e4c5e501807934dd84142690f0f291df386->enter($__internal_e77218004ae490c40cd1736203735e4c5e501807934dd84142690f0f291df386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7380d03d94048ca1f4aea31c6f09957b2e44227cacb932f30d2da1ebbcbf640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7380d03d94048ca1f4aea31c6f09957b2e44227cacb932f30d2da1ebbcbf640->enter($__internal_e7380d03d94048ca1f4aea31c6f09957b2e44227cacb932f30d2da1ebbcbf640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e7380d03d94048ca1f4aea31c6f09957b2e44227cacb932f30d2da1ebbcbf640->leave($__internal_e7380d03d94048ca1f4aea31c6f09957b2e44227cacb932f30d2da1ebbcbf640_prof);

        
        $__internal_e77218004ae490c40cd1736203735e4c5e501807934dd84142690f0f291df386->leave($__internal_e77218004ae490c40cd1736203735e4c5e501807934dd84142690f0f291df386_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_129cb9e79818823838c79bad080a0b8c78c808b43de64afa5fd8423f7b036701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129cb9e79818823838c79bad080a0b8c78c808b43de64afa5fd8423f7b036701->enter($__internal_129cb9e79818823838c79bad080a0b8c78c808b43de64afa5fd8423f7b036701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_267dcbb652e0e3f377d012a77a12d209d863ba78bca8185d195957e477b253b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267dcbb652e0e3f377d012a77a12d209d863ba78bca8185d195957e477b253b5->enter($__internal_267dcbb652e0e3f377d012a77a12d209d863ba78bca8185d195957e477b253b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_267dcbb652e0e3f377d012a77a12d209d863ba78bca8185d195957e477b253b5->leave($__internal_267dcbb652e0e3f377d012a77a12d209d863ba78bca8185d195957e477b253b5_prof);

        
        $__internal_129cb9e79818823838c79bad080a0b8c78c808b43de64afa5fd8423f7b036701->leave($__internal_129cb9e79818823838c79bad080a0b8c78c808b43de64afa5fd8423f7b036701_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
