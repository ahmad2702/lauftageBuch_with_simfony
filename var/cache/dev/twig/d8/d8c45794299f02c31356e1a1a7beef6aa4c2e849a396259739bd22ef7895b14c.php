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
        $__internal_cda6514c2055d29c199c745a6a0c3358418d3b352f3a115f73a61272f7e7aec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda6514c2055d29c199c745a6a0c3358418d3b352f3a115f73a61272f7e7aec2->enter($__internal_cda6514c2055d29c199c745a6a0c3358418d3b352f3a115f73a61272f7e7aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_abe35e06d2f2b3bf34125f8a55d231a25534f9cebfd9d391499058a8f72ea609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe35e06d2f2b3bf34125f8a55d231a25534f9cebfd9d391499058a8f72ea609->enter($__internal_abe35e06d2f2b3bf34125f8a55d231a25534f9cebfd9d391499058a8f72ea609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_cda6514c2055d29c199c745a6a0c3358418d3b352f3a115f73a61272f7e7aec2->leave($__internal_cda6514c2055d29c199c745a6a0c3358418d3b352f3a115f73a61272f7e7aec2_prof);

        
        $__internal_abe35e06d2f2b3bf34125f8a55d231a25534f9cebfd9d391499058a8f72ea609->leave($__internal_abe35e06d2f2b3bf34125f8a55d231a25534f9cebfd9d391499058a8f72ea609_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
