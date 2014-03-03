<?php

/* templates/base.twig */
class __TwigTemplate_739bf236b2ef8a58e4aad8369965aaf146ff4cbe7c8e4481d138b99bc4042e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 9
        $this->displayBlock('head_title', $context, $blocks);
        echo " - Sharif Judge</title>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo base_url("assets/images/favicon.ico");
        echo "\"/>
\t<link rel=\"stylesheet\" type='text/css' href=\"";
        // line 12
        echo base_url("assets/styles/main.css");
        echo "\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo base_url("assets/js/jquery-1.10.2.min.js");
        echo "\"></script>
\t<!-- You can use google's cdn for loading jquery: -->
\t<!-- <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script> -->
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo base_url("assets/js/jquery-ui-1.10.3.custom.min.js");
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo base_url("assets/styles/flick/jquery-ui-1.10.3.custom.min.css");
        echo "\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo base_url("assets/js/moment.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo base_url("assets/js/jquery.hoverIntent.minified.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo base_url("assets/js/jquery.cookie.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo base_url("assets/js/jquery.ba-resize.min.js");
        echo "\"></script>

\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo base_url("assets/noty/jquery.noty.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo base_url("assets/noty/layouts/center.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo base_url("assets/noty/layouts/bottomRight.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo base_url("assets/noty/themes/default.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 28
        echo base_url("assets/nano_scroller/nanoscroller.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 29
        echo base_url("assets/nano_scroller/jquery.nanoscroller.min.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 31
        echo base_url("assets/font/font-awesome/css/font-awesome.min.css");
        echo "'/>

</head>
<script>
shj={};
shj.site_url = '";
        // line 36
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(site_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.base_url = '";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, rtrim(base_url(), "/"), "js"), "html", null, true);
        echo "/';
shj.csrf_token = \$.cookie('shjcsrftoken');
shj.offset = moment('";
        // line 39
        echo shj_now_str();
        echo "').diff(moment());
shj.time = moment();
// notifications
shj.check_for_notifications = false;
shj.notif_check_delay = 30;
shj.color_scheme = 'github';
</script>

<script type=\"text/javascript\" src=\"";
        // line 47
        echo base_url("assets/js/shj_functions.js");
        echo "\"></script>

";
        // line 49
        $this->displayBlock('other_assets', $context, $blocks);
        // line 50
        echo "
<body id=\"body\">
";
        // line 52
        $this->env->loadTemplate("templates/top_bar.twig")->display($context);
        // line 53
        $this->env->loadTemplate("templates/side_bar.twig")->display($context);
        // line 54
        echo "<div id=\"main_container\" class=\"scroll-wrapper\">
\t<div class=\"scroll-content\">

\t\t<div id=\"page_title\">
\t\t\t<i class=\"fa ";
        // line 58
        $this->displayBlock('icon', $context, $blocks);
        echo "\"></i>
\t\t\t<span dir=\"auto\">";
        // line 59
        $this->displayBlock('title', $context, $blocks);
        echo "</span>
\t\t\t";
        // line 60
        $this->displayBlock('title_menu', $context, $blocks);
        // line 61
        echo "\t\t</div>

\t\t<div id=\"main_content\">
\t\t\t";
        // line 64
        $this->displayBlock('main_content', $context, $blocks);
        // line 66
        echo "\t\t</div>
\t</div>
</div>
";
        // line 69
        $this->displayBlock('body_end', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 49
    public function block_other_assets($context, array $blocks = array())
    {
    }

    // line 58
    public function block_icon($context, array $blocks = array())
    {
    }

    // line 59
    public function block_title($context, array $blocks = array())
    {
    }

    // line 60
    public function block_title_menu($context, array $blocks = array())
    {
    }

    // line 64
    public function block_main_content($context, array $blocks = array())
    {
        // line 65
        echo "\t\t\t";
    }

    // line 69
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 69,  208 => 65,  205 => 64,  200 => 60,  195 => 59,  190 => 58,  185 => 49,  180 => 9,  174 => 70,  172 => 69,  167 => 66,  165 => 64,  160 => 61,  158 => 60,  154 => 59,  150 => 58,  144 => 54,  142 => 53,  140 => 52,  136 => 50,  134 => 49,  129 => 47,  118 => 39,  113 => 37,  109 => 36,  101 => 31,  96 => 29,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  44 => 13,  40 => 12,  36 => 11,  31 => 9,  26 => 6,);
    }
}
