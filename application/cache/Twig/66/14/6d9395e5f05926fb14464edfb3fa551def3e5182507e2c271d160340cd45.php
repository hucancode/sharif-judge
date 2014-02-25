<?php

/* pages/admin/add_notification.twig */
class __TwigTemplate_66146d9395e5f05926fb14464edfb3fa551def3e5182507e2c271d160340cd45 extends Twig_Template
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
        $context["selected"] = "notifications";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? ("fa-edit") : ("fa-plus"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? ("Edit") : ("New"));
        echo " Notification";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? ("Edit") : ("New"));
        echo " Notification";
    }

    // line 12
    public function block_other_assets($context, array $blocks = array())
    {
        // line 13
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/tinymce/tinymce.min.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\ttinymce.init({
\t\tselector: 'textarea#notif_text',
\t\ttoolbar_items_size: 'small',
\t\trelative_urls: false,
\t\twidth: 700,
\t\theight: 300,
\t\tresize: false,
\t\tplugins: 'directionality emoticons textcolor link code',
\t\ttoolbar1: \"undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ltr rtl\",
\t\ttoolbar2: \"forecolor backcolor | emoticons | link unlink anchor image media code | removeformat\"
\t});
});
</script>
";
    }

    // line 33
    public function block_main_content($context, array $blocks = array())
    {
        // line 34
        echo form_open(("notifications/" . (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? (("edit/" . $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "id"))) : ("add"))));
        echo "
";
        // line 35
        if ((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) {
            // line 36
            echo "\t<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "id"), "html", null, true);
            echo "\"/>
";
        }
        // line 38
        echo "<p class=\"input_p\">
\t<label for=\"form_title\" class=\"tiny\">Title:</label>
\t<input id=\"form_title\" name=\"title\" type=\"text\" class=\"sharif_input\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "title"), "html", null, true);
        echo "\"/>
</p>
<p class=\"input_p\">
\t<label for=\"notif_text\" class=\"tiny\">Text:</label><br><br>
\t<textarea id=\"notif_text\" name=\"text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notif_edit"]) ? $context["notif_edit"] : null), "text"), "html", null, true);
        echo "</textarea>
</p>
<p class=\"input_p\">
\t<input type=\"submit\" value=\"";
        // line 47
        echo (((isset($context["notif_edit"]) ? $context["notif_edit"] : null)) ? ("Save") : ("Add"));
        echo "\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/add_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  105 => 44,  98 => 40,  94 => 38,  88 => 36,  86 => 35,  82 => 34,  79 => 33,  57 => 13,  54 => 12,  47 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
