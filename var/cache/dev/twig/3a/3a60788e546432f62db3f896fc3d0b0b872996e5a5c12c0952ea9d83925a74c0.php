<?php

/* form_div_layout.html.twig */
class __TwigTemplate_fea9e29b8879a96f2393771a957a8ddca3c7dd1a9903d01705f3dc0918884ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a83582c7e086202cee7154db5de20f9122227d2ad32847800fe2b1d0e2457c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a83582c7e086202cee7154db5de20f9122227d2ad32847800fe2b1d0e2457c5->enter($__internal_9a83582c7e086202cee7154db5de20f9122227d2ad32847800fe2b1d0e2457c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_055c5bafeb7de1df1345393850d2785015e9135f59f8139b88622f3d69006800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055c5bafeb7de1df1345393850d2785015e9135f59f8139b88622f3d69006800->enter($__internal_055c5bafeb7de1df1345393850d2785015e9135f59f8139b88622f3d69006800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_9a83582c7e086202cee7154db5de20f9122227d2ad32847800fe2b1d0e2457c5->leave($__internal_9a83582c7e086202cee7154db5de20f9122227d2ad32847800fe2b1d0e2457c5_prof);

        
        $__internal_055c5bafeb7de1df1345393850d2785015e9135f59f8139b88622f3d69006800->leave($__internal_055c5bafeb7de1df1345393850d2785015e9135f59f8139b88622f3d69006800_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_56b9374b27ae96b05044946b197aa5daf726f11b22247f80a7d94ef86826c153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b9374b27ae96b05044946b197aa5daf726f11b22247f80a7d94ef86826c153->enter($__internal_56b9374b27ae96b05044946b197aa5daf726f11b22247f80a7d94ef86826c153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_5f00064903afee5cc6268ecf4d3f65b70fc127dc1022da195194c8dfbb0cb805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f00064903afee5cc6268ecf4d3f65b70fc127dc1022da195194c8dfbb0cb805->enter($__internal_5f00064903afee5cc6268ecf4d3f65b70fc127dc1022da195194c8dfbb0cb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5f00064903afee5cc6268ecf4d3f65b70fc127dc1022da195194c8dfbb0cb805->leave($__internal_5f00064903afee5cc6268ecf4d3f65b70fc127dc1022da195194c8dfbb0cb805_prof);

        
        $__internal_56b9374b27ae96b05044946b197aa5daf726f11b22247f80a7d94ef86826c153->leave($__internal_56b9374b27ae96b05044946b197aa5daf726f11b22247f80a7d94ef86826c153_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f283f7f95a4d7e8a72cee69f6118d1ed6db216d2fce594d9b93779843e215b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f283f7f95a4d7e8a72cee69f6118d1ed6db216d2fce594d9b93779843e215b60->enter($__internal_f283f7f95a4d7e8a72cee69f6118d1ed6db216d2fce594d9b93779843e215b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_78eca0f5de0e7dd5a06510de4d94c113f540f4dc185b047907d78252ad5901d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78eca0f5de0e7dd5a06510de4d94c113f540f4dc185b047907d78252ad5901d1->enter($__internal_78eca0f5de0e7dd5a06510de4d94c113f540f4dc185b047907d78252ad5901d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_78eca0f5de0e7dd5a06510de4d94c113f540f4dc185b047907d78252ad5901d1->leave($__internal_78eca0f5de0e7dd5a06510de4d94c113f540f4dc185b047907d78252ad5901d1_prof);

        
        $__internal_f283f7f95a4d7e8a72cee69f6118d1ed6db216d2fce594d9b93779843e215b60->leave($__internal_f283f7f95a4d7e8a72cee69f6118d1ed6db216d2fce594d9b93779843e215b60_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b8993e2ea0e0a628666c2a5251a7a294964365130a21e0c693972a940ee791ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8993e2ea0e0a628666c2a5251a7a294964365130a21e0c693972a940ee791ec->enter($__internal_b8993e2ea0e0a628666c2a5251a7a294964365130a21e0c693972a940ee791ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4b8850b2df9f6a68d6ed880a798ed360c03532208cef84f6c214297cd0cc50d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8850b2df9f6a68d6ed880a798ed360c03532208cef84f6c214297cd0cc50d3->enter($__internal_4b8850b2df9f6a68d6ed880a798ed360c03532208cef84f6c214297cd0cc50d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_4b8850b2df9f6a68d6ed880a798ed360c03532208cef84f6c214297cd0cc50d3->leave($__internal_4b8850b2df9f6a68d6ed880a798ed360c03532208cef84f6c214297cd0cc50d3_prof);

        
        $__internal_b8993e2ea0e0a628666c2a5251a7a294964365130a21e0c693972a940ee791ec->leave($__internal_b8993e2ea0e0a628666c2a5251a7a294964365130a21e0c693972a940ee791ec_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_767e6cf9786c3e9cd50a90e169750dde6c228f203a60c5c88fbc5ef25dfd56e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767e6cf9786c3e9cd50a90e169750dde6c228f203a60c5c88fbc5ef25dfd56e3->enter($__internal_767e6cf9786c3e9cd50a90e169750dde6c228f203a60c5c88fbc5ef25dfd56e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_cf37c814bac6b466513be35fb0cba582fb5b7d516b862fe7915ef9b40ec3b9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf37c814bac6b466513be35fb0cba582fb5b7d516b862fe7915ef9b40ec3b9a1->enter($__internal_cf37c814bac6b466513be35fb0cba582fb5b7d516b862fe7915ef9b40ec3b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_cf37c814bac6b466513be35fb0cba582fb5b7d516b862fe7915ef9b40ec3b9a1->leave($__internal_cf37c814bac6b466513be35fb0cba582fb5b7d516b862fe7915ef9b40ec3b9a1_prof);

        
        $__internal_767e6cf9786c3e9cd50a90e169750dde6c228f203a60c5c88fbc5ef25dfd56e3->leave($__internal_767e6cf9786c3e9cd50a90e169750dde6c228f203a60c5c88fbc5ef25dfd56e3_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f44e119c71ed95938d7a8cd77e9da8a46a57b2f70d8e1546607854b2041f8ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44e119c71ed95938d7a8cd77e9da8a46a57b2f70d8e1546607854b2041f8ba5->enter($__internal_f44e119c71ed95938d7a8cd77e9da8a46a57b2f70d8e1546607854b2041f8ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_05a4411fa9146e06e1400f22bdf195b28b2772cae60cc3197decaca63be948a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a4411fa9146e06e1400f22bdf195b28b2772cae60cc3197decaca63be948a4->enter($__internal_05a4411fa9146e06e1400f22bdf195b28b2772cae60cc3197decaca63be948a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_05a4411fa9146e06e1400f22bdf195b28b2772cae60cc3197decaca63be948a4->leave($__internal_05a4411fa9146e06e1400f22bdf195b28b2772cae60cc3197decaca63be948a4_prof);

        
        $__internal_f44e119c71ed95938d7a8cd77e9da8a46a57b2f70d8e1546607854b2041f8ba5->leave($__internal_f44e119c71ed95938d7a8cd77e9da8a46a57b2f70d8e1546607854b2041f8ba5_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_5df429265b8db51c91d63eb69b52d5a56376cf6659b79db630e3fd60c0db635c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df429265b8db51c91d63eb69b52d5a56376cf6659b79db630e3fd60c0db635c->enter($__internal_5df429265b8db51c91d63eb69b52d5a56376cf6659b79db630e3fd60c0db635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_a98ff4db34cbed4d675e544d81632d13909a0f9f277ada6ec5e82568040f8aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98ff4db34cbed4d675e544d81632d13909a0f9f277ada6ec5e82568040f8aa8->enter($__internal_a98ff4db34cbed4d675e544d81632d13909a0f9f277ada6ec5e82568040f8aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_a98ff4db34cbed4d675e544d81632d13909a0f9f277ada6ec5e82568040f8aa8->leave($__internal_a98ff4db34cbed4d675e544d81632d13909a0f9f277ada6ec5e82568040f8aa8_prof);

        
        $__internal_5df429265b8db51c91d63eb69b52d5a56376cf6659b79db630e3fd60c0db635c->leave($__internal_5df429265b8db51c91d63eb69b52d5a56376cf6659b79db630e3fd60c0db635c_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_971a8933a552dc7f0339e7dbc0a502f44f4be013fe046ef5635e5fc5961d66fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971a8933a552dc7f0339e7dbc0a502f44f4be013fe046ef5635e5fc5961d66fd->enter($__internal_971a8933a552dc7f0339e7dbc0a502f44f4be013fe046ef5635e5fc5961d66fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d0b6d797794901f9d07d602f73d4bd0ea76e540ca5785ced58a000924d5c8ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b6d797794901f9d07d602f73d4bd0ea76e540ca5785ced58a000924d5c8ab5->enter($__internal_d0b6d797794901f9d07d602f73d4bd0ea76e540ca5785ced58a000924d5c8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_d0b6d797794901f9d07d602f73d4bd0ea76e540ca5785ced58a000924d5c8ab5->leave($__internal_d0b6d797794901f9d07d602f73d4bd0ea76e540ca5785ced58a000924d5c8ab5_prof);

        
        $__internal_971a8933a552dc7f0339e7dbc0a502f44f4be013fe046ef5635e5fc5961d66fd->leave($__internal_971a8933a552dc7f0339e7dbc0a502f44f4be013fe046ef5635e5fc5961d66fd_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_47fbe82c63ca977f2154ef60ce6bb0235758583c610c1d215863a64ce9966fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fbe82c63ca977f2154ef60ce6bb0235758583c610c1d215863a64ce9966fa6->enter($__internal_47fbe82c63ca977f2154ef60ce6bb0235758583c610c1d215863a64ce9966fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_bc5f6cc78866bb80e0285b19ff15f68071a1fb4cb9125f36a9d42794535716c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5f6cc78866bb80e0285b19ff15f68071a1fb4cb9125f36a9d42794535716c1->enter($__internal_bc5f6cc78866bb80e0285b19ff15f68071a1fb4cb9125f36a9d42794535716c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_bc5f6cc78866bb80e0285b19ff15f68071a1fb4cb9125f36a9d42794535716c1->leave($__internal_bc5f6cc78866bb80e0285b19ff15f68071a1fb4cb9125f36a9d42794535716c1_prof);

        
        $__internal_47fbe82c63ca977f2154ef60ce6bb0235758583c610c1d215863a64ce9966fa6->leave($__internal_47fbe82c63ca977f2154ef60ce6bb0235758583c610c1d215863a64ce9966fa6_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_f5c45570360534333ca1abed6c92ccdfafe2d8579d430e05c2f61f942c773a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c45570360534333ca1abed6c92ccdfafe2d8579d430e05c2f61f942c773a0d->enter($__internal_f5c45570360534333ca1abed6c92ccdfafe2d8579d430e05c2f61f942c773a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_19b0f57306885c581abc62cb5a8db38f464b8d91427d12c480ec3f9fbbee221d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b0f57306885c581abc62cb5a8db38f464b8d91427d12c480ec3f9fbbee221d->enter($__internal_19b0f57306885c581abc62cb5a8db38f464b8d91427d12c480ec3f9fbbee221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_cb8987628174c2b17460582fb1b8f18e3844a8104b86245409a22085b3a3f951 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_cb8987628174c2b17460582fb1b8f18e3844a8104b86245409a22085b3a3f951)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_cb8987628174c2b17460582fb1b8f18e3844a8104b86245409a22085b3a3f951);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_19b0f57306885c581abc62cb5a8db38f464b8d91427d12c480ec3f9fbbee221d->leave($__internal_19b0f57306885c581abc62cb5a8db38f464b8d91427d12c480ec3f9fbbee221d_prof);

        
        $__internal_f5c45570360534333ca1abed6c92ccdfafe2d8579d430e05c2f61f942c773a0d->leave($__internal_f5c45570360534333ca1abed6c92ccdfafe2d8579d430e05c2f61f942c773a0d_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_4144045a3db885ea37c3ac03dcff08ae3608e6e6fc735d23c38dc3e6c26b34be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4144045a3db885ea37c3ac03dcff08ae3608e6e6fc735d23c38dc3e6c26b34be->enter($__internal_4144045a3db885ea37c3ac03dcff08ae3608e6e6fc735d23c38dc3e6c26b34be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9a35b8b56f01e37c9cefb481347d0b41c091fc6ef3f651fbae0a199926ea7354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a35b8b56f01e37c9cefb481347d0b41c091fc6ef3f651fbae0a199926ea7354->enter($__internal_9a35b8b56f01e37c9cefb481347d0b41c091fc6ef3f651fbae0a199926ea7354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_9a35b8b56f01e37c9cefb481347d0b41c091fc6ef3f651fbae0a199926ea7354->leave($__internal_9a35b8b56f01e37c9cefb481347d0b41c091fc6ef3f651fbae0a199926ea7354_prof);

        
        $__internal_4144045a3db885ea37c3ac03dcff08ae3608e6e6fc735d23c38dc3e6c26b34be->leave($__internal_4144045a3db885ea37c3ac03dcff08ae3608e6e6fc735d23c38dc3e6c26b34be_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_de73a1b30ee3881f4b3f17557643d40481281715cc5bc27501009d203362e3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de73a1b30ee3881f4b3f17557643d40481281715cc5bc27501009d203362e3a4->enter($__internal_de73a1b30ee3881f4b3f17557643d40481281715cc5bc27501009d203362e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8e73b0cbc92cb1f01ea4476ac74c27dbcba009646f9c9625f57e3ad9828dd927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e73b0cbc92cb1f01ea4476ac74c27dbcba009646f9c9625f57e3ad9828dd927->enter($__internal_8e73b0cbc92cb1f01ea4476ac74c27dbcba009646f9c9625f57e3ad9828dd927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_8e73b0cbc92cb1f01ea4476ac74c27dbcba009646f9c9625f57e3ad9828dd927->leave($__internal_8e73b0cbc92cb1f01ea4476ac74c27dbcba009646f9c9625f57e3ad9828dd927_prof);

        
        $__internal_de73a1b30ee3881f4b3f17557643d40481281715cc5bc27501009d203362e3a4->leave($__internal_de73a1b30ee3881f4b3f17557643d40481281715cc5bc27501009d203362e3a4_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_194a6d5817fbf847c5c4cbcdb5576e1cad05bb944d8f137da64940ce3f4c8e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194a6d5817fbf847c5c4cbcdb5576e1cad05bb944d8f137da64940ce3f4c8e63->enter($__internal_194a6d5817fbf847c5c4cbcdb5576e1cad05bb944d8f137da64940ce3f4c8e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_70c7f97f7dd3ef5c63a2dcacc0b2e9eb1b7c204056fec77305a2b26580877600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c7f97f7dd3ef5c63a2dcacc0b2e9eb1b7c204056fec77305a2b26580877600->enter($__internal_70c7f97f7dd3ef5c63a2dcacc0b2e9eb1b7c204056fec77305a2b26580877600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_70c7f97f7dd3ef5c63a2dcacc0b2e9eb1b7c204056fec77305a2b26580877600->leave($__internal_70c7f97f7dd3ef5c63a2dcacc0b2e9eb1b7c204056fec77305a2b26580877600_prof);

        
        $__internal_194a6d5817fbf847c5c4cbcdb5576e1cad05bb944d8f137da64940ce3f4c8e63->leave($__internal_194a6d5817fbf847c5c4cbcdb5576e1cad05bb944d8f137da64940ce3f4c8e63_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1a66b966eab5a6a42fd16324e2216adc43bc3953cb59c7594c16023d5e834083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a66b966eab5a6a42fd16324e2216adc43bc3953cb59c7594c16023d5e834083->enter($__internal_1a66b966eab5a6a42fd16324e2216adc43bc3953cb59c7594c16023d5e834083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5edced5df52e17e981c5b75e4742ac19c697f474f986e9508838644e2481e301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edced5df52e17e981c5b75e4742ac19c697f474f986e9508838644e2481e301->enter($__internal_5edced5df52e17e981c5b75e4742ac19c697f474f986e9508838644e2481e301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_5edced5df52e17e981c5b75e4742ac19c697f474f986e9508838644e2481e301->leave($__internal_5edced5df52e17e981c5b75e4742ac19c697f474f986e9508838644e2481e301_prof);

        
        $__internal_1a66b966eab5a6a42fd16324e2216adc43bc3953cb59c7594c16023d5e834083->leave($__internal_1a66b966eab5a6a42fd16324e2216adc43bc3953cb59c7594c16023d5e834083_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_24cf6b1912365b885d45f2df994c9e2a97ef832cef711792d69eb8fed87dcd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cf6b1912365b885d45f2df994c9e2a97ef832cef711792d69eb8fed87dcd10->enter($__internal_24cf6b1912365b885d45f2df994c9e2a97ef832cef711792d69eb8fed87dcd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f93c95c36b4d0c419391c7e0c0b641d51543f5c8a2527a227bfb64307933ef3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93c95c36b4d0c419391c7e0c0b641d51543f5c8a2527a227bfb64307933ef3a->enter($__internal_f93c95c36b4d0c419391c7e0c0b641d51543f5c8a2527a227bfb64307933ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_f93c95c36b4d0c419391c7e0c0b641d51543f5c8a2527a227bfb64307933ef3a->leave($__internal_f93c95c36b4d0c419391c7e0c0b641d51543f5c8a2527a227bfb64307933ef3a_prof);

        
        $__internal_24cf6b1912365b885d45f2df994c9e2a97ef832cef711792d69eb8fed87dcd10->leave($__internal_24cf6b1912365b885d45f2df994c9e2a97ef832cef711792d69eb8fed87dcd10_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b42c2ec1e9be8c5d9514807fc980bf87cce4c1a43daff5942417789dde1514d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42c2ec1e9be8c5d9514807fc980bf87cce4c1a43daff5942417789dde1514d4->enter($__internal_b42c2ec1e9be8c5d9514807fc980bf87cce4c1a43daff5942417789dde1514d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_bfdd117d26f4ec20240df22dcd23de8bd97168fd4b1f4f30f6e3030a04d044cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdd117d26f4ec20240df22dcd23de8bd97168fd4b1f4f30f6e3030a04d044cc->enter($__internal_bfdd117d26f4ec20240df22dcd23de8bd97168fd4b1f4f30f6e3030a04d044cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_bfdd117d26f4ec20240df22dcd23de8bd97168fd4b1f4f30f6e3030a04d044cc->leave($__internal_bfdd117d26f4ec20240df22dcd23de8bd97168fd4b1f4f30f6e3030a04d044cc_prof);

        
        $__internal_b42c2ec1e9be8c5d9514807fc980bf87cce4c1a43daff5942417789dde1514d4->leave($__internal_b42c2ec1e9be8c5d9514807fc980bf87cce4c1a43daff5942417789dde1514d4_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_29a6c2f6460deb68adae5dc51bf108d73bb65eda17a07996c165143fcda179b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a6c2f6460deb68adae5dc51bf108d73bb65eda17a07996c165143fcda179b3->enter($__internal_29a6c2f6460deb68adae5dc51bf108d73bb65eda17a07996c165143fcda179b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_d6bf47d8e5c123ebd0d032612359120199d584a4eb64a191585973a87b8105a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bf47d8e5c123ebd0d032612359120199d584a4eb64a191585973a87b8105a6->enter($__internal_d6bf47d8e5c123ebd0d032612359120199d584a4eb64a191585973a87b8105a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d6bf47d8e5c123ebd0d032612359120199d584a4eb64a191585973a87b8105a6->leave($__internal_d6bf47d8e5c123ebd0d032612359120199d584a4eb64a191585973a87b8105a6_prof);

        
        $__internal_29a6c2f6460deb68adae5dc51bf108d73bb65eda17a07996c165143fcda179b3->leave($__internal_29a6c2f6460deb68adae5dc51bf108d73bb65eda17a07996c165143fcda179b3_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_481fddb85dbe3997467d6b42028bb6bb4c4b14422adb049e071cc4db9e5d0f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481fddb85dbe3997467d6b42028bb6bb4c4b14422adb049e071cc4db9e5d0f59->enter($__internal_481fddb85dbe3997467d6b42028bb6bb4c4b14422adb049e071cc4db9e5d0f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_aec2cc67a865c420f5769cea76eda6a3aba361cc88f93a5b6ebbba35f2678bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec2cc67a865c420f5769cea76eda6a3aba361cc88f93a5b6ebbba35f2678bc1->enter($__internal_aec2cc67a865c420f5769cea76eda6a3aba361cc88f93a5b6ebbba35f2678bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aec2cc67a865c420f5769cea76eda6a3aba361cc88f93a5b6ebbba35f2678bc1->leave($__internal_aec2cc67a865c420f5769cea76eda6a3aba361cc88f93a5b6ebbba35f2678bc1_prof);

        
        $__internal_481fddb85dbe3997467d6b42028bb6bb4c4b14422adb049e071cc4db9e5d0f59->leave($__internal_481fddb85dbe3997467d6b42028bb6bb4c4b14422adb049e071cc4db9e5d0f59_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a7b1231b7079b44c78f89292f5ca22cec58d88f3bc3fb20abb7e361ecb0a7f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b1231b7079b44c78f89292f5ca22cec58d88f3bc3fb20abb7e361ecb0a7f4a->enter($__internal_a7b1231b7079b44c78f89292f5ca22cec58d88f3bc3fb20abb7e361ecb0a7f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7c4f109670ea413c651df702b1ae169a9f313517b277b2d1f7db2c20b916a83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4f109670ea413c651df702b1ae169a9f313517b277b2d1f7db2c20b916a83f->enter($__internal_7c4f109670ea413c651df702b1ae169a9f313517b277b2d1f7db2c20b916a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_7c4f109670ea413c651df702b1ae169a9f313517b277b2d1f7db2c20b916a83f->leave($__internal_7c4f109670ea413c651df702b1ae169a9f313517b277b2d1f7db2c20b916a83f_prof);

        
        $__internal_a7b1231b7079b44c78f89292f5ca22cec58d88f3bc3fb20abb7e361ecb0a7f4a->leave($__internal_a7b1231b7079b44c78f89292f5ca22cec58d88f3bc3fb20abb7e361ecb0a7f4a_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a07c993332d4019a000ff84274c6c4c91c59d13db520be5c7aa69e6e39a7bd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07c993332d4019a000ff84274c6c4c91c59d13db520be5c7aa69e6e39a7bd96->enter($__internal_a07c993332d4019a000ff84274c6c4c91c59d13db520be5c7aa69e6e39a7bd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_ce1d26330c8bfa9effd7754b0c27d21cfe80cf09f980072ead3b650594666d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1d26330c8bfa9effd7754b0c27d21cfe80cf09f980072ead3b650594666d91->enter($__internal_ce1d26330c8bfa9effd7754b0c27d21cfe80cf09f980072ead3b650594666d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ce1d26330c8bfa9effd7754b0c27d21cfe80cf09f980072ead3b650594666d91->leave($__internal_ce1d26330c8bfa9effd7754b0c27d21cfe80cf09f980072ead3b650594666d91_prof);

        
        $__internal_a07c993332d4019a000ff84274c6c4c91c59d13db520be5c7aa69e6e39a7bd96->leave($__internal_a07c993332d4019a000ff84274c6c4c91c59d13db520be5c7aa69e6e39a7bd96_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_fe4532db8cd5cc60dbdfa944539cb4d4493b49c6554324867d12f8ce66fb4c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4532db8cd5cc60dbdfa944539cb4d4493b49c6554324867d12f8ce66fb4c0e->enter($__internal_fe4532db8cd5cc60dbdfa944539cb4d4493b49c6554324867d12f8ce66fb4c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_a6cfee9f032c6b73daf095007bd07352961ea41b08fec618a56aca6aceef6330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cfee9f032c6b73daf095007bd07352961ea41b08fec618a56aca6aceef6330->enter($__internal_a6cfee9f032c6b73daf095007bd07352961ea41b08fec618a56aca6aceef6330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a6cfee9f032c6b73daf095007bd07352961ea41b08fec618a56aca6aceef6330->leave($__internal_a6cfee9f032c6b73daf095007bd07352961ea41b08fec618a56aca6aceef6330_prof);

        
        $__internal_fe4532db8cd5cc60dbdfa944539cb4d4493b49c6554324867d12f8ce66fb4c0e->leave($__internal_fe4532db8cd5cc60dbdfa944539cb4d4493b49c6554324867d12f8ce66fb4c0e_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1c74e3677319e88d98c80819006c65f3d64d9333f045f5899ca8a888a3fb6c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c74e3677319e88d98c80819006c65f3d64d9333f045f5899ca8a888a3fb6c28->enter($__internal_1c74e3677319e88d98c80819006c65f3d64d9333f045f5899ca8a888a3fb6c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b76f65b682f4036db0b7373944a6d80eab7a147e195a4f7473c42b2299b0d4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76f65b682f4036db0b7373944a6d80eab7a147e195a4f7473c42b2299b0d4e1->enter($__internal_b76f65b682f4036db0b7373944a6d80eab7a147e195a4f7473c42b2299b0d4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_b76f65b682f4036db0b7373944a6d80eab7a147e195a4f7473c42b2299b0d4e1->leave($__internal_b76f65b682f4036db0b7373944a6d80eab7a147e195a4f7473c42b2299b0d4e1_prof);

        
        $__internal_1c74e3677319e88d98c80819006c65f3d64d9333f045f5899ca8a888a3fb6c28->leave($__internal_1c74e3677319e88d98c80819006c65f3d64d9333f045f5899ca8a888a3fb6c28_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_402dea5e5d33a99d95cc95a7991f5235e2b77cb6daf53ff7ee87e548c9cd65ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402dea5e5d33a99d95cc95a7991f5235e2b77cb6daf53ff7ee87e548c9cd65ce->enter($__internal_402dea5e5d33a99d95cc95a7991f5235e2b77cb6daf53ff7ee87e548c9cd65ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_b3d4a8d01b0ab58bda530e5f8167ea034bdf987689994960afcf9ca593946d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d4a8d01b0ab58bda530e5f8167ea034bdf987689994960afcf9ca593946d6e->enter($__internal_b3d4a8d01b0ab58bda530e5f8167ea034bdf987689994960afcf9ca593946d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b3d4a8d01b0ab58bda530e5f8167ea034bdf987689994960afcf9ca593946d6e->leave($__internal_b3d4a8d01b0ab58bda530e5f8167ea034bdf987689994960afcf9ca593946d6e_prof);

        
        $__internal_402dea5e5d33a99d95cc95a7991f5235e2b77cb6daf53ff7ee87e548c9cd65ce->leave($__internal_402dea5e5d33a99d95cc95a7991f5235e2b77cb6daf53ff7ee87e548c9cd65ce_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_47859d92b71697534ee65da06d04da6de89d65240555c4c2e5a6036cbfd32d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47859d92b71697534ee65da06d04da6de89d65240555c4c2e5a6036cbfd32d52->enter($__internal_47859d92b71697534ee65da06d04da6de89d65240555c4c2e5a6036cbfd32d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_0542a73e60719029faf050a4aa1167e2bcff3bebb21a581340f97664dc4c6fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0542a73e60719029faf050a4aa1167e2bcff3bebb21a581340f97664dc4c6fb4->enter($__internal_0542a73e60719029faf050a4aa1167e2bcff3bebb21a581340f97664dc4c6fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0542a73e60719029faf050a4aa1167e2bcff3bebb21a581340f97664dc4c6fb4->leave($__internal_0542a73e60719029faf050a4aa1167e2bcff3bebb21a581340f97664dc4c6fb4_prof);

        
        $__internal_47859d92b71697534ee65da06d04da6de89d65240555c4c2e5a6036cbfd32d52->leave($__internal_47859d92b71697534ee65da06d04da6de89d65240555c4c2e5a6036cbfd32d52_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_8b1b48d0bb9fa029129d72fa1ef8bae052838ff5cd9c712981116d8ff06a2a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1b48d0bb9fa029129d72fa1ef8bae052838ff5cd9c712981116d8ff06a2a15->enter($__internal_8b1b48d0bb9fa029129d72fa1ef8bae052838ff5cd9c712981116d8ff06a2a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_69ccfbf910a330439e5f632c630dfdc91eca4d29bb7791e622e5bbd28ecda1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ccfbf910a330439e5f632c630dfdc91eca4d29bb7791e622e5bbd28ecda1fb->enter($__internal_69ccfbf910a330439e5f632c630dfdc91eca4d29bb7791e622e5bbd28ecda1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_69ccfbf910a330439e5f632c630dfdc91eca4d29bb7791e622e5bbd28ecda1fb->leave($__internal_69ccfbf910a330439e5f632c630dfdc91eca4d29bb7791e622e5bbd28ecda1fb_prof);

        
        $__internal_8b1b48d0bb9fa029129d72fa1ef8bae052838ff5cd9c712981116d8ff06a2a15->leave($__internal_8b1b48d0bb9fa029129d72fa1ef8bae052838ff5cd9c712981116d8ff06a2a15_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_bcb34f23d0122b251ad9d244c1ca04c47bdc432a1a74328fb6c91fc439633485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb34f23d0122b251ad9d244c1ca04c47bdc432a1a74328fb6c91fc439633485->enter($__internal_bcb34f23d0122b251ad9d244c1ca04c47bdc432a1a74328fb6c91fc439633485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_e7d64aefabd5ca38037d1deacbaadc3321f8a0835c40ee2a38199947436b9a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d64aefabd5ca38037d1deacbaadc3321f8a0835c40ee2a38199947436b9a57->enter($__internal_e7d64aefabd5ca38037d1deacbaadc3321f8a0835c40ee2a38199947436b9a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e7d64aefabd5ca38037d1deacbaadc3321f8a0835c40ee2a38199947436b9a57->leave($__internal_e7d64aefabd5ca38037d1deacbaadc3321f8a0835c40ee2a38199947436b9a57_prof);

        
        $__internal_bcb34f23d0122b251ad9d244c1ca04c47bdc432a1a74328fb6c91fc439633485->leave($__internal_bcb34f23d0122b251ad9d244c1ca04c47bdc432a1a74328fb6c91fc439633485_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0cdf1996ca509c9b1a5f815e8979b0b1464ebb3c2467663f5f20e11a9ef4c762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdf1996ca509c9b1a5f815e8979b0b1464ebb3c2467663f5f20e11a9ef4c762->enter($__internal_0cdf1996ca509c9b1a5f815e8979b0b1464ebb3c2467663f5f20e11a9ef4c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_27414c2649cee5c21061bdb86ef5659672d738ebe3773da2e3c95906c8e5ba82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27414c2649cee5c21061bdb86ef5659672d738ebe3773da2e3c95906c8e5ba82->enter($__internal_27414c2649cee5c21061bdb86ef5659672d738ebe3773da2e3c95906c8e5ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_27414c2649cee5c21061bdb86ef5659672d738ebe3773da2e3c95906c8e5ba82->leave($__internal_27414c2649cee5c21061bdb86ef5659672d738ebe3773da2e3c95906c8e5ba82_prof);

        
        $__internal_0cdf1996ca509c9b1a5f815e8979b0b1464ebb3c2467663f5f20e11a9ef4c762->leave($__internal_0cdf1996ca509c9b1a5f815e8979b0b1464ebb3c2467663f5f20e11a9ef4c762_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_47b42eab739bd3b4006ecd51c519e454eda0968bc5c1dea2a75fbae53adc26fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b42eab739bd3b4006ecd51c519e454eda0968bc5c1dea2a75fbae53adc26fc->enter($__internal_47b42eab739bd3b4006ecd51c519e454eda0968bc5c1dea2a75fbae53adc26fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_8dc0015c8039b8659ee56f296845eb17cb2957664f7ea490bbe07343553aa4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc0015c8039b8659ee56f296845eb17cb2957664f7ea490bbe07343553aa4df->enter($__internal_8dc0015c8039b8659ee56f296845eb17cb2957664f7ea490bbe07343553aa4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_8dc0015c8039b8659ee56f296845eb17cb2957664f7ea490bbe07343553aa4df->leave($__internal_8dc0015c8039b8659ee56f296845eb17cb2957664f7ea490bbe07343553aa4df_prof);

        
        $__internal_47b42eab739bd3b4006ecd51c519e454eda0968bc5c1dea2a75fbae53adc26fc->leave($__internal_47b42eab739bd3b4006ecd51c519e454eda0968bc5c1dea2a75fbae53adc26fc_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_90ab8f789055f245208b3b34aa15da23cd1dba88c4af1bc99804e74f40a5fb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ab8f789055f245208b3b34aa15da23cd1dba88c4af1bc99804e74f40a5fb83->enter($__internal_90ab8f789055f245208b3b34aa15da23cd1dba88c4af1bc99804e74f40a5fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_6764cb126d6a0bf89a59d8ccfeef3cd090e4b098b74997d1390d9c1f8ece21b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6764cb126d6a0bf89a59d8ccfeef3cd090e4b098b74997d1390d9c1f8ece21b8->enter($__internal_6764cb126d6a0bf89a59d8ccfeef3cd090e4b098b74997d1390d9c1f8ece21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6764cb126d6a0bf89a59d8ccfeef3cd090e4b098b74997d1390d9c1f8ece21b8->leave($__internal_6764cb126d6a0bf89a59d8ccfeef3cd090e4b098b74997d1390d9c1f8ece21b8_prof);

        
        $__internal_90ab8f789055f245208b3b34aa15da23cd1dba88c4af1bc99804e74f40a5fb83->leave($__internal_90ab8f789055f245208b3b34aa15da23cd1dba88c4af1bc99804e74f40a5fb83_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_91be1b2e0c3eb9221c2da205c9951ac4a34579d5675b419a4d23f569ea49904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91be1b2e0c3eb9221c2da205c9951ac4a34579d5675b419a4d23f569ea49904e->enter($__internal_91be1b2e0c3eb9221c2da205c9951ac4a34579d5675b419a4d23f569ea49904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_e57a2431da8a5d212eb009d72f46ffd15734d78ef4dd812f100a77beadcdf92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57a2431da8a5d212eb009d72f46ffd15734d78ef4dd812f100a77beadcdf92f->enter($__internal_e57a2431da8a5d212eb009d72f46ffd15734d78ef4dd812f100a77beadcdf92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e57a2431da8a5d212eb009d72f46ffd15734d78ef4dd812f100a77beadcdf92f->leave($__internal_e57a2431da8a5d212eb009d72f46ffd15734d78ef4dd812f100a77beadcdf92f_prof);

        
        $__internal_91be1b2e0c3eb9221c2da205c9951ac4a34579d5675b419a4d23f569ea49904e->leave($__internal_91be1b2e0c3eb9221c2da205c9951ac4a34579d5675b419a4d23f569ea49904e_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_12b5411137c834ee97d0d67ce0045dd0c8e8f5ec81b2478866ddbfc68a612974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b5411137c834ee97d0d67ce0045dd0c8e8f5ec81b2478866ddbfc68a612974->enter($__internal_12b5411137c834ee97d0d67ce0045dd0c8e8f5ec81b2478866ddbfc68a612974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_07776e7a5c1bca4546ff54bd1340f2bf239fdb5f776ba9b146aaf84752f0197f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07776e7a5c1bca4546ff54bd1340f2bf239fdb5f776ba9b146aaf84752f0197f->enter($__internal_07776e7a5c1bca4546ff54bd1340f2bf239fdb5f776ba9b146aaf84752f0197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07776e7a5c1bca4546ff54bd1340f2bf239fdb5f776ba9b146aaf84752f0197f->leave($__internal_07776e7a5c1bca4546ff54bd1340f2bf239fdb5f776ba9b146aaf84752f0197f_prof);

        
        $__internal_12b5411137c834ee97d0d67ce0045dd0c8e8f5ec81b2478866ddbfc68a612974->leave($__internal_12b5411137c834ee97d0d67ce0045dd0c8e8f5ec81b2478866ddbfc68a612974_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fe6319ef4f8c6a33f509d13371b2952689d5ff41ca0919132dcd86e06209b2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6319ef4f8c6a33f509d13371b2952689d5ff41ca0919132dcd86e06209b2f4->enter($__internal_fe6319ef4f8c6a33f509d13371b2952689d5ff41ca0919132dcd86e06209b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_873b68ff82dc4aa64741b71e4c98c190daf4ea2e850c7dbcaf62b8576f3af10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873b68ff82dc4aa64741b71e4c98c190daf4ea2e850c7dbcaf62b8576f3af10c->enter($__internal_873b68ff82dc4aa64741b71e4c98c190daf4ea2e850c7dbcaf62b8576f3af10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_ca6a185ce5fdea8a6f29507fc9229ecbf9de00fea2b2ce4dcde57ce354447425 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_ca6a185ce5fdea8a6f29507fc9229ecbf9de00fea2b2ce4dcde57ce354447425)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_ca6a185ce5fdea8a6f29507fc9229ecbf9de00fea2b2ce4dcde57ce354447425);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_873b68ff82dc4aa64741b71e4c98c190daf4ea2e850c7dbcaf62b8576f3af10c->leave($__internal_873b68ff82dc4aa64741b71e4c98c190daf4ea2e850c7dbcaf62b8576f3af10c_prof);

        
        $__internal_fe6319ef4f8c6a33f509d13371b2952689d5ff41ca0919132dcd86e06209b2f4->leave($__internal_fe6319ef4f8c6a33f509d13371b2952689d5ff41ca0919132dcd86e06209b2f4_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_4c611ac26ee044fdc44109ae78658468e81ec8b2904837113a2d5d85851436c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c611ac26ee044fdc44109ae78658468e81ec8b2904837113a2d5d85851436c9->enter($__internal_4c611ac26ee044fdc44109ae78658468e81ec8b2904837113a2d5d85851436c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_5df0f1749631d6ffed825b625ef651f5e7a91d1a88cde56a506dd288fa2b5403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df0f1749631d6ffed825b625ef651f5e7a91d1a88cde56a506dd288fa2b5403->enter($__internal_5df0f1749631d6ffed825b625ef651f5e7a91d1a88cde56a506dd288fa2b5403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_5df0f1749631d6ffed825b625ef651f5e7a91d1a88cde56a506dd288fa2b5403->leave($__internal_5df0f1749631d6ffed825b625ef651f5e7a91d1a88cde56a506dd288fa2b5403_prof);

        
        $__internal_4c611ac26ee044fdc44109ae78658468e81ec8b2904837113a2d5d85851436c9->leave($__internal_4c611ac26ee044fdc44109ae78658468e81ec8b2904837113a2d5d85851436c9_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_f02502e49cae8b1369119073c9031e79915cf64e400b399465fca62f53c050f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02502e49cae8b1369119073c9031e79915cf64e400b399465fca62f53c050f7->enter($__internal_f02502e49cae8b1369119073c9031e79915cf64e400b399465fca62f53c050f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_333ffe384c71d3c5427d443d0c7e3e456d0ba19feceb02669fb50d362f47e2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333ffe384c71d3c5427d443d0c7e3e456d0ba19feceb02669fb50d362f47e2ed->enter($__internal_333ffe384c71d3c5427d443d0c7e3e456d0ba19feceb02669fb50d362f47e2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_333ffe384c71d3c5427d443d0c7e3e456d0ba19feceb02669fb50d362f47e2ed->leave($__internal_333ffe384c71d3c5427d443d0c7e3e456d0ba19feceb02669fb50d362f47e2ed_prof);

        
        $__internal_f02502e49cae8b1369119073c9031e79915cf64e400b399465fca62f53c050f7->leave($__internal_f02502e49cae8b1369119073c9031e79915cf64e400b399465fca62f53c050f7_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0ce44994e1c452f2dc10cc99c499eb3194b7625b94edecf7de7017ee5ec9f603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce44994e1c452f2dc10cc99c499eb3194b7625b94edecf7de7017ee5ec9f603->enter($__internal_0ce44994e1c452f2dc10cc99c499eb3194b7625b94edecf7de7017ee5ec9f603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_44fbeb0ab2212b3e7e0c9e2d2bed459e4d6b2be353318fd72c565b5a698a16e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fbeb0ab2212b3e7e0c9e2d2bed459e4d6b2be353318fd72c565b5a698a16e0->enter($__internal_44fbeb0ab2212b3e7e0c9e2d2bed459e4d6b2be353318fd72c565b5a698a16e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_44fbeb0ab2212b3e7e0c9e2d2bed459e4d6b2be353318fd72c565b5a698a16e0->leave($__internal_44fbeb0ab2212b3e7e0c9e2d2bed459e4d6b2be353318fd72c565b5a698a16e0_prof);

        
        $__internal_0ce44994e1c452f2dc10cc99c499eb3194b7625b94edecf7de7017ee5ec9f603->leave($__internal_0ce44994e1c452f2dc10cc99c499eb3194b7625b94edecf7de7017ee5ec9f603_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1c7a95a9fa284b07f3d78b74003128f48b026552e405447a2f0d0525f0ef622d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7a95a9fa284b07f3d78b74003128f48b026552e405447a2f0d0525f0ef622d->enter($__internal_1c7a95a9fa284b07f3d78b74003128f48b026552e405447a2f0d0525f0ef622d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_746827d336ad9ecefaa349fdee519c8e83296d364b813f766907af9948968b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746827d336ad9ecefaa349fdee519c8e83296d364b813f766907af9948968b57->enter($__internal_746827d336ad9ecefaa349fdee519c8e83296d364b813f766907af9948968b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_746827d336ad9ecefaa349fdee519c8e83296d364b813f766907af9948968b57->leave($__internal_746827d336ad9ecefaa349fdee519c8e83296d364b813f766907af9948968b57_prof);

        
        $__internal_1c7a95a9fa284b07f3d78b74003128f48b026552e405447a2f0d0525f0ef622d->leave($__internal_1c7a95a9fa284b07f3d78b74003128f48b026552e405447a2f0d0525f0ef622d_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ca2d8d3aa8668a1fc3d1f5018da664943a0f2eefbc423b462a4b8b851035b389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2d8d3aa8668a1fc3d1f5018da664943a0f2eefbc423b462a4b8b851035b389->enter($__internal_ca2d8d3aa8668a1fc3d1f5018da664943a0f2eefbc423b462a4b8b851035b389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_3b424e18129e30309932b498d4d2b591af561440edb89812e1ffc8fbb05232cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b424e18129e30309932b498d4d2b591af561440edb89812e1ffc8fbb05232cf->enter($__internal_3b424e18129e30309932b498d4d2b591af561440edb89812e1ffc8fbb05232cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_3b424e18129e30309932b498d4d2b591af561440edb89812e1ffc8fbb05232cf->leave($__internal_3b424e18129e30309932b498d4d2b591af561440edb89812e1ffc8fbb05232cf_prof);

        
        $__internal_ca2d8d3aa8668a1fc3d1f5018da664943a0f2eefbc423b462a4b8b851035b389->leave($__internal_ca2d8d3aa8668a1fc3d1f5018da664943a0f2eefbc423b462a4b8b851035b389_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_d03ab63943c59ede1576c0de096a2bdfdbfcce70370c780b456dafffb7b56512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03ab63943c59ede1576c0de096a2bdfdbfcce70370c780b456dafffb7b56512->enter($__internal_d03ab63943c59ede1576c0de096a2bdfdbfcce70370c780b456dafffb7b56512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_bb803013e76cd95008ef2497f06d18c63781fe912d23eebd3a0c8c11c3bf1749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb803013e76cd95008ef2497f06d18c63781fe912d23eebd3a0c8c11c3bf1749->enter($__internal_bb803013e76cd95008ef2497f06d18c63781fe912d23eebd3a0c8c11c3bf1749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_bb803013e76cd95008ef2497f06d18c63781fe912d23eebd3a0c8c11c3bf1749->leave($__internal_bb803013e76cd95008ef2497f06d18c63781fe912d23eebd3a0c8c11c3bf1749_prof);

        
        $__internal_d03ab63943c59ede1576c0de096a2bdfdbfcce70370c780b456dafffb7b56512->leave($__internal_d03ab63943c59ede1576c0de096a2bdfdbfcce70370c780b456dafffb7b56512_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_8c4da6c63b52f86a8511418000495475bedafe3f73b10387a838fec37177cb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4da6c63b52f86a8511418000495475bedafe3f73b10387a838fec37177cb74->enter($__internal_8c4da6c63b52f86a8511418000495475bedafe3f73b10387a838fec37177cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ca5b0a9b88c8ba3123c6a231f0d817d281c770e8d34dd81854f79f4ad1948227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5b0a9b88c8ba3123c6a231f0d817d281c770e8d34dd81854f79f4ad1948227->enter($__internal_ca5b0a9b88c8ba3123c6a231f0d817d281c770e8d34dd81854f79f4ad1948227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_ca5b0a9b88c8ba3123c6a231f0d817d281c770e8d34dd81854f79f4ad1948227->leave($__internal_ca5b0a9b88c8ba3123c6a231f0d817d281c770e8d34dd81854f79f4ad1948227_prof);

        
        $__internal_8c4da6c63b52f86a8511418000495475bedafe3f73b10387a838fec37177cb74->leave($__internal_8c4da6c63b52f86a8511418000495475bedafe3f73b10387a838fec37177cb74_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_26d705964d3eb5384abc2c4ff133d1727507cf1d02aebfcff722c428524b8a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d705964d3eb5384abc2c4ff133d1727507cf1d02aebfcff722c428524b8a8b->enter($__internal_26d705964d3eb5384abc2c4ff133d1727507cf1d02aebfcff722c428524b8a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_c09bed65518984ef4cf0175e6e8b4ade113c597b20eff1933953e5783d47d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09bed65518984ef4cf0175e6e8b4ade113c597b20eff1933953e5783d47d560->enter($__internal_c09bed65518984ef4cf0175e6e8b4ade113c597b20eff1933953e5783d47d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_c09bed65518984ef4cf0175e6e8b4ade113c597b20eff1933953e5783d47d560->leave($__internal_c09bed65518984ef4cf0175e6e8b4ade113c597b20eff1933953e5783d47d560_prof);

        
        $__internal_26d705964d3eb5384abc2c4ff133d1727507cf1d02aebfcff722c428524b8a8b->leave($__internal_26d705964d3eb5384abc2c4ff133d1727507cf1d02aebfcff722c428524b8a8b_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a6e504e5843abacad46b20e25e33ecbb65eafe71e51be8eb9a7c212b90b8b832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e504e5843abacad46b20e25e33ecbb65eafe71e51be8eb9a7c212b90b8b832->enter($__internal_a6e504e5843abacad46b20e25e33ecbb65eafe71e51be8eb9a7c212b90b8b832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_294767e38632901ad761c44f08434972a9557b75172a10811406a01b299fc647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294767e38632901ad761c44f08434972a9557b75172a10811406a01b299fc647->enter($__internal_294767e38632901ad761c44f08434972a9557b75172a10811406a01b299fc647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_294767e38632901ad761c44f08434972a9557b75172a10811406a01b299fc647->leave($__internal_294767e38632901ad761c44f08434972a9557b75172a10811406a01b299fc647_prof);

        
        $__internal_a6e504e5843abacad46b20e25e33ecbb65eafe71e51be8eb9a7c212b90b8b832->leave($__internal_a6e504e5843abacad46b20e25e33ecbb65eafe71e51be8eb9a7c212b90b8b832_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_09c841b87aaafc1eb4a742c2154c7aef598b0f52f5705e6f84756308b78b57f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c841b87aaafc1eb4a742c2154c7aef598b0f52f5705e6f84756308b78b57f4->enter($__internal_09c841b87aaafc1eb4a742c2154c7aef598b0f52f5705e6f84756308b78b57f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_5c6e9df82eabb3d9fc3828833b459d1fe5d392d3a1b2f8c9defee229ecc4bc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6e9df82eabb3d9fc3828833b459d1fe5d392d3a1b2f8c9defee229ecc4bc36->enter($__internal_5c6e9df82eabb3d9fc3828833b459d1fe5d392d3a1b2f8c9defee229ecc4bc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_5c6e9df82eabb3d9fc3828833b459d1fe5d392d3a1b2f8c9defee229ecc4bc36->leave($__internal_5c6e9df82eabb3d9fc3828833b459d1fe5d392d3a1b2f8c9defee229ecc4bc36_prof);

        
        $__internal_09c841b87aaafc1eb4a742c2154c7aef598b0f52f5705e6f84756308b78b57f4->leave($__internal_09c841b87aaafc1eb4a742c2154c7aef598b0f52f5705e6f84756308b78b57f4_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_a5d615075df13b7cf2076e021b3768a35a824d19715b80607b9787a52758cebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d615075df13b7cf2076e021b3768a35a824d19715b80607b9787a52758cebb->enter($__internal_a5d615075df13b7cf2076e021b3768a35a824d19715b80607b9787a52758cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_7b037864c385609a6dac65c149ae12284d5a5a737be6b809f5a4284396ca8c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b037864c385609a6dac65c149ae12284d5a5a737be6b809f5a4284396ca8c9e->enter($__internal_7b037864c385609a6dac65c149ae12284d5a5a737be6b809f5a4284396ca8c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7b037864c385609a6dac65c149ae12284d5a5a737be6b809f5a4284396ca8c9e->leave($__internal_7b037864c385609a6dac65c149ae12284d5a5a737be6b809f5a4284396ca8c9e_prof);

        
        $__internal_a5d615075df13b7cf2076e021b3768a35a824d19715b80607b9787a52758cebb->leave($__internal_a5d615075df13b7cf2076e021b3768a35a824d19715b80607b9787a52758cebb_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_01ad15ab0e4a537c14f79d56e08b94e586f34d3820edd3243ab55a6b7eadeebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ad15ab0e4a537c14f79d56e08b94e586f34d3820edd3243ab55a6b7eadeebb->enter($__internal_01ad15ab0e4a537c14f79d56e08b94e586f34d3820edd3243ab55a6b7eadeebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_11166d7cc0a136a2eb1510033430878edd8c33d225be770fe24e408fc48bb353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11166d7cc0a136a2eb1510033430878edd8c33d225be770fe24e408fc48bb353->enter($__internal_11166d7cc0a136a2eb1510033430878edd8c33d225be770fe24e408fc48bb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_11166d7cc0a136a2eb1510033430878edd8c33d225be770fe24e408fc48bb353->leave($__internal_11166d7cc0a136a2eb1510033430878edd8c33d225be770fe24e408fc48bb353_prof);

        
        $__internal_01ad15ab0e4a537c14f79d56e08b94e586f34d3820edd3243ab55a6b7eadeebb->leave($__internal_01ad15ab0e4a537c14f79d56e08b94e586f34d3820edd3243ab55a6b7eadeebb_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_e048da5920d099e528862a22c15f36a520a515e26d30f22202884395d5d17c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e048da5920d099e528862a22c15f36a520a515e26d30f22202884395d5d17c54->enter($__internal_e048da5920d099e528862a22c15f36a520a515e26d30f22202884395d5d17c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_27b8253bcc109c2f299cb81680c3c85fb56065e736d0c72a7dd283572b3a441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b8253bcc109c2f299cb81680c3c85fb56065e736d0c72a7dd283572b3a441d->enter($__internal_27b8253bcc109c2f299cb81680c3c85fb56065e736d0c72a7dd283572b3a441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_27b8253bcc109c2f299cb81680c3c85fb56065e736d0c72a7dd283572b3a441d->leave($__internal_27b8253bcc109c2f299cb81680c3c85fb56065e736d0c72a7dd283572b3a441d_prof);

        
        $__internal_e048da5920d099e528862a22c15f36a520a515e26d30f22202884395d5d17c54->leave($__internal_e048da5920d099e528862a22c15f36a520a515e26d30f22202884395d5d17c54_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8b2829fedac50d1c0c9ad2865ba0b30648702ded9eb592ff26266286bd22bdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2829fedac50d1c0c9ad2865ba0b30648702ded9eb592ff26266286bd22bdd3->enter($__internal_8b2829fedac50d1c0c9ad2865ba0b30648702ded9eb592ff26266286bd22bdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_c1357fa014c58e863db085b3b1334cfd358494e7d1f1dc2cc8984fb095aff2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1357fa014c58e863db085b3b1334cfd358494e7d1f1dc2cc8984fb095aff2a6->enter($__internal_c1357fa014c58e863db085b3b1334cfd358494e7d1f1dc2cc8984fb095aff2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_c1357fa014c58e863db085b3b1334cfd358494e7d1f1dc2cc8984fb095aff2a6->leave($__internal_c1357fa014c58e863db085b3b1334cfd358494e7d1f1dc2cc8984fb095aff2a6_prof);

        
        $__internal_8b2829fedac50d1c0c9ad2865ba0b30648702ded9eb592ff26266286bd22bdd3->leave($__internal_8b2829fedac50d1c0c9ad2865ba0b30648702ded9eb592ff26266286bd22bdd3_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_e371fbbfb2cbad79296bb762a6e9994f9372da7a5cf455fe9076a58d2e48ce25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e371fbbfb2cbad79296bb762a6e9994f9372da7a5cf455fe9076a58d2e48ce25->enter($__internal_e371fbbfb2cbad79296bb762a6e9994f9372da7a5cf455fe9076a58d2e48ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_66a549424e71749bfceb18349f606bf0f50d62b8cfaeca5b33b890f03126e824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a549424e71749bfceb18349f606bf0f50d62b8cfaeca5b33b890f03126e824->enter($__internal_66a549424e71749bfceb18349f606bf0f50d62b8cfaeca5b33b890f03126e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_66a549424e71749bfceb18349f606bf0f50d62b8cfaeca5b33b890f03126e824->leave($__internal_66a549424e71749bfceb18349f606bf0f50d62b8cfaeca5b33b890f03126e824_prof);

        
        $__internal_e371fbbfb2cbad79296bb762a6e9994f9372da7a5cf455fe9076a58d2e48ce25->leave($__internal_e371fbbfb2cbad79296bb762a6e9994f9372da7a5cf455fe9076a58d2e48ce25_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
