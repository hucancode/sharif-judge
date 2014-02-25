<?php

/* templates/simple_header.twig */
class __TwigTemplate_eb46d9cf1b171db34c1fb58e84f702a6659503d89727e588e029afe148100e27 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
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
        return array (  29 => 11,  24 => 9,  81 => 37,  75 => 35,  73 => 34,  68 => 31,  64 => 29,  62 => 28,  57 => 26,  49 => 21,  45 => 20,  33 => 12,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
