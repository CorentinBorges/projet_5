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

/* adminHome.html.twig */
class __TwigTemplate_02fa2645d021fe0e84bc5215246598e0f4c7ab084ea2342728ced5c2f626f6d6 extends Template
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
        $this->parent = $this->loadTemplate("adminLayout.html.twig", "adminHome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"col-12 mt-3 text-center pl-md-5 pl-sm-2 col-sm-8 mx-auto\">
        <h2>Configuration du blog</h2>
        <p>Nombre de commentaires non validés: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["countCom"] ?? null), "html", null, true);
        echo "</p>
        <p>Nombre d'utilisateurs non validés: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["countLog"] ?? null), "html", null, true);
        echo "</p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "adminHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adminHome.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\adminHome.html.twig");
    }
}
