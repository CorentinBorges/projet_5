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

/* CV.html.twig */
class __TwigTemplate_ef5f2a8f5f2567d8af568992828a3aa9579365ae163accbcaf22041128d152ee extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "CV.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_jumbotron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <header class=\"masthead\" id=\"CV-head\" alt='Costume' >
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-md-10 mx-auto\">
                    <div class=\"site-heading\">
                        <h1>Curriculum Vitae</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "      <div id=\"CV-container\">
          <object type=\"application/pdf\" id='CV' data=\"public/docs/CV.pdf\" ></object>
      </div>
  ";
    }

    public function getTemplateName()
    {
        return "CV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  69 => 20,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CV.html.twig", "C:\\MAMP\\htdocs\\projet_5\\templates\\CV.html.twig");
    }
}
