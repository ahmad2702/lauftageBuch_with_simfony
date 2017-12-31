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
        $__internal_356b86dbeff742dcb705abdc394e5ea394a0feb3e0b00209cd256313a3c15a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356b86dbeff742dcb705abdc394e5ea394a0feb3e0b00209cd256313a3c15a99->enter($__internal_356b86dbeff742dcb705abdc394e5ea394a0feb3e0b00209cd256313a3c15a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9897a8644f323433bd7e0e9a04ce51b3b3835041c8a7b4b0bfac0800599efd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9897a8644f323433bd7e0e9a04ce51b3b3835041c8a7b4b0bfac0800599efd6e->enter($__internal_9897a8644f323433bd7e0e9a04ce51b3b3835041c8a7b4b0bfac0800599efd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_356b86dbeff742dcb705abdc394e5ea394a0feb3e0b00209cd256313a3c15a99->leave($__internal_356b86dbeff742dcb705abdc394e5ea394a0feb3e0b00209cd256313a3c15a99_prof);

        
        $__internal_9897a8644f323433bd7e0e9a04ce51b3b3835041c8a7b4b0bfac0800599efd6e->leave($__internal_9897a8644f323433bd7e0e9a04ce51b3b3835041c8a7b4b0bfac0800599efd6e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b32da66d9b079f815d899a93242b8a74c740c130a9b03efd0293873e772ccfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32da66d9b079f815d899a93242b8a74c740c130a9b03efd0293873e772ccfc2->enter($__internal_b32da66d9b079f815d899a93242b8a74c740c130a9b03efd0293873e772ccfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_765d19c308656a4f04a2beee73fd4d77b54784714fe415607c37e35c49a16636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765d19c308656a4f04a2beee73fd4d77b54784714fe415607c37e35c49a16636->enter($__internal_765d19c308656a4f04a2beee73fd4d77b54784714fe415607c37e35c49a16636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_765d19c308656a4f04a2beee73fd4d77b54784714fe415607c37e35c49a16636->leave($__internal_765d19c308656a4f04a2beee73fd4d77b54784714fe415607c37e35c49a16636_prof);

        
        $__internal_b32da66d9b079f815d899a93242b8a74c740c130a9b03efd0293873e772ccfc2->leave($__internal_b32da66d9b079f815d899a93242b8a74c740c130a9b03efd0293873e772ccfc2_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0baddc589bba13fb9586de14667cdbafce68ec8f4205dd914f5397627978d934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baddc589bba13fb9586de14667cdbafce68ec8f4205dd914f5397627978d934->enter($__internal_0baddc589bba13fb9586de14667cdbafce68ec8f4205dd914f5397627978d934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3860de2ece81aacf22434ff9fcc37da9ab78a1884c8b0fcdf22cbbeeaf1ad5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3860de2ece81aacf22434ff9fcc37da9ab78a1884c8b0fcdf22cbbeeaf1ad5e6->enter($__internal_3860de2ece81aacf22434ff9fcc37da9ab78a1884c8b0fcdf22cbbeeaf1ad5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3860de2ece81aacf22434ff9fcc37da9ab78a1884c8b0fcdf22cbbeeaf1ad5e6->leave($__internal_3860de2ece81aacf22434ff9fcc37da9ab78a1884c8b0fcdf22cbbeeaf1ad5e6_prof);

        
        $__internal_0baddc589bba13fb9586de14667cdbafce68ec8f4205dd914f5397627978d934->leave($__internal_0baddc589bba13fb9586de14667cdbafce68ec8f4205dd914f5397627978d934_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dde6b0f5990e05cd9161c21fcd6dfb8d3c18ba4c094f6747cf0d2c7f890dc270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde6b0f5990e05cd9161c21fcd6dfb8d3c18ba4c094f6747cf0d2c7f890dc270->enter($__internal_dde6b0f5990e05cd9161c21fcd6dfb8d3c18ba4c094f6747cf0d2c7f890dc270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_31a3f6c30c33b959b943e7aed200f6af0042929238b4acaf05970cfd0041c0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a3f6c30c33b959b943e7aed200f6af0042929238b4acaf05970cfd0041c0e3->enter($__internal_31a3f6c30c33b959b943e7aed200f6af0042929238b4acaf05970cfd0041c0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_31a3f6c30c33b959b943e7aed200f6af0042929238b4acaf05970cfd0041c0e3->leave($__internal_31a3f6c30c33b959b943e7aed200f6af0042929238b4acaf05970cfd0041c0e3_prof);

        
        $__internal_dde6b0f5990e05cd9161c21fcd6dfb8d3c18ba4c094f6747cf0d2c7f890dc270->leave($__internal_dde6b0f5990e05cd9161c21fcd6dfb8d3c18ba4c094f6747cf0d2c7f890dc270_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d914aed2ca5bec22c6b13b535794dca843381a94043f6d6c9c451c53a872759a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d914aed2ca5bec22c6b13b535794dca843381a94043f6d6c9c451c53a872759a->enter($__internal_d914aed2ca5bec22c6b13b535794dca843381a94043f6d6c9c451c53a872759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d66669dda4afd39f8530bf858efb25328f0825e2f4fdffded32887279e1e420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66669dda4afd39f8530bf858efb25328f0825e2f4fdffded32887279e1e420f->enter($__internal_d66669dda4afd39f8530bf858efb25328f0825e2f4fdffded32887279e1e420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d66669dda4afd39f8530bf858efb25328f0825e2f4fdffded32887279e1e420f->leave($__internal_d66669dda4afd39f8530bf858efb25328f0825e2f4fdffded32887279e1e420f_prof);

        
        $__internal_d914aed2ca5bec22c6b13b535794dca843381a94043f6d6c9c451c53a872759a->leave($__internal_d914aed2ca5bec22c6b13b535794dca843381a94043f6d6c9c451c53a872759a_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_68e433332b44aed09394b69c78cce83f9776b3301e34a67e8eb0fda3a4434dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e433332b44aed09394b69c78cce83f9776b3301e34a67e8eb0fda3a4434dce->enter($__internal_68e433332b44aed09394b69c78cce83f9776b3301e34a67e8eb0fda3a4434dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0f38fd9cfe60be009a00d13263353de1be1d52da00bd415e7dd868ee0ee0826f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f38fd9cfe60be009a00d13263353de1be1d52da00bd415e7dd868ee0ee0826f->enter($__internal_0f38fd9cfe60be009a00d13263353de1be1d52da00bd415e7dd868ee0ee0826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0f38fd9cfe60be009a00d13263353de1be1d52da00bd415e7dd868ee0ee0826f->leave($__internal_0f38fd9cfe60be009a00d13263353de1be1d52da00bd415e7dd868ee0ee0826f_prof);

        
        $__internal_68e433332b44aed09394b69c78cce83f9776b3301e34a67e8eb0fda3a4434dce->leave($__internal_68e433332b44aed09394b69c78cce83f9776b3301e34a67e8eb0fda3a4434dce_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c91d5754257d14565d500502543a4ed13dfe766c7fa20e91ec1f25fab868ef35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91d5754257d14565d500502543a4ed13dfe766c7fa20e91ec1f25fab868ef35->enter($__internal_c91d5754257d14565d500502543a4ed13dfe766c7fa20e91ec1f25fab868ef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3291b786574119006dd0440eaf0867171bcdce13843d67ac3bd15faca93e34c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3291b786574119006dd0440eaf0867171bcdce13843d67ac3bd15faca93e34c0->enter($__internal_3291b786574119006dd0440eaf0867171bcdce13843d67ac3bd15faca93e34c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3291b786574119006dd0440eaf0867171bcdce13843d67ac3bd15faca93e34c0->leave($__internal_3291b786574119006dd0440eaf0867171bcdce13843d67ac3bd15faca93e34c0_prof);

        
        $__internal_c91d5754257d14565d500502543a4ed13dfe766c7fa20e91ec1f25fab868ef35->leave($__internal_c91d5754257d14565d500502543a4ed13dfe766c7fa20e91ec1f25fab868ef35_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a453cac9cbb7675ebce8e9236213126c21af25feea6fca19b3f8caa2a1813ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a453cac9cbb7675ebce8e9236213126c21af25feea6fca19b3f8caa2a1813ab6->enter($__internal_a453cac9cbb7675ebce8e9236213126c21af25feea6fca19b3f8caa2a1813ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_22cf68074723c4854177e23dbf3ce4d5578e2c11ae4cd59dd9d772473ccfbcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cf68074723c4854177e23dbf3ce4d5578e2c11ae4cd59dd9d772473ccfbcaa->enter($__internal_22cf68074723c4854177e23dbf3ce4d5578e2c11ae4cd59dd9d772473ccfbcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_22cf68074723c4854177e23dbf3ce4d5578e2c11ae4cd59dd9d772473ccfbcaa->leave($__internal_22cf68074723c4854177e23dbf3ce4d5578e2c11ae4cd59dd9d772473ccfbcaa_prof);

        
        $__internal_a453cac9cbb7675ebce8e9236213126c21af25feea6fca19b3f8caa2a1813ab6->leave($__internal_a453cac9cbb7675ebce8e9236213126c21af25feea6fca19b3f8caa2a1813ab6_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c785b1628598eb7eb2793c83e69f39ce7e17e947fe04ef46a1b3eb7bed57cf95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c785b1628598eb7eb2793c83e69f39ce7e17e947fe04ef46a1b3eb7bed57cf95->enter($__internal_c785b1628598eb7eb2793c83e69f39ce7e17e947fe04ef46a1b3eb7bed57cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_fa604f896c5150ae16bef062df47d12ee442bd762df814534e050f79cc359a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa604f896c5150ae16bef062df47d12ee442bd762df814534e050f79cc359a8f->enter($__internal_fa604f896c5150ae16bef062df47d12ee442bd762df814534e050f79cc359a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fa604f896c5150ae16bef062df47d12ee442bd762df814534e050f79cc359a8f->leave($__internal_fa604f896c5150ae16bef062df47d12ee442bd762df814534e050f79cc359a8f_prof);

        
        $__internal_c785b1628598eb7eb2793c83e69f39ce7e17e947fe04ef46a1b3eb7bed57cf95->leave($__internal_c785b1628598eb7eb2793c83e69f39ce7e17e947fe04ef46a1b3eb7bed57cf95_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6b5830497bf4daa13ee7b3e9773c31162ccefdbce78d7ca1822acbd5d82b07bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5830497bf4daa13ee7b3e9773c31162ccefdbce78d7ca1822acbd5d82b07bd->enter($__internal_6b5830497bf4daa13ee7b3e9773c31162ccefdbce78d7ca1822acbd5d82b07bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f0d908c54da57262830f4ba8235f0f85d7114e9d211437dbc7ba0dbcd4446fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d908c54da57262830f4ba8235f0f85d7114e9d211437dbc7ba0dbcd4446fe5->enter($__internal_f0d908c54da57262830f4ba8235f0f85d7114e9d211437dbc7ba0dbcd4446fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f0d908c54da57262830f4ba8235f0f85d7114e9d211437dbc7ba0dbcd4446fe5->leave($__internal_f0d908c54da57262830f4ba8235f0f85d7114e9d211437dbc7ba0dbcd4446fe5_prof);

        
        $__internal_6b5830497bf4daa13ee7b3e9773c31162ccefdbce78d7ca1822acbd5d82b07bd->leave($__internal_6b5830497bf4daa13ee7b3e9773c31162ccefdbce78d7ca1822acbd5d82b07bd_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d252bf9d9f902e95074ee09bfc030645884fade8bb0e0d2ea3ea456ac8b1bcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d252bf9d9f902e95074ee09bfc030645884fade8bb0e0d2ea3ea456ac8b1bcfa->enter($__internal_d252bf9d9f902e95074ee09bfc030645884fade8bb0e0d2ea3ea456ac8b1bcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5b368db41b69154fcde5f9171b5fe74f71786cc439f09e03e129f6a6a3e50ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b368db41b69154fcde5f9171b5fe74f71786cc439f09e03e129f6a6a3e50ebd->enter($__internal_5b368db41b69154fcde5f9171b5fe74f71786cc439f09e03e129f6a6a3e50ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5b368db41b69154fcde5f9171b5fe74f71786cc439f09e03e129f6a6a3e50ebd->leave($__internal_5b368db41b69154fcde5f9171b5fe74f71786cc439f09e03e129f6a6a3e50ebd_prof);

        
        $__internal_d252bf9d9f902e95074ee09bfc030645884fade8bb0e0d2ea3ea456ac8b1bcfa->leave($__internal_d252bf9d9f902e95074ee09bfc030645884fade8bb0e0d2ea3ea456ac8b1bcfa_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7709148170000dbecd08a47c08084de03f8d4cf30f7e7777c1faf350c24c05c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7709148170000dbecd08a47c08084de03f8d4cf30f7e7777c1faf350c24c05c8->enter($__internal_7709148170000dbecd08a47c08084de03f8d4cf30f7e7777c1faf350c24c05c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7f4a6652102baf75498ea69383510521b369b90b62f1f22729b84a639e56af5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4a6652102baf75498ea69383510521b369b90b62f1f22729b84a639e56af5a->enter($__internal_7f4a6652102baf75498ea69383510521b369b90b62f1f22729b84a639e56af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_7f4a6652102baf75498ea69383510521b369b90b62f1f22729b84a639e56af5a->leave($__internal_7f4a6652102baf75498ea69383510521b369b90b62f1f22729b84a639e56af5a_prof);

        
        $__internal_7709148170000dbecd08a47c08084de03f8d4cf30f7e7777c1faf350c24c05c8->leave($__internal_7709148170000dbecd08a47c08084de03f8d4cf30f7e7777c1faf350c24c05c8_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_eea54f14cfb89e8075464a220a8a099b9578eead0d69a124cc2131d73b6abf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea54f14cfb89e8075464a220a8a099b9578eead0d69a124cc2131d73b6abf85->enter($__internal_eea54f14cfb89e8075464a220a8a099b9578eead0d69a124cc2131d73b6abf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_03e3bf1cf4ca0f7ae5fbb1d78a76057284f2281d731004ed404d7297c36f3364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e3bf1cf4ca0f7ae5fbb1d78a76057284f2281d731004ed404d7297c36f3364->enter($__internal_03e3bf1cf4ca0f7ae5fbb1d78a76057284f2281d731004ed404d7297c36f3364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_03e3bf1cf4ca0f7ae5fbb1d78a76057284f2281d731004ed404d7297c36f3364->leave($__internal_03e3bf1cf4ca0f7ae5fbb1d78a76057284f2281d731004ed404d7297c36f3364_prof);

        
        $__internal_eea54f14cfb89e8075464a220a8a099b9578eead0d69a124cc2131d73b6abf85->leave($__internal_eea54f14cfb89e8075464a220a8a099b9578eead0d69a124cc2131d73b6abf85_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cff0d9d7d2612e25fcd53e43511728fd1761e443857851dbacb5106b404c9acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff0d9d7d2612e25fcd53e43511728fd1761e443857851dbacb5106b404c9acd->enter($__internal_cff0d9d7d2612e25fcd53e43511728fd1761e443857851dbacb5106b404c9acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e316d6503bbdf9089e5c044aea2c0c95a858c041850d6df2a16539f05fb2cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e316d6503bbdf9089e5c044aea2c0c95a858c041850d6df2a16539f05fb2cb9a->enter($__internal_e316d6503bbdf9089e5c044aea2c0c95a858c041850d6df2a16539f05fb2cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e316d6503bbdf9089e5c044aea2c0c95a858c041850d6df2a16539f05fb2cb9a->leave($__internal_e316d6503bbdf9089e5c044aea2c0c95a858c041850d6df2a16539f05fb2cb9a_prof);

        
        $__internal_cff0d9d7d2612e25fcd53e43511728fd1761e443857851dbacb5106b404c9acd->leave($__internal_cff0d9d7d2612e25fcd53e43511728fd1761e443857851dbacb5106b404c9acd_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d4135d046e8b8cc175d7c4a6e505cd742b25d546844eb7d778a53801c3ec1184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4135d046e8b8cc175d7c4a6e505cd742b25d546844eb7d778a53801c3ec1184->enter($__internal_d4135d046e8b8cc175d7c4a6e505cd742b25d546844eb7d778a53801c3ec1184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a3c5a317e21bd9e24014a44e0a82798fdda443459f8dd7f48eacdaf32f26e282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c5a317e21bd9e24014a44e0a82798fdda443459f8dd7f48eacdaf32f26e282->enter($__internal_a3c5a317e21bd9e24014a44e0a82798fdda443459f8dd7f48eacdaf32f26e282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a3c5a317e21bd9e24014a44e0a82798fdda443459f8dd7f48eacdaf32f26e282->leave($__internal_a3c5a317e21bd9e24014a44e0a82798fdda443459f8dd7f48eacdaf32f26e282_prof);

        
        $__internal_d4135d046e8b8cc175d7c4a6e505cd742b25d546844eb7d778a53801c3ec1184->leave($__internal_d4135d046e8b8cc175d7c4a6e505cd742b25d546844eb7d778a53801c3ec1184_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2051c489229f927ef7a04910d532389638d1956d90bcc52b5f85ee66574add8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2051c489229f927ef7a04910d532389638d1956d90bcc52b5f85ee66574add8e->enter($__internal_2051c489229f927ef7a04910d532389638d1956d90bcc52b5f85ee66574add8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_dbcb8b4e84580483af9f211340d13e52ca518c39a152675c76b02ed930c622df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcb8b4e84580483af9f211340d13e52ca518c39a152675c76b02ed930c622df->enter($__internal_dbcb8b4e84580483af9f211340d13e52ca518c39a152675c76b02ed930c622df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dbcb8b4e84580483af9f211340d13e52ca518c39a152675c76b02ed930c622df->leave($__internal_dbcb8b4e84580483af9f211340d13e52ca518c39a152675c76b02ed930c622df_prof);

        
        $__internal_2051c489229f927ef7a04910d532389638d1956d90bcc52b5f85ee66574add8e->leave($__internal_2051c489229f927ef7a04910d532389638d1956d90bcc52b5f85ee66574add8e_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7bbedc5f19dd35a5fa72c1bc7371b4f09784e8a3833b1b89d32760e7caf6e918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbedc5f19dd35a5fa72c1bc7371b4f09784e8a3833b1b89d32760e7caf6e918->enter($__internal_7bbedc5f19dd35a5fa72c1bc7371b4f09784e8a3833b1b89d32760e7caf6e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_52b8eedcf08e0d7b4e4593fb902e2a990247ba91a11f6f9365c5592171740e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b8eedcf08e0d7b4e4593fb902e2a990247ba91a11f6f9365c5592171740e85->enter($__internal_52b8eedcf08e0d7b4e4593fb902e2a990247ba91a11f6f9365c5592171740e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_52b8eedcf08e0d7b4e4593fb902e2a990247ba91a11f6f9365c5592171740e85->leave($__internal_52b8eedcf08e0d7b4e4593fb902e2a990247ba91a11f6f9365c5592171740e85_prof);

        
        $__internal_7bbedc5f19dd35a5fa72c1bc7371b4f09784e8a3833b1b89d32760e7caf6e918->leave($__internal_7bbedc5f19dd35a5fa72c1bc7371b4f09784e8a3833b1b89d32760e7caf6e918_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_892cd4c6eb1e58d1e2f553bae704f7190f898538a772215ab8c04a6819930a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892cd4c6eb1e58d1e2f553bae704f7190f898538a772215ab8c04a6819930a05->enter($__internal_892cd4c6eb1e58d1e2f553bae704f7190f898538a772215ab8c04a6819930a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_36e4e9e8a7533d9b419d03e5e29499e16dd50832197c48e44ffa56ffd234a84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e4e9e8a7533d9b419d03e5e29499e16dd50832197c48e44ffa56ffd234a84b->enter($__internal_36e4e9e8a7533d9b419d03e5e29499e16dd50832197c48e44ffa56ffd234a84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_36e4e9e8a7533d9b419d03e5e29499e16dd50832197c48e44ffa56ffd234a84b->leave($__internal_36e4e9e8a7533d9b419d03e5e29499e16dd50832197c48e44ffa56ffd234a84b_prof);

        
        $__internal_892cd4c6eb1e58d1e2f553bae704f7190f898538a772215ab8c04a6819930a05->leave($__internal_892cd4c6eb1e58d1e2f553bae704f7190f898538a772215ab8c04a6819930a05_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f28f6dc0c1898173aa8c05c32c16ef25a318c0117b83b66fb3a5a34b5677d2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28f6dc0c1898173aa8c05c32c16ef25a318c0117b83b66fb3a5a34b5677d2c0->enter($__internal_f28f6dc0c1898173aa8c05c32c16ef25a318c0117b83b66fb3a5a34b5677d2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9a5d4f39e164641874d4004139496b426f404991923cab670a17faf0dd05bbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5d4f39e164641874d4004139496b426f404991923cab670a17faf0dd05bbde->enter($__internal_9a5d4f39e164641874d4004139496b426f404991923cab670a17faf0dd05bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9a5d4f39e164641874d4004139496b426f404991923cab670a17faf0dd05bbde->leave($__internal_9a5d4f39e164641874d4004139496b426f404991923cab670a17faf0dd05bbde_prof);

        
        $__internal_f28f6dc0c1898173aa8c05c32c16ef25a318c0117b83b66fb3a5a34b5677d2c0->leave($__internal_f28f6dc0c1898173aa8c05c32c16ef25a318c0117b83b66fb3a5a34b5677d2c0_prof);

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
