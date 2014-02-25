<?php

/* templates/side_bar.twig */
class __TwigTemplate_4ff23ba67a24894038791060d43174535292c09f211a0e5ff0cbf9ce58df2976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"side_bar\" class=\"sidebar_open\">
\t<ul>
\t\t<li class=\"color-dashboard";
        // line 8
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "dashboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 9
        echo site_url("dashboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-dashboard fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Dashboard</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 14
        if (((isset($context["user_level"]) ? $context["user_level"] : null) == 3)) {
            // line 15
            echo "\t\t<li class=\"color-settings";
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "settings")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 16
            echo site_url("settings");
            echo "\">
\t\t\t\t<i class=\"fa fa-gear fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Settings</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-users";
            // line 21
            echo ((((isset($context["selected"]) ? $context["selected"] : null) == "users")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 22
            echo site_url("users");
            echo "\">
\t\t\t\t<i class=\"fa fa-users fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Users</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 28
        echo "\t\t<li class=\"color-notifications";
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "notifications")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 29
        echo site_url("notifications");
        echo "\">
\t\t\t\t<i class=\"fa fa-bell fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Notifications</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-assignments";
        // line 34
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "assignments")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 35
        echo site_url("assignments");
        echo "\">
\t\t\t\t<i class=\"fa fa-folder-open fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Assignments</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-problems";
        // line 40
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "problems")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 41
        echo site_url("problems");
        echo "\">
\t\t\t\t<i class=\"fa fa-puzzle-piece fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Problems</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-submit";
        // line 46
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "submit")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 47
        echo site_url("submit");
        echo "\">
\t\t\t\t<i class=\"fa fa-location-arrow fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Submit</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-final_submissions";
        // line 52
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "final_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 53
        echo site_url("submissions/final");
        echo "\">
\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Final Submissions</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-all_submissions";
        // line 58
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "all_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 59
        echo site_url("submissions/all");
        echo "\">
\t\t\t\t<i class=\"fa fa-bars fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">All Submissions</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"color-scoreboard";
        // line 64
        echo ((((isset($context["selected"]) ? $context["selected"] : null) == "scoreboard")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 65
        echo site_url("scoreboard");
        echo "\">
\t\t\t\t<i class=\"fa fa-star fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Scoreboard</span>
\t\t\t</a>
\t\t</li>
\t</ul>
\t<div id=\"sidebar_bottom\">
\t\t<p>
\t\t\t<a href=\"http://sharifjudge.ir\" target=\"_blank\">&copy; Sharif Judge ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["SHJ_VERSION"]) ? $context["SHJ_VERSION"] : null), "html", null, true);
        echo "</a>
\t\t\t<a href=\"http://docs.sharifjudge.ir\" target=\"_blank\">Docs</a>
\t\t</p>
\t\t<p class=\"timer\"></p>
\t\t<div id=\"shj_collapse\" class=\"pointer\">
\t\t\t<i id=\"collapse\" class=\"fa fa-caret-square-o-left fa-lg\"></i><span class=\"sidebar_text\">Collapse Menu</span>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "templates/side_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 73,  136 => 64,  128 => 59,  124 => 58,  116 => 53,  112 => 52,  104 => 47,  100 => 46,  80 => 35,  76 => 34,  63 => 28,  42 => 16,  37 => 15,  35 => 14,  27 => 9,  23 => 8,  143 => 68,  131 => 64,  125 => 63,  111 => 59,  108 => 58,  97 => 53,  93 => 52,  88 => 40,  86 => 48,  43 => 14,  39 => 13,  30 => 10,  25 => 8,  19 => 6,  215 => 67,  212 => 66,  207 => 62,  202 => 61,  197 => 60,  192 => 51,  187 => 9,  182 => 72,  175 => 68,  173 => 66,  168 => 63,  166 => 62,  162 => 61,  158 => 60,  152 => 56,  150 => 55,  148 => 54,  144 => 52,  142 => 51,  137 => 49,  127 => 42,  123 => 41,  113 => 37,  109 => 36,  101 => 54,  96 => 29,  92 => 41,  83 => 25,  79 => 44,  75 => 43,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 22,  50 => 21,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  306 => 125,  298 => 119,  289 => 116,  285 => 114,  280 => 111,  278 => 110,  274 => 109,  269 => 107,  261 => 105,  256 => 104,  252 => 102,  250 => 101,  244 => 97,  236 => 93,  234 => 92,  225 => 88,  219 => 71,  199 => 76,  193 => 72,  184 => 70,  180 => 71,  177 => 68,  160 => 52,  140 => 65,  126 => 33,  122 => 62,  118 => 61,  107 => 30,  89 => 29,  87 => 26,  82 => 26,  72 => 19,  68 => 29,  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 12,  34 => 11,  29 => 6,);
    }
}
