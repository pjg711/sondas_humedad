<?php

/* macros/m_login.twig */
class __TwigTemplate_d148ebee7deb328b7d7c7916d00c7fdd9780548cc95341f20c67e410cb0deee7 extends Twig_Template
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
        // line 31
        echo "
";
    }

    // line 2
    public function getlogin($__accion__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "accion" => $__accion__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <form id=\"frmLogin\" name=\"frmLogin\" method=\"post\" action=\"";
            echo (isset($context["accion"]) ? $context["accion"] : null);
            echo "\">
        <input type=\"hidden\" name=\"usar_imap\" value=\"1\">
        <br>
        <table id=\"tabla-ingreso\">
            <tr>
                <td colspan=\"2\" align=\"center\">
                    <img src=\"";
            // line 9
            echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "config", array()), "PROTOCOLO", array());
            echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "config", array()), "WWW_ROOT", array());
            echo "/templates/";
            echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "config", array()), "TEMPLATE", array());
            echo "/img/enviroscan.png\">
                </td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td align=\"right\">Usuario:&nbsp;</td>
                <td align=\"left\"><input name=\"username\" type=\"text\" id=\"username\" size=\"25\" maxlength=\"70\" /></td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td align=\"right\">Contrase&ntilde;a:&nbsp;</td>
                <td align=\"left\"><input name=\"password\" type=\"password\" id=\"password\" size=\"25\" maxlength=\"50\"/></td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td colspan=\"2\" align=\"center\">
                    <button type=\"submit\"><i class=\"fa fa-sign-in\"></i>&nbsp;Ingresar</button>
                </td>
            </tr>
        </table>
    </form>
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

    // line 32
    public function getlogged($__user_name__ = null, $__isAdmin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user_name" => $__user_name__,
            "isAdmin" => $__isAdmin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    <div id=\"sesion-iniciada\">
        <table>
            <tr>
                <td>
                    Usted se ha identificado como: <b>";
            // line 37
            echo (isset($context["user_name"]) ? $context["user_name"] : null);
            echo "</b>
                </td>
            </tr>
            ";
            // line 40
            if ((isset($context["isAdmin"]) ? $context["isAdmin"] : null)) {
                // line 41
                echo "            <tr>
                <td align=\"right\">
                    <a class=\"sesion-iniciada\" data-toggle=\"modal\" data-target=\"#configurarUsuario\"><i class=\"fa fa-user-md\"></i>&nbsp;Configuraci&oacute;n usuario</a>
                </td>
            </tr>
            ";
            } else {
                // line 47
                echo "            <tr>
                <td align=\"right\">
                    <a class=\"sesion-iniciada\" href=\"/sign_off\"><i class=\"fa fa-sign-out\"></i>&nbsp;Cerrar sesion</a>
                </td>
            </tr>
            ";
            }
            // line 53
            echo "        </table>
    </div>
    ";
            // line 55
            if ((isset($context["isAdmin"]) ? $context["isAdmin"] : null)) {
                // line 56
                echo "    <!-- Modal -->
    <div id=\"configurarUsuario\" class=\"modal modal-wide fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Cambiar contraseña</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/users/config\">
                        <table width=\"99%\">
                            <tr>
                                <td>Ingrese la contraseña actual:</td>
                                <td>
                                    <input type=\"text\" name=\"password_anterior\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td>Ingrese la contraseña nueva:</td>
                                <td>
                                    <input type=\"text\" name=\"password_nuevo\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td>Repita la contraseña nueva:</td>
                                <td>
                                    <input type=\"text\" name=\"password_nuevo2\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <!--
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td colspan=\"2\" align=\"right\">
                                    <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\">Guardar nueva contraseña</button>&nbsp;
                                </td>
                            </tr>
                            -->
                        </table>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\">Guardar nueva contraseña</button>&nbsp;
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    ";
            }
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
        return "macros/m_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  134 => 55,  130 => 53,  122 => 47,  114 => 41,  112 => 40,  106 => 37,  100 => 33,  87 => 32,  47 => 9,  37 => 3,  24 => 2,  19 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# funciones para el logeo #}
{% macro login(accion, context) %}
    <form id=\"frmLogin\" name=\"frmLogin\" method=\"post\" action=\"{{ accion }}\">
        <input type=\"hidden\" name=\"usar_imap\" value=\"1\">
        <br>
        <table id=\"tabla-ingreso\">
            <tr>
                <td colspan=\"2\" align=\"center\">
                    <img src=\"{{ context.config.PROTOCOLO }}{{ context.config.WWW_ROOT }}/templates/{{ context.config.TEMPLATE }}/img/enviroscan.png\">
                </td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td align=\"right\">Usuario:&nbsp;</td>
                <td align=\"left\"><input name=\"username\" type=\"text\" id=\"username\" size=\"25\" maxlength=\"70\" /></td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td align=\"right\">Contrase&ntilde;a:&nbsp;</td>
                <td align=\"left\"><input name=\"password\" type=\"password\" id=\"password\" size=\"25\" maxlength=\"50\"/></td>
            </tr>
            <tr><td colspan=\"2\">&nbsp;</td></tr>
            <tr>
                <td colspan=\"2\" align=\"center\">
                    <button type=\"submit\"><i class=\"fa fa-sign-in\"></i>&nbsp;Ingresar</button>
                </td>
            </tr>
        </table>
    </form>
{% endmacro %}

{% macro logged(user_name, isAdmin) %}
    <div id=\"sesion-iniciada\">
        <table>
            <tr>
                <td>
                    Usted se ha identificado como: <b>{{ user_name }}</b>
                </td>
            </tr>
            {% if isAdmin %}
            <tr>
                <td align=\"right\">
                    <a class=\"sesion-iniciada\" data-toggle=\"modal\" data-target=\"#configurarUsuario\"><i class=\"fa fa-user-md\"></i>&nbsp;Configuraci&oacute;n usuario</a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td align=\"right\">
                    <a class=\"sesion-iniciada\" href=\"/sign_off\"><i class=\"fa fa-sign-out\"></i>&nbsp;Cerrar sesion</a>
                </td>
            </tr>
            {% endif %}
        </table>
    </div>
    {% if isAdmin %}
    <!-- Modal -->
    <div id=\"configurarUsuario\" class=\"modal modal-wide fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Cambiar contraseña</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/users/config\">
                        <table width=\"99%\">
                            <tr>
                                <td>Ingrese la contraseña actual:</td>
                                <td>
                                    <input type=\"text\" name=\"password_anterior\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td>Ingrese la contraseña nueva:</td>
                                <td>
                                    <input type=\"text\" name=\"password_nuevo\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td>Repita la contraseña nueva:</td>
                                <td>
                                    <input type=\"text\" name=\"password_nuevo2\" value=\"\" size=\"40\" maxlength=\"255\">
                                </td>
                            </tr>
                            <!--
                            <tr><td colspan=\"2\">&nbsp;</td></tr>
                            <tr>
                                <td colspan=\"2\" align=\"right\">
                                    <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\">Guardar nueva contraseña</button>&nbsp;
                                </td>
                            </tr>
                            -->
                        </table>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\">Guardar nueva contraseña</button>&nbsp;
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
{% endmacro %}", "macros/m_login.twig", "/home/pablo/public_html/sondas_humedad/templates/default/macros/m_login.twig");
    }
}
