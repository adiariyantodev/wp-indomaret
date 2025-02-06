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

/* 2ef744bb20eaab94f965caf91d6e8928870e0955 */
class __TwigTemplate_38f24373adea3d1f0eb0940022cb5608 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "2ef744bb20eaab94f965caf91d6e8928870e0955", 2)->unwrap();
        // line 3
        echo "
          <div class=\"breakdance-form-field breakdance-form-field--";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 4);
        if ((($context["step"] ?? null) >= 1)) {
            echo " hidden-step";
        }
        echo "\" ";
        if ((($context["step"] ?? null) >= 1)) {
            echo " data-form-step=\"";
            echo ($context["step"] ?? null);
            echo "\" ";
        }
        echo ">
    ";
        // line 5
        echo do_action("breakdance_form_before_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
    ";
        // line 6
        if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, false, 6), [0 => "hidden", 1 => "html", 2 => "step"]) && twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 6))) {
            // line 7
            echo "        <label class=\"breakdance-form-field__label\" for=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
            echo "\">
            ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 8);
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 8), "required", [], "any", false, false, false, 8)) ? ("<span class=\"breakdance-form-field__required\">*</span>") : (""));
            echo "</span>
        </label>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "html", [], "any", false, false, false, 12);
        echo "


    ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "advanced", [], "any", false, false, false, 15), "append", [], "any", false, false, false, 15);
        echo "
    ";
        // line 16
        echo do_action("breakdance_form_after_field", ($context["field"] ?? null), ($context["form"] ?? null));
        echo "
</div>

         ";
    }

    public function getTemplateName()
    {
        return "2ef744bb20eaab94f965caf91d6e8928870e0955";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  85 => 15,  79 => 12,  76 => 11,  69 => 8,  64 => 7,  62 => 6,  58 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "2ef744bb20eaab94f965caf91d6e8928870e0955", "");
    }
}
