<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* adminLayout.html.twig */
class __TwigTemplate_b05b1b18bdb02db272e964d210a8f68b69c1fb02a63440b61405ffc6ebb03c34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Corentin Borges\">

    <title>Corentin Borges</title>

    <base href=\"/projet_5/\"/>
    <!-- Bootstrap core CSS -->
    <link href=\"public/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 17
        echo "    <link href=\"public/css/fontawsome.css\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 19
        echo "    <link href=\"public/css/fonts/fonts.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom styles for this template -->
    <link href=\"public/css/clean-blog.css\" rel=\"stylesheet\">

</head>

<body>

<div id=\"top\"></div>
<button  class=\"arrow-link\" id=\"top-btn\"><i class=\"fas d-none d-md-block fa-angle-double-up\"></i></button>

<!--Page Nav-->
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\" >
        <img id='nav-pic' src='public/pictures/profil.png' alt='Corentin borges'/>
        <a class=\"navbar-brand \" href=\"/projet_5/public/\">Corentin Borges</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto \">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=adminHome\">Acceuil admin</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=adminPosts\">Posts</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=noValidComments\">Commentaires</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=users\">Utilisateurs</a>
                </li>
                <div class=\"nav-devider-connect d-none d-lg-block mt-1\"></div>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/\">Revenir au site</a>
                    <a class=\"nav-link\" id='disconnect' href=\"/projet_5/public/index.php?route=disconnect\">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
";
        // line 64
        if (        $this->hasBlock("jumbotron", $context, $blocks)) {
            // line 65
            echo "    ";
            $this->displayBlock("jumbotron", $context, $blocks);
            echo "
";
        } else {
            // line 67
            echo "    <div class='mt-5 pt-5'></div>
";
        }
        // line 69
        echo "

";
        // line 71
        $this->displayBlock("content", $context, $blocks);
        echo "

<div class=\"mt-5\"></div>


<!-- Bootstrap core JavaScript -->
<script src=\"public/js/jquery3.5.1.js\"></script>
<script src=\"public/js/bootstrap.bundle.min.js\"></script>
<script src=\"public/js/all.min.js\"></script>
<script src=\"public/js/clean-blog.js\"></script>
<div id=\"theTop\"></div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 71,  116 => 69,  112 => 67,  106 => 65,  104 => 64,  57 => 19,  54 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adminLayout.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\adminLayout.html.twig");
    }
}
