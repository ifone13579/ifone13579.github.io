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

/* ucp_register.html */
class __TwigTemplate_ec22a74094009e5c0a1415df2ffbe300516e502d9b6a520fb9ae79c2ee311423 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 9
        echo ($context["COOKIE_NAME"] ?? null);
        echo "_lang=' + lang_iso + '; path=";
        echo ($context["COOKIE_PATH"] ?? null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>

";
        // line 15
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 16
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t\t<h2>";
            // line 19
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OAUTH_REGISTRATION");
            echo "</h2>

\t\t\t";
            // line 21
            $this->loadTemplate(($context["PROVIDER_TEMPLATE_FILE"] ?? null), "ucp_register.html", 21)->display($context);
            // line 22
            echo "\t\t</div>
\t</div>
";
        }
        // line 25
        echo "
<form id=\"register\" method=\"post\" action=\"";
        // line 26
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<h2>";
        // line 31
        echo ($context["SITENAME"] ?? null);
        echo " - ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
        echo "</h2>

\t<fieldset class=\"fields2\">
\t";
        // line 34
        if (($context["ERROR"] ?? null)) {
            echo "<dl><dd class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</dd></dl>";
        }
        // line 35
        echo "\t";
        if (($context["L_REG_COND"] ?? null)) {
            // line 36
            echo "\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REG_COND");
            echo "</strong></dd></dl>
\t";
        }
        // line 38
        echo "\t";
        // line 39
        echo "\t<dl>
\t\t<dt><label for=\"username\">";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 41
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" tabindex=\"2\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 45
        echo ($context["PASSWORD"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\"  tabindex=\"3\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 49
        echo ($context["PASSWORD_CONFIRM"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"email\">";
        // line 52
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"email\" tabindex=\"4\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 53
        echo ($context["EMAIL"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>

\t";
        // line 56
        // line 57
        echo "\t<hr />

\t";
        // line 59
        // line 60
        echo "\t";
        if (($context["S_LANG_OPTIONS"] ?? null)) {
            // line 61
            echo "\t<dl>
\t\t<dt><label for=\"lang\">";
            // line 62
            echo ($this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
            // line 63
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
            echo "\">";
            echo ($context["S_LANG_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t";
        }
        // line 66
        echo "
\t";
        // line 67
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 68
        echo "
\t";
        // line 69
        // line 70
        echo "\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 70))) {
            // line 71
            echo "\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 74
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 75)) {
                    echo " for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 75);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 75);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "S_REQUIRED", [], "any", false, false, false, 75)) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 76)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 76);
                    echo "</span>";
                }
                // line 77
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 77)) {
                    echo "<br /><span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 77);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 78);
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t";
        }
        // line 82
        echo "
\t";
        // line 83
        // line 84
        echo "\t</fieldset>
\t</div>
</div>
";
        // line 87
        if (($context["CAPTCHA_TEMPLATE"] ?? null)) {
            // line 88
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 89
            echo "\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "ucp_register.html", 89)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 91
        echo "
";
        // line 92
        if (($context["S_COPPA"] ?? null)) {
            // line 93
            echo "<div class=\"panel\">
\t<div class=\"inner\">

\t<h4>";
            // line 96
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t<p>";
            // line 98
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_EXPLAIN");
            echo "</p>
\t</div>
</div>
";
        }
        // line 102
        echo "
";
        // line 103
        // line 104
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 109
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 110
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t\t";
        // line 111
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>

\t</div>
</div>
</form>

";
        // line 118
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 118)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 118,  357 => 111,  353 => 110,  349 => 109,  342 => 104,  341 => 103,  338 => 102,  331 => 98,  326 => 96,  321 => 93,  319 => 92,  316 => 91,  302 => 89,  298 => 88,  296 => 87,  291 => 84,  290 => 83,  287 => 82,  284 => 81,  275 => 78,  266 => 77,  260 => 76,  246 => 75,  243 => 74,  239 => 73,  233 => 71,  230 => 70,  229 => 69,  226 => 68,  214 => 67,  211 => 66,  203 => 63,  199 => 62,  196 => 61,  193 => 60,  192 => 59,  188 => 57,  187 => 56,  179 => 53,  174 => 52,  166 => 49,  161 => 48,  153 => 45,  146 => 44,  138 => 41,  131 => 40,  128 => 39,  126 => 38,  120 => 36,  117 => 35,  111 => 34,  103 => 31,  93 => 26,  90 => 25,  85 => 22,  83 => 21,  76 => 19,  71 => 16,  69 => 15,  58 => 9,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_register.html", "");
    }
}
