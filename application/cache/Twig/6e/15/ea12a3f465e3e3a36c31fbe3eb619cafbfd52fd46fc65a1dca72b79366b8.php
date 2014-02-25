<?php

/* pages/submit.twig */
class __TwigTemplate_6e15ea12a3f465e3e3a36c31fbe3eb619cafbfd52fd46fc65a1dca72b79366b8 extends Twig_Template
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
        $context["selected"] = "submit";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-location-arrow";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Submit";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Submit";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script>
\tshj.p={};
\t";
        // line 17
        if (isset($context["problems_js"])) { $_problems_js_ = $context["problems_js"]; } else { $_problems_js_ = null; }
        echo $_problems_js_;
        echo "
\t\$(document).ready(function(){
\t\t\$(\"select#problems\").change(function(){
\t\t\tvar v = \$(this).val();
\t\t\t\$('select#languages').empty();
\t\t\t\$('<option value=\"0\" selected=\"selected\">-- Select Language --</option>').appendTo('select#languages');
\t\t\tif (v==0)
\t\t\t\treturn;
\t\t\tfor (var i=0;i<shj.p[v].length;i++)
\t\t\t\t\$('<option value=\"'+shj.p[v][i]+'\">'+shj.p[v][i]+'</option>').appendTo('select#languages');
\t\t});
\t});
</script>
";
    }

    // line 34
    public function block_main_content($context, array $blocks = array())
    {
        // line 35
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if (($_error_ != "none")) {
            // line 36
            echo "<p>";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
            echo "</p>
";
        } else {
            // line 38
            echo "\t<p>Selected assignment: <span dir=\"auto\">";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_, "name"), "html", null, true);
            echo "</span></p>
\t<p>Coefficient: ";
            // line 39
            if (isset($context["coefficient"])) { $_coefficient_ = $context["coefficient"]; } else { $_coefficient_ = null; }
            echo twig_escape_filter($this->env, $_coefficient_, "html", null, true);
            echo "%</p>
\t";
            // line 40
            echo form_open_multipart("submit");
            echo "
\t<p class=\"input_p\">
\t\t<label for=\"problems\" class=\"tiny\">Problem:</label>
\t\t<select id=\"problems\" name =\"problem\" class=\"sharif_input\">
\t\t\t<option value=\"0\" selected=\"selected\">-- Select Problem --</option>
\t\t\t";
            // line 45
            if (isset($context["problems"])) { $_problems_ = $context["problems"]; } else { $_problems_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_problems_);
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 46
                echo "\t\t\t\t<option dir=\"auto\" value=\"";
                if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "name"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t</select>
\t\t";
            // line 49
            echo form_error("problem", "<div class=\"shj_error\">", "</div>");
            echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"languages\" class=\"tiny\">Language:</label>
\t\t<select id=\"languages\" name=\"language\" class=\"sharif_input\">
\t\t\t<option value=\"0\" selected=\"selected\">-- Select Language --</option>
\t\t</select>
\t\t";
            // line 56
            echo form_error("language", "<div class=\"shj_error\">", "</div>");
            echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"file\" class=\"tiny\">File:</label>
\t\t<input type=\"file\" id=\"file\" class=\"sharif_input medium\" name=\"userfile\" />
\t\t";
            // line 61
            if (isset($context["upload_state"])) { $_upload_state_ = $context["upload_state"]; } else { $_upload_state_ = null; }
            if (($_upload_state_ == "error")) {
                // line 62
                echo "\t\t<div class=\"shj_error\">Error uploading file.</div>
\t\t";
            } elseif (($_upload_state_ == "ok")) {
                // line 64
                echo "\t\t<div class=\"shj_ok\">File uploaded successfully. See the result in 'All Submissions'.</div>
\t\t";
            }
            // line 66
            echo "\t</p>
\t<p class=\"input_p\">
\t\t<input type=\"submit\" value=\"Submit\" class=\"sharif_input\"/>
\t</p>
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  156 => 64,  152 => 62,  149 => 61,  141 => 56,  131 => 49,  128 => 48,  115 => 46,  110 => 45,  102 => 40,  97 => 39,  91 => 38,  84 => 36,  81 => 35,  78 => 34,  59 => 17,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
