<?php

/* pages/notifications.twig */
class __TwigTemplate_3efe927b38a0bbf8b3c49837de2309f425c41cc14309f805057e1f72d61a4cf0 extends Twig_Template
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
        $context["selected"] = "notifications";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-bell";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Notifications";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Notifications";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
            // line 16
            echo "\t<span class=\"title_menu_item\"><a href=\"";
            echo site_url("notifications/add");
            echo "\"><i class=\"fa fa-plus color10\"></i> New</a></span>
\t";
        }
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) == 0)) {
            // line 24
            echo "<p style=\"text-align: center;\">Nothing yet...</p>
";
        }
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 27
            echo "\t<div class=\"notif\" id=\"number";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "id"), "html", null, true);
            echo "\">
\t\t<div class=\"notif_title\" dir=\"auto\">
\t\t\t<span class=\"anchor ttl_n\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "title"), "html", null, true);
            echo "</span>
\t\t\t<div class=\"notif_meta\">
\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "time"), "html", null, true);
            echo "
\t\t\t\t";
            // line 32
            if (((isset($context["user_level"]) ? $context["user_level"] : null) >= 2)) {
                // line 33
                echo "\t\t\t\t\t<span class=\"anchor edt_n\">Edit</span>
\t\t\t\t\t<span class=\"anchor del_n\">Delete</span>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"notif_text\" dir=\"auto\">
\t\t\t";
            // line 39
            echo $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "text");
            echo "
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "pages/notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  103 => 36,  98 => 33,  96 => 32,  92 => 31,  87 => 29,  79 => 27,  75 => 26,  71 => 24,  69 => 23,  66 => 22,  58 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
