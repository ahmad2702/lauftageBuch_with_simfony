<?php

/* gesamt.php.twig */
class __TwigTemplate_278b1d1bfd3e623f4e1583fa46c39d8ff6c79112ac866ecb626f3b53d254b7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "gesamt.php.twig", 1);
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
        $__internal_ad739d99edc827cdbe4b8ccef18e2b0c66347d2bd651e051b276c07ecd70a2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad739d99edc827cdbe4b8ccef18e2b0c66347d2bd651e051b276c07ecd70a2ad->enter($__internal_ad739d99edc827cdbe4b8ccef18e2b0c66347d2bd651e051b276c07ecd70a2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_d4e01bf20060be7eed600eb3b9fd4f96cceda8585cadde425faf3347415f386a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e01bf20060be7eed600eb3b9fd4f96cceda8585cadde425faf3347415f386a->enter($__internal_d4e01bf20060be7eed600eb3b9fd4f96cceda8585cadde425faf3347415f386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad739d99edc827cdbe4b8ccef18e2b0c66347d2bd651e051b276c07ecd70a2ad->leave($__internal_ad739d99edc827cdbe4b8ccef18e2b0c66347d2bd651e051b276c07ecd70a2ad_prof);

        
        $__internal_d4e01bf20060be7eed600eb3b9fd4f96cceda8585cadde425faf3347415f386a->leave($__internal_d4e01bf20060be7eed600eb3b9fd4f96cceda8585cadde425faf3347415f386a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2e20d96309166883c8ba2cd1b8cb45fef919a603a6f1fc423eab0c0a1f7a906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e20d96309166883c8ba2cd1b8cb45fef919a603a6f1fc423eab0c0a1f7a906->enter($__internal_d2e20d96309166883c8ba2cd1b8cb45fef919a603a6f1fc423eab0c0a1f7a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9db3297970b09c79082ec155862e12279de6daef1f5a92853288252f53b31c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db3297970b09c79082ec155862e12279de6daef1f5a92853288252f53b31c2b->enter($__internal_9db3297970b09c79082ec155862e12279de6daef1f5a92853288252f53b31c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Startseite</h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
            Bitte oben auf ADD klicken!
        </div>

    ";
        } else {
            // line 17
            echo "

        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 19, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 20
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"/profile/username\">
                        username - ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">
                    Anzahl der Lauftage
                </div>

                <div class=\"trackerZeit\">
                    Gesamte bisher gelaufene Strecke
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "


    ";
        }
        // line 44
        echo "

";
        
        $__internal_9db3297970b09c79082ec155862e12279de6daef1f5a92853288252f53b31c2b->leave($__internal_9db3297970b09c79082ec155862e12279de6daef1f5a92853288252f53b31c2b_prof);

        
        $__internal_d2e20d96309166883c8ba2cd1b8cb45fef919a603a6f1fc423eab0c0a1f7a906->leave($__internal_d2e20d96309166883c8ba2cd1b8cb45fef919a603a6f1fc423eab0c0a1f7a906_prof);

    }

    public function getTemplateName()
    {
        return "gesamt.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  103 => 40,  82 => 25,  75 => 20,  71 => 19,  67 => 17,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Startseite</h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
            Bitte oben auf ADD klicken!
        </div>

    {% else %}


        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"/profile/username\">
                        username - {{ user.getUsername() }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">
                    Anzahl der Lauftage
                </div>

                <div class=\"trackerZeit\">
                    Gesamte bisher gelaufene Strecke
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
