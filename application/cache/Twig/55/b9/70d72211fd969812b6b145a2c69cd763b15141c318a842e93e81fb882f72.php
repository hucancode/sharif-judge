<?php

/* pages/admin/add_user.twig */
class __TwigTemplate_55b970d72211fd969812b6b145a2c69cd763b15141c318a842e93e81fb882f72 extends Twig_Template
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
        $context["selected"] = "users";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-plus";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Add Users";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Add Users";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        echo "\t<span class=\"title_menu_item\"><a href=\"http://docs.sharifjudge.ir/users#add_users\" target=\"_blank\"><i class=\"fa fa-question-circle color6\"></i> Help</a></span>
";
    }

    // line 20
    public function block_other_assets($context, array $blocks = array())
    {
        // line 21
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\t\$(document).ready(function(){
\t\ttabOverride.set(document.getElementsByTagName('textarea'));
\t});
</script>
<script>
\t\$(document).ready(function(){
\t\t\$(\"#add_users_button\").click(function(){
\t\t\t\$(\"#loading\").css('display','inline');
\t\t\t\$.post(
\t\t\t\t\t'";
        // line 32
        echo site_url("users/add");
        echo "',
\t\t\t{
\t\t\t\tsend_mail: (\$(\"#send_mail\").is(\":checked\")?1:0),
\t\t\t\tdelay: \$(\"#delay\").val(),
\t\t\t\tnew_users:\$(\"#new_users\").val(),
\t\t\t\tshj_csrf_token: shj.csrf_token
\t\t\t},
\t\t\t\t\tfunction(data) {
\t\t\t\t\t\t\$(\"#main_content\").html(data);
\t\t\t\t\t}
\t\t\t);
\t\t});
\t});
</script>
";
    }

    // line 51
    public function block_main_content($context, array $blocks = array())
    {
        // line 52
        echo "<p>You can use this field to add multiple users at the same time.</p>
<ul>
\t<li>Usernames may contain lowercase letters or numbers and must be between 3 and 20 characters in length.</li>
\t<li>Passwords must be between 6 and 30 characters in length.</li>
\t<li>If you want to send passwords by email, do not add too many users at one time. This may result in mail delivery fail.</li>
</ul>
<p class=\"input_p\">
\t<input type=\"checkbox\" name=\"send_mail\" id=\"send_mail\" /> Send usernames and passwords by email (Waits <input type=\"text\" name=\"delay\" id=\"delay\" class=\"sharif_input tiny\" value=\"2\"/> second(s) before sending each email, so please be patient).
</p>
<p class=\"input_p\">
<textarea name=\"new_users\" id=\"new_users\" rows=\"20\" cols=\"80\" class=\"sharif_input\">
# Lines starting with a # sign are comments.
# Each line (except comments) represents a user.
# The syntax of each line is:
#
# USERNAME EMAIL PASSWORD ROLE
#
# Roles: admin head_instructor instructor student
# You can use RANDOM[n] for password to generate random n-digit password.
</textarea>
</p>
<input type=\"submit\" class=\"sharif_input\" id=\"add_users_button\" value=\"Add Users\"/>
<span id=\"loading\" style=\"display: none;\"><img src=\"";
        // line 74
        echo base_url("assets/images/loading.gif");
        echo "\" /> Adding users... Please wait</span>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/add_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 74,  101 => 52,  98 => 51,  79 => 32,  64 => 21,  61 => 20,  56 => 15,  53 => 14,  47 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
