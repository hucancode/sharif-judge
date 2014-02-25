<?php

/* templates/simple_header.twig */
class __TwigTemplate_eb333556b0015ff9b40db6ace6d95d34379d158ad4857e42398f1087c1c6d63f extends Twig_Template
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
        return array (  33 => 12,  29 => 11,  24 => 9,  117 => 61,  106 => 53,  98 => 48,  90 => 43,  86 => 42,  79 => 38,  75 => 37,  69 => 34,  64 => 31,  56 => 27,  49 => 23,  43 => 20,  34 => 13,  32 => 12,  28 => 10,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
