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

/* noValidComments.html.twig */
class __TwigTemplate_1e8969a4c74a51518b37c0243dca2af86cededb179f3502a80e8108e865aeb32 extends Template
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
        $this->parent = $this->loadTemplate("adminLayout.html.twig", "noValidComments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"col-12 mt-3 text-center pl-md-5 pl-sm-2 col-sm-6 mx-auto\">
        <h2>Commentaires non validés</h2>
        <a href=\"/projet_5/public/index.php?route=validCom\" class=\"text-primary\">Voir les commentaires validés</a>
    </div>

    <div class=\"container mt-5\">
        <form class=\" mx-auto col-lg-8\" method=\"post\" action=\"/projet_5/public/index.php?route=users\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 11
            echo "                <div class=\"form-group container checkComBox row\">
                    <input class='checkValid' type=\"checkbox\" id=\"box-";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" name=\"com-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\"/>
                    <label for=\"box-";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"ml-2 col-8\">
                        <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 14), "html", null, true);
            echo " <span class=\"font-italic\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 14), "html", null, true);
            echo "</span></p>
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    </label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"all\"  value=\"all\"/>
                <label for=\"all\">Tout sélectionner</label>
            </div>
            <div class=\"form-group text-center\">
                <button type=\"submit\" name=\"validComments\" value=\"valid\" class=\"btn btn-success\">Valider la sélection</button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#delModal\" class=\"btn btn-danger mt-3 mt-sm-0\">Supprimer la sélection</button>
            </div>

            <div class=\"modal fade\" tabindex=\"-1\" id=\"delModal\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Article: ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 34), "html", null, true);
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
                            <button value=\"delete\" name=\"delComments\" type=\"submit\" class=\" btn btn-danger del-btn\">Oui</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    ";
        // line 53
        if ((isset($context["commentValid"]) || array_key_exists("commentValid", $context))) {
            // line 54
            echo "        <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content confirm-comment\">

                    <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                    </button>

                    <div class=\"modal-body text-center\">
                        <p>Les commentaires ont été validés</p>
                    </div>
                </div>
            </div>
        </div>
        ";
        } elseif (        // line 68
(isset($context["commentDel"]) || array_key_exists("commentDel", $context))) {
            // line 69
            echo "            <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content confirm-comment\">

                        <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                        </button>

                        <div class=\"modal-body text-center\">
                            <p>Les commentaires ont été supprimés</p>
                        </div>
                    </div>
                </div>
            </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "noValidComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 69,  151 => 68,  135 => 54,  133 => 53,  111 => 34,  94 => 19,  84 => 15,  78 => 14,  74 => 13,  66 => 12,  63 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "noValidComments.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\noValidComments.html.twig");
    }
}
