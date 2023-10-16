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

/* captcha_recaptcha.html */
class __TwigTemplate_50c178c04dd8d4364eb840b98c2d674d9b4399b1e62f6c88ecc083fdb4e86e93 extends \Twig\Template
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
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 2
            echo "\t<dl>
\t<dd>
\t<noscript>
\t\t<div>";
            // line 5
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
\t</noscript>

\t\t";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_INVISIBLE");
            echo "
\t\t<script src=\"";
            // line 9
            echo ($context["RECAPTCHA_SERVER"] ?? null);
            echo ".js?hl=";
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_LANG"), "js");
            echo "\" async defer></script>
\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 10
            echo ($context["RECAPTCHA_PUBKEY"] ?? null);
            echo "\" data-size=\"invisible\"></div>
\t</dd>
\t</dl>
";
        } else {
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  60 => 10,  54 => 9,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha.html", "");
    }
}
