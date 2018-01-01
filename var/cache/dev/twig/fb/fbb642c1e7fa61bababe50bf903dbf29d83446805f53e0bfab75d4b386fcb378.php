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
        $__internal_2a11e1e86ab9ad9162c9cb6ff25f05f95e75a6d8adc0188ea60ca400d0eb5ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a11e1e86ab9ad9162c9cb6ff25f05f95e75a6d8adc0188ea60ca400d0eb5ac6->enter($__internal_2a11e1e86ab9ad9162c9cb6ff25f05f95e75a6d8adc0188ea60ca400d0eb5ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_68cdbb3d034fa5184271cef3628f078f50a05751db38c3795f2fa781c1fa1f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cdbb3d034fa5184271cef3628f078f50a05751db38c3795f2fa781c1fa1f4f->enter($__internal_68cdbb3d034fa5184271cef3628f078f50a05751db38c3795f2fa781c1fa1f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_2a11e1e86ab9ad9162c9cb6ff25f05f95e75a6d8adc0188ea60ca400d0eb5ac6->leave($__internal_2a11e1e86ab9ad9162c9cb6ff25f05f95e75a6d8adc0188ea60ca400d0eb5ac6_prof);

        
        $__internal_68cdbb3d034fa5184271cef3628f078f50a05751db38c3795f2fa781c1fa1f4f->leave($__internal_68cdbb3d034fa5184271cef3628f078f50a05751db38c3795f2fa781c1fa1f4f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_398334dd203445b177aff830b7d20bfa6408b062829b4fbe6a1d83a1cd011e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398334dd203445b177aff830b7d20bfa6408b062829b4fbe6a1d83a1cd011e8b->enter($__internal_398334dd203445b177aff830b7d20bfa6408b062829b4fbe6a1d83a1cd011e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_331b8b6b7d1b95d79af242c67364937d9963826510b83397ca9f544610a5b4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331b8b6b7d1b95d79af242c67364937d9963826510b83397ca9f544610a5b4e0->enter($__internal_331b8b6b7d1b95d79af242c67364937d9963826510b83397ca9f544610a5b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_331b8b6b7d1b95d79af242c67364937d9963826510b83397ca9f544610a5b4e0->leave($__internal_331b8b6b7d1b95d79af242c67364937d9963826510b83397ca9f544610a5b4e0_prof);

        
        $__internal_398334dd203445b177aff830b7d20bfa6408b062829b4fbe6a1d83a1cd011e8b->leave($__internal_398334dd203445b177aff830b7d20bfa6408b062829b4fbe6a1d83a1cd011e8b_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1608872ed98d5fd071b76749d3bdbec0be6fe6121305ea6eb358d2f1320cfe64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1608872ed98d5fd071b76749d3bdbec0be6fe6121305ea6eb358d2f1320cfe64->enter($__internal_1608872ed98d5fd071b76749d3bdbec0be6fe6121305ea6eb358d2f1320cfe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2a6e751814f9fdc5dbcb7e6c0317c8d3c252c24badb0e38e6d9fcbb1e353484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6e751814f9fdc5dbcb7e6c0317c8d3c252c24badb0e38e6d9fcbb1e353484f->enter($__internal_2a6e751814f9fdc5dbcb7e6c0317c8d3c252c24badb0e38e6d9fcbb1e353484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2a6e751814f9fdc5dbcb7e6c0317c8d3c252c24badb0e38e6d9fcbb1e353484f->leave($__internal_2a6e751814f9fdc5dbcb7e6c0317c8d3c252c24badb0e38e6d9fcbb1e353484f_prof);

        
        $__internal_1608872ed98d5fd071b76749d3bdbec0be6fe6121305ea6eb358d2f1320cfe64->leave($__internal_1608872ed98d5fd071b76749d3bdbec0be6fe6121305ea6eb358d2f1320cfe64_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c9d006123abeebc6158a2c91960ca28c4dbb9041be79fef2119494791d728bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d006123abeebc6158a2c91960ca28c4dbb9041be79fef2119494791d728bd9->enter($__internal_c9d006123abeebc6158a2c91960ca28c4dbb9041be79fef2119494791d728bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d687c7acfe067f5d7290cd8dea620235f97e4c58267fc51b6ac02bacd3e62896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d687c7acfe067f5d7290cd8dea620235f97e4c58267fc51b6ac02bacd3e62896->enter($__internal_d687c7acfe067f5d7290cd8dea620235f97e4c58267fc51b6ac02bacd3e62896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_d687c7acfe067f5d7290cd8dea620235f97e4c58267fc51b6ac02bacd3e62896->leave($__internal_d687c7acfe067f5d7290cd8dea620235f97e4c58267fc51b6ac02bacd3e62896_prof);

        
        $__internal_c9d006123abeebc6158a2c91960ca28c4dbb9041be79fef2119494791d728bd9->leave($__internal_c9d006123abeebc6158a2c91960ca28c4dbb9041be79fef2119494791d728bd9_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d5ee060a0e8c56c2456761de42a5ee2e1e635189739fbd792fbab8fbd5d2fbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ee060a0e8c56c2456761de42a5ee2e1e635189739fbd792fbab8fbd5d2fbdf->enter($__internal_d5ee060a0e8c56c2456761de42a5ee2e1e635189739fbd792fbab8fbd5d2fbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5f9409097f1e8880dd0137898c71ff06d962834a1fdaab1d6ca2137e42bd3c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9409097f1e8880dd0137898c71ff06d962834a1fdaab1d6ca2137e42bd3c10->enter($__internal_5f9409097f1e8880dd0137898c71ff06d962834a1fdaab1d6ca2137e42bd3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_5f9409097f1e8880dd0137898c71ff06d962834a1fdaab1d6ca2137e42bd3c10->leave($__internal_5f9409097f1e8880dd0137898c71ff06d962834a1fdaab1d6ca2137e42bd3c10_prof);

        
        $__internal_d5ee060a0e8c56c2456761de42a5ee2e1e635189739fbd792fbab8fbd5d2fbdf->leave($__internal_d5ee060a0e8c56c2456761de42a5ee2e1e635189739fbd792fbab8fbd5d2fbdf_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fc88282a1e5f6226436b7dabb8b86b1ecf9f26ba32e81b4697943f8843637b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc88282a1e5f6226436b7dabb8b86b1ecf9f26ba32e81b4697943f8843637b8f->enter($__internal_fc88282a1e5f6226436b7dabb8b86b1ecf9f26ba32e81b4697943f8843637b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9c63d1741a9a4dc509c7563a458cca3f403e997ce97283b74e3d64da77579b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c63d1741a9a4dc509c7563a458cca3f403e997ce97283b74e3d64da77579b67->enter($__internal_9c63d1741a9a4dc509c7563a458cca3f403e997ce97283b74e3d64da77579b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9c63d1741a9a4dc509c7563a458cca3f403e997ce97283b74e3d64da77579b67->leave($__internal_9c63d1741a9a4dc509c7563a458cca3f403e997ce97283b74e3d64da77579b67_prof);

        
        $__internal_fc88282a1e5f6226436b7dabb8b86b1ecf9f26ba32e81b4697943f8843637b8f->leave($__internal_fc88282a1e5f6226436b7dabb8b86b1ecf9f26ba32e81b4697943f8843637b8f_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6210677719618f39a3c346bdb61cfcae7413237965525608c5cb61642588a774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6210677719618f39a3c346bdb61cfcae7413237965525608c5cb61642588a774->enter($__internal_6210677719618f39a3c346bdb61cfcae7413237965525608c5cb61642588a774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9d692edaefe3ca214d720d7590d629b92247d98504839b2053475027d1827182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d692edaefe3ca214d720d7590d629b92247d98504839b2053475027d1827182->enter($__internal_9d692edaefe3ca214d720d7590d629b92247d98504839b2053475027d1827182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9d692edaefe3ca214d720d7590d629b92247d98504839b2053475027d1827182->leave($__internal_9d692edaefe3ca214d720d7590d629b92247d98504839b2053475027d1827182_prof);

        
        $__internal_6210677719618f39a3c346bdb61cfcae7413237965525608c5cb61642588a774->leave($__internal_6210677719618f39a3c346bdb61cfcae7413237965525608c5cb61642588a774_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_279851e59f215d8c63aec40129bfe9af6f81db6ea83e509900fff19694864a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279851e59f215d8c63aec40129bfe9af6f81db6ea83e509900fff19694864a4f->enter($__internal_279851e59f215d8c63aec40129bfe9af6f81db6ea83e509900fff19694864a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_217d392ee6a939247596d03844e366c500ae7d8ae51c208ef2e4f8311068b9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217d392ee6a939247596d03844e366c500ae7d8ae51c208ef2e4f8311068b9d2->enter($__internal_217d392ee6a939247596d03844e366c500ae7d8ae51c208ef2e4f8311068b9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_217d392ee6a939247596d03844e366c500ae7d8ae51c208ef2e4f8311068b9d2->leave($__internal_217d392ee6a939247596d03844e366c500ae7d8ae51c208ef2e4f8311068b9d2_prof);

        
        $__internal_279851e59f215d8c63aec40129bfe9af6f81db6ea83e509900fff19694864a4f->leave($__internal_279851e59f215d8c63aec40129bfe9af6f81db6ea83e509900fff19694864a4f_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e7eed2fa10d231661c0fb15e8a5d243dae3bafb4e1740e52327e31836c084d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7eed2fa10d231661c0fb15e8a5d243dae3bafb4e1740e52327e31836c084d69->enter($__internal_e7eed2fa10d231661c0fb15e8a5d243dae3bafb4e1740e52327e31836c084d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_27ee5cea504d8c46406b6556f79bbf63325d9cad01dabeac5e236ff9105e6060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ee5cea504d8c46406b6556f79bbf63325d9cad01dabeac5e236ff9105e6060->enter($__internal_27ee5cea504d8c46406b6556f79bbf63325d9cad01dabeac5e236ff9105e6060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_27ee5cea504d8c46406b6556f79bbf63325d9cad01dabeac5e236ff9105e6060->leave($__internal_27ee5cea504d8c46406b6556f79bbf63325d9cad01dabeac5e236ff9105e6060_prof);

        
        $__internal_e7eed2fa10d231661c0fb15e8a5d243dae3bafb4e1740e52327e31836c084d69->leave($__internal_e7eed2fa10d231661c0fb15e8a5d243dae3bafb4e1740e52327e31836c084d69_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b7df73bfbd8291b019b025b81b68124307c99389af04e213886f3e28a9698c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7df73bfbd8291b019b025b81b68124307c99389af04e213886f3e28a9698c7b->enter($__internal_b7df73bfbd8291b019b025b81b68124307c99389af04e213886f3e28a9698c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e8861c5f8e26b20e8505748760fc057900086469847be10c18228c2179732e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8861c5f8e26b20e8505748760fc057900086469847be10c18228c2179732e8c->enter($__internal_e8861c5f8e26b20e8505748760fc057900086469847be10c18228c2179732e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_e8861c5f8e26b20e8505748760fc057900086469847be10c18228c2179732e8c->leave($__internal_e8861c5f8e26b20e8505748760fc057900086469847be10c18228c2179732e8c_prof);

        
        $__internal_b7df73bfbd8291b019b025b81b68124307c99389af04e213886f3e28a9698c7b->leave($__internal_b7df73bfbd8291b019b025b81b68124307c99389af04e213886f3e28a9698c7b_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4cd3bd44b3c817eb1e006ce70e050990ad7604d14968295e1105dbfcf9e45b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd3bd44b3c817eb1e006ce70e050990ad7604d14968295e1105dbfcf9e45b8e->enter($__internal_4cd3bd44b3c817eb1e006ce70e050990ad7604d14968295e1105dbfcf9e45b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b0b13053f94fb18c1222981cd82ff8f10c573371f5fdfff56e4275341e550c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b13053f94fb18c1222981cd82ff8f10c573371f5fdfff56e4275341e550c0a->enter($__internal_b0b13053f94fb18c1222981cd82ff8f10c573371f5fdfff56e4275341e550c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b0b13053f94fb18c1222981cd82ff8f10c573371f5fdfff56e4275341e550c0a->leave($__internal_b0b13053f94fb18c1222981cd82ff8f10c573371f5fdfff56e4275341e550c0a_prof);

        
        $__internal_4cd3bd44b3c817eb1e006ce70e050990ad7604d14968295e1105dbfcf9e45b8e->leave($__internal_4cd3bd44b3c817eb1e006ce70e050990ad7604d14968295e1105dbfcf9e45b8e_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ee8c7916c348ac24bff1b084a8f74a8e39fd48cfba0ac09d5ad6f21da572bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8c7916c348ac24bff1b084a8f74a8e39fd48cfba0ac09d5ad6f21da572bbb5->enter($__internal_ee8c7916c348ac24bff1b084a8f74a8e39fd48cfba0ac09d5ad6f21da572bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_253cd4d961bf77c35a90fd55bc66f294cdeaf4e13cac826c56496c1cfe72a13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253cd4d961bf77c35a90fd55bc66f294cdeaf4e13cac826c56496c1cfe72a13f->enter($__internal_253cd4d961bf77c35a90fd55bc66f294cdeaf4e13cac826c56496c1cfe72a13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_253cd4d961bf77c35a90fd55bc66f294cdeaf4e13cac826c56496c1cfe72a13f->leave($__internal_253cd4d961bf77c35a90fd55bc66f294cdeaf4e13cac826c56496c1cfe72a13f_prof);

        
        $__internal_ee8c7916c348ac24bff1b084a8f74a8e39fd48cfba0ac09d5ad6f21da572bbb5->leave($__internal_ee8c7916c348ac24bff1b084a8f74a8e39fd48cfba0ac09d5ad6f21da572bbb5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8e3960b91e0181f4e0ec2f39bb01b8a3121bf194ab5752825e89b97b8e972e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3960b91e0181f4e0ec2f39bb01b8a3121bf194ab5752825e89b97b8e972e2e->enter($__internal_8e3960b91e0181f4e0ec2f39bb01b8a3121bf194ab5752825e89b97b8e972e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_39fbba64ebd839a0d97ed26839f11ddf31c1b0429a957af84e614a5d8feaa738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fbba64ebd839a0d97ed26839f11ddf31c1b0429a957af84e614a5d8feaa738->enter($__internal_39fbba64ebd839a0d97ed26839f11ddf31c1b0429a957af84e614a5d8feaa738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_39fbba64ebd839a0d97ed26839f11ddf31c1b0429a957af84e614a5d8feaa738->leave($__internal_39fbba64ebd839a0d97ed26839f11ddf31c1b0429a957af84e614a5d8feaa738_prof);

        
        $__internal_8e3960b91e0181f4e0ec2f39bb01b8a3121bf194ab5752825e89b97b8e972e2e->leave($__internal_8e3960b91e0181f4e0ec2f39bb01b8a3121bf194ab5752825e89b97b8e972e2e_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3d29bc4fe56f5765cc416c8cc7fbc04cf605749ebece3ce382e897c9bf35cd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d29bc4fe56f5765cc416c8cc7fbc04cf605749ebece3ce382e897c9bf35cd8b->enter($__internal_3d29bc4fe56f5765cc416c8cc7fbc04cf605749ebece3ce382e897c9bf35cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0737b2ff4c369f1a70feb4013efb021a8d296da95a9d78dfcaeeafc8445f8836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0737b2ff4c369f1a70feb4013efb021a8d296da95a9d78dfcaeeafc8445f8836->enter($__internal_0737b2ff4c369f1a70feb4013efb021a8d296da95a9d78dfcaeeafc8445f8836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0737b2ff4c369f1a70feb4013efb021a8d296da95a9d78dfcaeeafc8445f8836->leave($__internal_0737b2ff4c369f1a70feb4013efb021a8d296da95a9d78dfcaeeafc8445f8836_prof);

        
        $__internal_3d29bc4fe56f5765cc416c8cc7fbc04cf605749ebece3ce382e897c9bf35cd8b->leave($__internal_3d29bc4fe56f5765cc416c8cc7fbc04cf605749ebece3ce382e897c9bf35cd8b_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9691c373ba34805f2a5a6352f7716b123ce2f362b53606f363b029371033c02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9691c373ba34805f2a5a6352f7716b123ce2f362b53606f363b029371033c02a->enter($__internal_9691c373ba34805f2a5a6352f7716b123ce2f362b53606f363b029371033c02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8c49bf8079e29423e2c566237043d1d2e3e5257780432f76575d4355b5e16551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c49bf8079e29423e2c566237043d1d2e3e5257780432f76575d4355b5e16551->enter($__internal_8c49bf8079e29423e2c566237043d1d2e3e5257780432f76575d4355b5e16551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8c49bf8079e29423e2c566237043d1d2e3e5257780432f76575d4355b5e16551->leave($__internal_8c49bf8079e29423e2c566237043d1d2e3e5257780432f76575d4355b5e16551_prof);

        
        $__internal_9691c373ba34805f2a5a6352f7716b123ce2f362b53606f363b029371033c02a->leave($__internal_9691c373ba34805f2a5a6352f7716b123ce2f362b53606f363b029371033c02a_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ad5b49b2b3d9792456770dfee35d0e98aa62f78e588dc5521d3872583f5502b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5b49b2b3d9792456770dfee35d0e98aa62f78e588dc5521d3872583f5502b9->enter($__internal_ad5b49b2b3d9792456770dfee35d0e98aa62f78e588dc5521d3872583f5502b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_fa0b67796fc2b89d6ceaf14d87eefc3e51b5ca4d43ebfb2710e27fc9a48f6f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b67796fc2b89d6ceaf14d87eefc3e51b5ca4d43ebfb2710e27fc9a48f6f69->enter($__internal_fa0b67796fc2b89d6ceaf14d87eefc3e51b5ca4d43ebfb2710e27fc9a48f6f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fa0b67796fc2b89d6ceaf14d87eefc3e51b5ca4d43ebfb2710e27fc9a48f6f69->leave($__internal_fa0b67796fc2b89d6ceaf14d87eefc3e51b5ca4d43ebfb2710e27fc9a48f6f69_prof);

        
        $__internal_ad5b49b2b3d9792456770dfee35d0e98aa62f78e588dc5521d3872583f5502b9->leave($__internal_ad5b49b2b3d9792456770dfee35d0e98aa62f78e588dc5521d3872583f5502b9_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_87e58e2492c009af52755293e9c1a9192ca5424a1c27d6f9a8ad6e4573c01ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e58e2492c009af52755293e9c1a9192ca5424a1c27d6f9a8ad6e4573c01ee7->enter($__internal_87e58e2492c009af52755293e9c1a9192ca5424a1c27d6f9a8ad6e4573c01ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_173555cfc648bf7848c0dbb23e15f4b41fd221d42a9f7220adba1f20e05ed5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173555cfc648bf7848c0dbb23e15f4b41fd221d42a9f7220adba1f20e05ed5b3->enter($__internal_173555cfc648bf7848c0dbb23e15f4b41fd221d42a9f7220adba1f20e05ed5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_173555cfc648bf7848c0dbb23e15f4b41fd221d42a9f7220adba1f20e05ed5b3->leave($__internal_173555cfc648bf7848c0dbb23e15f4b41fd221d42a9f7220adba1f20e05ed5b3_prof);

        
        $__internal_87e58e2492c009af52755293e9c1a9192ca5424a1c27d6f9a8ad6e4573c01ee7->leave($__internal_87e58e2492c009af52755293e9c1a9192ca5424a1c27d6f9a8ad6e4573c01ee7_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8fed3bc592eb4adc2f8205ec2e56957b0e2038aeb814ca3ee10105f84fbd3355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fed3bc592eb4adc2f8205ec2e56957b0e2038aeb814ca3ee10105f84fbd3355->enter($__internal_8fed3bc592eb4adc2f8205ec2e56957b0e2038aeb814ca3ee10105f84fbd3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b8da3dbcc5d2de749595950ea07339e9c6ab6e24e81270e58de21c281f6aa0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8da3dbcc5d2de749595950ea07339e9c6ab6e24e81270e58de21c281f6aa0f7->enter($__internal_b8da3dbcc5d2de749595950ea07339e9c6ab6e24e81270e58de21c281f6aa0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b8da3dbcc5d2de749595950ea07339e9c6ab6e24e81270e58de21c281f6aa0f7->leave($__internal_b8da3dbcc5d2de749595950ea07339e9c6ab6e24e81270e58de21c281f6aa0f7_prof);

        
        $__internal_8fed3bc592eb4adc2f8205ec2e56957b0e2038aeb814ca3ee10105f84fbd3355->leave($__internal_8fed3bc592eb4adc2f8205ec2e56957b0e2038aeb814ca3ee10105f84fbd3355_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_88a78a9aa4738cc3577c4b59265cd623872e6cacab50c7721b9755f7e6cc0731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a78a9aa4738cc3577c4b59265cd623872e6cacab50c7721b9755f7e6cc0731->enter($__internal_88a78a9aa4738cc3577c4b59265cd623872e6cacab50c7721b9755f7e6cc0731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e75645b79d238ecb173d5deff412f6d9bd0e55fdc80a03e0dc862a3fb18edc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75645b79d238ecb173d5deff412f6d9bd0e55fdc80a03e0dc862a3fb18edc31->enter($__internal_e75645b79d238ecb173d5deff412f6d9bd0e55fdc80a03e0dc862a3fb18edc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e75645b79d238ecb173d5deff412f6d9bd0e55fdc80a03e0dc862a3fb18edc31->leave($__internal_e75645b79d238ecb173d5deff412f6d9bd0e55fdc80a03e0dc862a3fb18edc31_prof);

        
        $__internal_88a78a9aa4738cc3577c4b59265cd623872e6cacab50c7721b9755f7e6cc0731->leave($__internal_88a78a9aa4738cc3577c4b59265cd623872e6cacab50c7721b9755f7e6cc0731_prof);

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
", "bootstrap_3_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
