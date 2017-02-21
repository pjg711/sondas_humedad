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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "TITULO", array());
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- informacion de login -->
    ";
        // line 6
        if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getLoginSession", array())) {
            // line 7
            echo "        ";
            echo $this->getAttribute((isset($context["m_login"]) ? $context["m_login"] : null), "logged", array(0 => $this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getUserActive", array()), 1 => $this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array())), "method");
            echo "
        ";
            // line 8
            if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array())) {
                // line 9
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- Primer panel admin -->
                    ";
                // line 12
                echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "new_user", array(), "method");
                echo "
                    ";
                // line 13
                if (array_key_exists("users", $context)) {
                    // line 14
                    echo "                        ";
                    echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "users_list", array(0 => (isset($context["users"]) ? $context["users"] : null)), "method");
                    echo "
                    ";
                }
                // line 16
                echo "                </div>
            </div>
        ";
            } else {
                // line 19
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    <!-- Primer panel -->
                    ";
                // line 23
                if (array_key_exists("users", $context)) {
                    // line 24
                    echo "                        ";
                    echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "users_list", array(0 => (isset($context["users"]) ? $context["users"] : null)), "method");
                    echo "
                    ";
                }
                // line 26
                echo "                </div>
            </div>
        ";
            }
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        <!-- pido usuario y contraseña -->
        ";
            // line 31
            echo $this->getAttribute((isset($context["m_login"]) ? $context["m_login"] : null), "login", array(0 => "/login", 1 => $context), "method");
            echo "
    ";
        }
    }

    // line 34
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
        return array (  112 => 34,  105 => 31,  102 => 30,  99 => 29,  94 => 26,  88 => 24,  86 => 23,  80 => 19,  75 => 16,  69 => 14,  67 => 13,  63 => 12,  58 => 9,  56 => 8,  51 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block title %}{{ config_php.TITULO }}{% endblock %}
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
                        {{ m_users.users_list(users) }}
                    {% endif %}
                </div>
            </div>
        {% else %}
            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    <!-- Primer panel -->
                    {% if users is defined %}
                        {{ m_users.users_list(users) }}
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
