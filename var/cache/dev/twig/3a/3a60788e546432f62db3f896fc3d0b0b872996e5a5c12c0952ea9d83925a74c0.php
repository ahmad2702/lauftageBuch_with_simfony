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
        $__internal_4281d79cdaf1b973003384ac3cbdae80f61e915fa42684e6ca6be0e045058595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4281d79cdaf1b973003384ac3cbdae80f61e915fa42684e6ca6be0e045058595->enter($__internal_4281d79cdaf1b973003384ac3cbdae80f61e915fa42684e6ca6be0e045058595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_911b71e14760312ec440f0a9af1c9c3a2a0b85963b8b00b7119ca5455fe5e2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911b71e14760312ec440f0a9af1c9c3a2a0b85963b8b00b7119ca5455fe5e2b0->enter($__internal_911b71e14760312ec440f0a9af1c9c3a2a0b85963b8b00b7119ca5455fe5e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_4281d79cdaf1b973003384ac3cbdae80f61e915fa42684e6ca6be0e045058595->leave($__internal_4281d79cdaf1b973003384ac3cbdae80f61e915fa42684e6ca6be0e045058595_prof);

        
        $__internal_911b71e14760312ec440f0a9af1c9c3a2a0b85963b8b00b7119ca5455fe5e2b0->leave($__internal_911b71e14760312ec440f0a9af1c9c3a2a0b85963b8b00b7119ca5455fe5e2b0_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_4e983b5d6a73be335c7ab246146fc712e40d394a768db7784bc881fc1883d837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e983b5d6a73be335c7ab246146fc712e40d394a768db7784bc881fc1883d837->enter($__internal_4e983b5d6a73be335c7ab246146fc712e40d394a768db7784bc881fc1883d837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_7ffc088bd85efa77f7c254457f3dbaee2afe18bc46c82bcf899b173f9de3b388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffc088bd85efa77f7c254457f3dbaee2afe18bc46c82bcf899b173f9de3b388->enter($__internal_7ffc088bd85efa77f7c254457f3dbaee2afe18bc46c82bcf899b173f9de3b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_7ffc088bd85efa77f7c254457f3dbaee2afe18bc46c82bcf899b173f9de3b388->leave($__internal_7ffc088bd85efa77f7c254457f3dbaee2afe18bc46c82bcf899b173f9de3b388_prof);

        
        $__internal_4e983b5d6a73be335c7ab246146fc712e40d394a768db7784bc881fc1883d837->leave($__internal_4e983b5d6a73be335c7ab246146fc712e40d394a768db7784bc881fc1883d837_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f6c4a1c51d84780efee7dcdf8770971c2a1039f184c172062bbb90e7eae3a8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c4a1c51d84780efee7dcdf8770971c2a1039f184c172062bbb90e7eae3a8f6->enter($__internal_f6c4a1c51d84780efee7dcdf8770971c2a1039f184c172062bbb90e7eae3a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1f6cb94df65c621c238ff7aa4aedadf0650a9c31fbd53ad258a7972b380fd7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6cb94df65c621c238ff7aa4aedadf0650a9c31fbd53ad258a7972b380fd7dc->enter($__internal_1f6cb94df65c621c238ff7aa4aedadf0650a9c31fbd53ad258a7972b380fd7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_1f6cb94df65c621c238ff7aa4aedadf0650a9c31fbd53ad258a7972b380fd7dc->leave($__internal_1f6cb94df65c621c238ff7aa4aedadf0650a9c31fbd53ad258a7972b380fd7dc_prof);

        
        $__internal_f6c4a1c51d84780efee7dcdf8770971c2a1039f184c172062bbb90e7eae3a8f6->leave($__internal_f6c4a1c51d84780efee7dcdf8770971c2a1039f184c172062bbb90e7eae3a8f6_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e6cfd825b697e3cfaaf4443e48c56f84be4d40faf8f55be3561873102f53f55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cfd825b697e3cfaaf4443e48c56f84be4d40faf8f55be3561873102f53f55f->enter($__internal_e6cfd825b697e3cfaaf4443e48c56f84be4d40faf8f55be3561873102f53f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_056ed4de02e9a3c02ef148af763ca2c415a1be2e795cc980cbeffadcbd87deba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056ed4de02e9a3c02ef148af763ca2c415a1be2e795cc980cbeffadcbd87deba->enter($__internal_056ed4de02e9a3c02ef148af763ca2c415a1be2e795cc980cbeffadcbd87deba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_056ed4de02e9a3c02ef148af763ca2c415a1be2e795cc980cbeffadcbd87deba->leave($__internal_056ed4de02e9a3c02ef148af763ca2c415a1be2e795cc980cbeffadcbd87deba_prof);

        
        $__internal_e6cfd825b697e3cfaaf4443e48c56f84be4d40faf8f55be3561873102f53f55f->leave($__internal_e6cfd825b697e3cfaaf4443e48c56f84be4d40faf8f55be3561873102f53f55f_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_93a321c7994b63289e690067b47404154f2b6717ea6261b3a82c3d1ba45e9dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a321c7994b63289e690067b47404154f2b6717ea6261b3a82c3d1ba45e9dec->enter($__internal_93a321c7994b63289e690067b47404154f2b6717ea6261b3a82c3d1ba45e9dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_19819549dc5e1611dba99ac9b4b485f95c40602a60a67672bb7350ee46a72832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19819549dc5e1611dba99ac9b4b485f95c40602a60a67672bb7350ee46a72832->enter($__internal_19819549dc5e1611dba99ac9b4b485f95c40602a60a67672bb7350ee46a72832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_19819549dc5e1611dba99ac9b4b485f95c40602a60a67672bb7350ee46a72832->leave($__internal_19819549dc5e1611dba99ac9b4b485f95c40602a60a67672bb7350ee46a72832_prof);

        
        $__internal_93a321c7994b63289e690067b47404154f2b6717ea6261b3a82c3d1ba45e9dec->leave($__internal_93a321c7994b63289e690067b47404154f2b6717ea6261b3a82c3d1ba45e9dec_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_72082ebbc4f5368dbe354e27aea382b5a75b07c82629abac30e58681100b5748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72082ebbc4f5368dbe354e27aea382b5a75b07c82629abac30e58681100b5748->enter($__internal_72082ebbc4f5368dbe354e27aea382b5a75b07c82629abac30e58681100b5748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_de2f735a95feb1d928d9653acc23fc6824d482c08b6e4bf23f6fcc44417c54ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2f735a95feb1d928d9653acc23fc6824d482c08b6e4bf23f6fcc44417c54ba->enter($__internal_de2f735a95feb1d928d9653acc23fc6824d482c08b6e4bf23f6fcc44417c54ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_de2f735a95feb1d928d9653acc23fc6824d482c08b6e4bf23f6fcc44417c54ba->leave($__internal_de2f735a95feb1d928d9653acc23fc6824d482c08b6e4bf23f6fcc44417c54ba_prof);

        
        $__internal_72082ebbc4f5368dbe354e27aea382b5a75b07c82629abac30e58681100b5748->leave($__internal_72082ebbc4f5368dbe354e27aea382b5a75b07c82629abac30e58681100b5748_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_cb7ddc7fbe2f7e11a925a13482964153d3897b5cafa93529b0386100c5ed1079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7ddc7fbe2f7e11a925a13482964153d3897b5cafa93529b0386100c5ed1079->enter($__internal_cb7ddc7fbe2f7e11a925a13482964153d3897b5cafa93529b0386100c5ed1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_fb2c6239c240057308241d49f15692d4d5682d91a3af7dc7bf577c26054a41b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2c6239c240057308241d49f15692d4d5682d91a3af7dc7bf577c26054a41b4->enter($__internal_fb2c6239c240057308241d49f15692d4d5682d91a3af7dc7bf577c26054a41b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_fb2c6239c240057308241d49f15692d4d5682d91a3af7dc7bf577c26054a41b4->leave($__internal_fb2c6239c240057308241d49f15692d4d5682d91a3af7dc7bf577c26054a41b4_prof);

        
        $__internal_cb7ddc7fbe2f7e11a925a13482964153d3897b5cafa93529b0386100c5ed1079->leave($__internal_cb7ddc7fbe2f7e11a925a13482964153d3897b5cafa93529b0386100c5ed1079_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_686d0c0ac85565707b76dd8955e601d29e3d2c49f15e85e71bbb97583223d869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686d0c0ac85565707b76dd8955e601d29e3d2c49f15e85e71bbb97583223d869->enter($__internal_686d0c0ac85565707b76dd8955e601d29e3d2c49f15e85e71bbb97583223d869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_108c75141d28db111edb4b9161ff39efec67ae057f330cc2486f11a53a8a5b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108c75141d28db111edb4b9161ff39efec67ae057f330cc2486f11a53a8a5b2a->enter($__internal_108c75141d28db111edb4b9161ff39efec67ae057f330cc2486f11a53a8a5b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_108c75141d28db111edb4b9161ff39efec67ae057f330cc2486f11a53a8a5b2a->leave($__internal_108c75141d28db111edb4b9161ff39efec67ae057f330cc2486f11a53a8a5b2a_prof);

        
        $__internal_686d0c0ac85565707b76dd8955e601d29e3d2c49f15e85e71bbb97583223d869->leave($__internal_686d0c0ac85565707b76dd8955e601d29e3d2c49f15e85e71bbb97583223d869_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_096356c0893138a8b4c685ec7ffa35283102dc055e8495f28758edf046bb5025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096356c0893138a8b4c685ec7ffa35283102dc055e8495f28758edf046bb5025->enter($__internal_096356c0893138a8b4c685ec7ffa35283102dc055e8495f28758edf046bb5025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e1ab4fa044dfd193f945a968f47a9d0e39ae5f537f7262164ddda0554fd66216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ab4fa044dfd193f945a968f47a9d0e39ae5f537f7262164ddda0554fd66216->enter($__internal_e1ab4fa044dfd193f945a968f47a9d0e39ae5f537f7262164ddda0554fd66216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e1ab4fa044dfd193f945a968f47a9d0e39ae5f537f7262164ddda0554fd66216->leave($__internal_e1ab4fa044dfd193f945a968f47a9d0e39ae5f537f7262164ddda0554fd66216_prof);

        
        $__internal_096356c0893138a8b4c685ec7ffa35283102dc055e8495f28758edf046bb5025->leave($__internal_096356c0893138a8b4c685ec7ffa35283102dc055e8495f28758edf046bb5025_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_1f89b77d9427f3938783bff7d7f3ec5c39ea36688be5718a04cc90da6d81e829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f89b77d9427f3938783bff7d7f3ec5c39ea36688be5718a04cc90da6d81e829->enter($__internal_1f89b77d9427f3938783bff7d7f3ec5c39ea36688be5718a04cc90da6d81e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_2cc584edc8a698024801d2a02897c367fe7ffe875ef8ff20cbee207b03c93152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc584edc8a698024801d2a02897c367fe7ffe875ef8ff20cbee207b03c93152->enter($__internal_2cc584edc8a698024801d2a02897c367fe7ffe875ef8ff20cbee207b03c93152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_f633eb06d49c44d8a1be1e309496e233c67c81522fa013fc9568fb4c6cc9adaf = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_f633eb06d49c44d8a1be1e309496e233c67c81522fa013fc9568fb4c6cc9adaf)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_f633eb06d49c44d8a1be1e309496e233c67c81522fa013fc9568fb4c6cc9adaf);
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
        
        $__internal_2cc584edc8a698024801d2a02897c367fe7ffe875ef8ff20cbee207b03c93152->leave($__internal_2cc584edc8a698024801d2a02897c367fe7ffe875ef8ff20cbee207b03c93152_prof);

        
        $__internal_1f89b77d9427f3938783bff7d7f3ec5c39ea36688be5718a04cc90da6d81e829->leave($__internal_1f89b77d9427f3938783bff7d7f3ec5c39ea36688be5718a04cc90da6d81e829_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ab89836c2821d15a8e9ed1b388900eefa20a7318439e0c50ac820c5d43816a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab89836c2821d15a8e9ed1b388900eefa20a7318439e0c50ac820c5d43816a16->enter($__internal_ab89836c2821d15a8e9ed1b388900eefa20a7318439e0c50ac820c5d43816a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4e4a9e107c1984ed7a9d2a0fa5ce8edb01e41b9337602a733376fc14e4e09561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4a9e107c1984ed7a9d2a0fa5ce8edb01e41b9337602a733376fc14e4e09561->enter($__internal_4e4a9e107c1984ed7a9d2a0fa5ce8edb01e41b9337602a733376fc14e4e09561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_4e4a9e107c1984ed7a9d2a0fa5ce8edb01e41b9337602a733376fc14e4e09561->leave($__internal_4e4a9e107c1984ed7a9d2a0fa5ce8edb01e41b9337602a733376fc14e4e09561_prof);

        
        $__internal_ab89836c2821d15a8e9ed1b388900eefa20a7318439e0c50ac820c5d43816a16->leave($__internal_ab89836c2821d15a8e9ed1b388900eefa20a7318439e0c50ac820c5d43816a16_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6ef8cfeacb0d4a057e9a98617c1dc1c0a0592178dd20718190afe4f228de2581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef8cfeacb0d4a057e9a98617c1dc1c0a0592178dd20718190afe4f228de2581->enter($__internal_6ef8cfeacb0d4a057e9a98617c1dc1c0a0592178dd20718190afe4f228de2581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c753eac284091f705516dd97c019e3b0310c60eac4bd0f6605fba4025e3335d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c753eac284091f705516dd97c019e3b0310c60eac4bd0f6605fba4025e3335d2->enter($__internal_c753eac284091f705516dd97c019e3b0310c60eac4bd0f6605fba4025e3335d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c753eac284091f705516dd97c019e3b0310c60eac4bd0f6605fba4025e3335d2->leave($__internal_c753eac284091f705516dd97c019e3b0310c60eac4bd0f6605fba4025e3335d2_prof);

        
        $__internal_6ef8cfeacb0d4a057e9a98617c1dc1c0a0592178dd20718190afe4f228de2581->leave($__internal_6ef8cfeacb0d4a057e9a98617c1dc1c0a0592178dd20718190afe4f228de2581_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b4e5e4f2df1ccc2023da6c930918ef96873bf50f8ac197b2ccfeff75c7c7567b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e5e4f2df1ccc2023da6c930918ef96873bf50f8ac197b2ccfeff75c7c7567b->enter($__internal_b4e5e4f2df1ccc2023da6c930918ef96873bf50f8ac197b2ccfeff75c7c7567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_be0d820e432377cba6794888362a66d4f393f3b3f759848d2f8b2788d43a6f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0d820e432377cba6794888362a66d4f393f3b3f759848d2f8b2788d43a6f27->enter($__internal_be0d820e432377cba6794888362a66d4f393f3b3f759848d2f8b2788d43a6f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_be0d820e432377cba6794888362a66d4f393f3b3f759848d2f8b2788d43a6f27->leave($__internal_be0d820e432377cba6794888362a66d4f393f3b3f759848d2f8b2788d43a6f27_prof);

        
        $__internal_b4e5e4f2df1ccc2023da6c930918ef96873bf50f8ac197b2ccfeff75c7c7567b->leave($__internal_b4e5e4f2df1ccc2023da6c930918ef96873bf50f8ac197b2ccfeff75c7c7567b_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7992c8f06d44a0ef6714928f5e6556150995ca32cfa56b2b0fb861faa05fd0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7992c8f06d44a0ef6714928f5e6556150995ca32cfa56b2b0fb861faa05fd0d0->enter($__internal_7992c8f06d44a0ef6714928f5e6556150995ca32cfa56b2b0fb861faa05fd0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d124308f6dd2961f19c3dd5b05d59ea133d30d360c4ea79fd020c1ad49b9426e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d124308f6dd2961f19c3dd5b05d59ea133d30d360c4ea79fd020c1ad49b9426e->enter($__internal_d124308f6dd2961f19c3dd5b05d59ea133d30d360c4ea79fd020c1ad49b9426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d124308f6dd2961f19c3dd5b05d59ea133d30d360c4ea79fd020c1ad49b9426e->leave($__internal_d124308f6dd2961f19c3dd5b05d59ea133d30d360c4ea79fd020c1ad49b9426e_prof);

        
        $__internal_7992c8f06d44a0ef6714928f5e6556150995ca32cfa56b2b0fb861faa05fd0d0->leave($__internal_7992c8f06d44a0ef6714928f5e6556150995ca32cfa56b2b0fb861faa05fd0d0_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_be8a2bfe0427abfaf19f76484f71eb9d8edc556b7a458e8920d35963781ee2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8a2bfe0427abfaf19f76484f71eb9d8edc556b7a458e8920d35963781ee2ce->enter($__internal_be8a2bfe0427abfaf19f76484f71eb9d8edc556b7a458e8920d35963781ee2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f0c64b2c91ad6ad16a61fecf5a03b161bef38ba327e46481e53a7f855db53adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c64b2c91ad6ad16a61fecf5a03b161bef38ba327e46481e53a7f855db53adf->enter($__internal_f0c64b2c91ad6ad16a61fecf5a03b161bef38ba327e46481e53a7f855db53adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_f0c64b2c91ad6ad16a61fecf5a03b161bef38ba327e46481e53a7f855db53adf->leave($__internal_f0c64b2c91ad6ad16a61fecf5a03b161bef38ba327e46481e53a7f855db53adf_prof);

        
        $__internal_be8a2bfe0427abfaf19f76484f71eb9d8edc556b7a458e8920d35963781ee2ce->leave($__internal_be8a2bfe0427abfaf19f76484f71eb9d8edc556b7a458e8920d35963781ee2ce_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_695a075b40f550b493b7f1633866ff67c1e79a38f778491529b4e9e9c03b6b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695a075b40f550b493b7f1633866ff67c1e79a38f778491529b4e9e9c03b6b2a->enter($__internal_695a075b40f550b493b7f1633866ff67c1e79a38f778491529b4e9e9c03b6b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a3444eb829b92ba2a48ab0185cdc7530a9ebeb3b70b061229de826e17bdcd220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3444eb829b92ba2a48ab0185cdc7530a9ebeb3b70b061229de826e17bdcd220->enter($__internal_a3444eb829b92ba2a48ab0185cdc7530a9ebeb3b70b061229de826e17bdcd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_a3444eb829b92ba2a48ab0185cdc7530a9ebeb3b70b061229de826e17bdcd220->leave($__internal_a3444eb829b92ba2a48ab0185cdc7530a9ebeb3b70b061229de826e17bdcd220_prof);

        
        $__internal_695a075b40f550b493b7f1633866ff67c1e79a38f778491529b4e9e9c03b6b2a->leave($__internal_695a075b40f550b493b7f1633866ff67c1e79a38f778491529b4e9e9c03b6b2a_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_5a2199b73095a5f7b92221d04c74376bd9392a12e5350c90c845acb3349dee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2199b73095a5f7b92221d04c74376bd9392a12e5350c90c845acb3349dee8c->enter($__internal_5a2199b73095a5f7b92221d04c74376bd9392a12e5350c90c845acb3349dee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_9b133985a3c62fe9c809afcd3c351a61e3f7a5560e21c1c92283f3fe44a9d720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b133985a3c62fe9c809afcd3c351a61e3f7a5560e21c1c92283f3fe44a9d720->enter($__internal_9b133985a3c62fe9c809afcd3c351a61e3f7a5560e21c1c92283f3fe44a9d720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9b133985a3c62fe9c809afcd3c351a61e3f7a5560e21c1c92283f3fe44a9d720->leave($__internal_9b133985a3c62fe9c809afcd3c351a61e3f7a5560e21c1c92283f3fe44a9d720_prof);

        
        $__internal_5a2199b73095a5f7b92221d04c74376bd9392a12e5350c90c845acb3349dee8c->leave($__internal_5a2199b73095a5f7b92221d04c74376bd9392a12e5350c90c845acb3349dee8c_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_d9fd771934b7fc246160819587ffb3e0dbd17b24f0ca185bbf085d815a470a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fd771934b7fc246160819587ffb3e0dbd17b24f0ca185bbf085d815a470a6e->enter($__internal_d9fd771934b7fc246160819587ffb3e0dbd17b24f0ca185bbf085d815a470a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_7d680aeb613504a9ec7f992d68599e186cbd68c12f5a60849cab07fbdb842fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d680aeb613504a9ec7f992d68599e186cbd68c12f5a60849cab07fbdb842fbe->enter($__internal_7d680aeb613504a9ec7f992d68599e186cbd68c12f5a60849cab07fbdb842fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7d680aeb613504a9ec7f992d68599e186cbd68c12f5a60849cab07fbdb842fbe->leave($__internal_7d680aeb613504a9ec7f992d68599e186cbd68c12f5a60849cab07fbdb842fbe_prof);

        
        $__internal_d9fd771934b7fc246160819587ffb3e0dbd17b24f0ca185bbf085d815a470a6e->leave($__internal_d9fd771934b7fc246160819587ffb3e0dbd17b24f0ca185bbf085d815a470a6e_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_54e340453767404798ca6bba443c8e8552c64c8af289c3fd3d98b3c61b356318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e340453767404798ca6bba443c8e8552c64c8af289c3fd3d98b3c61b356318->enter($__internal_54e340453767404798ca6bba443c8e8552c64c8af289c3fd3d98b3c61b356318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_579b126288159155adafd4cf4dab54f479dcb2ad5a25150636f71568624b8571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579b126288159155adafd4cf4dab54f479dcb2ad5a25150636f71568624b8571->enter($__internal_579b126288159155adafd4cf4dab54f479dcb2ad5a25150636f71568624b8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_579b126288159155adafd4cf4dab54f479dcb2ad5a25150636f71568624b8571->leave($__internal_579b126288159155adafd4cf4dab54f479dcb2ad5a25150636f71568624b8571_prof);

        
        $__internal_54e340453767404798ca6bba443c8e8552c64c8af289c3fd3d98b3c61b356318->leave($__internal_54e340453767404798ca6bba443c8e8552c64c8af289c3fd3d98b3c61b356318_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a814e17a09f34707cf8c6148568f7119500f216f14ac6c444be30dadb9881c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a814e17a09f34707cf8c6148568f7119500f216f14ac6c444be30dadb9881c65->enter($__internal_a814e17a09f34707cf8c6148568f7119500f216f14ac6c444be30dadb9881c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_0498e0a187d20e4afd3a6a2f74529380e374b1251f55e7f4c5c036740d164571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0498e0a187d20e4afd3a6a2f74529380e374b1251f55e7f4c5c036740d164571->enter($__internal_0498e0a187d20e4afd3a6a2f74529380e374b1251f55e7f4c5c036740d164571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0498e0a187d20e4afd3a6a2f74529380e374b1251f55e7f4c5c036740d164571->leave($__internal_0498e0a187d20e4afd3a6a2f74529380e374b1251f55e7f4c5c036740d164571_prof);

        
        $__internal_a814e17a09f34707cf8c6148568f7119500f216f14ac6c444be30dadb9881c65->leave($__internal_a814e17a09f34707cf8c6148568f7119500f216f14ac6c444be30dadb9881c65_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_77cf5009c2934355195a8de24bba25c985bd4c740a978f7efc506e58ae66b722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cf5009c2934355195a8de24bba25c985bd4c740a978f7efc506e58ae66b722->enter($__internal_77cf5009c2934355195a8de24bba25c985bd4c740a978f7efc506e58ae66b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_0154e4b17ccdab312497aca69a3ea302b039e0ae0b42d3c9d8151dacc98eeaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0154e4b17ccdab312497aca69a3ea302b039e0ae0b42d3c9d8151dacc98eeaa7->enter($__internal_0154e4b17ccdab312497aca69a3ea302b039e0ae0b42d3c9d8151dacc98eeaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0154e4b17ccdab312497aca69a3ea302b039e0ae0b42d3c9d8151dacc98eeaa7->leave($__internal_0154e4b17ccdab312497aca69a3ea302b039e0ae0b42d3c9d8151dacc98eeaa7_prof);

        
        $__internal_77cf5009c2934355195a8de24bba25c985bd4c740a978f7efc506e58ae66b722->leave($__internal_77cf5009c2934355195a8de24bba25c985bd4c740a978f7efc506e58ae66b722_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_558eb35ad84965f2f958b812a5ddda769c7982aeefed5690cd1598606055262e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558eb35ad84965f2f958b812a5ddda769c7982aeefed5690cd1598606055262e->enter($__internal_558eb35ad84965f2f958b812a5ddda769c7982aeefed5690cd1598606055262e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_52f8116c2b670a7992219088cb3edef15c805849800ca829daadec5c631fd257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f8116c2b670a7992219088cb3edef15c805849800ca829daadec5c631fd257->enter($__internal_52f8116c2b670a7992219088cb3edef15c805849800ca829daadec5c631fd257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_52f8116c2b670a7992219088cb3edef15c805849800ca829daadec5c631fd257->leave($__internal_52f8116c2b670a7992219088cb3edef15c805849800ca829daadec5c631fd257_prof);

        
        $__internal_558eb35ad84965f2f958b812a5ddda769c7982aeefed5690cd1598606055262e->leave($__internal_558eb35ad84965f2f958b812a5ddda769c7982aeefed5690cd1598606055262e_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_8c5290cf7e3806b22e35b55306f8c655d2823abbbbed389c71556fc871e0461c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5290cf7e3806b22e35b55306f8c655d2823abbbbed389c71556fc871e0461c->enter($__internal_8c5290cf7e3806b22e35b55306f8c655d2823abbbbed389c71556fc871e0461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_86567ce6e12fb5a133408b24afaf731c2bd658567ba5f666e08f50a4c94f1806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86567ce6e12fb5a133408b24afaf731c2bd658567ba5f666e08f50a4c94f1806->enter($__internal_86567ce6e12fb5a133408b24afaf731c2bd658567ba5f666e08f50a4c94f1806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_86567ce6e12fb5a133408b24afaf731c2bd658567ba5f666e08f50a4c94f1806->leave($__internal_86567ce6e12fb5a133408b24afaf731c2bd658567ba5f666e08f50a4c94f1806_prof);

        
        $__internal_8c5290cf7e3806b22e35b55306f8c655d2823abbbbed389c71556fc871e0461c->leave($__internal_8c5290cf7e3806b22e35b55306f8c655d2823abbbbed389c71556fc871e0461c_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_bc3713f6f70ec4680c4a34a1c56902a34cff559dd869db092ab6c353d02e4a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3713f6f70ec4680c4a34a1c56902a34cff559dd869db092ab6c353d02e4a34->enter($__internal_bc3713f6f70ec4680c4a34a1c56902a34cff559dd869db092ab6c353d02e4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_46999df73aa0e621a305b6f83350d2995ae62b0fcd310c6737cf6ef5fd9096a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46999df73aa0e621a305b6f83350d2995ae62b0fcd310c6737cf6ef5fd9096a0->enter($__internal_46999df73aa0e621a305b6f83350d2995ae62b0fcd310c6737cf6ef5fd9096a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_46999df73aa0e621a305b6f83350d2995ae62b0fcd310c6737cf6ef5fd9096a0->leave($__internal_46999df73aa0e621a305b6f83350d2995ae62b0fcd310c6737cf6ef5fd9096a0_prof);

        
        $__internal_bc3713f6f70ec4680c4a34a1c56902a34cff559dd869db092ab6c353d02e4a34->leave($__internal_bc3713f6f70ec4680c4a34a1c56902a34cff559dd869db092ab6c353d02e4a34_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_d08b9e9f61b6ee9abddad3afa0bfc8ba43dfb2e6f1a0bde039e7d489001181e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08b9e9f61b6ee9abddad3afa0bfc8ba43dfb2e6f1a0bde039e7d489001181e2->enter($__internal_d08b9e9f61b6ee9abddad3afa0bfc8ba43dfb2e6f1a0bde039e7d489001181e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_e5e1be54d6a867be418fa64dd1da19ee61c7642942ec9019f8ca22c1d95b8794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e1be54d6a867be418fa64dd1da19ee61c7642942ec9019f8ca22c1d95b8794->enter($__internal_e5e1be54d6a867be418fa64dd1da19ee61c7642942ec9019f8ca22c1d95b8794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e5e1be54d6a867be418fa64dd1da19ee61c7642942ec9019f8ca22c1d95b8794->leave($__internal_e5e1be54d6a867be418fa64dd1da19ee61c7642942ec9019f8ca22c1d95b8794_prof);

        
        $__internal_d08b9e9f61b6ee9abddad3afa0bfc8ba43dfb2e6f1a0bde039e7d489001181e2->leave($__internal_d08b9e9f61b6ee9abddad3afa0bfc8ba43dfb2e6f1a0bde039e7d489001181e2_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_aca25ce342c33d51172910d6581e6d013f32efaef5ef45887a30f2a128e07bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca25ce342c33d51172910d6581e6d013f32efaef5ef45887a30f2a128e07bb5->enter($__internal_aca25ce342c33d51172910d6581e6d013f32efaef5ef45887a30f2a128e07bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_eac9870cbd868e5ed7c38196efa750f9fbec760084f6153536180c29a9e8cec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac9870cbd868e5ed7c38196efa750f9fbec760084f6153536180c29a9e8cec9->enter($__internal_eac9870cbd868e5ed7c38196efa750f9fbec760084f6153536180c29a9e8cec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_eac9870cbd868e5ed7c38196efa750f9fbec760084f6153536180c29a9e8cec9->leave($__internal_eac9870cbd868e5ed7c38196efa750f9fbec760084f6153536180c29a9e8cec9_prof);

        
        $__internal_aca25ce342c33d51172910d6581e6d013f32efaef5ef45887a30f2a128e07bb5->leave($__internal_aca25ce342c33d51172910d6581e6d013f32efaef5ef45887a30f2a128e07bb5_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2becab7a0640a69b4ffee57967ad923cb5273fd3dc901eaae9d02ffef46607bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2becab7a0640a69b4ffee57967ad923cb5273fd3dc901eaae9d02ffef46607bb->enter($__internal_2becab7a0640a69b4ffee57967ad923cb5273fd3dc901eaae9d02ffef46607bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_dcb5a3cb80c6dc7009969767091759843ec376c713dfd8f6bd44855d2071d2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb5a3cb80c6dc7009969767091759843ec376c713dfd8f6bd44855d2071d2d5->enter($__internal_dcb5a3cb80c6dc7009969767091759843ec376c713dfd8f6bd44855d2071d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_dcb5a3cb80c6dc7009969767091759843ec376c713dfd8f6bd44855d2071d2d5->leave($__internal_dcb5a3cb80c6dc7009969767091759843ec376c713dfd8f6bd44855d2071d2d5_prof);

        
        $__internal_2becab7a0640a69b4ffee57967ad923cb5273fd3dc901eaae9d02ffef46607bb->leave($__internal_2becab7a0640a69b4ffee57967ad923cb5273fd3dc901eaae9d02ffef46607bb_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_c6ee8db2e858c0c29c09279782949e5ce4835978ef8565f848b25b58d8339168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ee8db2e858c0c29c09279782949e5ce4835978ef8565f848b25b58d8339168->enter($__internal_c6ee8db2e858c0c29c09279782949e5ce4835978ef8565f848b25b58d8339168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_31dbe0ab7cec0d189f6268453ca6cf5ca75b68213e7667bafe3deae2dbc1b41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dbe0ab7cec0d189f6268453ca6cf5ca75b68213e7667bafe3deae2dbc1b41e->enter($__internal_31dbe0ab7cec0d189f6268453ca6cf5ca75b68213e7667bafe3deae2dbc1b41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_31dbe0ab7cec0d189f6268453ca6cf5ca75b68213e7667bafe3deae2dbc1b41e->leave($__internal_31dbe0ab7cec0d189f6268453ca6cf5ca75b68213e7667bafe3deae2dbc1b41e_prof);

        
        $__internal_c6ee8db2e858c0c29c09279782949e5ce4835978ef8565f848b25b58d8339168->leave($__internal_c6ee8db2e858c0c29c09279782949e5ce4835978ef8565f848b25b58d8339168_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_f6e44cc4b7b900ca02a18fce3dc4e6899cbc9dd8f659d245e88f75da7a3a7a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e44cc4b7b900ca02a18fce3dc4e6899cbc9dd8f659d245e88f75da7a3a7a5c->enter($__internal_f6e44cc4b7b900ca02a18fce3dc4e6899cbc9dd8f659d245e88f75da7a3a7a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_0cd8e67cc7504a200113fd59af871c6db3c5a5e2097a98b9482682d7ba1578c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd8e67cc7504a200113fd59af871c6db3c5a5e2097a98b9482682d7ba1578c6->enter($__internal_0cd8e67cc7504a200113fd59af871c6db3c5a5e2097a98b9482682d7ba1578c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_0cd8e67cc7504a200113fd59af871c6db3c5a5e2097a98b9482682d7ba1578c6->leave($__internal_0cd8e67cc7504a200113fd59af871c6db3c5a5e2097a98b9482682d7ba1578c6_prof);

        
        $__internal_f6e44cc4b7b900ca02a18fce3dc4e6899cbc9dd8f659d245e88f75da7a3a7a5c->leave($__internal_f6e44cc4b7b900ca02a18fce3dc4e6899cbc9dd8f659d245e88f75da7a3a7a5c_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_90e623ebfe84330026b74ce5a62285392ecf124e237e49f7af6b314b69c67805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e623ebfe84330026b74ce5a62285392ecf124e237e49f7af6b314b69c67805->enter($__internal_90e623ebfe84330026b74ce5a62285392ecf124e237e49f7af6b314b69c67805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_2f52c7d396ecf290a9cee572252e2ae0fd89ff690246f79334583bb8baed107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f52c7d396ecf290a9cee572252e2ae0fd89ff690246f79334583bb8baed107f->enter($__internal_2f52c7d396ecf290a9cee572252e2ae0fd89ff690246f79334583bb8baed107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2f52c7d396ecf290a9cee572252e2ae0fd89ff690246f79334583bb8baed107f->leave($__internal_2f52c7d396ecf290a9cee572252e2ae0fd89ff690246f79334583bb8baed107f_prof);

        
        $__internal_90e623ebfe84330026b74ce5a62285392ecf124e237e49f7af6b314b69c67805->leave($__internal_90e623ebfe84330026b74ce5a62285392ecf124e237e49f7af6b314b69c67805_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_40a91d7ef60482267e691d62b90aa7ff4097af9ddd423b76fe72d16e2f9c7b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a91d7ef60482267e691d62b90aa7ff4097af9ddd423b76fe72d16e2f9c7b80->enter($__internal_40a91d7ef60482267e691d62b90aa7ff4097af9ddd423b76fe72d16e2f9c7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_122aa717758525cc166c34edaa0be9aeb4b3d41bc4bf6c4a50dc753264abd67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122aa717758525cc166c34edaa0be9aeb4b3d41bc4bf6c4a50dc753264abd67d->enter($__internal_122aa717758525cc166c34edaa0be9aeb4b3d41bc4bf6c4a50dc753264abd67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_122aa717758525cc166c34edaa0be9aeb4b3d41bc4bf6c4a50dc753264abd67d->leave($__internal_122aa717758525cc166c34edaa0be9aeb4b3d41bc4bf6c4a50dc753264abd67d_prof);

        
        $__internal_40a91d7ef60482267e691d62b90aa7ff4097af9ddd423b76fe72d16e2f9c7b80->leave($__internal_40a91d7ef60482267e691d62b90aa7ff4097af9ddd423b76fe72d16e2f9c7b80_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_67d8c11016016ef8f0a56a61b482b03bb605a005d2066c2aae8ca5b513ae0f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d8c11016016ef8f0a56a61b482b03bb605a005d2066c2aae8ca5b513ae0f29->enter($__internal_67d8c11016016ef8f0a56a61b482b03bb605a005d2066c2aae8ca5b513ae0f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4b29cba7e512247819d9144dd91b43357bf54e22424d9843f55fcdd77ad39fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b29cba7e512247819d9144dd91b43357bf54e22424d9843f55fcdd77ad39fb8->enter($__internal_4b29cba7e512247819d9144dd91b43357bf54e22424d9843f55fcdd77ad39fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_64b431e7d02ef5046d0f4a896e04a96e459a912c36c418324fa1567150b19e03 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_64b431e7d02ef5046d0f4a896e04a96e459a912c36c418324fa1567150b19e03)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_64b431e7d02ef5046d0f4a896e04a96e459a912c36c418324fa1567150b19e03);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_4b29cba7e512247819d9144dd91b43357bf54e22424d9843f55fcdd77ad39fb8->leave($__internal_4b29cba7e512247819d9144dd91b43357bf54e22424d9843f55fcdd77ad39fb8_prof);

        
        $__internal_67d8c11016016ef8f0a56a61b482b03bb605a005d2066c2aae8ca5b513ae0f29->leave($__internal_67d8c11016016ef8f0a56a61b482b03bb605a005d2066c2aae8ca5b513ae0f29_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_cdbd5b79c2142f535408fa2c0372ad3289a115c5ec36c380472c9b381fc9d456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbd5b79c2142f535408fa2c0372ad3289a115c5ec36c380472c9b381fc9d456->enter($__internal_cdbd5b79c2142f535408fa2c0372ad3289a115c5ec36c380472c9b381fc9d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_56d369d70f7a8e67b118e8826f9ac5f6434ed54856ff7343d0ae0a10c90fa9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d369d70f7a8e67b118e8826f9ac5f6434ed54856ff7343d0ae0a10c90fa9e2->enter($__internal_56d369d70f7a8e67b118e8826f9ac5f6434ed54856ff7343d0ae0a10c90fa9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_56d369d70f7a8e67b118e8826f9ac5f6434ed54856ff7343d0ae0a10c90fa9e2->leave($__internal_56d369d70f7a8e67b118e8826f9ac5f6434ed54856ff7343d0ae0a10c90fa9e2_prof);

        
        $__internal_cdbd5b79c2142f535408fa2c0372ad3289a115c5ec36c380472c9b381fc9d456->leave($__internal_cdbd5b79c2142f535408fa2c0372ad3289a115c5ec36c380472c9b381fc9d456_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_03feb2c097043887e879188e372b9f640a97fd62ab70b63e7732fdbec7b0a94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03feb2c097043887e879188e372b9f640a97fd62ab70b63e7732fdbec7b0a94e->enter($__internal_03feb2c097043887e879188e372b9f640a97fd62ab70b63e7732fdbec7b0a94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_659f46bf077c76c960c4341fc9e5e58135b76f815f542ad0655f2bc62ea2aab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659f46bf077c76c960c4341fc9e5e58135b76f815f542ad0655f2bc62ea2aab8->enter($__internal_659f46bf077c76c960c4341fc9e5e58135b76f815f542ad0655f2bc62ea2aab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_659f46bf077c76c960c4341fc9e5e58135b76f815f542ad0655f2bc62ea2aab8->leave($__internal_659f46bf077c76c960c4341fc9e5e58135b76f815f542ad0655f2bc62ea2aab8_prof);

        
        $__internal_03feb2c097043887e879188e372b9f640a97fd62ab70b63e7732fdbec7b0a94e->leave($__internal_03feb2c097043887e879188e372b9f640a97fd62ab70b63e7732fdbec7b0a94e_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_57d7165689b9fffa4578ffc568a667658fcfbe2360317397d182e354b7dd86e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d7165689b9fffa4578ffc568a667658fcfbe2360317397d182e354b7dd86e8->enter($__internal_57d7165689b9fffa4578ffc568a667658fcfbe2360317397d182e354b7dd86e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ca3447d938957a59c72ef64876beff73ec788be8dd16d41b19ec53de32482d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3447d938957a59c72ef64876beff73ec788be8dd16d41b19ec53de32482d35->enter($__internal_ca3447d938957a59c72ef64876beff73ec788be8dd16d41b19ec53de32482d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ca3447d938957a59c72ef64876beff73ec788be8dd16d41b19ec53de32482d35->leave($__internal_ca3447d938957a59c72ef64876beff73ec788be8dd16d41b19ec53de32482d35_prof);

        
        $__internal_57d7165689b9fffa4578ffc568a667658fcfbe2360317397d182e354b7dd86e8->leave($__internal_57d7165689b9fffa4578ffc568a667658fcfbe2360317397d182e354b7dd86e8_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_53095d4ad4e3457fc585666c053a0533d86a805f1ec77ce87ebd93f29a385610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53095d4ad4e3457fc585666c053a0533d86a805f1ec77ce87ebd93f29a385610->enter($__internal_53095d4ad4e3457fc585666c053a0533d86a805f1ec77ce87ebd93f29a385610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cc5866d044304b9423f1ac8e97b7078f070f849da2846f9616afd01f16962c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5866d044304b9423f1ac8e97b7078f070f849da2846f9616afd01f16962c0c->enter($__internal_cc5866d044304b9423f1ac8e97b7078f070f849da2846f9616afd01f16962c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_cc5866d044304b9423f1ac8e97b7078f070f849da2846f9616afd01f16962c0c->leave($__internal_cc5866d044304b9423f1ac8e97b7078f070f849da2846f9616afd01f16962c0c_prof);

        
        $__internal_53095d4ad4e3457fc585666c053a0533d86a805f1ec77ce87ebd93f29a385610->leave($__internal_53095d4ad4e3457fc585666c053a0533d86a805f1ec77ce87ebd93f29a385610_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b2611abd42782b0b7e37ef1781d3342a8e21cf3d594c5a60b0a7828f3dd379cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2611abd42782b0b7e37ef1781d3342a8e21cf3d594c5a60b0a7828f3dd379cc->enter($__internal_b2611abd42782b0b7e37ef1781d3342a8e21cf3d594c5a60b0a7828f3dd379cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_655c01310074011929ae1d6299704f02a2c8bd878ff46778158b0d106e056a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655c01310074011929ae1d6299704f02a2c8bd878ff46778158b0d106e056a11->enter($__internal_655c01310074011929ae1d6299704f02a2c8bd878ff46778158b0d106e056a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_655c01310074011929ae1d6299704f02a2c8bd878ff46778158b0d106e056a11->leave($__internal_655c01310074011929ae1d6299704f02a2c8bd878ff46778158b0d106e056a11_prof);

        
        $__internal_b2611abd42782b0b7e37ef1781d3342a8e21cf3d594c5a60b0a7828f3dd379cc->leave($__internal_b2611abd42782b0b7e37ef1781d3342a8e21cf3d594c5a60b0a7828f3dd379cc_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_45b503d1c5b57325e50630c2708ab6689ed2f86a90403c702620d57ac69a3425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b503d1c5b57325e50630c2708ab6689ed2f86a90403c702620d57ac69a3425->enter($__internal_45b503d1c5b57325e50630c2708ab6689ed2f86a90403c702620d57ac69a3425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_c5223a896ac29b2e5be07b35fdc2689027aacacb0ee8c4bcb7c0e1525ef88207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5223a896ac29b2e5be07b35fdc2689027aacacb0ee8c4bcb7c0e1525ef88207->enter($__internal_c5223a896ac29b2e5be07b35fdc2689027aacacb0ee8c4bcb7c0e1525ef88207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_c5223a896ac29b2e5be07b35fdc2689027aacacb0ee8c4bcb7c0e1525ef88207->leave($__internal_c5223a896ac29b2e5be07b35fdc2689027aacacb0ee8c4bcb7c0e1525ef88207_prof);

        
        $__internal_45b503d1c5b57325e50630c2708ab6689ed2f86a90403c702620d57ac69a3425->leave($__internal_45b503d1c5b57325e50630c2708ab6689ed2f86a90403c702620d57ac69a3425_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5db43f8c3b5de8b97e50d3fe36dd8f4917c2579315c14a2dc5711819e2e2638c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db43f8c3b5de8b97e50d3fe36dd8f4917c2579315c14a2dc5711819e2e2638c->enter($__internal_5db43f8c3b5de8b97e50d3fe36dd8f4917c2579315c14a2dc5711819e2e2638c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a73c8d4c6cdbd00fae684a2044e9c7296c97ae982cff10730659ee6a455c03f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73c8d4c6cdbd00fae684a2044e9c7296c97ae982cff10730659ee6a455c03f7->enter($__internal_a73c8d4c6cdbd00fae684a2044e9c7296c97ae982cff10730659ee6a455c03f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_a73c8d4c6cdbd00fae684a2044e9c7296c97ae982cff10730659ee6a455c03f7->leave($__internal_a73c8d4c6cdbd00fae684a2044e9c7296c97ae982cff10730659ee6a455c03f7_prof);

        
        $__internal_5db43f8c3b5de8b97e50d3fe36dd8f4917c2579315c14a2dc5711819e2e2638c->leave($__internal_5db43f8c3b5de8b97e50d3fe36dd8f4917c2579315c14a2dc5711819e2e2638c_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_411fc481b3858db1482ee1b7e0cd5c39b94cc48f83e4da723700a646d0cd55a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411fc481b3858db1482ee1b7e0cd5c39b94cc48f83e4da723700a646d0cd55a9->enter($__internal_411fc481b3858db1482ee1b7e0cd5c39b94cc48f83e4da723700a646d0cd55a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_bf132bf583d8d262c30edd0f7a798d7e60ebf602fe2221285a2b27e2d6db2144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf132bf583d8d262c30edd0f7a798d7e60ebf602fe2221285a2b27e2d6db2144->enter($__internal_bf132bf583d8d262c30edd0f7a798d7e60ebf602fe2221285a2b27e2d6db2144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_bf132bf583d8d262c30edd0f7a798d7e60ebf602fe2221285a2b27e2d6db2144->leave($__internal_bf132bf583d8d262c30edd0f7a798d7e60ebf602fe2221285a2b27e2d6db2144_prof);

        
        $__internal_411fc481b3858db1482ee1b7e0cd5c39b94cc48f83e4da723700a646d0cd55a9->leave($__internal_411fc481b3858db1482ee1b7e0cd5c39b94cc48f83e4da723700a646d0cd55a9_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0526b1ae4e9b157658c95e251a23868e65e01dd47548889a7491b02e554b907d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0526b1ae4e9b157658c95e251a23868e65e01dd47548889a7491b02e554b907d->enter($__internal_0526b1ae4e9b157658c95e251a23868e65e01dd47548889a7491b02e554b907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9efa53c50be427de2c232706f5aadd7b4680dbdefa885b7e28f911e1627a069a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efa53c50be427de2c232706f5aadd7b4680dbdefa885b7e28f911e1627a069a->enter($__internal_9efa53c50be427de2c232706f5aadd7b4680dbdefa885b7e28f911e1627a069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9efa53c50be427de2c232706f5aadd7b4680dbdefa885b7e28f911e1627a069a->leave($__internal_9efa53c50be427de2c232706f5aadd7b4680dbdefa885b7e28f911e1627a069a_prof);

        
        $__internal_0526b1ae4e9b157658c95e251a23868e65e01dd47548889a7491b02e554b907d->leave($__internal_0526b1ae4e9b157658c95e251a23868e65e01dd47548889a7491b02e554b907d_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_4982bcf1094b0b0ac427c00f0e584de4c63667be35237ea86e87ff5250e11520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4982bcf1094b0b0ac427c00f0e584de4c63667be35237ea86e87ff5250e11520->enter($__internal_4982bcf1094b0b0ac427c00f0e584de4c63667be35237ea86e87ff5250e11520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_5b14e2a33699b42ce395e9e37b1ded6b7c506103e7fcef2c829cd1e2c84a7df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b14e2a33699b42ce395e9e37b1ded6b7c506103e7fcef2c829cd1e2c84a7df7->enter($__internal_5b14e2a33699b42ce395e9e37b1ded6b7c506103e7fcef2c829cd1e2c84a7df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_5b14e2a33699b42ce395e9e37b1ded6b7c506103e7fcef2c829cd1e2c84a7df7->leave($__internal_5b14e2a33699b42ce395e9e37b1ded6b7c506103e7fcef2c829cd1e2c84a7df7_prof);

        
        $__internal_4982bcf1094b0b0ac427c00f0e584de4c63667be35237ea86e87ff5250e11520->leave($__internal_4982bcf1094b0b0ac427c00f0e584de4c63667be35237ea86e87ff5250e11520_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_1807f88a20baf73b4e0d3c92e7880706fa5ba22e4b85dbd81d6777d647466daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1807f88a20baf73b4e0d3c92e7880706fa5ba22e4b85dbd81d6777d647466daf->enter($__internal_1807f88a20baf73b4e0d3c92e7880706fa5ba22e4b85dbd81d6777d647466daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_0a92999c5ec4c7bed478781b8923f38fc1e6dd31d78cc54099467b3d0e762fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a92999c5ec4c7bed478781b8923f38fc1e6dd31d78cc54099467b3d0e762fb0->enter($__internal_0a92999c5ec4c7bed478781b8923f38fc1e6dd31d78cc54099467b3d0e762fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_0a92999c5ec4c7bed478781b8923f38fc1e6dd31d78cc54099467b3d0e762fb0->leave($__internal_0a92999c5ec4c7bed478781b8923f38fc1e6dd31d78cc54099467b3d0e762fb0_prof);

        
        $__internal_1807f88a20baf73b4e0d3c92e7880706fa5ba22e4b85dbd81d6777d647466daf->leave($__internal_1807f88a20baf73b4e0d3c92e7880706fa5ba22e4b85dbd81d6777d647466daf_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_9507e2c06b797a384f71c597bfb5381a5a6074c61948798059f5d1abac56c1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9507e2c06b797a384f71c597bfb5381a5a6074c61948798059f5d1abac56c1c8->enter($__internal_9507e2c06b797a384f71c597bfb5381a5a6074c61948798059f5d1abac56c1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_ac57e14692db800acf8c16bd85e33df924278c3ca8729183367cf1f4dfe6e539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac57e14692db800acf8c16bd85e33df924278c3ca8729183367cf1f4dfe6e539->enter($__internal_ac57e14692db800acf8c16bd85e33df924278c3ca8729183367cf1f4dfe6e539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_ac57e14692db800acf8c16bd85e33df924278c3ca8729183367cf1f4dfe6e539->leave($__internal_ac57e14692db800acf8c16bd85e33df924278c3ca8729183367cf1f4dfe6e539_prof);

        
        $__internal_9507e2c06b797a384f71c597bfb5381a5a6074c61948798059f5d1abac56c1c8->leave($__internal_9507e2c06b797a384f71c597bfb5381a5a6074c61948798059f5d1abac56c1c8_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_3a59ebb75a4cf806ce2ba1b466ab5afbb963d2f11a108de2d13be24e6db1f1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a59ebb75a4cf806ce2ba1b466ab5afbb963d2f11a108de2d13be24e6db1f1b2->enter($__internal_3a59ebb75a4cf806ce2ba1b466ab5afbb963d2f11a108de2d13be24e6db1f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_26aba3744c09ed1fe3a970e40e0a3f1669427cb1fa01f9fe6d80076654ea5515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aba3744c09ed1fe3a970e40e0a3f1669427cb1fa01f9fe6d80076654ea5515->enter($__internal_26aba3744c09ed1fe3a970e40e0a3f1669427cb1fa01f9fe6d80076654ea5515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_26aba3744c09ed1fe3a970e40e0a3f1669427cb1fa01f9fe6d80076654ea5515->leave($__internal_26aba3744c09ed1fe3a970e40e0a3f1669427cb1fa01f9fe6d80076654ea5515_prof);

        
        $__internal_3a59ebb75a4cf806ce2ba1b466ab5afbb963d2f11a108de2d13be24e6db1f1b2->leave($__internal_3a59ebb75a4cf806ce2ba1b466ab5afbb963d2f11a108de2d13be24e6db1f1b2_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_1086d884b06d7c827bb84b5e6437dfd77e2c6675f7bafd0117175eb04bf2b158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1086d884b06d7c827bb84b5e6437dfd77e2c6675f7bafd0117175eb04bf2b158->enter($__internal_1086d884b06d7c827bb84b5e6437dfd77e2c6675f7bafd0117175eb04bf2b158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_ee3bc27e172995b20da0e35c460f0ba7195d9fe010765a5377be9c78c8a31ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3bc27e172995b20da0e35c460f0ba7195d9fe010765a5377be9c78c8a31ea4->enter($__internal_ee3bc27e172995b20da0e35c460f0ba7195d9fe010765a5377be9c78c8a31ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_ee3bc27e172995b20da0e35c460f0ba7195d9fe010765a5377be9c78c8a31ea4->leave($__internal_ee3bc27e172995b20da0e35c460f0ba7195d9fe010765a5377be9c78c8a31ea4_prof);

        
        $__internal_1086d884b06d7c827bb84b5e6437dfd77e2c6675f7bafd0117175eb04bf2b158->leave($__internal_1086d884b06d7c827bb84b5e6437dfd77e2c6675f7bafd0117175eb04bf2b158_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_bb27b469f1b80b069f3b82cf2d031948a2fd71b99ddc93f7d8b979d87e79affc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb27b469f1b80b069f3b82cf2d031948a2fd71b99ddc93f7d8b979d87e79affc->enter($__internal_bb27b469f1b80b069f3b82cf2d031948a2fd71b99ddc93f7d8b979d87e79affc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_af8c58fdc4e0852a06570b3d74976fc53a792362741d4016e66daee03ac21426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8c58fdc4e0852a06570b3d74976fc53a792362741d4016e66daee03ac21426->enter($__internal_af8c58fdc4e0852a06570b3d74976fc53a792362741d4016e66daee03ac21426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_af8c58fdc4e0852a06570b3d74976fc53a792362741d4016e66daee03ac21426->leave($__internal_af8c58fdc4e0852a06570b3d74976fc53a792362741d4016e66daee03ac21426_prof);

        
        $__internal_bb27b469f1b80b069f3b82cf2d031948a2fd71b99ddc93f7d8b979d87e79affc->leave($__internal_bb27b469f1b80b069f3b82cf2d031948a2fd71b99ddc93f7d8b979d87e79affc_prof);

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
