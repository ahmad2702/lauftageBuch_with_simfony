<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f47906019dfc768b9c2fdf2a448d6476652fdd380083598073fb9566b3720924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59bc91c9b93bc14b56aaf680bb107df4d5fedef4901773a3c24b0087b4b6e8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59bc91c9b93bc14b56aaf680bb107df4d5fedef4901773a3c24b0087b4b6e8bf->enter($__internal_59bc91c9b93bc14b56aaf680bb107df4d5fedef4901773a3c24b0087b4b6e8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9ff26114de422246f58acd76ade7f266afd9f53e0526f2a4f00426b5312ea713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff26114de422246f58acd76ade7f266afd9f53e0526f2a4f00426b5312ea713->enter($__internal_9ff26114de422246f58acd76ade7f266afd9f53e0526f2a4f00426b5312ea713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_59bc91c9b93bc14b56aaf680bb107df4d5fedef4901773a3c24b0087b4b6e8bf->leave($__internal_59bc91c9b93bc14b56aaf680bb107df4d5fedef4901773a3c24b0087b4b6e8bf_prof);

        
        $__internal_9ff26114de422246f58acd76ade7f266afd9f53e0526f2a4f00426b5312ea713->leave($__internal_9ff26114de422246f58acd76ade7f266afd9f53e0526f2a4f00426b5312ea713_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_713f25c634bf8e5e7302c8eae1a9db141728d8ffbe29e525be72c403298724be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713f25c634bf8e5e7302c8eae1a9db141728d8ffbe29e525be72c403298724be->enter($__internal_713f25c634bf8e5e7302c8eae1a9db141728d8ffbe29e525be72c403298724be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6463c92318955610fb03b1fba5db34cf1c6fcbe5bf2d521cc97c6d1a7155893f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6463c92318955610fb03b1fba5db34cf1c6fcbe5bf2d521cc97c6d1a7155893f->enter($__internal_6463c92318955610fb03b1fba5db34cf1c6fcbe5bf2d521cc97c6d1a7155893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_6463c92318955610fb03b1fba5db34cf1c6fcbe5bf2d521cc97c6d1a7155893f->leave($__internal_6463c92318955610fb03b1fba5db34cf1c6fcbe5bf2d521cc97c6d1a7155893f_prof);

        
        $__internal_713f25c634bf8e5e7302c8eae1a9db141728d8ffbe29e525be72c403298724be->leave($__internal_713f25c634bf8e5e7302c8eae1a9db141728d8ffbe29e525be72c403298724be_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ddc12e491fc92c5371c3a002057899520317847a06291d9f49759166c06fcb0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc12e491fc92c5371c3a002057899520317847a06291d9f49759166c06fcb0b->enter($__internal_ddc12e491fc92c5371c3a002057899520317847a06291d9f49759166c06fcb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bb809e81d7ff28a490f14b06d0846745f12c56a003185c3fb66940b5a769cfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb809e81d7ff28a490f14b06d0846745f12c56a003185c3fb66940b5a769cfbb->enter($__internal_bb809e81d7ff28a490f14b06d0846745f12c56a003185c3fb66940b5a769cfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_bb809e81d7ff28a490f14b06d0846745f12c56a003185c3fb66940b5a769cfbb->leave($__internal_bb809e81d7ff28a490f14b06d0846745f12c56a003185c3fb66940b5a769cfbb_prof);

        
        $__internal_ddc12e491fc92c5371c3a002057899520317847a06291d9f49759166c06fcb0b->leave($__internal_ddc12e491fc92c5371c3a002057899520317847a06291d9f49759166c06fcb0b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_219f1be3c9ed2822f07bda80164ee33a0b84977de1ebf825164229f224891fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219f1be3c9ed2822f07bda80164ee33a0b84977de1ebf825164229f224891fd0->enter($__internal_219f1be3c9ed2822f07bda80164ee33a0b84977de1ebf825164229f224891fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_013fea67e8211485279b2876a9d13ec1de8847084f5d32f12d798df980c8371e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013fea67e8211485279b2876a9d13ec1de8847084f5d32f12d798df980c8371e->enter($__internal_013fea67e8211485279b2876a9d13ec1de8847084f5d32f12d798df980c8371e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_013fea67e8211485279b2876a9d13ec1de8847084f5d32f12d798df980c8371e->leave($__internal_013fea67e8211485279b2876a9d13ec1de8847084f5d32f12d798df980c8371e_prof);

        
        $__internal_219f1be3c9ed2822f07bda80164ee33a0b84977de1ebf825164229f224891fd0->leave($__internal_219f1be3c9ed2822f07bda80164ee33a0b84977de1ebf825164229f224891fd0_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_69f31dc9beabc75f04c2b39d9744e9e188be6b7b6554cf3552f08676d2143fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f31dc9beabc75f04c2b39d9744e9e188be6b7b6554cf3552f08676d2143fbe->enter($__internal_69f31dc9beabc75f04c2b39d9744e9e188be6b7b6554cf3552f08676d2143fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_47a0d55bb61fd90707b89d29d74bb0ac506460a66cbe5270b31310edcf471cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a0d55bb61fd90707b89d29d74bb0ac506460a66cbe5270b31310edcf471cf2->enter($__internal_47a0d55bb61fd90707b89d29d74bb0ac506460a66cbe5270b31310edcf471cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_47a0d55bb61fd90707b89d29d74bb0ac506460a66cbe5270b31310edcf471cf2->leave($__internal_47a0d55bb61fd90707b89d29d74bb0ac506460a66cbe5270b31310edcf471cf2_prof);

        
        $__internal_69f31dc9beabc75f04c2b39d9744e9e188be6b7b6554cf3552f08676d2143fbe->leave($__internal_69f31dc9beabc75f04c2b39d9744e9e188be6b7b6554cf3552f08676d2143fbe_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
