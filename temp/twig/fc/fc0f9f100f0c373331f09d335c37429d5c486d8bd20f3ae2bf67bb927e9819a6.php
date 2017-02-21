<?php

/* base.html */
class __TwigTemplate_a4ebc89307e91d57cdc56b39b178223ecd4fcd83b2404099d89034e59c670069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["m_login"] = $this->loadTemplate("macros/m_login.html", "base.html", 1);
        // line 2
        $context["m_users"] = $this->loadTemplate("macros/m_users.html", "base.html", 2);
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 35
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
    <meta name=\"google-site-verification\" content=\"4ICx_x8s8IurLmbe5UCa5hd97QlC3F2zfv8AyZvbLts\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
    <meta http-equiv=\"cache-control\" content=\"max-age=0\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <meta http-equiv=\"expires\" content=\"0\">
    <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\">
    <meta http-equiv=\"pragma\" content=\"no-cache\">
    <meta name=\"author\" content=\"Pablo Julian Garcia\">
    <meta name=\"keywords\" content=\"Seedmech alerta sondas\">
    <meta name=\"DESCRIPTION\" content=\"Sistema para sondas de humedad de suelo\">
    <title>";
        // line 15
        echo (isset($context["TITULO"]) ? $context["TITULO"] : null);
        echo "</title>
    <!-- estilos propios -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/css/styles.css\">
    <script src=\"";
        // line 18
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/lib/functions.js\"></script>
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"/lib/font-awesome-4.5.0/css/font-awesome.min.css\">
    <!-- fin fontawesome -->
    <!-- bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/bootstrap/dist/css/bootstrap.css\">
    <script src=\"/lib/jquery/dist/jquery.js\"></script>
    <script src=\"/lib/bootstrap/dist/js/bootstrap.js\"></script>
    <!-- fin bootstrap -->
    <!-- toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/toastr/build/toastr.min.css\">
    <script type=\"text/javascript\" src=\"/lib/toastr/build/toastr.min.js\"></script>
    <!-- fin toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/pikaday/css/pikaday.css\">
    <script type=\"text/javascript\" src=\"/lib/pikaday/pikaday.js\"></script>
</head>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "    
    ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"navbar navbar-fixed-bottom\">
        <div class=\"row\" style=\"width: 100%; height: 50px; border:1px solid gray; background-color: #dadada; color: #0086b3; vertical-align: middle;\">
            <div class=\"col-md-4 text-right\"><a href=\"http://www.seedmech.com\"><img src=\"";
        // line 42
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/img/seedmech.png\"></a></div>
            <div class=\"col-md-8 text-left\">";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pagina", array()), "PIE", array());
        echo "</div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  112 => 42,  108 => 40,  105 => 39,  101 => 37,  98 => 36,  94 => 39,  91 => 38,  88 => 36,  85 => 35,  61 => 18,  54 => 17,  49 => 15,  36 => 4,  33 => 3,  29 => 35,  27 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macros/m_login.html\" as m_login %}
{% import \"macros/m_users.html\" as m_users %}
{% block head %}
<head>
    <meta name=\"google-site-verification\" content=\"4ICx_x8s8IurLmbe5UCa5hd97QlC3F2zfv8AyZvbLts\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
    <meta http-equiv=\"cache-control\" content=\"max-age=0\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <meta http-equiv=\"expires\" content=\"0\">
    <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\">
    <meta http-equiv=\"pragma\" content=\"no-cache\">
    <meta name=\"author\" content=\"Pablo Julian Garcia\">
    <meta name=\"keywords\" content=\"Seedmech alerta sondas\">
    <meta name=\"DESCRIPTION\" content=\"Sistema para sondas de humedad de suelo\">
    <title>{{ TITULO }}</title>
    <!-- estilos propios -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ config.PROTOCOLO }}{{ config.WWW_ROOT }}/templates/{{ config.TEMPLATE }}/css/styles.css\">
    <script src=\"{{ config.PROTOCOLO }}{{ config.WWW_ROOT }}/templates/{{ config.TEMPLATE }}/lib/functions.js\"></script>
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"/lib/font-awesome-4.5.0/css/font-awesome.min.css\">
    <!-- fin fontawesome -->
    <!-- bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/bootstrap/dist/css/bootstrap.css\">
    <script src=\"/lib/jquery/dist/jquery.js\"></script>
    <script src=\"/lib/bootstrap/dist/js/bootstrap.js\"></script>
    <!-- fin bootstrap -->
    <!-- toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/toastr/build/toastr.min.css\">
    <script type=\"text/javascript\" src=\"/lib/toastr/build/toastr.min.js\"></script>
    <!-- fin toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/pikaday/css/pikaday.css\">
    <script type=\"text/javascript\" src=\"/lib/pikaday/pikaday.js\"></script>
</head>
{% endblock %}
{% block body %}
    {% block header %}
    {% endblock %}
    
    {% block footer %}
    <div class=\"navbar navbar-fixed-bottom\">
        <div class=\"row\" style=\"width: 100%; height: 50px; border:1px solid gray; background-color: #dadada; color: #0086b3; vertical-align: middle;\">
            <div class=\"col-md-4 text-right\"><a href=\"http://www.seedmech.com\"><img src=\"{{ config.PROTOCOLO }}{{ config.WWW_ROOT }}/templates/{{ config.TEMPLATE }}/img/seedmech.png\"></a></div>
            <div class=\"col-md-8 text-left\">{{ config.pagina.PIE }}</div>
        </div>
    </div>
    {% endblock %}
{% endblock %}", "base.html", "/home/pablo/public_html/sondas_humedad/templates/default/base.html");
    }
}
