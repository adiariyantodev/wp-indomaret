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

/* 7d4ef623ccccb1dd749e1592bf9b47709a5833ce */
class __TwigTemplate_c64330f771170b929daa0924e3b3a338 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "7d4ef623ccccb1dd749e1592bf9b47709a5833ce", 2)->unwrap();
        // line 3
        echo "
          ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 4), "type", [], "any", false, false, false, 4) == "slideshow")) {
            // line 5
            echo "window.BreakdanceSwiper().update({
  selector:'%%SELECTOR%%',
  id: '%%ID%%',
  isBuilder: false,
  settings: {
     allowTouchMove: false,
     ";
            // line 11
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 11), "slideshow_settings", [], "any", false, false, false, 11), "play_only_once", [], "any", false, false, false, 11))) {
                // line 12
                echo "        infinite: \"enabled\",
      ";
            }
            // line 14
            echo "      speed: { number: ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 14), "slideshow_settings", [], "any", false, true, false, 14), "effect_duration", [], "any", false, true, false, 14), "number", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 14), "slideshow_settings", [], "any", false, true, false, 14), "effect_duration", [], "any", false, true, false, 14), "number", [], "any", false, false, false, 14)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 14), "slideshow_settings", [], "any", false, true, false, 14), "effect_duration", [], "any", false, true, false, 14), "number", [], "any", false, false, false, 14)) : (300));
            echo " },
      autoplay: \"enabled\",
      autoplay_settings: {
        speed: { number: ";
            // line 17
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 17), "slideshow_settings", [], "any", false, true, false, 17), "slide_duration", [], "any", false, true, false, 17), "number", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 17), "slideshow_settings", [], "any", false, true, false, 17), "slide_duration", [], "any", false, true, false, 17), "number", [], "any", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, true, false, 17), "slideshow_settings", [], "any", false, true, false, 17), "slide_duration", [], "any", false, true, false, 17), "number", [], "any", false, false, false, 17)) : (3000));
            echo " },
        pause_on_hover: false,
        stop_on_interaction: false,
      },
      ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 21), "slideshow_settings", [], "any", false, false, false, 21), "transition_effect", [], "any", false, false, false, 21) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 21), "slideshow_settings", [], "any", false, false, false, 21), "transition_effect", [], "any", false, false, false, 21) != "slide"))) {
                // line 22
                echo "        effect: \"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 22), "slideshow_settings", [], "any", false, false, false, 22), "transition_effect", [], "any", false, false, false, 22);
                echo "\",
      ";
            }
            // line 24
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 24), "slideshow_settings", [], "any", false, false, false, 24), "slide_direction", [], "any", false, false, false, 24)) {
                // line 25
                echo "        direction: \"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "background", [], "any", false, false, false, 25), "slideshow_settings", [], "any", false, false, false, 25), "slide_direction", [], "any", false, false, false, 25);
                echo "\",
      ";
            }
            // line 27
            echo "  },
  paginationSettings: {},
  advancedSettings: {},
  extras : {
  \tautoplay: true
  }
});
";
        }
        // line 35
        echo "         ";
    }

    public function getTemplateName()
    {
        return "7d4ef623ccccb1dd749e1592bf9b47709a5833ce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  92 => 27,  86 => 25,  83 => 24,  77 => 22,  75 => 21,  68 => 17,  61 => 14,  57 => 12,  55 => 11,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "7d4ef623ccccb1dd749e1592bf9b47709a5833ce", "");
    }
}
