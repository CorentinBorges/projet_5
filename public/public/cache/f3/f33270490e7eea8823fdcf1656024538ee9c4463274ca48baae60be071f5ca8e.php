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

/* post.html.twig */
class __TwigTemplate_1712cc3b4629214797a98b77cc118598cb30d1fd806d681113c12bd8bf455de1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'jumbotron' => [$this, 'block_jumbotron'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_jumbotron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <header class=\"masthead postsPic\"   alt='Machine à écrire' id=\"postPic\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "chapo", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
                    <p>Auteur: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 12), "html", null, true);
        echo " <i>Ecrit le: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "dateCreation", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "dateModif", [], "any", false, false, false, 12))) {
            echo " Modifié le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "dateModif", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
        }
        echo "</i></p>
                </div>
            </div>
        </div>
    </header>

";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 26), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </article>


    ";
        // line 33
        if ((isset($context["pseudo"]) || array_key_exists("pseudo", $context))) {
            // line 34
            echo "        <hr>
        <div class=\"flex-column mx-auto text-center\">
            <form method='post' action='/projet_5/public/index.php?route=post&postId=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "'>
                <label for='comment' id=\"comment-label\" >Commentaire:<br/></label>
                <textarea  maxlength=\"250\" name=\"comment\" id='comment' required></textarea>
                <div class=\"form-group col-5 col-md-12 mt-3 mx-auto\" >
                    <button type=\"submit\" name='submitComment' value=\"'submit\" class=\"btn btn-primary\" id=\"send\">Envoyer</button>
                </div>
            </form>
        </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((isset($context["commentSent"]) || array_key_exists("commentSent", $context))) {
            // line 47
            echo "        <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content confirm-comment\">

                    <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                    </button>

                    <div class=\"modal-body \">
                        <p>Votre commentaire à été envoyé, il est en attente de validation</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 62
        echo "    ";
        if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
            // line 63
            echo "        <div class=\"modal box-comment-bg fade show pt-5  \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\" style=\"display: block; padding-right: 19px;\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content error-comment\">

                    <button type=\"button\" class=\"close text-right mr-3\" id='confirm-cross-btn' data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\" class='confirm-cross w-100'>&times;</span>
                    </button>

                    <div class=\"modal-body ml-3\">
                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 73
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ((isset($context["comments"]) || array_key_exists("comments", $context))) {
            // line 82
            echo "        <hr>
        <div class=\"container\">
            <p class=\"mb-2\">Commentaires:</p>
            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 86
                echo "                <div class=\"border border-dark container\">
                    <p>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 87), "html", null, true);
                echo " <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 87), "html", null, true);
                echo "</i> </p>
                    <p>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 88), "html", null, true);
                echo "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
    ";
        }
        // line 93
        echo "

";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 93,  212 => 91,  203 => 88,  197 => 87,  194 => 86,  190 => 85,  185 => 82,  183 => 81,  180 => 80,  173 => 75,  164 => 73,  160 => 72,  149 => 63,  146 => 62,  129 => 47,  127 => 46,  124 => 45,  112 => 36,  108 => 34,  106 => 33,  96 => 26,  90 => 22,  86 => 21,  67 => 12,  63 => 11,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\post.html.twig");
    }
}
