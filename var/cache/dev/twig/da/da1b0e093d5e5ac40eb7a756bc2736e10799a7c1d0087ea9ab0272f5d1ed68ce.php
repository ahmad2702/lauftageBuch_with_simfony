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
        $__internal_623498c256f7b64ed637b8bc1737befd5c4d135142e6cda6f2df95e17beef860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623498c256f7b64ed637b8bc1737befd5c4d135142e6cda6f2df95e17beef860->enter($__internal_623498c256f7b64ed637b8bc1737befd5c4d135142e6cda6f2df95e17beef860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_38e24e56f48a42e9d8737e313838215192c70081a83403a657f30227f037dd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e24e56f48a42e9d8737e313838215192c70081a83403a657f30227f037dd5d->enter($__internal_38e24e56f48a42e9d8737e313838215192c70081a83403a657f30227f037dd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_623498c256f7b64ed637b8bc1737befd5c4d135142e6cda6f2df95e17beef860->leave($__internal_623498c256f7b64ed637b8bc1737befd5c4d135142e6cda6f2df95e17beef860_prof);

        
        $__internal_38e24e56f48a42e9d8737e313838215192c70081a83403a657f30227f037dd5d->leave($__internal_38e24e56f48a42e9d8737e313838215192c70081a83403a657f30227f037dd5d_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff4148cb9a1bfcef8272ab002dc7fef9bcb37520f53357dc00ec969d1e75364c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4148cb9a1bfcef8272ab002dc7fef9bcb37520f53357dc00ec969d1e75364c->enter($__internal_ff4148cb9a1bfcef8272ab002dc7fef9bcb37520f53357dc00ec969d1e75364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1b2775c14187109c7270b14a5457246eef8eaddcad406a19b3d03efbb152e894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2775c14187109c7270b14a5457246eef8eaddcad406a19b3d03efbb152e894->enter($__internal_1b2775c14187109c7270b14a5457246eef8eaddcad406a19b3d03efbb152e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_1b2775c14187109c7270b14a5457246eef8eaddcad406a19b3d03efbb152e894->leave($__internal_1b2775c14187109c7270b14a5457246eef8eaddcad406a19b3d03efbb152e894_prof);

        
        $__internal_ff4148cb9a1bfcef8272ab002dc7fef9bcb37520f53357dc00ec969d1e75364c->leave($__internal_ff4148cb9a1bfcef8272ab002dc7fef9bcb37520f53357dc00ec969d1e75364c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_28554c1974e7b2330df3e25a76e9f7e45c4196db91d4051301185fe717b114bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28554c1974e7b2330df3e25a76e9f7e45c4196db91d4051301185fe717b114bd->enter($__internal_28554c1974e7b2330df3e25a76e9f7e45c4196db91d4051301185fe717b114bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d3da67e23d2e3c7853a040810395a44737be85dff823d01673a8572be4e3cf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3da67e23d2e3c7853a040810395a44737be85dff823d01673a8572be4e3cf40->enter($__internal_d3da67e23d2e3c7853a040810395a44737be85dff823d01673a8572be4e3cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_d3da67e23d2e3c7853a040810395a44737be85dff823d01673a8572be4e3cf40->leave($__internal_d3da67e23d2e3c7853a040810395a44737be85dff823d01673a8572be4e3cf40_prof);

        
        $__internal_28554c1974e7b2330df3e25a76e9f7e45c4196db91d4051301185fe717b114bd->leave($__internal_28554c1974e7b2330df3e25a76e9f7e45c4196db91d4051301185fe717b114bd_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5a5aea3fccaa1e4ff76de2b4f929b11f27ec8d3aaf9c43dc3a0b75193940b5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5aea3fccaa1e4ff76de2b4f929b11f27ec8d3aaf9c43dc3a0b75193940b5e5->enter($__internal_5a5aea3fccaa1e4ff76de2b4f929b11f27ec8d3aaf9c43dc3a0b75193940b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f6cee6a812ceda4c1fbe1882cc7d3a0a00ccb29f39b9abde1511e15384574de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cee6a812ceda4c1fbe1882cc7d3a0a00ccb29f39b9abde1511e15384574de1->enter($__internal_f6cee6a812ceda4c1fbe1882cc7d3a0a00ccb29f39b9abde1511e15384574de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f6cee6a812ceda4c1fbe1882cc7d3a0a00ccb29f39b9abde1511e15384574de1->leave($__internal_f6cee6a812ceda4c1fbe1882cc7d3a0a00ccb29f39b9abde1511e15384574de1_prof);

        
        $__internal_5a5aea3fccaa1e4ff76de2b4f929b11f27ec8d3aaf9c43dc3a0b75193940b5e5->leave($__internal_5a5aea3fccaa1e4ff76de2b4f929b11f27ec8d3aaf9c43dc3a0b75193940b5e5_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_15c812453845fea1d91e756797211b099ce21eaf491d80daa3c4ddecd87f3492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c812453845fea1d91e756797211b099ce21eaf491d80daa3c4ddecd87f3492->enter($__internal_15c812453845fea1d91e756797211b099ce21eaf491d80daa3c4ddecd87f3492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_874bde85eeee932ad3ab62ea7fdd20d04288f24e176647d1c25e39652409755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874bde85eeee932ad3ab62ea7fdd20d04288f24e176647d1c25e39652409755f->enter($__internal_874bde85eeee932ad3ab62ea7fdd20d04288f24e176647d1c25e39652409755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_874bde85eeee932ad3ab62ea7fdd20d04288f24e176647d1c25e39652409755f->leave($__internal_874bde85eeee932ad3ab62ea7fdd20d04288f24e176647d1c25e39652409755f_prof);

        
        $__internal_15c812453845fea1d91e756797211b099ce21eaf491d80daa3c4ddecd87f3492->leave($__internal_15c812453845fea1d91e756797211b099ce21eaf491d80daa3c4ddecd87f3492_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a8a0631384a3c6c113f33b98c92300bede10f9759e9e4d4a39b4269d13b2e938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a0631384a3c6c113f33b98c92300bede10f9759e9e4d4a39b4269d13b2e938->enter($__internal_a8a0631384a3c6c113f33b98c92300bede10f9759e9e4d4a39b4269d13b2e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7683585c80f141fbf0c6e38452a19cff83272f4759ce15784cf37d2159d9a644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7683585c80f141fbf0c6e38452a19cff83272f4759ce15784cf37d2159d9a644->enter($__internal_7683585c80f141fbf0c6e38452a19cff83272f4759ce15784cf37d2159d9a644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7683585c80f141fbf0c6e38452a19cff83272f4759ce15784cf37d2159d9a644->leave($__internal_7683585c80f141fbf0c6e38452a19cff83272f4759ce15784cf37d2159d9a644_prof);

        
        $__internal_a8a0631384a3c6c113f33b98c92300bede10f9759e9e4d4a39b4269d13b2e938->leave($__internal_a8a0631384a3c6c113f33b98c92300bede10f9759e9e4d4a39b4269d13b2e938_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3218161ab897b79c7f225f7eb48edff26ef947f9fcc468adb42e56af9d3b41d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3218161ab897b79c7f225f7eb48edff26ef947f9fcc468adb42e56af9d3b41d7->enter($__internal_3218161ab897b79c7f225f7eb48edff26ef947f9fcc468adb42e56af9d3b41d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_e5d633cd8390da0379756ea60c148df76078c1b300adc30b231e36d219b8735d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d633cd8390da0379756ea60c148df76078c1b300adc30b231e36d219b8735d->enter($__internal_e5d633cd8390da0379756ea60c148df76078c1b300adc30b231e36d219b8735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_e5d633cd8390da0379756ea60c148df76078c1b300adc30b231e36d219b8735d->leave($__internal_e5d633cd8390da0379756ea60c148df76078c1b300adc30b231e36d219b8735d_prof);

        
        $__internal_3218161ab897b79c7f225f7eb48edff26ef947f9fcc468adb42e56af9d3b41d7->leave($__internal_3218161ab897b79c7f225f7eb48edff26ef947f9fcc468adb42e56af9d3b41d7_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_81fc499d487c5bccf95506bd5a11defeeafb55b68006351f133290f6f8ddf495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fc499d487c5bccf95506bd5a11defeeafb55b68006351f133290f6f8ddf495->enter($__internal_81fc499d487c5bccf95506bd5a11defeeafb55b68006351f133290f6f8ddf495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_39b7af3094874bbfcf02057d09f96ecd5e46dbc9035f7dc1f25963a5763f79e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b7af3094874bbfcf02057d09f96ecd5e46dbc9035f7dc1f25963a5763f79e1->enter($__internal_39b7af3094874bbfcf02057d09f96ecd5e46dbc9035f7dc1f25963a5763f79e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_39b7af3094874bbfcf02057d09f96ecd5e46dbc9035f7dc1f25963a5763f79e1->leave($__internal_39b7af3094874bbfcf02057d09f96ecd5e46dbc9035f7dc1f25963a5763f79e1_prof);

        
        $__internal_81fc499d487c5bccf95506bd5a11defeeafb55b68006351f133290f6f8ddf495->leave($__internal_81fc499d487c5bccf95506bd5a11defeeafb55b68006351f133290f6f8ddf495_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d0feae4e427b7f13c428b7c57b3555c6734da47387f999f0b52e95d55b9eb314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0feae4e427b7f13c428b7c57b3555c6734da47387f999f0b52e95d55b9eb314->enter($__internal_d0feae4e427b7f13c428b7c57b3555c6734da47387f999f0b52e95d55b9eb314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_29b9f54ed6fb398859753623357c027173ce46f369126a7e35468a6193605e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b9f54ed6fb398859753623357c027173ce46f369126a7e35468a6193605e08->enter($__internal_29b9f54ed6fb398859753623357c027173ce46f369126a7e35468a6193605e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_29b9f54ed6fb398859753623357c027173ce46f369126a7e35468a6193605e08->leave($__internal_29b9f54ed6fb398859753623357c027173ce46f369126a7e35468a6193605e08_prof);

        
        $__internal_d0feae4e427b7f13c428b7c57b3555c6734da47387f999f0b52e95d55b9eb314->leave($__internal_d0feae4e427b7f13c428b7c57b3555c6734da47387f999f0b52e95d55b9eb314_prof);

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
