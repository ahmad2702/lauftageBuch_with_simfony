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
        $__internal_6e2b015d1d698728880003599a6e2e716acc25032ca24992384dc35c9520c9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2b015d1d698728880003599a6e2e716acc25032ca24992384dc35c9520c9d6->enter($__internal_6e2b015d1d698728880003599a6e2e716acc25032ca24992384dc35c9520c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_0c24d83361e19b8201435aa32b965815522b5555fd82fd4441b235a3582610e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c24d83361e19b8201435aa32b965815522b5555fd82fd4441b235a3582610e8->enter($__internal_0c24d83361e19b8201435aa32b965815522b5555fd82fd4441b235a3582610e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_6e2b015d1d698728880003599a6e2e716acc25032ca24992384dc35c9520c9d6->leave($__internal_6e2b015d1d698728880003599a6e2e716acc25032ca24992384dc35c9520c9d6_prof);

        
        $__internal_0c24d83361e19b8201435aa32b965815522b5555fd82fd4441b235a3582610e8->leave($__internal_0c24d83361e19b8201435aa32b965815522b5555fd82fd4441b235a3582610e8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_86b8e0c91a20385a878a0631a54f9753ad70ae777e240bdabbfce979d649f0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b8e0c91a20385a878a0631a54f9753ad70ae777e240bdabbfce979d649f0e6->enter($__internal_86b8e0c91a20385a878a0631a54f9753ad70ae777e240bdabbfce979d649f0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9b3afca7fbdc18d710bcae54588c4dc87b39cd41e91e93cc31af9c803828fa23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3afca7fbdc18d710bcae54588c4dc87b39cd41e91e93cc31af9c803828fa23->enter($__internal_9b3afca7fbdc18d710bcae54588c4dc87b39cd41e91e93cc31af9c803828fa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9b3afca7fbdc18d710bcae54588c4dc87b39cd41e91e93cc31af9c803828fa23->leave($__internal_9b3afca7fbdc18d710bcae54588c4dc87b39cd41e91e93cc31af9c803828fa23_prof);

        
        $__internal_86b8e0c91a20385a878a0631a54f9753ad70ae777e240bdabbfce979d649f0e6->leave($__internal_86b8e0c91a20385a878a0631a54f9753ad70ae777e240bdabbfce979d649f0e6_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3fa21386ecfb13efb7545e31355be84598dbb29d22ee2ff1e9288b86f4c79568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa21386ecfb13efb7545e31355be84598dbb29d22ee2ff1e9288b86f4c79568->enter($__internal_3fa21386ecfb13efb7545e31355be84598dbb29d22ee2ff1e9288b86f4c79568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1dbb908b0babbd4754b65cfb1a6be3d79b765ea44ebf7cd14181e0deae8fcde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbb908b0babbd4754b65cfb1a6be3d79b765ea44ebf7cd14181e0deae8fcde3->enter($__internal_1dbb908b0babbd4754b65cfb1a6be3d79b765ea44ebf7cd14181e0deae8fcde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_1dbb908b0babbd4754b65cfb1a6be3d79b765ea44ebf7cd14181e0deae8fcde3->leave($__internal_1dbb908b0babbd4754b65cfb1a6be3d79b765ea44ebf7cd14181e0deae8fcde3_prof);

        
        $__internal_3fa21386ecfb13efb7545e31355be84598dbb29d22ee2ff1e9288b86f4c79568->leave($__internal_3fa21386ecfb13efb7545e31355be84598dbb29d22ee2ff1e9288b86f4c79568_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_435e397dc9d01e56f11d3c6c815b1c0d7389a9906fa294e63cf9d91bfdf2d371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435e397dc9d01e56f11d3c6c815b1c0d7389a9906fa294e63cf9d91bfdf2d371->enter($__internal_435e397dc9d01e56f11d3c6c815b1c0d7389a9906fa294e63cf9d91bfdf2d371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_2c6995de1b3c355fde4c79d18fec8110711268351b5020cda64f21c638e4092c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6995de1b3c355fde4c79d18fec8110711268351b5020cda64f21c638e4092c->enter($__internal_2c6995de1b3c355fde4c79d18fec8110711268351b5020cda64f21c638e4092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_2c6995de1b3c355fde4c79d18fec8110711268351b5020cda64f21c638e4092c->leave($__internal_2c6995de1b3c355fde4c79d18fec8110711268351b5020cda64f21c638e4092c_prof);

        
        $__internal_435e397dc9d01e56f11d3c6c815b1c0d7389a9906fa294e63cf9d91bfdf2d371->leave($__internal_435e397dc9d01e56f11d3c6c815b1c0d7389a9906fa294e63cf9d91bfdf2d371_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4f37712607202242cf55f178ed53cacd38463ecd37100d976cdbeca44fc98895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f37712607202242cf55f178ed53cacd38463ecd37100d976cdbeca44fc98895->enter($__internal_4f37712607202242cf55f178ed53cacd38463ecd37100d976cdbeca44fc98895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_22a7aa7000711f53b661c8932d0e7a0a8eb7064ce4f9ec8447822648b1dc712d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a7aa7000711f53b661c8932d0e7a0a8eb7064ce4f9ec8447822648b1dc712d->enter($__internal_22a7aa7000711f53b661c8932d0e7a0a8eb7064ce4f9ec8447822648b1dc712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_22a7aa7000711f53b661c8932d0e7a0a8eb7064ce4f9ec8447822648b1dc712d->leave($__internal_22a7aa7000711f53b661c8932d0e7a0a8eb7064ce4f9ec8447822648b1dc712d_prof);

        
        $__internal_4f37712607202242cf55f178ed53cacd38463ecd37100d976cdbeca44fc98895->leave($__internal_4f37712607202242cf55f178ed53cacd38463ecd37100d976cdbeca44fc98895_prof);

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
", "form_table_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
