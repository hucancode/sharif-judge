<?php

/* pages/admin/install.twig */
class __TwigTemplate_be2503d9437c89f5d498b9d5c5983de457805e3280191966b28d07ef7c7a4e36 extends Twig_Template
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
        $context["title"] = "Installation";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 10
            echo "\t<div id=\"install_success\">
\t\t<h2>Sharif Judge Installed</h2>
\t\t";
            // line 12
            if ((!(isset($context["key_changed"]) ? $context["key_changed"] : null))) {
                // line 13
                echo "\t\t\t<p class=\"shj_error\">
\t\t\t\t<code>application/config/config.php</code> is not writable by PHP.
\t\t\t</p>
\t\t\t<p>
\t\t\t\tFor security reasons, you should change the encryption key manually.<br>
\t\t\t\tOpen <code>application/config/config.php</code> and change the encryption key in this line:
\t\t\t</p>
\t\t\t<pre>\$config['encryption_key'] = '";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["enc_key"]) ? $context["enc_key"] : null), "html", null, true);
                echo "';</pre>
\t\t\t<p>
\t\t\t\tThe key should be a 32-characters string as random as possible, with numbers and uppercase and lowercase letters.<br>
\t\t\t\tYou can use this random string: <code>";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["random_key"]) ? $context["random_key"] : null), "html", null, true);
                echo "</code>
\t\t\t</p>
\t\t\t<br>
\t\t";
            }
            // line 27
            echo "\t\t<p class=\"shj_ok\">Sharif Judge installed! Now you can <a href=\"";
            echo site_url("login");
            echo "\">login</a>.</p>
\t</div>

";
        } else {
            // line 31
            echo "
\t<div id=\"install_form\">
\t\t<h2>Sharif Judge Installation</h2>
\t\t";
            // line 34
            echo form_open("install");
            echo "
\t\t<p class=\"input_p\">
\t\t\t<label for=\"form_username\">Admin username:</label>
\t\t\t<input id=\"form_username\" class=\"sharif_input\" type=\"text\" name=\"username\" required=\"required\" pattern=\"[0-9A-Za-z]{3,20}\" title=\"The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" autofocus/>
\t\t\t";
            // line 38
            echo form_error("username", "<div class=\"shj_error\">", "</div>");
            echo "
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<label for=\"form_email\">Admin email:</label>
\t\t\t<input id=\"form_email\" type=\"email\" autocomplete=\"off\" name=\"email\" required=\"required\" class=\"sharif_input\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
            echo "\"/>
\t\t\t";
            // line 43
            echo form_error("email", "<div class=\"shj_error\">", "</div>");
            echo "
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<label for=\"form_password\">Admin password:</label>
\t\t\t<input id=\"form_password\" type=\"password\" name=\"password\" required=\"required\" pattern=\"[0-9A-Za-z]{6,20}\" title=\"The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters\" class=\"sharif_input\"/>
\t\t\t";
            // line 48
            echo form_error("password", "<div class=\"shj_error\">", "</div>");
            echo "
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<label for=\"form_password_2\">Password, again:</label>
\t\t\t<input id=\"form_password_2\" type=\"password\" name=\"password_again\" required=\"required\" class=\"sharif_input\"/>
\t\t\t";
            // line 53
            echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
            echo "
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<input class=\"sharif_input\" type=\"submit\" value=\"Continue\"/>
\t\t</p>
\t\t</form>
\t</div>
";
        }
        // line 61
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/admin/install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 61,  106 => 53,  98 => 48,  90 => 43,  86 => 42,  79 => 38,  75 => 37,  69 => 34,  64 => 31,  56 => 27,  49 => 23,  43 => 20,  34 => 13,  32 => 12,  28 => 10,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
