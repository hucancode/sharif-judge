<?php

/* templates/side_bar.twig */
class __TwigTemplate_375ece0213110daee780f411d189a0aeca7db0772c15c3776df77c5c02e9446b extends Twig_Template
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "dashboard")) ? (" selected") : (""));
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
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ == 3)) {
            // line 15
            echo "\t\t<li class=\"color-settings";
            if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
            echo ((($_selected_ == "settings")) ? (" selected") : (""));
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
            if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
            echo ((($_selected_ == "users")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "notifications")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "assignments")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "problems")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "submit")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "final_submissions")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "all_submissions")) ? (" selected") : (""));
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
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "scoreboard")) ? (" selected") : (""));
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
        if (isset($context["SHJ_VERSION"])) { $_SHJ_VERSION_ = $context["SHJ_VERSION"]; } else { $_SHJ_VERSION_ = null; }
        echo twig_escape_filter($this->env, $_SHJ_VERSION_, "html", null, true);
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
        return array (  162 => 73,  151 => 65,  138 => 59,  133 => 58,  125 => 53,  120 => 52,  107 => 46,  99 => 41,  94 => 40,  86 => 35,  73 => 29,  67 => 28,  53 => 21,  39 => 15,  28 => 9,  23 => 8,  153 => 68,  140 => 64,  131 => 63,  115 => 59,  112 => 47,  104 => 54,  100 => 53,  91 => 49,  81 => 34,  77 => 43,  45 => 16,  41 => 13,  35 => 11,  19 => 6,  221 => 71,  217 => 67,  214 => 66,  209 => 62,  199 => 60,  184 => 72,  182 => 71,  177 => 68,  175 => 66,  170 => 63,  168 => 62,  164 => 61,  160 => 60,  154 => 56,  152 => 55,  150 => 67,  146 => 64,  144 => 51,  139 => 49,  128 => 62,  123 => 61,  118 => 39,  113 => 37,  101 => 31,  96 => 52,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  70 => 21,  66 => 20,  62 => 19,  58 => 22,  54 => 17,  50 => 16,  44 => 13,  36 => 14,  31 => 10,  26 => 8,  334 => 125,  326 => 119,  316 => 116,  312 => 114,  307 => 111,  304 => 110,  299 => 109,  293 => 107,  283 => 105,  277 => 104,  273 => 102,  270 => 101,  264 => 97,  256 => 93,  253 => 92,  242 => 88,  234 => 87,  210 => 76,  204 => 61,  194 => 51,  189 => 9,  186 => 68,  169 => 52,  149 => 34,  135 => 33,  130 => 32,  124 => 31,  109 => 36,  90 => 29,  88 => 48,  82 => 26,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 12,  34 => 8,  29 => 6,);
    }
}
