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
        $__internal_b6adbd7029a1b8ed55951f996d97982e9a8f440f28c53aac66e868d8d429c117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6adbd7029a1b8ed55951f996d97982e9a8f440f28c53aac66e868d8d429c117->enter($__internal_b6adbd7029a1b8ed55951f996d97982e9a8f440f28c53aac66e868d8d429c117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_50beed10aeb2ea8cf7042c898ff228ed2080a2aa2df44797039f7ff0547fec0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50beed10aeb2ea8cf7042c898ff228ed2080a2aa2df44797039f7ff0547fec0b->enter($__internal_50beed10aeb2ea8cf7042c898ff228ed2080a2aa2df44797039f7ff0547fec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_b6adbd7029a1b8ed55951f996d97982e9a8f440f28c53aac66e868d8d429c117->leave($__internal_b6adbd7029a1b8ed55951f996d97982e9a8f440f28c53aac66e868d8d429c117_prof);

        
        $__internal_50beed10aeb2ea8cf7042c898ff228ed2080a2aa2df44797039f7ff0547fec0b->leave($__internal_50beed10aeb2ea8cf7042c898ff228ed2080a2aa2df44797039f7ff0547fec0b_prof);

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
