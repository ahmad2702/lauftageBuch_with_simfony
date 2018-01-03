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
        $__internal_f223e4babce363b0d7a163c9ac9685c83851a6b6e633615678d339d8c57f7b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f223e4babce363b0d7a163c9ac9685c83851a6b6e633615678d339d8c57f7b96->enter($__internal_f223e4babce363b0d7a163c9ac9685c83851a6b6e633615678d339d8c57f7b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_32f77979d9b6cc54c2c51a4a4e2bcfd4f951657fff52f687ba48a04210f47666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f77979d9b6cc54c2c51a4a4e2bcfd4f951657fff52f687ba48a04210f47666->enter($__internal_32f77979d9b6cc54c2c51a4a4e2bcfd4f951657fff52f687ba48a04210f47666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f223e4babce363b0d7a163c9ac9685c83851a6b6e633615678d339d8c57f7b96->leave($__internal_f223e4babce363b0d7a163c9ac9685c83851a6b6e633615678d339d8c57f7b96_prof);

        
        $__internal_32f77979d9b6cc54c2c51a4a4e2bcfd4f951657fff52f687ba48a04210f47666->leave($__internal_32f77979d9b6cc54c2c51a4a4e2bcfd4f951657fff52f687ba48a04210f47666_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5aa530ad3389a5f4d2905a7ae997ae0bad39dd8503c8a1476a290a8223e2c0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa530ad3389a5f4d2905a7ae997ae0bad39dd8503c8a1476a290a8223e2c0db->enter($__internal_5aa530ad3389a5f4d2905a7ae997ae0bad39dd8503c8a1476a290a8223e2c0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e0b2c984493d41050909f9b7a3c2ceead68eb70b06657328c7e076c7634c305e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b2c984493d41050909f9b7a3c2ceead68eb70b06657328c7e076c7634c305e->enter($__internal_e0b2c984493d41050909f9b7a3c2ceead68eb70b06657328c7e076c7634c305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e0b2c984493d41050909f9b7a3c2ceead68eb70b06657328c7e076c7634c305e->leave($__internal_e0b2c984493d41050909f9b7a3c2ceead68eb70b06657328c7e076c7634c305e_prof);

        
        $__internal_5aa530ad3389a5f4d2905a7ae997ae0bad39dd8503c8a1476a290a8223e2c0db->leave($__internal_5aa530ad3389a5f4d2905a7ae997ae0bad39dd8503c8a1476a290a8223e2c0db_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c30d9cc937e28cd7e9d4f7144d691f0e9586709af0eed5f35e30265a71282321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30d9cc937e28cd7e9d4f7144d691f0e9586709af0eed5f35e30265a71282321->enter($__internal_c30d9cc937e28cd7e9d4f7144d691f0e9586709af0eed5f35e30265a71282321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0ce28436372e3bfbd1ad5462a341d3e1deffcf7df857531eb3af3c94128a7257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce28436372e3bfbd1ad5462a341d3e1deffcf7df857531eb3af3c94128a7257->enter($__internal_0ce28436372e3bfbd1ad5462a341d3e1deffcf7df857531eb3af3c94128a7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_0ce28436372e3bfbd1ad5462a341d3e1deffcf7df857531eb3af3c94128a7257->leave($__internal_0ce28436372e3bfbd1ad5462a341d3e1deffcf7df857531eb3af3c94128a7257_prof);

        
        $__internal_c30d9cc937e28cd7e9d4f7144d691f0e9586709af0eed5f35e30265a71282321->leave($__internal_c30d9cc937e28cd7e9d4f7144d691f0e9586709af0eed5f35e30265a71282321_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_087d270cf64d254861d915f5fe1df98e5591a40c3ee4dc7f382e71802a282a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087d270cf64d254861d915f5fe1df98e5591a40c3ee4dc7f382e71802a282a9e->enter($__internal_087d270cf64d254861d915f5fe1df98e5591a40c3ee4dc7f382e71802a282a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ff80d5e9a332869cf600da825c935dc28b698ba2197fabdfd74d7ee430442df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff80d5e9a332869cf600da825c935dc28b698ba2197fabdfd74d7ee430442df4->enter($__internal_ff80d5e9a332869cf600da825c935dc28b698ba2197fabdfd74d7ee430442df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ff80d5e9a332869cf600da825c935dc28b698ba2197fabdfd74d7ee430442df4->leave($__internal_ff80d5e9a332869cf600da825c935dc28b698ba2197fabdfd74d7ee430442df4_prof);

        
        $__internal_087d270cf64d254861d915f5fe1df98e5591a40c3ee4dc7f382e71802a282a9e->leave($__internal_087d270cf64d254861d915f5fe1df98e5591a40c3ee4dc7f382e71802a282a9e_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1321f552d79e414278fdad6f388edab6cdd9d63af95827e1ec364611cb764b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1321f552d79e414278fdad6f388edab6cdd9d63af95827e1ec364611cb764b2f->enter($__internal_1321f552d79e414278fdad6f388edab6cdd9d63af95827e1ec364611cb764b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e509b76e52ec39e6acf921d57f0354aa615a2918531f88cbf6e010d4b9066323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e509b76e52ec39e6acf921d57f0354aa615a2918531f88cbf6e010d4b9066323->enter($__internal_e509b76e52ec39e6acf921d57f0354aa615a2918531f88cbf6e010d4b9066323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e509b76e52ec39e6acf921d57f0354aa615a2918531f88cbf6e010d4b9066323->leave($__internal_e509b76e52ec39e6acf921d57f0354aa615a2918531f88cbf6e010d4b9066323_prof);

        
        $__internal_1321f552d79e414278fdad6f388edab6cdd9d63af95827e1ec364611cb764b2f->leave($__internal_1321f552d79e414278fdad6f388edab6cdd9d63af95827e1ec364611cb764b2f_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b76b77a07e5b32f189b45c82a8c3f768f702c719def5f35fe6800ff0737ccd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76b77a07e5b32f189b45c82a8c3f768f702c719def5f35fe6800ff0737ccd3c->enter($__internal_b76b77a07e5b32f189b45c82a8c3f768f702c719def5f35fe6800ff0737ccd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_997302d04022d4457fef8dcfe3d4c2847dc8d9328901e8753b8850f7e4c8d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997302d04022d4457fef8dcfe3d4c2847dc8d9328901e8753b8850f7e4c8d234->enter($__internal_997302d04022d4457fef8dcfe3d4c2847dc8d9328901e8753b8850f7e4c8d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_997302d04022d4457fef8dcfe3d4c2847dc8d9328901e8753b8850f7e4c8d234->leave($__internal_997302d04022d4457fef8dcfe3d4c2847dc8d9328901e8753b8850f7e4c8d234_prof);

        
        $__internal_b76b77a07e5b32f189b45c82a8c3f768f702c719def5f35fe6800ff0737ccd3c->leave($__internal_b76b77a07e5b32f189b45c82a8c3f768f702c719def5f35fe6800ff0737ccd3c_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2e2530d208972dde994de49aeccab65d2591c1cce4f8a377b5db9d2beaee4f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2530d208972dde994de49aeccab65d2591c1cce4f8a377b5db9d2beaee4f2d->enter($__internal_2e2530d208972dde994de49aeccab65d2591c1cce4f8a377b5db9d2beaee4f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b9027fa5a73e2ea2f998ba930693708b6d3086bdb822e9d2664de188823ebadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9027fa5a73e2ea2f998ba930693708b6d3086bdb822e9d2664de188823ebadd->enter($__internal_b9027fa5a73e2ea2f998ba930693708b6d3086bdb822e9d2664de188823ebadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_b9027fa5a73e2ea2f998ba930693708b6d3086bdb822e9d2664de188823ebadd->leave($__internal_b9027fa5a73e2ea2f998ba930693708b6d3086bdb822e9d2664de188823ebadd_prof);

        
        $__internal_2e2530d208972dde994de49aeccab65d2591c1cce4f8a377b5db9d2beaee4f2d->leave($__internal_2e2530d208972dde994de49aeccab65d2591c1cce4f8a377b5db9d2beaee4f2d_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c8ed32902b0ae33ea5287e4b853b0188557f6e5b352d6d69f7aea8519b75ea14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ed32902b0ae33ea5287e4b853b0188557f6e5b352d6d69f7aea8519b75ea14->enter($__internal_c8ed32902b0ae33ea5287e4b853b0188557f6e5b352d6d69f7aea8519b75ea14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5b3009300bd8d21bbe6536a9ca261a90ee7f9cb87426db5a7b0f697dab1f1c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3009300bd8d21bbe6536a9ca261a90ee7f9cb87426db5a7b0f697dab1f1c45->enter($__internal_5b3009300bd8d21bbe6536a9ca261a90ee7f9cb87426db5a7b0f697dab1f1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_5b3009300bd8d21bbe6536a9ca261a90ee7f9cb87426db5a7b0f697dab1f1c45->leave($__internal_5b3009300bd8d21bbe6536a9ca261a90ee7f9cb87426db5a7b0f697dab1f1c45_prof);

        
        $__internal_c8ed32902b0ae33ea5287e4b853b0188557f6e5b352d6d69f7aea8519b75ea14->leave($__internal_c8ed32902b0ae33ea5287e4b853b0188557f6e5b352d6d69f7aea8519b75ea14_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4574a86c1f5711a2ac22bad508ececa64eefe16a2f80e878d983b790512097ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4574a86c1f5711a2ac22bad508ececa64eefe16a2f80e878d983b790512097ea->enter($__internal_4574a86c1f5711a2ac22bad508ececa64eefe16a2f80e878d983b790512097ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8342e8aecdc8963342b38f571ea9d38a2411f4c8908662680759cd4a0a3b17f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8342e8aecdc8963342b38f571ea9d38a2411f4c8908662680759cd4a0a3b17f1->enter($__internal_8342e8aecdc8963342b38f571ea9d38a2411f4c8908662680759cd4a0a3b17f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_8342e8aecdc8963342b38f571ea9d38a2411f4c8908662680759cd4a0a3b17f1->leave($__internal_8342e8aecdc8963342b38f571ea9d38a2411f4c8908662680759cd4a0a3b17f1_prof);

        
        $__internal_4574a86c1f5711a2ac22bad508ececa64eefe16a2f80e878d983b790512097ea->leave($__internal_4574a86c1f5711a2ac22bad508ececa64eefe16a2f80e878d983b790512097ea_prof);

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
