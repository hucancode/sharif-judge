<?php

/* pages/admin/settings.twig */
class __TwigTemplate_af89b4b3ba8e8ebd5daff73c3915725f297bc16c29592a086e7ae6ccab5f043c extends Twig_Template
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
        if (isset($context["form_status"])) { $_form_status_ = $context["form_status"]; } else { $_form_status_ = null; }
        if (($_form_status_ == "ok")) {
            // line 36
            echo "\t<div class=\"shj_ok\">Settings updated successfully.</div>
";
        } elseif (($_form_status_ == "error")) {
            // line 38
            echo "\t<div class=\"shj_error\">Error updating settings.</div>
";
        }
        // line 40
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 41
            echo "\t<div class=\"shj_error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        if (isset($context["defc"])) { $_defc_ = $context["defc"]; } else { $_defc_ = null; }
        if ((!$_defc_)) {
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
        if (isset($context["timezone"])) { $_timezone_ = $context["timezone"]; } else { $_timezone_ = null; }
        echo twig_escape_filter($this->env, $_timezone_, "html", null, true);
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
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 0)) ? ("selected=\"selected\"") : (""));
        echo ">Sunday</option>
\t\t\t<option value=\"1\" ";
        // line 61
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 1)) ? ("selected=\"selected\"") : (""));
        echo ">Monday</option>
\t\t\t<option value=\"2\" ";
        // line 62
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 2)) ? ("selected=\"selected\"") : (""));
        echo ">Tuesday</option>
\t\t\t<option value=\"3\" ";
        // line 63
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 3)) ? ("selected=\"selected\"") : (""));
        echo ">Wednesday</option>
\t\t\t<option value=\"4\" ";
        // line 64
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 4)) ? ("selected=\"selected\"") : (""));
        echo ">Thursday</option>
\t\t\t<option value=\"5\" ";
        // line 65
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 5)) ? ("selected=\"selected\"") : (""));
        echo ">Friday</option>
\t\t\t<option value=\"6\" ";
        // line 66
        if (isset($context["week_start"])) { $_week_start_ = $context["week_start"]; } else { $_week_start_ = null; }
        echo ((($_week_start_ == 6)) ? ("selected=\"selected\"") : (""));
        echo ">Saturday</option>
\t\t</select>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_t_path\">Full Path to <code>tester</code></label>
\t\t<input id=\"form_t_path\" type=\"text\" name=\"tester_path\" class=\"sharif_input medium\" value=\"";
        // line 71
        if (isset($context["tester_path"])) { $_tester_path_ = $context["tester_path"]; } else { $_tester_path_ = null; }
        echo twig_escape_filter($this->env, $_tester_path_, "html", null, true);
        echo "\"/>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_a_path\">Full Path to <code>assignments</code></label>
\t\t<input id=\"form_a_path\" type=\"text\" name=\"assignments_root\" class=\"sharif_input medium\" value=\"";
        // line 75
        if (isset($context["assignments_root"])) { $_assignments_root_ = $context["assignments_root"]; } else { $_assignments_root_ = null; }
        echo twig_escape_filter($this->env, $_assignments_root_, "html", null, true);
        echo "\"/>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_up_limit\">Upload Size Limit (kB)</label>
\t\t<input id=\"form_up_limit\" type=\"text\" name=\"file_size_limit\" class=\"sharif_input medium\" value=\"";
        // line 79
        if (isset($context["file_size_limit"])) { $_file_size_limit_ = $context["file_size_limit"]; } else { $_file_size_limit_ = null; }
        echo twig_escape_filter($this->env, $_file_size_limit_, "html", null, true);
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
        if (isset($context["output_size_limit"])) { $_output_size_limit_ = $context["output_size_limit"]; } else { $_output_size_limit_ = null; }
        echo twig_escape_filter($this->env, $_output_size_limit_, "html", null, true);
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
        if (isset($context["results_per_page_all"])) { $_results_per_page_all_ = $context["results_per_page_all"]; } else { $_results_per_page_all_ = null; }
        echo twig_escape_filter($this->env, $_results_per_page_all_, "html", null, true);
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
        if (isset($context["results_per_page_final"])) { $_results_per_page_final_ = $context["results_per_page_final"]; } else { $_results_per_page_final_ = null; }
        echo twig_escape_filter($this->env, $_results_per_page_final_, "html", null, true);
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
        if (isset($context["enable_registration"])) { $_enable_registration_ = $context["enable_registration"]; } else { $_enable_registration_ = null; }
        echo (($_enable_registration_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_en_reg\">Registration</label><br>
\t\t<span class=\"form_comment\">Open Public Registration.</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_reg_code\">Registration Code</label>
\t\t<input id=\"form_reg_code\" type=\"text\" name=\"registration_code\" class=\"sharif_input medium\" value=\"";
        // line 107
        if (isset($context["registration_code"])) { $_registration_code_ = $context["registration_code"]; } else { $_registration_code_ = null; }
        echo twig_escape_filter($this->env, $_registration_code_, "html", null, true);
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
        if (isset($context["enable_log"])) { $_enable_log_ = $context["enable_log"]; } else { $_enable_log_ = null; }
        echo (($_enable_log_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_log\">Log</label><br>
\t\t<span class=\"form_comment\">Enable Log</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_late_rule\">Default Coefficient Rule</label>
\t\t<span class=\"form_comment clear\">PHP script without &lt;?php ?&gt; tags</span><br>
\t\t<textarea id=\"form_late_rule\" name=\"default_late_rule\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 120
        if (isset($context["default_late_rule"])) { $_default_late_rule_ = $context["default_late_rule"]; } else { $_default_late_rule_ = null; }
        echo twig_escape_filter($this->env, $_default_late_rule_, "html", null, true);
        echo "</textarea>
\t</p>

\t<h2 class=\"shj_form\">Email</h2>

\t<p class=\"input_p\">
\t\t<label for=\"form_mail_from\">Send Emails From</label>
\t\t<input id=\"form_mail_from\" type=\"text\" name=\"mail_from\" class=\"sharif_input medium\" value=\"";
        // line 127
        if (isset($context["mail_from"])) { $_mail_from_ = $context["mail_from"]; } else { $_mail_from_ = null; }
        echo twig_escape_filter($this->env, $_mail_from_, "html", null, true);
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
        if (isset($context["mail_from_name"])) { $_mail_from_name_ = $context["mail_from_name"]; } else { $_mail_from_name_ = null; }
        echo twig_escape_filter($this->env, $_mail_from_name_, "html", null, true);
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
        if (isset($context["reset_password_mail"])) { $_reset_password_mail_ = $context["reset_password_mail"]; } else { $_reset_password_mail_ = null; }
        echo twig_escape_filter($this->env, $_reset_password_mail_, "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_mail_add\">Add User Email</label>
\t\t<span class=\"form_comment clear\">You can use {SITE_URL}, {LOGIN_URL}, {ROLE}, {USERNAME} and {PASSWORD}</span><br>
\t\t<textarea id=\"form_mail_add\" name=\"add_user_mail\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 143
        if (isset($context["add_user_mail"])) { $_add_user_mail_ = $context["add_user_mail"]; } else { $_add_user_mail_ = null; }
        echo twig_escape_filter($this->env, $_add_user_mail_, "html", null, true);
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
        if (isset($context["enable_easysandbox"])) { $_enable_easysandbox_ = $context["enable_easysandbox"]; } else { $_enable_easysandbox_ = null; }
        echo (($_enable_easysandbox_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_easysandbox\">EasySandbox</label>
\t</p>
\t<p class=\"form_comment\">Enable EasySandbox for C/C++.<br>
\t\tYou must <a href=\"http://docs.sharifjudge.ir/sandboxing#build_easysandbox\" target=\"_blank\">build EasySandbox</a> before enabling it.<br>
\t\t";
        // line 159
        if (isset($context["sandbox_built"])) { $_sandbox_built_ = $context["sandbox_built"]; } else { $_sandbox_built_ = null; }
        if ((!$_sandbox_built_)) {
            // line 160
            echo "\t\t\t<span style=\"color: red;\">You have not built EasySandbox yet.</span>
\t\t";
        }
        // line 162
        echo "\t</p>

\t<p class=\"input_p\">
\t\t<input id=\"form_java_policy\" type=\"checkbox\" name=\"enable_java_policy\" value=\"1\" ";
        // line 165
        if (isset($context["enable_java_policy"])) { $_enable_java_policy_ = $context["enable_java_policy"]; } else { $_enable_java_policy_ = null; }
        echo (($_enable_java_policy_) ? ("checked") : (""));
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
        if (isset($context["enable_c_shield"])) { $_enable_c_shield_ = $context["enable_c_shield"]; } else { $_enable_c_shield_ = null; }
        echo (($_enable_c_shield_) ? ("checked") : (""));
        echo "/> <label for=\"form_c_sh\">C Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for C</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_cpp_sh\" type=\"checkbox\" name=\"enable_cpp_shield\" value=\"1\" ";
        // line 185
        if (isset($context["enable_cpp_shield"])) { $_enable_cpp_shield_ = $context["enable_cpp_shield"]; } else { $_enable_cpp_shield_ = null; }
        echo (($_enable_cpp_shield_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_cpp_sh\">C++ Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for C++</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_py2_sh\" type=\"checkbox\" name=\"enable_py2_shield\" value=\"1\" ";
        // line 190
        if (isset($context["enable_py2_shield"])) { $_enable_py2_shield_ = $context["enable_py2_shield"]; } else { $_enable_py2_shield_ = null; }
        echo (($_enable_py2_shield_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_py2_sh\">Python 2 Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for Python 2</span>
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_py3_sh\" type=\"checkbox\" name=\"enable_py3_shield\" value=\"1\" ";
        // line 195
        if (isset($context["enable_py3_shield"])) { $_enable_py3_shield_ = $context["enable_py3_shield"]; } else { $_enable_py3_shield_ = null; }
        echo (($_enable_py3_shield_) ? ("checked") : (""));
        echo "/>
\t\t<label for=\"form_py3_sh\">Python 3 Shield</label><br>
\t\t<span class=\"form_comment\">Enable <a href=\"http://docs.sharifjudge.ir/shield\" target=\"_blank\">Shield</a> for Python 3</span>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_def_c\">Shield Rules (for C)</label>
\t\t<textarea id=\"form_def_c\" name=\"def_c\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 201
        if (isset($context["defc"])) { $_defc_ = $context["defc"]; } else { $_defc_ = null; }
        echo twig_escape_filter($this->env, $_defc_, "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_def_cpp\">Shield Rules (for C++)</label>
\t\t<textarea id=\"form_def_cpp\" name=\"def_cpp\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 205
        if (isset($context["defcpp"])) { $_defcpp_ = $context["defcpp"]; } else { $_defcpp_ = null; }
        echo twig_escape_filter($this->env, $_defcpp_, "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_shield_py2\">Shield (for Python 2)</label>
\t\t<textarea id=\"form_shield_py2\" name=\"shield_py2\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 209
        if (isset($context["shield_py2"])) { $_shield_py2_ = $context["shield_py2"]; } else { $_shield_py2_ = null; }
        echo twig_escape_filter($this->env, $_shield_py2_, "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_shield_py3\">Shield (for Python 3)</label>
\t\t<textarea id=\"form_shield_py3\" name=\"shield_py3\" rows=\"15\" class=\"sharif_input add_text clear\">";
        // line 213
        if (isset($context["shield_py3"])) { $_shield_py3_ = $context["shield_py3"]; } else { $_shield_py3_ = null; }
        echo twig_escape_filter($this->env, $_shield_py3_, "html", null, true);
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
        return array (  443 => 213,  435 => 209,  427 => 205,  419 => 201,  409 => 195,  400 => 190,  391 => 185,  383 => 181,  363 => 165,  358 => 162,  354 => 160,  351 => 159,  342 => 154,  327 => 143,  318 => 138,  310 => 133,  305 => 132,  298 => 128,  293 => 127,  282 => 120,  271 => 113,  265 => 110,  258 => 107,  248 => 101,  242 => 98,  236 => 96,  229 => 92,  223 => 90,  216 => 86,  210 => 84,  203 => 80,  198 => 79,  190 => 75,  182 => 71,  173 => 66,  168 => 65,  163 => 64,  158 => 63,  153 => 62,  148 => 61,  143 => 60,  135 => 55,  130 => 54,  120 => 47,  117 => 46,  113 => 44,  110 => 43,  100 => 41,  95 => 40,  91 => 38,  87 => 36,  84 => 35,  81 => 34,  78 => 33,  71 => 26,  68 => 25,  56 => 15,  53 => 14,  47 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
