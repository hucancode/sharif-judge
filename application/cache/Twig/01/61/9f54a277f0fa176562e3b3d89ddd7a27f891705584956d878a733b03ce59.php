<?php

/* pages/dashboard.twig */
class __TwigTemplate_01619f54a277f0fa176562e3b3d89ddd7a27f891705584956d878a733b03ce59 extends Twig_Template
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
        $context["selected"] = "dashboard";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-dashboard";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/fullcalendar/fullcalendar.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 16
        echo base_url("assets/fullcalendar/fullcalendar.min.js");
        echo "\"></script>
<link rel='stylesheet' type='text/css' href='";
        // line 17
        echo base_url("assets/gridster/jquery.gridster.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 18
        echo base_url("assets/gridster/jquery.gridster.min.js");
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 19
        echo base_url("assets/js/jquery.autoellipsis-1.0.10.min.js");
        echo "\"></script>
<script>
\$(document).ready(function () {
\t\$('#calendar').fullCalendar({
\t\ttimeFormat: 'HH:mm { - HH:mm}',
\t\teditable: false,
\t\theight: 280,
\t\tfirstDay: ";
        // line 26
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo twig_escape_filter($this->env, $_week_start_, "html", null, true);
        echo ",
\t\tevents: [
\t\t\t";
        // line 28
        $context["colors"] = array(0 => "#812C8C", 1 => "#FF750D", 2 => "#2C578C", 3 => "#013440", 4 => "#A6222C", 5 => "#42758C", 6 => "#02A300", 7 => "#BA6900");
        // line 29
        echo "\t\t\t";
        if (isset($context["all_assignments"])) { $_all_assignments_ = $context["all_assignments"]; } else { $_all_assignments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_all_assignments_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 30
            echo "\t\t\t\t{id:";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_, "id"), "html", null, true);
            echo ",title:'";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_assignment_, "name"), "js"), "html", null, true);
            echo "', start:'";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_, "start_time"), "html", null, true);
            echo "', end:' ";
            if (isset($context["assignment"])) { $_assignment_ = $context["assignment"]; } else { $_assignment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_assignment_, "finish_time"), "html", null, true);
            echo "',
\t\t\t\tallDay:false,color:'";
            // line 31
            if (isset($context["colors"])) { $_colors_ = $context["colors"]; } else { $_colors_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_colors_, ($this->getAttribute($_loop_, "index0") % twig_length_filter($this->env, $_colors_)), array(), "array"), "html", null, true);
            echo "'}
\t\t\t";
            // line 32
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                echo ",";
            }
            // line 33
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t]
\t});
\tvar gridster = \$(\".gridster ul\").gridster({
\t\twidget_margins: [10, 10],
\t\twidget_base_dimensions: [350, 350],
\t\tserialize_params: function (\$w, wgd) {
\t\t\treturn {
\t\t\t\tr: wgd.row,
\t\t\t\tc: wgd.col,
\t\t\t\tx: wgd.size_x,
\t\t\t\ty: wgd.size_y
\t\t\t}
\t\t},
\t\tdraggable: {
\t\t\thandle: '.widget_title',
\t\t\tstop: function (event, ui) { // send widget positions to server for saving in database
\t\t\t\tvar positions = JSON.stringify(gridster.serialize());
\t\t\t\t\$.post(
\t\t\t\t\t\"";
        // line 52
        echo site_url("dashboard/widget_positions");
        echo "\",
\t\t\t\t\t{
\t\t\t\t\t\tpositions: positions,
\t\t\t\t\t\tshj_csrf_token: shj.csrf_token
\t\t\t\t\t}
\t\t\t\t);
\t\t\t}
\t\t}
\t}).data('gridster');
\t\$('.notif_text').ellipsis();
});
</script>
";
    }

    // line 68
    public function block_main_content($context, array $blocks = array())
    {
        // line 69
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 70
            echo "\t<p class=\"shj_error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "<div style=\"height: 15px;\"></div>
<div class=\"gridster\">
\t<?php \$i = 0; ?>
\t<ul>
\t\t<li data-row=\"";
        // line 76
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 0, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 0, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 0, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 0, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 0, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 0, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 0, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 0, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t\t<div class=\"shj_widget\">
\t\t\t\t<div class=\"widget_title\"><i class=\"fa fa-calendar-o fa-lg color10\"></i> Calendar</div>
\t\t\t\t<div class=\"widget_scrollable scroll-wrapper\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<div class=\"widget_contents_container\" id='calendar'></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>

\t\t<li data-row=\"";
        // line 87
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 1, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 1, array(), "array"), "r", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-col=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 1, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 1, array(), "array"), "c", array(), "array")) : ("2")), "html", null, true);
        echo "\"
\t\t    data-sizex=\"";
        // line 88
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 1, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 1, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 1, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 1, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t\t<div class=\"shj_widget\">
\t\t\t\t<div class=\"widget_title\"><i class=\"fa fa-bell-o fa-lg color2\"></i>
\t\t\t\t\tLatest Notifications
\t\t\t\t\t";
        // line 92
        if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
        if (($_user_level_ >= 2)) {
            // line 93
            echo "\t\t\t\t\t\t<a title=\"New Notification\" href=\"";
            echo site_url("notifications/add");
            echo "\" class=\"pull-right\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus color11\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"widget_scrollable scroll-wrapper\">
\t\t\t\t\t<div class=\"scroll-content\">
\t\t\t\t\t\t<div class=\"widget_contents_container\">
\t\t\t\t\t\t\t";
        // line 101
        if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
        if ((twig_length_filter($this->env, $_notifications_) == 0)) {
            // line 102
            echo "\t\t\t\t\t\t\t\t<p style=\"text-align: center;\">Nothing yet...</p>
\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t";
        if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_notifications_);
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 105
            echo "\t\t\t\t\t\t\t\t<div class=\"notif\" id=\"number";
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notification_, "id"), "html", null, true);
            echo "\" data-id=\"";
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notification_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"notif_title\" dir=\"auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"anchor ttl_n\">";
            // line 107
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notification_, "title"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notif_meta\" dir=\"ltr\">
\t\t\t\t\t\t\t\t\t\t";
            // line 109
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notification_, "time"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 110
            if (isset($context["user_level"])) { $_user_level_ = $context["user_level"]; } else { $_user_level_ = null; }
            if (($_user_level_ >= 2)) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"anchor edt_n\">Edit</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"anchor del_n\">Delete</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"notif_text latest\" dir=\"auto\">";
            // line 116
            if (isset($context["notification"])) { $_notification_ = $context["notification"]; } else { $_notification_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_notification_, "text"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>

\t\t<li data-row=\"";
        // line 125
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 2, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 2, array(), "array"), "r", array(), "array")) : ("2")), "html", null, true);
        echo "\" data-col=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 2, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 2, array(), "array"), "c", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizex=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 2, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 2, array(), "array"), "x", array(), "array")) : ("1")), "html", null, true);
        echo "\" data-sizey=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_wp_, 2, array(), "array")) ? ($this->getAttribute($this->getAttribute($_wp_, 2, array(), "array"), "y", array(), "array")) : ("1")), "html", null, true);
        echo "\">
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 125,  326 => 119,  316 => 116,  312 => 114,  307 => 111,  304 => 110,  299 => 109,  293 => 107,  283 => 105,  277 => 104,  273 => 102,  270 => 101,  264 => 97,  256 => 93,  253 => 92,  242 => 88,  234 => 87,  210 => 76,  204 => 72,  194 => 70,  189 => 69,  186 => 68,  169 => 52,  149 => 34,  135 => 33,  130 => 32,  124 => 31,  109 => 30,  90 => 29,  88 => 28,  82 => 26,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
