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
        $__internal_b37cf7229dab669b2837bbfa88524f19e7922fee075a24fd0b61101e29707938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37cf7229dab669b2837bbfa88524f19e7922fee075a24fd0b61101e29707938->enter($__internal_b37cf7229dab669b2837bbfa88524f19e7922fee075a24fd0b61101e29707938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_34040d419e5288ee67157fc78d274698344e0646f7a8b968be3e77312fda0f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34040d419e5288ee67157fc78d274698344e0646f7a8b968be3e77312fda0f2b->enter($__internal_34040d419e5288ee67157fc78d274698344e0646f7a8b968be3e77312fda0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_b37cf7229dab669b2837bbfa88524f19e7922fee075a24fd0b61101e29707938->leave($__internal_b37cf7229dab669b2837bbfa88524f19e7922fee075a24fd0b61101e29707938_prof);

        
        $__internal_34040d419e5288ee67157fc78d274698344e0646f7a8b968be3e77312fda0f2b->leave($__internal_34040d419e5288ee67157fc78d274698344e0646f7a8b968be3e77312fda0f2b_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a3adb4c6779477c7570d7238860fe2d90fd9b998a3aff55d01d9473efe5fafef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3adb4c6779477c7570d7238860fe2d90fd9b998a3aff55d01d9473efe5fafef->enter($__internal_a3adb4c6779477c7570d7238860fe2d90fd9b998a3aff55d01d9473efe5fafef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_be397dd9f4b11655f76339885f4afd1a42e00eba6802c8a47868eb8eff8fa6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be397dd9f4b11655f76339885f4afd1a42e00eba6802c8a47868eb8eff8fa6ad->enter($__internal_be397dd9f4b11655f76339885f4afd1a42e00eba6802c8a47868eb8eff8fa6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_be397dd9f4b11655f76339885f4afd1a42e00eba6802c8a47868eb8eff8fa6ad->leave($__internal_be397dd9f4b11655f76339885f4afd1a42e00eba6802c8a47868eb8eff8fa6ad_prof);

        
        $__internal_a3adb4c6779477c7570d7238860fe2d90fd9b998a3aff55d01d9473efe5fafef->leave($__internal_a3adb4c6779477c7570d7238860fe2d90fd9b998a3aff55d01d9473efe5fafef_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6b7e56892cc2f60df4e94b7371d83a40fd1be6830c3a1211a21a4ab0dbd24fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7e56892cc2f60df4e94b7371d83a40fd1be6830c3a1211a21a4ab0dbd24fd1->enter($__internal_6b7e56892cc2f60df4e94b7371d83a40fd1be6830c3a1211a21a4ab0dbd24fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8ae8d50a674e54e9d54e937a5e5bceee577f9ebc7e18d7b2658469e8f6775497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae8d50a674e54e9d54e937a5e5bceee577f9ebc7e18d7b2658469e8f6775497->enter($__internal_8ae8d50a674e54e9d54e937a5e5bceee577f9ebc7e18d7b2658469e8f6775497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_8ae8d50a674e54e9d54e937a5e5bceee577f9ebc7e18d7b2658469e8f6775497->leave($__internal_8ae8d50a674e54e9d54e937a5e5bceee577f9ebc7e18d7b2658469e8f6775497_prof);

        
        $__internal_6b7e56892cc2f60df4e94b7371d83a40fd1be6830c3a1211a21a4ab0dbd24fd1->leave($__internal_6b7e56892cc2f60df4e94b7371d83a40fd1be6830c3a1211a21a4ab0dbd24fd1_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_133243c7e96573f03b65bf51a1049f046105b91fbbaabb8422eef3506c98e791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133243c7e96573f03b65bf51a1049f046105b91fbbaabb8422eef3506c98e791->enter($__internal_133243c7e96573f03b65bf51a1049f046105b91fbbaabb8422eef3506c98e791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_28d47df0d9626520b7aa5592ef43c546c60c1153c79c30c32723a4b651d700f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d47df0d9626520b7aa5592ef43c546c60c1153c79c30c32723a4b651d700f0->enter($__internal_28d47df0d9626520b7aa5592ef43c546c60c1153c79c30c32723a4b651d700f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_28d47df0d9626520b7aa5592ef43c546c60c1153c79c30c32723a4b651d700f0->leave($__internal_28d47df0d9626520b7aa5592ef43c546c60c1153c79c30c32723a4b651d700f0_prof);

        
        $__internal_133243c7e96573f03b65bf51a1049f046105b91fbbaabb8422eef3506c98e791->leave($__internal_133243c7e96573f03b65bf51a1049f046105b91fbbaabb8422eef3506c98e791_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c673d8644a0075ffba22eedaae71bf629729fc94c682f9fe2f0bad27bd448878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c673d8644a0075ffba22eedaae71bf629729fc94c682f9fe2f0bad27bd448878->enter($__internal_c673d8644a0075ffba22eedaae71bf629729fc94c682f9fe2f0bad27bd448878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7d89245d43bb262ad2c51fc5b90817c9f45de16c0ed494f928149fce277d38a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d89245d43bb262ad2c51fc5b90817c9f45de16c0ed494f928149fce277d38a4->enter($__internal_7d89245d43bb262ad2c51fc5b90817c9f45de16c0ed494f928149fce277d38a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_7d89245d43bb262ad2c51fc5b90817c9f45de16c0ed494f928149fce277d38a4->leave($__internal_7d89245d43bb262ad2c51fc5b90817c9f45de16c0ed494f928149fce277d38a4_prof);

        
        $__internal_c673d8644a0075ffba22eedaae71bf629729fc94c682f9fe2f0bad27bd448878->leave($__internal_c673d8644a0075ffba22eedaae71bf629729fc94c682f9fe2f0bad27bd448878_prof);

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
