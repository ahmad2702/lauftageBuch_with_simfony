<?php

/* base.php.twig */
class __TwigTemplate_2246b39a3a7b509f9a72e498d6080dfe02b4affdaead78f83a649bb5a9435024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445379748f9132aa1d381602946dd283932e8f56ca11dfdb6c4b69b698b90a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445379748f9132aa1d381602946dd283932e8f56ca11dfdb6c4b69b698b90a0b->enter($__internal_445379748f9132aa1d381602946dd283932e8f56ca11dfdb6c4b69b698b90a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        $__internal_4d30079e42842a84d31dcc7423aa12cf6bc95c0badea2ab09e9287e1e1f51ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d30079e42842a84d31dcc7423aa12cf6bc95c0badea2ab09e9287e1e1f51ea7->enter($__internal_4d30079e42842a84d31dcc7423aa12cf6bc95c0badea2ab09e9287e1e1f51ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"http://www.voicelync.com/images/icons/kHqsC.png\">

    <title>Lauftagebuch</title>

    <!-- Meine CSS -->
    <link href=\"css/my-css.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link href=\"http://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js\"></script>

</head>

<body>


<div id=\"container\">


    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">

        ";
        // line 36
        echo twig_include($this->env, $context, "_navbar.php.twig");
        echo "

    </nav>




    <!-- Middle -->
    <div class=\"web-element\">
        <section class=\"middle-block\">

            ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
        </section>
    </div>






    <!-- Footer -->
    <footer class=\"footer\">

        ";
        // line 60
        echo twig_include($this->env, $context, "_footer.php.twig");
        echo "

    </footer>



</div>



</body>
</html>
";
        
        $__internal_445379748f9132aa1d381602946dd283932e8f56ca11dfdb6c4b69b698b90a0b->leave($__internal_445379748f9132aa1d381602946dd283932e8f56ca11dfdb6c4b69b698b90a0b_prof);

        
        $__internal_4d30079e42842a84d31dcc7423aa12cf6bc95c0badea2ab09e9287e1e1f51ea7->leave($__internal_4d30079e42842a84d31dcc7423aa12cf6bc95c0badea2ab09e9287e1e1f51ea7_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_e9905daf343b6e7496954433ff3afb560c386632379fcd814a11e05cf52a6732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9905daf343b6e7496954433ff3afb560c386632379fcd814a11e05cf52a6732->enter($__internal_e9905daf343b6e7496954433ff3afb560c386632379fcd814a11e05cf52a6732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_66579374ebabbccdcb09d44362e27984474bbf2d0fd42edf68d06b71994a0d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66579374ebabbccdcb09d44362e27984474bbf2d0fd42edf68d06b71994a0d97->enter($__internal_66579374ebabbccdcb09d44362e27984474bbf2d0fd42edf68d06b71994a0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_66579374ebabbccdcb09d44362e27984474bbf2d0fd42edf68d06b71994a0d97->leave($__internal_66579374ebabbccdcb09d44362e27984474bbf2d0fd42edf68d06b71994a0d97_prof);

        
        $__internal_e9905daf343b6e7496954433ff3afb560c386632379fcd814a11e05cf52a6732->leave($__internal_e9905daf343b6e7496954433ff3afb560c386632379fcd814a11e05cf52a6732_prof);

    }

    public function getTemplateName()
    {
        return "base.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  93 => 60,  79 => 48,  77 => 47,  63 => 36,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"http://www.voicelync.com/images/icons/kHqsC.png\">

    <title>Lauftagebuch</title>

    <!-- Meine CSS -->
    <link href=\"css/my-css.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link href=\"http://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js\"></script>

</head>

<body>


<div id=\"container\">


    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">

        {{ include ('_navbar.php.twig' ) }}

    </nav>




    <!-- Middle -->
    <div class=\"web-element\">
        <section class=\"middle-block\">

            {% block content %}{% endblock %}

        </section>
    </div>






    <!-- Footer -->
    <footer class=\"footer\">

        {{ include ('_footer.php.twig') }}

    </footer>



</div>



</body>
</html>
", "base.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_lauftagebuch/templates/base.php.twig");
    }
}
