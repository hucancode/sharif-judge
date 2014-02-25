<?php

/* pages/scoreboard_table.twig */
class __TwigTemplate_60c91ac05a7c11d2e5931078919dd793508d3e397bf472ba5a944eee10237ebd extends Twig_Template
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
        ob_start();
        // line 7
        echo "<table class=\"sharif_table\">

<thead>
\t<tr>
\t\t<th>#</th>
\t\t<th>Username</th>
\t\t<th>Name</th>
\t\t";
        // line 14
        if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_problems_);
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 15
            echo "\t\t\t<th>
\t\t\t\t<a dir=\"auto\" href=\"";
            // line 16
            if (isset($context["assignment_id"])) { $_assignment_id_ = $context["assignment_id"]; } else { $_assignment_id_ = null; }
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo site_url(((("problems/" . $_assignment_id_) . "/") . $this->getAttribute($_problem_, "id")));
            echo "\">";
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "name"), "html", null, true);
            echo "</a><br>
\t\t\t\t<span class=\"tiny_text_b\">";
            // line 17
            if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "score"), "html", null, true);
            echo "</span>
\t\t\t</th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t<th>
\t\t\tTotal<br>
\t\t\t<span class=\"tiny_text_b\">";
        // line 22
        if (isset($context["total_score"])) { $_total_score_ = $context["total_score"]; } else { $_total_score_ = null; }
        echo twig_escape_filter($this->env, $_total_score_, "html", null, true);
        echo "</span>
\t\t</th>
\t</tr>
</thead>

";
        // line 27
        if (isset($context["scoreboard"])) { $_scoreboard_ = $context["scoreboard"]; } else { $_scoreboard_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_scoreboard_, "username"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sc_username"]) {
            // line 28
            echo "\t<tr>
\t<td>";
            // line 29
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "</td>
\t<td>";
            // line 30
            if (isset($context["sc_username"])) { $_sc_username_ = $context["sc_username"]; } else { $_sc_username_ = null; }
            echo twig_escape_filter($this->env, $_sc_username_, "html", null, true);
            echo "</td>
\t<td dir=\"auto\">";
            // line 31
            if (isset($context["names"])) { $_names_ = $context["names"]; } else { $_names_ = null; }
            if (isset($context["sc_username"])) { $_sc_username_ = $context["sc_username"]; } else { $_sc_username_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_names_, $_sc_username_, array(), "array"), "html", null, true);
            echo "</td>
\t";
            // line 32
            if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_problems_);
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 33
                echo "\t<td>
\t\t";
                // line 34
                if (isset($context["scores"])) { $_scores_ = $context["scores"]; } else { $_scores_ = null; }
                if (isset($context["sc_username"])) { $_sc_username_ = $context["sc_username"]; } else { $_sc_username_ = null; }
                if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_scores_, $_sc_username_, array(), "array", false, true), $this->getAttribute($_problem_, "id"), array(), "array", false, true), "score", array(), "any", true, true)) {
                    // line 35
                    echo "\t\t\t";
                    if (isset($context["scores"])) { $_scores_ = $context["scores"]; } else { $_scores_ = null; }
                    if (isset($context["sc_username"])) { $_sc_username_ = $context["sc_username"]; } else { $_sc_username_ = null; }
                    if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_scores_, $_sc_username_, array(), "array"), $this->getAttribute($_problem_, "id"), array(), "array"), "score"), "html", null, true);
                    echo "<br>
\t\t\t<span class=\"tiny_text\" title=\"Time\">";
                    // line 36
                    if (isset($context["scores"])) { $_scores_ = $context["scores"]; } else { $_scores_ = null; }
                    if (isset($context["sc_username"])) { $_sc_username_ = $context["sc_username"]; } else { $_sc_username_ = null; }
                    if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
                    echo time_hhmm($this->getAttribute($this->getAttribute($this->getAttribute($_scores_, $_sc_username_, array(), "array"), $this->getAttribute($_problem_, "id"), array(), "array"), "time"));
                    echo "</span>
\t\t";
                } else {
                    // line 38
                    echo "\t\t\t-
\t\t";
                }
                // line 40
                echo "\t</td>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t<td>
\t<span style=\"font-weight: bold;\">";
            // line 43
            if (isset($context["scoreboard"])) { $_scoreboard_ = $context["scoreboard"]; } else { $_scoreboard_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_scoreboard_, "score", array(), "array"), $this->getAttribute($_loop_, "index0"), array(), "array"), "html", null, true);
            echo "</span>
\t<br>
\t<span class=\"tiny_text\" title=\"Total Time + Submit Penalty\">";
            // line 45
            if (isset($context["scoreboard"])) { $_scoreboard_ = $context["scoreboard"]; } else { $_scoreboard_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo time_hhmm($this->getAttribute($this->getAttribute($_scoreboard_, "submit_penalty", array(), "array"), $this->getAttribute($_loop_, "index0"), array(), "array"));
            echo "</span>
\t</td>
\t</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sc_username'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</table>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "pages/scoreboard_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  157 => 45,  150 => 43,  147 => 42,  140 => 40,  136 => 38,  128 => 36,  120 => 35,  115 => 34,  112 => 33,  107 => 32,  101 => 31,  96 => 30,  91 => 29,  88 => 28,  70 => 27,  61 => 22,  57 => 20,  47 => 17,  38 => 16,  35 => 15,  30 => 14,  21 => 7,  19 => 6,);
    }
}
