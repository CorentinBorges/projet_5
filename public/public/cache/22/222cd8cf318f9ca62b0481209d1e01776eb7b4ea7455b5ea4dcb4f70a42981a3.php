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

/* login.html.twig */
class __TwigTemplate_a088f31429f1d3015dd41b30b12af736768fee905bc6739e535005c0020ac73c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 5
            echo "        <div class=\"alert alert-danger alert-dismissible fade show container col-10 col-lg-5 text-left\" role=\"alert\">
            <p>";
            // line 6
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 12
        echo "    <div class=\"col-lg-6 pl-sm-5 col-md-10 mx-auto\">
        <h2 class=\"text-center\">Connexion</h2>
        <form name=\"connexion\" id=\"contactForm\" method='post' action=\"/projet_5/public/index.php?route=login\">
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Nom d'utilisateur</label>
                    <input type=\"text\" class=\"form-control\" ";
        // line 18
        if (($context["alias"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["alias"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='pseudo' placeholder=\"Nom d'utilisateur\" id=\"pseudo\" required data-validation-required-message=\"veuillez entrer un nom d'utilisateur\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" name='pass' ";
        // line 25
        if ((isset($context["pass"]) || array_key_exists("pass", $context))) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["pass"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " placeholder=\"Mot de passe\" id=\"pass\" required data-validation-required-message=\"Veuillez indiquer un mot de passe\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"form-check mt-4\">
                <input type=\"checkbox\" ";
        // line 30
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo " class=\"form-check-input mt-2\"  name='cookie'  value='checked' id=\"cookie\" >
                <label for='cookie'  class=\"ml-2 form-check-label\">Rester connecter</label>
                <p class=\"help-block text-danger\"></p>
            </div>
            <div class=\"form-group col-5 mt-4 text-center col-md-12 mx-auto\" >
                <button type=\"submit\" value=\"submit\" name='submit' class=\"btn btn-primary\" id=\"sendMessageButton\">Envoyer</button>
            </div>
        </form>
    </div>


";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  87 => 25,  73 => 18,  65 => 12,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\login.html.twig");
    }
}
