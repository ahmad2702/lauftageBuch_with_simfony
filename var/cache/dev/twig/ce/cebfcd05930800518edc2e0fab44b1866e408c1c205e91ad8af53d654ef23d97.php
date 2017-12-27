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
        $__internal_9f5d232f0955127b5d555181001fbb59096a2be56acaa8108626fcbf05c133a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5d232f0955127b5d555181001fbb59096a2be56acaa8108626fcbf05c133a2->enter($__internal_9f5d232f0955127b5d555181001fbb59096a2be56acaa8108626fcbf05c133a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_6f529f340116a2efb45c69d0f9af89e74fb751d738bd2b48714de2a17a51de69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f529f340116a2efb45c69d0f9af89e74fb751d738bd2b48714de2a17a51de69->enter($__internal_6f529f340116a2efb45c69d0f9af89e74fb751d738bd2b48714de2a17a51de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_9f5d232f0955127b5d555181001fbb59096a2be56acaa8108626fcbf05c133a2->leave($__internal_9f5d232f0955127b5d555181001fbb59096a2be56acaa8108626fcbf05c133a2_prof);

        
        $__internal_6f529f340116a2efb45c69d0f9af89e74fb751d738bd2b48714de2a17a51de69->leave($__internal_6f529f340116a2efb45c69d0f9af89e74fb751d738bd2b48714de2a17a51de69_prof);

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
