<?php

/* pages/assignments.twig */
class __TwigTemplate_3f90216d73aeccea51ee357153447ec7f79107dc371404d49a99b071f620c485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-folder-open";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ >= 2)) {
            // line 16
            echo "<span class=\"title_menu_item\"><a href=\"";
            echo site_url("assignments/add");
            echo "\"><i class=\"fa fa-plus color8\"></i> Add</a></span>
";
        }
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        if (isset($context["success_messages"])) { $_success_messages_ = $context["success_messages"]; } else { $_success_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_success_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 24
            echo "\t<p class=\"shj_ok\">";
            if (isset($context["success_message"])) { $_success_message_ = $context["success_message"]; } else { $_success_message_ = null; }
            echo twig_escape_filter($this->env, $_success_message_, "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        if (isset($context["error_messages"])) { $_error_messages_ = $context["error_messages"]; } else { $_error_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_error_messages_);
        foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
            // line 27
            echo "\t<p class=\"shj_error\">";
            if (isset($context["error_message"])) { $_error_message_ = $context["error_message"]; } else { $_error_message_ = null; }
            echo twig_escape_filter($this->env, $_error_message_, "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
";
        // line 30
        if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
        if ((twig_length_filter($this->env, $_all_assignments_) == 0)) {
            // line 31
            echo "\t<p style=\"text-align: center;\">Nothing to show...</p>
";
        }
        // line 33
        echo "<br/>
<table class=\"sharif_table\">
<thead>
<tr>
\t<th>Select</th>
\t<th>Name</th>
\t<th>Problems</th>
\t<th>Submissions</th>
\t<th>Coefficient</th>
\t<th>Start Time</th>
\t<th>Finish Time</th>
\t<th>Status</th>
\t<th>Actions</th>
</tr>
</thead>
";
        // line 48
        if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $_all_assignments_));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "<tr>
\t<td><i class=\"pointer select_assignment fa ";
            // line 50
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo ((($this->getAttribute($_item_, "id") == $this->getAttribute($_assignment_, "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
            echo " fa-2x\" data-id=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
            echo "\"></i></td>
\t<td dir=\"auto\">";
            // line 51
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 52
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo site_url(("problems/" . $this->getAttribute($_item_, "id")));
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "problems"), "html", null, true);
            echo " problem";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo ((($this->getAttribute($_item_, "problems") != 1)) ? ("s") : (""));
            echo "</a></td>
\t<td>";
            // line 53
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "total_submits"), "html", null, true);
            echo " submission";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo ((($this->getAttribute($_item_, "total_submits") != 1)) ? ("s") : (""));
            echo "</td>
\t<td>
\t\t";
            // line 55
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "delay") > $this->getAttribute($_item_, "extra_time"))) {
                // line 56
                echo "\t\t\t<span style=\"color: red;\">Finished</span>
\t\t";
            } else {
                // line 58
                echo "\t\t\t";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "coefficient"), "html", null, true);
                echo " %
\t\t";
            }
            // line 60
            echo "\t</td>
\t<td>";
            // line 61
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "start_time"), "html", null, true);
            echo "</td>
\t<td>";
            // line 62
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "finish_time"), "html", null, true);
            echo "</td>
\t<td>
\t\t";
            // line 64
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "open")) {
                // line 65
                echo "\t\t\t<span style=\"color: green;\">Open</span>
\t\t";
            } else {
                // line 67
                echo "\t\t\t<span style=\"color: red;\">Close</span>
\t\t";
            }
            // line 69
            echo "\t</td>
\t<td>
\t\t";
            // line 71
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 72
                echo "\t\t\t<a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("assignments/downloadtestsdesc/" . $this->getAttribute($_item_, "id")));
                echo "\"><i title=\"Download Tests and Descriptions\" class=\"fa fa-cloud-download fa-lg color11\"></i></a>
\t\t";
            }
            // line 74
            echo "\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 1)) {
                // line 75
                echo "\t\t\t<a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("assignments/download/" . $this->getAttribute($_item_, "id")));
                echo "\"><i title=\"Download Final Codes\" class=\"fa fa-download fa-lg color12\"></i></a>
\t\t";
            }
            // line 77
            echo "\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 78
                echo "\t\t\t<a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("moss/" . $this->getAttribute($_item_, "id")));
                echo "\"><i title=\"Detect Similar Codes\" class=\"fa fa-shield fa-lg color7\"></i></a>
\t\t";
            }
            // line 80
            echo "\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 81
                echo "\t\t\t<a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("assignments/edit/" . $this->getAttribute($_item_, "id")));
                echo "\"><i title=\"Edit\" class=\"fa fa-pencil fa-lg color3\"></i></a>
\t\t";
            }
            // line 83
            echo "\t\t";
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 84
                echo "\t\t\t<a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo site_url(("assignments/delete/" . $this->getAttribute($_item_, "id")));
                echo "\"><i title=\"Delete\" class=\"fa fa-times fa-lg color1\"></i></a>
\t\t";
            }
            // line 86
            echo "\t</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "pages/assignments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 89,  265 => 86,  258 => 84,  254 => 83,  247 => 81,  243 => 80,  236 => 78,  232 => 77,  225 => 75,  221 => 74,  214 => 72,  211 => 71,  207 => 69,  203 => 67,  199 => 65,  196 => 64,  190 => 62,  185 => 61,  182 => 60,  175 => 58,  171 => 56,  168 => 55,  159 => 53,  148 => 52,  143 => 51,  134 => 50,  131 => 49,  126 => 48,  109 => 33,  105 => 31,  102 => 30,  99 => 29,  89 => 27,  84 => 26,  74 => 24,  69 => 23,  66 => 22,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
