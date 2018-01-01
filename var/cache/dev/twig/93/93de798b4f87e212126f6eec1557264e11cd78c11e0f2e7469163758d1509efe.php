<?php

/* profile.php.twig */
class __TwigTemplate_5d38ba0e1625edc5774d894ccc325643afd5cd25c1dbc90ac379d31cfcbcb4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "profile.php.twig", 1);
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
        $__internal_3af4bb98162a25fe85ef036635bc68138bd31f719cfd079636cd2ee7f5c98489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af4bb98162a25fe85ef036635bc68138bd31f719cfd079636cd2ee7f5c98489->enter($__internal_3af4bb98162a25fe85ef036635bc68138bd31f719cfd079636cd2ee7f5c98489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_39dfda3c2acb0d4c7723c22793425b587ecbf7e85229787a3536bcabe32e0d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dfda3c2acb0d4c7723c22793425b587ecbf7e85229787a3536bcabe32e0d61->enter($__internal_39dfda3c2acb0d4c7723c22793425b587ecbf7e85229787a3536bcabe32e0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af4bb98162a25fe85ef036635bc68138bd31f719cfd079636cd2ee7f5c98489->leave($__internal_3af4bb98162a25fe85ef036635bc68138bd31f719cfd079636cd2ee7f5c98489_prof);

        
        $__internal_39dfda3c2acb0d4c7723c22793425b587ecbf7e85229787a3536bcabe32e0d61->leave($__internal_39dfda3c2acb0d4c7723c22793425b587ecbf7e85229787a3536bcabe32e0d61_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_78184585c8b2f7ac8c5b994a41ecc4745332dadf3af27f0004b51d686cf262ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78184585c8b2f7ac8c5b994a41ecc4745332dadf3af27f0004b51d686cf262ca->enter($__internal_78184585c8b2f7ac8c5b994a41ecc4745332dadf3af27f0004b51d686cf262ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_efb85b63e7385dad576224b0bfe4b014a350a623c41fe2bbdd5d7a2eeda6e6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb85b63e7385dad576224b0bfe4b014a350a623c41fe2bbdd5d7a2eeda6e6c0->enter($__internal_efb85b63e7385dad576224b0bfe4b014a350a623c41fe2bbdd5d7a2eeda6e6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profile: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Die Liste ist noch leer. <br>
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
            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                echo "
                </div>

                <div class=\"trackerStrecke\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                echo " km
                    ";
                // line 30
                $context["gesamtK"] = ((isset($context["gesamtK"]) || array_key_exists("gesamtK", $context) ? $context["gesamtK"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtK" does not exist.', 30, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                // line 31
                echo "                </div>

                <div class=\"trackerZeit\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), "html", null, true);
                echo " s
                    ";
                // line 35
                $context["gesamtZ"] = ((isset($context["gesamtZ"]) || array_key_exists("gesamtZ", $context) ? $context["gesamtZ"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtZ" does not exist.', 35, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"));
                // line 36
                echo "                </div>

                <div class=\"trackerSpeed\">
                    ";
                // line 39
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                echo " m/s
                </div>

                <div class=\"trackerRemove\">
                    <form method=\"post\" action=\"functions/remove_element.php\">
                        <input type=\"hidden\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                echo "\" name=\"id\">
                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                    </form>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "


     ";
        }
        // line 54
        echo "

";
        
        $__internal_efb85b63e7385dad576224b0bfe4b014a350a623c41fe2bbdd5d7a2eeda6e6c0->leave($__internal_efb85b63e7385dad576224b0bfe4b014a350a623c41fe2bbdd5d7a2eeda6e6c0_prof);

        
        $__internal_78184585c8b2f7ac8c5b994a41ecc4745332dadf3af27f0004b51d686cf262ca->leave($__internal_78184585c8b2f7ac8c5b994a41ecc4745332dadf3af27f0004b51d686cf262ca_prof);

    }

    public function getTemplateName()
    {
        return "profile.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  139 => 50,  127 => 44,  119 => 39,  114 => 36,  112 => 35,  108 => 34,  103 => 31,  101 => 30,  97 => 29,  90 => 25,  85 => 22,  81 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  61 => 10,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profile: {{ profileName }} </h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Die Liste ist noch leer. <br>
            Bitte oben auf ADD klicken!
        </div>

    {% else %}

        {% set gesamtK=0 %}
        {% set gesamtZ=0 %}

        {% for i in lines %}

            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    {{ i.getDay() }}
                </div>

                <div class=\"trackerStrecke\">
                    {{ i.getStrecke() }} km
                    {% set gesamtK=gesamtK+i.getStrecke() %}
                </div>

                <div class=\"trackerZeit\">
                    {{ i.getZeit() }} s
                    {% set gesamtZ=gesamtZ+i.getZeit() %}
                </div>

                <div class=\"trackerSpeed\">
                    {{ i.getSpeed() | round(1, 'floor') }} m/s
                </div>

                <div class=\"trackerRemove\">
                    <form method=\"post\" action=\"functions/remove_element.php\">
                        <input type=\"hidden\" value=\"{{ i.getId() }}\" name=\"id\">
                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">
                    </form>
                </div>
            </div>
        {% endfor %}



     {% endif %}


{% endblock %}", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/profile.php.twig");
    }
}
