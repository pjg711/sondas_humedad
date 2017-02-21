<?php

/* base.twig */
class __TwigTemplate_27258e22b63ac300539ea6edb896cd91ae86a27cba68765bc32e3f3d6860a3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["m_login"] = $this->loadTemplate("macros/m_login.twig", "base.twig", 1);
        // line 2
        $context["m_users"] = $this->loadTemplate("macros/m_general.twig", "base.twig", 2);
        // line 3
        echo "<!doctype html>
<html ng-app=\"sondasApp\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body ng-controller=\"mainController\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta name=\"google-site-verification\" content=\"4ICx_x8s8IurLmbe5UCa5hd97QlC3F2zfv8AyZvbLts\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
    <meta http-equiv=\"cache-control\" content=\"max-age=0\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <meta http-equiv=\"expires\" content=\"0\">
    <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\">
    <meta http-equiv=\"pragma\" content=\"no-cache\">
    <meta name=\"author\" content=\"Pablo Julian Garcia\">
    <meta name=\"keywords\" content=\"Seedmech alerta sondas\">
    <meta name=\"description\" content=\"Sistema para sondas de humedad de suelo\">
    <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/twbs/bootstrap/dist/css/bootstrap.css\">
    <script src=\"/lib/vendor/components/jquery/jquery.js\"></script>
    <script src=\"/lib/vendor/twbs/bootstrap/dist/js/bootstrap.js\"></script>
    <!-- fin bootstrap -->
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"/lib/vendor/components/font-awesome/css/font-awesome.min.css\">
    <!-- fin fontawesome -->
    <!-- angularjs -->
    <script src=\"/lib/vendor/opis-assets/angular/angular.js\"></script>
    <!-- fin angularjs -->
    <!-- toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/grimmlink/toastr/build/toastr.min.css\">
    <script type=\"text/javascript\" src=\"/lib/vendor/grimmlink/toastr/build/toastr.min.js\"></script>
    <!-- fin toastr -->
    <!-- pikaday -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/rhubarbphp/pikaday/css/pikaday.css\">
    <script type=\"text/javascript\" src=\"/lib/vendor/rhubarbphp/pikaday/pikaday.js\"></script>
    <!-- fin pikaday -->
    <!-- estilos propios -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/css/styles.css\">
    <!-- <script src=\"/templates/";
        // line 39
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/js/functions.js\"></script> -->
    <script src=\"/templates/";
        // line 40
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/js/app.js\"></script>
    <!-- fin estilos propios -->
    ";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "TITULO", array());
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "    <div class=\"navbar navbar-fixed-bottom\">
        <div class=\"row\" style=\"width: 100%; height: 50px; border:1px solid gray; background-color: #dadada; color: #0086b3; vertical-align: middle;\">
            <div class=\"col-md-4 text-right\"><a href=\"";
        // line 49
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pagina", array()), "WEB", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/img/seedmech.png\"></a></div>
            <div class=\"col-md-8 text-left\">";
        // line 50
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pagina", array()), "PIE", array());
        echo "</div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  124 => 49,  120 => 47,  117 => 46,  112 => 45,  106 => 17,  99 => 40,  95 => 39,  88 => 38,  64 => 17,  52 => 7,  49 => 6,  43 => 54,  40 => 46,  38 => 45,  34 => 43,  32 => 6,  27 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macros/m_login.twig\" as m_login %}
{% import \"macros/m_general.twig\" as m_users %}
<!doctype html>
<html ng-app=\"sondasApp\">
<head>
    {% block head %}
    <meta name=\"google-site-verification\" content=\"4ICx_x8s8IurLmbe5UCa5hd97QlC3F2zfv8AyZvbLts\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
    <meta http-equiv=\"cache-control\" content=\"max-age=0\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <meta http-equiv=\"expires\" content=\"0\">
    <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\">
    <meta http-equiv=\"pragma\" content=\"no-cache\">
    <meta name=\"author\" content=\"Pablo Julian Garcia\">
    <meta name=\"keywords\" content=\"Seedmech alerta sondas\">
    <meta name=\"description\" content=\"Sistema para sondas de humedad de suelo\">
    <title>{% block title %}{{ config_php.TITULO }}{% endblock %}</title>
    <!-- bootstrap -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/twbs/bootstrap/dist/css/bootstrap.css\">
    <script src=\"/lib/vendor/components/jquery/jquery.js\"></script>
    <script src=\"/lib/vendor/twbs/bootstrap/dist/js/bootstrap.js\"></script>
    <!-- fin bootstrap -->
    <!-- fontawesome -->
    <link rel=\"stylesheet\" href=\"/lib/vendor/components/font-awesome/css/font-awesome.min.css\">
    <!-- fin fontawesome -->
    <!-- angularjs -->
    <script src=\"/lib/vendor/opis-assets/angular/angular.js\"></script>
    <!-- fin angularjs -->
    <!-- toastr -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/grimmlink/toastr/build/toastr.min.css\">
    <script type=\"text/javascript\" src=\"/lib/vendor/grimmlink/toastr/build/toastr.min.js\"></script>
    <!-- fin toastr -->
    <!-- pikaday -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/lib/vendor/rhubarbphp/pikaday/css/pikaday.css\">
    <script type=\"text/javascript\" src=\"/lib/vendor/rhubarbphp/pikaday/pikaday.js\"></script>
    <!-- fin pikaday -->
    <!-- estilos propios -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ config.PROTOCOLO }}{{ config.WWW_ROOT }}/templates/{{ config.TEMPLATE }}/css/styles.css\">
    <!-- <script src=\"/templates/{{ config.TEMPLATE }}/js/functions.js\"></script> -->
    <script src=\"/templates/{{ config.TEMPLATE }}/js/app.js\"></script>
    <!-- fin estilos propios -->
    {% endblock %}
</head>
<body ng-controller=\"mainController\">
    {% block content %}{% endblock %}
    {% block footer %}
    <div class=\"navbar navbar-fixed-bottom\">
        <div class=\"row\" style=\"width: 100%; height: 50px; border:1px solid gray; background-color: #dadada; color: #0086b3; vertical-align: middle;\">
            <div class=\"col-md-4 text-right\"><a href=\"{{ config.pagina.WEB }}\"><img src=\"{{ config.PROTOCOLO }}{{ config.WWW_ROOT }}/templates/{{ config.TEMPLATE }}/img/seedmech.png\"></a></div>
            <div class=\"col-md-8 text-left\">{{ config.pagina.PIE }}</div>
        </div>
    </div>
    {% endblock %}
</body>
</html>
", "base.twig", "/home/pablo/public_html/sondas_humedad/templates/default/base.twig");
    }
}
