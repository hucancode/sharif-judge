<?php

/* pages/admin/rejudge.twig */
class __TwigTemplate_5e51a686a612b91570722c1e6b6c9e232fbf97ef5d169b00af1ea7617df30b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
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
        echo "fa-refresh";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Rejudge";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Rejudge";
    }

    // line 13
    public function block_main_content($context, array $blocks = array())
    {
        // line 14
        echo "<p>
\tSelected Assignment: <span dir=\"auto\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : null), "name"), "html", null, true);
        echo "</span>
</p>
<p>
\tBy clicking on rejudge, all submissions of selected problem will change to <code>PENDING</code> state. Then
\tSharif Judge rejudges them one by one.
</p>
<p>
\tIf you want to rejudge a single submission, you can click on rejudge button in <a href=\"";
        // line 22
        echo site_url("submissions/all");
        echo "\">All Submissions</a> or <a href=\"";
        echo site_url("submissions/final");
        echo "\">Final Submissions</a> page.
</p>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 25
            echo "\t";
            echo form_open("rejudge");
            echo "
\t\t<input type=\"hidden\" name=\"problem_id\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo "\"/>
\t\t<input type=\"submit\" class=\"sharif_input\" value=\"Rejudge Problem ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
            echo ")\"/>
\t</form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) ? $context["msg"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "\t<p class=\"shj_ok\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "pages/admin/rejudge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  101 => 31,  98 => 30,  87 => 27,  83 => 26,  78 => 25,  74 => 24,  67 => 22,  57 => 15,  54 => 14,  51 => 13,  45 => 10,  39 => 9,  33 => 8,  28 => 6,);
    }
}
