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
        $__internal_875ba0644646327d3f795610d6c8ed33961a9905bea249bd12c12ad0ec4c3d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875ba0644646327d3f795610d6c8ed33961a9905bea249bd12c12ad0ec4c3d11->enter($__internal_875ba0644646327d3f795610d6c8ed33961a9905bea249bd12c12ad0ec4c3d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_1d710e14b44a19eb351b4f3b05a398e8f8baade36ad5ac99064645d2f3c81270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d710e14b44a19eb351b4f3b05a398e8f8baade36ad5ac99064645d2f3c81270->enter($__internal_1d710e14b44a19eb351b4f3b05a398e8f8baade36ad5ac99064645d2f3c81270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_875ba0644646327d3f795610d6c8ed33961a9905bea249bd12c12ad0ec4c3d11->leave($__internal_875ba0644646327d3f795610d6c8ed33961a9905bea249bd12c12ad0ec4c3d11_prof);

        
        $__internal_1d710e14b44a19eb351b4f3b05a398e8f8baade36ad5ac99064645d2f3c81270->leave($__internal_1d710e14b44a19eb351b4f3b05a398e8f8baade36ad5ac99064645d2f3c81270_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_9159315efa3e0808783a806324076647498d560f8f8ae091ae21185cbc4b7f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9159315efa3e0808783a806324076647498d560f8f8ae091ae21185cbc4b7f95->enter($__internal_9159315efa3e0808783a806324076647498d560f8f8ae091ae21185cbc4b7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_5e379c596d877a816bd8e9b79042385c1592c5aa20f1967ac328363dbb5c9d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e379c596d877a816bd8e9b79042385c1592c5aa20f1967ac328363dbb5c9d9b->enter($__internal_5e379c596d877a816bd8e9b79042385c1592c5aa20f1967ac328363dbb5c9d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_5e379c596d877a816bd8e9b79042385c1592c5aa20f1967ac328363dbb5c9d9b->leave($__internal_5e379c596d877a816bd8e9b79042385c1592c5aa20f1967ac328363dbb5c9d9b_prof);

        
        $__internal_9159315efa3e0808783a806324076647498d560f8f8ae091ae21185cbc4b7f95->leave($__internal_9159315efa3e0808783a806324076647498d560f8f8ae091ae21185cbc4b7f95_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2aafbd3b2753fb941009f34a6368556814a1b1e727af2a1379e52938b92811ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aafbd3b2753fb941009f34a6368556814a1b1e727af2a1379e52938b92811ce->enter($__internal_2aafbd3b2753fb941009f34a6368556814a1b1e727af2a1379e52938b92811ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3cea3c504d0b1076460a5dba0bff3bd2f47ded6e43e73311085ebbf53e6d019b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cea3c504d0b1076460a5dba0bff3bd2f47ded6e43e73311085ebbf53e6d019b->enter($__internal_3cea3c504d0b1076460a5dba0bff3bd2f47ded6e43e73311085ebbf53e6d019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_3cea3c504d0b1076460a5dba0bff3bd2f47ded6e43e73311085ebbf53e6d019b->leave($__internal_3cea3c504d0b1076460a5dba0bff3bd2f47ded6e43e73311085ebbf53e6d019b_prof);

        
        $__internal_2aafbd3b2753fb941009f34a6368556814a1b1e727af2a1379e52938b92811ce->leave($__internal_2aafbd3b2753fb941009f34a6368556814a1b1e727af2a1379e52938b92811ce_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_532895dd5c2f9d3b5bcd6fc8e45dd50a127817678d02e9dcc88679b9adb7a128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532895dd5c2f9d3b5bcd6fc8e45dd50a127817678d02e9dcc88679b9adb7a128->enter($__internal_532895dd5c2f9d3b5bcd6fc8e45dd50a127817678d02e9dcc88679b9adb7a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d8902f5e2ce441a4df20d47445cf2cd6448a4d3ff8aa06bb2672aa716f702a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8902f5e2ce441a4df20d47445cf2cd6448a4d3ff8aa06bb2672aa716f702a7a->enter($__internal_d8902f5e2ce441a4df20d47445cf2cd6448a4d3ff8aa06bb2672aa716f702a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d8902f5e2ce441a4df20d47445cf2cd6448a4d3ff8aa06bb2672aa716f702a7a->leave($__internal_d8902f5e2ce441a4df20d47445cf2cd6448a4d3ff8aa06bb2672aa716f702a7a_prof);

        
        $__internal_532895dd5c2f9d3b5bcd6fc8e45dd50a127817678d02e9dcc88679b9adb7a128->leave($__internal_532895dd5c2f9d3b5bcd6fc8e45dd50a127817678d02e9dcc88679b9adb7a128_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_777685b17ff939e4accc6a79340a75367bef0faf625aa0513899168f068aaf9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777685b17ff939e4accc6a79340a75367bef0faf625aa0513899168f068aaf9b->enter($__internal_777685b17ff939e4accc6a79340a75367bef0faf625aa0513899168f068aaf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_b050d4ec7e02765690508356196c3e5c2df66d936cc438894f6cae5d5eae5864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b050d4ec7e02765690508356196c3e5c2df66d936cc438894f6cae5d5eae5864->enter($__internal_b050d4ec7e02765690508356196c3e5c2df66d936cc438894f6cae5d5eae5864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_b050d4ec7e02765690508356196c3e5c2df66d936cc438894f6cae5d5eae5864->leave($__internal_b050d4ec7e02765690508356196c3e5c2df66d936cc438894f6cae5d5eae5864_prof);

        
        $__internal_777685b17ff939e4accc6a79340a75367bef0faf625aa0513899168f068aaf9b->leave($__internal_777685b17ff939e4accc6a79340a75367bef0faf625aa0513899168f068aaf9b_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f4ffaafd6729fcc9403e6db4aeed3f12256dc5d3ee4149148f4d00dec0703037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ffaafd6729fcc9403e6db4aeed3f12256dc5d3ee4149148f4d00dec0703037->enter($__internal_f4ffaafd6729fcc9403e6db4aeed3f12256dc5d3ee4149148f4d00dec0703037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9a9a1bc9852ba96391a6a1621690c7ff0a114dfdd8b4e27e5a2c8933515577f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9a1bc9852ba96391a6a1621690c7ff0a114dfdd8b4e27e5a2c8933515577f5->enter($__internal_9a9a1bc9852ba96391a6a1621690c7ff0a114dfdd8b4e27e5a2c8933515577f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_9a9a1bc9852ba96391a6a1621690c7ff0a114dfdd8b4e27e5a2c8933515577f5->leave($__internal_9a9a1bc9852ba96391a6a1621690c7ff0a114dfdd8b4e27e5a2c8933515577f5_prof);

        
        $__internal_f4ffaafd6729fcc9403e6db4aeed3f12256dc5d3ee4149148f4d00dec0703037->leave($__internal_f4ffaafd6729fcc9403e6db4aeed3f12256dc5d3ee4149148f4d00dec0703037_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_69c1a6c310fd569208aa52d42fde5b786465253131d1abbcc155130a87e58e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c1a6c310fd569208aa52d42fde5b786465253131d1abbcc155130a87e58e34->enter($__internal_69c1a6c310fd569208aa52d42fde5b786465253131d1abbcc155130a87e58e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6fdb4bff1169b3441f8c3b1eebbdc3b13419435029607dcbcf95d8ef20433abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdb4bff1169b3441f8c3b1eebbdc3b13419435029607dcbcf95d8ef20433abc->enter($__internal_6fdb4bff1169b3441f8c3b1eebbdc3b13419435029607dcbcf95d8ef20433abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_6fdb4bff1169b3441f8c3b1eebbdc3b13419435029607dcbcf95d8ef20433abc->leave($__internal_6fdb4bff1169b3441f8c3b1eebbdc3b13419435029607dcbcf95d8ef20433abc_prof);

        
        $__internal_69c1a6c310fd569208aa52d42fde5b786465253131d1abbcc155130a87e58e34->leave($__internal_69c1a6c310fd569208aa52d42fde5b786465253131d1abbcc155130a87e58e34_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_191b9be1139380a65c79f3bc10d6397ee64a10eca0eaec8203c7524e205d533a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191b9be1139380a65c79f3bc10d6397ee64a10eca0eaec8203c7524e205d533a->enter($__internal_191b9be1139380a65c79f3bc10d6397ee64a10eca0eaec8203c7524e205d533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_19806d9a7f50cfb2413fe00faf3ee49e3223fa2ed9201dbbb9cf76c23c4540ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19806d9a7f50cfb2413fe00faf3ee49e3223fa2ed9201dbbb9cf76c23c4540ab->enter($__internal_19806d9a7f50cfb2413fe00faf3ee49e3223fa2ed9201dbbb9cf76c23c4540ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_19806d9a7f50cfb2413fe00faf3ee49e3223fa2ed9201dbbb9cf76c23c4540ab->leave($__internal_19806d9a7f50cfb2413fe00faf3ee49e3223fa2ed9201dbbb9cf76c23c4540ab_prof);

        
        $__internal_191b9be1139380a65c79f3bc10d6397ee64a10eca0eaec8203c7524e205d533a->leave($__internal_191b9be1139380a65c79f3bc10d6397ee64a10eca0eaec8203c7524e205d533a_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3df20490a69dbfa085e2210eb8586ba5853a14cdf661ff749b3e477fb4681edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df20490a69dbfa085e2210eb8586ba5853a14cdf661ff749b3e477fb4681edf->enter($__internal_3df20490a69dbfa085e2210eb8586ba5853a14cdf661ff749b3e477fb4681edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_44245ed7e98589b364e4875caf3e211f3c090aa0b4299db6d4042be4b1a96ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44245ed7e98589b364e4875caf3e211f3c090aa0b4299db6d4042be4b1a96ed6->enter($__internal_44245ed7e98589b364e4875caf3e211f3c090aa0b4299db6d4042be4b1a96ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_44245ed7e98589b364e4875caf3e211f3c090aa0b4299db6d4042be4b1a96ed6->leave($__internal_44245ed7e98589b364e4875caf3e211f3c090aa0b4299db6d4042be4b1a96ed6_prof);

        
        $__internal_3df20490a69dbfa085e2210eb8586ba5853a14cdf661ff749b3e477fb4681edf->leave($__internal_3df20490a69dbfa085e2210eb8586ba5853a14cdf661ff749b3e477fb4681edf_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_cf74f5e234a587abf04ff598c10986d7e5c34f35a7bdf8a83437136d97b68352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf74f5e234a587abf04ff598c10986d7e5c34f35a7bdf8a83437136d97b68352->enter($__internal_cf74f5e234a587abf04ff598c10986d7e5c34f35a7bdf8a83437136d97b68352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_34416ca59376b22644bd9835a1cdaf19794b6568293f6b12546ca9d3b13d3642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34416ca59376b22644bd9835a1cdaf19794b6568293f6b12546ca9d3b13d3642->enter($__internal_34416ca59376b22644bd9835a1cdaf19794b6568293f6b12546ca9d3b13d3642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_6107ddf3c35a28ed17287cacf0f367303b8dd04b7dbbffd987bd983ca6b2f928 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_6107ddf3c35a28ed17287cacf0f367303b8dd04b7dbbffd987bd983ca6b2f928)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_6107ddf3c35a28ed17287cacf0f367303b8dd04b7dbbffd987bd983ca6b2f928);
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
        
        $__internal_34416ca59376b22644bd9835a1cdaf19794b6568293f6b12546ca9d3b13d3642->leave($__internal_34416ca59376b22644bd9835a1cdaf19794b6568293f6b12546ca9d3b13d3642_prof);

        
        $__internal_cf74f5e234a587abf04ff598c10986d7e5c34f35a7bdf8a83437136d97b68352->leave($__internal_cf74f5e234a587abf04ff598c10986d7e5c34f35a7bdf8a83437136d97b68352_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6c4320549964797183d6b7d49e1309f91739e6253c59b73f0c5d1c6a00edbe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4320549964797183d6b7d49e1309f91739e6253c59b73f0c5d1c6a00edbe6e->enter($__internal_6c4320549964797183d6b7d49e1309f91739e6253c59b73f0c5d1c6a00edbe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b7f648ec43872d4cdf3d837d5297e9f891e4aebff0705d5aa223ac5ecbe836d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f648ec43872d4cdf3d837d5297e9f891e4aebff0705d5aa223ac5ecbe836d8->enter($__internal_b7f648ec43872d4cdf3d837d5297e9f891e4aebff0705d5aa223ac5ecbe836d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b7f648ec43872d4cdf3d837d5297e9f891e4aebff0705d5aa223ac5ecbe836d8->leave($__internal_b7f648ec43872d4cdf3d837d5297e9f891e4aebff0705d5aa223ac5ecbe836d8_prof);

        
        $__internal_6c4320549964797183d6b7d49e1309f91739e6253c59b73f0c5d1c6a00edbe6e->leave($__internal_6c4320549964797183d6b7d49e1309f91739e6253c59b73f0c5d1c6a00edbe6e_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c102be5ff877c79c2990c293d85d62929d45cc92df9b75201be14f0cb9c30617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c102be5ff877c79c2990c293d85d62929d45cc92df9b75201be14f0cb9c30617->enter($__internal_c102be5ff877c79c2990c293d85d62929d45cc92df9b75201be14f0cb9c30617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_34674fe414ab3d0cdc450b014ca4bef72fa34ac245aeac905f8386cfab6b57c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34674fe414ab3d0cdc450b014ca4bef72fa34ac245aeac905f8386cfab6b57c5->enter($__internal_34674fe414ab3d0cdc450b014ca4bef72fa34ac245aeac905f8386cfab6b57c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_34674fe414ab3d0cdc450b014ca4bef72fa34ac245aeac905f8386cfab6b57c5->leave($__internal_34674fe414ab3d0cdc450b014ca4bef72fa34ac245aeac905f8386cfab6b57c5_prof);

        
        $__internal_c102be5ff877c79c2990c293d85d62929d45cc92df9b75201be14f0cb9c30617->leave($__internal_c102be5ff877c79c2990c293d85d62929d45cc92df9b75201be14f0cb9c30617_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c695b794b4a14fa006907886e61d4c850077b436edf32b95d4ff58bbb99b75ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c695b794b4a14fa006907886e61d4c850077b436edf32b95d4ff58bbb99b75ea->enter($__internal_c695b794b4a14fa006907886e61d4c850077b436edf32b95d4ff58bbb99b75ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2f5d9ce586bb9336c30f5216db647b7d6ca925fb260eb4c2ba7aa7c80cbd572d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5d9ce586bb9336c30f5216db647b7d6ca925fb260eb4c2ba7aa7c80cbd572d->enter($__internal_2f5d9ce586bb9336c30f5216db647b7d6ca925fb260eb4c2ba7aa7c80cbd572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_2f5d9ce586bb9336c30f5216db647b7d6ca925fb260eb4c2ba7aa7c80cbd572d->leave($__internal_2f5d9ce586bb9336c30f5216db647b7d6ca925fb260eb4c2ba7aa7c80cbd572d_prof);

        
        $__internal_c695b794b4a14fa006907886e61d4c850077b436edf32b95d4ff58bbb99b75ea->leave($__internal_c695b794b4a14fa006907886e61d4c850077b436edf32b95d4ff58bbb99b75ea_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9877f445a4e365dc730d216a12f6e35a532ceccea6ccfd89afc21c306e918f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9877f445a4e365dc730d216a12f6e35a532ceccea6ccfd89afc21c306e918f50->enter($__internal_9877f445a4e365dc730d216a12f6e35a532ceccea6ccfd89afc21c306e918f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_89b77e33516904e80dfce7b46b956710acccb0532dffa90406adf1819701e828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b77e33516904e80dfce7b46b956710acccb0532dffa90406adf1819701e828->enter($__internal_89b77e33516904e80dfce7b46b956710acccb0532dffa90406adf1819701e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_89b77e33516904e80dfce7b46b956710acccb0532dffa90406adf1819701e828->leave($__internal_89b77e33516904e80dfce7b46b956710acccb0532dffa90406adf1819701e828_prof);

        
        $__internal_9877f445a4e365dc730d216a12f6e35a532ceccea6ccfd89afc21c306e918f50->leave($__internal_9877f445a4e365dc730d216a12f6e35a532ceccea6ccfd89afc21c306e918f50_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ae8e3a759f675c81231e5fc821753e9649b871b0eae578ed77de5fa8927ce6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8e3a759f675c81231e5fc821753e9649b871b0eae578ed77de5fa8927ce6cb->enter($__internal_ae8e3a759f675c81231e5fc821753e9649b871b0eae578ed77de5fa8927ce6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a5f195429491b49f180f713731c2e23888f2c963ba9ab789d7126a47edcf27af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f195429491b49f180f713731c2e23888f2c963ba9ab789d7126a47edcf27af->enter($__internal_a5f195429491b49f180f713731c2e23888f2c963ba9ab789d7126a47edcf27af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_a5f195429491b49f180f713731c2e23888f2c963ba9ab789d7126a47edcf27af->leave($__internal_a5f195429491b49f180f713731c2e23888f2c963ba9ab789d7126a47edcf27af_prof);

        
        $__internal_ae8e3a759f675c81231e5fc821753e9649b871b0eae578ed77de5fa8927ce6cb->leave($__internal_ae8e3a759f675c81231e5fc821753e9649b871b0eae578ed77de5fa8927ce6cb_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_cf66cdc0ca9500d05304023ba550adb0f929d9f75a7a87413751b979b74bf76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf66cdc0ca9500d05304023ba550adb0f929d9f75a7a87413751b979b74bf76a->enter($__internal_cf66cdc0ca9500d05304023ba550adb0f929d9f75a7a87413751b979b74bf76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6cb35579ba7d50a21219999aa5a65332fda14f160f77cde4cb4a2aaea7498b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb35579ba7d50a21219999aa5a65332fda14f160f77cde4cb4a2aaea7498b62->enter($__internal_6cb35579ba7d50a21219999aa5a65332fda14f160f77cde4cb4a2aaea7498b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_6cb35579ba7d50a21219999aa5a65332fda14f160f77cde4cb4a2aaea7498b62->leave($__internal_6cb35579ba7d50a21219999aa5a65332fda14f160f77cde4cb4a2aaea7498b62_prof);

        
        $__internal_cf66cdc0ca9500d05304023ba550adb0f929d9f75a7a87413751b979b74bf76a->leave($__internal_cf66cdc0ca9500d05304023ba550adb0f929d9f75a7a87413751b979b74bf76a_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_55b457db200a33ed26191b56265d3a010a15993c11ad729eae82b8581ad73570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b457db200a33ed26191b56265d3a010a15993c11ad729eae82b8581ad73570->enter($__internal_55b457db200a33ed26191b56265d3a010a15993c11ad729eae82b8581ad73570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_d446772ea2b8801166e7fb5f47fb34557f8e9c594d331333b9b37edd477d010b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d446772ea2b8801166e7fb5f47fb34557f8e9c594d331333b9b37edd477d010b->enter($__internal_d446772ea2b8801166e7fb5f47fb34557f8e9c594d331333b9b37edd477d010b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d446772ea2b8801166e7fb5f47fb34557f8e9c594d331333b9b37edd477d010b->leave($__internal_d446772ea2b8801166e7fb5f47fb34557f8e9c594d331333b9b37edd477d010b_prof);

        
        $__internal_55b457db200a33ed26191b56265d3a010a15993c11ad729eae82b8581ad73570->leave($__internal_55b457db200a33ed26191b56265d3a010a15993c11ad729eae82b8581ad73570_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_9b481ab204df4c4712a0ce4b1a77aea7b35ad31c759f1172730cfa35f3bf2e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b481ab204df4c4712a0ce4b1a77aea7b35ad31c759f1172730cfa35f3bf2e47->enter($__internal_9b481ab204df4c4712a0ce4b1a77aea7b35ad31c759f1172730cfa35f3bf2e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_1199e2b131db1255228151f43372dac41ed00026fbe49c642ad6dc374c9dacee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1199e2b131db1255228151f43372dac41ed00026fbe49c642ad6dc374c9dacee->enter($__internal_1199e2b131db1255228151f43372dac41ed00026fbe49c642ad6dc374c9dacee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1199e2b131db1255228151f43372dac41ed00026fbe49c642ad6dc374c9dacee->leave($__internal_1199e2b131db1255228151f43372dac41ed00026fbe49c642ad6dc374c9dacee_prof);

        
        $__internal_9b481ab204df4c4712a0ce4b1a77aea7b35ad31c759f1172730cfa35f3bf2e47->leave($__internal_9b481ab204df4c4712a0ce4b1a77aea7b35ad31c759f1172730cfa35f3bf2e47_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_67f2e5c835b8ecfa8d69683218120a8d573d35f09f8adb85a4735e747f1e587f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f2e5c835b8ecfa8d69683218120a8d573d35f09f8adb85a4735e747f1e587f->enter($__internal_67f2e5c835b8ecfa8d69683218120a8d573d35f09f8adb85a4735e747f1e587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_de528dc2f44876d1765536be47501b817d45804f3410f84d7fecd98ee4a58175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de528dc2f44876d1765536be47501b817d45804f3410f84d7fecd98ee4a58175->enter($__internal_de528dc2f44876d1765536be47501b817d45804f3410f84d7fecd98ee4a58175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_de528dc2f44876d1765536be47501b817d45804f3410f84d7fecd98ee4a58175->leave($__internal_de528dc2f44876d1765536be47501b817d45804f3410f84d7fecd98ee4a58175_prof);

        
        $__internal_67f2e5c835b8ecfa8d69683218120a8d573d35f09f8adb85a4735e747f1e587f->leave($__internal_67f2e5c835b8ecfa8d69683218120a8d573d35f09f8adb85a4735e747f1e587f_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_7c5adebbf41a09b470fcb858a88386aa49d28c5cf9b500c9c41bb2585487e3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5adebbf41a09b470fcb858a88386aa49d28c5cf9b500c9c41bb2585487e3d3->enter($__internal_7c5adebbf41a09b470fcb858a88386aa49d28c5cf9b500c9c41bb2585487e3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_20456467b3934abdd165fd4e979b2edeab702931d72de6df8c561402a9139df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20456467b3934abdd165fd4e979b2edeab702931d72de6df8c561402a9139df2->enter($__internal_20456467b3934abdd165fd4e979b2edeab702931d72de6df8c561402a9139df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_20456467b3934abdd165fd4e979b2edeab702931d72de6df8c561402a9139df2->leave($__internal_20456467b3934abdd165fd4e979b2edeab702931d72de6df8c561402a9139df2_prof);

        
        $__internal_7c5adebbf41a09b470fcb858a88386aa49d28c5cf9b500c9c41bb2585487e3d3->leave($__internal_7c5adebbf41a09b470fcb858a88386aa49d28c5cf9b500c9c41bb2585487e3d3_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_78a872b1a1ce53987cb1492017ffc81b16ea58bfed34503808b1784fcad3cd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a872b1a1ce53987cb1492017ffc81b16ea58bfed34503808b1784fcad3cd09->enter($__internal_78a872b1a1ce53987cb1492017ffc81b16ea58bfed34503808b1784fcad3cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_b53bebb1044bde4e406f9c3671a3389008caaaa8cf79af6381c1c805a96a032c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53bebb1044bde4e406f9c3671a3389008caaaa8cf79af6381c1c805a96a032c->enter($__internal_b53bebb1044bde4e406f9c3671a3389008caaaa8cf79af6381c1c805a96a032c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b53bebb1044bde4e406f9c3671a3389008caaaa8cf79af6381c1c805a96a032c->leave($__internal_b53bebb1044bde4e406f9c3671a3389008caaaa8cf79af6381c1c805a96a032c_prof);

        
        $__internal_78a872b1a1ce53987cb1492017ffc81b16ea58bfed34503808b1784fcad3cd09->leave($__internal_78a872b1a1ce53987cb1492017ffc81b16ea58bfed34503808b1784fcad3cd09_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7398e16c8e0be847f10f12e38e93de1f0c819a38f23fef5ca83e8b27db1cdf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7398e16c8e0be847f10f12e38e93de1f0c819a38f23fef5ca83e8b27db1cdf96->enter($__internal_7398e16c8e0be847f10f12e38e93de1f0c819a38f23fef5ca83e8b27db1cdf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_66f6c8877568ec3e9e9d3432fbd6910313b60fb138ab459addddff26565444dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f6c8877568ec3e9e9d3432fbd6910313b60fb138ab459addddff26565444dc->enter($__internal_66f6c8877568ec3e9e9d3432fbd6910313b60fb138ab459addddff26565444dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_66f6c8877568ec3e9e9d3432fbd6910313b60fb138ab459addddff26565444dc->leave($__internal_66f6c8877568ec3e9e9d3432fbd6910313b60fb138ab459addddff26565444dc_prof);

        
        $__internal_7398e16c8e0be847f10f12e38e93de1f0c819a38f23fef5ca83e8b27db1cdf96->leave($__internal_7398e16c8e0be847f10f12e38e93de1f0c819a38f23fef5ca83e8b27db1cdf96_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_a5f5137c2a44a0b39ee22f1ec979f9adde17b02db72ef6efd198803570790350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f5137c2a44a0b39ee22f1ec979f9adde17b02db72ef6efd198803570790350->enter($__internal_a5f5137c2a44a0b39ee22f1ec979f9adde17b02db72ef6efd198803570790350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_cd3f1026691de76b74c177ca322323c3b5b8dc95edc441bf1a11fa66dd103a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3f1026691de76b74c177ca322323c3b5b8dc95edc441bf1a11fa66dd103a9a->enter($__internal_cd3f1026691de76b74c177ca322323c3b5b8dc95edc441bf1a11fa66dd103a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cd3f1026691de76b74c177ca322323c3b5b8dc95edc441bf1a11fa66dd103a9a->leave($__internal_cd3f1026691de76b74c177ca322323c3b5b8dc95edc441bf1a11fa66dd103a9a_prof);

        
        $__internal_a5f5137c2a44a0b39ee22f1ec979f9adde17b02db72ef6efd198803570790350->leave($__internal_a5f5137c2a44a0b39ee22f1ec979f9adde17b02db72ef6efd198803570790350_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_501ad49a54953f823ca80f471140b61d3cc8afa2fc0fb91f47edd91085b983e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501ad49a54953f823ca80f471140b61d3cc8afa2fc0fb91f47edd91085b983e6->enter($__internal_501ad49a54953f823ca80f471140b61d3cc8afa2fc0fb91f47edd91085b983e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_21ce09f3a6214dc66a82256f088c440cc7b8a6f59b73ca00bb01d682276d1d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ce09f3a6214dc66a82256f088c440cc7b8a6f59b73ca00bb01d682276d1d5c->enter($__internal_21ce09f3a6214dc66a82256f088c440cc7b8a6f59b73ca00bb01d682276d1d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_21ce09f3a6214dc66a82256f088c440cc7b8a6f59b73ca00bb01d682276d1d5c->leave($__internal_21ce09f3a6214dc66a82256f088c440cc7b8a6f59b73ca00bb01d682276d1d5c_prof);

        
        $__internal_501ad49a54953f823ca80f471140b61d3cc8afa2fc0fb91f47edd91085b983e6->leave($__internal_501ad49a54953f823ca80f471140b61d3cc8afa2fc0fb91f47edd91085b983e6_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a44b7e71879dab92f4247eb666a99dc09db1d7dd8665e81b0b3c39e45250f062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44b7e71879dab92f4247eb666a99dc09db1d7dd8665e81b0b3c39e45250f062->enter($__internal_a44b7e71879dab92f4247eb666a99dc09db1d7dd8665e81b0b3c39e45250f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_cac86b9cacd9b7b94873ce2f196504803fa513e7b5ede5a8758d60bef317740c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac86b9cacd9b7b94873ce2f196504803fa513e7b5ede5a8758d60bef317740c->enter($__internal_cac86b9cacd9b7b94873ce2f196504803fa513e7b5ede5a8758d60bef317740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cac86b9cacd9b7b94873ce2f196504803fa513e7b5ede5a8758d60bef317740c->leave($__internal_cac86b9cacd9b7b94873ce2f196504803fa513e7b5ede5a8758d60bef317740c_prof);

        
        $__internal_a44b7e71879dab92f4247eb666a99dc09db1d7dd8665e81b0b3c39e45250f062->leave($__internal_a44b7e71879dab92f4247eb666a99dc09db1d7dd8665e81b0b3c39e45250f062_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_2ca04b59a826472f3986f2f404b881aeb43707dc24103d1b9de0db9f2f747c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca04b59a826472f3986f2f404b881aeb43707dc24103d1b9de0db9f2f747c91->enter($__internal_2ca04b59a826472f3986f2f404b881aeb43707dc24103d1b9de0db9f2f747c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_b69f9b37d342487a6f36bef5e0cfd061a14715b40576424af18a71e6a91edcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69f9b37d342487a6f36bef5e0cfd061a14715b40576424af18a71e6a91edcaa->enter($__internal_b69f9b37d342487a6f36bef5e0cfd061a14715b40576424af18a71e6a91edcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b69f9b37d342487a6f36bef5e0cfd061a14715b40576424af18a71e6a91edcaa->leave($__internal_b69f9b37d342487a6f36bef5e0cfd061a14715b40576424af18a71e6a91edcaa_prof);

        
        $__internal_2ca04b59a826472f3986f2f404b881aeb43707dc24103d1b9de0db9f2f747c91->leave($__internal_2ca04b59a826472f3986f2f404b881aeb43707dc24103d1b9de0db9f2f747c91_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bf8e0ac60ba09a5d2a20cb65241dbbbf7e42b4c781a21ddf696d2e06e8bf2047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8e0ac60ba09a5d2a20cb65241dbbbf7e42b4c781a21ddf696d2e06e8bf2047->enter($__internal_bf8e0ac60ba09a5d2a20cb65241dbbbf7e42b4c781a21ddf696d2e06e8bf2047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1b77ed7dfad19eda0a635c8421475d173b6e8eae7e83638bec967f83bd61c288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b77ed7dfad19eda0a635c8421475d173b6e8eae7e83638bec967f83bd61c288->enter($__internal_1b77ed7dfad19eda0a635c8421475d173b6e8eae7e83638bec967f83bd61c288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_1b77ed7dfad19eda0a635c8421475d173b6e8eae7e83638bec967f83bd61c288->leave($__internal_1b77ed7dfad19eda0a635c8421475d173b6e8eae7e83638bec967f83bd61c288_prof);

        
        $__internal_bf8e0ac60ba09a5d2a20cb65241dbbbf7e42b4c781a21ddf696d2e06e8bf2047->leave($__internal_bf8e0ac60ba09a5d2a20cb65241dbbbf7e42b4c781a21ddf696d2e06e8bf2047_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_0ee1e6f760dcb4b7f63a011390a33a5313a049dfd344b4879aba2c5aa5a104ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee1e6f760dcb4b7f63a011390a33a5313a049dfd344b4879aba2c5aa5a104ef->enter($__internal_0ee1e6f760dcb4b7f63a011390a33a5313a049dfd344b4879aba2c5aa5a104ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_d28a90fa6da35c1478931addc5dab14e523fcdf8d79b1dff56a1049f3c431892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28a90fa6da35c1478931addc5dab14e523fcdf8d79b1dff56a1049f3c431892->enter($__internal_d28a90fa6da35c1478931addc5dab14e523fcdf8d79b1dff56a1049f3c431892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d28a90fa6da35c1478931addc5dab14e523fcdf8d79b1dff56a1049f3c431892->leave($__internal_d28a90fa6da35c1478931addc5dab14e523fcdf8d79b1dff56a1049f3c431892_prof);

        
        $__internal_0ee1e6f760dcb4b7f63a011390a33a5313a049dfd344b4879aba2c5aa5a104ef->leave($__internal_0ee1e6f760dcb4b7f63a011390a33a5313a049dfd344b4879aba2c5aa5a104ef_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_1bfdbf19e9705445074fd038b7c828cc3ab9f929583d9753a216c0524e32062a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfdbf19e9705445074fd038b7c828cc3ab9f929583d9753a216c0524e32062a->enter($__internal_1bfdbf19e9705445074fd038b7c828cc3ab9f929583d9753a216c0524e32062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_c579c433926cb8325038a2642898b8606e8700947bbf6c38d00e47b577f6f55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c579c433926cb8325038a2642898b8606e8700947bbf6c38d00e47b577f6f55a->enter($__internal_c579c433926cb8325038a2642898b8606e8700947bbf6c38d00e47b577f6f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c579c433926cb8325038a2642898b8606e8700947bbf6c38d00e47b577f6f55a->leave($__internal_c579c433926cb8325038a2642898b8606e8700947bbf6c38d00e47b577f6f55a_prof);

        
        $__internal_1bfdbf19e9705445074fd038b7c828cc3ab9f929583d9753a216c0524e32062a->leave($__internal_1bfdbf19e9705445074fd038b7c828cc3ab9f929583d9753a216c0524e32062a_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_4f144983522e99752ba07f84fc6ab82ac859a8a3e6825f5b0bee9467b6646e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f144983522e99752ba07f84fc6ab82ac859a8a3e6825f5b0bee9467b6646e37->enter($__internal_4f144983522e99752ba07f84fc6ab82ac859a8a3e6825f5b0bee9467b6646e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_d857ff33a48863b8499163fa3cf4604ef33dd922ca3a9481bc6ce17a0c996fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d857ff33a48863b8499163fa3cf4604ef33dd922ca3a9481bc6ce17a0c996fd0->enter($__internal_d857ff33a48863b8499163fa3cf4604ef33dd922ca3a9481bc6ce17a0c996fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d857ff33a48863b8499163fa3cf4604ef33dd922ca3a9481bc6ce17a0c996fd0->leave($__internal_d857ff33a48863b8499163fa3cf4604ef33dd922ca3a9481bc6ce17a0c996fd0_prof);

        
        $__internal_4f144983522e99752ba07f84fc6ab82ac859a8a3e6825f5b0bee9467b6646e37->leave($__internal_4f144983522e99752ba07f84fc6ab82ac859a8a3e6825f5b0bee9467b6646e37_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_25794c242426ef32cb871705be130e7cfede7d0cf6d885c38c18fa4f89bf0a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25794c242426ef32cb871705be130e7cfede7d0cf6d885c38c18fa4f89bf0a24->enter($__internal_25794c242426ef32cb871705be130e7cfede7d0cf6d885c38c18fa4f89bf0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_e429c6d4466fc63ef9f8b9d1dd71544c117779c45872eb3c692c38bfbf5acbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e429c6d4466fc63ef9f8b9d1dd71544c117779c45872eb3c692c38bfbf5acbdb->enter($__internal_e429c6d4466fc63ef9f8b9d1dd71544c117779c45872eb3c692c38bfbf5acbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e429c6d4466fc63ef9f8b9d1dd71544c117779c45872eb3c692c38bfbf5acbdb->leave($__internal_e429c6d4466fc63ef9f8b9d1dd71544c117779c45872eb3c692c38bfbf5acbdb_prof);

        
        $__internal_25794c242426ef32cb871705be130e7cfede7d0cf6d885c38c18fa4f89bf0a24->leave($__internal_25794c242426ef32cb871705be130e7cfede7d0cf6d885c38c18fa4f89bf0a24_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_74bf591cc247b58d6812092efd93ce2af30d27e68c94a9e45efc7745df7412d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bf591cc247b58d6812092efd93ce2af30d27e68c94a9e45efc7745df7412d4->enter($__internal_74bf591cc247b58d6812092efd93ce2af30d27e68c94a9e45efc7745df7412d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b8f2ceaa599a6bd9e57e430d57261ba4b1999d540d6b4f908a00ce9c0352ee95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f2ceaa599a6bd9e57e430d57261ba4b1999d540d6b4f908a00ce9c0352ee95->enter($__internal_b8f2ceaa599a6bd9e57e430d57261ba4b1999d540d6b4f908a00ce9c0352ee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_768a03a5192d7ce5d70948dedcf2b1c1e6947d158452e20f44c1ec526062fdc2 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_768a03a5192d7ce5d70948dedcf2b1c1e6947d158452e20f44c1ec526062fdc2)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_768a03a5192d7ce5d70948dedcf2b1c1e6947d158452e20f44c1ec526062fdc2);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_b8f2ceaa599a6bd9e57e430d57261ba4b1999d540d6b4f908a00ce9c0352ee95->leave($__internal_b8f2ceaa599a6bd9e57e430d57261ba4b1999d540d6b4f908a00ce9c0352ee95_prof);

        
        $__internal_74bf591cc247b58d6812092efd93ce2af30d27e68c94a9e45efc7745df7412d4->leave($__internal_74bf591cc247b58d6812092efd93ce2af30d27e68c94a9e45efc7745df7412d4_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_042cf05bfb8411cddc14a47fe165b95f4f8d79cd3f63072ecc2e813b6397395a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042cf05bfb8411cddc14a47fe165b95f4f8d79cd3f63072ecc2e813b6397395a->enter($__internal_042cf05bfb8411cddc14a47fe165b95f4f8d79cd3f63072ecc2e813b6397395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_569d653ba35fa58055907c5aebca8568faccdaaf3a0412254ca8b7b16bd6b95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569d653ba35fa58055907c5aebca8568faccdaaf3a0412254ca8b7b16bd6b95d->enter($__internal_569d653ba35fa58055907c5aebca8568faccdaaf3a0412254ca8b7b16bd6b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_569d653ba35fa58055907c5aebca8568faccdaaf3a0412254ca8b7b16bd6b95d->leave($__internal_569d653ba35fa58055907c5aebca8568faccdaaf3a0412254ca8b7b16bd6b95d_prof);

        
        $__internal_042cf05bfb8411cddc14a47fe165b95f4f8d79cd3f63072ecc2e813b6397395a->leave($__internal_042cf05bfb8411cddc14a47fe165b95f4f8d79cd3f63072ecc2e813b6397395a_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_b9f01d5a5b9468e35d237c49d73ecfb9ff8dc729cd0530c553c206e7f83dedef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f01d5a5b9468e35d237c49d73ecfb9ff8dc729cd0530c553c206e7f83dedef->enter($__internal_b9f01d5a5b9468e35d237c49d73ecfb9ff8dc729cd0530c553c206e7f83dedef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_781327babd67fdaed4571ebfa80698741e77665af767ec1dbfa12cffe206ef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781327babd67fdaed4571ebfa80698741e77665af767ec1dbfa12cffe206ef3d->enter($__internal_781327babd67fdaed4571ebfa80698741e77665af767ec1dbfa12cffe206ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_781327babd67fdaed4571ebfa80698741e77665af767ec1dbfa12cffe206ef3d->leave($__internal_781327babd67fdaed4571ebfa80698741e77665af767ec1dbfa12cffe206ef3d_prof);

        
        $__internal_b9f01d5a5b9468e35d237c49d73ecfb9ff8dc729cd0530c553c206e7f83dedef->leave($__internal_b9f01d5a5b9468e35d237c49d73ecfb9ff8dc729cd0530c553c206e7f83dedef_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_af344c5e01236e721dd104bd51aa58ec4f34e6d7091473428265ebb5758dd0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af344c5e01236e721dd104bd51aa58ec4f34e6d7091473428265ebb5758dd0a8->enter($__internal_af344c5e01236e721dd104bd51aa58ec4f34e6d7091473428265ebb5758dd0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_010d9fcebd8e82608ad53c7935e4df13d1d8d3eabd5c42b113dc3cd284205f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d9fcebd8e82608ad53c7935e4df13d1d8d3eabd5c42b113dc3cd284205f44->enter($__internal_010d9fcebd8e82608ad53c7935e4df13d1d8d3eabd5c42b113dc3cd284205f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_010d9fcebd8e82608ad53c7935e4df13d1d8d3eabd5c42b113dc3cd284205f44->leave($__internal_010d9fcebd8e82608ad53c7935e4df13d1d8d3eabd5c42b113dc3cd284205f44_prof);

        
        $__internal_af344c5e01236e721dd104bd51aa58ec4f34e6d7091473428265ebb5758dd0a8->leave($__internal_af344c5e01236e721dd104bd51aa58ec4f34e6d7091473428265ebb5758dd0a8_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_6ddc69eeac8bf6c075fb213099e7b27b4de49e71b910e566a633dac9b0451251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddc69eeac8bf6c075fb213099e7b27b4de49e71b910e566a633dac9b0451251->enter($__internal_6ddc69eeac8bf6c075fb213099e7b27b4de49e71b910e566a633dac9b0451251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ee9b2fcd2989117903483d0c8d79c2ebfcf5330b15464c2eba943c2fc8523829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9b2fcd2989117903483d0c8d79c2ebfcf5330b15464c2eba943c2fc8523829->enter($__internal_ee9b2fcd2989117903483d0c8d79c2ebfcf5330b15464c2eba943c2fc8523829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_ee9b2fcd2989117903483d0c8d79c2ebfcf5330b15464c2eba943c2fc8523829->leave($__internal_ee9b2fcd2989117903483d0c8d79c2ebfcf5330b15464c2eba943c2fc8523829_prof);

        
        $__internal_6ddc69eeac8bf6c075fb213099e7b27b4de49e71b910e566a633dac9b0451251->leave($__internal_6ddc69eeac8bf6c075fb213099e7b27b4de49e71b910e566a633dac9b0451251_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_441bd395cca52b1d3cefa598b03d9f022fc9e09cc33c5ccc964547273dfe26a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441bd395cca52b1d3cefa598b03d9f022fc9e09cc33c5ccc964547273dfe26a6->enter($__internal_441bd395cca52b1d3cefa598b03d9f022fc9e09cc33c5ccc964547273dfe26a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_9c30029898b22a8bcc258af6f9868818ad8b5e6b27397aa9a9bc68aefc085542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c30029898b22a8bcc258af6f9868818ad8b5e6b27397aa9a9bc68aefc085542->enter($__internal_9c30029898b22a8bcc258af6f9868818ad8b5e6b27397aa9a9bc68aefc085542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_9c30029898b22a8bcc258af6f9868818ad8b5e6b27397aa9a9bc68aefc085542->leave($__internal_9c30029898b22a8bcc258af6f9868818ad8b5e6b27397aa9a9bc68aefc085542_prof);

        
        $__internal_441bd395cca52b1d3cefa598b03d9f022fc9e09cc33c5ccc964547273dfe26a6->leave($__internal_441bd395cca52b1d3cefa598b03d9f022fc9e09cc33c5ccc964547273dfe26a6_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_5d3c61f9883ae0777d5d6946e0e3706eee6bb72cebdc5e79ea8a407013954a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3c61f9883ae0777d5d6946e0e3706eee6bb72cebdc5e79ea8a407013954a01->enter($__internal_5d3c61f9883ae0777d5d6946e0e3706eee6bb72cebdc5e79ea8a407013954a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_acf2b0606ba38744fc810ef65de7026809e83bf0b129b553cbb2d63d475e6006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf2b0606ba38744fc810ef65de7026809e83bf0b129b553cbb2d63d475e6006->enter($__internal_acf2b0606ba38744fc810ef65de7026809e83bf0b129b553cbb2d63d475e6006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_acf2b0606ba38744fc810ef65de7026809e83bf0b129b553cbb2d63d475e6006->leave($__internal_acf2b0606ba38744fc810ef65de7026809e83bf0b129b553cbb2d63d475e6006_prof);

        
        $__internal_5d3c61f9883ae0777d5d6946e0e3706eee6bb72cebdc5e79ea8a407013954a01->leave($__internal_5d3c61f9883ae0777d5d6946e0e3706eee6bb72cebdc5e79ea8a407013954a01_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_476c092da263392c0130cdafcc112c57710729c339bd4aa4afb29c43152c6d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476c092da263392c0130cdafcc112c57710729c339bd4aa4afb29c43152c6d59->enter($__internal_476c092da263392c0130cdafcc112c57710729c339bd4aa4afb29c43152c6d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b92ef2f08eb9ff295276e1cead51edeb6204acb9040f21b1d025edc64d8372c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92ef2f08eb9ff295276e1cead51edeb6204acb9040f21b1d025edc64d8372c7->enter($__internal_b92ef2f08eb9ff295276e1cead51edeb6204acb9040f21b1d025edc64d8372c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_b92ef2f08eb9ff295276e1cead51edeb6204acb9040f21b1d025edc64d8372c7->leave($__internal_b92ef2f08eb9ff295276e1cead51edeb6204acb9040f21b1d025edc64d8372c7_prof);

        
        $__internal_476c092da263392c0130cdafcc112c57710729c339bd4aa4afb29c43152c6d59->leave($__internal_476c092da263392c0130cdafcc112c57710729c339bd4aa4afb29c43152c6d59_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_221d76a062a41bcba32ce061e6c84aa3fbf81a7618b29fb0a681f78f24030366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221d76a062a41bcba32ce061e6c84aa3fbf81a7618b29fb0a681f78f24030366->enter($__internal_221d76a062a41bcba32ce061e6c84aa3fbf81a7618b29fb0a681f78f24030366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_5e83dac9da2f28a9391aa8a5effa0fc7c7b9ab0136594d6491703ae8b94a0d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e83dac9da2f28a9391aa8a5effa0fc7c7b9ab0136594d6491703ae8b94a0d40->enter($__internal_5e83dac9da2f28a9391aa8a5effa0fc7c7b9ab0136594d6491703ae8b94a0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_5e83dac9da2f28a9391aa8a5effa0fc7c7b9ab0136594d6491703ae8b94a0d40->leave($__internal_5e83dac9da2f28a9391aa8a5effa0fc7c7b9ab0136594d6491703ae8b94a0d40_prof);

        
        $__internal_221d76a062a41bcba32ce061e6c84aa3fbf81a7618b29fb0a681f78f24030366->leave($__internal_221d76a062a41bcba32ce061e6c84aa3fbf81a7618b29fb0a681f78f24030366_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fbd441c886f353f8a52dbfba5f06fe8d7801cbceecb4869c8d979d37b67323a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd441c886f353f8a52dbfba5f06fe8d7801cbceecb4869c8d979d37b67323a0->enter($__internal_fbd441c886f353f8a52dbfba5f06fe8d7801cbceecb4869c8d979d37b67323a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ba8303f405ac468b8a2862dfb9780794924851203d27b7fc7cdf1ee371dd8498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8303f405ac468b8a2862dfb9780794924851203d27b7fc7cdf1ee371dd8498->enter($__internal_ba8303f405ac468b8a2862dfb9780794924851203d27b7fc7cdf1ee371dd8498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_ba8303f405ac468b8a2862dfb9780794924851203d27b7fc7cdf1ee371dd8498->leave($__internal_ba8303f405ac468b8a2862dfb9780794924851203d27b7fc7cdf1ee371dd8498_prof);

        
        $__internal_fbd441c886f353f8a52dbfba5f06fe8d7801cbceecb4869c8d979d37b67323a0->leave($__internal_fbd441c886f353f8a52dbfba5f06fe8d7801cbceecb4869c8d979d37b67323a0_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_791724de17a4db598f0db27d8016e6e578d6813118b362fab0a19693dabae212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791724de17a4db598f0db27d8016e6e578d6813118b362fab0a19693dabae212->enter($__internal_791724de17a4db598f0db27d8016e6e578d6813118b362fab0a19693dabae212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_0bf87c76c3c79fafe9846fdfdf692b1e9ce786d303677dda5a287238e97eea56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf87c76c3c79fafe9846fdfdf692b1e9ce786d303677dda5a287238e97eea56->enter($__internal_0bf87c76c3c79fafe9846fdfdf692b1e9ce786d303677dda5a287238e97eea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_0bf87c76c3c79fafe9846fdfdf692b1e9ce786d303677dda5a287238e97eea56->leave($__internal_0bf87c76c3c79fafe9846fdfdf692b1e9ce786d303677dda5a287238e97eea56_prof);

        
        $__internal_791724de17a4db598f0db27d8016e6e578d6813118b362fab0a19693dabae212->leave($__internal_791724de17a4db598f0db27d8016e6e578d6813118b362fab0a19693dabae212_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_cbce5e4835ea60b56a817a402ca5d4e15699f9253a5d5c814e206e18cca28daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce5e4835ea60b56a817a402ca5d4e15699f9253a5d5c814e206e18cca28daa->enter($__internal_cbce5e4835ea60b56a817a402ca5d4e15699f9253a5d5c814e206e18cca28daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_5054ac3fb01cd6a4bd542f7dd93744e234653f2de898cd3d4148fe0ce12e9c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5054ac3fb01cd6a4bd542f7dd93744e234653f2de898cd3d4148fe0ce12e9c8b->enter($__internal_5054ac3fb01cd6a4bd542f7dd93744e234653f2de898cd3d4148fe0ce12e9c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_5054ac3fb01cd6a4bd542f7dd93744e234653f2de898cd3d4148fe0ce12e9c8b->leave($__internal_5054ac3fb01cd6a4bd542f7dd93744e234653f2de898cd3d4148fe0ce12e9c8b_prof);

        
        $__internal_cbce5e4835ea60b56a817a402ca5d4e15699f9253a5d5c814e206e18cca28daa->leave($__internal_cbce5e4835ea60b56a817a402ca5d4e15699f9253a5d5c814e206e18cca28daa_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_dc92eea0acce8f094ad3bdb7c0d9e7ff9c482020434319574d660c55680a9373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc92eea0acce8f094ad3bdb7c0d9e7ff9c482020434319574d660c55680a9373->enter($__internal_dc92eea0acce8f094ad3bdb7c0d9e7ff9c482020434319574d660c55680a9373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_d284de062aca1e7c5c77a81e920ed9c1542d986879bf39e677eaea0be1629ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d284de062aca1e7c5c77a81e920ed9c1542d986879bf39e677eaea0be1629ac3->enter($__internal_d284de062aca1e7c5c77a81e920ed9c1542d986879bf39e677eaea0be1629ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_d284de062aca1e7c5c77a81e920ed9c1542d986879bf39e677eaea0be1629ac3->leave($__internal_d284de062aca1e7c5c77a81e920ed9c1542d986879bf39e677eaea0be1629ac3_prof);

        
        $__internal_dc92eea0acce8f094ad3bdb7c0d9e7ff9c482020434319574d660c55680a9373->leave($__internal_dc92eea0acce8f094ad3bdb7c0d9e7ff9c482020434319574d660c55680a9373_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_493e0a24d5187adeffffbed32e8d89471f3b3e7d376c01305ee618dca6590693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493e0a24d5187adeffffbed32e8d89471f3b3e7d376c01305ee618dca6590693->enter($__internal_493e0a24d5187adeffffbed32e8d89471f3b3e7d376c01305ee618dca6590693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_16ef4486e1ada45e99ddb83b687d38ac86879d96606f77fcbe5115d1607230d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ef4486e1ada45e99ddb83b687d38ac86879d96606f77fcbe5115d1607230d2->enter($__internal_16ef4486e1ada45e99ddb83b687d38ac86879d96606f77fcbe5115d1607230d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_16ef4486e1ada45e99ddb83b687d38ac86879d96606f77fcbe5115d1607230d2->leave($__internal_16ef4486e1ada45e99ddb83b687d38ac86879d96606f77fcbe5115d1607230d2_prof);

        
        $__internal_493e0a24d5187adeffffbed32e8d89471f3b3e7d376c01305ee618dca6590693->leave($__internal_493e0a24d5187adeffffbed32e8d89471f3b3e7d376c01305ee618dca6590693_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2bcf926bf2617001b7143e5422d1ea10d44aaf42129d4c4e26ca51d5b571969a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcf926bf2617001b7143e5422d1ea10d44aaf42129d4c4e26ca51d5b571969a->enter($__internal_2bcf926bf2617001b7143e5422d1ea10d44aaf42129d4c4e26ca51d5b571969a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_94fb2070c0e1af8f2fd599e2c51d59372f5a7a2d7ce2aa3d0f2241af4fe6ed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fb2070c0e1af8f2fd599e2c51d59372f5a7a2d7ce2aa3d0f2241af4fe6ed40->enter($__internal_94fb2070c0e1af8f2fd599e2c51d59372f5a7a2d7ce2aa3d0f2241af4fe6ed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_94fb2070c0e1af8f2fd599e2c51d59372f5a7a2d7ce2aa3d0f2241af4fe6ed40->leave($__internal_94fb2070c0e1af8f2fd599e2c51d59372f5a7a2d7ce2aa3d0f2241af4fe6ed40_prof);

        
        $__internal_2bcf926bf2617001b7143e5422d1ea10d44aaf42129d4c4e26ca51d5b571969a->leave($__internal_2bcf926bf2617001b7143e5422d1ea10d44aaf42129d4c4e26ca51d5b571969a_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_7a0a1c1fb37078362beef059d4f638febde0462e471abac53f9f0449be729d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0a1c1fb37078362beef059d4f638febde0462e471abac53f9f0449be729d08->enter($__internal_7a0a1c1fb37078362beef059d4f638febde0462e471abac53f9f0449be729d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_ebe32be853d8f3bd3ac265ecffcf32c5cb9f713d683d264127980728b84cbd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe32be853d8f3bd3ac265ecffcf32c5cb9f713d683d264127980728b84cbd8e->enter($__internal_ebe32be853d8f3bd3ac265ecffcf32c5cb9f713d683d264127980728b84cbd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_ebe32be853d8f3bd3ac265ecffcf32c5cb9f713d683d264127980728b84cbd8e->leave($__internal_ebe32be853d8f3bd3ac265ecffcf32c5cb9f713d683d264127980728b84cbd8e_prof);

        
        $__internal_7a0a1c1fb37078362beef059d4f638febde0462e471abac53f9f0449be729d08->leave($__internal_7a0a1c1fb37078362beef059d4f638febde0462e471abac53f9f0449be729d08_prof);

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
