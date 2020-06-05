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

/* layout.html.twig */
class __TwigTemplate_93ff56a63137af82b3f1497463b5cb6dd853e4c2080a1718e127d45d69f3ec7b extends Template
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
<html lang=\"en\">

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
";
        // line 28
        if ((isset($context["pseudo"]) || array_key_exists("pseudo", $context))) {
            // line 29
            echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <img id='nav-pic' src='public/pictures/profil.png' alt='Corentin borges'/>
        <a class=\"navbar-brand \" href=\"/projet_5/public/\">Corentin Borges</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/\">Acceuil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=posts\">Posts</a>
                </li>
                <div class=\"nav-devider-connect d-none d-lg-block mt-1\"></div>
                <li class=\"nav-item \">
                    <span id='pseudo-nav' class='d-none d-lg-block ml-3'>";
            // line 47
            echo twig_escape_filter($this->env, ($context["pseudo"] ?? null), "html", null, true);
            echo "</span>
                    <a class=\"nav-link\" id='disconnect' href=\"/projet_5/public/index.php?route=disconnect\">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        } else {
            // line 55
            echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <img id='nav-pic' src='public\\pictures\\profil.png' alt='Corentin borges'/>
        <a class=\"navbar-brand \" href=\"/projet_5/public/\">Corentin Borges</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/\">Acceuil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=posts\">Posts</a>
                </li>
                <div class=\"nav-devider mt-1\"></div>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=login\">Connexion</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=signIn\">s'enregistrer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        }
        // line 83
        echo "<!-- Page Header -->
";
        // line 84
        if (        $this->hasBlock("jumbotron", $context, $blocks)) {
            // line 85
            $this->displayBlock("jumbotron", $context, $blocks);
            echo "
";
        } else {
            // line 87
            echo "<div class='mt-5 pt-5'></div>
";
        }
        // line 89
        echo "

";
        // line 91
        $this->displayBlock("content", $context, $blocks);
        echo "

<div class='CGU CGU-container'>
    <object type=\"application/pdf\" id='CV' data=\"/projet_5/public/docs/CGU.pdf\" ></object>
</div>
<hr class=\"mt-5\">
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"col-lg-4 plan d-none d-lg-block col-md-3 \">
                <p>Plan du site:</p>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/\">Acceuil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=posts\">Posts</a>
                </li>
                <button class=\"nav-link CGU-btn\">Conditions générales d'utilisation</button>
            </ul>
            <div class=\"col-lg-4 col-12 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"mailto:cb.corentinborges@gmail.com\" target='_blanck'>
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fas fa-envelope fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://www.linkedin.com/in/corentin-borges/\" target='_blanck'>
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-linkedin-in fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/CorentinBorges\" target='_blanck'>
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Corentin Borges</p>
            </div>
            <ul class=\"plan d-lg-none text-center mt-3 d-block col-lg-3 \">
                <p>Plan du site:</p>
                <li class=\"nav-item list-group-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/\">Acceuil</a>
                </li>
                <li class=\"nav-item list-group-item\">
                    <a class=\"nav-link\" href=\"/projet_5/public/index.php?route=posts\">Posts</a>
                </li>
                <button class=\"nav-link CGU-btn\">Conditions générales d'utilisation </button>
            </ul>
            <div class='col-lg-3 mx-auto text-center mt-5'>
                ";
        // line 150
        if ((isset($context["admin"]) || array_key_exists("admin", $context))) {
            // line 151
            echo "                <a href=\"/Projet_5/public/index.php?route=adminHome\" class='config-link'>Configurer le site</a>
                ";
        }
        // line 153
        echo "            </div>
        </div>
    </div>
</footer>

";
        // line 159
        echo "<script src=\"public/js/jquery3.5.1.js\"></script>
<script src=\"public/js/bootstrap.bundle.min.js\"></script>
<script src=\"public/js/all.min.js\"></script>
<script src=\"public/js/clean-blog.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 159,  217 => 153,  213 => 151,  211 => 150,  149 => 91,  145 => 89,  141 => 87,  136 => 85,  134 => 84,  131 => 83,  101 => 55,  90 => 47,  70 => 29,  68 => 28,  57 => 19,  54 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\layout.html.twig");
    }
}
