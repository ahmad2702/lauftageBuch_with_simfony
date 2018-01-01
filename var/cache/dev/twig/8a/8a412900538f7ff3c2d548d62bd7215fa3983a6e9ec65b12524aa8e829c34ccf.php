<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0499015d60673f2b3664922a9f949ff928dc151dd49886789bfcf67ba3004590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_92b485b0ca5927a6ae434c3a697c96294917a8becebc2b503b7eba37de076f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b485b0ca5927a6ae434c3a697c96294917a8becebc2b503b7eba37de076f6d->enter($__internal_92b485b0ca5927a6ae434c3a697c96294917a8becebc2b503b7eba37de076f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0dbaf59d599c01c7c7a4124515036bc664ed4e0e58f811b78652710e09b8ca57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbaf59d599c01c7c7a4124515036bc664ed4e0e58f811b78652710e09b8ca57->enter($__internal_0dbaf59d599c01c7c7a4124515036bc664ed4e0e58f811b78652710e09b8ca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b485b0ca5927a6ae434c3a697c96294917a8becebc2b503b7eba37de076f6d->leave($__internal_92b485b0ca5927a6ae434c3a697c96294917a8becebc2b503b7eba37de076f6d_prof);

        
        $__internal_0dbaf59d599c01c7c7a4124515036bc664ed4e0e58f811b78652710e09b8ca57->leave($__internal_0dbaf59d599c01c7c7a4124515036bc664ed4e0e58f811b78652710e09b8ca57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46b98f7800d1a5ed0850550ca9a66801d2a8ca2cc2f8c02040da442df0fb0ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b98f7800d1a5ed0850550ca9a66801d2a8ca2cc2f8c02040da442df0fb0ed0->enter($__internal_46b98f7800d1a5ed0850550ca9a66801d2a8ca2cc2f8c02040da442df0fb0ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72bf1e147065cf6e92405494c03d76a9b0de1daee5b609ff6ee118ac8fc06157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bf1e147065cf6e92405494c03d76a9b0de1daee5b609ff6ee118ac8fc06157->enter($__internal_72bf1e147065cf6e92405494c03d76a9b0de1daee5b609ff6ee118ac8fc06157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72bf1e147065cf6e92405494c03d76a9b0de1daee5b609ff6ee118ac8fc06157->leave($__internal_72bf1e147065cf6e92405494c03d76a9b0de1daee5b609ff6ee118ac8fc06157_prof);

        
        $__internal_46b98f7800d1a5ed0850550ca9a66801d2a8ca2cc2f8c02040da442df0fb0ed0->leave($__internal_46b98f7800d1a5ed0850550ca9a66801d2a8ca2cc2f8c02040da442df0fb0ed0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9312660000a4e6996f3c534db6c963a53c83e0e9c9607677c279b7e2b4e1eaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9312660000a4e6996f3c534db6c963a53c83e0e9c9607677c279b7e2b4e1eaca->enter($__internal_9312660000a4e6996f3c534db6c963a53c83e0e9c9607677c279b7e2b4e1eaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc8805837e02bcfeb25789e277415dd0ff1d89a2876280bd199cced4f86cd9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8805837e02bcfeb25789e277415dd0ff1d89a2876280bd199cced4f86cd9b8->enter($__internal_cc8805837e02bcfeb25789e277415dd0ff1d89a2876280bd199cced4f86cd9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc8805837e02bcfeb25789e277415dd0ff1d89a2876280bd199cced4f86cd9b8->leave($__internal_cc8805837e02bcfeb25789e277415dd0ff1d89a2876280bd199cced4f86cd9b8_prof);

        
        $__internal_9312660000a4e6996f3c534db6c963a53c83e0e9c9607677c279b7e2b4e1eaca->leave($__internal_9312660000a4e6996f3c534db6c963a53c83e0e9c9607677c279b7e2b4e1eaca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a4d24aed875c3d2b5b56dbc92fbd7e272dca8556ff255cfb30c2585466ac8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4d24aed875c3d2b5b56dbc92fbd7e272dca8556ff255cfb30c2585466ac8ab->enter($__internal_6a4d24aed875c3d2b5b56dbc92fbd7e272dca8556ff255cfb30c2585466ac8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9177ce72a5a54fda69e2bc29d0b079f16c223e5c3a610aca09d9071f1f6348e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9177ce72a5a54fda69e2bc29d0b079f16c223e5c3a610aca09d9071f1f6348e8->enter($__internal_9177ce72a5a54fda69e2bc29d0b079f16c223e5c3a610aca09d9071f1f6348e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9177ce72a5a54fda69e2bc29d0b079f16c223e5c3a610aca09d9071f1f6348e8->leave($__internal_9177ce72a5a54fda69e2bc29d0b079f16c223e5c3a610aca09d9071f1f6348e8_prof);

        
        $__internal_6a4d24aed875c3d2b5b56dbc92fbd7e272dca8556ff255cfb30c2585466ac8ab->leave($__internal_6a4d24aed875c3d2b5b56dbc92fbd7e272dca8556ff255cfb30c2585466ac8ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
