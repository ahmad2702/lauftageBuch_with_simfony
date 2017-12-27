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
        $__internal_270c4f00eb3b059d4630165b27d586abb2a1421ba012707b01284b68f9820275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270c4f00eb3b059d4630165b27d586abb2a1421ba012707b01284b68f9820275->enter($__internal_270c4f00eb3b059d4630165b27d586abb2a1421ba012707b01284b68f9820275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a3a51806bda1fbad3182a37a2ec6e2ea30ef81884940e6c794a2fcb1a6e115a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a51806bda1fbad3182a37a2ec6e2ea30ef81884940e6c794a2fcb1a6e115a5->enter($__internal_a3a51806bda1fbad3182a37a2ec6e2ea30ef81884940e6c794a2fcb1a6e115a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_270c4f00eb3b059d4630165b27d586abb2a1421ba012707b01284b68f9820275->leave($__internal_270c4f00eb3b059d4630165b27d586abb2a1421ba012707b01284b68f9820275_prof);

        
        $__internal_a3a51806bda1fbad3182a37a2ec6e2ea30ef81884940e6c794a2fcb1a6e115a5->leave($__internal_a3a51806bda1fbad3182a37a2ec6e2ea30ef81884940e6c794a2fcb1a6e115a5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a25e4557e08f002703aba58ae3dbed8569c7c8ea40bc81e118b0b4ad58cbf755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25e4557e08f002703aba58ae3dbed8569c7c8ea40bc81e118b0b4ad58cbf755->enter($__internal_a25e4557e08f002703aba58ae3dbed8569c7c8ea40bc81e118b0b4ad58cbf755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_12dc7a35a61266254892c8a1dfa0b6227025c8db7a1e9f7d83956bb100249fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dc7a35a61266254892c8a1dfa0b6227025c8db7a1e9f7d83956bb100249fb6->enter($__internal_12dc7a35a61266254892c8a1dfa0b6227025c8db7a1e9f7d83956bb100249fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_12dc7a35a61266254892c8a1dfa0b6227025c8db7a1e9f7d83956bb100249fb6->leave($__internal_12dc7a35a61266254892c8a1dfa0b6227025c8db7a1e9f7d83956bb100249fb6_prof);

        
        $__internal_a25e4557e08f002703aba58ae3dbed8569c7c8ea40bc81e118b0b4ad58cbf755->leave($__internal_a25e4557e08f002703aba58ae3dbed8569c7c8ea40bc81e118b0b4ad58cbf755_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4f8d5a514e56df3d4f548b8f7a51951b8395a76f53fe835b9e21a8a463761381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8d5a514e56df3d4f548b8f7a51951b8395a76f53fe835b9e21a8a463761381->enter($__internal_4f8d5a514e56df3d4f548b8f7a51951b8395a76f53fe835b9e21a8a463761381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3900e89e20e6205b96de454bfeaf23c527b0f5b2e653f31e8b3b3a31c43e376b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3900e89e20e6205b96de454bfeaf23c527b0f5b2e653f31e8b3b3a31c43e376b->enter($__internal_3900e89e20e6205b96de454bfeaf23c527b0f5b2e653f31e8b3b3a31c43e376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3900e89e20e6205b96de454bfeaf23c527b0f5b2e653f31e8b3b3a31c43e376b->leave($__internal_3900e89e20e6205b96de454bfeaf23c527b0f5b2e653f31e8b3b3a31c43e376b_prof);

        
        $__internal_4f8d5a514e56df3d4f548b8f7a51951b8395a76f53fe835b9e21a8a463761381->leave($__internal_4f8d5a514e56df3d4f548b8f7a51951b8395a76f53fe835b9e21a8a463761381_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9a9e83167e3441444fbbd8d23737fd75f1e250356b3e0176fc25e9d798656a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9e83167e3441444fbbd8d23737fd75f1e250356b3e0176fc25e9d798656a39->enter($__internal_9a9e83167e3441444fbbd8d23737fd75f1e250356b3e0176fc25e9d798656a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5bf6a5e229850541e41ad3479585ab52b67e9681e5b485dac464b44b25e0b378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf6a5e229850541e41ad3479585ab52b67e9681e5b485dac464b44b25e0b378->enter($__internal_5bf6a5e229850541e41ad3479585ab52b67e9681e5b485dac464b44b25e0b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_5bf6a5e229850541e41ad3479585ab52b67e9681e5b485dac464b44b25e0b378->leave($__internal_5bf6a5e229850541e41ad3479585ab52b67e9681e5b485dac464b44b25e0b378_prof);

        
        $__internal_9a9e83167e3441444fbbd8d23737fd75f1e250356b3e0176fc25e9d798656a39->leave($__internal_9a9e83167e3441444fbbd8d23737fd75f1e250356b3e0176fc25e9d798656a39_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7d8b479f9c938f3a3e968a024f15fc249279c72d5095929740f7b7c5a9f50b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8b479f9c938f3a3e968a024f15fc249279c72d5095929740f7b7c5a9f50b19->enter($__internal_7d8b479f9c938f3a3e968a024f15fc249279c72d5095929740f7b7c5a9f50b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4aad667356f9f5cdd4f1cd3da0a3bba9a244f790c573b449a37cc31769795584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aad667356f9f5cdd4f1cd3da0a3bba9a244f790c573b449a37cc31769795584->enter($__internal_4aad667356f9f5cdd4f1cd3da0a3bba9a244f790c573b449a37cc31769795584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_4aad667356f9f5cdd4f1cd3da0a3bba9a244f790c573b449a37cc31769795584->leave($__internal_4aad667356f9f5cdd4f1cd3da0a3bba9a244f790c573b449a37cc31769795584_prof);

        
        $__internal_7d8b479f9c938f3a3e968a024f15fc249279c72d5095929740f7b7c5a9f50b19->leave($__internal_7d8b479f9c938f3a3e968a024f15fc249279c72d5095929740f7b7c5a9f50b19_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_aa86854316c9aa20cd96e5d7c08009a1724804fd7a96db6926d75a0fbde92bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa86854316c9aa20cd96e5d7c08009a1724804fd7a96db6926d75a0fbde92bad->enter($__internal_aa86854316c9aa20cd96e5d7c08009a1724804fd7a96db6926d75a0fbde92bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fcd28881cd671bd3964670322feb5785c924f1c8387c12ae9f459b234bf63689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd28881cd671bd3964670322feb5785c924f1c8387c12ae9f459b234bf63689->enter($__internal_fcd28881cd671bd3964670322feb5785c924f1c8387c12ae9f459b234bf63689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fcd28881cd671bd3964670322feb5785c924f1c8387c12ae9f459b234bf63689->leave($__internal_fcd28881cd671bd3964670322feb5785c924f1c8387c12ae9f459b234bf63689_prof);

        
        $__internal_aa86854316c9aa20cd96e5d7c08009a1724804fd7a96db6926d75a0fbde92bad->leave($__internal_aa86854316c9aa20cd96e5d7c08009a1724804fd7a96db6926d75a0fbde92bad_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_49f89d865248c2e52c1bd9a547012486525ea2a358a405c60ed7f345d04d7924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f89d865248c2e52c1bd9a547012486525ea2a358a405c60ed7f345d04d7924->enter($__internal_49f89d865248c2e52c1bd9a547012486525ea2a358a405c60ed7f345d04d7924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9bbe0d0a1e81277975357b52b6d3ad0da6ce22acec8db1b2d763dc1918128cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbe0d0a1e81277975357b52b6d3ad0da6ce22acec8db1b2d763dc1918128cc6->enter($__internal_9bbe0d0a1e81277975357b52b6d3ad0da6ce22acec8db1b2d763dc1918128cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9bbe0d0a1e81277975357b52b6d3ad0da6ce22acec8db1b2d763dc1918128cc6->leave($__internal_9bbe0d0a1e81277975357b52b6d3ad0da6ce22acec8db1b2d763dc1918128cc6_prof);

        
        $__internal_49f89d865248c2e52c1bd9a547012486525ea2a358a405c60ed7f345d04d7924->leave($__internal_49f89d865248c2e52c1bd9a547012486525ea2a358a405c60ed7f345d04d7924_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bc9df8304f91692631ee235a9dd89a3000f47a7eaaa2e5d0d5460bc18af20fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9df8304f91692631ee235a9dd89a3000f47a7eaaa2e5d0d5460bc18af20fa0->enter($__internal_bc9df8304f91692631ee235a9dd89a3000f47a7eaaa2e5d0d5460bc18af20fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_372f08a2cf8442307cfa5dd5fc58569d7e24513e638593c669bb25d5d36b3291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372f08a2cf8442307cfa5dd5fc58569d7e24513e638593c669bb25d5d36b3291->enter($__internal_372f08a2cf8442307cfa5dd5fc58569d7e24513e638593c669bb25d5d36b3291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_372f08a2cf8442307cfa5dd5fc58569d7e24513e638593c669bb25d5d36b3291->leave($__internal_372f08a2cf8442307cfa5dd5fc58569d7e24513e638593c669bb25d5d36b3291_prof);

        
        $__internal_bc9df8304f91692631ee235a9dd89a3000f47a7eaaa2e5d0d5460bc18af20fa0->leave($__internal_bc9df8304f91692631ee235a9dd89a3000f47a7eaaa2e5d0d5460bc18af20fa0_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_566fd3c27cdd04df7ab972ad9c8988120bec86457867baf982c337a497558b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566fd3c27cdd04df7ab972ad9c8988120bec86457867baf982c337a497558b1b->enter($__internal_566fd3c27cdd04df7ab972ad9c8988120bec86457867baf982c337a497558b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f10f3daa8a58528e0c86c9720eae7133b28c55becdc5033a87b9e166b4518ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10f3daa8a58528e0c86c9720eae7133b28c55becdc5033a87b9e166b4518ae1->enter($__internal_f10f3daa8a58528e0c86c9720eae7133b28c55becdc5033a87b9e166b4518ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f10f3daa8a58528e0c86c9720eae7133b28c55becdc5033a87b9e166b4518ae1->leave($__internal_f10f3daa8a58528e0c86c9720eae7133b28c55becdc5033a87b9e166b4518ae1_prof);

        
        $__internal_566fd3c27cdd04df7ab972ad9c8988120bec86457867baf982c337a497558b1b->leave($__internal_566fd3c27cdd04df7ab972ad9c8988120bec86457867baf982c337a497558b1b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e2098cab0b32c650df8a69b5f2562c1ef41727e133c0ea9c2bdc1fd6ffb6f7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2098cab0b32c650df8a69b5f2562c1ef41727e133c0ea9c2bdc1fd6ffb6f7f8->enter($__internal_e2098cab0b32c650df8a69b5f2562c1ef41727e133c0ea9c2bdc1fd6ffb6f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_58032cb07e8cd52c1d9def5f4cd5e43bdd20102bc456cbf0df22f5e09e3c79d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58032cb07e8cd52c1d9def5f4cd5e43bdd20102bc456cbf0df22f5e09e3c79d6->enter($__internal_58032cb07e8cd52c1d9def5f4cd5e43bdd20102bc456cbf0df22f5e09e3c79d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_58032cb07e8cd52c1d9def5f4cd5e43bdd20102bc456cbf0df22f5e09e3c79d6->leave($__internal_58032cb07e8cd52c1d9def5f4cd5e43bdd20102bc456cbf0df22f5e09e3c79d6_prof);

        
        $__internal_e2098cab0b32c650df8a69b5f2562c1ef41727e133c0ea9c2bdc1fd6ffb6f7f8->leave($__internal_e2098cab0b32c650df8a69b5f2562c1ef41727e133c0ea9c2bdc1fd6ffb6f7f8_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1d65dd59b22899797bcc593057a2513f4672f4cc12d616789ad0bb2b59fdfaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d65dd59b22899797bcc593057a2513f4672f4cc12d616789ad0bb2b59fdfaf2->enter($__internal_1d65dd59b22899797bcc593057a2513f4672f4cc12d616789ad0bb2b59fdfaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8db7a45e20ef68d3cdd7c060c7fb9ddc0b6b1dede5e17830e6a759d0d30653f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db7a45e20ef68d3cdd7c060c7fb9ddc0b6b1dede5e17830e6a759d0d30653f1->enter($__internal_8db7a45e20ef68d3cdd7c060c7fb9ddc0b6b1dede5e17830e6a759d0d30653f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8db7a45e20ef68d3cdd7c060c7fb9ddc0b6b1dede5e17830e6a759d0d30653f1->leave($__internal_8db7a45e20ef68d3cdd7c060c7fb9ddc0b6b1dede5e17830e6a759d0d30653f1_prof);

        
        $__internal_1d65dd59b22899797bcc593057a2513f4672f4cc12d616789ad0bb2b59fdfaf2->leave($__internal_1d65dd59b22899797bcc593057a2513f4672f4cc12d616789ad0bb2b59fdfaf2_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_10696ad51a2ef528be213fd4f53213cee946cd06c20c1d31e5825913a828873b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10696ad51a2ef528be213fd4f53213cee946cd06c20c1d31e5825913a828873b->enter($__internal_10696ad51a2ef528be213fd4f53213cee946cd06c20c1d31e5825913a828873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4300e17572a9c15fedefd18f3e79888df349aa62e0fdea9f9b44df6ce7348ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4300e17572a9c15fedefd18f3e79888df349aa62e0fdea9f9b44df6ce7348ef3->enter($__internal_4300e17572a9c15fedefd18f3e79888df349aa62e0fdea9f9b44df6ce7348ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_4300e17572a9c15fedefd18f3e79888df349aa62e0fdea9f9b44df6ce7348ef3->leave($__internal_4300e17572a9c15fedefd18f3e79888df349aa62e0fdea9f9b44df6ce7348ef3_prof);

        
        $__internal_10696ad51a2ef528be213fd4f53213cee946cd06c20c1d31e5825913a828873b->leave($__internal_10696ad51a2ef528be213fd4f53213cee946cd06c20c1d31e5825913a828873b_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9150192ec434e78f4b6a59bf2c8b60652c037912fee8d104700ec908ed5425ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9150192ec434e78f4b6a59bf2c8b60652c037912fee8d104700ec908ed5425ed->enter($__internal_9150192ec434e78f4b6a59bf2c8b60652c037912fee8d104700ec908ed5425ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d91d5d29d4dc25a958acd635def98e2fc4e3a4a61b91d86df43158d16846152a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91d5d29d4dc25a958acd635def98e2fc4e3a4a61b91d86df43158d16846152a->enter($__internal_d91d5d29d4dc25a958acd635def98e2fc4e3a4a61b91d86df43158d16846152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d91d5d29d4dc25a958acd635def98e2fc4e3a4a61b91d86df43158d16846152a->leave($__internal_d91d5d29d4dc25a958acd635def98e2fc4e3a4a61b91d86df43158d16846152a_prof);

        
        $__internal_9150192ec434e78f4b6a59bf2c8b60652c037912fee8d104700ec908ed5425ed->leave($__internal_9150192ec434e78f4b6a59bf2c8b60652c037912fee8d104700ec908ed5425ed_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4febac156394a1bc4178fdf6c518e90f7b7c32048c254c73cf63f004dbb7a6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4febac156394a1bc4178fdf6c518e90f7b7c32048c254c73cf63f004dbb7a6be->enter($__internal_4febac156394a1bc4178fdf6c518e90f7b7c32048c254c73cf63f004dbb7a6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3418a7a433e0a6898d65739dfd7fcafcecb1b2fe9870cbc19add88c6f687b61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418a7a433e0a6898d65739dfd7fcafcecb1b2fe9870cbc19add88c6f687b61c->enter($__internal_3418a7a433e0a6898d65739dfd7fcafcecb1b2fe9870cbc19add88c6f687b61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3418a7a433e0a6898d65739dfd7fcafcecb1b2fe9870cbc19add88c6f687b61c->leave($__internal_3418a7a433e0a6898d65739dfd7fcafcecb1b2fe9870cbc19add88c6f687b61c_prof);

        
        $__internal_4febac156394a1bc4178fdf6c518e90f7b7c32048c254c73cf63f004dbb7a6be->leave($__internal_4febac156394a1bc4178fdf6c518e90f7b7c32048c254c73cf63f004dbb7a6be_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_29d9f3fc5e73febd1e7ec8a7194d4151d818ce680c009a9a05f98f56f7cea7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d9f3fc5e73febd1e7ec8a7194d4151d818ce680c009a9a05f98f56f7cea7c1->enter($__internal_29d9f3fc5e73febd1e7ec8a7194d4151d818ce680c009a9a05f98f56f7cea7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b6edf853e46d7a6b196d176e623cbcac0817792d17afe14b66c240fb93b9194a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6edf853e46d7a6b196d176e623cbcac0817792d17afe14b66c240fb93b9194a->enter($__internal_b6edf853e46d7a6b196d176e623cbcac0817792d17afe14b66c240fb93b9194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b6edf853e46d7a6b196d176e623cbcac0817792d17afe14b66c240fb93b9194a->leave($__internal_b6edf853e46d7a6b196d176e623cbcac0817792d17afe14b66c240fb93b9194a_prof);

        
        $__internal_29d9f3fc5e73febd1e7ec8a7194d4151d818ce680c009a9a05f98f56f7cea7c1->leave($__internal_29d9f3fc5e73febd1e7ec8a7194d4151d818ce680c009a9a05f98f56f7cea7c1_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4a6a97e6692219df1621fc6deb5ffa69c49c8221f2d5adfc9c10bbd8f9b0af91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6a97e6692219df1621fc6deb5ffa69c49c8221f2d5adfc9c10bbd8f9b0af91->enter($__internal_4a6a97e6692219df1621fc6deb5ffa69c49c8221f2d5adfc9c10bbd8f9b0af91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_31d1f693b3320b4c1c905e5838bc9da788df1fcfe5114824854575720d601c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d1f693b3320b4c1c905e5838bc9da788df1fcfe5114824854575720d601c24->enter($__internal_31d1f693b3320b4c1c905e5838bc9da788df1fcfe5114824854575720d601c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31d1f693b3320b4c1c905e5838bc9da788df1fcfe5114824854575720d601c24->leave($__internal_31d1f693b3320b4c1c905e5838bc9da788df1fcfe5114824854575720d601c24_prof);

        
        $__internal_4a6a97e6692219df1621fc6deb5ffa69c49c8221f2d5adfc9c10bbd8f9b0af91->leave($__internal_4a6a97e6692219df1621fc6deb5ffa69c49c8221f2d5adfc9c10bbd8f9b0af91_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7948c1024d19d29e14e9ac2ca4b91a3e5b23e597baef9cbbd15f5d59635d84b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7948c1024d19d29e14e9ac2ca4b91a3e5b23e597baef9cbbd15f5d59635d84b1->enter($__internal_7948c1024d19d29e14e9ac2ca4b91a3e5b23e597baef9cbbd15f5d59635d84b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_42370cd832c1fdc3e9329239f01396c894d803dd15a46b96f21333d39658aee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42370cd832c1fdc3e9329239f01396c894d803dd15a46b96f21333d39658aee9->enter($__internal_42370cd832c1fdc3e9329239f01396c894d803dd15a46b96f21333d39658aee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_42370cd832c1fdc3e9329239f01396c894d803dd15a46b96f21333d39658aee9->leave($__internal_42370cd832c1fdc3e9329239f01396c894d803dd15a46b96f21333d39658aee9_prof);

        
        $__internal_7948c1024d19d29e14e9ac2ca4b91a3e5b23e597baef9cbbd15f5d59635d84b1->leave($__internal_7948c1024d19d29e14e9ac2ca4b91a3e5b23e597baef9cbbd15f5d59635d84b1_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a4a079bd59b446d6f36b2eb632edb2112c77ee5cb41f01986d99c0016a31e55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a079bd59b446d6f36b2eb632edb2112c77ee5cb41f01986d99c0016a31e55a->enter($__internal_a4a079bd59b446d6f36b2eb632edb2112c77ee5cb41f01986d99c0016a31e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a295f59462c014271751e5b0c8163a61fd5c6a6bef2a5b108f2ec40737b9ac23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a295f59462c014271751e5b0c8163a61fd5c6a6bef2a5b108f2ec40737b9ac23->enter($__internal_a295f59462c014271751e5b0c8163a61fd5c6a6bef2a5b108f2ec40737b9ac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_a295f59462c014271751e5b0c8163a61fd5c6a6bef2a5b108f2ec40737b9ac23->leave($__internal_a295f59462c014271751e5b0c8163a61fd5c6a6bef2a5b108f2ec40737b9ac23_prof);

        
        $__internal_a4a079bd59b446d6f36b2eb632edb2112c77ee5cb41f01986d99c0016a31e55a->leave($__internal_a4a079bd59b446d6f36b2eb632edb2112c77ee5cb41f01986d99c0016a31e55a_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8b9e36713d0539b668f9abb4aa25059783de43853f1b93055f1fa40bd11d6812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9e36713d0539b668f9abb4aa25059783de43853f1b93055f1fa40bd11d6812->enter($__internal_8b9e36713d0539b668f9abb4aa25059783de43853f1b93055f1fa40bd11d6812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_025887daac7f7d0fc3901b2f23ff4b206007ee2f12fb3886279bc27b00220e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025887daac7f7d0fc3901b2f23ff4b206007ee2f12fb3886279bc27b00220e44->enter($__internal_025887daac7f7d0fc3901b2f23ff4b206007ee2f12fb3886279bc27b00220e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_025887daac7f7d0fc3901b2f23ff4b206007ee2f12fb3886279bc27b00220e44->leave($__internal_025887daac7f7d0fc3901b2f23ff4b206007ee2f12fb3886279bc27b00220e44_prof);

        
        $__internal_8b9e36713d0539b668f9abb4aa25059783de43853f1b93055f1fa40bd11d6812->leave($__internal_8b9e36713d0539b668f9abb4aa25059783de43853f1b93055f1fa40bd11d6812_prof);

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
