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
        $__internal_cabcb255305579798ee306d0f4789db49ea884e48b56d09c92f5fecd442364b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabcb255305579798ee306d0f4789db49ea884e48b56d09c92f5fecd442364b1->enter($__internal_cabcb255305579798ee306d0f4789db49ea884e48b56d09c92f5fecd442364b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4060ff85716e2819ecfef05061255eb9dcf21992435a0e458f7d347f562977d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4060ff85716e2819ecfef05061255eb9dcf21992435a0e458f7d347f562977d4->enter($__internal_4060ff85716e2819ecfef05061255eb9dcf21992435a0e458f7d347f562977d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_cabcb255305579798ee306d0f4789db49ea884e48b56d09c92f5fecd442364b1->leave($__internal_cabcb255305579798ee306d0f4789db49ea884e48b56d09c92f5fecd442364b1_prof);

        
        $__internal_4060ff85716e2819ecfef05061255eb9dcf21992435a0e458f7d347f562977d4->leave($__internal_4060ff85716e2819ecfef05061255eb9dcf21992435a0e458f7d347f562977d4_prof);

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
", "@Twig/Exception/traces.xml.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
