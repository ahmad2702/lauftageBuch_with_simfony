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
        $__internal_7134848832bf3f956a434fe42e0c5cd8fe8fd718c7e1ab160f040e01d9462cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7134848832bf3f956a434fe42e0c5cd8fe8fd718c7e1ab160f040e01d9462cc5->enter($__internal_7134848832bf3f956a434fe42e0c5cd8fe8fd718c7e1ab160f040e01d9462cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_76c5cb7288815db5c6a58e0c164c19d9278812e18fdfcc4cbdc176d7f656d202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c5cb7288815db5c6a58e0c164c19d9278812e18fdfcc4cbdc176d7f656d202->enter($__internal_76c5cb7288815db5c6a58e0c164c19d9278812e18fdfcc4cbdc176d7f656d202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_7134848832bf3f956a434fe42e0c5cd8fe8fd718c7e1ab160f040e01d9462cc5->leave($__internal_7134848832bf3f956a434fe42e0c5cd8fe8fd718c7e1ab160f040e01d9462cc5_prof);

        
        $__internal_76c5cb7288815db5c6a58e0c164c19d9278812e18fdfcc4cbdc176d7f656d202->leave($__internal_76c5cb7288815db5c6a58e0c164c19d9278812e18fdfcc4cbdc176d7f656d202_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_785e7d5f7749c361d2062602c5b94ddaef08011afc719f27e72afbbb435e7132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785e7d5f7749c361d2062602c5b94ddaef08011afc719f27e72afbbb435e7132->enter($__internal_785e7d5f7749c361d2062602c5b94ddaef08011afc719f27e72afbbb435e7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2ea0f0d97895bbacbdfca74d4992e0fdee6892060870b52c952362b19fa77874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea0f0d97895bbacbdfca74d4992e0fdee6892060870b52c952362b19fa77874->enter($__internal_2ea0f0d97895bbacbdfca74d4992e0fdee6892060870b52c952362b19fa77874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2ea0f0d97895bbacbdfca74d4992e0fdee6892060870b52c952362b19fa77874->leave($__internal_2ea0f0d97895bbacbdfca74d4992e0fdee6892060870b52c952362b19fa77874_prof);

        
        $__internal_785e7d5f7749c361d2062602c5b94ddaef08011afc719f27e72afbbb435e7132->leave($__internal_785e7d5f7749c361d2062602c5b94ddaef08011afc719f27e72afbbb435e7132_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d821dfc570734b8fab6ff689b3a3a5809a4135289acd8aa8b424061ba0d46c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d821dfc570734b8fab6ff689b3a3a5809a4135289acd8aa8b424061ba0d46c53->enter($__internal_d821dfc570734b8fab6ff689b3a3a5809a4135289acd8aa8b424061ba0d46c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d91456dbbd8fb5756a0cc5728081b16dc9fb3bbb1fe44ccc61b5bb52c6cc284c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91456dbbd8fb5756a0cc5728081b16dc9fb3bbb1fe44ccc61b5bb52c6cc284c->enter($__internal_d91456dbbd8fb5756a0cc5728081b16dc9fb3bbb1fe44ccc61b5bb52c6cc284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_d91456dbbd8fb5756a0cc5728081b16dc9fb3bbb1fe44ccc61b5bb52c6cc284c->leave($__internal_d91456dbbd8fb5756a0cc5728081b16dc9fb3bbb1fe44ccc61b5bb52c6cc284c_prof);

        
        $__internal_d821dfc570734b8fab6ff689b3a3a5809a4135289acd8aa8b424061ba0d46c53->leave($__internal_d821dfc570734b8fab6ff689b3a3a5809a4135289acd8aa8b424061ba0d46c53_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4d9a96643f22fc92992bd0c4ecdaeebd922f1780ad29f2097615fb7919bf3724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9a96643f22fc92992bd0c4ecdaeebd922f1780ad29f2097615fb7919bf3724->enter($__internal_4d9a96643f22fc92992bd0c4ecdaeebd922f1780ad29f2097615fb7919bf3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_97609204040d8a7646f9cc5a3bed34b34d4e212be0c9125c44a4716d21895c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97609204040d8a7646f9cc5a3bed34b34d4e212be0c9125c44a4716d21895c08->enter($__internal_97609204040d8a7646f9cc5a3bed34b34d4e212be0c9125c44a4716d21895c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_97609204040d8a7646f9cc5a3bed34b34d4e212be0c9125c44a4716d21895c08->leave($__internal_97609204040d8a7646f9cc5a3bed34b34d4e212be0c9125c44a4716d21895c08_prof);

        
        $__internal_4d9a96643f22fc92992bd0c4ecdaeebd922f1780ad29f2097615fb7919bf3724->leave($__internal_4d9a96643f22fc92992bd0c4ecdaeebd922f1780ad29f2097615fb7919bf3724_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_cd5e04b7e7cbd64280123e57efed2158a2e462bff312b96a22ab463b48521b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5e04b7e7cbd64280123e57efed2158a2e462bff312b96a22ab463b48521b96->enter($__internal_cd5e04b7e7cbd64280123e57efed2158a2e462bff312b96a22ab463b48521b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_cc03c7ae71bc22d9a0c93c08e014ca23d06fc62dd1fad080c4bc5acad3bf1f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc03c7ae71bc22d9a0c93c08e014ca23d06fc62dd1fad080c4bc5acad3bf1f25->enter($__internal_cc03c7ae71bc22d9a0c93c08e014ca23d06fc62dd1fad080c4bc5acad3bf1f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_cc03c7ae71bc22d9a0c93c08e014ca23d06fc62dd1fad080c4bc5acad3bf1f25->leave($__internal_cc03c7ae71bc22d9a0c93c08e014ca23d06fc62dd1fad080c4bc5acad3bf1f25_prof);

        
        $__internal_cd5e04b7e7cbd64280123e57efed2158a2e462bff312b96a22ab463b48521b96->leave($__internal_cd5e04b7e7cbd64280123e57efed2158a2e462bff312b96a22ab463b48521b96_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c302cb83732b9f306eeec397846a8042860b1226557068518af1f1b161f29552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c302cb83732b9f306eeec397846a8042860b1226557068518af1f1b161f29552->enter($__internal_c302cb83732b9f306eeec397846a8042860b1226557068518af1f1b161f29552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8246c858e55f773e2ca81dd5426ab4e4622628aacc7ed8c23ee7380dc560d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8246c858e55f773e2ca81dd5426ab4e4622628aacc7ed8c23ee7380dc560d3dc->enter($__internal_8246c858e55f773e2ca81dd5426ab4e4622628aacc7ed8c23ee7380dc560d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_8246c858e55f773e2ca81dd5426ab4e4622628aacc7ed8c23ee7380dc560d3dc->leave($__internal_8246c858e55f773e2ca81dd5426ab4e4622628aacc7ed8c23ee7380dc560d3dc_prof);

        
        $__internal_c302cb83732b9f306eeec397846a8042860b1226557068518af1f1b161f29552->leave($__internal_c302cb83732b9f306eeec397846a8042860b1226557068518af1f1b161f29552_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9acac2aa49563e98705de013f6eeff13983e5b76624c6f14a4efa4bdc5da969d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acac2aa49563e98705de013f6eeff13983e5b76624c6f14a4efa4bdc5da969d->enter($__internal_9acac2aa49563e98705de013f6eeff13983e5b76624c6f14a4efa4bdc5da969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_79493699ad0431408e699a1110bb5f670f14d31ecb95bb1e2360aadd87f79a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79493699ad0431408e699a1110bb5f670f14d31ecb95bb1e2360aadd87f79a6a->enter($__internal_79493699ad0431408e699a1110bb5f670f14d31ecb95bb1e2360aadd87f79a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_79493699ad0431408e699a1110bb5f670f14d31ecb95bb1e2360aadd87f79a6a->leave($__internal_79493699ad0431408e699a1110bb5f670f14d31ecb95bb1e2360aadd87f79a6a_prof);

        
        $__internal_9acac2aa49563e98705de013f6eeff13983e5b76624c6f14a4efa4bdc5da969d->leave($__internal_9acac2aa49563e98705de013f6eeff13983e5b76624c6f14a4efa4bdc5da969d_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b0e77e3d17821ccfbce7e1da5f7fcdd465c225807553d493e28b67f59ec24de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e77e3d17821ccfbce7e1da5f7fcdd465c225807553d493e28b67f59ec24de2->enter($__internal_b0e77e3d17821ccfbce7e1da5f7fcdd465c225807553d493e28b67f59ec24de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_ec993303f28f3af4dc61db4db904cd29fda710097ff730cdac61fae19b1acd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec993303f28f3af4dc61db4db904cd29fda710097ff730cdac61fae19b1acd67->enter($__internal_ec993303f28f3af4dc61db4db904cd29fda710097ff730cdac61fae19b1acd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_ec993303f28f3af4dc61db4db904cd29fda710097ff730cdac61fae19b1acd67->leave($__internal_ec993303f28f3af4dc61db4db904cd29fda710097ff730cdac61fae19b1acd67_prof);

        
        $__internal_b0e77e3d17821ccfbce7e1da5f7fcdd465c225807553d493e28b67f59ec24de2->leave($__internal_b0e77e3d17821ccfbce7e1da5f7fcdd465c225807553d493e28b67f59ec24de2_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_909e89e64d2141b4e933d0629450946f8bae93a06462773f0287f191f2a9927d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909e89e64d2141b4e933d0629450946f8bae93a06462773f0287f191f2a9927d->enter($__internal_909e89e64d2141b4e933d0629450946f8bae93a06462773f0287f191f2a9927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f1b351a33d7fa70bedb3b6dcc3ec097f5bb068981911d18993fdae756ae1be95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b351a33d7fa70bedb3b6dcc3ec097f5bb068981911d18993fdae756ae1be95->enter($__internal_f1b351a33d7fa70bedb3b6dcc3ec097f5bb068981911d18993fdae756ae1be95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f1b351a33d7fa70bedb3b6dcc3ec097f5bb068981911d18993fdae756ae1be95->leave($__internal_f1b351a33d7fa70bedb3b6dcc3ec097f5bb068981911d18993fdae756ae1be95_prof);

        
        $__internal_909e89e64d2141b4e933d0629450946f8bae93a06462773f0287f191f2a9927d->leave($__internal_909e89e64d2141b4e933d0629450946f8bae93a06462773f0287f191f2a9927d_prof);

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
