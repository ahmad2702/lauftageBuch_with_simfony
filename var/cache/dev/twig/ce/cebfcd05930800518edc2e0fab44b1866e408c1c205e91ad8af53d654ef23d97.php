<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_279fcf0ec341ef6728fc2646ce249f8026311dda0e437682d997ad6eec05931a extends Twig_Template
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
        $__internal_7a42c41440610255b47b88d7732dc66ff06bf0a569683180905b16d9319d899a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a42c41440610255b47b88d7732dc66ff06bf0a569683180905b16d9319d899a->enter($__internal_7a42c41440610255b47b88d7732dc66ff06bf0a569683180905b16d9319d899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_189dbdf1dbfd1cb8c121218dcc2ed942d7d26544a93ab186b7d937d3cab7c41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189dbdf1dbfd1cb8c121218dcc2ed942d7d26544a93ab186b7d937d3cab7c41e->enter($__internal_189dbdf1dbfd1cb8c121218dcc2ed942d7d26544a93ab186b7d937d3cab7c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7a42c41440610255b47b88d7732dc66ff06bf0a569683180905b16d9319d899a->leave($__internal_7a42c41440610255b47b88d7732dc66ff06bf0a569683180905b16d9319d899a_prof);

        
        $__internal_189dbdf1dbfd1cb8c121218dcc2ed942d7d26544a93ab186b7d937d3cab7c41e->leave($__internal_189dbdf1dbfd1cb8c121218dcc2ed942d7d26544a93ab186b7d937d3cab7c41e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
