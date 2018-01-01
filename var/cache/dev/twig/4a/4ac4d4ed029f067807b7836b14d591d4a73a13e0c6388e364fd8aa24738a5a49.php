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
        $__internal_9cbdcabb37bfc80ee1b71484b48babffeda7237b3b942ea721aa95bad8b32390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbdcabb37bfc80ee1b71484b48babffeda7237b3b942ea721aa95bad8b32390->enter($__internal_9cbdcabb37bfc80ee1b71484b48babffeda7237b3b942ea721aa95bad8b32390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_3b957d202e386e22c58be3476e192f0320c8412b54f6a0aed226b5aaa9e2ff96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b957d202e386e22c58be3476e192f0320c8412b54f6a0aed226b5aaa9e2ff96->enter($__internal_3b957d202e386e22c58be3476e192f0320c8412b54f6a0aed226b5aaa9e2ff96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cbdcabb37bfc80ee1b71484b48babffeda7237b3b942ea721aa95bad8b32390->leave($__internal_9cbdcabb37bfc80ee1b71484b48babffeda7237b3b942ea721aa95bad8b32390_prof);

        
        $__internal_3b957d202e386e22c58be3476e192f0320c8412b54f6a0aed226b5aaa9e2ff96->leave($__internal_3b957d202e386e22c58be3476e192f0320c8412b54f6a0aed226b5aaa9e2ff96_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_791fd98a07b35ef22dd7f48d9660ee5e96472307ac13ce0959faead35e95e410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791fd98a07b35ef22dd7f48d9660ee5e96472307ac13ce0959faead35e95e410->enter($__internal_791fd98a07b35ef22dd7f48d9660ee5e96472307ac13ce0959faead35e95e410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_00fa54e3991702c71fc3dae4d846181f298c3d715290b1333b94732440360952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fa54e3991702c71fc3dae4d846181f298c3d715290b1333b94732440360952->enter($__internal_00fa54e3991702c71fc3dae4d846181f298c3d715290b1333b94732440360952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            // line 18
            $context["gesamtK"] = 0;
            // line 19
            echo "        ";
            $context["gesamtZ"] = 0;
            // line 20
            echo "
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 21, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "
                    ";
                // line 23
                $context["gesamtK"] = ((isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 23, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 24
                echo "
                    ";
                // line 25
                $context["gesamtZ"] = ((isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 25, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"));
                // line 26
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "

        <div class=\"trennLinie\"></div>

        <div class=\"trackerLine\">
            <div class=\"trackerDatum1\">
                Anzahl der Lauftage: ";
            // line 35
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 35, $this->getSourceContext()); })())), "html", null, true);
            echo " <br>

                Gesamttage: ";
            // line 37
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 37, $this->getSourceContext()); })()), "getDay", array(), "method"), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 37, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
            echo "
            </div>

            <div class=\"trackerStrecke\">
                Insgesamt: ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo " km
            </div>

            <div class=\"trackerZeit\">
                Insgesamt: ";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo " s
            </div>

            <div class=\"trackerSpeed\">
                -
            </div>

            <div class=\"trackerRemove\">
                -
            </div>
        </div>

    ";
        }
        // line 58
        echo "

";
        
        $__internal_00fa54e3991702c71fc3dae4d846181f298c3d715290b1333b94732440360952->leave($__internal_00fa54e3991702c71fc3dae4d846181f298c3d715290b1333b94732440360952_prof);

        
        $__internal_791fd98a07b35ef22dd7f48d9660ee5e96472307ac13ce0959faead35e95e410->leave($__internal_791fd98a07b35ef22dd7f48d9660ee5e96472307ac13ce0959faead35e95e410_prof);

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
        return array (  143 => 58,  127 => 45,  120 => 41,  113 => 37,  108 => 35,  100 => 29,  92 => 26,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

        {% set gesamtK=0 %}
        {% set gesamtZ=0 %}

        {% for i in lines %}

                    {% set gesamtK=gesamtK+i.getStrecke() %}

                    {% set gesamtZ=gesamtZ+i.getZeit() %}


        {% endfor %}


        <div class=\"trennLinie\"></div>

        <div class=\"trackerLine\">
            <div class=\"trackerDatum1\">
                Anzahl der Lauftage: {{ lines|length }} <br>

                Gesamttage: {{ ((last.getDay() | date('U'))-(first.getDay() | date('U')))/86400 }}
            </div>

            <div class=\"trackerStrecke\">
                Insgesamt: {{ gesamtK }} km
            </div>

            <div class=\"trackerZeit\">
                Insgesamt: {{ gesamtZ }} s
            </div>

            <div class=\"trackerSpeed\">
                -
            </div>

            <div class=\"trackerRemove\">
                -
            </div>
        </div>

    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
