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
        $__internal_ec63b3f6aa18175d3c1b8cb319d6541c420f60b3131b273373644a9965e65c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec63b3f6aa18175d3c1b8cb319d6541c420f60b3131b273373644a9965e65c3d->enter($__internal_ec63b3f6aa18175d3c1b8cb319d6541c420f60b3131b273373644a9965e65c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_b43c35f20cc78d79e654f9350a8e6c2c4df77b006d727c0b997dfbbb6d39207d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43c35f20cc78d79e654f9350a8e6c2c4df77b006d727c0b997dfbbb6d39207d->enter($__internal_b43c35f20cc78d79e654f9350a8e6c2c4df77b006d727c0b997dfbbb6d39207d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_ec63b3f6aa18175d3c1b8cb319d6541c420f60b3131b273373644a9965e65c3d->leave($__internal_ec63b3f6aa18175d3c1b8cb319d6541c420f60b3131b273373644a9965e65c3d_prof);

        
        $__internal_b43c35f20cc78d79e654f9350a8e6c2c4df77b006d727c0b997dfbbb6d39207d->leave($__internal_b43c35f20cc78d79e654f9350a8e6c2c4df77b006d727c0b997dfbbb6d39207d_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_c429a5d479791c1da47b7343562c65f2d43a687f4e41b08fdca7225ab5d5b99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c429a5d479791c1da47b7343562c65f2d43a687f4e41b08fdca7225ab5d5b99f->enter($__internal_c429a5d479791c1da47b7343562c65f2d43a687f4e41b08fdca7225ab5d5b99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_f3b50819b0ee1afafa97704c3763decb633605e6db8b5c7b41501775f2d72cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b50819b0ee1afafa97704c3763decb633605e6db8b5c7b41501775f2d72cd9->enter($__internal_f3b50819b0ee1afafa97704c3763decb633605e6db8b5c7b41501775f2d72cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_f3b50819b0ee1afafa97704c3763decb633605e6db8b5c7b41501775f2d72cd9->leave($__internal_f3b50819b0ee1afafa97704c3763decb633605e6db8b5c7b41501775f2d72cd9_prof);

        
        $__internal_c429a5d479791c1da47b7343562c65f2d43a687f4e41b08fdca7225ab5d5b99f->leave($__internal_c429a5d479791c1da47b7343562c65f2d43a687f4e41b08fdca7225ab5d5b99f_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_93d07ef61d46fda63885abccac9f826a061e9f498c5487c669f66c632ed2b1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d07ef61d46fda63885abccac9f826a061e9f498c5487c669f66c632ed2b1fa->enter($__internal_93d07ef61d46fda63885abccac9f826a061e9f498c5487c669f66c632ed2b1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c2e60f4e447e76b40ca44bcdfb4b7b899b6a11d9c16981710abb6b3cf8f7d3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e60f4e447e76b40ca44bcdfb4b7b899b6a11d9c16981710abb6b3cf8f7d3d8->enter($__internal_c2e60f4e447e76b40ca44bcdfb4b7b899b6a11d9c16981710abb6b3cf8f7d3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_c2e60f4e447e76b40ca44bcdfb4b7b899b6a11d9c16981710abb6b3cf8f7d3d8->leave($__internal_c2e60f4e447e76b40ca44bcdfb4b7b899b6a11d9c16981710abb6b3cf8f7d3d8_prof);

        
        $__internal_93d07ef61d46fda63885abccac9f826a061e9f498c5487c669f66c632ed2b1fa->leave($__internal_93d07ef61d46fda63885abccac9f826a061e9f498c5487c669f66c632ed2b1fa_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bdfafb8b6a58e5cf63c304d8bf7f789db3d37506860360154548ac98c42d101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfafb8b6a58e5cf63c304d8bf7f789db3d37506860360154548ac98c42d101f->enter($__internal_bdfafb8b6a58e5cf63c304d8bf7f789db3d37506860360154548ac98c42d101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c0afc56adfe9f24e1c2b529de13f00c3b9231fbcbab4c7c78de7b4e168a00a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0afc56adfe9f24e1c2b529de13f00c3b9231fbcbab4c7c78de7b4e168a00a66->enter($__internal_c0afc56adfe9f24e1c2b529de13f00c3b9231fbcbab4c7c78de7b4e168a00a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_c0afc56adfe9f24e1c2b529de13f00c3b9231fbcbab4c7c78de7b4e168a00a66->leave($__internal_c0afc56adfe9f24e1c2b529de13f00c3b9231fbcbab4c7c78de7b4e168a00a66_prof);

        
        $__internal_bdfafb8b6a58e5cf63c304d8bf7f789db3d37506860360154548ac98c42d101f->leave($__internal_bdfafb8b6a58e5cf63c304d8bf7f789db3d37506860360154548ac98c42d101f_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_436915cc0608d4704b93381bf411427d7004e810bb59f4376611fb9dc134e14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436915cc0608d4704b93381bf411427d7004e810bb59f4376611fb9dc134e14f->enter($__internal_436915cc0608d4704b93381bf411427d7004e810bb59f4376611fb9dc134e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_a47a922836f734dcb52f304f3bc6f7d083b8feaa7d578a9d9673a1333b9c2fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47a922836f734dcb52f304f3bc6f7d083b8feaa7d578a9d9673a1333b9c2fa4->enter($__internal_a47a922836f734dcb52f304f3bc6f7d083b8feaa7d578a9d9673a1333b9c2fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_a47a922836f734dcb52f304f3bc6f7d083b8feaa7d578a9d9673a1333b9c2fa4->leave($__internal_a47a922836f734dcb52f304f3bc6f7d083b8feaa7d578a9d9673a1333b9c2fa4_prof);

        
        $__internal_436915cc0608d4704b93381bf411427d7004e810bb59f4376611fb9dc134e14f->leave($__internal_436915cc0608d4704b93381bf411427d7004e810bb59f4376611fb9dc134e14f_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0d20cfd89b65748c5544283f96157dd4e1bf5586504aabc08ca0e8fbf4a99d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d20cfd89b65748c5544283f96157dd4e1bf5586504aabc08ca0e8fbf4a99d1a->enter($__internal_0d20cfd89b65748c5544283f96157dd4e1bf5586504aabc08ca0e8fbf4a99d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a3445fc23bbf87dfaa17317c70f28a79a066db9157c5d19c5e0ee18354398419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3445fc23bbf87dfaa17317c70f28a79a066db9157c5d19c5e0ee18354398419->enter($__internal_a3445fc23bbf87dfaa17317c70f28a79a066db9157c5d19c5e0ee18354398419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_a3445fc23bbf87dfaa17317c70f28a79a066db9157c5d19c5e0ee18354398419->leave($__internal_a3445fc23bbf87dfaa17317c70f28a79a066db9157c5d19c5e0ee18354398419_prof);

        
        $__internal_0d20cfd89b65748c5544283f96157dd4e1bf5586504aabc08ca0e8fbf4a99d1a->leave($__internal_0d20cfd89b65748c5544283f96157dd4e1bf5586504aabc08ca0e8fbf4a99d1a_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_2416b7416813b392b0368bff9f7143b0496ce8360c0255d3c1e3954a71a4a913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2416b7416813b392b0368bff9f7143b0496ce8360c0255d3c1e3954a71a4a913->enter($__internal_2416b7416813b392b0368bff9f7143b0496ce8360c0255d3c1e3954a71a4a913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_b26b7780ad057a3377b31c34f02df732a0623319fb4dc6fafdf4dcbbf894f944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26b7780ad057a3377b31c34f02df732a0623319fb4dc6fafdf4dcbbf894f944->enter($__internal_b26b7780ad057a3377b31c34f02df732a0623319fb4dc6fafdf4dcbbf894f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_b26b7780ad057a3377b31c34f02df732a0623319fb4dc6fafdf4dcbbf894f944->leave($__internal_b26b7780ad057a3377b31c34f02df732a0623319fb4dc6fafdf4dcbbf894f944_prof);

        
        $__internal_2416b7416813b392b0368bff9f7143b0496ce8360c0255d3c1e3954a71a4a913->leave($__internal_2416b7416813b392b0368bff9f7143b0496ce8360c0255d3c1e3954a71a4a913_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5d3c0774df2f5f14de0a80f04daaa28f5f5051ef0390a44db719902e76015fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3c0774df2f5f14de0a80f04daaa28f5f5051ef0390a44db719902e76015fb3->enter($__internal_5d3c0774df2f5f14de0a80f04daaa28f5f5051ef0390a44db719902e76015fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8e955e6db70e4d8402232ca43ac4305d6c49617cd72c27a775889b3fd7c029cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e955e6db70e4d8402232ca43ac4305d6c49617cd72c27a775889b3fd7c029cf->enter($__internal_8e955e6db70e4d8402232ca43ac4305d6c49617cd72c27a775889b3fd7c029cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_8e955e6db70e4d8402232ca43ac4305d6c49617cd72c27a775889b3fd7c029cf->leave($__internal_8e955e6db70e4d8402232ca43ac4305d6c49617cd72c27a775889b3fd7c029cf_prof);

        
        $__internal_5d3c0774df2f5f14de0a80f04daaa28f5f5051ef0390a44db719902e76015fb3->leave($__internal_5d3c0774df2f5f14de0a80f04daaa28f5f5051ef0390a44db719902e76015fb3_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_576429a1afe5432be32c23cdd4aaa2741d678a0f97e9fd76fbb8ea84f72e04c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576429a1afe5432be32c23cdd4aaa2741d678a0f97e9fd76fbb8ea84f72e04c5->enter($__internal_576429a1afe5432be32c23cdd4aaa2741d678a0f97e9fd76fbb8ea84f72e04c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f0d1fbd8502a58e7e423787554268584389a2856ae469c8bb8093b9f0b4aed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d1fbd8502a58e7e423787554268584389a2856ae469c8bb8093b9f0b4aed4c->enter($__internal_f0d1fbd8502a58e7e423787554268584389a2856ae469c8bb8093b9f0b4aed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f0d1fbd8502a58e7e423787554268584389a2856ae469c8bb8093b9f0b4aed4c->leave($__internal_f0d1fbd8502a58e7e423787554268584389a2856ae469c8bb8093b9f0b4aed4c_prof);

        
        $__internal_576429a1afe5432be32c23cdd4aaa2741d678a0f97e9fd76fbb8ea84f72e04c5->leave($__internal_576429a1afe5432be32c23cdd4aaa2741d678a0f97e9fd76fbb8ea84f72e04c5_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_330205b0d2eea10971cc4a609a49a4d28c7784540cfc2ceae7e698d6a2fe8a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330205b0d2eea10971cc4a609a49a4d28c7784540cfc2ceae7e698d6a2fe8a31->enter($__internal_330205b0d2eea10971cc4a609a49a4d28c7784540cfc2ceae7e698d6a2fe8a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_d52c611840c6895637e0250a912a47a3fbf2f2ffdd4a5d17727f817f899d4607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52c611840c6895637e0250a912a47a3fbf2f2ffdd4a5d17727f817f899d4607->enter($__internal_d52c611840c6895637e0250a912a47a3fbf2f2ffdd4a5d17727f817f899d4607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_1908156b908079999d5ba5c9e749c393ef7810d20584bd1231bb03fa35d6f2c7 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_1908156b908079999d5ba5c9e749c393ef7810d20584bd1231bb03fa35d6f2c7)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_1908156b908079999d5ba5c9e749c393ef7810d20584bd1231bb03fa35d6f2c7);
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
        
        $__internal_d52c611840c6895637e0250a912a47a3fbf2f2ffdd4a5d17727f817f899d4607->leave($__internal_d52c611840c6895637e0250a912a47a3fbf2f2ffdd4a5d17727f817f899d4607_prof);

        
        $__internal_330205b0d2eea10971cc4a609a49a4d28c7784540cfc2ceae7e698d6a2fe8a31->leave($__internal_330205b0d2eea10971cc4a609a49a4d28c7784540cfc2ceae7e698d6a2fe8a31_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_033bfd042adeb61d77d00a66d4a8e1aaaa25286509fffa7fa113ec5842473005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033bfd042adeb61d77d00a66d4a8e1aaaa25286509fffa7fa113ec5842473005->enter($__internal_033bfd042adeb61d77d00a66d4a8e1aaaa25286509fffa7fa113ec5842473005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_601ed5239aab0f92f57a1004be216df777d9fd8825b2e3b2dbd8134919cdd38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601ed5239aab0f92f57a1004be216df777d9fd8825b2e3b2dbd8134919cdd38a->enter($__internal_601ed5239aab0f92f57a1004be216df777d9fd8825b2e3b2dbd8134919cdd38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_601ed5239aab0f92f57a1004be216df777d9fd8825b2e3b2dbd8134919cdd38a->leave($__internal_601ed5239aab0f92f57a1004be216df777d9fd8825b2e3b2dbd8134919cdd38a_prof);

        
        $__internal_033bfd042adeb61d77d00a66d4a8e1aaaa25286509fffa7fa113ec5842473005->leave($__internal_033bfd042adeb61d77d00a66d4a8e1aaaa25286509fffa7fa113ec5842473005_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d841852c462cf2671ef85d37c7bbfea7d1c0d23b0567c9bb2c9f23e830d3b7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d841852c462cf2671ef85d37c7bbfea7d1c0d23b0567c9bb2c9f23e830d3b7cb->enter($__internal_d841852c462cf2671ef85d37c7bbfea7d1c0d23b0567c9bb2c9f23e830d3b7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_da8fbd464b9b88138fbf493c7784681494545cdcb48da0a8f2ce0655f6385124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8fbd464b9b88138fbf493c7784681494545cdcb48da0a8f2ce0655f6385124->enter($__internal_da8fbd464b9b88138fbf493c7784681494545cdcb48da0a8f2ce0655f6385124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_da8fbd464b9b88138fbf493c7784681494545cdcb48da0a8f2ce0655f6385124->leave($__internal_da8fbd464b9b88138fbf493c7784681494545cdcb48da0a8f2ce0655f6385124_prof);

        
        $__internal_d841852c462cf2671ef85d37c7bbfea7d1c0d23b0567c9bb2c9f23e830d3b7cb->leave($__internal_d841852c462cf2671ef85d37c7bbfea7d1c0d23b0567c9bb2c9f23e830d3b7cb_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b348f8276e0896d58ec18a74be4f11efc992ba803cfebf16f2287174bd6f7911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b348f8276e0896d58ec18a74be4f11efc992ba803cfebf16f2287174bd6f7911->enter($__internal_b348f8276e0896d58ec18a74be4f11efc992ba803cfebf16f2287174bd6f7911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_45f14e426a15965179bb710cbfc2639143737a25a01b2cda8b565dd16235aab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f14e426a15965179bb710cbfc2639143737a25a01b2cda8b565dd16235aab1->enter($__internal_45f14e426a15965179bb710cbfc2639143737a25a01b2cda8b565dd16235aab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_45f14e426a15965179bb710cbfc2639143737a25a01b2cda8b565dd16235aab1->leave($__internal_45f14e426a15965179bb710cbfc2639143737a25a01b2cda8b565dd16235aab1_prof);

        
        $__internal_b348f8276e0896d58ec18a74be4f11efc992ba803cfebf16f2287174bd6f7911->leave($__internal_b348f8276e0896d58ec18a74be4f11efc992ba803cfebf16f2287174bd6f7911_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e76ee73a0935de09e5ce1e9eb5a2e4181f0f4daab2032be727cce9edb6ab28bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76ee73a0935de09e5ce1e9eb5a2e4181f0f4daab2032be727cce9edb6ab28bc->enter($__internal_e76ee73a0935de09e5ce1e9eb5a2e4181f0f4daab2032be727cce9edb6ab28bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_729b142526939f6b4c096e71d231390e63f7a78b1bf834339afc5544b553d147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729b142526939f6b4c096e71d231390e63f7a78b1bf834339afc5544b553d147->enter($__internal_729b142526939f6b4c096e71d231390e63f7a78b1bf834339afc5544b553d147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_729b142526939f6b4c096e71d231390e63f7a78b1bf834339afc5544b553d147->leave($__internal_729b142526939f6b4c096e71d231390e63f7a78b1bf834339afc5544b553d147_prof);

        
        $__internal_e76ee73a0935de09e5ce1e9eb5a2e4181f0f4daab2032be727cce9edb6ab28bc->leave($__internal_e76ee73a0935de09e5ce1e9eb5a2e4181f0f4daab2032be727cce9edb6ab28bc_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_74134ca13f9014cb2f3c2302acdc3401b61553326b662e8481bdc624150f8bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74134ca13f9014cb2f3c2302acdc3401b61553326b662e8481bdc624150f8bc4->enter($__internal_74134ca13f9014cb2f3c2302acdc3401b61553326b662e8481bdc624150f8bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d27daf552f14fb8ca97ebfce9f7b2b6850d41b8bb24cb4039835a2e7b2d6fadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27daf552f14fb8ca97ebfce9f7b2b6850d41b8bb24cb4039835a2e7b2d6fadf->enter($__internal_d27daf552f14fb8ca97ebfce9f7b2b6850d41b8bb24cb4039835a2e7b2d6fadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d27daf552f14fb8ca97ebfce9f7b2b6850d41b8bb24cb4039835a2e7b2d6fadf->leave($__internal_d27daf552f14fb8ca97ebfce9f7b2b6850d41b8bb24cb4039835a2e7b2d6fadf_prof);

        
        $__internal_74134ca13f9014cb2f3c2302acdc3401b61553326b662e8481bdc624150f8bc4->leave($__internal_74134ca13f9014cb2f3c2302acdc3401b61553326b662e8481bdc624150f8bc4_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e97d033ef559130c1ba24f127172a3dda09d7438b73cf58f46dfd11ee726cdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97d033ef559130c1ba24f127172a3dda09d7438b73cf58f46dfd11ee726cdb7->enter($__internal_e97d033ef559130c1ba24f127172a3dda09d7438b73cf58f46dfd11ee726cdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f186ac5f12676e07fbead0039326b3c25de4c18a0addfd085d4d02b7525e0805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f186ac5f12676e07fbead0039326b3c25de4c18a0addfd085d4d02b7525e0805->enter($__internal_f186ac5f12676e07fbead0039326b3c25de4c18a0addfd085d4d02b7525e0805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_f186ac5f12676e07fbead0039326b3c25de4c18a0addfd085d4d02b7525e0805->leave($__internal_f186ac5f12676e07fbead0039326b3c25de4c18a0addfd085d4d02b7525e0805_prof);

        
        $__internal_e97d033ef559130c1ba24f127172a3dda09d7438b73cf58f46dfd11ee726cdb7->leave($__internal_e97d033ef559130c1ba24f127172a3dda09d7438b73cf58f46dfd11ee726cdb7_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_572cbcb0eaff5b9324a45e51fbca84e29e0d2402b3f2a000b0f2803a6ae8463c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572cbcb0eaff5b9324a45e51fbca84e29e0d2402b3f2a000b0f2803a6ae8463c->enter($__internal_572cbcb0eaff5b9324a45e51fbca84e29e0d2402b3f2a000b0f2803a6ae8463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_affc29444bf3783f0ccbec9131b003553f11dbe471ec027945519e798a487289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affc29444bf3783f0ccbec9131b003553f11dbe471ec027945519e798a487289->enter($__internal_affc29444bf3783f0ccbec9131b003553f11dbe471ec027945519e798a487289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_affc29444bf3783f0ccbec9131b003553f11dbe471ec027945519e798a487289->leave($__internal_affc29444bf3783f0ccbec9131b003553f11dbe471ec027945519e798a487289_prof);

        
        $__internal_572cbcb0eaff5b9324a45e51fbca84e29e0d2402b3f2a000b0f2803a6ae8463c->leave($__internal_572cbcb0eaff5b9324a45e51fbca84e29e0d2402b3f2a000b0f2803a6ae8463c_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_67c88652fe647abe9996ad66fad35c78a0477eef36274a94c67dc29ddbe50e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c88652fe647abe9996ad66fad35c78a0477eef36274a94c67dc29ddbe50e4f->enter($__internal_67c88652fe647abe9996ad66fad35c78a0477eef36274a94c67dc29ddbe50e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_93a88c204243d3557827652907ce92466509e70b51ca91589120a2270731c5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a88c204243d3557827652907ce92466509e70b51ca91589120a2270731c5d2->enter($__internal_93a88c204243d3557827652907ce92466509e70b51ca91589120a2270731c5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_93a88c204243d3557827652907ce92466509e70b51ca91589120a2270731c5d2->leave($__internal_93a88c204243d3557827652907ce92466509e70b51ca91589120a2270731c5d2_prof);

        
        $__internal_67c88652fe647abe9996ad66fad35c78a0477eef36274a94c67dc29ddbe50e4f->leave($__internal_67c88652fe647abe9996ad66fad35c78a0477eef36274a94c67dc29ddbe50e4f_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2e2f4d02c050dc5bd7ba5f503570bb49dde643eff22a123dc9f436e9dd6d0aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2f4d02c050dc5bd7ba5f503570bb49dde643eff22a123dc9f436e9dd6d0aef->enter($__internal_2e2f4d02c050dc5bd7ba5f503570bb49dde643eff22a123dc9f436e9dd6d0aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_eff9ff2d60092763dabc74ac5b9abaef513feacd2b3d694ef1cf4d4823eade5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff9ff2d60092763dabc74ac5b9abaef513feacd2b3d694ef1cf4d4823eade5e->enter($__internal_eff9ff2d60092763dabc74ac5b9abaef513feacd2b3d694ef1cf4d4823eade5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_eff9ff2d60092763dabc74ac5b9abaef513feacd2b3d694ef1cf4d4823eade5e->leave($__internal_eff9ff2d60092763dabc74ac5b9abaef513feacd2b3d694ef1cf4d4823eade5e_prof);

        
        $__internal_2e2f4d02c050dc5bd7ba5f503570bb49dde643eff22a123dc9f436e9dd6d0aef->leave($__internal_2e2f4d02c050dc5bd7ba5f503570bb49dde643eff22a123dc9f436e9dd6d0aef_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_4f9f9108566ca9ee6f4b9904c4b416283fdfcdafc50fbf2c4052d6b98843ccd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9f9108566ca9ee6f4b9904c4b416283fdfcdafc50fbf2c4052d6b98843ccd3->enter($__internal_4f9f9108566ca9ee6f4b9904c4b416283fdfcdafc50fbf2c4052d6b98843ccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_930abc1cc162fe4fcd104fa9a316f7ebc3dec679e720d313e51c39b8e687b9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930abc1cc162fe4fcd104fa9a316f7ebc3dec679e720d313e51c39b8e687b9e6->enter($__internal_930abc1cc162fe4fcd104fa9a316f7ebc3dec679e720d313e51c39b8e687b9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_930abc1cc162fe4fcd104fa9a316f7ebc3dec679e720d313e51c39b8e687b9e6->leave($__internal_930abc1cc162fe4fcd104fa9a316f7ebc3dec679e720d313e51c39b8e687b9e6_prof);

        
        $__internal_4f9f9108566ca9ee6f4b9904c4b416283fdfcdafc50fbf2c4052d6b98843ccd3->leave($__internal_4f9f9108566ca9ee6f4b9904c4b416283fdfcdafc50fbf2c4052d6b98843ccd3_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_333c2c856c69e2fdca5d8f097cc7bc6bea0c87399123d0485b4d370853c89cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333c2c856c69e2fdca5d8f097cc7bc6bea0c87399123d0485b4d370853c89cb9->enter($__internal_333c2c856c69e2fdca5d8f097cc7bc6bea0c87399123d0485b4d370853c89cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_0aec973f591fe14ec7ad23f0a9c5c8f8950e601aa8d149131c57ebb4b8a4af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aec973f591fe14ec7ad23f0a9c5c8f8950e601aa8d149131c57ebb4b8a4af04->enter($__internal_0aec973f591fe14ec7ad23f0a9c5c8f8950e601aa8d149131c57ebb4b8a4af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0aec973f591fe14ec7ad23f0a9c5c8f8950e601aa8d149131c57ebb4b8a4af04->leave($__internal_0aec973f591fe14ec7ad23f0a9c5c8f8950e601aa8d149131c57ebb4b8a4af04_prof);

        
        $__internal_333c2c856c69e2fdca5d8f097cc7bc6bea0c87399123d0485b4d370853c89cb9->leave($__internal_333c2c856c69e2fdca5d8f097cc7bc6bea0c87399123d0485b4d370853c89cb9_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_186d852e7a904a68812308ec15d31b500517639dde1a1f59808dd015852d1e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186d852e7a904a68812308ec15d31b500517639dde1a1f59808dd015852d1e0d->enter($__internal_186d852e7a904a68812308ec15d31b500517639dde1a1f59808dd015852d1e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ded8576a827d0e0a380390c337a467e534b1aaccabaca3432d9c9dff123f4c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded8576a827d0e0a380390c337a467e534b1aaccabaca3432d9c9dff123f4c94->enter($__internal_ded8576a827d0e0a380390c337a467e534b1aaccabaca3432d9c9dff123f4c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_ded8576a827d0e0a380390c337a467e534b1aaccabaca3432d9c9dff123f4c94->leave($__internal_ded8576a827d0e0a380390c337a467e534b1aaccabaca3432d9c9dff123f4c94_prof);

        
        $__internal_186d852e7a904a68812308ec15d31b500517639dde1a1f59808dd015852d1e0d->leave($__internal_186d852e7a904a68812308ec15d31b500517639dde1a1f59808dd015852d1e0d_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_ea8459973fa8fa52a761083aa9cf672ea3556f4ac06c68daa2c1a039fbd6cb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8459973fa8fa52a761083aa9cf672ea3556f4ac06c68daa2c1a039fbd6cb23->enter($__internal_ea8459973fa8fa52a761083aa9cf672ea3556f4ac06c68daa2c1a039fbd6cb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_48726ee5938bb03d3f8db1a8a2d7cecf540776f4114ccb197473154b61542ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48726ee5938bb03d3f8db1a8a2d7cecf540776f4114ccb197473154b61542ca6->enter($__internal_48726ee5938bb03d3f8db1a8a2d7cecf540776f4114ccb197473154b61542ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_48726ee5938bb03d3f8db1a8a2d7cecf540776f4114ccb197473154b61542ca6->leave($__internal_48726ee5938bb03d3f8db1a8a2d7cecf540776f4114ccb197473154b61542ca6_prof);

        
        $__internal_ea8459973fa8fa52a761083aa9cf672ea3556f4ac06c68daa2c1a039fbd6cb23->leave($__internal_ea8459973fa8fa52a761083aa9cf672ea3556f4ac06c68daa2c1a039fbd6cb23_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_a1e4545c20248c92834c1101462cc65a50ef2513f894c0d8aeab6d9ec164d31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e4545c20248c92834c1101462cc65a50ef2513f894c0d8aeab6d9ec164d31a->enter($__internal_a1e4545c20248c92834c1101462cc65a50ef2513f894c0d8aeab6d9ec164d31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_f6562172ef4a02a54b8b66cefafa505917d6d15d69c5d5ca3b55be8d9711d873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6562172ef4a02a54b8b66cefafa505917d6d15d69c5d5ca3b55be8d9711d873->enter($__internal_f6562172ef4a02a54b8b66cefafa505917d6d15d69c5d5ca3b55be8d9711d873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f6562172ef4a02a54b8b66cefafa505917d6d15d69c5d5ca3b55be8d9711d873->leave($__internal_f6562172ef4a02a54b8b66cefafa505917d6d15d69c5d5ca3b55be8d9711d873_prof);

        
        $__internal_a1e4545c20248c92834c1101462cc65a50ef2513f894c0d8aeab6d9ec164d31a->leave($__internal_a1e4545c20248c92834c1101462cc65a50ef2513f894c0d8aeab6d9ec164d31a_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_6191a03982967390f34325188c6d15d7bf8f764ef86fbdaaffa87812236cd670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6191a03982967390f34325188c6d15d7bf8f764ef86fbdaaffa87812236cd670->enter($__internal_6191a03982967390f34325188c6d15d7bf8f764ef86fbdaaffa87812236cd670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_183f0bf97ff44565412b35fa8ee47a508d858c97c593aa80731b3c90e9a9bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183f0bf97ff44565412b35fa8ee47a508d858c97c593aa80731b3c90e9a9bafb->enter($__internal_183f0bf97ff44565412b35fa8ee47a508d858c97c593aa80731b3c90e9a9bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_183f0bf97ff44565412b35fa8ee47a508d858c97c593aa80731b3c90e9a9bafb->leave($__internal_183f0bf97ff44565412b35fa8ee47a508d858c97c593aa80731b3c90e9a9bafb_prof);

        
        $__internal_6191a03982967390f34325188c6d15d7bf8f764ef86fbdaaffa87812236cd670->leave($__internal_6191a03982967390f34325188c6d15d7bf8f764ef86fbdaaffa87812236cd670_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_7003cb1140226b5cd5a160bb8b1e215a88dd05016271d2693c4d1e6856043424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7003cb1140226b5cd5a160bb8b1e215a88dd05016271d2693c4d1e6856043424->enter($__internal_7003cb1140226b5cd5a160bb8b1e215a88dd05016271d2693c4d1e6856043424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_e7ee6fe193cb7478b9c4f914559ab5b368a16af09f32768e0bb95b68306f3eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ee6fe193cb7478b9c4f914559ab5b368a16af09f32768e0bb95b68306f3eab->enter($__internal_e7ee6fe193cb7478b9c4f914559ab5b368a16af09f32768e0bb95b68306f3eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e7ee6fe193cb7478b9c4f914559ab5b368a16af09f32768e0bb95b68306f3eab->leave($__internal_e7ee6fe193cb7478b9c4f914559ab5b368a16af09f32768e0bb95b68306f3eab_prof);

        
        $__internal_7003cb1140226b5cd5a160bb8b1e215a88dd05016271d2693c4d1e6856043424->leave($__internal_7003cb1140226b5cd5a160bb8b1e215a88dd05016271d2693c4d1e6856043424_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_323cd0a688e702c93bc0a93896f078a14e28dfd075a30b9788a0dfaa60d492f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323cd0a688e702c93bc0a93896f078a14e28dfd075a30b9788a0dfaa60d492f9->enter($__internal_323cd0a688e702c93bc0a93896f078a14e28dfd075a30b9788a0dfaa60d492f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_727afb1226a95969f645939d48015a080169fffbc8a42ef5f4aa2f6df1c3dc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727afb1226a95969f645939d48015a080169fffbc8a42ef5f4aa2f6df1c3dc70->enter($__internal_727afb1226a95969f645939d48015a080169fffbc8a42ef5f4aa2f6df1c3dc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_727afb1226a95969f645939d48015a080169fffbc8a42ef5f4aa2f6df1c3dc70->leave($__internal_727afb1226a95969f645939d48015a080169fffbc8a42ef5f4aa2f6df1c3dc70_prof);

        
        $__internal_323cd0a688e702c93bc0a93896f078a14e28dfd075a30b9788a0dfaa60d492f9->leave($__internal_323cd0a688e702c93bc0a93896f078a14e28dfd075a30b9788a0dfaa60d492f9_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_3b9869542a00205e5950cc9d0c55e437440c8d40854abd20f6e488f582284464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9869542a00205e5950cc9d0c55e437440c8d40854abd20f6e488f582284464->enter($__internal_3b9869542a00205e5950cc9d0c55e437440c8d40854abd20f6e488f582284464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_bc66a99e997b8996a48cd6439cb9032088a220fcf3fd5ac3625dd57999408233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc66a99e997b8996a48cd6439cb9032088a220fcf3fd5ac3625dd57999408233->enter($__internal_bc66a99e997b8996a48cd6439cb9032088a220fcf3fd5ac3625dd57999408233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_bc66a99e997b8996a48cd6439cb9032088a220fcf3fd5ac3625dd57999408233->leave($__internal_bc66a99e997b8996a48cd6439cb9032088a220fcf3fd5ac3625dd57999408233_prof);

        
        $__internal_3b9869542a00205e5950cc9d0c55e437440c8d40854abd20f6e488f582284464->leave($__internal_3b9869542a00205e5950cc9d0c55e437440c8d40854abd20f6e488f582284464_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_511c5f2ecf01e2b201a019a386fe94575eabc928fa7c79b6f8689acadbc3397d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511c5f2ecf01e2b201a019a386fe94575eabc928fa7c79b6f8689acadbc3397d->enter($__internal_511c5f2ecf01e2b201a019a386fe94575eabc928fa7c79b6f8689acadbc3397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_9616553d0647bdbe14246737cf9b6172cc671580b8b1ae8c3c9739b8af88352f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9616553d0647bdbe14246737cf9b6172cc671580b8b1ae8c3c9739b8af88352f->enter($__internal_9616553d0647bdbe14246737cf9b6172cc671580b8b1ae8c3c9739b8af88352f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_9616553d0647bdbe14246737cf9b6172cc671580b8b1ae8c3c9739b8af88352f->leave($__internal_9616553d0647bdbe14246737cf9b6172cc671580b8b1ae8c3c9739b8af88352f_prof);

        
        $__internal_511c5f2ecf01e2b201a019a386fe94575eabc928fa7c79b6f8689acadbc3397d->leave($__internal_511c5f2ecf01e2b201a019a386fe94575eabc928fa7c79b6f8689acadbc3397d_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_a83ab8c76af5054874d832a503c6c4caaa9c2d38cad8d2c11dad3bfc66d65b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83ab8c76af5054874d832a503c6c4caaa9c2d38cad8d2c11dad3bfc66d65b27->enter($__internal_a83ab8c76af5054874d832a503c6c4caaa9c2d38cad8d2c11dad3bfc66d65b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_ca7b0ccc27883f286bd0252654497c638bc38dc167fe940a9269ca60620e875c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7b0ccc27883f286bd0252654497c638bc38dc167fe940a9269ca60620e875c->enter($__internal_ca7b0ccc27883f286bd0252654497c638bc38dc167fe940a9269ca60620e875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ca7b0ccc27883f286bd0252654497c638bc38dc167fe940a9269ca60620e875c->leave($__internal_ca7b0ccc27883f286bd0252654497c638bc38dc167fe940a9269ca60620e875c_prof);

        
        $__internal_a83ab8c76af5054874d832a503c6c4caaa9c2d38cad8d2c11dad3bfc66d65b27->leave($__internal_a83ab8c76af5054874d832a503c6c4caaa9c2d38cad8d2c11dad3bfc66d65b27_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_625c41b1c797d832f33aec153eb1e75082ecc4d89a4ccee2d27cfeba2b6a9a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625c41b1c797d832f33aec153eb1e75082ecc4d89a4ccee2d27cfeba2b6a9a4c->enter($__internal_625c41b1c797d832f33aec153eb1e75082ecc4d89a4ccee2d27cfeba2b6a9a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_8187346264d4f3709f6f998c0419f487ec9fb409464fa955c57a59678d79269f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8187346264d4f3709f6f998c0419f487ec9fb409464fa955c57a59678d79269f->enter($__internal_8187346264d4f3709f6f998c0419f487ec9fb409464fa955c57a59678d79269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8187346264d4f3709f6f998c0419f487ec9fb409464fa955c57a59678d79269f->leave($__internal_8187346264d4f3709f6f998c0419f487ec9fb409464fa955c57a59678d79269f_prof);

        
        $__internal_625c41b1c797d832f33aec153eb1e75082ecc4d89a4ccee2d27cfeba2b6a9a4c->leave($__internal_625c41b1c797d832f33aec153eb1e75082ecc4d89a4ccee2d27cfeba2b6a9a4c_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b486a1b14ee90f8ed1c53c5df643c34e7098acc37f5504e046978c563eaae34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b486a1b14ee90f8ed1c53c5df643c34e7098acc37f5504e046978c563eaae34a->enter($__internal_b486a1b14ee90f8ed1c53c5df643c34e7098acc37f5504e046978c563eaae34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3a2071a682a47ba324429cb6bc9bb6b8e541f6dc5f349fd6c3abc44d21d1f173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2071a682a47ba324429cb6bc9bb6b8e541f6dc5f349fd6c3abc44d21d1f173->enter($__internal_3a2071a682a47ba324429cb6bc9bb6b8e541f6dc5f349fd6c3abc44d21d1f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_473649fad27b18240d00969b240c08de2c5929e8b0d616c76843600bbb4282d9 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_473649fad27b18240d00969b240c08de2c5929e8b0d616c76843600bbb4282d9)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_473649fad27b18240d00969b240c08de2c5929e8b0d616c76843600bbb4282d9);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_3a2071a682a47ba324429cb6bc9bb6b8e541f6dc5f349fd6c3abc44d21d1f173->leave($__internal_3a2071a682a47ba324429cb6bc9bb6b8e541f6dc5f349fd6c3abc44d21d1f173_prof);

        
        $__internal_b486a1b14ee90f8ed1c53c5df643c34e7098acc37f5504e046978c563eaae34a->leave($__internal_b486a1b14ee90f8ed1c53c5df643c34e7098acc37f5504e046978c563eaae34a_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_0ac321ec26c98f1758d9ebc531623ece475c4582604c97faa80580c8c7856a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac321ec26c98f1758d9ebc531623ece475c4582604c97faa80580c8c7856a9f->enter($__internal_0ac321ec26c98f1758d9ebc531623ece475c4582604c97faa80580c8c7856a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_92104166650f30c3f508f1c404836e8461e4d932426a4d126ea400df317da8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92104166650f30c3f508f1c404836e8461e4d932426a4d126ea400df317da8d0->enter($__internal_92104166650f30c3f508f1c404836e8461e4d932426a4d126ea400df317da8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_92104166650f30c3f508f1c404836e8461e4d932426a4d126ea400df317da8d0->leave($__internal_92104166650f30c3f508f1c404836e8461e4d932426a4d126ea400df317da8d0_prof);

        
        $__internal_0ac321ec26c98f1758d9ebc531623ece475c4582604c97faa80580c8c7856a9f->leave($__internal_0ac321ec26c98f1758d9ebc531623ece475c4582604c97faa80580c8c7856a9f_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_8784aed1893e61d932fd09d20bb592a7f879a1da4505edd1131bb48bd727d5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8784aed1893e61d932fd09d20bb592a7f879a1da4505edd1131bb48bd727d5cd->enter($__internal_8784aed1893e61d932fd09d20bb592a7f879a1da4505edd1131bb48bd727d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_c95d30b96c74ea3fdc17b2c57f78c83634860567ab878ba8448ed306a9f6bb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95d30b96c74ea3fdc17b2c57f78c83634860567ab878ba8448ed306a9f6bb9a->enter($__internal_c95d30b96c74ea3fdc17b2c57f78c83634860567ab878ba8448ed306a9f6bb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_c95d30b96c74ea3fdc17b2c57f78c83634860567ab878ba8448ed306a9f6bb9a->leave($__internal_c95d30b96c74ea3fdc17b2c57f78c83634860567ab878ba8448ed306a9f6bb9a_prof);

        
        $__internal_8784aed1893e61d932fd09d20bb592a7f879a1da4505edd1131bb48bd727d5cd->leave($__internal_8784aed1893e61d932fd09d20bb592a7f879a1da4505edd1131bb48bd727d5cd_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ce386ed24572222823ab4d2ecc436d7723dcc5c8e7f301d2052e219c027fc15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce386ed24572222823ab4d2ecc436d7723dcc5c8e7f301d2052e219c027fc15f->enter($__internal_ce386ed24572222823ab4d2ecc436d7723dcc5c8e7f301d2052e219c027fc15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_acfa221a98a213e3c2dd6f65b434fb6bb23d447953a0264ed89ba96e16ce10d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfa221a98a213e3c2dd6f65b434fb6bb23d447953a0264ed89ba96e16ce10d2->enter($__internal_acfa221a98a213e3c2dd6f65b434fb6bb23d447953a0264ed89ba96e16ce10d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_acfa221a98a213e3c2dd6f65b434fb6bb23d447953a0264ed89ba96e16ce10d2->leave($__internal_acfa221a98a213e3c2dd6f65b434fb6bb23d447953a0264ed89ba96e16ce10d2_prof);

        
        $__internal_ce386ed24572222823ab4d2ecc436d7723dcc5c8e7f301d2052e219c027fc15f->leave($__internal_ce386ed24572222823ab4d2ecc436d7723dcc5c8e7f301d2052e219c027fc15f_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4ba886a298fb1402a6af62e77fe5d3250c6bd8f144f878f1ecbcbb1767de847c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba886a298fb1402a6af62e77fe5d3250c6bd8f144f878f1ecbcbb1767de847c->enter($__internal_4ba886a298fb1402a6af62e77fe5d3250c6bd8f144f878f1ecbcbb1767de847c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_678efba6e94893260a0d25f61083ee688527a099140035280c6e877ac5536046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678efba6e94893260a0d25f61083ee688527a099140035280c6e877ac5536046->enter($__internal_678efba6e94893260a0d25f61083ee688527a099140035280c6e877ac5536046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_678efba6e94893260a0d25f61083ee688527a099140035280c6e877ac5536046->leave($__internal_678efba6e94893260a0d25f61083ee688527a099140035280c6e877ac5536046_prof);

        
        $__internal_4ba886a298fb1402a6af62e77fe5d3250c6bd8f144f878f1ecbcbb1767de847c->leave($__internal_4ba886a298fb1402a6af62e77fe5d3250c6bd8f144f878f1ecbcbb1767de847c_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bbe45fc9734f38d1388f3a348427a2183945ba0ffc901eea36a73369050a4ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe45fc9734f38d1388f3a348427a2183945ba0ffc901eea36a73369050a4ef0->enter($__internal_bbe45fc9734f38d1388f3a348427a2183945ba0ffc901eea36a73369050a4ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_2f64a0b9679e468a72916bc7edd97ff84887736308e48007e26f6ad527512a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f64a0b9679e468a72916bc7edd97ff84887736308e48007e26f6ad527512a88->enter($__internal_2f64a0b9679e468a72916bc7edd97ff84887736308e48007e26f6ad527512a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_2f64a0b9679e468a72916bc7edd97ff84887736308e48007e26f6ad527512a88->leave($__internal_2f64a0b9679e468a72916bc7edd97ff84887736308e48007e26f6ad527512a88_prof);

        
        $__internal_bbe45fc9734f38d1388f3a348427a2183945ba0ffc901eea36a73369050a4ef0->leave($__internal_bbe45fc9734f38d1388f3a348427a2183945ba0ffc901eea36a73369050a4ef0_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_a2ad5ce78c47a9e403c30075a494955b7e0981138ab2e3adc23c202d27022bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ad5ce78c47a9e403c30075a494955b7e0981138ab2e3adc23c202d27022bf2->enter($__internal_a2ad5ce78c47a9e403c30075a494955b7e0981138ab2e3adc23c202d27022bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1a3bda44f5f261cf15d300b9b4b55274a8da8a5e0e7c08d3f7c6a649a40b1005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3bda44f5f261cf15d300b9b4b55274a8da8a5e0e7c08d3f7c6a649a40b1005->enter($__internal_1a3bda44f5f261cf15d300b9b4b55274a8da8a5e0e7c08d3f7c6a649a40b1005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_1a3bda44f5f261cf15d300b9b4b55274a8da8a5e0e7c08d3f7c6a649a40b1005->leave($__internal_1a3bda44f5f261cf15d300b9b4b55274a8da8a5e0e7c08d3f7c6a649a40b1005_prof);

        
        $__internal_a2ad5ce78c47a9e403c30075a494955b7e0981138ab2e3adc23c202d27022bf2->leave($__internal_a2ad5ce78c47a9e403c30075a494955b7e0981138ab2e3adc23c202d27022bf2_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_21623f5224c6d3bd69856636a0672e359509bc9bc56b5b96155818a517d85481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21623f5224c6d3bd69856636a0672e359509bc9bc56b5b96155818a517d85481->enter($__internal_21623f5224c6d3bd69856636a0672e359509bc9bc56b5b96155818a517d85481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_69f1dc6d4ca12cbb58c39809e0f1e98d30901050ac96563510ec87617c5437a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f1dc6d4ca12cbb58c39809e0f1e98d30901050ac96563510ec87617c5437a7->enter($__internal_69f1dc6d4ca12cbb58c39809e0f1e98d30901050ac96563510ec87617c5437a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_69f1dc6d4ca12cbb58c39809e0f1e98d30901050ac96563510ec87617c5437a7->leave($__internal_69f1dc6d4ca12cbb58c39809e0f1e98d30901050ac96563510ec87617c5437a7_prof);

        
        $__internal_21623f5224c6d3bd69856636a0672e359509bc9bc56b5b96155818a517d85481->leave($__internal_21623f5224c6d3bd69856636a0672e359509bc9bc56b5b96155818a517d85481_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_48658c5a6063edd9de3595017e14edc103199d219db62537a0f4ad775e240762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48658c5a6063edd9de3595017e14edc103199d219db62537a0f4ad775e240762->enter($__internal_48658c5a6063edd9de3595017e14edc103199d219db62537a0f4ad775e240762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_53bd0a9d4b105c99790a2c05e56e86e470e9ebc96b7dff11731c4274802e17d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bd0a9d4b105c99790a2c05e56e86e470e9ebc96b7dff11731c4274802e17d3->enter($__internal_53bd0a9d4b105c99790a2c05e56e86e470e9ebc96b7dff11731c4274802e17d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_53bd0a9d4b105c99790a2c05e56e86e470e9ebc96b7dff11731c4274802e17d3->leave($__internal_53bd0a9d4b105c99790a2c05e56e86e470e9ebc96b7dff11731c4274802e17d3_prof);

        
        $__internal_48658c5a6063edd9de3595017e14edc103199d219db62537a0f4ad775e240762->leave($__internal_48658c5a6063edd9de3595017e14edc103199d219db62537a0f4ad775e240762_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c2aaea0527a28d968cdc9c2679aefafdb0a2d1b7a5a7037747652f3252386839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aaea0527a28d968cdc9c2679aefafdb0a2d1b7a5a7037747652f3252386839->enter($__internal_c2aaea0527a28d968cdc9c2679aefafdb0a2d1b7a5a7037747652f3252386839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5db3f189176ad45197dfd48a89a2713bc8d6276742581c318baee91cf00e2c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3f189176ad45197dfd48a89a2713bc8d6276742581c318baee91cf00e2c33->enter($__internal_5db3f189176ad45197dfd48a89a2713bc8d6276742581c318baee91cf00e2c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_5db3f189176ad45197dfd48a89a2713bc8d6276742581c318baee91cf00e2c33->leave($__internal_5db3f189176ad45197dfd48a89a2713bc8d6276742581c318baee91cf00e2c33_prof);

        
        $__internal_c2aaea0527a28d968cdc9c2679aefafdb0a2d1b7a5a7037747652f3252386839->leave($__internal_c2aaea0527a28d968cdc9c2679aefafdb0a2d1b7a5a7037747652f3252386839_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_1f883a54809ded70ade955c5f14ad35c4b36a3a1fa7fda7255dd2d083b46ae02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f883a54809ded70ade955c5f14ad35c4b36a3a1fa7fda7255dd2d083b46ae02->enter($__internal_1f883a54809ded70ade955c5f14ad35c4b36a3a1fa7fda7255dd2d083b46ae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_618be7571178702a23ee469283f87c3e6af4f6f24015602eced95daba87c9240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618be7571178702a23ee469283f87c3e6af4f6f24015602eced95daba87c9240->enter($__internal_618be7571178702a23ee469283f87c3e6af4f6f24015602eced95daba87c9240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_618be7571178702a23ee469283f87c3e6af4f6f24015602eced95daba87c9240->leave($__internal_618be7571178702a23ee469283f87c3e6af4f6f24015602eced95daba87c9240_prof);

        
        $__internal_1f883a54809ded70ade955c5f14ad35c4b36a3a1fa7fda7255dd2d083b46ae02->leave($__internal_1f883a54809ded70ade955c5f14ad35c4b36a3a1fa7fda7255dd2d083b46ae02_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_1ede6602add62dbba678ab96cafb36f621b4219087561c57c481f17233a69a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ede6602add62dbba678ab96cafb36f621b4219087561c57c481f17233a69a22->enter($__internal_1ede6602add62dbba678ab96cafb36f621b4219087561c57c481f17233a69a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_7c5ce4f45208584acdbc82371e39e3df8f11dc7e0adb095fbbad53531eac273c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5ce4f45208584acdbc82371e39e3df8f11dc7e0adb095fbbad53531eac273c->enter($__internal_7c5ce4f45208584acdbc82371e39e3df8f11dc7e0adb095fbbad53531eac273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_7c5ce4f45208584acdbc82371e39e3df8f11dc7e0adb095fbbad53531eac273c->leave($__internal_7c5ce4f45208584acdbc82371e39e3df8f11dc7e0adb095fbbad53531eac273c_prof);

        
        $__internal_1ede6602add62dbba678ab96cafb36f621b4219087561c57c481f17233a69a22->leave($__internal_1ede6602add62dbba678ab96cafb36f621b4219087561c57c481f17233a69a22_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_38b7f27e1829e9479cd558487acc1daa8678a2c6a638570cc4d9d312449686aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b7f27e1829e9479cd558487acc1daa8678a2c6a638570cc4d9d312449686aa->enter($__internal_38b7f27e1829e9479cd558487acc1daa8678a2c6a638570cc4d9d312449686aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_a981fc1f9d97dc0657161e2b06ab77b40a35e9d8ff49b44bacc8c07b1a858d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a981fc1f9d97dc0657161e2b06ab77b40a35e9d8ff49b44bacc8c07b1a858d6c->enter($__internal_a981fc1f9d97dc0657161e2b06ab77b40a35e9d8ff49b44bacc8c07b1a858d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_a981fc1f9d97dc0657161e2b06ab77b40a35e9d8ff49b44bacc8c07b1a858d6c->leave($__internal_a981fc1f9d97dc0657161e2b06ab77b40a35e9d8ff49b44bacc8c07b1a858d6c_prof);

        
        $__internal_38b7f27e1829e9479cd558487acc1daa8678a2c6a638570cc4d9d312449686aa->leave($__internal_38b7f27e1829e9479cd558487acc1daa8678a2c6a638570cc4d9d312449686aa_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_0bdd457ed1085d73dc45af7e37f3d8212dbfb10e1872a20bf7290a7efd2bb549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdd457ed1085d73dc45af7e37f3d8212dbfb10e1872a20bf7290a7efd2bb549->enter($__internal_0bdd457ed1085d73dc45af7e37f3d8212dbfb10e1872a20bf7290a7efd2bb549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_d156be1df90cecdce20b9a1b0e1595a79283ccbedaeeb1fc3e9533221577cea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d156be1df90cecdce20b9a1b0e1595a79283ccbedaeeb1fc3e9533221577cea3->enter($__internal_d156be1df90cecdce20b9a1b0e1595a79283ccbedaeeb1fc3e9533221577cea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_d156be1df90cecdce20b9a1b0e1595a79283ccbedaeeb1fc3e9533221577cea3->leave($__internal_d156be1df90cecdce20b9a1b0e1595a79283ccbedaeeb1fc3e9533221577cea3_prof);

        
        $__internal_0bdd457ed1085d73dc45af7e37f3d8212dbfb10e1872a20bf7290a7efd2bb549->leave($__internal_0bdd457ed1085d73dc45af7e37f3d8212dbfb10e1872a20bf7290a7efd2bb549_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_d43f5974d1a6191357622512019e995dd814f9523b69ab11e66e573110df7427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43f5974d1a6191357622512019e995dd814f9523b69ab11e66e573110df7427->enter($__internal_d43f5974d1a6191357622512019e995dd814f9523b69ab11e66e573110df7427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_d06ef1108e6929573fe7f5212cb752727cfe8c985a8aca1b332d50839367b96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06ef1108e6929573fe7f5212cb752727cfe8c985a8aca1b332d50839367b96b->enter($__internal_d06ef1108e6929573fe7f5212cb752727cfe8c985a8aca1b332d50839367b96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_d06ef1108e6929573fe7f5212cb752727cfe8c985a8aca1b332d50839367b96b->leave($__internal_d06ef1108e6929573fe7f5212cb752727cfe8c985a8aca1b332d50839367b96b_prof);

        
        $__internal_d43f5974d1a6191357622512019e995dd814f9523b69ab11e66e573110df7427->leave($__internal_d43f5974d1a6191357622512019e995dd814f9523b69ab11e66e573110df7427_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_9fe1d0a01652e0e03c4236eeab63b9d709cc16ec2490b920d6a1ef316bb26014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe1d0a01652e0e03c4236eeab63b9d709cc16ec2490b920d6a1ef316bb26014->enter($__internal_9fe1d0a01652e0e03c4236eeab63b9d709cc16ec2490b920d6a1ef316bb26014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_6a0018618e48d7654c9dd3b09b46558403a2108ccda0b7bc3cfa49c8e86b3c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0018618e48d7654c9dd3b09b46558403a2108ccda0b7bc3cfa49c8e86b3c3d->enter($__internal_6a0018618e48d7654c9dd3b09b46558403a2108ccda0b7bc3cfa49c8e86b3c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_6a0018618e48d7654c9dd3b09b46558403a2108ccda0b7bc3cfa49c8e86b3c3d->leave($__internal_6a0018618e48d7654c9dd3b09b46558403a2108ccda0b7bc3cfa49c8e86b3c3d_prof);

        
        $__internal_9fe1d0a01652e0e03c4236eeab63b9d709cc16ec2490b920d6a1ef316bb26014->leave($__internal_9fe1d0a01652e0e03c4236eeab63b9d709cc16ec2490b920d6a1ef316bb26014_prof);

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
", "form_div_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
