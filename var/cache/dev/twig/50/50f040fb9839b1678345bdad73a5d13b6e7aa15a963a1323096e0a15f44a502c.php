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
        $__internal_3264034e07a4d65104488b1b58305e42152b975578c2f6fab2e25b8992dd0801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3264034e07a4d65104488b1b58305e42152b975578c2f6fab2e25b8992dd0801->enter($__internal_3264034e07a4d65104488b1b58305e42152b975578c2f6fab2e25b8992dd0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_91e5a6ccd39db7c739d17bbd37a3582cdfb357f156eb6ce8c400dfa06d5ebf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e5a6ccd39db7c739d17bbd37a3582cdfb357f156eb6ce8c400dfa06d5ebf6f->enter($__internal_91e5a6ccd39db7c739d17bbd37a3582cdfb357f156eb6ce8c400dfa06d5ebf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_3264034e07a4d65104488b1b58305e42152b975578c2f6fab2e25b8992dd0801->leave($__internal_3264034e07a4d65104488b1b58305e42152b975578c2f6fab2e25b8992dd0801_prof);

        
        $__internal_91e5a6ccd39db7c739d17bbd37a3582cdfb357f156eb6ce8c400dfa06d5ebf6f->leave($__internal_91e5a6ccd39db7c739d17bbd37a3582cdfb357f156eb6ce8c400dfa06d5ebf6f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1b78308a6ff72767d04ac5d0b26ab1e43cef1f4480e827926f324debe37cc675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b78308a6ff72767d04ac5d0b26ab1e43cef1f4480e827926f324debe37cc675->enter($__internal_1b78308a6ff72767d04ac5d0b26ab1e43cef1f4480e827926f324debe37cc675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_0b5f5f97e0ab86d15eb258a912283c4cc11d5ee3da87c6b2ec00f7fe28149eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f5f97e0ab86d15eb258a912283c4cc11d5ee3da87c6b2ec00f7fe28149eb4->enter($__internal_0b5f5f97e0ab86d15eb258a912283c4cc11d5ee3da87c6b2ec00f7fe28149eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_0b5f5f97e0ab86d15eb258a912283c4cc11d5ee3da87c6b2ec00f7fe28149eb4->leave($__internal_0b5f5f97e0ab86d15eb258a912283c4cc11d5ee3da87c6b2ec00f7fe28149eb4_prof);

        
        $__internal_1b78308a6ff72767d04ac5d0b26ab1e43cef1f4480e827926f324debe37cc675->leave($__internal_1b78308a6ff72767d04ac5d0b26ab1e43cef1f4480e827926f324debe37cc675_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e13305f8d8303a96007f2dc9ccde99b6506cfc38eef41b1f0c5bad5579889559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13305f8d8303a96007f2dc9ccde99b6506cfc38eef41b1f0c5bad5579889559->enter($__internal_e13305f8d8303a96007f2dc9ccde99b6506cfc38eef41b1f0c5bad5579889559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4b4b500220580484e13d4d6176e699849cf91f765a99dda0c95771d345b2ff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4b500220580484e13d4d6176e699849cf91f765a99dda0c95771d345b2ff11->enter($__internal_4b4b500220580484e13d4d6176e699849cf91f765a99dda0c95771d345b2ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_4b4b500220580484e13d4d6176e699849cf91f765a99dda0c95771d345b2ff11->leave($__internal_4b4b500220580484e13d4d6176e699849cf91f765a99dda0c95771d345b2ff11_prof);

        
        $__internal_e13305f8d8303a96007f2dc9ccde99b6506cfc38eef41b1f0c5bad5579889559->leave($__internal_e13305f8d8303a96007f2dc9ccde99b6506cfc38eef41b1f0c5bad5579889559_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0711583a3d38192fa246775eaa854d73cde28576a1d73a20599f1993d7ec5b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0711583a3d38192fa246775eaa854d73cde28576a1d73a20599f1993d7ec5b59->enter($__internal_0711583a3d38192fa246775eaa854d73cde28576a1d73a20599f1993d7ec5b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3d8e3e50a86cca03dbab7e617182d43dcd73506af4645913f1aa18380dda307c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8e3e50a86cca03dbab7e617182d43dcd73506af4645913f1aa18380dda307c->enter($__internal_3d8e3e50a86cca03dbab7e617182d43dcd73506af4645913f1aa18380dda307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_3d8e3e50a86cca03dbab7e617182d43dcd73506af4645913f1aa18380dda307c->leave($__internal_3d8e3e50a86cca03dbab7e617182d43dcd73506af4645913f1aa18380dda307c_prof);

        
        $__internal_0711583a3d38192fa246775eaa854d73cde28576a1d73a20599f1993d7ec5b59->leave($__internal_0711583a3d38192fa246775eaa854d73cde28576a1d73a20599f1993d7ec5b59_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e1e21044507c9f76a375959b3748b4a9a94936e0782d18574630ada23a22e9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e21044507c9f76a375959b3748b4a9a94936e0782d18574630ada23a22e9c7->enter($__internal_e1e21044507c9f76a375959b3748b4a9a94936e0782d18574630ada23a22e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6890dd94aa991b764cfee926c9aafa0203323f9be4ae945b0d89cb54bdd929bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6890dd94aa991b764cfee926c9aafa0203323f9be4ae945b0d89cb54bdd929bc->enter($__internal_6890dd94aa991b764cfee926c9aafa0203323f9be4ae945b0d89cb54bdd929bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6890dd94aa991b764cfee926c9aafa0203323f9be4ae945b0d89cb54bdd929bc->leave($__internal_6890dd94aa991b764cfee926c9aafa0203323f9be4ae945b0d89cb54bdd929bc_prof);

        
        $__internal_e1e21044507c9f76a375959b3748b4a9a94936e0782d18574630ada23a22e9c7->leave($__internal_e1e21044507c9f76a375959b3748b4a9a94936e0782d18574630ada23a22e9c7_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f2a48f9cd4b30a794435e6154601cf5c8d2f1648095797be55f5340b1d7349ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a48f9cd4b30a794435e6154601cf5c8d2f1648095797be55f5340b1d7349ed->enter($__internal_f2a48f9cd4b30a794435e6154601cf5c8d2f1648095797be55f5340b1d7349ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c1f07e581c83f31aec4b16e7a02bdeccff17f11658833ba986c5ef0e7b637225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f07e581c83f31aec4b16e7a02bdeccff17f11658833ba986c5ef0e7b637225->enter($__internal_c1f07e581c83f31aec4b16e7a02bdeccff17f11658833ba986c5ef0e7b637225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_c1f07e581c83f31aec4b16e7a02bdeccff17f11658833ba986c5ef0e7b637225->leave($__internal_c1f07e581c83f31aec4b16e7a02bdeccff17f11658833ba986c5ef0e7b637225_prof);

        
        $__internal_f2a48f9cd4b30a794435e6154601cf5c8d2f1648095797be55f5340b1d7349ed->leave($__internal_f2a48f9cd4b30a794435e6154601cf5c8d2f1648095797be55f5340b1d7349ed_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dc2d71e55f9762339f67acb74062d1da1d387f0e106777950a8e4b1d376177f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2d71e55f9762339f67acb74062d1da1d387f0e106777950a8e4b1d376177f1->enter($__internal_dc2d71e55f9762339f67acb74062d1da1d387f0e106777950a8e4b1d376177f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7dca9352955d176195995d2cfbc9d0842eeae03e39548eb70066152a8b361c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dca9352955d176195995d2cfbc9d0842eeae03e39548eb70066152a8b361c66->enter($__internal_7dca9352955d176195995d2cfbc9d0842eeae03e39548eb70066152a8b361c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_7dca9352955d176195995d2cfbc9d0842eeae03e39548eb70066152a8b361c66->leave($__internal_7dca9352955d176195995d2cfbc9d0842eeae03e39548eb70066152a8b361c66_prof);

        
        $__internal_dc2d71e55f9762339f67acb74062d1da1d387f0e106777950a8e4b1d376177f1->leave($__internal_dc2d71e55f9762339f67acb74062d1da1d387f0e106777950a8e4b1d376177f1_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9f206873d325d732e9c035643acd6cec5f15ac6fd5cc4dfef2dbf8d02fc293b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f206873d325d732e9c035643acd6cec5f15ac6fd5cc4dfef2dbf8d02fc293b2->enter($__internal_9f206873d325d732e9c035643acd6cec5f15ac6fd5cc4dfef2dbf8d02fc293b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_79f288578450bf662d16ff6dc3827cae6b8d7d39e8a486981a27ca62b09da661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f288578450bf662d16ff6dc3827cae6b8d7d39e8a486981a27ca62b09da661->enter($__internal_79f288578450bf662d16ff6dc3827cae6b8d7d39e8a486981a27ca62b09da661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_79f288578450bf662d16ff6dc3827cae6b8d7d39e8a486981a27ca62b09da661->leave($__internal_79f288578450bf662d16ff6dc3827cae6b8d7d39e8a486981a27ca62b09da661_prof);

        
        $__internal_9f206873d325d732e9c035643acd6cec5f15ac6fd5cc4dfef2dbf8d02fc293b2->leave($__internal_9f206873d325d732e9c035643acd6cec5f15ac6fd5cc4dfef2dbf8d02fc293b2_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_04abbe2e426ce2573d48d00faab9f88693e24df1da7a21cd4a9c70ed712e473b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04abbe2e426ce2573d48d00faab9f88693e24df1da7a21cd4a9c70ed712e473b->enter($__internal_04abbe2e426ce2573d48d00faab9f88693e24df1da7a21cd4a9c70ed712e473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c6e50724cb2458b657b3c94edd1db340fd7b2b7b76b7bac77c4aa286978ff629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e50724cb2458b657b3c94edd1db340fd7b2b7b76b7bac77c4aa286978ff629->enter($__internal_c6e50724cb2458b657b3c94edd1db340fd7b2b7b76b7bac77c4aa286978ff629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c6e50724cb2458b657b3c94edd1db340fd7b2b7b76b7bac77c4aa286978ff629->leave($__internal_c6e50724cb2458b657b3c94edd1db340fd7b2b7b76b7bac77c4aa286978ff629_prof);

        
        $__internal_04abbe2e426ce2573d48d00faab9f88693e24df1da7a21cd4a9c70ed712e473b->leave($__internal_04abbe2e426ce2573d48d00faab9f88693e24df1da7a21cd4a9c70ed712e473b_prof);

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
