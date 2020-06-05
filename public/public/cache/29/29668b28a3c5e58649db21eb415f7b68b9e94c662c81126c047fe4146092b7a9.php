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

/* home.html.twig */
class __TwigTemplate_aa08dcd180e3cfee013391dbd2ee64d64a8accd93eae73df8bb6ddb82482dd54 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_jumbotron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <header class=\"masthead\" id=\"homePic\" alt='Ordinateur avec code'>
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1>Corentin Borges</h1>
                        <span class=\"subheading\">Votre développeur de site professionnel</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        if (($context["confirm"] ?? null)) {
            // line 21
            echo "        <div class=\"alert alert-success alert-dismissible fade show container col-10 col-lg-5 text-center\" role=\"alert\">
            <strong>Votre mail à bien été envoyé</strong>
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (($context["errors"] ?? null)) {
            // line 30
            echo "        <div class=\"alert alert-danger alert-dismissible fade show container col-10 col-lg-5 text-left\" role=\"alert\">
            <p><strong>Erreurs:</strong></p>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 33
                echo "                <ul>
                    <li> ";
                // line 34
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo " </li>
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 42
        echo "    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class='container text-center d-lg-block d-none col-lg-4 col-xl-3 home-sides' >
                <a href=\"/projet_5/public/index.php?route=CV\"  class='CV-link'>Curriruclum Vitae</a>
                <div class=\"container ml-3\">
                    <div class=\"row mt-4\">
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
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 pl-md-5 pl-sm-5 col-md-10 mx-auto\">
                <h2 class=\"text-center\">Me contacter</h2>

                <form name=\"sentMessage\" id=\"contactForm\" method='post' action=\"/projet_5/public/\">
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Nom</label>
                            <input type=\"text\" class=\"form-control 1 ";
        // line 85
        echo twig_escape_filter($this->env, ($context["invalidName"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["name"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " name='name' placeholder=\"Nom\" id=\"name\" required data-validation-required-message=\"veuillez entrer un nom\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group \">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Prénom</label>
                            <input type=\"text\" class=\"form-control 2 ";
        // line 92
        echo twig_escape_filter($this->env, ($context["invalidFirstName"] ?? null), "html", null, true);
        echo "\" name='firstName' ";
        if (($context["firstName"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " placeholder=\"Prénom\" id=\"first-name\" required data-validation-required-message=\"Veuillez indiquer un prénom\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>objet</label>
                            <input type=\"text\" class=\"form-control 3 ";
        // line 99
        echo twig_escape_filter($this->env, ($context["invalidObj"] ?? null), "html", null, true);
        echo "\" name='obj' ";
        if (($context["obj"] ?? null)) {
            echo " value='";
            echo twig_escape_filter($this->env, ($context["obj"] ?? null), "html", null, true);
            echo "' ";
        }
        echo " placeholder=\"Objet\" id=\"obj\" required data-validation-required-message=\"Veuillez indiquer un objet\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Mail</label>
                            <input type=\"email\" class=\"form-control 4 ";
        // line 106
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
                    <div class=\"control-group \">
                        <div class=\"form-group floating-label-form-group controls\">
                            <label>Message</label>
                            <textarea rows=\"4\" class=\"form-control 5 ";
        // line 113
        echo twig_escape_filter($this->env, ($context["invalidMessage"] ?? null), "html", null, true);
        echo "\" maxlength=\"250\" name='message'  placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Vous n'avez pas écrit de message\">";
        if (($context["message"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <br>
                    <div id=\"success\"></div>
                    <div class=\"form-group col-5 col-md-12 mx-auto\" >
                        <button type=\"submit\" value=\"submit\" name='submitMail' class=\"btn btn-primary\" id=\"sendMessageButton\">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class='container text-center mr-sm-2 mr-0 ml-3 ml-sm-0 d-block d-lg-none home-sides' >
                <a href=\"/projet_5/public/index.php?route=CV\" class='CV-link '  >Curriruclum Vitae</a>
            </div>
            <div class='col-lg-3'></div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 113,  210 => 106,  194 => 99,  178 => 92,  162 => 85,  117 => 42,  110 => 37,  101 => 34,  98 => 33,  94 => 32,  90 => 30,  88 => 29,  85 => 28,  76 => 21,  73 => 20,  69 => 19,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\home.html.twig");
    }
}
