<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_186a23c717b28d52dd9c69e50c4be340662cf7a4626d798d870b0730fbb08bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_263e00ee2f1a0fca0689996ebd97efbfaf12ffaf996707b1d69bb1e5fb46fd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263e00ee2f1a0fca0689996ebd97efbfaf12ffaf996707b1d69bb1e5fb46fd79->enter($__internal_263e00ee2f1a0fca0689996ebd97efbfaf12ffaf996707b1d69bb1e5fb46fd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_7cb0a569d09f8c0ff2d754185ccc1bbca70eb26f2aea4c6449a9eaf35d0ff825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb0a569d09f8c0ff2d754185ccc1bbca70eb26f2aea4c6449a9eaf35d0ff825->enter($__internal_7cb0a569d09f8c0ff2d754185ccc1bbca70eb26f2aea4c6449a9eaf35d0ff825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_263e00ee2f1a0fca0689996ebd97efbfaf12ffaf996707b1d69bb1e5fb46fd79->leave($__internal_263e00ee2f1a0fca0689996ebd97efbfaf12ffaf996707b1d69bb1e5fb46fd79_prof);

        
        $__internal_7cb0a569d09f8c0ff2d754185ccc1bbca70eb26f2aea4c6449a9eaf35d0ff825->leave($__internal_7cb0a569d09f8c0ff2d754185ccc1bbca70eb26f2aea4c6449a9eaf35d0ff825_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2363280a555bdb5b2d1ec7b6f451e5c64edaff063649ff3d88b2a8f044d62ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2363280a555bdb5b2d1ec7b6f451e5c64edaff063649ff3d88b2a8f044d62ca8->enter($__internal_2363280a555bdb5b2d1ec7b6f451e5c64edaff063649ff3d88b2a8f044d62ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_3dd0be244967c8108ea6b29a3695d8b40b67a8ef5971df3da48c620259256e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd0be244967c8108ea6b29a3695d8b40b67a8ef5971df3da48c620259256e60->enter($__internal_3dd0be244967c8108ea6b29a3695d8b40b67a8ef5971df3da48c620259256e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_3dd0be244967c8108ea6b29a3695d8b40b67a8ef5971df3da48c620259256e60->leave($__internal_3dd0be244967c8108ea6b29a3695d8b40b67a8ef5971df3da48c620259256e60_prof);

        
        $__internal_2363280a555bdb5b2d1ec7b6f451e5c64edaff063649ff3d88b2a8f044d62ca8->leave($__internal_2363280a555bdb5b2d1ec7b6f451e5c64edaff063649ff3d88b2a8f044d62ca8_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f7d8c1c99c70d34020199e6c5ae85147f2ca05992c2411c6bcde85609e891d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d8c1c99c70d34020199e6c5ae85147f2ca05992c2411c6bcde85609e891d09->enter($__internal_f7d8c1c99c70d34020199e6c5ae85147f2ca05992c2411c6bcde85609e891d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9fb8a9ca7c7e70cdd102fbe3c0edaa73833cc372242536adc61870fead4f02e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb8a9ca7c7e70cdd102fbe3c0edaa73833cc372242536adc61870fead4f02e9->enter($__internal_9fb8a9ca7c7e70cdd102fbe3c0edaa73833cc372242536adc61870fead4f02e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_9fb8a9ca7c7e70cdd102fbe3c0edaa73833cc372242536adc61870fead4f02e9->leave($__internal_9fb8a9ca7c7e70cdd102fbe3c0edaa73833cc372242536adc61870fead4f02e9_prof);

        
        $__internal_f7d8c1c99c70d34020199e6c5ae85147f2ca05992c2411c6bcde85609e891d09->leave($__internal_f7d8c1c99c70d34020199e6c5ae85147f2ca05992c2411c6bcde85609e891d09_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_524ca47a2cd428183205fd76e2ec4d73601c8e0847970bdabc6343bd71755cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524ca47a2cd428183205fd76e2ec4d73601c8e0847970bdabc6343bd71755cbf->enter($__internal_524ca47a2cd428183205fd76e2ec4d73601c8e0847970bdabc6343bd71755cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c8370ef909d03ac521dd04dc5fa42fa9491a1c9693611951ae73cdcc9e4ed4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8370ef909d03ac521dd04dc5fa42fa9491a1c9693611951ae73cdcc9e4ed4a4->enter($__internal_c8370ef909d03ac521dd04dc5fa42fa9491a1c9693611951ae73cdcc9e4ed4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_c8370ef909d03ac521dd04dc5fa42fa9491a1c9693611951ae73cdcc9e4ed4a4->leave($__internal_c8370ef909d03ac521dd04dc5fa42fa9491a1c9693611951ae73cdcc9e4ed4a4_prof);

        
        $__internal_524ca47a2cd428183205fd76e2ec4d73601c8e0847970bdabc6343bd71755cbf->leave($__internal_524ca47a2cd428183205fd76e2ec4d73601c8e0847970bdabc6343bd71755cbf_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f98bc1ccf1e05239487834d1146cf734f57aa7c1b393882219eaa1ccc3bca86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98bc1ccf1e05239487834d1146cf734f57aa7c1b393882219eaa1ccc3bca86d->enter($__internal_f98bc1ccf1e05239487834d1146cf734f57aa7c1b393882219eaa1ccc3bca86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_883c4bcedf3293c541aa3eb732aededb47d7331a27984883be6aab36a2658b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883c4bcedf3293c541aa3eb732aededb47d7331a27984883be6aab36a2658b46->enter($__internal_883c4bcedf3293c541aa3eb732aededb47d7331a27984883be6aab36a2658b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_883c4bcedf3293c541aa3eb732aededb47d7331a27984883be6aab36a2658b46->leave($__internal_883c4bcedf3293c541aa3eb732aededb47d7331a27984883be6aab36a2658b46_prof);

        
        $__internal_f98bc1ccf1e05239487834d1146cf734f57aa7c1b393882219eaa1ccc3bca86d->leave($__internal_f98bc1ccf1e05239487834d1146cf734f57aa7c1b393882219eaa1ccc3bca86d_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5439b2158d919d3240d8b57e4143a87cc77f8be230bcec4ddad929eb8e9f6426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5439b2158d919d3240d8b57e4143a87cc77f8be230bcec4ddad929eb8e9f6426->enter($__internal_5439b2158d919d3240d8b57e4143a87cc77f8be230bcec4ddad929eb8e9f6426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d2871d8d2810820e87b132403c374877c561317fa0e26e20800bc60157154fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2871d8d2810820e87b132403c374877c561317fa0e26e20800bc60157154fe9->enter($__internal_d2871d8d2810820e87b132403c374877c561317fa0e26e20800bc60157154fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_d2871d8d2810820e87b132403c374877c561317fa0e26e20800bc60157154fe9->leave($__internal_d2871d8d2810820e87b132403c374877c561317fa0e26e20800bc60157154fe9_prof);

        
        $__internal_5439b2158d919d3240d8b57e4143a87cc77f8be230bcec4ddad929eb8e9f6426->leave($__internal_5439b2158d919d3240d8b57e4143a87cc77f8be230bcec4ddad929eb8e9f6426_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_654eecc26b6dd039465cabee08649c7193111241123d3bac59d6368589e464d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654eecc26b6dd039465cabee08649c7193111241123d3bac59d6368589e464d1->enter($__internal_654eecc26b6dd039465cabee08649c7193111241123d3bac59d6368589e464d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c96b2e761379d96d63964083edfe3aa2aa5637ed2359e9dea84757d2c65ec78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96b2e761379d96d63964083edfe3aa2aa5637ed2359e9dea84757d2c65ec78a->enter($__internal_c96b2e761379d96d63964083edfe3aa2aa5637ed2359e9dea84757d2c65ec78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_c96b2e761379d96d63964083edfe3aa2aa5637ed2359e9dea84757d2c65ec78a->leave($__internal_c96b2e761379d96d63964083edfe3aa2aa5637ed2359e9dea84757d2c65ec78a_prof);

        
        $__internal_654eecc26b6dd039465cabee08649c7193111241123d3bac59d6368589e464d1->leave($__internal_654eecc26b6dd039465cabee08649c7193111241123d3bac59d6368589e464d1_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_211b0da25aa3f54f6d02e5edd091a1c7c564168339bd1a65714088e11eafade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211b0da25aa3f54f6d02e5edd091a1c7c564168339bd1a65714088e11eafade7->enter($__internal_211b0da25aa3f54f6d02e5edd091a1c7c564168339bd1a65714088e11eafade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8e41e29904750e6a5af0fe910f9b20c297b179e7b0b2caab1920abf9ad09f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e41e29904750e6a5af0fe910f9b20c297b179e7b0b2caab1920abf9ad09f88f->enter($__internal_8e41e29904750e6a5af0fe910f9b20c297b179e7b0b2caab1920abf9ad09f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_8e41e29904750e6a5af0fe910f9b20c297b179e7b0b2caab1920abf9ad09f88f->leave($__internal_8e41e29904750e6a5af0fe910f9b20c297b179e7b0b2caab1920abf9ad09f88f_prof);

        
        $__internal_211b0da25aa3f54f6d02e5edd091a1c7c564168339bd1a65714088e11eafade7->leave($__internal_211b0da25aa3f54f6d02e5edd091a1c7c564168339bd1a65714088e11eafade7_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_75b963e1a4cf1285a2b763ab603c9d9c2f8f202053736711a42a18bd0d70b1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b963e1a4cf1285a2b763ab603c9d9c2f8f202053736711a42a18bd0d70b1f1->enter($__internal_75b963e1a4cf1285a2b763ab603c9d9c2f8f202053736711a42a18bd0d70b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9a60e4a81dc1aa64ed24b66a82aff414fd62d0bab46eba634333de9711c58727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a60e4a81dc1aa64ed24b66a82aff414fd62d0bab46eba634333de9711c58727->enter($__internal_9a60e4a81dc1aa64ed24b66a82aff414fd62d0bab46eba634333de9711c58727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_9a60e4a81dc1aa64ed24b66a82aff414fd62d0bab46eba634333de9711c58727->leave($__internal_9a60e4a81dc1aa64ed24b66a82aff414fd62d0bab46eba634333de9711c58727_prof);

        
        $__internal_75b963e1a4cf1285a2b763ab603c9d9c2f8f202053736711a42a18bd0d70b1f1->leave($__internal_75b963e1a4cf1285a2b763ab603c9d9c2f8f202053736711a42a18bd0d70b1f1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
