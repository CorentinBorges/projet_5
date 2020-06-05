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

/* users.html.twig */
class __TwigTemplate_eb9d1a52ec6ebcca5d244d8cd7536197c1962606e602aea5ea1c937bde69313e extends Template
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
        return "adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("adminLayout.html.twig", "users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"col-12 mt-3 text-center pl-md-5 pl-sm-2 col-sm-6 mx-auto\">
        <h2>Utilisateurs non validés</h2>
        <a href=\"/projet_5/public/index.php?route=validUsers\" class=\"text-primary\">Voir les utilisateurs validés</a>
    </div>

    <div class=\"container mt-5\">
    <form class=\" mx-auto col-lg-8\" method=\"post\" action=\"/projet_5/public/index.php?route=users\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "            <div class=\"form-group container checkComBox row\">
                <input class='checkValid' type=\"checkbox\" id=\"box-";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" name=\"com-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\"/>
                <label for=\"box-";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"ml-2 col-8\">
                    <u class=\"user-list\">
                        <li><span class=\"font-weight-bold\" >Nom : </span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
                        <li><span class=\"font-weight-bold\" >Prénom : </span>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 16), "html", null, true);
            echo "</li>
                        <li><span class=\"font-weight-bold\" >Pseudo : </span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
                        <li><span class=\"font-weight-bold\" >Mail : </span>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "mail", [], "any", false, false, false, 18), "html", null, true);
            echo "</li>
                    </u>
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"all\"  value=\"all\"/>
            <label for=\"all\">Tout sélectionner</label>
        </div>
        <div class=\"form-group text-center\">
            <button type=\"submit\" name=\"validComments\" value=\"valid\" class=\"btn btn-success\">Valider la sélection</button>
            <button type=\"button\" data-toggle=\"modal\" data-target=\"#delModal\" class=\" mt-3 mt-sm-0 btn btn-danger\">Supprimer la sélection</button>
        </div>

        <div class=\"modal fade\" tabindex=\"-1\" id=\"delModal\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Article: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        Êtes vous sûre de vouloir supprimer ces commentaires?
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\"  class=\"btn btn-success\" data-dismiss=\"modal\">Non</button>
                        <button value=\"delete\" name=\"delUsers\" type=\"submit\" class=\" btn btn-danger del-btn\">Oui</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    </div>

    ";
        // line 56
        if ((isset($context["userValid"]) || array_key_exists("userValid", $context))) {
            // line 57
            echo "        <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content confirm-comment\">

                    <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                    </button>

                    <div class=\"modal-body text-center\">
                        <p>Les utilisateurs ont étés validés</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        } elseif (        // line 71
(isset($context["userDel"]) || array_key_exists("userDel", $context))) {
            // line 72
            echo "        <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content confirm-comment\">

                    <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                    </button>

                    <div class=\"modal-body text-center\">
                        <p>Les utilistateurs ont été supprimés</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 72,  158 => 71,  142 => 57,  140 => 56,  118 => 37,  102 => 23,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  74 => 13,  66 => 12,  63 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "users.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\users.html.twig");
    }
}
