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
        $__internal_2faea57b06b58982e98e4d357d5939547b3aeb36caa17904d4d790407d927860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faea57b06b58982e98e4d357d5939547b3aeb36caa17904d4d790407d927860->enter($__internal_2faea57b06b58982e98e4d357d5939547b3aeb36caa17904d4d790407d927860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        $__internal_7d1788632c41b2531c4aca874b992b342a5cacd0840200ad55ea8540afd2df47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1788632c41b2531c4aca874b992b342a5cacd0840200ad55ea8540afd2df47->enter($__internal_7d1788632c41b2531c4aca874b992b342a5cacd0840200ad55ea8540afd2df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

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
        
        $__internal_2faea57b06b58982e98e4d357d5939547b3aeb36caa17904d4d790407d927860->leave($__internal_2faea57b06b58982e98e4d357d5939547b3aeb36caa17904d4d790407d927860_prof);

        
        $__internal_7d1788632c41b2531c4aca874b992b342a5cacd0840200ad55ea8540afd2df47->leave($__internal_7d1788632c41b2531c4aca874b992b342a5cacd0840200ad55ea8540afd2df47_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f659ae06d43f73c0d936dd621000dac3dad0fff98a8574807433d3554ef8872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f659ae06d43f73c0d936dd621000dac3dad0fff98a8574807433d3554ef8872->enter($__internal_4f659ae06d43f73c0d936dd621000dac3dad0fff98a8574807433d3554ef8872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_30a3f41771f07da05a94afca9661517196464077b7a126a5fdec47ecd926d4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a3f41771f07da05a94afca9661517196464077b7a126a5fdec47ecd926d4f1->enter($__internal_30a3f41771f07da05a94afca9661517196464077b7a126a5fdec47ecd926d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_30a3f41771f07da05a94afca9661517196464077b7a126a5fdec47ecd926d4f1->leave($__internal_30a3f41771f07da05a94afca9661517196464077b7a126a5fdec47ecd926d4f1_prof);

        
        $__internal_4f659ae06d43f73c0d936dd621000dac3dad0fff98a8574807433d3554ef8872->leave($__internal_4f659ae06d43f73c0d936dd621000dac3dad0fff98a8574807433d3554ef8872_prof);

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
", "base.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe6/simofony_src/simfony_aufgabe/templates/base.php.twig");
    }
}
