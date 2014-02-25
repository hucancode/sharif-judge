<?php

/* pages/admin/settings.twig */
class __TwigTemplate_dbc9ba60837df8e58f8636b121e9e27ac367b78773ae8be0d131fcfcb99586bb extends Twig_Template
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
        $context["selected"] = "settings";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-gear";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Settings";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Settings";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\ttabOverride.set(document.getElementsByTagName('textarea'));
});
</script>
";
    }

    // line 25
    public function block_title_menu($context, array $blocks = array())
    {
        // line 26
        echo "<span class=\"title_menu_item\">
\t<a href=\"http://docs.sharifjudge.ir/settings\" target=\"_blank\"><i class=\"fa fa-question-circle color6\"></i> Help</a>
</span>
";
    }

    // line 33
    public function block_main_content($context, array $blocks = array())
    {
        // line 34
        echo "<p class=\"input_p\">
";
        // line 35
        if (((isset($context["form_status"]) ? $context["form_status"] : null) == "ok")) {
            // line 36
            echo "\t<div class=\"shj_ok\">Settings updated successfully.</div>
";
        } elseif (((isset($context["form_status"]) ? $context["form_status"] : null) == "error")) {
            // line 38
            echo "\t<div class=\"shj_error\">Error updating settings.</div>
";
        }
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 41
            echo "\t<div class=\"shj_error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        if ((!(isset($context["defc"]) ? $context["defc"] : null))) {
            // line 44
            echo "\t<div class=\"shj_error\">\"Tester path\" is not correct.</div>
";
        }
        // line 46
        echo "</p>
";
        // line 47
        echo form_open("settings/update");
        echo "
\t<p class=\"input_p\">
\t\t<label for=\"form_timezone\">
\t\t\tTimezone<br>
\t\t\t<a target=\"_blank\" href=\"http://www.php.net/manual/en/timezones.php\">list of timezones</a>
\t\t</label>
\t\t<span class=\"form_comment timer\"></span><br>
\t\t<input id=\"form_timezone\" type=\"text\" name=\"timezone\" class=\"sharif_input medium\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["timezone"]) ? $context["timezone"] : null), "html", null, true);
        echo "\"/>
\t\t";
        // line 55
        echo form_error("timezone", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_week\">Week Start Day</label>
\t\t<select id=\"form_week\" name=\"week_start\" class=\"sharif_input\">
\t\t\t<option value=\"0\" ";
        // line 60
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">Sunday</option>
\t\t\t<option value=\"1\" ";
        // line 61
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 1)) ? ("selected=\"selected\"") : (""));
        echo ">Monday</option>
\t\t\t<option value=\"2\" ";
        // line 62
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 2)) ? ("selected=\"selected\"") : (""));
        echo ">Tuesday</option>
\t\t\t<option value=\"3\" ";
        // line 63
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 3)) ? ("selected=\"selected\"") : (""));
        echo ">Wednesday</option>
\t\t\t<option value=\"4\" ";
        // line 64
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 4)) ? ("selected=\"selected\"") : (""));
        echo ">Thursday</option>
\t\t\t<option value=\"5\" ";
        // line 65
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 5)) ? ("selected=\"selected\"") : (""));
        echo ">Friday</option>
\t\t\t<option value=\"6\" ";
        // line 66
        echo ((((isset($context["week_start"]) ? $context["week_start"] : null) == 6)) ? ("selected=\"selected\"") : (""));
        echo ">Saturday</option>
\t\t</select>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_t_path\">Full Path to <code>tester</code></label>
\t\t<input id=\"form_t_path\" type=\"text\" name=\"tester_path\" class=\"sharif_input medium\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["tester_path"]) ? $context["tester_path"] : null), "html", null, true);
        echo "\"/>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_a_path\">Full Path to <code>assignments</code></label>
\t\t<input id=\"form_a_path\" type=\"text\" name=\"assignments_root\" class=\"sharif_input medium\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["assignments_root"]) ? $context["assignments_root"] : null), "html", null, true);
        echo "\"/>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_up_limit\">Upload Size Limit (kB)</label>
\t\t<input id=\"form_up_limit\" type=\"text\" name=\"file_size_limit\" class=\"sharif_input medium\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["file_size_limit"]) ? $context["file_size_limit"] : null), "html", null, true);
        echo "\"/>
\t\t";
        // line 80
        echo form_error("file_size_limit", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_out_limit\">Output Size Limit (kB)</label>
\t\t<input id=\"form_out_limit\" type=\"text\" name=\"output_size_limit\" class=\"sharif_input medium\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["output_size_limit"]) ? $context["output_size_limit"] : null), "html", null, true);
        echo "\"/><br>
\t\t<span class=\"form_comment clear\">Sets a limit for size of output file generated by submitted code</span>
\t\t";
        // line 86
        echo form_error("output_size_limit", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_rpp_all\">Results Per Page</label>
\t\t<input id=\"form_rpp_all\" type=\"text\" name=\"rpp_all\" class=\"sharif_input medium\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["results_per_page_all"]) ? $context["results_per_page_all"] : null), "html", null, true);
        echo "\"/>
\t\t<p class=\"form_comment clear\">In \"All Submissions\"<br>Enter 0 for no limit</p>
\t\t";
        // line 92
        echo form_error("results_per_page_all", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_rpp_final\">Results Per Page</label>
\t\t<input id=\"form_rpp_final\" type=\"text\" name=\"rpp_final\" class=\"sharif_input medium\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["results_per_page_final"]) ? $context["results_per_page_final"] : null), "html", null, true);
        echo "\"/>
\t\t<p class=\"form_comment clear\">In \"Final Submissions\"<br>Enter 0 for no limit</p>
\t\t";
        // line 98
        echo form_error("results_per_page_final", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_en_reg\" type=\"checkbox\" name=\"enable_registration\" value=\"1\" ";
        // line 101
        echo (((isset($context["enable_registration"]) ? $context["enable_registration"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_en_reg\">Registration</label><br>
\t\t<span class=\"form_comment\">Open Public Registration.</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_reg_code\">Registration Code</label>
\t\t<input id=\"form_reg_code\" type=\"text\" name=\"registration_code\" class=\"sharif_input medium\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["registration_code"]) ? $context["registration_code"] : null), "html", null, true);
        echo "\"/><br>
\t\t<p class=\"form_comment clear\">If you want to enable registration (above option), It is better to give a registration code<br>
\t\t\tto students in your class for validating registration. Enter 0 to disable.</p>
\t\t";
        // line 110
        echo form_error("registration_code", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_log\" type=\"checkbox\" name=\"enable_log\" value=\"1\" ";
        // line 113
        echo (((isset($context["enable_log"]) ? $context["enable_log"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_log\">Log</label><br>
\t\t<span class=\"form_comment\">Enable Log</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_late_rule\">Default Coefficient Rule</label>
\t\t<span class=\"form_comment clear\">PHP script without &lt;?php ?&gt; tags</span><br>
\t\t<textarea id=\"form_late_rule\" name=\"default_late_rule\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["default_late_rule"]) ? $context["default_late_rule"] : null), "html", null, true);
        echo "</textarea>
\t</p>

\t<h2 class=\"shj_form\">Email</h2>

\t<p class=\"input_p\">
\t\t<label for=\"form_mail_from\">Send Emails From</label>
\t\t<input id=\"form_mail_from\" type=\"text\" name=\"mail_from\" class=\"sharif_input medium\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["mail_from"]) ? $context["mail_from"] : null), "html", null, true);
        echo "\"/>
\t\t";
        // line 128
        echo form_error("mail_from", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_mail_name\">Send Emails \"From\" Name</label>
\t\t<input id=\"form_mail_name\" type=\"text\" name=\"mail_from_name\" class=\"sharif_input medium\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["mail_from_name"]) ? $context["mail_from_name"] : null), "html", null, true);
        echo "\"/>
\t\t";
        // line 133
        echo form_error("mail_from_name", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_mail_reset\">Password Reset Email</label>
\t\t<span class=\"form_comment\">You can use {SITE_URL}, {RESET_LINK} and {VALID_TIME}</span><br>
\t\t<textarea id=\"form_mail_reset\" name=\"reset_password_mail\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["reset_password_mail"]) ? $context["reset_password_mail"] : null), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_mail_add\">Add User Email</label>
\t\t<span class=\"form_comment clear\">You can use {SITE_URL}, {LOGIN_URL}, {ROLE}, {USERNAME} and {PASSWORD}</span><br>
\t\t<textarea id=\"form_mail_add\" name=\"add_user_mail\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["add_user_mail"]) ? $context["add_user_mail"] : null), "html", null, true);
        echo "</textarea>
\t</p>


\t<h2 class=\"shj_form\">
\t\tSandboxing <span class=\"title_menu_item\">
\t\t\t<a href=\"http://docs.sharifjudge.ir/sandboxing\" target=\"_blank\"><i class=\"fa fa-question-circle color11\"></i> Help</a>
\t\t</span>
\t</h2>

\t<p class=\"input_p\">
\t\t<input id=\"form_easysandbox\" type=\"checkbox\" name=\"enable_easysandbox\" value=\"1\" ";
        // line 154
        echo (((isset($context["enable_easysandbox"]) ? $context["enable_easysandbox"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_easysandbox\">EasySandbox</label>
\t</p>
\t<p class=\"form_comment\">Enable EasySandbox for C/C++.<br>
\t\tYou must <a href=\"http://docs.sharifjudge.ir/sandboxing#build_easysandbox\" target=\"_blank\">build EasySandbox</a> before enabling it.<br>
\t\t";
        // line 159
        if ((!(isset($context["sandbox_built"]) ? $context["sandbox_built"] : null))) {
            // line 160
            echo "\t\t\t<span style=\"color: red;\">You have not built EasySandbox yet.</span>
\t\t";
        }
        // line 162
        echo "\t</p>

\t<p class=\"input_p\">
\t\t<input id=\"form_java_policy\" type=\"checkbox\" name=\"enable_java_policy\" value=\"1\" ";
        // line 165
        echo (((isset($context["enable_java_policy"]) ? $context["enable_java_policy"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_java_policy\">Java Policy</label>
\t</p>
\t<p class=\"form_comment\">
\t\tEnable <a href=\"http://docs.sharifjudge.ir/sandboxing#java_sandboxing\" target=\"_blank\">Java Sandboxing</a>
\t</p>



\t<h2 class=\"shj_form\">
\t\tShield <span class=\"title_menu_item\">
\t\t\t<a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\"><i class=\"fa fa-question-circle color11\"></i> Help</a>
\t\t</span>
\t</h2>

\t<p class=\"input_p\">
\t\t<input id=\"form_c_sh\" type=\"checkbox\" name=\"enable_c_shield\" value=\"1\" ";
        // line 181
        echo (((isset($context["enable_c_shield"]) ? $context["enable_c_shield"] : null)) ? ("checked") : (""));
        echo "/> <label for=\"form_c_sh\">C Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for C</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_cpp_sh\" type=\"checkbox\" name=\"enable_cpp_shield\" value=\"1\" ";
        // line 185
        echo (((isset($context["enable_cpp_shield"]) ? $context["enable_cpp_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_cpp_sh\">C++ Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for C++</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_py2_sh\" type=\"checkbox\" name=\"enable_py2_shield\" value=\"1\" ";
        // line 190
        echo (((isset($context["enable_py2_shield"]) ? $context["enable_py2_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_py2_sh\">Python 2 Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for Python 2</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_py3_sh\" type=\"checkbox\" name=\"enable_py3_shield\" value=\"1\" ";
        // line 195
        echo (((isset($context["enable_py3_shield"]) ? $context["enable_py3_shield"] : null)) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_py3_sh\">Python 3 Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for Python 3</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_def_c\">Shield Rules (for C)</label>
\t\t<textarea id=\"form_def_c\" name=\"def_c\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["defc"]) ? $context["defc"] : null), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_def_cpp\">Shield Rules (for C++)</label>
\t\t<textarea id=\"form_def_cpp\" name=\"def_cpp\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["defcpp"]) ? $context["defcpp"] : null), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_shield_py2\">Shield (for Python 2)</label>
\t\t<textarea id=\"form_shield_py2\" name=\"shield_py2\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["shield_py2"]) ? $context["shield_py2"] : null), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_shield_py3\">Shield (for Python 3)</label>
\t\t<textarea id=\"form_shield_py3\" name=\"shield_py3\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["shield_py3"]) ? $context["shield_py3"] : null), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<br>
\t\t<input type=\"submit\" value=\"Save Changes\" class=\"sharif_input\"/>
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 213,  400 => 209,  393 => 205,  386 => 201,  377 => 195,  369 => 190,  361 => 185,  354 => 181,  335 => 165,  330 => 162,  326 => 160,  324 => 159,  316 => 154,  302 => 143,  294 => 138,  286 => 133,  282 => 132,  275 => 128,  271 => 127,  261 => 120,  251 => 113,  245 => 110,  239 => 107,  230 => 101,  224 => 98,  219 => 96,  212 => 92,  207 => 90,  200 => 86,  195 => 84,  188 => 80,  184 => 79,  177 => 75,  170 => 71,  162 => 66,  158 => 65,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  130 => 55,  126 => 54,  116 => 47,  113 => 46,  109 => 44,  107 => 43,  98 => 41,  94 => 40,  90 => 38,  86 => 36,  84 => 35,  81 => 34,  78 => 33,  71 => 26,  68 => 25,  56 => 15,  53 => 14,  47 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
