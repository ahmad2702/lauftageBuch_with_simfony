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
        $__internal_40e348864379c58fdf71a29dacc26829c6a1b087bdcbc09548e618ace833e65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e348864379c58fdf71a29dacc26829c6a1b087bdcbc09548e618ace833e65a->enter($__internal_40e348864379c58fdf71a29dacc26829c6a1b087bdcbc09548e618ace833e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_50045b88408c6b54448849859624368604340a0abce17383d1d0c091b6c94f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50045b88408c6b54448849859624368604340a0abce17383d1d0c091b6c94f98->enter($__internal_50045b88408c6b54448849859624368604340a0abce17383d1d0c091b6c94f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e348864379c58fdf71a29dacc26829c6a1b087bdcbc09548e618ace833e65a->leave($__internal_40e348864379c58fdf71a29dacc26829c6a1b087bdcbc09548e618ace833e65a_prof);

        
        $__internal_50045b88408c6b54448849859624368604340a0abce17383d1d0c091b6c94f98->leave($__internal_50045b88408c6b54448849859624368604340a0abce17383d1d0c091b6c94f98_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0c8503cd49bc2255b4cfea479c351d089efc1947893c1cc7b150bda0f3495fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c8503cd49bc2255b4cfea479c351d089efc1947893c1cc7b150bda0f3495fa->enter($__internal_b0c8503cd49bc2255b4cfea479c351d089efc1947893c1cc7b150bda0f3495fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_52790522824821b83f740cc32f0c56027206fa7323dc0485ea4ed4e95982966a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52790522824821b83f740cc32f0c56027206fa7323dc0485ea4ed4e95982966a->enter($__internal_52790522824821b83f740cc32f0c56027206fa7323dc0485ea4ed4e95982966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_52790522824821b83f740cc32f0c56027206fa7323dc0485ea4ed4e95982966a->leave($__internal_52790522824821b83f740cc32f0c56027206fa7323dc0485ea4ed4e95982966a_prof);

        
        $__internal_b0c8503cd49bc2255b4cfea479c351d089efc1947893c1cc7b150bda0f3495fa->leave($__internal_b0c8503cd49bc2255b4cfea479c351d089efc1947893c1cc7b150bda0f3495fa_prof);

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
