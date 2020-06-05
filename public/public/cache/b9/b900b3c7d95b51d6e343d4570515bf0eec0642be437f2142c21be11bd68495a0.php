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

/* postForm.html.twig */
class __TwigTemplate_b4052073649f5b663116108af5d2af76fc93373b1de8401a3f7ae9bde994de77 extends Template
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
        $this->parent = $this->loadTemplate("adminLayout.html.twig", "postForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"col-12 mt-3 text-center pl-md-5 pl-sm-2 col-sm-6 mx-auto\">
        ";
        // line 5
        if ((isset($context["addPost"]) || array_key_exists("addPost", $context))) {
            // line 6
            echo "            <h2>Nouvel article</h2>
        ";
        } elseif (        // line 7
(isset($context["editPost"]) || array_key_exists("editPost", $context))) {
            // line 8
            echo "            <h2>Modifier l'article</h2>
        ";
        }
        // line 10
        echo "    </div>
    ";
        // line 11
        if (($context["errors"] ?? null)) {
            // line 12
            echo "        <div class=\"alert alert-danger alert-dismissible fade show container col-10 col-lg-5 text-left\" role=\"alert\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                <ul>
                    <li> ";
                // line 15
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </li>
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 23
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto mt-3\">
                ";
        // line 26
        if ((isset($context["addPost"]) || array_key_exists("addPost", $context))) {
            // line 27
            echo "                    <form method=\"post\" action=\"/projet_5/public/index.php?route=addPost\">
                ";
        }
        // line 29
        echo "                ";
        if ((isset($context["editPost"]) || array_key_exists("editPost", $context))) {
            // line 30
            echo "                    <form method=\"post\" action=\"/projet_5/public/index.php?route=editPost&postId=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
                ";
        }
        // line 32
        echo "                    <div class=\"form-group\">
                        <label for=\"title\">Titre</label>
                        <textarea class=\"form-control\" rows=\"1\"  maxlength=\"150\" id=\"title\" type=\"textarea\" name=\"title\" ";
        // line 34
        echo ">";
        if (($context["title"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"chapo\">Chapô</label>
                        <textarea class=\"form-control\" rows=\"01\" maxlength=\"150\" id=\"chapo\" name=\"chapo\" ";
        // line 38
        echo ">";
        if (($context["chapo"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["chapo"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"content\">Article</label>
                        <textarea class=\"form-control\" rows=\"9\" maxlength=\"30000\" id=\"content\" name=\"content\" ";
        // line 42
        echo ">";
        if (($context["content"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                    </div>
                    ";
        // line 44
        if ((isset($context["addPost"]) || array_key_exists("addPost", $context))) {
            // line 45
            echo "                        <div class=\"form-group text-center\">
                            <input type=\"submit\" name=\"submitPost\" class=\"btn btn-primary\" value=\"Envoyer\"/>
                        </div>
                    ";
        }
        // line 49
        echo "                    ";
        if ((isset($context["editPost"]) || array_key_exists("editPost", $context))) {
            // line 50
            echo "                        <div class=\"form-group text-center\">
                            <input type=\"submit\" name=\"editPost\" class=\"btn btn-primary\" value=\"Modifier\"/>
                        </div>
                    ";
        }
        // line 54
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "postForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  164 => 50,  161 => 49,  155 => 45,  153 => 44,  143 => 42,  131 => 38,  119 => 34,  115 => 32,  109 => 30,  106 => 29,  102 => 27,  100 => 26,  95 => 23,  88 => 18,  79 => 15,  76 => 14,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "postForm.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\postForm.html.twig");
    }
}
