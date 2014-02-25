<?php

/* templates/simple_header.twig */
class __TwigTemplate_b420b01ea411dfd475e359bde6cfd3bd1ef770313dddadb8ee20e85c5a96abb2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 9
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo " - Sharif Judge</title>
\t<meta content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"icon\" href=\"";
        // line 11
        echo base_url("assets/images/favicon.ico");
        echo "\"/>
\t<link rel=\"stylesheet\" type='text/css' href=\"";
        // line 12
        echo base_url("assets/styles/login.css");
        echo "\"/>
</head>
<body id=\"body\">";
    }

    public function getTemplateName()
    {
        return "templates/simple_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  30 => 11,  24 => 9,  121 => 61,  110 => 53,  102 => 48,  94 => 43,  90 => 42,  83 => 38,  79 => 37,  73 => 34,  68 => 31,  60 => 27,  52 => 23,  45 => 20,  36 => 13,  33 => 12,  29 => 10,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
