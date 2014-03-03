<?php

/* templates/top_bar.twig */
class __TwigTemplate_1776c551b01c63e7183fb1a573751a12fff9ffd59196a74ec1c877f9b718a344 extends Twig_Template
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
        echo "<div id=\"top_bar\" class=\"color-";
        if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
        echo twig_escape_filter($this->env, $_selected_, "html", null, true);
        echo "\">
\t<div class=\"top_object shj_menu\" id=\"user_top\">
\t\t<a href=\"";
        // line 8
        echo site_url("profile");
        echo "\" id=\"profile_link\"><i class=\"fa fa-user\"></i></a>
\t\t<div class=\"top_menu user-menu\">
\t\t\t<div class=\"gravatar\"><img alt=\"Change your avatar at http://www.gravatar.com/\" src=\"http://www.gravatar.com/avatar/";
        // line 10
        if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
        echo md5($_email_);
        echo "?s=70&d=identicon\" /></div>
\t\t\t<div class=\"name\"><i class=\"fa fa-user\"></i> ";
        // line 11
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, $_username_, "html", null, true);
        echo "</div>
\t\t\t<div class=\"menu-controls\">
\t\t\t\t<a href=\"";
        // line 13
        echo site_url("logout");
        echo "\" class=\"logout-btn\"><i class=\"fa fa-sign-out\"></i> Sign Out</a>
\t\t\t\t<a href=\"";
        // line 14
        echo site_url("profile");
        echo "\" class=\"profile-btn\"><i class=\"fa fa-wrench\"></i> Profile</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"top_object countdown\" id=\"countdown\">
\t\t";
        // line 19
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        if (($this->getAttribute($_assignment_, "practice_mode") == true)) {
            // line 20
            echo "\t\t<div class=\"time_block\">
\t\t\t<span class=\"countdown_num\">PRACTICE MODE</span><br>
\t\t\t<span class=\"time_label\">no score and time limit</span>
\t\t</div>
\t\t<script >
\t\t\t\$(document).ready(function () {
\t\t\t\tclearInterval(update_clock);
\t\t\t});
\t\t</script>
\t\t";
        } else {
            // line 30
            echo "\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_days\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"days_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_hours\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"hours_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_minutes\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"minutes_label\"></span>
\t\t</div>
\t\t<div class=\"time_block\">
\t\t\t<span id=\"time_seconds\" class=\"countdown_num\"></span><br>
\t\t\t<span class=\"time_label\" id=\"seconds_label\"></span>
\t\t</div>
\t\t";
        }
        // line 47
        echo "\t</div>
\t<div class=\"top_object countdown\" id=\"extra_time\">
\t\t<i class=\"fa fa-plus-square fa-2x\"></i>
\t\t<div class=\"time_block\">
\t\t\t<span>Extra</span><br><span>Time</span>
\t\t</div>
\t</div>
\t<div id=\"shj_logo\" class=\"top_left\">
\t\t<a href=\"";
        // line 55
        echo site_url("/");
        echo "\">
\t\t\t<img src=\"";
        // line 56
        echo base_url("assets/images/paperplane.svg");
        echo "\"/>
\t\t\t<h1 class=\"shjlogo-text\">Sharif <span>Judge</span></h1>
\t\t</a>
\t</div>
\t";
        // line 60
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ >= 2)) {
            // line 61
            echo "\t<div class=\"top_object shj_menu top_left\" id=\"admin_tools_top\">
\t\tTools
\t\t<ul class=\"top_menu\">
\t\t\t<li><a href=\"";
            // line 64
            echo site_url("rejudge");
            echo "\">Rejudge</a></li>
\t\t\t<li><a href=\"";
            // line 65
            echo site_url("queue");
            echo "\">Submission Queue</a></li>
\t\t</ul>
\t</div>
\t";
        }
        // line 69
        echo "\t<div class=\"top_object shj_menu top_left\" id=\"select_assignment_top\">
\t\t<a href=\"";
        // line 70
        echo site_url("assignments");
        echo "\"><span dir=\"auto\" class=\"assignment_name\">";
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($_assignment_, "name")) > 30)) ? ((twig_slice($this->env, $this->getAttribute($_assignment_, "name"), 0, 30) . "...")) : ($this->getAttribute($_assignment_, "name"))), "html", null, true);
        echo "</span></a>
\t\t<ul class=\"top_menu\" id=\"select_assignment_menu\">
\t\t\t";
        // line 72
        if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $_all_assignments_), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment_item"]) {
            // line 73
            echo "\t\t\t\t<li class=\"assignment_block select_assignment\">
\t\t\t\t\t<i class=\"fa ";
            // line 74
            if (isset($context["assignment_item"])) { $_assignment_item_ = $context["assignment_item"]; } else { $_assignment_item_ = null; }
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo ((($this->getAttribute($_assignment_item_, "id") == $this->getAttribute($_assignment_, "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
            echo "\" data-id=\"";
            if (isset($context["assignment_item"])) { $_assignment_item_ = $context["assignment_item"]; } else { $_assignment_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_item_, "id"), "html", null, true);
            echo "\"></i>
\t\t\t\t\t<span class=\"assignment_item\" dir=\"auto\">";
            // line 75
            if (isset($context["assignment_item"])) { $_assignment_item_ = $context["assignment_item"]; } else { $_assignment_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_item_, "name"), "html", null, true);
            echo "</span>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t<li>
\t\t\t<a href=\"";
        // line 79
        echo site_url("assignments");
        echo "\">All Assignments</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"top_object top_left shj-spinner\" style=\"display: none;\">
\t\t<i class=\"fa fa-refresh fa-spin fa-lg\"></i>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "templates/top_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 79,  166 => 78,  156 => 75,  147 => 74,  144 => 73,  139 => 72,  131 => 70,  128 => 69,  121 => 65,  117 => 64,  112 => 61,  109 => 60,  102 => 56,  98 => 55,  88 => 47,  69 => 30,  57 => 20,  54 => 19,  46 => 14,  42 => 13,  36 => 11,  31 => 10,  26 => 8,  19 => 6,);
    }
}
