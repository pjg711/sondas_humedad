<?php

/* index.twig */
class __TwigTemplate_41a619116ef36e95f47cec4d39fd3fa2a24b733be6bbd5b7915133d84c75c50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["m_login"] = $this->loadTemplate("macros/m_login.twig", "index.twig", 2);
        // line 3
        $context["m_users"] = $this->loadTemplate("macros/m_general.twig", "index.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TITULO", array());
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- informacion de login -->
    ";
        // line 8
        if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getLoginSession", array())) {
            // line 9
            echo "        ";
            echo $context["m_login"]->getlogged($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getUserActive", array()), $this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array()));
            echo "
        ";
            // line 10
            if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array())) {
                // line 11
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- Primer panel admin -->
                    ";
                // line 14
                echo $context["m_users"]->getnew_user();
                echo "
                    ";
                // line 15
                if (array_key_exists("users", $context)) {
                    // line 16
                    echo "                        ";
                    echo $context["m_users"]->getusers_list((isset($context["users"]) ? $context["users"] : null), (isset($context["config"]) ? $context["config"] : null));
                    echo "
                    ";
                }
                // line 18
                echo "                </div>
            </div>
        ";
            } else {
                // line 21
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    <!-- Primer panel -->
                    ";
                // line 25
                if (array_key_exists("users", $context)) {
                    // line 26
                    echo "                        ";
                    echo $context["m_users"]->getusers_list((isset($context["users"]) ? $context["users"] : null), (isset($context["config"]) ? $context["config"] : null));
                    echo "
                    ";
                }
                // line 28
                echo "                </div>
            </div>
        ";
            }
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "        <!-- pido usuario y contraseña -->
        ";
            // line 33
            echo $context["m_login"]->getlogin("/login", $context);
            echo "
    ";
        }
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  110 => 33,  107 => 32,  104 => 31,  99 => 28,  93 => 26,  91 => 25,  85 => 21,  80 => 18,  74 => 16,  72 => 15,  68 => 14,  63 => 11,  61 => 10,  56 => 9,  54 => 8,  51 => 7,  48 => 6,  42 => 5,  36 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig\" %}
{% import \"macros/m_login.twig\" as m_login %}
{% import \"macros/m_general.twig\" as m_users %}
{% block title %}{{ config.TITULO }}{% endblock %}
{% block head %}{{ parent() }}{% endblock %}
{% block content %}
    <!-- informacion de login -->
    {% if Login.getLoginSession %}
        {{ m_login.logged(Login.getUserActive, Login.getIsAdmin) }}
        {% if Login.getIsAdmin %}
            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- Primer panel admin -->
                    {{ m_users.new_user() }}
                    {% if users is defined %}
                        {{ m_users.users_list(users, config) }}
                    {% endif %}
                </div>
            </div>
        {% else %}
            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    <!-- Primer panel -->
                    {% if users is defined %}
                        {{ m_users.users_list(users, config) }}
                    {% endif %}
                </div>
            </div>
        {% endif %}
    {% else %}
        <!-- pido usuario y contraseña -->
        {{ m_login.login('/login', _context) }}
    {% endif %}
{% endblock %}
{% block footer %}{{ parent() }}{% endblock %}
", "index.twig", "/home/pablo/public_html/sondas_humedad/templates/default/index.twig");
    }
}
