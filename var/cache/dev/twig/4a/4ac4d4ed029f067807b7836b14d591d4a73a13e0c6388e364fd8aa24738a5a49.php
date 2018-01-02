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
        $__internal_b4994d008db02764a493ea1193745ce2c578336ed677d531713ff1f7eb2a8d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4994d008db02764a493ea1193745ce2c578336ed677d531713ff1f7eb2a8d65->enter($__internal_b4994d008db02764a493ea1193745ce2c578336ed677d531713ff1f7eb2a8d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_fee6a18db7673ca3cd0a82a8b7af6dc61b83c714c63f28ca472aa810ee899bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee6a18db7673ca3cd0a82a8b7af6dc61b83c714c63f28ca472aa810ee899bcd->enter($__internal_fee6a18db7673ca3cd0a82a8b7af6dc61b83c714c63f28ca472aa810ee899bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4994d008db02764a493ea1193745ce2c578336ed677d531713ff1f7eb2a8d65->leave($__internal_b4994d008db02764a493ea1193745ce2c578336ed677d531713ff1f7eb2a8d65_prof);

        
        $__internal_fee6a18db7673ca3cd0a82a8b7af6dc61b83c714c63f28ca472aa810ee899bcd->leave($__internal_fee6a18db7673ca3cd0a82a8b7af6dc61b83c714c63f28ca472aa810ee899bcd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb437e33afdc6b8e2e658732359d04487cafb996df429f93c348f7005218f485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb437e33afdc6b8e2e658732359d04487cafb996df429f93c348f7005218f485->enter($__internal_bb437e33afdc6b8e2e658732359d04487cafb996df429f93c348f7005218f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cd644ea423069e95374f554d24af1e71a65813a7b46178936990af7f3ffa9abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd644ea423069e95374f554d24af1e71a65813a7b46178936990af7f3ffa9abb->enter($__internal_cd644ea423069e95374f554d24af1e71a65813a7b46178936990af7f3ffa9abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    ";
        } else {
            // line 16
            echo "

        ";
            // line 18
            $context["gesamtStrecke_alex"] = 0;
            // line 19
            echo "        ";
            $context["gesamtStrecke_jan"] = 0;
            // line 20
            echo "        ";
            $context["gesamtStrecke_tim"] = 0;
            // line 21
            echo "        ";
            $context["gesamtStrecke_michael"] = 0;
            // line 22
            echo "
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 23, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 24
                echo "            ";
                $context["gesamtStrecke_alex"] = ((isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 24, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 27, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 28
                echo "            ";
                $context["gesamtStrecke_jan"] = ((isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 28, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 31, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 32
                echo "            ";
                $context["gesamtStrecke_tim"] = ((isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 32, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["michael"]) || array_key_exists("michael", $context) ? $context["michael"] : (function () { throw new Twig_Error_Runtime('Variable "michael" does not exist.', 35, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 36
                echo "            ";
                $context["gesamtStrecke_michael"] = ((isset($context["gesamtStrecke_michael"]) || array_key_exists("gesamtStrecke_michael", $context) ? $context["gesamtStrecke_michael"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_michael" does not exist.', 36, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getStrecke", array(), "method"));
                // line 37
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "

        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 57, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 58
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"))), "html", null, true);
                echo "\">
                        <br>
                        ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    ";
                // line 70
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 71
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["alex"]) || array_key_exists("alex", $context) ? $context["alex"] : (function () { throw new Twig_Error_Runtime('Variable "alex" does not exist.', 71, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 72
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 73
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["jan"]) || array_key_exists("jan", $context) ? $context["jan"] : (function () { throw new Twig_Error_Runtime('Variable "jan" does not exist.', 73, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 74
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 75
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tim"]) || array_key_exists("tim", $context) ? $context["tim"] : (function () { throw new Twig_Error_Runtime('Variable "tim" does not exist.', 75, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 76
$context["user"], "getUsername", array(), "method") == "michael")) {
                    // line 77
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["michael"]) || array_key_exists("michael", $context) ? $context["michael"] : (function () { throw new Twig_Error_Runtime('Variable "michael" does not exist.', 77, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    ";
                }
                // line 79
                echo "                    tage
                </div>

                <div class=\"trackerZeit\">

                    ";
                // line 84
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "getUsername", array(), "method") == "alex")) {
                    // line 85
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_alex"]) || array_key_exists("gesamtStrecke_alex", $context) ? $context["gesamtStrecke_alex"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_alex" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 86
$context["user"], "getUsername", array(), "method") == "jan")) {
                    // line 87
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_jan"]) || array_key_exists("gesamtStrecke_jan", $context) ? $context["gesamtStrecke_jan"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_jan" does not exist.', 87, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 88
$context["user"], "getUsername", array(), "method") == "tim")) {
                    // line 89
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_tim"]) || array_key_exists("gesamtStrecke_tim", $context) ? $context["gesamtStrecke_tim"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_tim" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 90
$context["user"], "getUsername", array(), "method") == "michael")) {
                    // line 91
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["gesamtStrecke_michael"]) || array_key_exists("gesamtStrecke_michael", $context) ? $context["gesamtStrecke_michael"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStrecke_michael" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
                    echo "
                    ";
                }
                // line 93
                echo "                    km
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "


    ";
        }
        // line 103
        echo "

";
        
        $__internal_cd644ea423069e95374f554d24af1e71a65813a7b46178936990af7f3ffa9abb->leave($__internal_cd644ea423069e95374f554d24af1e71a65813a7b46178936990af7f3ffa9abb_prof);

        
        $__internal_bb437e33afdc6b8e2e658732359d04487cafb996df429f93c348f7005218f485->leave($__internal_bb437e33afdc6b8e2e658732359d04487cafb996df429f93c348f7005218f485_prof);

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
        return array (  272 => 103,  266 => 99,  255 => 93,  249 => 91,  247 => 90,  242 => 89,  240 => 88,  235 => 87,  233 => 86,  228 => 85,  226 => 84,  219 => 79,  213 => 77,  211 => 76,  206 => 75,  204 => 74,  199 => 73,  197 => 72,  192 => 71,  190 => 70,  181 => 64,  176 => 62,  170 => 58,  166 => 57,  145 => 38,  139 => 37,  136 => 36,  132 => 35,  129 => 34,  123 => 33,  120 => 32,  116 => 31,  113 => 30,  107 => 29,  104 => 28,  100 => 27,  97 => 26,  91 => 25,  88 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    {% else %}


        {% set gesamtStrecke_alex=0 %}
        {% set gesamtStrecke_jan=0 %}
        {% set gesamtStrecke_tim=0 %}
        {% set gesamtStrecke_michael=0 %}

        {% for user in alex %}
            {% set gesamtStrecke_alex=gesamtStrecke_alex+user.getStrecke() %}
        {% endfor %}

        {% for user in jan %}
            {% set gesamtStrecke_jan=gesamtStrecke_jan+user.getStrecke() %}
        {% endfor %}

        {% for user in tim %}
            {% set gesamtStrecke_tim=gesamtStrecke_tim+user.getStrecke() %}
        {% endfor %}

        {% for user in michael %}
            {% set gesamtStrecke_michael=gesamtStrecke_michael+user.getStrecke() %}
        {% endfor %}


        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"{{ path('profile', { name : user.getUsername() }) }}\">
                        <br>
                        {{ user.getUsername() }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    {% if user.getUsername()==\"alex\" %}
                        {{ alex|length }}
                    {% elseif user.getUsername()==\"jan\" %}
                        {{ jan|length }}
                    {% elseif user.getUsername()==\"tim\" %}
                        {{ tim|length }}
                    {% elseif user.getUsername()==\"michael\" %}
                        {{ michael|length }}
                    {% endif %}
                    tage
                </div>

                <div class=\"trackerZeit\">

                    {% if user.getUsername()==\"alex\" %}
                        {{ gesamtStrecke_alex }}
                    {% elseif user.getUsername()==\"jan\" %}
                        {{ gesamtStrecke_jan }}
                    {% elseif user.getUsername()==\"tim\" %}
                        {{ gesamtStrecke_tim }}
                    {% elseif user.getUsername()==\"michael\" %}
                        {{ gesamtStrecke_michael }}
                    {% endif %}
                    km
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/gesamt.php.twig");
    }
}
