<?php

/* pages/problems.twig */
class __TwigTemplate_80b213b7602095f6c812288ec0001dfb857d2f8a6e4f6ae4fbfbace0abc663c9 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "problems";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-puzzle-piece";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["all_problems"])) { $_all_problems_ = $context["all_problems"]; } else { $_all_problems_ = null; }
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_all_problems_, $this->getAttribute($_problem_, "id"), array(), "array"), "name"), "html", null, true);
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Problem ";
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
<link rel='stylesheet' type='text/css' href='";
        // line 16
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 17
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\t// Syntax highlighting increases the page's height, and we need to update the scroll-bar
\t\$('.problem_description').resize(function(){
\t\t\$('.scroll-wrapper').nanoScroller();
\t});
\t// Syntax highlighting
\t\$('pre code.language-c').parent().snippet('c', {style: shj.color_scheme});
\t\$('pre code.language-cpp').parent().snippet('cpp', {style: shj.color_scheme});
\t\$('pre code.language-python').parent().snippet('python', {style: shj.color_scheme});
\t\$('pre code.language-java').parent().snippet('java', {style: shj.color_scheme});
});
</script>
";
    }

    // line 35
    public function block_title_menu($context, array $blocks = array())
    {
        // line 36
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ >= 2)) {
            // line 37
            echo "<span class=\"title_menu_item\"><a href=\"";
            if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo site_url(((("problems/edit/md/" . $this->getAttribute($_description_assignment_, "id")) . "/") . $this->getAttribute($_problem_, "id")));
            echo "\"><i class=\"fa fa-pencil color2\"></i> Edit Markdown</a></span>
<span class=\"title_menu_item\"><a href=\"";
            // line 38
            if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo site_url(((("problems/edit/html/" . $this->getAttribute($_description_assignment_, "id")) . "/") . $this->getAttribute($_problem_, "id")));
            echo "\"><i class=\"fa fa-pencil color10\"></i> Edit HTML</a></span>
<span class=\"title_menu_item\"><a href=\"";
            // line 39
            if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo site_url(((("problems/edit/plain/" . $this->getAttribute($_description_assignment_, "id")) . "/") . $this->getAttribute($_problem_, "id")));
            echo "\"><i class=\"fa fa-pencil color8\"></i> Edit Plain HTML</a></span>
";
        }
    }

    // line 45
    public function block_main_content($context, array $blocks = array())
    {
        // line 46
        echo "<div class=\"problem_description\">
\t";
        // line 47
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo $this->getAttribute($_problem_, "description");
        echo "
</div>

<div id=\"right_sidebar\">

\t<div class=\"problems_widget\">
\t\t<p dir=\"auto\"><i class=\"fa fa-file-text fa-lg color9\"></i> ";
        // line 53
        if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_description_assignment_, "name"), "html", null, true);
        echo "</p>

\t\t";
        // line 55
        if (isset($context["all_problems"])) { $_all_problems_ = $context["all_problems"]; } else { $_all_problems_ = null; }
        if ((twig_length_filter($this->env, $_all_problems_) == 0)) {
            // line 56
            echo "\t\t\t<p style=\"text-align: center;\">Nothing to show...</p>
\t\t";
        }
        // line 58
        echo "
\t\t<table class=\"sharif_table\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th rowspan=\"2\">#</th>
\t\t\t\t<th rowspan=\"2\">Problem</th>
\t\t\t\t<th rowspan=\"2\">Score</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
        // line 67
        if (isset($context["all_problems"])) { $_all_problems_ = $context["all_problems"]; } else { $_all_problems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_all_problems_);
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 68
            echo "\t\t\t\t<tr";
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            if (isset($context["one_problem"])) { $_one_problem_ = $context["one_problem"]; } else { $_one_problem_ = null; }
            echo ((($this->getAttribute($_problem_, "id") == $this->getAttribute($_one_problem_, "id"))) ? (" class=\"hl\"") : (""));
            echo ">
\t\t\t\t\t<td>";
            // line 69
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a dir=\"auto\" href=\"";
            // line 71
            if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo site_url(((("problems/" . $this->getAttribute($_description_assignment_, "id")) . "/") . $this->getAttribute($_problem_, "id")));
            echo "\">";
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "name"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 73
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "score"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t</table>
\t</div>

\t";
        // line 79
        if (isset($context["finished"])) { $_finished_ = $context["finished"]; } else { $_finished_ = null; }
        if ((!$_finished_)) {
            // line 80
            echo "\t<div class=\"problems_widget\">
\t\t<p><i class=\"fa fa-upload fa-lg color11\"></i> Submit</p>
\t\t";
            // line 82
            echo form_open_multipart("submit");
            echo "
\t\t<input type=\"hidden\" name=\"problem\" value=\"";
            // line 83
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
            echo "\"/>

\t\t<p class=\"input_p\">
\t\t\t<select id=\"languages\" name=\"language\" class=\"sharif_input full-width\">
\t\t\t\t<option value=\"0\" selected=\"selected\">-- Select Language --</option>
\t\t\t\t";
            // line 88
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_problem_, "allowed_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 89
                echo "\t\t\t\t\t<option value=\"";
                if (isset($context["l"])) { $_l_ = $context["l"]; } else { $_l_ = null; }
                echo twig_escape_filter($this->env, $_l_, "html", null, true);
                echo "\">";
                if (isset($context["l"])) { $_l_ = $context["l"]; } else { $_l_ = null; }
                echo twig_escape_filter($this->env, $_l_, "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t</select>
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<input type=\"file\" id=\"file\" class=\"sharif_input full-width\" name=\"userfile\"/>
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<input type=\"submit\" value=\"Submit\" class=\"sharif_input\"/>
\t\t</p>
\t\t</form>
\t</div>
\t";
        }
        // line 102
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/problems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 102,  237 => 91,  224 => 89,  219 => 88,  210 => 83,  206 => 82,  202 => 80,  199 => 79,  194 => 76,  184 => 73,  174 => 71,  168 => 69,  161 => 68,  156 => 67,  145 => 58,  141 => 56,  138 => 55,  132 => 53,  122 => 47,  119 => 46,  116 => 45,  107 => 39,  101 => 38,  94 => 37,  91 => 36,  88 => 35,  69 => 17,  65 => 16,  60 => 15,  57 => 14,  49 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
