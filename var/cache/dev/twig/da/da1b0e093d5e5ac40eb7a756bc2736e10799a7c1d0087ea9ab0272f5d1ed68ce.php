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
        $__internal_55db1890cdf2998664473c93918bdff47e211da3109af6fdf487d8404c31420e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55db1890cdf2998664473c93918bdff47e211da3109af6fdf487d8404c31420e->enter($__internal_55db1890cdf2998664473c93918bdff47e211da3109af6fdf487d8404c31420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_f1c6351144fa2854c6e241d205f9764eeed9383df4f16989ce6f4c8ad9485754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c6351144fa2854c6e241d205f9764eeed9383df4f16989ce6f4c8ad9485754->enter($__internal_f1c6351144fa2854c6e241d205f9764eeed9383df4f16989ce6f4c8ad9485754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_55db1890cdf2998664473c93918bdff47e211da3109af6fdf487d8404c31420e->leave($__internal_55db1890cdf2998664473c93918bdff47e211da3109af6fdf487d8404c31420e_prof);

        
        $__internal_f1c6351144fa2854c6e241d205f9764eeed9383df4f16989ce6f4c8ad9485754->leave($__internal_f1c6351144fa2854c6e241d205f9764eeed9383df4f16989ce6f4c8ad9485754_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d7cb3a83fd93db34610a0467e3239553daf3255ff451794a89d134663bee4a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cb3a83fd93db34610a0467e3239553daf3255ff451794a89d134663bee4a72->enter($__internal_d7cb3a83fd93db34610a0467e3239553daf3255ff451794a89d134663bee4a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b1a7205fa126707e7f3043bfeecbfd1585ca16ad71ec6898b89df4aef3b13d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a7205fa126707e7f3043bfeecbfd1585ca16ad71ec6898b89df4aef3b13d7c->enter($__internal_b1a7205fa126707e7f3043bfeecbfd1585ca16ad71ec6898b89df4aef3b13d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_b1a7205fa126707e7f3043bfeecbfd1585ca16ad71ec6898b89df4aef3b13d7c->leave($__internal_b1a7205fa126707e7f3043bfeecbfd1585ca16ad71ec6898b89df4aef3b13d7c_prof);

        
        $__internal_d7cb3a83fd93db34610a0467e3239553daf3255ff451794a89d134663bee4a72->leave($__internal_d7cb3a83fd93db34610a0467e3239553daf3255ff451794a89d134663bee4a72_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2f1ca203512dbc8712908b26171fe481b65e9b63c42fb6cab236466ad17fd03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1ca203512dbc8712908b26171fe481b65e9b63c42fb6cab236466ad17fd03a->enter($__internal_2f1ca203512dbc8712908b26171fe481b65e9b63c42fb6cab236466ad17fd03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b611929fb3a5745014c015e693c133b87c0a85e8b2fd1d2b11931013ae7a90b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b611929fb3a5745014c015e693c133b87c0a85e8b2fd1d2b11931013ae7a90b2->enter($__internal_b611929fb3a5745014c015e693c133b87c0a85e8b2fd1d2b11931013ae7a90b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_b611929fb3a5745014c015e693c133b87c0a85e8b2fd1d2b11931013ae7a90b2->leave($__internal_b611929fb3a5745014c015e693c133b87c0a85e8b2fd1d2b11931013ae7a90b2_prof);

        
        $__internal_2f1ca203512dbc8712908b26171fe481b65e9b63c42fb6cab236466ad17fd03a->leave($__internal_2f1ca203512dbc8712908b26171fe481b65e9b63c42fb6cab236466ad17fd03a_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c14a7eaa4196a7eb58821483e61f42aa361af8c3172baa7aa89bb021ce006ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c14a7eaa4196a7eb58821483e61f42aa361af8c3172baa7aa89bb021ce006ff->enter($__internal_5c14a7eaa4196a7eb58821483e61f42aa361af8c3172baa7aa89bb021ce006ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4d39130f679c66899b78d88e565481a9dae00eee0b05f84822e66359cc2d6574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d39130f679c66899b78d88e565481a9dae00eee0b05f84822e66359cc2d6574->enter($__internal_4d39130f679c66899b78d88e565481a9dae00eee0b05f84822e66359cc2d6574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4d39130f679c66899b78d88e565481a9dae00eee0b05f84822e66359cc2d6574->leave($__internal_4d39130f679c66899b78d88e565481a9dae00eee0b05f84822e66359cc2d6574_prof);

        
        $__internal_5c14a7eaa4196a7eb58821483e61f42aa361af8c3172baa7aa89bb021ce006ff->leave($__internal_5c14a7eaa4196a7eb58821483e61f42aa361af8c3172baa7aa89bb021ce006ff_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_9bc2ebfc0e9215adf5986d3deb2bf8d48de65f346a9d8fff6793a591f8e2aa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc2ebfc0e9215adf5986d3deb2bf8d48de65f346a9d8fff6793a591f8e2aa12->enter($__internal_9bc2ebfc0e9215adf5986d3deb2bf8d48de65f346a9d8fff6793a591f8e2aa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_1367b0627935e6792e5be286d96bb8b73c105c78809a11bbbd9f0528c254f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1367b0627935e6792e5be286d96bb8b73c105c78809a11bbbd9f0528c254f925->enter($__internal_1367b0627935e6792e5be286d96bb8b73c105c78809a11bbbd9f0528c254f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_1367b0627935e6792e5be286d96bb8b73c105c78809a11bbbd9f0528c254f925->leave($__internal_1367b0627935e6792e5be286d96bb8b73c105c78809a11bbbd9f0528c254f925_prof);

        
        $__internal_9bc2ebfc0e9215adf5986d3deb2bf8d48de65f346a9d8fff6793a591f8e2aa12->leave($__internal_9bc2ebfc0e9215adf5986d3deb2bf8d48de65f346a9d8fff6793a591f8e2aa12_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bc64bd73ee3db74cf68caaea03a1ea2f8924e5b7290d7e05ee4ad46fb70a5d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc64bd73ee3db74cf68caaea03a1ea2f8924e5b7290d7e05ee4ad46fb70a5d5d->enter($__internal_bc64bd73ee3db74cf68caaea03a1ea2f8924e5b7290d7e05ee4ad46fb70a5d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_3e6fe2adb1e0f9a0855f6868b92be47f6b37a72d714c33b20dc5b29294e3cc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6fe2adb1e0f9a0855f6868b92be47f6b37a72d714c33b20dc5b29294e3cc6a->enter($__internal_3e6fe2adb1e0f9a0855f6868b92be47f6b37a72d714c33b20dc5b29294e3cc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_3e6fe2adb1e0f9a0855f6868b92be47f6b37a72d714c33b20dc5b29294e3cc6a->leave($__internal_3e6fe2adb1e0f9a0855f6868b92be47f6b37a72d714c33b20dc5b29294e3cc6a_prof);

        
        $__internal_bc64bd73ee3db74cf68caaea03a1ea2f8924e5b7290d7e05ee4ad46fb70a5d5d->leave($__internal_bc64bd73ee3db74cf68caaea03a1ea2f8924e5b7290d7e05ee4ad46fb70a5d5d_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8dcdc11f2d7c0ed42abf8f42e0433b2ea6358f4044be67b6d953f698d5527b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcdc11f2d7c0ed42abf8f42e0433b2ea6358f4044be67b6d953f698d5527b0c->enter($__internal_8dcdc11f2d7c0ed42abf8f42e0433b2ea6358f4044be67b6d953f698d5527b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_43ea173670e0b028c333a23185534afe08a4229064de4d428d04a3d19f55778b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ea173670e0b028c333a23185534afe08a4229064de4d428d04a3d19f55778b->enter($__internal_43ea173670e0b028c333a23185534afe08a4229064de4d428d04a3d19f55778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_43ea173670e0b028c333a23185534afe08a4229064de4d428d04a3d19f55778b->leave($__internal_43ea173670e0b028c333a23185534afe08a4229064de4d428d04a3d19f55778b_prof);

        
        $__internal_8dcdc11f2d7c0ed42abf8f42e0433b2ea6358f4044be67b6d953f698d5527b0c->leave($__internal_8dcdc11f2d7c0ed42abf8f42e0433b2ea6358f4044be67b6d953f698d5527b0c_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_42645a845e46152055f708a947bd03c0716b5c393e6b3671fb84a6434699ff9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42645a845e46152055f708a947bd03c0716b5c393e6b3671fb84a6434699ff9c->enter($__internal_42645a845e46152055f708a947bd03c0716b5c393e6b3671fb84a6434699ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_71930dd4e1309d9e95f67b13e5a0f722fe1b513237c913a6ab7d8ce7abd9096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71930dd4e1309d9e95f67b13e5a0f722fe1b513237c913a6ab7d8ce7abd9096b->enter($__internal_71930dd4e1309d9e95f67b13e5a0f722fe1b513237c913a6ab7d8ce7abd9096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_71930dd4e1309d9e95f67b13e5a0f722fe1b513237c913a6ab7d8ce7abd9096b->leave($__internal_71930dd4e1309d9e95f67b13e5a0f722fe1b513237c913a6ab7d8ce7abd9096b_prof);

        
        $__internal_42645a845e46152055f708a947bd03c0716b5c393e6b3671fb84a6434699ff9c->leave($__internal_42645a845e46152055f708a947bd03c0716b5c393e6b3671fb84a6434699ff9c_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5ff16ee10c225fa81502e6ecab09f88479405007fb65047eda854d34911b4727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff16ee10c225fa81502e6ecab09f88479405007fb65047eda854d34911b4727->enter($__internal_5ff16ee10c225fa81502e6ecab09f88479405007fb65047eda854d34911b4727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_91661437897edd1f6d032bce7767554f53380126e2ec47a4e1025aa309d6f59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91661437897edd1f6d032bce7767554f53380126e2ec47a4e1025aa309d6f59f->enter($__internal_91661437897edd1f6d032bce7767554f53380126e2ec47a4e1025aa309d6f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_91661437897edd1f6d032bce7767554f53380126e2ec47a4e1025aa309d6f59f->leave($__internal_91661437897edd1f6d032bce7767554f53380126e2ec47a4e1025aa309d6f59f_prof);

        
        $__internal_5ff16ee10c225fa81502e6ecab09f88479405007fb65047eda854d34911b4727->leave($__internal_5ff16ee10c225fa81502e6ecab09f88479405007fb65047eda854d34911b4727_prof);

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
