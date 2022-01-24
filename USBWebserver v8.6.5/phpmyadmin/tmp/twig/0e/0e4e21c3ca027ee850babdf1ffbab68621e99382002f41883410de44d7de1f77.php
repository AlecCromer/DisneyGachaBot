<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* columns_definitions/column_length.twig */
class __TwigTemplate_aced072a124f1c4761010569d0fad3b7bb207c647b2b32e2cfa43925e3fde4ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<input id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    type=\"text\"
    name=\"field_length[";
        // line 3
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    size=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["length_values_input_size"] ?? null), "html", null, true);
        echo "\"
    value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["length_to_display"] ?? null), "html", null, true);
        echo "\"
    class=\"textfield\">
<p class=\"enum_notice\" id=\"enum_notice_";
        // line 7
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\">
    <a href=\"#\" class=\"open_enum_editor\">
        ";
        // line 9
        echo _gettext("Edit ENUM/SET values");
        // line 10
        echo "    </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_length.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  65 => 9,  58 => 7,  53 => 5,  49 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_length.twig", "C:\\Users\\Alec\\Documents\\GitHub\\JavaPrograms\\my-waifu-jda-bot\\USBWebserver v8.6.5\\phpmyadmin\\templates\\columns_definitions\\column_length.twig");
    }
}