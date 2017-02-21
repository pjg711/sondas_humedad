<?php

/* macros/m_users.html */
class __TwigTemplate_21fca5f18f397a29ac445978ec84e52829d55475b6e4faaa55632eedc428fd8c extends Twig_Template
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
    }

    // line 1
    public function getusers_list($__users__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $__users__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <h1 class=\"\">Listado de usuarios iMetos</h1>
    <table class=\"table table-striped table-hover table-bordered table-condensed\">
        <tr>    
            <th colspan=\"5\" class=\"text-center\">Opciones</th>
            <th class=\"text-center\">Usuario</th>
            <th>Mails</th>
        </tr>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 10
                echo "        <tr>
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:delete_user('";
                // line 12
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "');\"><i class=\"fa fa-trash\"></i></a>
            </td>
            ";
                // line 14
                if ($this->getAttribute($context["user"], "getEnableFTP", array(), "method")) {
                    // line 15
                    echo "            <!-- realizar informe sondas detenidas -->
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:make_report('";
                    // line 17
                    echo $this->getAttribute($context["user"], "getUserFTP", array(), "method");
                    echo "');\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
            </td>
            ";
                } else {
                    // line 20
                    echo "            <td></td>
            ";
                }
                // line 22
                echo "            ";
                if ($this->getAttribute($context["user"], "getEnableReports", array(), "method")) {
                    // line 23
                    echo "            <!-- pongo icono de mostrar reporte -->
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:ver_informes('";
                    // line 25
                    echo $this->getAttribute($context["user"], "getUserFTP", array(), "method");
                    echo "');\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
            </td>
            ";
                } else {
                    // line 28
                    echo "            <td></td>
            ";
                }
                // line 30
                echo "            ";
                if (((isset($context["userid"]) ? $context["userid"] : null) == $this->getAttribute($context["user"], "getId", array(), "method"))) {
                    // line 31
                    echo "                ";
                    $context["mostrar"] = false;
                    // line 32
                    echo "            ";
                } else {
                    // line 33
                    echo "                ";
                    $context["mostrar"] = true;
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "            <td align=\"center\">
                <a class=\"link-tabla\" href=\"javascript:show_hide('conf_usuario_";
                // line 36
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "',";
                echo (isset($context["mostrar"]) ? $context["mostrar"] : null);
                echo ");\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>&nbsp;&nbsp;
            </td>
            <td align=\"center\">
                <a class=\"link-tabla\" href=\"javascript:show_hide('conf_exporta_";
                // line 39
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "');\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
            </td>
            <td align=\"center\">";
                // line 41
                echo $this->getAttribute($context["user"], "getUsername", array(), "method");
                echo "</td>
            <td>";
                // line 42
                echo $this->getAttribute($context["user"], "getEmails", array(), "method");
                echo "</td>
        </tr>
        <tr>
            <td colspan=\"6\">
                ";
                // line 46
                if (((isset($context["userid"]) ? $context["userid"] : null) == $this->getAttribute($context["user"], "getId", array(), "method"))) {
                    // line 47
                    echo "                    ";
                    $context["mostrar"] = "display:block";
                    // line 48
                    echo "                ";
                } else {
                    // line 49
                    echo "                    ";
                    $context["mostrar"] = "display:none";
                    // line 50
                    echo "                ";
                }
                // line 51
                echo "                <div id=\"conf_usuario_";
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\" style=\"";
                echo (isset($context["mostrar"]) ? $context["mostrar"] : null);
                echo "\">
                    <form name=\"user_edit\" method=\"post\" action=\"/users/edit/{\$user->getId()}\">
                        ";
                // line 53
                echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "form_user_edit", array(0 => $context["user"]), "method");
                echo "
                        <div class=\"panel-body\" style=\"text-align:right\">
                            <div class=\"form-group\">
                                <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:mostrar_ocultar('conf_usuario_";
                // line 57
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"conf_exporta\" id=\"conf_exporta_";
                // line 62
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\" style=\"display:none\">
                ";
                // line 63
                if ($this->getAttribute($context["user"], "getEnableMySQL", array(), "method")) {
                    // line 64
                    echo "                    <!-- listado de estaciones -->
                    ";
                    // line 65
                    echo $this->getAttribute((isset($context["m_stations"]) ? $context["m_stations"] : null), "stations_listAll", array(0 => (isset($context["users"]) ? $context["users"] : null), 1 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "stations", array()), 2 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "imetos", array())), "method");
                    echo "
                ";
                }
                // line 67
                echo "                // si esta habilitado muestra info de estaciones
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
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/m_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 82,  181 => 67,  176 => 65,  173 => 64,  171 => 63,  167 => 62,  159 => 57,  152 => 53,  144 => 51,  141 => 50,  138 => 49,  135 => 48,  132 => 47,  130 => 46,  123 => 42,  119 => 41,  114 => 39,  106 => 36,  103 => 35,  100 => 34,  97 => 33,  94 => 32,  91 => 31,  88 => 30,  84 => 28,  78 => 25,  74 => 23,  71 => 22,  67 => 20,  61 => 17,  57 => 15,  55 => 14,  50 => 12,  46 => 10,  42 => 9,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro users_list(users) %}
    <h1 class=\"\">Listado de usuarios iMetos</h1>
    <table class=\"table table-striped table-hover table-bordered table-condensed\">
        <tr>    
            <th colspan=\"5\" class=\"text-center\">Opciones</th>
            <th class=\"text-center\">Usuario</th>
            <th>Mails</th>
        </tr>
        {% for user in users %}
        <tr>
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:delete_user('{{ user.getId() }}');\"><i class=\"fa fa-trash\"></i></a>
            </td>
            {% if user.getEnableFTP() %}
            <!-- realizar informe sondas detenidas -->
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:make_report('{{ user.getUserFTP() }}');\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
            </td>
            {% else %}
            <td></td>
            {% endif %}
            {% if user.getEnableReports() %}
            <!-- pongo icono de mostrar reporte -->
            <td class=\"text-center\">
                <a class=\"link-tabla\" href=\"javascript:ver_informes('{{ user.getUserFTP() }}');\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
            </td>
            {% else %}
            <td></td>
            {% endif %}
            {% if userid == user.getId() %}
                {% set mostrar = false %}
            {% else %}
                {% set mostrar = true %}
            {% endif %}
            <td align=\"center\">
                <a class=\"link-tabla\" href=\"javascript:show_hide('conf_usuario_{{ user.getId() }}',{{ mostrar }});\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>&nbsp;&nbsp;
            </td>
            <td align=\"center\">
                <a class=\"link-tabla\" href=\"javascript:show_hide('conf_exporta_{{ user.getId() }}');\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
            </td>
            <td align=\"center\">{{ user.getUsername() }}</td>
            <td>{{ user.getEmails() }}</td>
        </tr>
        <tr>
            <td colspan=\"6\">
                {% if userid == user.getId() %}
                    {% set mostrar = 'display:block' %}
                {% else %}
                    {% set mostrar='display:none' %}
                {% endif %}
                <div id=\"conf_usuario_{{ user.getId() }}\" style=\"{{ mostrar }}\">
                    <form name=\"user_edit\" method=\"post\" action=\"/users/edit/{\$user->getId()}\">
                        {{ m_users.form_user_edit(user) }}
                        <div class=\"panel-body\" style=\"text-align:right\">
                            <div class=\"form-group\">
                                <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:mostrar_ocultar('conf_usuario_{{ user.getId() }}');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"conf_exporta\" id=\"conf_exporta_{{ user.getId() }}\" style=\"display:none\">
                {% if user.getEnableMySQL() %}
                    <!-- listado de estaciones -->
                    {{ m_stations.stations_listAll(users, users.stations, users.imetos) }}
                {% endif %}
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
        {% endfor %}

{% endmacro %}", "macros/m_users.html", "/home/pablo/public_html/sondas_humedad/templates/default/macros/m_users.html");
    }
}
