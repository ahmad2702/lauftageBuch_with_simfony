<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_8eeed296d7ad3676454b0c5f2e60cb2783a342ba810dcccb56a0c15236240940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fb65b63cda67fe2adeb2de394fd6f9a9295c0f8e6ca7d3077087dfb8e03e179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb65b63cda67fe2adeb2de394fd6f9a9295c0f8e6ca7d3077087dfb8e03e179->enter($__internal_1fb65b63cda67fe2adeb2de394fd6f9a9295c0f8e6ca7d3077087dfb8e03e179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d860b070185a80abd1e3d2db82687b9a528175c90131d51ad83fb94170e54018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d860b070185a80abd1e3d2db82687b9a528175c90131d51ad83fb94170e54018->enter($__internal_d860b070185a80abd1e3d2db82687b9a528175c90131d51ad83fb94170e54018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1fb65b63cda67fe2adeb2de394fd6f9a9295c0f8e6ca7d3077087dfb8e03e179->leave($__internal_1fb65b63cda67fe2adeb2de394fd6f9a9295c0f8e6ca7d3077087dfb8e03e179_prof);

        
        $__internal_d860b070185a80abd1e3d2db82687b9a528175c90131d51ad83fb94170e54018->leave($__internal_d860b070185a80abd1e3d2db82687b9a528175c90131d51ad83fb94170e54018_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9bcca73af941b4acfcf38a87e6e75a82c3d2025a7bab314f7687d5b6f3a715b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcca73af941b4acfcf38a87e6e75a82c3d2025a7bab314f7687d5b6f3a715b3->enter($__internal_9bcca73af941b4acfcf38a87e6e75a82c3d2025a7bab314f7687d5b6f3a715b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b936892b5f6e11d05b13a73da40f7a8eac76aae7dff1873cbdabf06d1d50f6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b936892b5f6e11d05b13a73da40f7a8eac76aae7dff1873cbdabf06d1d50f6e3->enter($__internal_b936892b5f6e11d05b13a73da40f7a8eac76aae7dff1873cbdabf06d1d50f6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b936892b5f6e11d05b13a73da40f7a8eac76aae7dff1873cbdabf06d1d50f6e3->leave($__internal_b936892b5f6e11d05b13a73da40f7a8eac76aae7dff1873cbdabf06d1d50f6e3_prof);

        
        $__internal_9bcca73af941b4acfcf38a87e6e75a82c3d2025a7bab314f7687d5b6f3a715b3->leave($__internal_9bcca73af941b4acfcf38a87e6e75a82c3d2025a7bab314f7687d5b6f3a715b3_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1f9ec670a341bc1d684f86e0a4bd52d17059b84fcf8d1194581884dcdb2c47cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9ec670a341bc1d684f86e0a4bd52d17059b84fcf8d1194581884dcdb2c47cc->enter($__internal_1f9ec670a341bc1d684f86e0a4bd52d17059b84fcf8d1194581884dcdb2c47cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e31a9be9123940b8eeb3e72e1702b3278ecce9ca15ff0c7a924804d23dfe583f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31a9be9123940b8eeb3e72e1702b3278ecce9ca15ff0c7a924804d23dfe583f->enter($__internal_e31a9be9123940b8eeb3e72e1702b3278ecce9ca15ff0c7a924804d23dfe583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e31a9be9123940b8eeb3e72e1702b3278ecce9ca15ff0c7a924804d23dfe583f->leave($__internal_e31a9be9123940b8eeb3e72e1702b3278ecce9ca15ff0c7a924804d23dfe583f_prof);

        
        $__internal_1f9ec670a341bc1d684f86e0a4bd52d17059b84fcf8d1194581884dcdb2c47cc->leave($__internal_1f9ec670a341bc1d684f86e0a4bd52d17059b84fcf8d1194581884dcdb2c47cc_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d3e928903098daeebc9cc1a3888e386c79e3f12e320851924e18932400777897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e928903098daeebc9cc1a3888e386c79e3f12e320851924e18932400777897->enter($__internal_d3e928903098daeebc9cc1a3888e386c79e3f12e320851924e18932400777897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b521038a3145aea7fa0876c320abb18330d95141dd5a70f9b8a32868a9fb12d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b521038a3145aea7fa0876c320abb18330d95141dd5a70f9b8a32868a9fb12d5->enter($__internal_b521038a3145aea7fa0876c320abb18330d95141dd5a70f9b8a32868a9fb12d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_b521038a3145aea7fa0876c320abb18330d95141dd5a70f9b8a32868a9fb12d5->leave($__internal_b521038a3145aea7fa0876c320abb18330d95141dd5a70f9b8a32868a9fb12d5_prof);

        
        $__internal_d3e928903098daeebc9cc1a3888e386c79e3f12e320851924e18932400777897->leave($__internal_d3e928903098daeebc9cc1a3888e386c79e3f12e320851924e18932400777897_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6cb6523629e80a6f4f152185b1b5b33efd535d9504f39f42bd55274d98d4ccf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb6523629e80a6f4f152185b1b5b33efd535d9504f39f42bd55274d98d4ccf5->enter($__internal_6cb6523629e80a6f4f152185b1b5b33efd535d9504f39f42bd55274d98d4ccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2600451b3a2777e2037897d6e8c5fa0d28e8d9d491b0a8cb6d105494b4940db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2600451b3a2777e2037897d6e8c5fa0d28e8d9d491b0a8cb6d105494b4940db3->enter($__internal_2600451b3a2777e2037897d6e8c5fa0d28e8d9d491b0a8cb6d105494b4940db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_2600451b3a2777e2037897d6e8c5fa0d28e8d9d491b0a8cb6d105494b4940db3->leave($__internal_2600451b3a2777e2037897d6e8c5fa0d28e8d9d491b0a8cb6d105494b4940db3_prof);

        
        $__internal_6cb6523629e80a6f4f152185b1b5b33efd535d9504f39f42bd55274d98d4ccf5->leave($__internal_6cb6523629e80a6f4f152185b1b5b33efd535d9504f39f42bd55274d98d4ccf5_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eccc2d31b83a4dd596617c8fea4253ab537dce27571f786def9920c1871a9cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccc2d31b83a4dd596617c8fea4253ab537dce27571f786def9920c1871a9cdc->enter($__internal_eccc2d31b83a4dd596617c8fea4253ab537dce27571f786def9920c1871a9cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e596e93f65b204922689af064ebc16178d459456479bae2d75c871c4095caaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e596e93f65b204922689af064ebc16178d459456479bae2d75c871c4095caaa2->enter($__internal_e596e93f65b204922689af064ebc16178d459456479bae2d75c871c4095caaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e596e93f65b204922689af064ebc16178d459456479bae2d75c871c4095caaa2->leave($__internal_e596e93f65b204922689af064ebc16178d459456479bae2d75c871c4095caaa2_prof);

        
        $__internal_eccc2d31b83a4dd596617c8fea4253ab537dce27571f786def9920c1871a9cdc->leave($__internal_eccc2d31b83a4dd596617c8fea4253ab537dce27571f786def9920c1871a9cdc_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_884fed5242f56b46a9d01a71b67be61cc644063758c766f803f248f922f11bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884fed5242f56b46a9d01a71b67be61cc644063758c766f803f248f922f11bbc->enter($__internal_884fed5242f56b46a9d01a71b67be61cc644063758c766f803f248f922f11bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_aff49c5b91f5fd0586327dd40ff73d60e8e249431cdc9770aecbdce9640875fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff49c5b91f5fd0586327dd40ff73d60e8e249431cdc9770aecbdce9640875fd->enter($__internal_aff49c5b91f5fd0586327dd40ff73d60e8e249431cdc9770aecbdce9640875fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_aff49c5b91f5fd0586327dd40ff73d60e8e249431cdc9770aecbdce9640875fd->leave($__internal_aff49c5b91f5fd0586327dd40ff73d60e8e249431cdc9770aecbdce9640875fd_prof);

        
        $__internal_884fed5242f56b46a9d01a71b67be61cc644063758c766f803f248f922f11bbc->leave($__internal_884fed5242f56b46a9d01a71b67be61cc644063758c766f803f248f922f11bbc_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_811e198bbff18aa84a07d04fe0c2690f593708d5e85547ec3e5041d1e973de1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811e198bbff18aa84a07d04fe0c2690f593708d5e85547ec3e5041d1e973de1b->enter($__internal_811e198bbff18aa84a07d04fe0c2690f593708d5e85547ec3e5041d1e973de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_bdfbda17b634f8dd2b7473f3ddc52799b3eaffda502b7bd9c0c37ba03dd01b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfbda17b634f8dd2b7473f3ddc52799b3eaffda502b7bd9c0c37ba03dd01b1f->enter($__internal_bdfbda17b634f8dd2b7473f3ddc52799b3eaffda502b7bd9c0c37ba03dd01b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bdfbda17b634f8dd2b7473f3ddc52799b3eaffda502b7bd9c0c37ba03dd01b1f->leave($__internal_bdfbda17b634f8dd2b7473f3ddc52799b3eaffda502b7bd9c0c37ba03dd01b1f_prof);

        
        $__internal_811e198bbff18aa84a07d04fe0c2690f593708d5e85547ec3e5041d1e973de1b->leave($__internal_811e198bbff18aa84a07d04fe0c2690f593708d5e85547ec3e5041d1e973de1b_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9d80c8170d70b7538fc3b8ed2d6975d028ad81c675db1cc47cdac7fba14e7e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d80c8170d70b7538fc3b8ed2d6975d028ad81c675db1cc47cdac7fba14e7e20->enter($__internal_9d80c8170d70b7538fc3b8ed2d6975d028ad81c675db1cc47cdac7fba14e7e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b11f0aeb8cbb764972bbf8f7f8e945692bf7182dd9cf47da681f24d7734c3bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11f0aeb8cbb764972bbf8f7f8e945692bf7182dd9cf47da681f24d7734c3bdb->enter($__internal_b11f0aeb8cbb764972bbf8f7f8e945692bf7182dd9cf47da681f24d7734c3bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b11f0aeb8cbb764972bbf8f7f8e945692bf7182dd9cf47da681f24d7734c3bdb->leave($__internal_b11f0aeb8cbb764972bbf8f7f8e945692bf7182dd9cf47da681f24d7734c3bdb_prof);

        
        $__internal_9d80c8170d70b7538fc3b8ed2d6975d028ad81c675db1cc47cdac7fba14e7e20->leave($__internal_9d80c8170d70b7538fc3b8ed2d6975d028ad81c675db1cc47cdac7fba14e7e20_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e7b9d3432126257755ec244b55ba63ea5e4b751a34db3add55b3ce4c4dacb6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b9d3432126257755ec244b55ba63ea5e4b751a34db3add55b3ce4c4dacb6be->enter($__internal_e7b9d3432126257755ec244b55ba63ea5e4b751a34db3add55b3ce4c4dacb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cfad8e1e5e67928d5241feb213334328ec497a7d64d1135906df1691494b9d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfad8e1e5e67928d5241feb213334328ec497a7d64d1135906df1691494b9d1b->enter($__internal_cfad8e1e5e67928d5241feb213334328ec497a7d64d1135906df1691494b9d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_cfad8e1e5e67928d5241feb213334328ec497a7d64d1135906df1691494b9d1b->leave($__internal_cfad8e1e5e67928d5241feb213334328ec497a7d64d1135906df1691494b9d1b_prof);

        
        $__internal_e7b9d3432126257755ec244b55ba63ea5e4b751a34db3add55b3ce4c4dacb6be->leave($__internal_e7b9d3432126257755ec244b55ba63ea5e4b751a34db3add55b3ce4c4dacb6be_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9b502dfdf9af85c8ea1ba7f151de5f9ddf5f8d7fe6a1fdf0640a439dc3838489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b502dfdf9af85c8ea1ba7f151de5f9ddf5f8d7fe6a1fdf0640a439dc3838489->enter($__internal_9b502dfdf9af85c8ea1ba7f151de5f9ddf5f8d7fe6a1fdf0640a439dc3838489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8fc9d9657131b2baefe935680f9244b7da7a773c34fb98151520c8f4db5261f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc9d9657131b2baefe935680f9244b7da7a773c34fb98151520c8f4db5261f3->enter($__internal_8fc9d9657131b2baefe935680f9244b7da7a773c34fb98151520c8f4db5261f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_8fc9d9657131b2baefe935680f9244b7da7a773c34fb98151520c8f4db5261f3->leave($__internal_8fc9d9657131b2baefe935680f9244b7da7a773c34fb98151520c8f4db5261f3_prof);

        
        $__internal_9b502dfdf9af85c8ea1ba7f151de5f9ddf5f8d7fe6a1fdf0640a439dc3838489->leave($__internal_9b502dfdf9af85c8ea1ba7f151de5f9ddf5f8d7fe6a1fdf0640a439dc3838489_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f2a6bdab8168e6db52d4ec0aec54432866bbed64ea7bf66bb6b43841c15a0033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a6bdab8168e6db52d4ec0aec54432866bbed64ea7bf66bb6b43841c15a0033->enter($__internal_f2a6bdab8168e6db52d4ec0aec54432866bbed64ea7bf66bb6b43841c15a0033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8e9736ae577e3b8b1dfda600b597af76e0bcc81bf0ed8a32308229505c11ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9736ae577e3b8b1dfda600b597af76e0bcc81bf0ed8a32308229505c11ed5a->enter($__internal_8e9736ae577e3b8b1dfda600b597af76e0bcc81bf0ed8a32308229505c11ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_8e9736ae577e3b8b1dfda600b597af76e0bcc81bf0ed8a32308229505c11ed5a->leave($__internal_8e9736ae577e3b8b1dfda600b597af76e0bcc81bf0ed8a32308229505c11ed5a_prof);

        
        $__internal_f2a6bdab8168e6db52d4ec0aec54432866bbed64ea7bf66bb6b43841c15a0033->leave($__internal_f2a6bdab8168e6db52d4ec0aec54432866bbed64ea7bf66bb6b43841c15a0033_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2383f9ef1259fa30f7d436938a0f85d94d0312ffc105bb84cff89bc2187c8172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2383f9ef1259fa30f7d436938a0f85d94d0312ffc105bb84cff89bc2187c8172->enter($__internal_2383f9ef1259fa30f7d436938a0f85d94d0312ffc105bb84cff89bc2187c8172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_97d8de1336b6277f09a43b30cbc8b8a92691d0e522f122f9a69d9a5b3b3e7197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d8de1336b6277f09a43b30cbc8b8a92691d0e522f122f9a69d9a5b3b3e7197->enter($__internal_97d8de1336b6277f09a43b30cbc8b8a92691d0e522f122f9a69d9a5b3b3e7197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_97d8de1336b6277f09a43b30cbc8b8a92691d0e522f122f9a69d9a5b3b3e7197->leave($__internal_97d8de1336b6277f09a43b30cbc8b8a92691d0e522f122f9a69d9a5b3b3e7197_prof);

        
        $__internal_2383f9ef1259fa30f7d436938a0f85d94d0312ffc105bb84cff89bc2187c8172->leave($__internal_2383f9ef1259fa30f7d436938a0f85d94d0312ffc105bb84cff89bc2187c8172_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_91450929fe072a030d888190c8eae45297fdacf42ecedfb464ce491ef13a4d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91450929fe072a030d888190c8eae45297fdacf42ecedfb464ce491ef13a4d83->enter($__internal_91450929fe072a030d888190c8eae45297fdacf42ecedfb464ce491ef13a4d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6503cd5af0a89f568ca787e004293605d2e265839f82a89ef11f1132d4ebf6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6503cd5af0a89f568ca787e004293605d2e265839f82a89ef11f1132d4ebf6e1->enter($__internal_6503cd5af0a89f568ca787e004293605d2e265839f82a89ef11f1132d4ebf6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6503cd5af0a89f568ca787e004293605d2e265839f82a89ef11f1132d4ebf6e1->leave($__internal_6503cd5af0a89f568ca787e004293605d2e265839f82a89ef11f1132d4ebf6e1_prof);

        
        $__internal_91450929fe072a030d888190c8eae45297fdacf42ecedfb464ce491ef13a4d83->leave($__internal_91450929fe072a030d888190c8eae45297fdacf42ecedfb464ce491ef13a4d83_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b8f50888ec338fafa91ff961c9496b9b14171f4f1195fa1343d623a298edf3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f50888ec338fafa91ff961c9496b9b14171f4f1195fa1343d623a298edf3db->enter($__internal_b8f50888ec338fafa91ff961c9496b9b14171f4f1195fa1343d623a298edf3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_bda0636552d81e2e0ac95838f51a69761af96fedbfcae57b33640e9ea168546f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda0636552d81e2e0ac95838f51a69761af96fedbfcae57b33640e9ea168546f->enter($__internal_bda0636552d81e2e0ac95838f51a69761af96fedbfcae57b33640e9ea168546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bda0636552d81e2e0ac95838f51a69761af96fedbfcae57b33640e9ea168546f->leave($__internal_bda0636552d81e2e0ac95838f51a69761af96fedbfcae57b33640e9ea168546f_prof);

        
        $__internal_b8f50888ec338fafa91ff961c9496b9b14171f4f1195fa1343d623a298edf3db->leave($__internal_b8f50888ec338fafa91ff961c9496b9b14171f4f1195fa1343d623a298edf3db_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_20f1d01fde53a3a778de9bd8ed39af97883a0161a2c018ce970bce8c8a74057e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f1d01fde53a3a778de9bd8ed39af97883a0161a2c018ce970bce8c8a74057e->enter($__internal_20f1d01fde53a3a778de9bd8ed39af97883a0161a2c018ce970bce8c8a74057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ce5f9c178f0b36c50da83c68252d9263b1a434cc3e17411002f4f0ffe66ea39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5f9c178f0b36c50da83c68252d9263b1a434cc3e17411002f4f0ffe66ea39f->enter($__internal_ce5f9c178f0b36c50da83c68252d9263b1a434cc3e17411002f4f0ffe66ea39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ce5f9c178f0b36c50da83c68252d9263b1a434cc3e17411002f4f0ffe66ea39f->leave($__internal_ce5f9c178f0b36c50da83c68252d9263b1a434cc3e17411002f4f0ffe66ea39f_prof);

        
        $__internal_20f1d01fde53a3a778de9bd8ed39af97883a0161a2c018ce970bce8c8a74057e->leave($__internal_20f1d01fde53a3a778de9bd8ed39af97883a0161a2c018ce970bce8c8a74057e_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0cadd9e4b49177b1f375d0a2a5a1a0cd9ac4216332981c26478040c010fd492d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cadd9e4b49177b1f375d0a2a5a1a0cd9ac4216332981c26478040c010fd492d->enter($__internal_0cadd9e4b49177b1f375d0a2a5a1a0cd9ac4216332981c26478040c010fd492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_dd4380a9a5bc8b2e5439f54767e69bd9a39f50b98c7935ec9d522716bb8f0eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4380a9a5bc8b2e5439f54767e69bd9a39f50b98c7935ec9d522716bb8f0eeb->enter($__internal_dd4380a9a5bc8b2e5439f54767e69bd9a39f50b98c7935ec9d522716bb8f0eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_dd4380a9a5bc8b2e5439f54767e69bd9a39f50b98c7935ec9d522716bb8f0eeb->leave($__internal_dd4380a9a5bc8b2e5439f54767e69bd9a39f50b98c7935ec9d522716bb8f0eeb_prof);

        
        $__internal_0cadd9e4b49177b1f375d0a2a5a1a0cd9ac4216332981c26478040c010fd492d->leave($__internal_0cadd9e4b49177b1f375d0a2a5a1a0cd9ac4216332981c26478040c010fd492d_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a01c5ad00b06a5d2aee36dc0b8798739a2c3e7980f1557065ed7cb44aec3071d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01c5ad00b06a5d2aee36dc0b8798739a2c3e7980f1557065ed7cb44aec3071d->enter($__internal_a01c5ad00b06a5d2aee36dc0b8798739a2c3e7980f1557065ed7cb44aec3071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e9f2c82d43db6a607ca16508537d1590b88aa8a74dc9c176da75e2780b6445b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f2c82d43db6a607ca16508537d1590b88aa8a74dc9c176da75e2780b6445b4->enter($__internal_e9f2c82d43db6a607ca16508537d1590b88aa8a74dc9c176da75e2780b6445b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_e9f2c82d43db6a607ca16508537d1590b88aa8a74dc9c176da75e2780b6445b4->leave($__internal_e9f2c82d43db6a607ca16508537d1590b88aa8a74dc9c176da75e2780b6445b4_prof);

        
        $__internal_a01c5ad00b06a5d2aee36dc0b8798739a2c3e7980f1557065ed7cb44aec3071d->leave($__internal_a01c5ad00b06a5d2aee36dc0b8798739a2c3e7980f1557065ed7cb44aec3071d_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_23958bc0140fdb5536f43c2cf6b68c5156ef52f0e920dcecbd6f428ec6cb33c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23958bc0140fdb5536f43c2cf6b68c5156ef52f0e920dcecbd6f428ec6cb33c5->enter($__internal_23958bc0140fdb5536f43c2cf6b68c5156ef52f0e920dcecbd6f428ec6cb33c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_94d2193b697176c5c93f04b3b2da3f534fc42d5cce31bdc5b29c461124519fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d2193b697176c5c93f04b3b2da3f534fc42d5cce31bdc5b29c461124519fe5->enter($__internal_94d2193b697176c5c93f04b3b2da3f534fc42d5cce31bdc5b29c461124519fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_94d2193b697176c5c93f04b3b2da3f534fc42d5cce31bdc5b29c461124519fe5->leave($__internal_94d2193b697176c5c93f04b3b2da3f534fc42d5cce31bdc5b29c461124519fe5_prof);

        
        $__internal_23958bc0140fdb5536f43c2cf6b68c5156ef52f0e920dcecbd6f428ec6cb33c5->leave($__internal_23958bc0140fdb5536f43c2cf6b68c5156ef52f0e920dcecbd6f428ec6cb33c5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
