<?php

/* templates/top_bar.twig */
class __TwigTemplate_3d1bc63c398d06bd866ad0055e2f00e6aa49f3d7dd5b61dd8fc0a8ad2ea95601 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
        echo "\">
\t<div class=\"top_object shj_menu\" id=\"user_top\">
\t\t<a href=\"";
        // line 8
        echo site_url("profile");
        echo "\" id=\"profile_link\"><i class=\"fa fa-user\"></i></a>
\t\t<div class=\"top_menu user-menu\">
\t\t\t<div class=\"gravatar\"><img src=\"http://www.gravatar.com/avatar/";
        // line 10
        echo md5("mjnaderi@gmail.com");
        echo "?s=70&d=identicon\" /></div>
\t\t\t<div class=\"name\"><i class=\"fa fa-user\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
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
\t\t<div class=\"time_block\">
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
\t</div>
\t<div class=\"top_object countdown\" id=\"extra_time\">
\t\t<i class=\"fa fa-plus-square fa-2x\"></i>
\t\t<div class=\"time_block\">
\t\t\t<span>Extra</span><br><span>Time</span>
\t\t</div>
\t</div>
\t<div id=\"shj_logo\" class=\"top_left\">
\t\t<a href=\"";
        // line 43
        echo site_url("/");
        echo "\">
\t\t\t<img src=\"";
        // line 44
        echo base_url("assets/images/paperplane.svg");
        echo "\"/>
\t\t\t<h1 class=\"shjlogo-text\">Sharif <span>Judge</span></h1>
\t\t</a>
\t</div>
\t";
        // line 48
        if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
            // line 49
            echo "\t<div class=\"top_object shj_menu top_left\" id=\"admin_tools_top\">
\t\tTools
\t\t<ul class=\"top_menu\">
\t\t\t<li><a href=\"";
            // line 52
            echo site_url("rejudge");
            echo "\">Rejudge</a></li>
\t\t\t<li><a href=\"";
            // line 53
            echo site_url("queue");
            echo "\">Submission Queue</a></li>
\t\t\t<li><a href=\"";
            // line 54
            echo site_url(("moss/" . $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "id", array(), "array")));
            echo "\">Cheat Detection</a></li>
\t\t</ul>
\t</div>
\t";
        }
        // line 58
        echo "\t<div class=\"top_object shj_menu top_left\" id=\"select_assignment_top\">
\t\t<a href=\"";
        // line 59
        echo site_url("assignments");
        echo "\"><span dir=\"auto\" class=\"assignment_name\">";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name")) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name"), 0, 30) . "...")) : ($this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name"))), "html", null, true);
        echo "</span></a>
\t\t<ul class=\"top_menu\" id=\"select_assignment_menu\">
\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["assignment_item"]) {
            // line 62
            echo "\t\t\t\t<li class=\"assignment_block select_assignment\">
\t\t\t\t\t<i class=\"fa ";
            // line 63
            echo ((($this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id") == $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "id"), "html", null, true);
            echo "\"></i>
\t\t\t\t\t<span class=\"assignment_item\" dir=\"auto\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment_item"]) ? $context["assignment_item"] : null), "name"), "html", null, true);
            echo "</span>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t<li>
\t\t\t<a href=\"";
        // line 68
        echo site_url("assignments");
        echo "\">All Assignments</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"top_object top_left shj-spinner\" style=\"display: none;\">
\t\t<i class=\"fa fa-refresh fa-spin fa-lg\"></i>
\t</div>
</div>";
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
        return array (  143 => 68,  131 => 64,  125 => 63,  111 => 59,  108 => 58,  97 => 53,  93 => 52,  88 => 49,  86 => 48,  43 => 14,  39 => 13,  30 => 10,  25 => 8,  19 => 6,  215 => 67,  212 => 66,  207 => 62,  202 => 61,  197 => 60,  192 => 51,  187 => 9,  182 => 72,  175 => 68,  173 => 66,  168 => 63,  166 => 62,  162 => 61,  158 => 60,  152 => 56,  150 => 55,  148 => 54,  144 => 52,  142 => 51,  137 => 49,  127 => 42,  123 => 41,  113 => 37,  109 => 36,  101 => 54,  96 => 29,  92 => 28,  83 => 25,  79 => 44,  75 => 43,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  306 => 125,  298 => 119,  289 => 116,  285 => 114,  280 => 111,  278 => 110,  274 => 109,  269 => 107,  261 => 105,  256 => 104,  252 => 102,  250 => 101,  244 => 97,  236 => 93,  234 => 92,  225 => 88,  219 => 71,  199 => 76,  193 => 72,  184 => 70,  180 => 71,  177 => 68,  160 => 52,  140 => 67,  126 => 33,  122 => 62,  118 => 61,  107 => 30,  89 => 29,  87 => 26,  82 => 26,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 12,  34 => 11,  29 => 6,);
    }
}
