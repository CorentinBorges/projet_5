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

/* adminPosts.html.twig */
class __TwigTemplate_5b97e9883f99f45e782bc6b0729380d86cf0ea78534583b5165cdbe5b7767cbc extends Template
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
        $this->parent = $this->loadTemplate("adminLayout.html.twig", "adminPosts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"col-12 mt-3 text-center pl-md-5 pl-sm-2 col-sm-6 mx-auto\">
        <h2>Articles</h2>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto mt-3 mb-5\">
                <a href=\"/projet_5/public/index.php?route=addPost\" class=\"add-post\">
                    <i  class=\"mr-2 fas fa-plus-circle fa-lg\" ></i>
                    Ajouter un article
                </a>
            </div>
            <hr/>

            <div class=\"col-lg-8 col-md-10 mx-auto\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "
                    <div class=\"post-preview\">
                        <h2 class=\"post-title\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        </h2>
                        <h4 class=\"post-subtitle\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "chapo", [], "any", false, false, false, 27), "html", null, true);
            echo "
                        </h4>
                        <p class=\"post-meta\">Ecrit par ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 29), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["post"], "dateModif", [], "any", false, false, false, 29))) {
                echo " Modifié le ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dateModif", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
            }
            echo " </p>
                        <div class=\"text-right\">
                            <a href=\"/projet_5/public/index.php?route=editPost&amp;postId=";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"mr-3 edit-post\">Modifier</a>
                            <button type=\"button\" data-toggle=\"modal\" data-target=\"";
            // line 32
            echo twig_escape_filter($this->env, ("#del-" . twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32)), "html", null, true);
            echo "\" class=\"del-post\">Supprimer</button>
                        </div>
                        <form method=\"post\" action=\"/projet_5/public/index.php?route=adminPosts&amp;postId=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                            <div class=\"modal fade\" id=\"del-";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Article: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Êtes vous sûre de vouloir supprimer cet article?
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" name=\"edit\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, ("edit-" . twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48)), "html", null, true);
            echo "\" class=\"btn btn-success\" data-dismiss=\"modal\">Non</button>
                                            <button value=\"delete\" name=\"delete\" type=\"submit\" class=\" btn btn-danger del-btn\">Oui</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "adminPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  133 => 48,  121 => 39,  114 => 35,  110 => 34,  105 => 32,  101 => 31,  88 => 29,  83 => 27,  77 => 24,  72 => 21,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adminPosts.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\adminPosts.html.twig");
    }
}
