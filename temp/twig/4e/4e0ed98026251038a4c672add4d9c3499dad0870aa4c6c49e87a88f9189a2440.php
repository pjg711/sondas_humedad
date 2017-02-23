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
        echo "<!doctype html>
<html ng-app=\"sondasApp\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body ng-controller=\"mainController\">
    ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
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
        // line 15
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
        // line 36
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/css/styles.css\">
    <!-- <script src=\"/templates/";
        // line 37
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/js/functions.js\"></script> -->
    <script src=\"/templates/";
        // line 38
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/js/app.js\"></script>
    <!-- fin estilos propios -->
    ";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TITULO", array());
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"navbar navbar-fixed-bottom\">
        <div class=\"row\" style=\"width: 100%; height: 50px; border:1px solid gray; background-color: #dadada; color: #0086b3; vertical-align: middle;\">
            <div class=\"col-md-4 text-right\"><a href=\"";
        // line 47
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pagina", array()), "WEB", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "PROTOCOLO", array());
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "WWW_ROOT", array());
        echo "/templates/";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TEMPLATE", array());
        echo "/img/seedmech.png\"></a></div>
            <div class=\"col-md-8 text-left\">";
        // line 48
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

    public function getDebugInfo()
    {
        return array (  129 => 48,  120 => 47,  116 => 45,  113 => 44,  108 => 43,  102 => 15,  95 => 38,  91 => 37,  84 => 36,  60 => 15,  48 => 5,  45 => 4,  39 => 52,  36 => 44,  34 => 43,  30 => 41,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
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
    <title>{% block title %}{{ config.TITULO }}{% endblock %}</title>
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
