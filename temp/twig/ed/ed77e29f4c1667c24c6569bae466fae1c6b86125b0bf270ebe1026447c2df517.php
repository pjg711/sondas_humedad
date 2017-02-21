<?php

/* index.html */
class __TwigTemplate_530d9a4d1001a487ae46c17a2e45c8237768862c1fd7051d618ecb6460720dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- informacion de login -->
    ";
        // line 5
        if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getLoginSession", array())) {
            // line 6
            echo "        ";
            echo $this->getAttribute((isset($context["m_login"]) ? $context["m_login"] : null), "logged", array(0 => $this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getUserActive", array()), 1 => $this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array())), "method");
            echo "
        ";
            // line 7
            if ($this->getAttribute((isset($context["Login"]) ? $context["Login"] : null), "getIsAdmin", array())) {
                // line 8
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    Primer panel admin
                </div>
            </div>    
        ";
            } else {
                // line 14
                echo "            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    Primer panel
                    ";
                // line 18
                if (array_key_exists("users", $context)) {
                    // line 19
                    echo "                        ";
                    echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "users_list", array(0 => (isset($context["users"]) ? $context["users"] : null)), "method");
                    echo "
                    ";
                }
                // line 21
                echo "                </div>
            </div>
        ";
            }
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        <!-- pido usuario y contraseña -->
        ";
            // line 26
            echo $this->getAttribute((isset($context["m_login"]) ? $context["m_login"] : null), "login", array(0 => "/login", 1 => $context), "method");
            echo "
    ";
        }
        // line 28
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  84 => 26,  81 => 25,  78 => 24,  73 => 21,  67 => 19,  65 => 18,  59 => 14,  51 => 8,  49 => 7,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}
{% block head %}{{ parent() }}{% endblock %}
{% block body %}
    <!-- informacion de login -->
    {% if Login.getLoginSession %}
        {{ m_login.logged(Login.getUserActive, Login.getIsAdmin) }}
        {% if Login.getIsAdmin %}
            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    Primer panel admin
                </div>
            </div>    
        {% else %}
            <div class=\"tab-content\">
                <div id=\"exportacion\" class=\"tab-pane fade in active\">
                    <!-- listado de usuarios -->
                    Primer panel
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
    {% block footer %}{{ parent() }}{% endblock %}
{% endblock %}


{#

                <h1 class=\"\">Listado de usuarios iMetos</h1>
                <table class=\"table table-striped table-hover table-bordered table-condensed\">
                    <tr>    
                        <th colspan=\"5\" class=\"text-center\">Opciones</th>
                        <th class=\"text-center\">Usuario</th>
                        <th>Mails</th>
                    </tr>
            foreach(\$users as \$user)
            {
                
                    <tr>
                        <td class=\"text-center\">
                            <a class=\"link-tabla\" href=\"javascript:borrar_usuario('{\$user->getId()}');\"><i class=\"fa fa-trash\"></i></a>
                        </td>
                if(\$user->getEnableFTP())
                {
                      
                        <td class=\"text-center\">
                            <a class=\"link-tabla\" href=\"javascript:realizar_informe('{\$user->getUserFTP()}');\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
                        </td>
                }else
                {
                    <td></td>
                }
                if(\$user->getEnableReports())
                {
                    // pongo icono de mostrar reporte
                    
                        <td class=\"text-center\">
                            <a class=\"link-tabla\" href=\"javascript:ver_informes('{\$user->getUserFTP()}');\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
                        </td>
                }else
                {
                    <td></td>
                }

                if(\$userid==\$user->getId()) 
                {
                    \$mostrar='false';
                }else
                {
                    \$mostrar='true';
                }
                      <a class=\"link-tabla\" href=\"javascript:mostrar_ocultar('conf_usuario_{\$user->getId()}',\".\$mostrar.\");\" title=\"Configuraci&oacute;n de usuario\">
                                <i class=\"fa fa-user\"></i>
                            </a>&nbsp;&nbsp;
                  <td align=\"center\">
                            <a class=\"link-tabla\" href=\"javascript:mostrar_ocultar('conf_usuario_{\$user->getId()}');\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>
                        </td>
                  <td align=\"center\">
                            <a class=\"link-tabla\" href=\"javascript:mostrar_ocultar('conf_exporta_{\$user->getId()}');\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
                        </td>
                  <td align=\"center\">{\$user->getUsername()}</td>
                        <td>{\$user->getEmails()}</td>
                    </tr>
                    <tr>
                        <td colspan=\"6\">
                if(\$userid==\$user->getId()) 
                {
                    \$mostrar='display:block';
                }else
                {
                    \$mostrar='display:none';
                }
                      <div id=\"conf_usuario_{\$user->getId()}\" style=\"\".\$mostrar.\"\">
                                <form name=\"user_edit\" method=\"post\" action=\"/users/edit/{\$user->getId()}\">
                User::formulario_editar_usuario(\$user);
                              <div class=\"panel-body\" style=\"text-align:right\">
                                        <div class=\"form-group\">
                                            <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                            <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:mostrar_ocultar('conf_usuario_{\$user->getId()}');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                                        </div>
                                    </div>
                                </form>    
                      </div>
                            <div class=\"conf_exporta\" id=\"conf_exporta_{\$user->getId()}\" style=\"display:none\">
                // si esta habilitado muestra info de estaciones
                if(\$user->getEnableMySQL())
                {
                    \$BD = new IMETOS(\$user->getIdMySQL(), \$user->getServerMySQL(), \$user->getDatabaseMySQL(), \$user->getUserMySQL(), \$user->getPasswMySQL());
                    if(\$stations=Station::getAll(\$BD, \$user->getId()))
                    {
                        Station::listAll(\$BD, \$stations, \$user);
                    }
                }
                      </div> <!-- cierre de div conf_exporta -->
                        </td>
                    </tr>
            }
            </table>
#}", "index.html", "/home/pablo/public_html/sondas_humedad/templates/default/index.html");
    }
}
