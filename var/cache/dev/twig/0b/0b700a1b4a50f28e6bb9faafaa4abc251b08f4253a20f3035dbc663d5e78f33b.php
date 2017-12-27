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
        $__internal_074a550d1a71be2341047ccf9b7070c5170b6f8cb43d56e24e96cf2a57da56b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074a550d1a71be2341047ccf9b7070c5170b6f8cb43d56e24e96cf2a57da56b2->enter($__internal_074a550d1a71be2341047ccf9b7070c5170b6f8cb43d56e24e96cf2a57da56b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_1223b861414cf5fba90a47aea1bbcdfff693dcf31743df20a9fa96d813b956c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1223b861414cf5fba90a47aea1bbcdfff693dcf31743df20a9fa96d813b956c1->enter($__internal_1223b861414cf5fba90a47aea1bbcdfff693dcf31743df20a9fa96d813b956c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_074a550d1a71be2341047ccf9b7070c5170b6f8cb43d56e24e96cf2a57da56b2->leave($__internal_074a550d1a71be2341047ccf9b7070c5170b6f8cb43d56e24e96cf2a57da56b2_prof);

        
        $__internal_1223b861414cf5fba90a47aea1bbcdfff693dcf31743df20a9fa96d813b956c1->leave($__internal_1223b861414cf5fba90a47aea1bbcdfff693dcf31743df20a9fa96d813b956c1_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0b771874fdeeaa8c9ab2c7329a75dbce2f267d5ebe30477d4432b49bc7bc0937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b771874fdeeaa8c9ab2c7329a75dbce2f267d5ebe30477d4432b49bc7bc0937->enter($__internal_0b771874fdeeaa8c9ab2c7329a75dbce2f267d5ebe30477d4432b49bc7bc0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5589264f42ebdb1170fd46e279908f49a4e655799c8ec5be50b572c059b50419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5589264f42ebdb1170fd46e279908f49a4e655799c8ec5be50b572c059b50419->enter($__internal_5589264f42ebdb1170fd46e279908f49a4e655799c8ec5be50b572c059b50419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5589264f42ebdb1170fd46e279908f49a4e655799c8ec5be50b572c059b50419->leave($__internal_5589264f42ebdb1170fd46e279908f49a4e655799c8ec5be50b572c059b50419_prof);

        
        $__internal_0b771874fdeeaa8c9ab2c7329a75dbce2f267d5ebe30477d4432b49bc7bc0937->leave($__internal_0b771874fdeeaa8c9ab2c7329a75dbce2f267d5ebe30477d4432b49bc7bc0937_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_863d6ada093b1e7050c99821dfb9c1d6f2ea8cfcb2d199fec1f05f7567f4464d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863d6ada093b1e7050c99821dfb9c1d6f2ea8cfcb2d199fec1f05f7567f4464d->enter($__internal_863d6ada093b1e7050c99821dfb9c1d6f2ea8cfcb2d199fec1f05f7567f4464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_46b3a239e04e68a9466f9044a1f825374a0297faa7079372121d6a5b9440f5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b3a239e04e68a9466f9044a1f825374a0297faa7079372121d6a5b9440f5a1->enter($__internal_46b3a239e04e68a9466f9044a1f825374a0297faa7079372121d6a5b9440f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_46b3a239e04e68a9466f9044a1f825374a0297faa7079372121d6a5b9440f5a1->leave($__internal_46b3a239e04e68a9466f9044a1f825374a0297faa7079372121d6a5b9440f5a1_prof);

        
        $__internal_863d6ada093b1e7050c99821dfb9c1d6f2ea8cfcb2d199fec1f05f7567f4464d->leave($__internal_863d6ada093b1e7050c99821dfb9c1d6f2ea8cfcb2d199fec1f05f7567f4464d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_7bc0ce3390935be412e70b29b585452d5e85f9c5151a3ed1809df83c244c244e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc0ce3390935be412e70b29b585452d5e85f9c5151a3ed1809df83c244c244e->enter($__internal_7bc0ce3390935be412e70b29b585452d5e85f9c5151a3ed1809df83c244c244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c1e5e590c2265c0b03a7fe4c527366a9295bd13b2dca712bd73f2b87fc833a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e5e590c2265c0b03a7fe4c527366a9295bd13b2dca712bd73f2b87fc833a72->enter($__internal_c1e5e590c2265c0b03a7fe4c527366a9295bd13b2dca712bd73f2b87fc833a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c1e5e590c2265c0b03a7fe4c527366a9295bd13b2dca712bd73f2b87fc833a72->leave($__internal_c1e5e590c2265c0b03a7fe4c527366a9295bd13b2dca712bd73f2b87fc833a72_prof);

        
        $__internal_7bc0ce3390935be412e70b29b585452d5e85f9c5151a3ed1809df83c244c244e->leave($__internal_7bc0ce3390935be412e70b29b585452d5e85f9c5151a3ed1809df83c244c244e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0bed0158356644879b6541dc673984a97366b877d88a5041117b6fff1313e70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bed0158356644879b6541dc673984a97366b877d88a5041117b6fff1313e70a->enter($__internal_0bed0158356644879b6541dc673984a97366b877d88a5041117b6fff1313e70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a34f0a0a9ebcad391992d2427440f47f435ff5b0c1e06299b2f85c8bfb74843e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34f0a0a9ebcad391992d2427440f47f435ff5b0c1e06299b2f85c8bfb74843e->enter($__internal_a34f0a0a9ebcad391992d2427440f47f435ff5b0c1e06299b2f85c8bfb74843e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_a34f0a0a9ebcad391992d2427440f47f435ff5b0c1e06299b2f85c8bfb74843e->leave($__internal_a34f0a0a9ebcad391992d2427440f47f435ff5b0c1e06299b2f85c8bfb74843e_prof);

        
        $__internal_0bed0158356644879b6541dc673984a97366b877d88a5041117b6fff1313e70a->leave($__internal_0bed0158356644879b6541dc673984a97366b877d88a5041117b6fff1313e70a_prof);

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
