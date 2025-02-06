<?php

use Breakdance\Lib\Vendor\Twig\Environment;
use Breakdance\Lib\Vendor\Twig\Error\LoaderError;
use Breakdance\Lib\Vendor\Twig\Error\RuntimeError;
use Breakdance\Lib\Vendor\Twig\Extension\SandboxExtension;
use Breakdance\Lib\Vendor\Twig\Markup;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedTagError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use Breakdance\Lib\Vendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use Breakdance\Lib\Vendor\Twig\Source;
use Breakdance\Lib\Vendor\Twig\Template;

/* d52987a2093701e16e3ffd78d42e018220757bca */
class __TwigTemplate_b12fd28b28ffa2d4c037762a477416d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
          ";
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "d52987a2093701e16e3ffd78d42e018220757bca", 2)->unwrap();
        // line 3
        echo "
          window.BreakdanceSwiper().update({
  id: '%%ID%%',
  selector:'%%SELECTOR%%',
  settings:";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 7), "settings", [], "any", false, false, false, 7));
        echo ",
  paginationSettings:";
        // line 8
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "slider", [], "any", false, false, false, 8), "pagination", [], "any", false, false, false, 8));
        echo ",
});
         ";
    }

    public function getTemplateName()
    {
        return "d52987a2093701e16e3ffd78d42e018220757bca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "d52987a2093701e16e3ffd78d42e018220757bca", "");
    }
}
