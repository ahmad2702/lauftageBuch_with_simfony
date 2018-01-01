<?php

/* details.php.twig */
class __TwigTemplate_347b6c35c627c59023f64467268a3074cd55fe7ba8e1c366abd53af00b3f4a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "details.php.twig", 1);
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
        $__internal_332f4d00a8c0b3077baecef92c2bbb9daa4693b1335ce16491c626ed12ddd0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332f4d00a8c0b3077baecef92c2bbb9daa4693b1335ce16491c626ed12ddd0de->enter($__internal_332f4d00a8c0b3077baecef92c2bbb9daa4693b1335ce16491c626ed12ddd0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "details.php.twig"));

        $__internal_c4f216ca778d6be4c86d93bea52cfd8979618e5a3cba53f4198e84af00126ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f216ca778d6be4c86d93bea52cfd8979618e5a3cba53f4198e84af00126ba3->enter($__internal_c4f216ca778d6be4c86d93bea52cfd8979618e5a3cba53f4198e84af00126ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "details.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332f4d00a8c0b3077baecef92c2bbb9daa4693b1335ce16491c626ed12ddd0de->leave($__internal_332f4d00a8c0b3077baecef92c2bbb9daa4693b1335ce16491c626ed12ddd0de_prof);

        
        $__internal_c4f216ca778d6be4c86d93bea52cfd8979618e5a3cba53f4198e84af00126ba3->leave($__internal_c4f216ca778d6be4c86d93bea52cfd8979618e5a3cba53f4198e84af00126ba3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_17c485a088ec7c1b599273e3db0dc9b14ac446998da239240c1ee157d7608eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c485a088ec7c1b599273e3db0dc9b14ac446998da239240c1ee157d7608eda->enter($__internal_17c485a088ec7c1b599273e3db0dc9b14ac446998da239240c1ee157d7608eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d3d9bca6b4991d697cc7a696fc3a7b8e6cbd1017b9489c5cb104ce6033b6d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3d9bca6b4991d697cc7a696fc3a7b8e6cbd1017b9489c5cb104ce6033b6d9c->enter($__internal_2d3d9bca6b4991d697cc7a696fc3a7b8e6cbd1017b9489c5cb104ce6033b6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Detailansicht</h1>
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
        
        $__internal_2d3d9bca6b4991d697cc7a696fc3a7b8e6cbd1017b9489c5cb104ce6033b6d9c->leave($__internal_2d3d9bca6b4991d697cc7a696fc3a7b8e6cbd1017b9489c5cb104ce6033b6d9c_prof);

        
        $__internal_17c485a088ec7c1b599273e3db0dc9b14ac446998da239240c1ee157d7608eda->leave($__internal_17c485a088ec7c1b599273e3db0dc9b14ac446998da239240c1ee157d7608eda_prof);

    }

    public function getTemplateName()
    {
        return "details.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 54,  136 => 50,  124 => 44,  116 => 39,  111 => 36,  109 => 35,  105 => 34,  100 => 31,  98 => 30,  94 => 29,  87 => 25,  82 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Detailansicht</h1>
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


{% endblock %}", "details.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/details.php.twig");
    }
}
