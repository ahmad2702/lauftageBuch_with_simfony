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
        $__internal_4a8506e41462933bfffb10a09e26a054e063ae9b86ab554000c6c42f67a24cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8506e41462933bfffb10a09e26a054e063ae9b86ab554000c6c42f67a24cd8->enter($__internal_4a8506e41462933bfffb10a09e26a054e063ae9b86ab554000c6c42f67a24cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_e1e9ad210063f835ca085ea45805c815767ce79ebfaa76edb951ca795a700244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e9ad210063f835ca085ea45805c815767ce79ebfaa76edb951ca795a700244->enter($__internal_e1e9ad210063f835ca085ea45805c815767ce79ebfaa76edb951ca795a700244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4a8506e41462933bfffb10a09e26a054e063ae9b86ab554000c6c42f67a24cd8->leave($__internal_4a8506e41462933bfffb10a09e26a054e063ae9b86ab554000c6c42f67a24cd8_prof);

        
        $__internal_e1e9ad210063f835ca085ea45805c815767ce79ebfaa76edb951ca795a700244->leave($__internal_e1e9ad210063f835ca085ea45805c815767ce79ebfaa76edb951ca795a700244_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5681af483ee665f63e370f05e7ced470a82fc91d772e681a50a8845cdd5063b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5681af483ee665f63e370f05e7ced470a82fc91d772e681a50a8845cdd5063b8->enter($__internal_5681af483ee665f63e370f05e7ced470a82fc91d772e681a50a8845cdd5063b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b04a9cf63938661a9fbbea241b3dd3e97e6baef4608644057e714d75e5049c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04a9cf63938661a9fbbea241b3dd3e97e6baef4608644057e714d75e5049c26->enter($__internal_b04a9cf63938661a9fbbea241b3dd3e97e6baef4608644057e714d75e5049c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b04a9cf63938661a9fbbea241b3dd3e97e6baef4608644057e714d75e5049c26->leave($__internal_b04a9cf63938661a9fbbea241b3dd3e97e6baef4608644057e714d75e5049c26_prof);

        
        $__internal_5681af483ee665f63e370f05e7ced470a82fc91d772e681a50a8845cdd5063b8->leave($__internal_5681af483ee665f63e370f05e7ced470a82fc91d772e681a50a8845cdd5063b8_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f19d5ba83bc49ad4d170fc5360a3253c06031c36479e4499dd4880799c2a8fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19d5ba83bc49ad4d170fc5360a3253c06031c36479e4499dd4880799c2a8fd6->enter($__internal_f19d5ba83bc49ad4d170fc5360a3253c06031c36479e4499dd4880799c2a8fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_83c7575ee727c07f3787b603d8f11cf3d9331e14a01cacf8b5205e8659ac1e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c7575ee727c07f3787b603d8f11cf3d9331e14a01cacf8b5205e8659ac1e90->enter($__internal_83c7575ee727c07f3787b603d8f11cf3d9331e14a01cacf8b5205e8659ac1e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_83c7575ee727c07f3787b603d8f11cf3d9331e14a01cacf8b5205e8659ac1e90->leave($__internal_83c7575ee727c07f3787b603d8f11cf3d9331e14a01cacf8b5205e8659ac1e90_prof);

        
        $__internal_f19d5ba83bc49ad4d170fc5360a3253c06031c36479e4499dd4880799c2a8fd6->leave($__internal_f19d5ba83bc49ad4d170fc5360a3253c06031c36479e4499dd4880799c2a8fd6_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_7547d0f32e119c6bdcafed9ae226b1f915a9f8e04eeead7bcd0e4c5e42e1f328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7547d0f32e119c6bdcafed9ae226b1f915a9f8e04eeead7bcd0e4c5e42e1f328->enter($__internal_7547d0f32e119c6bdcafed9ae226b1f915a9f8e04eeead7bcd0e4c5e42e1f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_dd5c0a4f74b0a3afa8576714cc8aef403df67155ea6fc152db27144b966fd22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5c0a4f74b0a3afa8576714cc8aef403df67155ea6fc152db27144b966fd22a->enter($__internal_dd5c0a4f74b0a3afa8576714cc8aef403df67155ea6fc152db27144b966fd22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_dd5c0a4f74b0a3afa8576714cc8aef403df67155ea6fc152db27144b966fd22a->leave($__internal_dd5c0a4f74b0a3afa8576714cc8aef403df67155ea6fc152db27144b966fd22a_prof);

        
        $__internal_7547d0f32e119c6bdcafed9ae226b1f915a9f8e04eeead7bcd0e4c5e42e1f328->leave($__internal_7547d0f32e119c6bdcafed9ae226b1f915a9f8e04eeead7bcd0e4c5e42e1f328_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_18f1d66d5de82c78d9da9369a286cc274ebee6ca6c830a174e2f5cc7326c0be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f1d66d5de82c78d9da9369a286cc274ebee6ca6c830a174e2f5cc7326c0be7->enter($__internal_18f1d66d5de82c78d9da9369a286cc274ebee6ca6c830a174e2f5cc7326c0be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d5a1497a14f5313f8a05a6eaf4627da7e839d37ff386f52b529514ac63c1a58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a1497a14f5313f8a05a6eaf4627da7e839d37ff386f52b529514ac63c1a58e->enter($__internal_d5a1497a14f5313f8a05a6eaf4627da7e839d37ff386f52b529514ac63c1a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d5a1497a14f5313f8a05a6eaf4627da7e839d37ff386f52b529514ac63c1a58e->leave($__internal_d5a1497a14f5313f8a05a6eaf4627da7e839d37ff386f52b529514ac63c1a58e_prof);

        
        $__internal_18f1d66d5de82c78d9da9369a286cc274ebee6ca6c830a174e2f5cc7326c0be7->leave($__internal_18f1d66d5de82c78d9da9369a286cc274ebee6ca6c830a174e2f5cc7326c0be7_prof);

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
