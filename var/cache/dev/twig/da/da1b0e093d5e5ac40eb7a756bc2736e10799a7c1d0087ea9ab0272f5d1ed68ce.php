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
        $__internal_7d649c9fb0495f40c4640cf699952acc49f87699d5eff596574d8b97bf49ca8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d649c9fb0495f40c4640cf699952acc49f87699d5eff596574d8b97bf49ca8b->enter($__internal_7d649c9fb0495f40c4640cf699952acc49f87699d5eff596574d8b97bf49ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_945ce4745665a7057637760bc32c58abacd8f8495a37f91c9c15a6bc52d5f636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945ce4745665a7057637760bc32c58abacd8f8495a37f91c9c15a6bc52d5f636->enter($__internal_945ce4745665a7057637760bc32c58abacd8f8495a37f91c9c15a6bc52d5f636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_7d649c9fb0495f40c4640cf699952acc49f87699d5eff596574d8b97bf49ca8b->leave($__internal_7d649c9fb0495f40c4640cf699952acc49f87699d5eff596574d8b97bf49ca8b_prof);

        
        $__internal_945ce4745665a7057637760bc32c58abacd8f8495a37f91c9c15a6bc52d5f636->leave($__internal_945ce4745665a7057637760bc32c58abacd8f8495a37f91c9c15a6bc52d5f636_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_fc80c65afada2a81abdca2279ec2306a16fe08f5741e78f450f226d43bda2eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc80c65afada2a81abdca2279ec2306a16fe08f5741e78f450f226d43bda2eb4->enter($__internal_fc80c65afada2a81abdca2279ec2306a16fe08f5741e78f450f226d43bda2eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b90ce6bba57913d16b1b292bc3424d17c8f9b731ebf2b0af3313ef2b05d93a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90ce6bba57913d16b1b292bc3424d17c8f9b731ebf2b0af3313ef2b05d93a3f->enter($__internal_b90ce6bba57913d16b1b292bc3424d17c8f9b731ebf2b0af3313ef2b05d93a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_b90ce6bba57913d16b1b292bc3424d17c8f9b731ebf2b0af3313ef2b05d93a3f->leave($__internal_b90ce6bba57913d16b1b292bc3424d17c8f9b731ebf2b0af3313ef2b05d93a3f_prof);

        
        $__internal_fc80c65afada2a81abdca2279ec2306a16fe08f5741e78f450f226d43bda2eb4->leave($__internal_fc80c65afada2a81abdca2279ec2306a16fe08f5741e78f450f226d43bda2eb4_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1a2c9f69bf482150cdaa84e938abf990ad1a72c8953d7844b0439519953fc9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2c9f69bf482150cdaa84e938abf990ad1a72c8953d7844b0439519953fc9b9->enter($__internal_1a2c9f69bf482150cdaa84e938abf990ad1a72c8953d7844b0439519953fc9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_dc7691ba651ddd44ef311a317bb2ea83258e9c2dc01d26ac8a8a6a3db365f8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7691ba651ddd44ef311a317bb2ea83258e9c2dc01d26ac8a8a6a3db365f8ce->enter($__internal_dc7691ba651ddd44ef311a317bb2ea83258e9c2dc01d26ac8a8a6a3db365f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_dc7691ba651ddd44ef311a317bb2ea83258e9c2dc01d26ac8a8a6a3db365f8ce->leave($__internal_dc7691ba651ddd44ef311a317bb2ea83258e9c2dc01d26ac8a8a6a3db365f8ce_prof);

        
        $__internal_1a2c9f69bf482150cdaa84e938abf990ad1a72c8953d7844b0439519953fc9b9->leave($__internal_1a2c9f69bf482150cdaa84e938abf990ad1a72c8953d7844b0439519953fc9b9_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b099138515df03b71febc77d385b0dbcd0fc04aa58ad7040faa95e622f6f76c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b099138515df03b71febc77d385b0dbcd0fc04aa58ad7040faa95e622f6f76c3->enter($__internal_b099138515df03b71febc77d385b0dbcd0fc04aa58ad7040faa95e622f6f76c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d5d7210ad9b4f97c4a2d999ad0e1a2b473cf01b33d6aee3e4e3026785a507d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d7210ad9b4f97c4a2d999ad0e1a2b473cf01b33d6aee3e4e3026785a507d69->enter($__internal_d5d7210ad9b4f97c4a2d999ad0e1a2b473cf01b33d6aee3e4e3026785a507d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d5d7210ad9b4f97c4a2d999ad0e1a2b473cf01b33d6aee3e4e3026785a507d69->leave($__internal_d5d7210ad9b4f97c4a2d999ad0e1a2b473cf01b33d6aee3e4e3026785a507d69_prof);

        
        $__internal_b099138515df03b71febc77d385b0dbcd0fc04aa58ad7040faa95e622f6f76c3->leave($__internal_b099138515df03b71febc77d385b0dbcd0fc04aa58ad7040faa95e622f6f76c3_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f556d28b563ceabbf542053a45630269b2bd87cb9a48651d301b0d9b29255bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f556d28b563ceabbf542053a45630269b2bd87cb9a48651d301b0d9b29255bda->enter($__internal_f556d28b563ceabbf542053a45630269b2bd87cb9a48651d301b0d9b29255bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_0ab8332df0afc4b348cae0cfa72487f083df8fb3a9b5f88ac8c5beeb72bf8a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab8332df0afc4b348cae0cfa72487f083df8fb3a9b5f88ac8c5beeb72bf8a14->enter($__internal_0ab8332df0afc4b348cae0cfa72487f083df8fb3a9b5f88ac8c5beeb72bf8a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_0ab8332df0afc4b348cae0cfa72487f083df8fb3a9b5f88ac8c5beeb72bf8a14->leave($__internal_0ab8332df0afc4b348cae0cfa72487f083df8fb3a9b5f88ac8c5beeb72bf8a14_prof);

        
        $__internal_f556d28b563ceabbf542053a45630269b2bd87cb9a48651d301b0d9b29255bda->leave($__internal_f556d28b563ceabbf542053a45630269b2bd87cb9a48651d301b0d9b29255bda_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0637edeeed005a9060985ae0d92ad7802dfb5bde7b07b7e0cd85f9a9b6755295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0637edeeed005a9060985ae0d92ad7802dfb5bde7b07b7e0cd85f9a9b6755295->enter($__internal_0637edeeed005a9060985ae0d92ad7802dfb5bde7b07b7e0cd85f9a9b6755295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8389ba578dbf536ed09536f55b5f58adba6902e1ff7793acd79a39c2291e7ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8389ba578dbf536ed09536f55b5f58adba6902e1ff7793acd79a39c2291e7ca3->enter($__internal_8389ba578dbf536ed09536f55b5f58adba6902e1ff7793acd79a39c2291e7ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_8389ba578dbf536ed09536f55b5f58adba6902e1ff7793acd79a39c2291e7ca3->leave($__internal_8389ba578dbf536ed09536f55b5f58adba6902e1ff7793acd79a39c2291e7ca3_prof);

        
        $__internal_0637edeeed005a9060985ae0d92ad7802dfb5bde7b07b7e0cd85f9a9b6755295->leave($__internal_0637edeeed005a9060985ae0d92ad7802dfb5bde7b07b7e0cd85f9a9b6755295_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_696c15a97a8fc108337799cc7cbbfc43c476a0d877f0a073e8901151ea41e517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696c15a97a8fc108337799cc7cbbfc43c476a0d877f0a073e8901151ea41e517->enter($__internal_696c15a97a8fc108337799cc7cbbfc43c476a0d877f0a073e8901151ea41e517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_1dc115fa52b1c27c5e42cade45e8acbca4132b7d60d2cc95e3dadd625489bbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc115fa52b1c27c5e42cade45e8acbca4132b7d60d2cc95e3dadd625489bbdf->enter($__internal_1dc115fa52b1c27c5e42cade45e8acbca4132b7d60d2cc95e3dadd625489bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_1dc115fa52b1c27c5e42cade45e8acbca4132b7d60d2cc95e3dadd625489bbdf->leave($__internal_1dc115fa52b1c27c5e42cade45e8acbca4132b7d60d2cc95e3dadd625489bbdf_prof);

        
        $__internal_696c15a97a8fc108337799cc7cbbfc43c476a0d877f0a073e8901151ea41e517->leave($__internal_696c15a97a8fc108337799cc7cbbfc43c476a0d877f0a073e8901151ea41e517_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_57eec9bb9778d950a360861bdcf047501a668b357182717eee410cb7602a1dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57eec9bb9778d950a360861bdcf047501a668b357182717eee410cb7602a1dd3->enter($__internal_57eec9bb9778d950a360861bdcf047501a668b357182717eee410cb7602a1dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1020afa313e753754a18d8e4bcdc5ea3af8b33c1e37ed0784d2f1f425b822f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1020afa313e753754a18d8e4bcdc5ea3af8b33c1e37ed0784d2f1f425b822f85->enter($__internal_1020afa313e753754a18d8e4bcdc5ea3af8b33c1e37ed0784d2f1f425b822f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_1020afa313e753754a18d8e4bcdc5ea3af8b33c1e37ed0784d2f1f425b822f85->leave($__internal_1020afa313e753754a18d8e4bcdc5ea3af8b33c1e37ed0784d2f1f425b822f85_prof);

        
        $__internal_57eec9bb9778d950a360861bdcf047501a668b357182717eee410cb7602a1dd3->leave($__internal_57eec9bb9778d950a360861bdcf047501a668b357182717eee410cb7602a1dd3_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7c37a0dfb912ccd41ee7b0e660af6fe1d85be34a81f6bdfedfdf7ef3a54a46b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c37a0dfb912ccd41ee7b0e660af6fe1d85be34a81f6bdfedfdf7ef3a54a46b5->enter($__internal_7c37a0dfb912ccd41ee7b0e660af6fe1d85be34a81f6bdfedfdf7ef3a54a46b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5f0def8fe99fa3575b4e8b8a0176590708d098aff5f572905af9cd786ab2a0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0def8fe99fa3575b4e8b8a0176590708d098aff5f572905af9cd786ab2a0f3->enter($__internal_5f0def8fe99fa3575b4e8b8a0176590708d098aff5f572905af9cd786ab2a0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5f0def8fe99fa3575b4e8b8a0176590708d098aff5f572905af9cd786ab2a0f3->leave($__internal_5f0def8fe99fa3575b4e8b8a0176590708d098aff5f572905af9cd786ab2a0f3_prof);

        
        $__internal_7c37a0dfb912ccd41ee7b0e660af6fe1d85be34a81f6bdfedfdf7ef3a54a46b5->leave($__internal_7c37a0dfb912ccd41ee7b0e660af6fe1d85be34a81f6bdfedfdf7ef3a54a46b5_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
