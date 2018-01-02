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
        $__internal_1f1a49f2df6a797421ec4b3e5cd22103fa04f429e26b6d26c1848f0639f7779b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1a49f2df6a797421ec4b3e5cd22103fa04f429e26b6d26c1848f0639f7779b->enter($__internal_1f1a49f2df6a797421ec4b3e5cd22103fa04f429e26b6d26c1848f0639f7779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_06640345dc17554d1cb9d943f74ff2b0db063b94c8685b01f25625383bd7dcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06640345dc17554d1cb9d943f74ff2b0db063b94c8685b01f25625383bd7dcc3->enter($__internal_06640345dc17554d1cb9d943f74ff2b0db063b94c8685b01f25625383bd7dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_1f1a49f2df6a797421ec4b3e5cd22103fa04f429e26b6d26c1848f0639f7779b->leave($__internal_1f1a49f2df6a797421ec4b3e5cd22103fa04f429e26b6d26c1848f0639f7779b_prof);

        
        $__internal_06640345dc17554d1cb9d943f74ff2b0db063b94c8685b01f25625383bd7dcc3->leave($__internal_06640345dc17554d1cb9d943f74ff2b0db063b94c8685b01f25625383bd7dcc3_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_08df60b0079f82b26ad1b20fc57dfc3c85694bdf8c2cbc3fd42c0c9469d431fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08df60b0079f82b26ad1b20fc57dfc3c85694bdf8c2cbc3fd42c0c9469d431fa->enter($__internal_08df60b0079f82b26ad1b20fc57dfc3c85694bdf8c2cbc3fd42c0c9469d431fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_267e2afa4cb260592d0c62c29ffbf4e47061c5076bc9c000dd5d03f472845ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267e2afa4cb260592d0c62c29ffbf4e47061c5076bc9c000dd5d03f472845ee7->enter($__internal_267e2afa4cb260592d0c62c29ffbf4e47061c5076bc9c000dd5d03f472845ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_267e2afa4cb260592d0c62c29ffbf4e47061c5076bc9c000dd5d03f472845ee7->leave($__internal_267e2afa4cb260592d0c62c29ffbf4e47061c5076bc9c000dd5d03f472845ee7_prof);

        
        $__internal_08df60b0079f82b26ad1b20fc57dfc3c85694bdf8c2cbc3fd42c0c9469d431fa->leave($__internal_08df60b0079f82b26ad1b20fc57dfc3c85694bdf8c2cbc3fd42c0c9469d431fa_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6a333c4f4bc8c2cef0f5381000f9b8f547208a57a7f9e5747f1d186f0848b703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a333c4f4bc8c2cef0f5381000f9b8f547208a57a7f9e5747f1d186f0848b703->enter($__internal_6a333c4f4bc8c2cef0f5381000f9b8f547208a57a7f9e5747f1d186f0848b703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1be808460595f974171bbf76d4a58be7cfd1462344b90fc3cd18c20c7196439d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be808460595f974171bbf76d4a58be7cfd1462344b90fc3cd18c20c7196439d->enter($__internal_1be808460595f974171bbf76d4a58be7cfd1462344b90fc3cd18c20c7196439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_1be808460595f974171bbf76d4a58be7cfd1462344b90fc3cd18c20c7196439d->leave($__internal_1be808460595f974171bbf76d4a58be7cfd1462344b90fc3cd18c20c7196439d_prof);

        
        $__internal_6a333c4f4bc8c2cef0f5381000f9b8f547208a57a7f9e5747f1d186f0848b703->leave($__internal_6a333c4f4bc8c2cef0f5381000f9b8f547208a57a7f9e5747f1d186f0848b703_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_31e623dc1006858d9ac37b4211e617a67fd3fa953c7a63b7104c30a05c17e46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e623dc1006858d9ac37b4211e617a67fd3fa953c7a63b7104c30a05c17e46e->enter($__internal_31e623dc1006858d9ac37b4211e617a67fd3fa953c7a63b7104c30a05c17e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a9b04de549632ef4ccbba4831278549fc9e6d468e7e27a5a78d9c79275000ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b04de549632ef4ccbba4831278549fc9e6d468e7e27a5a78d9c79275000ec7->enter($__internal_a9b04de549632ef4ccbba4831278549fc9e6d468e7e27a5a78d9c79275000ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_a9b04de549632ef4ccbba4831278549fc9e6d468e7e27a5a78d9c79275000ec7->leave($__internal_a9b04de549632ef4ccbba4831278549fc9e6d468e7e27a5a78d9c79275000ec7_prof);

        
        $__internal_31e623dc1006858d9ac37b4211e617a67fd3fa953c7a63b7104c30a05c17e46e->leave($__internal_31e623dc1006858d9ac37b4211e617a67fd3fa953c7a63b7104c30a05c17e46e_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_76881ba0fdaf20c8572d39470186f363754faccea8e8ea27c2f94e0cca12d2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76881ba0fdaf20c8572d39470186f363754faccea8e8ea27c2f94e0cca12d2ce->enter($__internal_76881ba0fdaf20c8572d39470186f363754faccea8e8ea27c2f94e0cca12d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dc9384515ff25a717d4bd07a8c37b0f8efa8ac2d13084b8ced2073256373d099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9384515ff25a717d4bd07a8c37b0f8efa8ac2d13084b8ced2073256373d099->enter($__internal_dc9384515ff25a717d4bd07a8c37b0f8efa8ac2d13084b8ced2073256373d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_dc9384515ff25a717d4bd07a8c37b0f8efa8ac2d13084b8ced2073256373d099->leave($__internal_dc9384515ff25a717d4bd07a8c37b0f8efa8ac2d13084b8ced2073256373d099_prof);

        
        $__internal_76881ba0fdaf20c8572d39470186f363754faccea8e8ea27c2f94e0cca12d2ce->leave($__internal_76881ba0fdaf20c8572d39470186f363754faccea8e8ea27c2f94e0cca12d2ce_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_07fd79e8b80af8c41ab4dcf1475947944134aba8a71a7f8e3fb071c5c9085d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fd79e8b80af8c41ab4dcf1475947944134aba8a71a7f8e3fb071c5c9085d8c->enter($__internal_07fd79e8b80af8c41ab4dcf1475947944134aba8a71a7f8e3fb071c5c9085d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_22828425ca71df06ab5a327873518674d26718c4c0eff8e61ceada87f00e5acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22828425ca71df06ab5a327873518674d26718c4c0eff8e61ceada87f00e5acb->enter($__internal_22828425ca71df06ab5a327873518674d26718c4c0eff8e61ceada87f00e5acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_22828425ca71df06ab5a327873518674d26718c4c0eff8e61ceada87f00e5acb->leave($__internal_22828425ca71df06ab5a327873518674d26718c4c0eff8e61ceada87f00e5acb_prof);

        
        $__internal_07fd79e8b80af8c41ab4dcf1475947944134aba8a71a7f8e3fb071c5c9085d8c->leave($__internal_07fd79e8b80af8c41ab4dcf1475947944134aba8a71a7f8e3fb071c5c9085d8c_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8bef0ca752670c589499832e0abf956c71c80a8a04454e6088e860dc47e16dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bef0ca752670c589499832e0abf956c71c80a8a04454e6088e860dc47e16dd6->enter($__internal_8bef0ca752670c589499832e0abf956c71c80a8a04454e6088e860dc47e16dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_46faffc62ece55fea0ebd7a6988b53f825b67bfbf721a4f5fc318d0303c8c672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46faffc62ece55fea0ebd7a6988b53f825b67bfbf721a4f5fc318d0303c8c672->enter($__internal_46faffc62ece55fea0ebd7a6988b53f825b67bfbf721a4f5fc318d0303c8c672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_46faffc62ece55fea0ebd7a6988b53f825b67bfbf721a4f5fc318d0303c8c672->leave($__internal_46faffc62ece55fea0ebd7a6988b53f825b67bfbf721a4f5fc318d0303c8c672_prof);

        
        $__internal_8bef0ca752670c589499832e0abf956c71c80a8a04454e6088e860dc47e16dd6->leave($__internal_8bef0ca752670c589499832e0abf956c71c80a8a04454e6088e860dc47e16dd6_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4ac99e05c3ab5fda1ed1a22601a3a4fd55ff5541ff62a8891f5053cc07b138b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac99e05c3ab5fda1ed1a22601a3a4fd55ff5541ff62a8891f5053cc07b138b7->enter($__internal_4ac99e05c3ab5fda1ed1a22601a3a4fd55ff5541ff62a8891f5053cc07b138b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a1d84209b89f65a02789837b951f05dbee0bff1a55db681779af96fa24a8422a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d84209b89f65a02789837b951f05dbee0bff1a55db681779af96fa24a8422a->enter($__internal_a1d84209b89f65a02789837b951f05dbee0bff1a55db681779af96fa24a8422a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_a1d84209b89f65a02789837b951f05dbee0bff1a55db681779af96fa24a8422a->leave($__internal_a1d84209b89f65a02789837b951f05dbee0bff1a55db681779af96fa24a8422a_prof);

        
        $__internal_4ac99e05c3ab5fda1ed1a22601a3a4fd55ff5541ff62a8891f5053cc07b138b7->leave($__internal_4ac99e05c3ab5fda1ed1a22601a3a4fd55ff5541ff62a8891f5053cc07b138b7_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9219bd436fb737173fa313bc75cfb0ed5f92a4b7752748dc70105703221bb251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9219bd436fb737173fa313bc75cfb0ed5f92a4b7752748dc70105703221bb251->enter($__internal_9219bd436fb737173fa313bc75cfb0ed5f92a4b7752748dc70105703221bb251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ea5c36a05ccd5e0bc580d09947497dae0711f7d7862defb2d3b414138c88d105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5c36a05ccd5e0bc580d09947497dae0711f7d7862defb2d3b414138c88d105->enter($__internal_ea5c36a05ccd5e0bc580d09947497dae0711f7d7862defb2d3b414138c88d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ea5c36a05ccd5e0bc580d09947497dae0711f7d7862defb2d3b414138c88d105->leave($__internal_ea5c36a05ccd5e0bc580d09947497dae0711f7d7862defb2d3b414138c88d105_prof);

        
        $__internal_9219bd436fb737173fa313bc75cfb0ed5f92a4b7752748dc70105703221bb251->leave($__internal_9219bd436fb737173fa313bc75cfb0ed5f92a4b7752748dc70105703221bb251_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
