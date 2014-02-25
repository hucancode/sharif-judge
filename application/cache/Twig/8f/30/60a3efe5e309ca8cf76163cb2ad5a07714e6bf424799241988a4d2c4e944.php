<?php

/* pages/assignments.twig */
class __TwigTemplate_8f3060a3efe5e309ca8cf76163cb2ad5a07714e6bf424799241988a4d2c4e944 extends Twig_Template
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
        if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["success_messages"]) ? $context["success_messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 24
            echo "\t<p class=\"shj_ok\">";
            echo twig_escape_filter($this->env, (isset($context["success_message"]) ? $context["success_message"] : null), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["error_messages"]) ? $context["error_messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
            // line 27
            echo "\t<p class=\"shj_error\">";
            echo twig_escape_filter($this->env, (isset($context["error_message"]) ? $context["error_message"] : null), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)) == 0)) {
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "<tr>
\t<td><i class=\"pointer select_assignment fa ";
            // line 50
            echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id") == $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
            echo " fa-2x\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "\"></i></td>
\t<td dir=\"auto\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            echo "</td>
\t<td><a href=\"";
            // line 52
            echo site_url(("problems/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "problems"), "html", null, true);
            echo " problem";
            echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "problems") != 1)) ? ("s") : (""));
            echo "</a></td>
\t<td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total_submits"), "html", null, true);
            echo " submission";
            echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total_submits") != 1)) ? ("s") : (""));
            echo "</td>
\t<td>
\t\t";
            // line 55
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "delay") > $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra_time"))) {
                // line 56
                echo "\t\t\t<span style=\"color: red;\">Finished</span>
\t\t";
            } else {
                // line 58
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "coefficient"), "html", null, true);
                echo " %
\t\t";
            }
            // line 60
            echo "\t</td>
\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "start_time"), "html", null, true);
            echo "</td>
\t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "finish_time"), "html", null, true);
            echo "</td>
\t<td>
\t\t";
            // line 64
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "open")) {
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
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
                // line 72
                echo "\t\t\t<a href=\"";
                echo site_url(("assignments/downloadtestsdesc/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\"><i title=\"Download Tests and Descriptions\" class=\"fa fa-cloud-download fa-lg color11\"></i></a>
\t\t";
            }
            // line 74
            echo "\t\t";
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 1)) {
                // line 75
                echo "\t\t\t<a href=\"";
                echo site_url(("assignments/download/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\"><i title=\"Download Final Codes\" class=\"fa fa-download fa-lg color12\"></i></a>
\t\t";
            }
            // line 77
            echo "\t\t";
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
                // line 78
                echo "\t\t\t<a href=\"";
                echo site_url(("moss/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\"><i title=\"Detect Similar Codes\" class=\"fa fa-shield fa-lg color7\"></i></a>
\t\t";
            }
            // line 80
            echo "\t\t";
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
                // line 81
                echo "\t\t\t<a href=\"";
                echo site_url(("assignments/edit/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\"><i title=\"Edit\" class=\"fa fa-pencil fa-lg color3\"></i></a>
\t\t";
            }
            // line 83
            echo "\t\t";
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
                // line 84
                echo "\t\t\t<a href=\"";
                echo site_url(("assignments/delete/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
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
        return array (  242 => 89,  234 => 86,  228 => 84,  225 => 83,  219 => 81,  216 => 80,  210 => 78,  207 => 77,  201 => 75,  198 => 74,  192 => 72,  190 => 71,  186 => 69,  182 => 67,  178 => 65,  176 => 64,  171 => 62,  167 => 61,  164 => 60,  158 => 58,  154 => 56,  152 => 55,  145 => 53,  137 => 52,  133 => 51,  127 => 50,  124 => 49,  120 => 48,  103 => 33,  99 => 31,  97 => 30,  94 => 29,  85 => 27,  81 => 26,  72 => 24,  68 => 23,  65 => 22,  57 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
