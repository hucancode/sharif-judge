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
shj.finish_time = moment(\"";
        // line 41
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        echo $this->getAttribute($_assignment_, "finish_time");
        echo "\");
shj.extra_time = moment.duration(";
        // line 42
        if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
        echo $this->getAttribute($_assignment_, "extra_time");
        echo ", 'seconds');
// notifications
shj.check_for_notifications = false;
shj.notif_check_delay = 30;
shj.color_scheme = 'github';
</script>

<script type=\"text/javascript\" src=\"";
        // line 49
        echo base_url("assets/js/shj_functions.js");
        echo "\"></script>

";
        // line 51
        $this->displayBlock('other_assets', $context, $blocks);
        // line 52
        echo "
<body id=\"body\">
";
        // line 54
        $this->env->loadTemplate("templates/top_bar.twig")->display($context);
        // line 55
        $this->env->loadTemplate("templates/side_bar.twig")->display($context);
        // line 56
        echo "<div id=\"main_container\" class=\"scroll-wrapper\">
\t<div class=\"scroll-content\">

\t\t<div id=\"page_title\">
\t\t\t<i class=\"fa ";
        // line 60
        $this->displayBlock('icon', $context, $blocks);
        echo "\"></i>
\t\t\t<span dir=\"auto\">";
        // line 61
        $this->displayBlock('title', $context, $blocks);
        echo "</span>
\t\t\t";
        // line 62
        $this->displayBlock('title_menu', $context, $blocks);
        // line 63
        echo "\t\t</div>

\t\t<div id=\"main_content\">
\t\t\t";
        // line 66
        $this->displayBlock('main_content', $context, $blocks);
        // line 68
        echo "\t\t</div>
\t</div>
</div>
";
        // line 71
        $this->displayBlock('body_end', $context, $blocks);
        // line 72
        echo "</body>
</html>";
    }

    // line 9
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 51
    public function block_other_assets($context, array $blocks = array())
    {
    }

    // line 60
    public function block_icon($context, array $blocks = array())
    {
    }

    // line 61
    public function block_title($context, array $blocks = array())
    {
    }

    // line 62
    public function block_title_menu($context, array $blocks = array())
    {
    }

    // line 66
    public function block_main_content($context, array $blocks = array())
    {
        // line 67
        echo "\t\t\t";
    }

    // line 71
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
        return array (  221 => 71,  217 => 67,  214 => 66,  209 => 62,  199 => 60,  184 => 72,  182 => 71,  177 => 68,  175 => 66,  170 => 63,  168 => 62,  164 => 61,  160 => 60,  154 => 56,  152 => 55,  150 => 54,  146 => 52,  144 => 51,  139 => 49,  128 => 42,  123 => 41,  118 => 39,  113 => 37,  101 => 31,  96 => 29,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  44 => 13,  36 => 11,  31 => 9,  26 => 6,  334 => 125,  326 => 119,  316 => 116,  312 => 114,  307 => 111,  304 => 110,  299 => 109,  293 => 107,  283 => 105,  277 => 104,  273 => 102,  270 => 101,  264 => 97,  256 => 93,  253 => 92,  242 => 88,  234 => 87,  210 => 76,  204 => 61,  194 => 51,  189 => 9,  186 => 68,  169 => 52,  149 => 34,  135 => 33,  130 => 32,  124 => 31,  109 => 36,  90 => 29,  88 => 28,  82 => 26,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 12,  34 => 8,  29 => 6,);
    }
}
