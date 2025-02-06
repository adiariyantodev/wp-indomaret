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

/* a710bfc78f29ad487c1330c7efb6f923b0ab9a23 */
class __TwigTemplate_86497149bdcb1c5a8a40dca79ce14c03 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "a710bfc78f29ad487c1330c7efb6f923b0ab9a23", 2)->unwrap();
        // line 3
        echo "
          %%SELECTOR%% {
  width: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5), "style", [], "any", false, false, false, 5);
        echo ";
  ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_spacing_margin_y", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "spacing", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul {
 gap: ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 10), "space_between", [], "any", false, false, false, 10), "style", [], "any", false, false, false, 10);
        echo ";
}

";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 13), "stack", [], "any", false, false, false, 13) == "vertical")) {
            // line 14
            echo "  %%SELECTOR%% ul {
    ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 15), "alignment_when_vertical", [], "any", false, false, false, 15) == "left")) {
                // line 16
                echo "      align-items: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
($context["design"] ?? null), "layout", [], "any", false, false, false, 17), "alignment_when_vertical", [], "any", false, false, false, 17) == "center")) {
                // line 18
                echo "      align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
($context["design"] ?? null), "layout", [], "any", false, false, false, 19), "alignment_when_vertical", [], "any", false, false, false, 19) == "right")) {
                // line 20
                echo "      align-items: flex-end;
    ";
            }
            // line 22
            echo "  }
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["design"] ?? null), "layout", [], "any", false, false, false, 23), "stack", [], "any", false, false, false, 23) == "horizontal")) {
            // line 24
            echo "  %%SELECTOR%% ul {
    flex-direction: row;
    justify-content: ";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 26), "horizontal_align", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, true, false, 26), "horizontal_align", [], "any", false, false, false, 26), "left")) : ("left"));
            echo ";
    flex-wrap: wrap;
    align-items: center;
  }
";
        }
        // line 31
        echo "

";
        // line 33
        if ((($context["breakpoint"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 33), "stack_vertical_at", [], "any", false, false, false, 33))) {
            // line 34
            echo "  %%SELECTOR%% ul {
    flex-direction: column;
    align-items: flex-start;
    ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 37), "alignment_when_vertical", [], "any", false, false, false, 37) == "left")) {
                // line 38
                echo "    align-items: flex-start;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["design"] ?? null), "layout", [], "any", false, false, false, 39), "alignment_when_vertical", [], "any", false, false, false, 39) == "center")) {
                // line 40
                echo "    align-items: center;
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["design"] ?? null), "layout", [], "any", false, false, false, 41), "alignment_when_vertical", [], "any", false, false, false, 41) == "right")) {
                // line 42
                echo "    align-items: flex-end;
    ";
            }
            // line 44
            echo "  }
";
        }
        // line 46
        echo "


/* icons */
%%SELECTOR%% li .bde-icon-list__icon {
  font-size: ";
        // line 51
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 51), "size", [], "any", false, false, false, 51), "style", [], "any", false, false, false, 51);
        echo ";
}

%%SELECTOR%% li .bde-icon-list__icon > svg {
  ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 55), "nudge", [], "any", false, false, false, 55), "vertical", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 55), "nudge", [], "any", false, false, false, 55), "horizontal", [], "any", false, false, false, 55), "style", [], "any", false, false, false, 55))) {
            // line 56
            echo "    transform: translate(";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 56), "nudge", [], "any", false, true, false, 56), "horizontal", [], "any", false, true, false, 56), "style", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 56), "nudge", [], "any", false, true, false, 56), "horizontal", [], "any", false, true, false, 56), "style", [], "any", false, false, false, 56), "0")) : ("0"));
            echo ", ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 56), "nudge", [], "any", false, true, false, 56), "vertical", [], "any", false, true, false, 56), "style", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 56), "nudge", [], "any", false, true, false, 56), "vertical", [], "any", false, true, false, 56), "style", [], "any", false, false, false, 56), "0")) : ("0"));
            echo ");
  ";
        }
        // line 58
        echo "}

%%SELECTOR%% li .bde-icon-list__icon {
  color: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 61), "color", [], "any", false, false, false, 61);
        echo ";
  ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 62), "background", [], "any", false, false, false, 62)) {
            // line 63
            echo "    padding: ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 63), "padding", [], "any", false, true, false, 63), "style", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 63), "padding", [], "any", false, true, false, 63), "style", [], "any", false, false, false, 63), "14px")) : ("14px"));
            echo ";
    border-radius: ";
            // line 64
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 64), "radius", [], "any", false, true, false, 64), "style", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 64), "radius", [], "any", false, true, false, 64), "style", [], "any", false, false, false, 64), "0px")) : ("0px"));
            echo ";
    ";
            // line 65
            echo twig_call_macro($macros["macros"], "macro_backgroundColor", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 65), "fill", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, true, false, 65), "fill", [], "any", false, false, false, 65), "#DBE5FFFF")) : ("#DBE5FFFF"))], 65, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 67
        echo "}

%%SELECTOR%% li:hover .bde-icon-list__icon {
  color: ";
        // line 70
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 70), "color_hover", [], "any", false, false, false, 70);
        echo ";
  ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 71), "background", [], "any", false, false, false, 71)) {
            // line 72
            echo "    ";
            echo twig_call_macro($macros["macros"], "macro_backgroundColor", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "icon", [], "any", false, false, false, 72), "fill_hover", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo "
  ";
        }
        // line 74
        echo "}

/* list */

%%SELECTOR%% li .bde-icon-list__text {
  ";
        // line 79
        echo twig_call_macro($macros["macros"], "macro_typography", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 79), ($context["globalSettings"] ?? null)], 79, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% li:hover .bde-icon-list__text {
  ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_typographyWithHoverableEverything", [twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "typography", [], "any", false, false, false, 83)], 83, $context, $this->getSourceContext());
        echo "
}

%%SELECTOR%% ul li .bde-icon-list__item-wrapper {
  gap: ";
        // line 87
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["design"] ?? null), "layout", [], "any", false, false, false, 87), "text_indent", [], "any", false, false, false, 87), "style", [], "any", false, false, false, 87);
        echo ";
}



";
        // line 93
        echo "

    %%SELECTOR%% {
        ";
        // line 96
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 97), "wrapper", [], "any", false, false, false, 97), "background", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 98), "wrapper", [], "any", false, false, false, 98), "layout", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 99), "wrapper", [], "any", false, false, false, 99), "size", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 100), "wrapper", [], "any", false, false, false, 100), "typography", [], "any", false, false, false, 100),         // line 101
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 102
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 102), "wrapper", [], "any", false, false, false, 102), "spacing", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 103), "wrapper", [], "any", false, false, false, 103), "borders", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 104), "wrapper", [], "any", false, false, false, 104), "effects", [], "any", false, false, false, 104)], 96, $context, $this->getSourceContext());
        echo "
    }

    %%SELECTOR%%:hover {
        ";
        // line 108
        echo twig_call_macro($macros["macros"], "macro_classOrSelectorProperties", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 109), "wrapper_hover", [], "any", false, false, false, 109), "background", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 110), "wrapper_hover", [], "any", false, false, false, 110), "layout", [], "any", false, false, false, 110), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 111), "wrapper_hover", [], "any", false, false, false, 111), "size", [], "any", false, false, false, 111), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 112
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 112), "wrapper_hover", [], "any", false, false, false, 112), "typography", [], "any", false, false, false, 112),         // line 113
($context["globalSettings"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 114
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 114), "wrapper_hover", [], "any", false, false, false, 114), "spacing", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 115), "wrapper_hover", [], "any", false, false, false, 115), "borders", [], "any", false, false, false, 115), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 116
($context["settings"] ?? null), "advanced", [], "any", false, false, false, 116), "wrapper_hover", [], "any", false, false, false, 116), "effects", [], "any", false, false, false, 116)], 108, $context, $this->getSourceContext());
        echo "
    }
    

";
        // line 120
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "advanced", [], "any", false, false, false, 120), "css", [], "any", false, false, false, 120);
        echo "


";
        // line 123
        if ((($context["isBaseBreakpoint"] ?? null) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 123), "hide", [], "any", false, false, false, 123)))) {
            // line 124
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["builtinBreakpoints"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 125
                echo "        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["b"], "id", [], "any", false, false, false, 125), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_on_breakpoint", [], "any", false, false, false, 125), "hide", [], "any", false, false, false, 125))) {
                    // line 126
                    echo "            ";
                    echo Breakdance\Elements\UniversalControls\make_above_and_below_query($context["b"], ($context["builtinBreakpoints"] ?? null));
                    echo " {
                %%SELECTOR%% {
                    ";
                    // line 128
                    if (($context["isBuilder"] ?? null)) {
                        // line 129
                        echo "                        opacity: 0.5;
                        filter: grayscale(100%);
                    ";
                    } else {
                        // line 132
                        echo "                        display: none;
                    ";
                    }
                    // line 134
                    echo "                }
            }
        ";
                }
                // line 137
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 139
        echo "
         ";
    }

    public function getTemplateName()
    {
        return "a710bfc78f29ad487c1330c7efb6f923b0ab9a23";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 139,  300 => 137,  295 => 134,  291 => 132,  286 => 129,  284 => 128,  278 => 126,  275 => 125,  270 => 124,  268 => 123,  262 => 120,  255 => 116,  254 => 115,  253 => 114,  252 => 113,  251 => 112,  250 => 111,  249 => 110,  248 => 109,  247 => 108,  240 => 104,  239 => 103,  238 => 102,  237 => 101,  236 => 100,  235 => 99,  234 => 98,  233 => 97,  232 => 96,  227 => 93,  219 => 87,  212 => 83,  205 => 79,  198 => 74,  192 => 72,  190 => 71,  186 => 70,  181 => 67,  176 => 65,  172 => 64,  167 => 63,  165 => 62,  161 => 61,  156 => 58,  148 => 56,  146 => 55,  139 => 51,  132 => 46,  128 => 44,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  112 => 37,  107 => 34,  105 => 33,  101 => 31,  93 => 26,  89 => 24,  87 => 23,  84 => 22,  80 => 20,  78 => 19,  75 => 18,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  63 => 13,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "a710bfc78f29ad487c1330c7efb6f923b0ab9a23", "");
    }
}
