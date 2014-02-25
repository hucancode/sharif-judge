<?php

/* pages/scoreboard_table.twig */
class __TwigTemplate_8a340c42660342017e7b0b9236d409e2c2a40f5a143a23c436d5cf39fc7a12db extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 15
            echo "\t\t\t<th>
\t\t\t\t<a dir=\"auto\" href=\"";
            // line 16
            echo site_url(((("problems/" . (isset($context["assignment_id"]) ? $context["assignment_id"] : null)) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
            echo "</a><br>
\t\t\t\t<span class=\"tiny_text_b\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "score"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["total_score"]) ? $context["total_score"] : null), "html", null, true);
        echo "</span>
\t\t</th>
\t</tr>
</thead>

";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["scoreboard"]) ? $context["scoreboard"] : null), "username"));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t<td>";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["sc_username"]) ? $context["sc_username"] : null), "html", null, true);
            echo "</td>
\t<td dir=\"auto\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["names"]) ? $context["names"] : null), (isset($context["sc_username"]) ? $context["sc_username"] : null), array(), "array"), "html", null, true);
            echo "</td>
\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 33
                echo "\t<td>
\t\t";
                // line 34
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["scores"]) ? $context["scores"] : null), (isset($context["sc_username"]) ? $context["sc_username"] : null), array(), "array", false, true), $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), array(), "array", false, true), "score", array(), "any", true, true)) {
                    // line 35
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["scores"]) ? $context["scores"] : null), (isset($context["sc_username"]) ? $context["sc_username"] : null), array(), "array"), $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), array(), "array"), "score"), "html", null, true);
                    echo "<br>
\t\t\t<span class=\"tiny_text\" title=\"Time\">";
                    // line 36
                    echo time_hhmm($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["scores"]) ? $context["scores"] : null), (isset($context["sc_username"]) ? $context["sc_username"] : null), array(), "array"), $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), array(), "array"), "time"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["scoreboard"]) ? $context["scoreboard"] : null), "score", array(), "array"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), array(), "array"), "html", null, true);
            echo "</span>
\t<br>
\t<span class=\"tiny_text\" title=\"Total Time + Submit Penalty\">";
            // line 45
            echo time_hhmm($this->getAttribute($this->getAttribute((isset($context["scoreboard"]) ? $context["scoreboard"] : null), "submit_penalty", array(), "array"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), array(), "array"));
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
        return array (  152 => 49,  134 => 45,  129 => 43,  126 => 42,  119 => 40,  115 => 38,  110 => 36,  105 => 35,  103 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  64 => 27,  56 => 22,  52 => 20,  43 => 17,  37 => 16,  34 => 15,  30 => 14,  21 => 7,  19 => 6,);
    }
}
