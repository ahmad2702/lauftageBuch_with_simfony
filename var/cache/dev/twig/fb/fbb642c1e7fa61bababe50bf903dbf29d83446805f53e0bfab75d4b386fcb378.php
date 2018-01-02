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
        $__internal_690e85ecca70650f2090c365b7d1e4bfcb47148c56b3da39a2f5771a9b0228ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690e85ecca70650f2090c365b7d1e4bfcb47148c56b3da39a2f5771a9b0228ee->enter($__internal_690e85ecca70650f2090c365b7d1e4bfcb47148c56b3da39a2f5771a9b0228ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9fa6f339603991b9c5f2205307ad80425612fb3d7dcf47b3afbf7617a039bb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa6f339603991b9c5f2205307ad80425612fb3d7dcf47b3afbf7617a039bb40->enter($__internal_9fa6f339603991b9c5f2205307ad80425612fb3d7dcf47b3afbf7617a039bb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_690e85ecca70650f2090c365b7d1e4bfcb47148c56b3da39a2f5771a9b0228ee->leave($__internal_690e85ecca70650f2090c365b7d1e4bfcb47148c56b3da39a2f5771a9b0228ee_prof);

        
        $__internal_9fa6f339603991b9c5f2205307ad80425612fb3d7dcf47b3afbf7617a039bb40->leave($__internal_9fa6f339603991b9c5f2205307ad80425612fb3d7dcf47b3afbf7617a039bb40_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f1f52818499ed15693c1e210465a0e48753730452d2849fe3296f2461d31f8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f52818499ed15693c1e210465a0e48753730452d2849fe3296f2461d31f8d0->enter($__internal_f1f52818499ed15693c1e210465a0e48753730452d2849fe3296f2461d31f8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b9278347d2cb323c512edbc01ea2dabbe74690d74b3f300b8ba6ba40d66d8e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9278347d2cb323c512edbc01ea2dabbe74690d74b3f300b8ba6ba40d66d8e71->enter($__internal_b9278347d2cb323c512edbc01ea2dabbe74690d74b3f300b8ba6ba40d66d8e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b9278347d2cb323c512edbc01ea2dabbe74690d74b3f300b8ba6ba40d66d8e71->leave($__internal_b9278347d2cb323c512edbc01ea2dabbe74690d74b3f300b8ba6ba40d66d8e71_prof);

        
        $__internal_f1f52818499ed15693c1e210465a0e48753730452d2849fe3296f2461d31f8d0->leave($__internal_f1f52818499ed15693c1e210465a0e48753730452d2849fe3296f2461d31f8d0_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b54b3cd6356c8284c2eeff8a1e0f2554644bf1731e7f091306869238becc24f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54b3cd6356c8284c2eeff8a1e0f2554644bf1731e7f091306869238becc24f4->enter($__internal_b54b3cd6356c8284c2eeff8a1e0f2554644bf1731e7f091306869238becc24f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a873fe6bf75878810f54d33ce6c02482d04a29325c570678384a5122f22fdee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a873fe6bf75878810f54d33ce6c02482d04a29325c570678384a5122f22fdee0->enter($__internal_a873fe6bf75878810f54d33ce6c02482d04a29325c570678384a5122f22fdee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a873fe6bf75878810f54d33ce6c02482d04a29325c570678384a5122f22fdee0->leave($__internal_a873fe6bf75878810f54d33ce6c02482d04a29325c570678384a5122f22fdee0_prof);

        
        $__internal_b54b3cd6356c8284c2eeff8a1e0f2554644bf1731e7f091306869238becc24f4->leave($__internal_b54b3cd6356c8284c2eeff8a1e0f2554644bf1731e7f091306869238becc24f4_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_81fd6106fbf29161714d36b1fc952d73a1bfc5c1a8cfdc03735c87f4ed85174f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fd6106fbf29161714d36b1fc952d73a1bfc5c1a8cfdc03735c87f4ed85174f->enter($__internal_81fd6106fbf29161714d36b1fc952d73a1bfc5c1a8cfdc03735c87f4ed85174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2e66971e813a391c9ffbe80177ca324c7765cf749670fd0a16ed55e6c5752d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e66971e813a391c9ffbe80177ca324c7765cf749670fd0a16ed55e6c5752d0d->enter($__internal_2e66971e813a391c9ffbe80177ca324c7765cf749670fd0a16ed55e6c5752d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_2e66971e813a391c9ffbe80177ca324c7765cf749670fd0a16ed55e6c5752d0d->leave($__internal_2e66971e813a391c9ffbe80177ca324c7765cf749670fd0a16ed55e6c5752d0d_prof);

        
        $__internal_81fd6106fbf29161714d36b1fc952d73a1bfc5c1a8cfdc03735c87f4ed85174f->leave($__internal_81fd6106fbf29161714d36b1fc952d73a1bfc5c1a8cfdc03735c87f4ed85174f_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_eff070c757785162378e46574ec5a026037d31bb9819e66cab6ba6d2584d28ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff070c757785162378e46574ec5a026037d31bb9819e66cab6ba6d2584d28ea->enter($__internal_eff070c757785162378e46574ec5a026037d31bb9819e66cab6ba6d2584d28ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8244e6e3e304286e8d548a56204c479d03f648f41eacbc34f7a94f90e4c28fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8244e6e3e304286e8d548a56204c479d03f648f41eacbc34f7a94f90e4c28fa7->enter($__internal_8244e6e3e304286e8d548a56204c479d03f648f41eacbc34f7a94f90e4c28fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8244e6e3e304286e8d548a56204c479d03f648f41eacbc34f7a94f90e4c28fa7->leave($__internal_8244e6e3e304286e8d548a56204c479d03f648f41eacbc34f7a94f90e4c28fa7_prof);

        
        $__internal_eff070c757785162378e46574ec5a026037d31bb9819e66cab6ba6d2584d28ea->leave($__internal_eff070c757785162378e46574ec5a026037d31bb9819e66cab6ba6d2584d28ea_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a2cb022640147185f900c332d2215ef7ef00b81d5d9b11eaeabeb936ca44b891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cb022640147185f900c332d2215ef7ef00b81d5d9b11eaeabeb936ca44b891->enter($__internal_a2cb022640147185f900c332d2215ef7ef00b81d5d9b11eaeabeb936ca44b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f275eb7f43d08c773a2ba24300e40a4fea944aecde749ebdd57c83c5572dc975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f275eb7f43d08c773a2ba24300e40a4fea944aecde749ebdd57c83c5572dc975->enter($__internal_f275eb7f43d08c773a2ba24300e40a4fea944aecde749ebdd57c83c5572dc975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f275eb7f43d08c773a2ba24300e40a4fea944aecde749ebdd57c83c5572dc975->leave($__internal_f275eb7f43d08c773a2ba24300e40a4fea944aecde749ebdd57c83c5572dc975_prof);

        
        $__internal_a2cb022640147185f900c332d2215ef7ef00b81d5d9b11eaeabeb936ca44b891->leave($__internal_a2cb022640147185f900c332d2215ef7ef00b81d5d9b11eaeabeb936ca44b891_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d506eae628a5cd27822db77e7c1da0a21c9fb793f9e522243c2daadd1eddfada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d506eae628a5cd27822db77e7c1da0a21c9fb793f9e522243c2daadd1eddfada->enter($__internal_d506eae628a5cd27822db77e7c1da0a21c9fb793f9e522243c2daadd1eddfada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6341115d491ef0b57037afa0bb3a1222ded7390d50f3d4752614feb03cf8867e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6341115d491ef0b57037afa0bb3a1222ded7390d50f3d4752614feb03cf8867e->enter($__internal_6341115d491ef0b57037afa0bb3a1222ded7390d50f3d4752614feb03cf8867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6341115d491ef0b57037afa0bb3a1222ded7390d50f3d4752614feb03cf8867e->leave($__internal_6341115d491ef0b57037afa0bb3a1222ded7390d50f3d4752614feb03cf8867e_prof);

        
        $__internal_d506eae628a5cd27822db77e7c1da0a21c9fb793f9e522243c2daadd1eddfada->leave($__internal_d506eae628a5cd27822db77e7c1da0a21c9fb793f9e522243c2daadd1eddfada_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d5d040d6e4b165248aedc6f0544e7df39ab6269da19655fa1ba69ce16e2af07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d040d6e4b165248aedc6f0544e7df39ab6269da19655fa1ba69ce16e2af07d->enter($__internal_d5d040d6e4b165248aedc6f0544e7df39ab6269da19655fa1ba69ce16e2af07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7d255b8b150148a7c211f86de2fcd59125bc21b8d50c5ff0cd71b7641d78bcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d255b8b150148a7c211f86de2fcd59125bc21b8d50c5ff0cd71b7641d78bcf1->enter($__internal_7d255b8b150148a7c211f86de2fcd59125bc21b8d50c5ff0cd71b7641d78bcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7d255b8b150148a7c211f86de2fcd59125bc21b8d50c5ff0cd71b7641d78bcf1->leave($__internal_7d255b8b150148a7c211f86de2fcd59125bc21b8d50c5ff0cd71b7641d78bcf1_prof);

        
        $__internal_d5d040d6e4b165248aedc6f0544e7df39ab6269da19655fa1ba69ce16e2af07d->leave($__internal_d5d040d6e4b165248aedc6f0544e7df39ab6269da19655fa1ba69ce16e2af07d_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_614f41d028d9cfd9baffcc6aecf98670ff405958bf708fcdd49da2d81f492f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614f41d028d9cfd9baffcc6aecf98670ff405958bf708fcdd49da2d81f492f06->enter($__internal_614f41d028d9cfd9baffcc6aecf98670ff405958bf708fcdd49da2d81f492f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f5a930a5bc7526e47162c4de1b054f9a8c329789f61e43d75d2882eb804b7205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a930a5bc7526e47162c4de1b054f9a8c329789f61e43d75d2882eb804b7205->enter($__internal_f5a930a5bc7526e47162c4de1b054f9a8c329789f61e43d75d2882eb804b7205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f5a930a5bc7526e47162c4de1b054f9a8c329789f61e43d75d2882eb804b7205->leave($__internal_f5a930a5bc7526e47162c4de1b054f9a8c329789f61e43d75d2882eb804b7205_prof);

        
        $__internal_614f41d028d9cfd9baffcc6aecf98670ff405958bf708fcdd49da2d81f492f06->leave($__internal_614f41d028d9cfd9baffcc6aecf98670ff405958bf708fcdd49da2d81f492f06_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2a1ffd0f25cce7c141c516c97899ee46be77e0072732963f00843f89a42ccb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1ffd0f25cce7c141c516c97899ee46be77e0072732963f00843f89a42ccb5e->enter($__internal_2a1ffd0f25cce7c141c516c97899ee46be77e0072732963f00843f89a42ccb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2aef8f894ce1a91e4b173fd7147a508b0d0db9a9dca3bbfc39470c7a775145e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aef8f894ce1a91e4b173fd7147a508b0d0db9a9dca3bbfc39470c7a775145e1->enter($__internal_2aef8f894ce1a91e4b173fd7147a508b0d0db9a9dca3bbfc39470c7a775145e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2aef8f894ce1a91e4b173fd7147a508b0d0db9a9dca3bbfc39470c7a775145e1->leave($__internal_2aef8f894ce1a91e4b173fd7147a508b0d0db9a9dca3bbfc39470c7a775145e1_prof);

        
        $__internal_2a1ffd0f25cce7c141c516c97899ee46be77e0072732963f00843f89a42ccb5e->leave($__internal_2a1ffd0f25cce7c141c516c97899ee46be77e0072732963f00843f89a42ccb5e_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bdefe337c24c1ff00616bedcc505f1db2775ca0997b853b7882d91cdc87fc2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdefe337c24c1ff00616bedcc505f1db2775ca0997b853b7882d91cdc87fc2d6->enter($__internal_bdefe337c24c1ff00616bedcc505f1db2775ca0997b853b7882d91cdc87fc2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d0dd6fad2577041fa69de6c94d615d47735c325d40f4b796c1fe1a042e0ca531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0dd6fad2577041fa69de6c94d615d47735c325d40f4b796c1fe1a042e0ca531->enter($__internal_d0dd6fad2577041fa69de6c94d615d47735c325d40f4b796c1fe1a042e0ca531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d0dd6fad2577041fa69de6c94d615d47735c325d40f4b796c1fe1a042e0ca531->leave($__internal_d0dd6fad2577041fa69de6c94d615d47735c325d40f4b796c1fe1a042e0ca531_prof);

        
        $__internal_bdefe337c24c1ff00616bedcc505f1db2775ca0997b853b7882d91cdc87fc2d6->leave($__internal_bdefe337c24c1ff00616bedcc505f1db2775ca0997b853b7882d91cdc87fc2d6_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0c3dae4c8453c7da80f2c4beac65dc1e83ff4cca53d83983b021682c3644f400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3dae4c8453c7da80f2c4beac65dc1e83ff4cca53d83983b021682c3644f400->enter($__internal_0c3dae4c8453c7da80f2c4beac65dc1e83ff4cca53d83983b021682c3644f400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e2b8d68e596eb842b9f1b7f984b1eea90a1cfe8e7c8aecad2bdff93714669fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b8d68e596eb842b9f1b7f984b1eea90a1cfe8e7c8aecad2bdff93714669fd2->enter($__internal_e2b8d68e596eb842b9f1b7f984b1eea90a1cfe8e7c8aecad2bdff93714669fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_e2b8d68e596eb842b9f1b7f984b1eea90a1cfe8e7c8aecad2bdff93714669fd2->leave($__internal_e2b8d68e596eb842b9f1b7f984b1eea90a1cfe8e7c8aecad2bdff93714669fd2_prof);

        
        $__internal_0c3dae4c8453c7da80f2c4beac65dc1e83ff4cca53d83983b021682c3644f400->leave($__internal_0c3dae4c8453c7da80f2c4beac65dc1e83ff4cca53d83983b021682c3644f400_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0e61d3d8605b185ea3d51e24cf00eefdd4c40d0532e2ced4fa86ca143d1a189e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e61d3d8605b185ea3d51e24cf00eefdd4c40d0532e2ced4fa86ca143d1a189e->enter($__internal_0e61d3d8605b185ea3d51e24cf00eefdd4c40d0532e2ced4fa86ca143d1a189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0d7caad1c0ca4addaf36cf518df8726592a1637f8c9728409d3304da152f5365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7caad1c0ca4addaf36cf518df8726592a1637f8c9728409d3304da152f5365->enter($__internal_0d7caad1c0ca4addaf36cf518df8726592a1637f8c9728409d3304da152f5365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0d7caad1c0ca4addaf36cf518df8726592a1637f8c9728409d3304da152f5365->leave($__internal_0d7caad1c0ca4addaf36cf518df8726592a1637f8c9728409d3304da152f5365_prof);

        
        $__internal_0e61d3d8605b185ea3d51e24cf00eefdd4c40d0532e2ced4fa86ca143d1a189e->leave($__internal_0e61d3d8605b185ea3d51e24cf00eefdd4c40d0532e2ced4fa86ca143d1a189e_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cc5dda19a9bc18238150a7c007ad402b73468beff64cbdcdd4ae39306462d4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5dda19a9bc18238150a7c007ad402b73468beff64cbdcdd4ae39306462d4a1->enter($__internal_cc5dda19a9bc18238150a7c007ad402b73468beff64cbdcdd4ae39306462d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_eb6a490115b32a1d3c20fbad45ce2f424999ab410fd27bb09ced34144c9c362e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6a490115b32a1d3c20fbad45ce2f424999ab410fd27bb09ced34144c9c362e->enter($__internal_eb6a490115b32a1d3c20fbad45ce2f424999ab410fd27bb09ced34144c9c362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eb6a490115b32a1d3c20fbad45ce2f424999ab410fd27bb09ced34144c9c362e->leave($__internal_eb6a490115b32a1d3c20fbad45ce2f424999ab410fd27bb09ced34144c9c362e_prof);

        
        $__internal_cc5dda19a9bc18238150a7c007ad402b73468beff64cbdcdd4ae39306462d4a1->leave($__internal_cc5dda19a9bc18238150a7c007ad402b73468beff64cbdcdd4ae39306462d4a1_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_fe6483b7aa2313ec5c7075415aaa94f448bd9f3c8128ace57222aaac238208a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6483b7aa2313ec5c7075415aaa94f448bd9f3c8128ace57222aaac238208a4->enter($__internal_fe6483b7aa2313ec5c7075415aaa94f448bd9f3c8128ace57222aaac238208a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6b8fd9f3659206601bcda78b29ebb72a6dd88e5196b72a0eab3792142ff47056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8fd9f3659206601bcda78b29ebb72a6dd88e5196b72a0eab3792142ff47056->enter($__internal_6b8fd9f3659206601bcda78b29ebb72a6dd88e5196b72a0eab3792142ff47056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6b8fd9f3659206601bcda78b29ebb72a6dd88e5196b72a0eab3792142ff47056->leave($__internal_6b8fd9f3659206601bcda78b29ebb72a6dd88e5196b72a0eab3792142ff47056_prof);

        
        $__internal_fe6483b7aa2313ec5c7075415aaa94f448bd9f3c8128ace57222aaac238208a4->leave($__internal_fe6483b7aa2313ec5c7075415aaa94f448bd9f3c8128ace57222aaac238208a4_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b3f80b74a8e3bdcc875055ae2ef0eed83cd5e424676f794e5d29dbaaa3782633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f80b74a8e3bdcc875055ae2ef0eed83cd5e424676f794e5d29dbaaa3782633->enter($__internal_b3f80b74a8e3bdcc875055ae2ef0eed83cd5e424676f794e5d29dbaaa3782633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e11dba6518b95774d108ccd7a7ef820f450e9449ff08f806c76500e0d5cf2a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11dba6518b95774d108ccd7a7ef820f450e9449ff08f806c76500e0d5cf2a2f->enter($__internal_e11dba6518b95774d108ccd7a7ef820f450e9449ff08f806c76500e0d5cf2a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e11dba6518b95774d108ccd7a7ef820f450e9449ff08f806c76500e0d5cf2a2f->leave($__internal_e11dba6518b95774d108ccd7a7ef820f450e9449ff08f806c76500e0d5cf2a2f_prof);

        
        $__internal_b3f80b74a8e3bdcc875055ae2ef0eed83cd5e424676f794e5d29dbaaa3782633->leave($__internal_b3f80b74a8e3bdcc875055ae2ef0eed83cd5e424676f794e5d29dbaaa3782633_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5f8211a71d1b9758b8204bc1d86d9c31ac51902e2c4acc84d8be7b47c04a15d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8211a71d1b9758b8204bc1d86d9c31ac51902e2c4acc84d8be7b47c04a15d9->enter($__internal_5f8211a71d1b9758b8204bc1d86d9c31ac51902e2c4acc84d8be7b47c04a15d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e7946cf0fe362321d16f69758ce1780432c10c9c4fd33a366775d97ef9d53e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7946cf0fe362321d16f69758ce1780432c10c9c4fd33a366775d97ef9d53e9f->enter($__internal_e7946cf0fe362321d16f69758ce1780432c10c9c4fd33a366775d97ef9d53e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_e7946cf0fe362321d16f69758ce1780432c10c9c4fd33a366775d97ef9d53e9f->leave($__internal_e7946cf0fe362321d16f69758ce1780432c10c9c4fd33a366775d97ef9d53e9f_prof);

        
        $__internal_5f8211a71d1b9758b8204bc1d86d9c31ac51902e2c4acc84d8be7b47c04a15d9->leave($__internal_5f8211a71d1b9758b8204bc1d86d9c31ac51902e2c4acc84d8be7b47c04a15d9_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_38c7e3cd612c7d892b7dd6aa09ce61a7cad3ffd707a8a279caf39e936a805ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c7e3cd612c7d892b7dd6aa09ce61a7cad3ffd707a8a279caf39e936a805ba5->enter($__internal_38c7e3cd612c7d892b7dd6aa09ce61a7cad3ffd707a8a279caf39e936a805ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e457215d19ae8900e4ca938f628b78e34f08dcb10bd89eb60a50252c9f15020d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e457215d19ae8900e4ca938f628b78e34f08dcb10bd89eb60a50252c9f15020d->enter($__internal_e457215d19ae8900e4ca938f628b78e34f08dcb10bd89eb60a50252c9f15020d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e457215d19ae8900e4ca938f628b78e34f08dcb10bd89eb60a50252c9f15020d->leave($__internal_e457215d19ae8900e4ca938f628b78e34f08dcb10bd89eb60a50252c9f15020d_prof);

        
        $__internal_38c7e3cd612c7d892b7dd6aa09ce61a7cad3ffd707a8a279caf39e936a805ba5->leave($__internal_38c7e3cd612c7d892b7dd6aa09ce61a7cad3ffd707a8a279caf39e936a805ba5_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_68b68d4615b1c27de2ad1143d35daee8b362170957485c2ac944c8e0f01febc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b68d4615b1c27de2ad1143d35daee8b362170957485c2ac944c8e0f01febc1->enter($__internal_68b68d4615b1c27de2ad1143d35daee8b362170957485c2ac944c8e0f01febc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1ad8b4d443eafe97e2befffba28afb973955b308f356d233dcfe7e5693e73b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad8b4d443eafe97e2befffba28afb973955b308f356d233dcfe7e5693e73b31->enter($__internal_1ad8b4d443eafe97e2befffba28afb973955b308f356d233dcfe7e5693e73b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_1ad8b4d443eafe97e2befffba28afb973955b308f356d233dcfe7e5693e73b31->leave($__internal_1ad8b4d443eafe97e2befffba28afb973955b308f356d233dcfe7e5693e73b31_prof);

        
        $__internal_68b68d4615b1c27de2ad1143d35daee8b362170957485c2ac944c8e0f01febc1->leave($__internal_68b68d4615b1c27de2ad1143d35daee8b362170957485c2ac944c8e0f01febc1_prof);

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
