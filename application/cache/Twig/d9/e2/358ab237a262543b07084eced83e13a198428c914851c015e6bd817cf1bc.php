<?php

/* pages/admin/add_user_result.twig */
class __TwigTemplate_d9e2358ab237a262543b07084eced83e13a198428c914851c015e6bd817cf1bc extends Twig_Template
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
        if ((isset($context["ok"]) ? $context["ok"] : null)) {
            // line 7
            echo "<p class=\"shj_ok\">These users added successfully:</p>
<ol>
\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ok"]) ? $context["ok"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t<li>Usename: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 0, array(), "array"), "html", null, true);
                echo " Email: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 1, array(), "array"), "html", null, true);
                echo " Password: <code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 2, array(), "array"), "html", null, true);
                echo "</code> Role: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 3, array(), "array"), "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "</ol>
";
        }
        // line 14
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 15
            echo "<p class=\"shj_error\">Error adding these users:</p>
<ol>
\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["error"]) ? $context["error"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "\t<li>Usename: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 0, array(), "array"), "html", null, true);
                echo " Email: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 1, array(), "array"), "html", null, true);
                echo " Password: <code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 2, array(), "array"), "html", null, true);
                echo "</code> Role: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 3, array(), "array"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), 4, array(), "array"), "html", null, true);
                echo ")</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/admin/add_user_result.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  58 => 18,  54 => 17,  50 => 15,  48 => 14,  44 => 12,  29 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }
}
