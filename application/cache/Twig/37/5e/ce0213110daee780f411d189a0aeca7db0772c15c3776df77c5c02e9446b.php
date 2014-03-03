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
\t\t";
        // line 46
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
            // line 47
            echo "\t\t<li class=\"color-final_submissions";
            if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
            echo ((($_selected_ == "final_submissions")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 48
            echo site_url("submissions/final");
            echo "\">
\t\t\t\t<i class=\"fa fa-map-marker fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Final Submissions</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 54
        echo "\t\t<li class=\"color-all_submissions";
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo ((($_selected_ == "all_submissions")) ? (" selected") : (""));
        echo "\">
\t\t\t<a href=\"";
        // line 55
        echo site_url("submissions/all");
        echo "\">
\t\t\t\t<i class=\"fa fa-bars fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">All Submissions</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 60
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
            // line 61
            echo "\t\t<li class=\"color-scoreboard";
            if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
            echo ((($_selected_ == "scoreboard")) ? (" selected") : (""));
            echo "\">
\t\t\t<a href=\"";
            // line 62
            echo site_url("scoreboard");
            echo "\">
\t\t\t\t<i class=\"fa fa-star fa-lg\"></i>
\t\t\t\t<span class=\"sidebar_text\">Scoreboard</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 68
        echo "\t</ul>
\t<div id=\"sidebar_bottom\">
\t\t<p>
\t\t\t<a href=\"http://sharifjudge.ir\" target=\"_blank\">&copy; Sharif Judge ";
        // line 71
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
</div>
";
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
        return array (  162 => 71,  157 => 68,  148 => 62,  142 => 61,  139 => 60,  131 => 55,  125 => 54,  116 => 48,  110 => 47,  107 => 46,  99 => 41,  94 => 40,  86 => 35,  81 => 34,  73 => 29,  67 => 28,  58 => 22,  53 => 21,  45 => 16,  39 => 15,  36 => 14,  28 => 9,  23 => 8,  19 => 6,);
    }
}
