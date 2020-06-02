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

/* signIn.html.twig */
class __TwigTemplate_8f859f695ad01119cddaffa0538c3b55db3ba791abf2e759ed7dd7b2d12c868f extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "signIn.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 5
            echo "        <div class=\"alert alert-danger alert-dismissible fade show container col-10 col-lg-5 text-left\" role=\"alert\">

            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <ul>
                    <li> ";
                // line 9
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </li>
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 17
        echo "    <div class=\"col-12  pl-md-5 pl-sm-2 col-sm-6 mx-auto\">
        <h2 class=\"text-center\">Inscription</h2>

        <div id=\"CGU-container\" class='CGU' style=\"display: none\">
            <object type=\"application/pdf\" id='CV' data=\"Web/docs/CGU.pdf\" ></object>
        </div>
        <form name=\"sentMessage\" id=\"contactForm\" method='post' action=\"/projet_5/public/index.php?route=signIn\">
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Nom</label>
                    <input type=\"text\" class=\"form-control 1 ";
        // line 27
        echo twig_escape_filter($this->env, ($context["invalidName"] ?? null), "html", null, true);
        echo "\" name='name' ";
        if (($context["name"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " placeholder=\"Nom\" id=\"name\" required data-validation-required-message=\"veuillez entrer un nom\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Prénom</label>
                    <input type=\"text\" class=\"form-control 2 ";
        // line 34
        echo twig_escape_filter($this->env, ($context["invalidFirstName"] ?? null), "html", null, true);
        echo "\" name='firstName' ";
        if (($context["firstName"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " placeholder=\"Prénom\" id=\"firstName\" required data-validation-required-message=\"Veuillez indiquer un prénom\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Nom d'utilisateur</label>
                    <input type=\"text\" class=\"form-control 3 ";
        // line 41
        echo twig_escape_filter($this->env, ($context["invalidPseudo"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["alias"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["alias"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='pseudo' placeholder=\"Nom d'utilisateur\" id=\"pseudo\" required data-validation-required-message=\"Veuillez indiquer un bom d'utilisateur\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Mail</label>
                    <input type=\"email\" class=\"form-control 4 ";
        // line 48
        echo twig_escape_filter($this->env, ($context["invalidMail"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["mail"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='mail' placeholder=\"Mail\" id=\"email\" required data-validation-required-message=\"Veuillez indiquer votre adresse de messagerie\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Mot de passe</label>
                    <input type=\"password\" class=\"form-control 5 ";
        // line 55
        echo twig_escape_filter($this->env, ($context["invalidPass"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["pass"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["pass"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='pass' placeholder=\"Mot de passe\" id=\"pass\" required data-validation-required-message=\"Veuillez indiquer votre mot de passe\">
                </div>
                <small class=\"help-block text-secondary\">Le mot de passe doit comporter au moins 8 caractères, au moins une majuscule, une minuscule, un signe de ponctuation et un chiffre. </small>
            </div>
            <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                    <label>Confirmation du mot de passe</label>
                    <input type=\"password\" class=\"form-control 5 ";
        // line 62
        echo twig_escape_filter($this->env, ($context["invalidConfirm"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["confirmPass"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["confirmPass"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='confirmPass' placeholder=\"Confirmation mot de passe\" id=\"confirmPass\" required data-validation-required-message=\"Veuillez confirmer le mot de passe\">
                    <p class=\"help-block text-danger\"></p>
                </div>
            </div>
            <div class=\"form-check mt-4\">
                <input type=\"checkbox\" class=\"form-check-input mt-2 \"  name='CGU' value=\"ok\"  id=\"conditions\" >
                <label for='conditions'  class=\"form-check-label  ml-2\"> J'accepte les  <span class=\" CGU-btn \">conditions générales d'utilisation</span></label>
                <p class=\"help-block text-danger\"></p>
            </div>
            <br>
            <div id=\"success\"></div>
            <div class=\"form-group col-5 col-md-12 mx-auto\" >
                <button type=\"submit\" name='submitLog' class=\"btn btn-primary\" value=\"submit\" id=\"sendMessageButton\">Envoyer</button>
            </div>
        </form>

    </div>
";
    }

    public function getTemplateName()
    {
        return "signIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 62,  156 => 55,  140 => 48,  124 => 41,  108 => 34,  92 => 27,  80 => 17,  73 => 12,  64 => 9,  61 => 8,  57 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "signIn.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\signIn.html.twig");
    }
}
