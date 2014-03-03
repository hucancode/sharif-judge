<?php

/* pages/submissions.twig */
class __TwigTemplate_c0cabf112feeeb2131215723c3a0e668d97cc126d4c4ac3a5c2e7ca1cdf627a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        $context["selected"] = ($_view_ . "_submissions");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo ((($_view_ == "all")) ? ("fa-bars") : ("fa-map-marker"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "\t<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
\t<link rel='stylesheet' type='text/css' href='";
        // line 16
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 17
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 19
        echo base_url("assets/reveal/reveal.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 20
        echo base_url("assets/reveal/jquery.reveal.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 21
        echo base_url("assets/js/shj_submissions.js");
        echo "\"></script>
";
    }

    // line 26
    public function block_title_menu($context, array $blocks = array())
    {
        // line 27
        echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
        // line 28
        if (isset($context["excel_link"])) { $_excel_link_ = $context["excel_link"]; } else { $_excel_link_ = null; }
        echo twig_escape_filter($this->env, $_excel_link_, "html", null, true);
        echo "\"><i class=\"fa fa-download color2\"></i> Excel</a>
\t</span>
\t";
        // line 30
        if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
        if ($_filter_user_) {
            // line 31
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 32
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
            echo site_url((("submissions/" . $_view_) . (($_filter_problem_) ? (("/problem/" . $_filter_problem_)) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color1\"></i> Remove Username Filter</a>
\t</span>
\t";
        }
        // line 36
        echo "\t";
        if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
        if ($_filter_problem_) {
            // line 37
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 38
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
            echo site_url((("submissions/" . $_view_) . (($_filter_user_) ? (("/user/" . $_filter_user_)) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color4\"></i> Remove Problem Filter</a>
\t</span>
\t";
        }
    }

    // line 47
    public function block_main_content($context, array $blocks = array())
    {
        // line 48
        echo "
<p>";
        // line 49
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $_view_), "html", null, true);
        echo " Submissions of <span dir=\"auto\">";
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_assignment_, "name"), "html", null, true);
        echo "</span></p>
";
        // line 50
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == "all")) {
            // line 51
            echo "\t";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 52
                echo "\t\t<p><i class=\"fa fa-warning color3\"></i> You cannot change your final submissions after assignment finishes.</p>
\t";
            }
        }
        // line 55
        echo "<table class=\"sharif_table\">
\t<thead>
\t\t<tr>
\t\t";
        // line 58
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == "all")) {
            // line 59
            echo "\t\t\t";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 60
                echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Final</th>
\t\t\t";
            }
            // line 62
            echo "\t\t";
        }
        // line 63
        echo "\t\t";
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ > 0)) {
            // line 64
            echo "\t\t\t\t";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (($_view_ == "all")) {
                // line 65
                echo "\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t<th width=\"2%\" rowspan=\"2\">#</th>
\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t<th width=\"6%\" rowspan=\"2\">Username</th>
\t\t\t\t<th width=\"14%\" rowspan=\"2\">Name</th>
\t\t\t\t<th width=\"4%\" rowspan=\"2\">Problem</th>
\t\t\t\t";
            // line 73
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 74
                echo "\t\t\t\t<th width=\"14%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t<th colspan=\"3\">Score</th>
\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t<th rowspan=\"2\">Score</th>
\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Code</th>
\t\t\t\t";
            // line 82
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (($_view_ == "final")) {
                // line 83
                echo "\t\t\t\t<th width=\"6%\" rowspan=\"2\">Log</th>
\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 86
                echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Actions</th>
\t\t\t\t";
            }
            // line 88
            echo "\t\t\t</tr>
\t\t\t";
            // line 89
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 90
                echo "\t\t\t<tr>
\t\t\t\t<th width=\"5%\" class=\"score\">Score</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Delay<br>%</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Final Score</th>
\t\t\t</tr>
\t\t\t";
            }
            // line 96
            echo "\t\t";
        } else {
            // line 97
            echo "\t\t\t\t<th width=\"10%\" rowspan=\"2\">Problem</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t";
            // line 99
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 100
                echo "\t\t\t\t\t<th width=\"7%\" colspan=\"3\">Score</th>
\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t<th width=\"7%\" rowspan=\"2\">Score</th>
\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"15%\" rowspan=\"2\">Code</th>
\t\t\t</tr>
\t\t\t";
            // line 108
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 109
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th width=\"7%\" class=\"score\">Score</th>
\t\t\t\t\t<th width=\"7%\" class=\"score\">Delay<br>%</th>
\t\t\t\t\t<th width=\"7%\" class=\"score\">Final Score</th>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 115
            echo "\t\t";
        }
        // line 116
        echo "\t</thead>
\t";
        // line 117
        $context["i"] = 0;
        // line 118
        echo "\t";
        $context["j"] = 0;
        // line 119
        echo "\t";
        $context["un"] = "";
        // line 120
        echo "\t";
        if (isset($context["submissions"])) { $_submissions_ = $context["submissions"]; } else { $_submissions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_submissions_);
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 121
            echo "\t\t";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 122
            echo "\t\t";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if (isset($context["un"])) { $_un_ = $context["un"]; } else { $_un_ = null; }
            if (($this->getAttribute($_submission_, "username") != $_un_)) {
                // line 123
                echo "\t\t\t";
                if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
                $context["j"] = ($_j_ + 1);
                // line 124
                echo "\t\t";
            }
            // line 125
            echo "\t\t";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            $context["un"] = $this->getAttribute($_submission_, "username");
            // line 126
            echo "\t\t<tr data-u=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "userid"), "html", null, true);
            echo "\" data-p=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "problem"), "html", null, true);
            echo "\" data-s=\"";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
            echo "\" ";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["j"])) { $_j_ = $context["j"]; } else { $_j_ = null; }
            if ((($_view_ == "final") && ($_j_ % 2 == 0))) {
                echo "class=\"hl\"";
            }
            echo ">
\t\t";
            // line 127
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (($_view_ == "all")) {
                // line 128
                echo "\t\t\t";
                if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
                if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                    // line 129
                    echo "\t\t\t\t<td>
\t\t\t\t\t<i class=\"pointer set_final fa ";
                    // line 130
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo (($this->getAttribute($_submission_, "is_final")) ? ("fa-check-circle-o color11") : ("fa-circle-o"));
                    echo " fa-2x\"></i>
\t\t\t\t</td>
\t\t\t";
                }
                // line 133
                echo "\t\t";
            }
            // line 134
            echo "\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ > 0)) {
                // line 135
                echo "\t\t\t";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (($_view_ == "all")) {
                    // line 136
                    echo "\t\t\t\t<td>";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t<td>";
                    if (isset($context["page_number"])) { $_page_number_ = $context["page_number"]; } else { $_page_number_ = null; }
                    if (isset($context["per_page"])) { $_per_page_ = $context["per_page"]; } else { $_per_page_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, ((($_page_number_ - 1) * $_per_page_) + $_i_), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 139
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                }
                // line 141
                echo "
\t\t\t<td><a href=\"";
                // line 142
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if (isset($context["filter_problem"])) { $_filter_problem_ = $context["filter_problem"]; } else { $_filter_problem_ = null; }
                echo site_url((((("submissions/" . $_view_) . "/user/") . $this->getAttribute($_submission_, "userid")) . (($_filter_problem_) ? (("/problem/" . $_filter_problem_)) : (""))));
                echo "\">";
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "username"), "html", null, true);
                echo "</a></td>
\t\t\t<td dir=\"auto\">";
                // line 143
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "name"), "html", null, true);
                echo "</td>
\t\t";
            }
            // line 145
            echo "\t\t\t<td><a href=\"";
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["filter_user"])) { $_filter_user_ = $context["filter_user"]; } else { $_filter_user_ = null; }
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo site_url((((("submissions/" . $_view_) . (($_filter_user_) ? (("/user/" . $_filter_user_)) : (""))) . "/problem/") . $this->getAttribute($_submission_, "problem")));
            echo "\" title=\"";
            if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_problems_, $this->getAttribute($_submission_, "problem"), array(), "array"), "name"), "html", null, true);
            echo "\">";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "problem"), "html", null, true);
            echo "</a></td>
\t\t\t";
            // line 146
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 147
                echo "\t\t\t\t<td>";
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "time"), "html", null, true);
                echo "</td>
\t\t\t";
            }
            // line 149
            echo "\t\t\t\t<td>";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "score"), "html", null, true);
            echo "</td>
\t\t\t";
            // line 150
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            if ((!$this->getAttribute($_assignment_, "practice_mode"))) {
                // line 151
                echo "\t\t\t<td>
\t\t\t\t<span class=\"tiny_text\" ";
                // line 152
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo ((($this->getAttribute($_submission_, "delay") > 0)) ? ("style=\"color:red;\"") : (""));
                echo "'>
\t\t\t\t";
                // line 153
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                if (($this->getAttribute($_submission_, "delay") <= 0)) {
                    // line 154
                    echo "\t\t\t\t\tNo Delay
\t\t\t\t";
                } else {
                    // line 156
                    echo "\t\t\t\t\t<span title=\"HH:MM\">";
                    if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                    echo time_hhmm($this->getAttribute($_submission_, "delay"));
                    echo "</span>
\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t</span><br>
\t\t\t\t";
                // line 159
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "coefficient"), "html", null, true);
                echo "%
\t\t\t</td>
\t\t\t<td style=\"font-weight: bold;\">";
                // line 161
                if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "final_score"), "html", null, true);
                echo " </td>
\t\t\t";
            }
            // line 163
            echo "\t\t\t<td>";
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "language"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"status\">
\t\t\t\t";
            // line 165
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            if (($this->getAttribute($_submission_, "status") == "PENDING")) {
                // line 166
                echo "\t\t\t\t\t";
                $context["submission_class"] = "btn";
                // line 167
                echo "\t\t\t\t";
            } elseif (($this->getAttribute($_submission_, "status") == "ACCEPTED")) {
                // line 168
                echo "\t\t\t\t\t";
                $context["submission_class"] = "btn shj-green";
                // line 169
                echo "\t\t\t\t";
            } elseif (($this->getAttribute($_submission_, "status") == "REJECTED")) {
                // line 170
                echo "\t\t\t\t\t";
                $context["submission_class"] = "btn shj-red";
                // line 171
                echo "\t\t\t\t";
            } else {
                // line 172
                echo "\t\t\t\t\t";
                $context["submission_class"] = "btn shj-blue";
                // line 173
                echo "\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t<div class=\"";
            if (isset($context["submission_class"])) { $_submission_class_ = $context["submission_class"]; } else { $_submission_class_ = null; }
            echo twig_escape_filter($this->env, $_submission_class_, "html", null, true);
            echo "\" data-type=\"result\" >
\t\t\t\t\t";
            // line 175
            if (isset($context["submission"])) { $_submission_ = $context["submission"]; } else { $_submission_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_submission_, "status"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<div class=\"btn shj-orange\" data-type=\"code\" >Code</div>
\t\t\t</td>
\t\t\t";
            // line 181
            if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if ((($_view_ == "final") && ($_user_level_ > 0))) {
                // line 182
                echo "\t\t\t<td>
\t\t\t\t<div class=\"btn\" data-type=\"log\" >Log</div>
\t\t\t</td>
\t\t\t";
            }
            // line 186
            echo "\t\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 187
                echo "\t\t\t\t<td>
\t\t\t\t\t<a href=\"#\" class=\"shj_rejudge\"><i class=\"fa fa-refresh fa-lg color10\"></i></a>
\t\t\t\t</td>
\t\t\t";
            }
            // line 191
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "</table>

<p>
";
        // line 196
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        echo $_pagination_;
        echo "
</p>

";
    }

    // line 203
    public function block_body_end($context, array $blocks = array())
    {
        // line 204
        echo "<div id=\"shj_modal\" class=\"reveal-modal xlarge\">
\t<div class=\"modal_inside\">
\t\t<div style=\"text-align: center;\">Loading<br><img src=\"";
        // line 206
        echo base_url("assets/images/loading.gif");
        echo "\"/></div>
\t</div>
\t<a class=\"close-reveal-modal\">&#215;</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/submissions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 206,  575 => 204,  572 => 203,  563 => 196,  558 => 193,  551 => 191,  545 => 187,  541 => 186,  535 => 182,  531 => 181,  521 => 175,  515 => 174,  512 => 173,  509 => 172,  506 => 171,  503 => 170,  500 => 169,  497 => 168,  494 => 167,  491 => 166,  488 => 165,  481 => 163,  475 => 161,  469 => 159,  466 => 158,  459 => 156,  455 => 154,  452 => 153,  447 => 152,  444 => 151,  441 => 150,  435 => 149,  428 => 147,  425 => 146,  410 => 145,  404 => 143,  394 => 142,  391 => 141,  385 => 139,  377 => 138,  370 => 136,  366 => 135,  362 => 134,  359 => 133,  352 => 130,  349 => 129,  345 => 128,  342 => 127,  324 => 126,  320 => 125,  317 => 124,  313 => 123,  308 => 122,  304 => 121,  298 => 120,  295 => 119,  292 => 118,  290 => 117,  287 => 116,  284 => 115,  276 => 109,  273 => 108,  267 => 104,  263 => 102,  259 => 100,  256 => 99,  252 => 97,  249 => 96,  241 => 90,  238 => 89,  235 => 88,  231 => 86,  227 => 85,  223 => 83,  220 => 82,  215 => 79,  211 => 77,  206 => 74,  203 => 73,  198 => 70,  193 => 67,  189 => 65,  185 => 64,  181 => 63,  178 => 62,  174 => 60,  170 => 59,  167 => 58,  162 => 55,  157 => 52,  153 => 51,  150 => 50,  142 => 49,  139 => 48,  136 => 47,  125 => 38,  122 => 37,  118 => 36,  109 => 32,  106 => 31,  103 => 30,  97 => 28,  94 => 27,  91 => 26,  85 => 21,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  63 => 15,  60 => 14,  52 => 10,  44 => 9,  37 => 8,  31 => 6,);
    }
}
