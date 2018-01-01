<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2711bdcac8c8a350b4de8eedfaf507c388094e3aaf4f1bc883d1e716eec36b81 extends Twig_Template
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
        $__internal_0ee0a5aaebf36b26e5e7b4123cf4fb2354e899a2dc1d566d56e7bce1cf0c13f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee0a5aaebf36b26e5e7b4123cf4fb2354e899a2dc1d566d56e7bce1cf0c13f7->enter($__internal_0ee0a5aaebf36b26e5e7b4123cf4fb2354e899a2dc1d566d56e7bce1cf0c13f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_69a05e66663e9456c9075c5590e644fe4fcd35f1814584cbc4b89f8239c3f37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a05e66663e9456c9075c5590e644fe4fcd35f1814584cbc4b89f8239c3f37e->enter($__internal_69a05e66663e9456c9075c5590e644fe4fcd35f1814584cbc4b89f8239c3f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0ee0a5aaebf36b26e5e7b4123cf4fb2354e899a2dc1d566d56e7bce1cf0c13f7->leave($__internal_0ee0a5aaebf36b26e5e7b4123cf4fb2354e899a2dc1d566d56e7bce1cf0c13f7_prof);

        
        $__internal_69a05e66663e9456c9075c5590e644fe4fcd35f1814584cbc4b89f8239c3f37e->leave($__internal_69a05e66663e9456c9075c5590e644fe4fcd35f1814584cbc4b89f8239c3f37e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
