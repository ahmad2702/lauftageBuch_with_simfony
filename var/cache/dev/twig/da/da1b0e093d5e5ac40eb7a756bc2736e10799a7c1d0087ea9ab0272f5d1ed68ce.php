<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_9b95e3aeb5ae9f462305dc5448a1f089e97ddf5a6842bea6faadbb01efe7198a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35162922fc01528ff7ef52ffd5b9a4966d47694207e14d600fe21202859341b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35162922fc01528ff7ef52ffd5b9a4966d47694207e14d600fe21202859341b7->enter($__internal_35162922fc01528ff7ef52ffd5b9a4966d47694207e14d600fe21202859341b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4d01be22fc8b09210251c31309e49cf8d2ec055756a8711da157c46e159bfc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d01be22fc8b09210251c31309e49cf8d2ec055756a8711da157c46e159bfc19->enter($__internal_4d01be22fc8b09210251c31309e49cf8d2ec055756a8711da157c46e159bfc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_35162922fc01528ff7ef52ffd5b9a4966d47694207e14d600fe21202859341b7->leave($__internal_35162922fc01528ff7ef52ffd5b9a4966d47694207e14d600fe21202859341b7_prof);

        
        $__internal_4d01be22fc8b09210251c31309e49cf8d2ec055756a8711da157c46e159bfc19->leave($__internal_4d01be22fc8b09210251c31309e49cf8d2ec055756a8711da157c46e159bfc19_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_af60d7e560ad7478b88a69906a34cb6d95fe2bbdb3daf4af59711f790e2e177d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af60d7e560ad7478b88a69906a34cb6d95fe2bbdb3daf4af59711f790e2e177d->enter($__internal_af60d7e560ad7478b88a69906a34cb6d95fe2bbdb3daf4af59711f790e2e177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d1600a6087b539d19af96db2bcc12ef931cbb215874ef2e09a81cacc49c053a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1600a6087b539d19af96db2bcc12ef931cbb215874ef2e09a81cacc49c053a5->enter($__internal_d1600a6087b539d19af96db2bcc12ef931cbb215874ef2e09a81cacc49c053a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_d1600a6087b539d19af96db2bcc12ef931cbb215874ef2e09a81cacc49c053a5->leave($__internal_d1600a6087b539d19af96db2bcc12ef931cbb215874ef2e09a81cacc49c053a5_prof);

        
        $__internal_af60d7e560ad7478b88a69906a34cb6d95fe2bbdb3daf4af59711f790e2e177d->leave($__internal_af60d7e560ad7478b88a69906a34cb6d95fe2bbdb3daf4af59711f790e2e177d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c98edbfd57299d9f2ac735af36196a9a5689447c54604d4e29bbd05fe51cc9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98edbfd57299d9f2ac735af36196a9a5689447c54604d4e29bbd05fe51cc9f7->enter($__internal_c98edbfd57299d9f2ac735af36196a9a5689447c54604d4e29bbd05fe51cc9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6cd6f5dceb2132c4814552472fed257c76aa87789ea8605815f41d1daf292707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd6f5dceb2132c4814552472fed257c76aa87789ea8605815f41d1daf292707->enter($__internal_6cd6f5dceb2132c4814552472fed257c76aa87789ea8605815f41d1daf292707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_6cd6f5dceb2132c4814552472fed257c76aa87789ea8605815f41d1daf292707->leave($__internal_6cd6f5dceb2132c4814552472fed257c76aa87789ea8605815f41d1daf292707_prof);

        
        $__internal_c98edbfd57299d9f2ac735af36196a9a5689447c54604d4e29bbd05fe51cc9f7->leave($__internal_c98edbfd57299d9f2ac735af36196a9a5689447c54604d4e29bbd05fe51cc9f7_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8a8e3fb12cfddd19aa3515c9c4172399f54548bec0035a489db012bc20485a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8e3fb12cfddd19aa3515c9c4172399f54548bec0035a489db012bc20485a07->enter($__internal_8a8e3fb12cfddd19aa3515c9c4172399f54548bec0035a489db012bc20485a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_404c527d82c4aeafcb8fe748c288af0c69104aedc9db80fb55222f35b74a838f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404c527d82c4aeafcb8fe748c288af0c69104aedc9db80fb55222f35b74a838f->enter($__internal_404c527d82c4aeafcb8fe748c288af0c69104aedc9db80fb55222f35b74a838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_404c527d82c4aeafcb8fe748c288af0c69104aedc9db80fb55222f35b74a838f->leave($__internal_404c527d82c4aeafcb8fe748c288af0c69104aedc9db80fb55222f35b74a838f_prof);

        
        $__internal_8a8e3fb12cfddd19aa3515c9c4172399f54548bec0035a489db012bc20485a07->leave($__internal_8a8e3fb12cfddd19aa3515c9c4172399f54548bec0035a489db012bc20485a07_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_bb3411fc89a3954466a580c97a7747be0fb842a84912813209fd1e258ae41c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3411fc89a3954466a580c97a7747be0fb842a84912813209fd1e258ae41c59->enter($__internal_bb3411fc89a3954466a580c97a7747be0fb842a84912813209fd1e258ae41c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_7bcd1c8a844e346a2fc9147bb878df690198878ae8f6e3ca2c3014c78fba820f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcd1c8a844e346a2fc9147bb878df690198878ae8f6e3ca2c3014c78fba820f->enter($__internal_7bcd1c8a844e346a2fc9147bb878df690198878ae8f6e3ca2c3014c78fba820f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_7bcd1c8a844e346a2fc9147bb878df690198878ae8f6e3ca2c3014c78fba820f->leave($__internal_7bcd1c8a844e346a2fc9147bb878df690198878ae8f6e3ca2c3014c78fba820f_prof);

        
        $__internal_bb3411fc89a3954466a580c97a7747be0fb842a84912813209fd1e258ae41c59->leave($__internal_bb3411fc89a3954466a580c97a7747be0fb842a84912813209fd1e258ae41c59_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_19b7e5839cdbd3ad0e2906f2967343baa97177456605e378d0f1b5d1944ff9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b7e5839cdbd3ad0e2906f2967343baa97177456605e378d0f1b5d1944ff9a0->enter($__internal_19b7e5839cdbd3ad0e2906f2967343baa97177456605e378d0f1b5d1944ff9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d57d0f91abf2713bb235af5d916bfd5ab2675e19c4b24ad482767006d6c8020f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57d0f91abf2713bb235af5d916bfd5ab2675e19c4b24ad482767006d6c8020f->enter($__internal_d57d0f91abf2713bb235af5d916bfd5ab2675e19c4b24ad482767006d6c8020f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_d57d0f91abf2713bb235af5d916bfd5ab2675e19c4b24ad482767006d6c8020f->leave($__internal_d57d0f91abf2713bb235af5d916bfd5ab2675e19c4b24ad482767006d6c8020f_prof);

        
        $__internal_19b7e5839cdbd3ad0e2906f2967343baa97177456605e378d0f1b5d1944ff9a0->leave($__internal_19b7e5839cdbd3ad0e2906f2967343baa97177456605e378d0f1b5d1944ff9a0_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3fb3b28f86c928846e8c6c455dd51074324c48ab8eb3cc516c24b900a3eeb1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb3b28f86c928846e8c6c455dd51074324c48ab8eb3cc516c24b900a3eeb1c7->enter($__internal_3fb3b28f86c928846e8c6c455dd51074324c48ab8eb3cc516c24b900a3eeb1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_63659c23ef04b11567ca8018c7b0fd94f1fdaae8b0ec87c18756addea27c68c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63659c23ef04b11567ca8018c7b0fd94f1fdaae8b0ec87c18756addea27c68c7->enter($__internal_63659c23ef04b11567ca8018c7b0fd94f1fdaae8b0ec87c18756addea27c68c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_63659c23ef04b11567ca8018c7b0fd94f1fdaae8b0ec87c18756addea27c68c7->leave($__internal_63659c23ef04b11567ca8018c7b0fd94f1fdaae8b0ec87c18756addea27c68c7_prof);

        
        $__internal_3fb3b28f86c928846e8c6c455dd51074324c48ab8eb3cc516c24b900a3eeb1c7->leave($__internal_3fb3b28f86c928846e8c6c455dd51074324c48ab8eb3cc516c24b900a3eeb1c7_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1a007b41326d6201ca305d82e99169570a7f68998c86eb78525071feb69f1700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a007b41326d6201ca305d82e99169570a7f68998c86eb78525071feb69f1700->enter($__internal_1a007b41326d6201ca305d82e99169570a7f68998c86eb78525071feb69f1700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_805ce741431a664c0d0e009b3792bc41523c80cb9d78c25f66483e6b5c1c997c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805ce741431a664c0d0e009b3792bc41523c80cb9d78c25f66483e6b5c1c997c->enter($__internal_805ce741431a664c0d0e009b3792bc41523c80cb9d78c25f66483e6b5c1c997c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_805ce741431a664c0d0e009b3792bc41523c80cb9d78c25f66483e6b5c1c997c->leave($__internal_805ce741431a664c0d0e009b3792bc41523c80cb9d78c25f66483e6b5c1c997c_prof);

        
        $__internal_1a007b41326d6201ca305d82e99169570a7f68998c86eb78525071feb69f1700->leave($__internal_1a007b41326d6201ca305d82e99169570a7f68998c86eb78525071feb69f1700_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a5ded617ab3c04cc13c28b8ea7c32b9c48e1cd5981babdd91886ea8f51ddf6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ded617ab3c04cc13c28b8ea7c32b9c48e1cd5981babdd91886ea8f51ddf6c6->enter($__internal_a5ded617ab3c04cc13c28b8ea7c32b9c48e1cd5981babdd91886ea8f51ddf6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_31313c10c0f5bde9fc586d0191d57ab1d7ce853bff4d0c29cf2b442e03094725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31313c10c0f5bde9fc586d0191d57ab1d7ce853bff4d0c29cf2b442e03094725->enter($__internal_31313c10c0f5bde9fc586d0191d57ab1d7ce853bff4d0c29cf2b442e03094725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_31313c10c0f5bde9fc586d0191d57ab1d7ce853bff4d0c29cf2b442e03094725->leave($__internal_31313c10c0f5bde9fc586d0191d57ab1d7ce853bff4d0c29cf2b442e03094725_prof);

        
        $__internal_a5ded617ab3c04cc13c28b8ea7c32b9c48e1cd5981babdd91886ea8f51ddf6c6->leave($__internal_a5ded617ab3c04cc13c28b8ea7c32b9c48e1cd5981babdd91886ea8f51ddf6c6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
