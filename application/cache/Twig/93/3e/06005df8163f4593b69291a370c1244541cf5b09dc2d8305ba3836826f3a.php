<?php

/* pages/admin/queue.twig */
class __TwigTemplate_933e06005df8163f4593b69291a370c1244541cf5b09dc2d8305ba3836826f3a extends Twig_Template
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
        $context["selected"] = "";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-play";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Submission Queue";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Submission Queue";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script>
\t\$(document).ready(function(){
\t\t\$(\".shj_act\").click(function(){
\t\t\tvar action=\$(this).attr('id');
\t\t\t\$.post(
\t\t\t\t\t'";
        // line 20
        echo site_url("queue");
        echo "/'+action,
\t\t\t\t\t{shj_csrf_token: shj.csrf_token},
\t\t\t\t\tfunction(data){
\t\t\t\t\t\tif (data=='success')
\t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t}
\t\t\t);
\t\t});
\t});
</script>
";
    }

    // line 34
    public function block_main_content($context, array $blocks = array())
    {
        // line 35
        echo "<p>
\t";
        // line 36
        if (isset($context["working"])) { $_working_ = $context["working"]; } else { $_working_ = null; }
        if ($_working_) {
            // line 37
            echo "\t\t<i class=\"fa fa-play fa-lg color6\"></i> Queue is working
\t";
        } else {
            // line 39
            echo "\t\t<i class=\"fa fa-pause fa-lg color10\"></i> Queue is not working
\t";
        }
        // line 41
        echo "\t| Total submissions in queue: ";
        if (isset($context["queue"])) { $_queue_ = $context["queue"]; } else { $_queue_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_queue_), "html", null, true);
        echo "
</p>
<p>
\t<a href=\"#\" class=\"shj_act\" id=\"pause\"><i class=\"fa fa-pause\"></i> Pause</a> |
\t<a href=\"#\" class=\"shj_act\" id=\"resume\"><i class=\"fa fa-play\"></i> Resume</a> |
\t<a href=\"#\" class=\"shj_act\" id=\"empty_queue\"><i class=\"fa fa-times-circle\"></i> Empty Queue</a>
</p>
<table class=\"sharif_table\">
\t<thead>
\t<tr>
\t\t<th>#</th>
\t\t<th>Submit ID</th>
\t\t<th>UserID</th>
\t\t<th>Assignment</th>
\t\t<th>Problem</th>
\t\t<th>Type (judge/rejudge)</th>
\t</tr>
\t</thead>
\t";
        // line 59
        if (isset($context["queue"])) { $_queue_ = $context["queue"]; } else { $_queue_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_queue_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            echo "\t\t<tr>
\t\t\t<td>";
            // line 61
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 62
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "submit_id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 63
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "username"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 64
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "assignment"), "html", null, true);
            echo " (<span dir=\"auto\">";
            if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_all_assignments_, $this->getAttribute($_item_, "assignment"), array(), "array"), "name"), "html", null, true);
            echo "</span>)</td>
\t\t\t<td>";
            // line 65
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "problem"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 66
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/queue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 69,  167 => 66,  162 => 65,  153 => 64,  148 => 63,  143 => 62,  138 => 61,  135 => 60,  117 => 59,  94 => 41,  90 => 39,  86 => 37,  83 => 36,  80 => 35,  77 => 34,  62 => 20,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
