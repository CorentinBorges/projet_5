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

/* posts.html.twig */
class __TwigTemplate_30da78af1aeb13a81a7bb55a6288ade07503efbe4659c0a98cc623a1ab519ba5 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_jumbotron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <header class=\"masthead \" id=\"postsPic\" alt='Machine à écrire' >
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1>Les Posts</h1>

                    </div>
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
        echo "    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "                    <div class=\"post-preview\">
                        <a href=\"/projet_5/public/index.php?route=post&amp;postId=";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" >
                            <h2 class=\"post-title\">
                                ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "
                            </h2>
                            <h3 class=\"post-subtitle\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "chapo", [], "any", false, false, false, 33), "html", null, true);
            echo "
                            </h3>
                        </a>
                        <p class=\"post-meta\">Ecrit par ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 36), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["post"], "dateModif", [], "any", false, false, false, 36))) {
                echo " Modifié le ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dateModif", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
            }
            echo "</p>
                    </div>
                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  104 => 36,  98 => 33,  92 => 30,  87 => 28,  84 => 27,  80 => 26,  74 => 22,  70 => 21,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posts.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\posts.html.twig");
    }
}
