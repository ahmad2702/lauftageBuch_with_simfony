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
        $__internal_621f197e285146b16f479979f0a688c48584d1da735488e6288ccb3514de9615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621f197e285146b16f479979f0a688c48584d1da735488e6288ccb3514de9615->enter($__internal_621f197e285146b16f479979f0a688c48584d1da735488e6288ccb3514de9615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        $__internal_d65184b66c38f7f74f21148a2d7c8bb92e54eaac35c2fdc42d60044898d902a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65184b66c38f7f74f21148a2d7c8bb92e54eaac35c2fdc42d60044898d902a9->enter($__internal_d65184b66c38f7f74f21148a2d7c8bb92e54eaac35c2fdc42d60044898d902a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

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
        
        $__internal_621f197e285146b16f479979f0a688c48584d1da735488e6288ccb3514de9615->leave($__internal_621f197e285146b16f479979f0a688c48584d1da735488e6288ccb3514de9615_prof);

        
        $__internal_d65184b66c38f7f74f21148a2d7c8bb92e54eaac35c2fdc42d60044898d902a9->leave($__internal_d65184b66c38f7f74f21148a2d7c8bb92e54eaac35c2fdc42d60044898d902a9_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_e64dc418e719978aeabf745240b557eb3e8e91171d9ee2886023f41be19ecd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64dc418e719978aeabf745240b557eb3e8e91171d9ee2886023f41be19ecd0a->enter($__internal_e64dc418e719978aeabf745240b557eb3e8e91171d9ee2886023f41be19ecd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_956e7bcb208920c700beaa0912fdf86243956df500159c6c6933b8eee3a988e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956e7bcb208920c700beaa0912fdf86243956df500159c6c6933b8eee3a988e6->enter($__internal_956e7bcb208920c700beaa0912fdf86243956df500159c6c6933b8eee3a988e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_956e7bcb208920c700beaa0912fdf86243956df500159c6c6933b8eee3a988e6->leave($__internal_956e7bcb208920c700beaa0912fdf86243956df500159c6c6933b8eee3a988e6_prof);

        
        $__internal_e64dc418e719978aeabf745240b557eb3e8e91171d9ee2886023f41be19ecd0a->leave($__internal_e64dc418e719978aeabf745240b557eb3e8e91171d9ee2886023f41be19ecd0a_prof);

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
