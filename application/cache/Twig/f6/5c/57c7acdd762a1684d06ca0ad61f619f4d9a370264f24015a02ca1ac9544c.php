<?php

/* pages/admin/users.twig */
class __TwigTemplate_f65c57c7acdd762a1684d06ca0ad61f619f4d9a370264f24015a02ca1ac9544c extends Twig_Template
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
        $context["selected"] = "users";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-users";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Users";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Users";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        echo "\t<span class=\"title_menu_item\"><a href=\"http://docs.sharifjudge.ir/users\" target=\"_blank\"><i class=\"fa fa-question-circle color6\"></i> Help</a></span>
\t<span class=\"title_menu_item\"><a href=\"";
        // line 16
        echo site_url("users/add");
        echo "\"><i class=\"fa fa-plus color11\"></i> Add Users</a></span>
\t<span class=\"title_menu_item\"><a href=\"";
        // line 17
        echo site_url("users/list_excel");
        echo "\"><i class=\"fa fa-download color9\"></i> Excel</a></span>
";
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        if ((isset($context["deleted_user"]) ? $context["deleted_user"] : null)) {
            // line 24
            echo "\t<p class=\"shj_ok\">User deleted successfully.</p>
";
        }
        // line 26
        if ((isset($context["deleted_submissions"]) ? $context["deleted_submissions"] : null)) {
            // line 27
            echo "\t<p class=\"shj_ok\">Submissions of selected user deleted successfully.</p>
";
        }
        // line 29
        echo "<div style=\"height:15px\"></div>
<table class=\"sharif_table\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>User ID</th>
\t\t\t<th>Username</th>
\t\t\t<th>Display Name</th>
\t\t\t<th>Email</th>
\t\t\t<th>Role</th>
\t\t\t<th>First Login</th>
\t\t\t<th>Last Login</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</thead>
\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td id=\"un\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</td>
\t\t\t<td dir=\"auto\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "display_name"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_login_time")) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_login_time")) : ("Never")), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_login_time")) ? ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_login_time")) : ("Never")), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a title=\"Edit\" href=\"";
            // line 55
            echo site_url(("profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")));
            echo "\"><i class=\"fa fa-pencil fa-lg color3\"></i></a>
\t\t\t\t<span title=\"Delete User\" class=\"delete_user pointer\"><i title=\"Delete User\" class=\"fa fa-times fa-lg color2\"></i></span>
\t\t\t\t<span title=\"Delete Submissions\" class=\"delete_submissions pointer\"><i class=\"fa fa-times-circle fa-lg color1\"></i></span>
\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 61,  155 => 55,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  117 => 45,  100 => 44,  83 => 29,  79 => 27,  77 => 26,  73 => 24,  71 => 23,  68 => 22,  62 => 17,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
