<?php

/* macros/m_general.twig */
class __TwigTemplate_23e700dff3ce499dee472036f735c61df045025b2652f26c1d0de62b0868e8f8 extends Twig_Template
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
        // line 88
        echo "
";
        // line 122
        echo "

";
        // line 196
        echo "
";
        // line 296
        echo "
";
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
            echo "<h1 class=\"\">Listado de usuarios iMetos</h1>
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
                echo "    <tr>
        ";
                // line 12
                echo "        <td class=\"text-center\">
            ";
                // line 14
                echo "            <a class=\"link-tabla\" href=\"/user/delete/";
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\" title=\"Borrar usuario\"><i class=\"fa fa-trash\"></i></a>
        </td>
        ";
                // line 16
                if ($this->getAttribute($context["user"], "getEnableFTP", array(), "method")) {
                    // line 17
                    echo "        ";
                    // line 18
                    echo "        <td class=\"text-center\">
            ";
                    // line 20
                    echo "            <a class=\"link-tabla\" href=\"/reports/make/";
                    echo $this->getAttribute($context["user"], "getId", array(), "method");
                    echo "\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
        </td>
        ";
                } else {
                    // line 23
                    echo "        <td></td>
        ";
                }
                // line 25
                echo "        ";
                if ($this->getAttribute($context["user"], "getEnableReports", array(), "method")) {
                    // line 26
                    echo "        ";
                    // line 27
                    echo "        <td class=\"text-center\">
            ";
                    // line 29
                    echo "            <a class=\"link-tabla\" href=\"/reports/view/";
                    echo $this->getAttribute($context["user"], "getId", array(), "method");
                    echo "\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
        </td>
        ";
                } else {
                    // line 32
                    echo "        <td></td>
        ";
                }
                // line 34
                echo "        ";
                if (((isset($context["userid"]) ? $context["userid"] : null) == $this->getAttribute($context["user"], "getId", array(), "method"))) {
                    // line 35
                    echo "            ";
                    $context["mostrar"] = false;
                    // line 36
                    echo "        ";
                } else {
                    // line 37
                    echo "            ";
                    $context["mostrar"] = true;
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "        <td align=\"center\">
            <a class=\"link-tabla\" ng-click = \"f_show_user()\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>&nbsp;&nbsp;
        </td>
        <td align=\"center\">
            <a class=\"link-tabla\" ng-click = \"f_show_export()\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
        </td>
        <td align=\"center\">";
                // line 45
                echo $this->getAttribute($context["user"], "getUsername", array(), "method");
                echo "</td>
        <td>";
                // line 46
                echo $this->getAttribute($context["user"], "getEmails", array(), "method");
                echo "</td>
    </tr>
    <tr>
        <!-- parte oculta -->
        <td colspan=\"7\">
            <table ng-show = 'show_user'>
                <tr>
                    <td>
                        <div class=\"conf_user\" id=\"conf_usuario_";
                // line 54
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                            <form name=\"user_edit\" method=\"post\" action=\"/users/edit/";
                // line 55
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                                ";
                // line 56
                echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "form_user_edit", array(0 => $context["user"]), "method");
                echo "
                                <div class=\"panel-body\" style=\"text-align:right\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                        <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_usuario_";
                // line 60
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                                    </div>
                                </div><!-- /panel-body -->
                            </form>
                        </div><!-- /conf_usuario -->
                    </td>
                </tr>
            </table>
            <table ng-show = 'show_export'>
                <tr>
                    <td>
                        <div class=\"conf_exporta\" id=\"conf_exporta_";
                // line 71
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                            ";
                // line 73
                echo "                            ";
                // line 74
                echo "                                ";
                // line 75
                echo "                                ";
                // line 76
                echo "                                ";
                // line 77
                echo "                                ";
                echo $this->getAttribute($this, "stations_listAll", array(0 => $context["user"]), "method");
                echo "
                            ";
                // line 79
                echo "                        </div> <!-- /conf_exporta -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "</table>
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

    // line 89
    public function getnew_user(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "
<br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"center-block\">
            <a class=\"nuevo-usuario\" data-toggle=\"modal\" data-target=\"#newUser\"><i class=\"fa fa-user-plus fa-4x\"></i>&nbsp;Nuevo usuario iMetos</a>
        </div>
    </div>
</div>
<!-- Modal -->
<div id=\"newUser\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Agregar usuario</h4>
            </div>
            <div class=\"modal-body\">
                <form name=\"user_new\" method=\"post\" action=\"/users/new\">
                    ";
            // line 110
            echo $this->getAttribute($this, "form_user_new", array(), "method");
            echo "
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>

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

    // line 124
    public function getform_user_new(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 125
            echo "
";
            // line 126
            $context["label"] = "label-enabled";
            // line 127
            echo "<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos de cuenta Fieldclimate</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"";
            // line 135
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 138
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                    <label for=\"";
            // line 139
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                    <textarea name=\"mails\" rows=\"3\" cols=\"120\"></textarea>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos para la conexión a la base de datos iMetos</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"";
            // line 150
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 153
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 156
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 159
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Servidor Mysql:&nbsp;</label><input type=\"text\" name=\"servidor_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
            </div>
        </div>
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos FTP para el informe de alerta</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"";
            // line 169
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 172
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 175
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 178
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 181
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                    <label for=\"";
            // line 182
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                    <textarea name=\"mails_ftp\" rows=\"3\" cols=\"80\"></textarea>
                </div>
                <div class=\"col-md-11\" style=\"text-align:right\">
                    <div class=\"form-group\">
                        <button type=\"submit\" name=\"check_connection\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

    // line 197
    public function getform_user_edit($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"text-align:center\">
            <h2>Configuraci&oacute;n de usuario</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"userid\" value=\"";
            // line 207
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
            echo "\">
            ";
            // line 208
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableFTP", array(), "method")) {
                // line 209
                echo "                <input type=\"hidden\" name=\"id_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdFTP", array(), "method");
                echo "\">
            ";
            }
            // line 211
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableMySQL", array(), "method")) {
                // line 212
                echo "                <input type=\"hidden\" name=\"id_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdMySQL", array(), "method");
                echo "\">
            ";
            }
            // line 214
            echo "            ";
            $context["label"] = "label-enabled";
            // line 215
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos de cuenta Fieldclimate</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
            // line 221
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"";
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method");
            echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
            // line 224
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password iMetos:&nbsp;</label><input type=\"text\" name=\"password_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
            // line 227
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                        <label for=\"";
            // line 228
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails\" rows=\"3\" cols=\"120\">";
            // line 229
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmails", array(), "method");
            echo "</textarea>
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_imetos\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a sitio Fieldclimate</button>
                    </div>
                </div>
            </div><!-- /panel panel-default -->
            ";
            // line 237
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableMySQL", array(), "method")) {
                // line 238
                echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos para la conexión a la base de datos iMetos</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
                // line 244
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 247
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPasswMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 250
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getDatabaseMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 253
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Servidor Mysql:&nbsp;</label><input type=\"text\" name=\"servidor_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getServerMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_mysql\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a servidor MySQL</button>
                    </div>
                </div>
            </div>
            ";
            }
            // line 261
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableFTP", array(), "method")) {
                // line 262
                echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos FTP para el informe de alerta</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
                // line 268
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 271
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPasswFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 274
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getServerFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 277
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRemoteDirFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 280
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                        <label for=\"";
                // line 281
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails_ftp\" rows=\"3\" cols=\"80\">";
                // line 282
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmailsFTP", array(), "method");
                echo "</textarea>
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_ftp\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a servidor FTP</button>
                    </div>
                </div>
            </div>
            ";
            }
            // line 290
            echo "            <br><br><br>
        </div><!-- fin de col-md-12 -->
    </div><!-- fin de row -->
</div><!-- fin de container -->

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

    // line 297
    public function getstations_listAll($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 298
            echo "
";
            // line 299
            $context["stations"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getStations", array(), "method");
            // line 300
            echo "<div class=\"estaciones\" id=\"estaciones\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"text-align:center\">
                <h2>Configuraci&oacute;n de estaciones</h2>
            </div>
        </div>
        <div class=\"row\">
            <label class=\"col-xs-3 control-label\">Seleccione estaci&oacute;n:</label>
            <select class=\"form-control\" ng-model=\"select_station\">
            ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) ? $context["stations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 311
                echo "                <option value=\"station_";
                echo $this->getAttribute($context["station"], "getRowId", array(), "method");
                echo "\">";
                echo $this->getAttribute($context["station"], "getFName", array(), "method");
                echo " - ";
                echo $this->getAttribute($context["station"], "getName", array(), "method");
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "            </select>
        </div>
    </div><!-- /container -->
    ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) ? $context["stations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 317
                echo "        ";
                $context["load2"] = $this->getAttribute($context["station"], "loadSensors", array(0 => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getImetos", array(), "method")), "method");
                // line 318
                echo "        ";
                $context["stationSensorsList"] = $this->getAttribute($context["station"], "getAvailableSensors", array(), "method");
                // line 319
                echo "        ";
                $context["q_config"] = $this->getAttribute($context["station"], "getConfig", array(), "method");
                // line 320
                echo "        <div ng-show=\"select_station=='station_";
                echo $this->getAttribute($context["station"], "getRowId", array(), "method");
                echo "'\" class=\"info-sensores\" id=\"station_";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
            <div class=\"container\">
                <hr class=\"\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/config/";
                // line 323
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"userid\" name=\"userid\" value=\"";
                // line 325
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "\">
                        <input type=\"hidden\" id=\"f_station_code\" name=\"f_station_code\" value=\"";
                // line 326
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                        <div class=\"col-md-9 text-left\">
                            ";
                // line 328
                if ($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEnable", array(), "method")) {
                    // line 329
                    echo "                                ";
                    // line 330
                    echo "                                ";
                    $context["disabled"] = "";
                    // line 331
                    echo "                                ";
                    $context["label"] = "label-enabled";
                    // line 332
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" checked=\"\" ng-click=\"station_active(this,'station_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n
                            ";
                } else {
                    // line 334
                    echo "                                ";
                    // line 335
                    echo "                                ";
                    $context["disabled"] = "disabled";
                    // line 336
                    echo "                                ";
                    $context["label"] = "label-disabled";
                    // line 337
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" ng-click=\"station_active(this,'station_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n
                            ";
                }
                // line 339
                echo "                        </div>
                        <div class=\"col-md-12\">
                            <h3>";
                // line 341
                echo $this->getAttribute($context["station"], "getFName", array(), "method");
                echo " - ";
                echo $this->getAttribute($context["station"], "getName", array(), "method");
                echo "</h3>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"\">Sensores</h3>
                                    <h4 class=\"\">Seleccione que sensores que quiere descargar</h4>
                                </div>
                                <div class=\"panel-body text-left\">
                                    <input class=\"sensores\" type=\"checkbox\" id=\"sensor-todos-";
                // line 350
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\" ng-click=\"checkAll('";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "')\" ><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">&nbsp;Todos</label><br>
                                    ";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["stationSensorsList"]) ? $context["stationSensorsList"] : null), "enabled", array(), "array"));
                foreach ($context['_seq'] as $context["key_sensor"] => $context["sensor"]) {
                    // line 352
                    echo "                                        ";
                    if (twig_in_filter($context["key_sensor"], $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSensores", array(), "method"))) {
                        // line 353
                        echo "                                            <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-";
                        echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                        echo "\" name=\"sensor_";
                        echo $this->getAttribute($context["sensor"], "getSensorCode", array(), "method");
                        echo "_";
                        echo $this->getAttribute($context["sensor"], "getSensorCh", array(), "method");
                        echo "\" value=\"seleccionado\" checked=\"\">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["sensor"], "getName", array(), "method");
                        echo "</label><br>
                                        ";
                    } else {
                        // line 355
                        echo "                                            <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-";
                        echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                        echo "\" name=\"sensor_";
                        echo $this->getAttribute($context["sensor"], "getSensorCode", array(), "method");
                        echo "_";
                        echo $this->getAttribute($context["sensor"], "getSensorCh", array(), "method");
                        echo "\" value=\"seleccionado\">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["sensor"], "getName", array(), "method");
                        echo "</label><br>
                                        ";
                    }
                    // line 357
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_sensor'], $context['sensor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 358
                echo "                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-md-4 -->
                        <div class=\"col-md-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"\">Configuraci&oacute;n</h3>
                                </div>
                                <div class=\"panel-body text-left\">
                                    <!-- Periodo a descargar : periodo, mes_actual, todos, fijo -->
                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 369
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Per&iacute;odo a descargar:</label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 371
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "periodo")) {
                    // line 372
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                } else {
                    // line 374
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                }
                // line 376
                echo "                                        </label><br>
                                        <label for=\"";
                // line 377
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Fecha inicial:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_inicial\" id=\"fecha_inicial\" value=\"";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoFechaInicial", array(), "method");
                echo "\" size=\"10\" maxlength=\"10\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo "><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">(dd/mm/aaaa)</label><br>
                                        <label for=\"";
                // line 378
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Fecha final:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_final\" id=\"fecha_final\" value=\"";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoFechaFinal", array(), "method");
                echo "\" size=\"10\" maxlength=\"10\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo "><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">(dd/mm/aaaa)</label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 380
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "mes_actual")) {
                    // line 381
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                } else {
                    // line 383
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                }
                // line 385
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 387
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "todos")) {
                    // line 388
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                } else {
                    // line 390
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                }
                // line 392
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 394
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "fijo")) {
                    // line 395
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"fijo\" value=\"fijo\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Per&iacute;odo fijo de &uacute;ltimos&nbsp;</label><input class=\"todos\" type=\"text\" name=\"periodo_dias\" value=\"";
                    echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoDias", array(), "method");
                    echo "\" size=\"2\" maxlength=\"3\"/><label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">&nbsp;d&iacute;as</label>
                                        ";
                } else {
                    // line 397
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"fijo\" value=\"fijo\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Per&iacute;odo fijo de &uacute;ltimos&nbsp;</label><input class=\"todos\" type=\"text\" name=\"periodo_dias\" value=\"";
                    echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoDias", array(), "method");
                    echo "\" size=\"4\" maxlength=\"4\"/><label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">&nbsp;d&iacute;as</label>
                                        ";
                }
                // line 399
                echo "                                        </label>
                                    </div>
                                    <!-- Tipo de archivo a exportar -->
                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 403
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Exportar a tipo de archivo:</label><br>
                                        ";
                // line 404
                $context["tipos_archivos"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "TIPOS_ARCHIVOS", array())));
                // line 405
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tipos_archivos"]) ? $context["tipos_archivos"] : null));
                foreach ($context['_seq'] as $context["key_tipo_archivo"] => $context["tipo_archivo"]) {
                    // line 406
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 407
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getTipoArchivo", array(), "method") == $context["key_tipo_archivo"])) {
                        // line 408
                        echo "                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_";
                        echo $context["key_tipo_archivo"];
                        echo "\" value=\"";
                        echo $context["key_tipo_archivo"];
                        echo "\" checked=\"\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo "><label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["tipo_archivo"];
                        echo "</label>
                                            ";
                    } else {
                        // line 410
                        echo "                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_";
                        echo $context["key_tipo_archivo"];
                        echo "\" value=\"";
                        echo $context["key_tipo_archivo"];
                        echo "\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo "><label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["tipo_archivo"];
                        echo "</label>
                                            ";
                    }
                    // line 412
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_tipo_archivo'], $context['tipo_archivo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 414
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 416
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 417
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Separar columnas por:</label><br>
                                        ";
                // line 418
                $context["separadores"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "SEPARADORES", array())));
                // line 419
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["separadores"]) ? $context["separadores"] : null));
                foreach ($context['_seq'] as $context["key_separador"] => $context["separador"]) {
                    // line 420
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 421
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSeparador", array(), "method") == $context["key_separador"])) {
                        // line 422
                        echo "                                                <input class=\"todos\" type=\"radio\" id=\"coma\" name=\"separador\" value=\"";
                        echo $context["key_separador"];
                        echo "\" checked=\"\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo ">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["separador"];
                        echo "</label>
                                            ";
                    } else {
                        // line 424
                        echo "                                                <input class=\"todos\" type=\"radio\" id=\"coma\" name=\"separador\" value=\"";
                        echo $context["key_separador"];
                        echo "\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo ">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["separador"];
                        echo "</label>
                                            ";
                    }
                    // line 426
                    echo "                                            </label><br>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_separador'], $context['separador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 430
                echo "                                    ";
                $context["encabezados"] = array("si" => "Si", "no" => "No");
                // line 431
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 432
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Agregar encabezado:</label><br>
                                        ";
                // line 433
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["encabezados"]) ? $context["encabezados"] : null));
                foreach ($context['_seq'] as $context["key_enca"] => $context["encabezado"]) {
                    // line 434
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 435
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEncabezado", array(), "method") == $context["key_enca"])) {
                        // line 436
                        echo "                                              <input class=\"todos\" type=\"radio\" id=\"encabezado_si\" name=\"encabezado\" value=\"";
                        echo $context["key_enca"];
                        echo "\" checked=\"\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo ">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["encabezado"];
                        echo "</label>&nbsp;&nbsp;
                                            ";
                    } else {
                        // line 438
                        echo "                                              <input class=\"todos\" type=\"radio\" id=\"encabezado_si\" name=\"encabezado\" value=\"";
                        echo $context["key_enca"];
                        echo "\" ";
                        echo (isset($context["disabled"]) ? $context["disabled"] : null);
                        echo ">&nbsp;<label for=\"";
                        echo (isset($context["label"]) ? $context["label"] : null);
                        echo "\">";
                        echo $context["encabezado"];
                        echo "</label>&nbsp;&nbsp;
                                            ";
                    }
                    // line 440
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_enca'], $context['encabezado'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 442
                echo "                                    </div><!-- /form-group -->
                                    ";
                // line 444
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 445
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Nombre de archivo (sin extension):</label><br>
                                        <input class=\"todos\" type=\"text\" id=\"archivo\" name=\"archivo\" value=\"";
                // line 446
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getNombreArchivo", array(), "method");
                echo "\" size=\"40\" maxlength=\"50\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">
                                    </div>
                                    ";
                // line 449
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 450
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Ubicaci&oacute;n web para enlazar archivo:</label><br>
                                        <label for=\"";
                // line 451
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getUbicacionWeb", array(), "method");
                echo "</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- cierre de div row -->
                    <div class=\"row\">
                        <div class=\"col-md-4 text-right\"></div>
                        <div class=\"col-md-8\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" name=\"save_config\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar configuraci&oacute;n</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_exporta_";
                // line 462
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/export/";
                // line 467
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "/";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "\">
                    <button type=\"submit\" name=\"export_data\" class=\"btn btn-default\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                </form>
            </div> <!-- /container -->
        </div> <!-- /info-sensores -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "</div><!-- /estaciones -->

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
        return "macros/m_general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1176 => 473,  1162 => 467,  1154 => 462,  1138 => 451,  1134 => 450,  1131 => 449,  1124 => 446,  1120 => 445,  1117 => 444,  1114 => 442,  1107 => 440,  1095 => 438,  1083 => 436,  1081 => 435,  1078 => 434,  1074 => 433,  1070 => 432,  1067 => 431,  1064 => 430,  1061 => 428,  1054 => 426,  1042 => 424,  1030 => 422,  1028 => 421,  1025 => 420,  1020 => 419,  1018 => 418,  1014 => 417,  1011 => 416,  1008 => 414,  1001 => 412,  987 => 410,  973 => 408,  971 => 407,  968 => 406,  963 => 405,  961 => 404,  957 => 403,  951 => 399,  939 => 397,  927 => 395,  925 => 394,  921 => 392,  913 => 390,  905 => 388,  903 => 387,  899 => 385,  891 => 383,  883 => 381,  881 => 380,  870 => 378,  860 => 377,  857 => 376,  849 => 374,  841 => 372,  839 => 371,  834 => 369,  821 => 358,  815 => 357,  801 => 355,  787 => 353,  784 => 352,  780 => 351,  770 => 350,  756 => 341,  752 => 339,  746 => 337,  743 => 336,  740 => 335,  738 => 334,  732 => 332,  729 => 331,  726 => 330,  724 => 329,  722 => 328,  717 => 326,  713 => 325,  708 => 323,  699 => 320,  696 => 319,  693 => 318,  690 => 317,  686 => 316,  681 => 313,  668 => 311,  664 => 310,  652 => 300,  650 => 299,  647 => 298,  635 => 297,  615 => 290,  604 => 282,  600 => 281,  596 => 280,  588 => 277,  580 => 274,  572 => 271,  564 => 268,  556 => 262,  553 => 261,  540 => 253,  532 => 250,  524 => 247,  516 => 244,  508 => 238,  505 => 237,  495 => 229,  491 => 228,  487 => 227,  481 => 224,  473 => 221,  465 => 215,  462 => 214,  456 => 212,  453 => 211,  447 => 209,  445 => 208,  441 => 207,  430 => 198,  418 => 197,  389 => 182,  385 => 181,  379 => 178,  373 => 175,  367 => 172,  361 => 169,  348 => 159,  342 => 156,  336 => 153,  330 => 150,  316 => 139,  312 => 138,  306 => 135,  296 => 127,  294 => 126,  291 => 125,  280 => 124,  253 => 110,  231 => 90,  220 => 89,  204 => 86,  192 => 79,  187 => 77,  185 => 76,  183 => 75,  181 => 74,  179 => 73,  175 => 71,  161 => 60,  154 => 56,  150 => 55,  146 => 54,  135 => 46,  131 => 45,  123 => 39,  120 => 38,  117 => 37,  114 => 36,  111 => 35,  108 => 34,  104 => 32,  97 => 29,  94 => 27,  92 => 26,  89 => 25,  85 => 23,  78 => 20,  75 => 18,  73 => 17,  71 => 16,  65 => 14,  62 => 12,  59 => 10,  55 => 9,  46 => 2,  34 => 1,  29 => 296,  26 => 196,  22 => 122,  19 => 88,);
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
        {# borrar usuario #}
        <td class=\"text-center\">
            {# <a class=\"link-tabla\" href=\"javascript:delete_user('{{ user.getId() }}');\"><i class=\"fa fa-trash\"></i></a> #}
            <a class=\"link-tabla\" href=\"/user/delete/{{ user.getId() }}\" title=\"Borrar usuario\"><i class=\"fa fa-trash\"></i></a>
        </td>
        {% if user.getEnableFTP() %}
        {# realizar informe sondas detenidas #}
        <td class=\"text-center\">
            {# <a class=\"link-tabla\" href=\"javascript:make_report('{{ user.getUserFTP() }}');\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a> #}
            <a class=\"link-tabla\" href=\"/reports/make/{{ user.getId() }}\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
        </td>
        {% else %}
        <td></td>
        {% endif %}
        {% if user.getEnableReports() %}
        {# pongo icono de mostrar reporte #}
        <td class=\"text-center\">
            {#  <a class=\"link-tabla\" href=\"javascript:view_reports('{{ user.getUserFTP() }}');\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a> #}
            <a class=\"link-tabla\" href=\"/reports/view/{{ user.getId() }}\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
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
            <a class=\"link-tabla\" ng-click = \"f_show_user()\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>&nbsp;&nbsp;
        </td>
        <td align=\"center\">
            <a class=\"link-tabla\" ng-click = \"f_show_export()\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
        </td>
        <td align=\"center\">{{ user.getUsername() }}</td>
        <td>{{ user.getEmails() }}</td>
    </tr>
    <tr>
        <!-- parte oculta -->
        <td colspan=\"7\">
            <table ng-show = 'show_user'>
                <tr>
                    <td>
                        <div class=\"conf_user\" id=\"conf_usuario_{{ user.getId() }}\">
                            <form name=\"user_edit\" method=\"post\" action=\"/users/edit/{{ user.getId() }}\">
                                {{ m_users.form_user_edit(user) }}
                                <div class=\"panel-body\" style=\"text-align:right\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                        <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_usuario_{{ user.getId() }}');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                                    </div>
                                </div><!-- /panel-body -->
                            </form>
                        </div><!-- /conf_usuario -->
                    </td>
                </tr>
            </table>
            <table ng-show = 'show_export'>
                <tr>
                    <td>
                        <div class=\"conf_exporta\" id=\"conf_exporta_{{ user.getId() }}\">
                            {# si esta habilitado muestra info de estaciones #}
                            {#  {% if user.getEnableMySQL() %} #}
                                {# listado de estaciones #}
                                {# {{ user.getStations()|var_dump }} #}
                                {# {{ user|var_dump }} #}
                                {{ _self.stations_listAll(user) }}
                            {# {% endif %} #}
                        </div> <!-- /conf_exporta -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    {% endfor %}
</table>
{% endmacro %}

{% macro new_user() %}

<br><br><br><br><br>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"center-block\">
            <a class=\"nuevo-usuario\" data-toggle=\"modal\" data-target=\"#newUser\"><i class=\"fa fa-user-plus fa-4x\"></i>&nbsp;Nuevo usuario iMetos</a>
        </div>
    </div>
</div>
<!-- Modal -->
<div id=\"newUser\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Agregar usuario</h4>
            </div>
            <div class=\"modal-body\">
                <form name=\"user_new\" method=\"post\" action=\"/users/new\">
                    {{ _self.form_user_new() }}
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" name=\"config_admin\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Close</button>
            </div>
        </div>
    </div>
</div>

{% endmacro %}


{% macro form_user_new() %}

{% set label = \"label-enabled\" %}
<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos de cuenta Fieldclimate</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                    <label for=\"{{ label }}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                    <textarea name=\"mails\" rows=\"3\" cols=\"120\"></textarea>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos para la conexión a la base de datos iMetos</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Servidor Mysql:&nbsp;</label><input type=\"text\" name=\"servidor_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
            </div>
        </div>
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos FTP para el informe de alerta</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"{{ label }}\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                    <label for=\"{{ label }}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                    <textarea name=\"mails_ftp\" rows=\"3\" cols=\"80\"></textarea>
                </div>
                <div class=\"col-md-11\" style=\"text-align:right\">
                    <div class=\"form-group\">
                        <button type=\"submit\" name=\"check_connection\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endmacro %}

{% macro form_user_edit(user) %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"text-align:center\">
            <h2>Configuraci&oacute;n de usuario</h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"userid\" value=\"{{ user.getId() }}\">
            {% if user.getEnableFTP() %}
                <input type=\"hidden\" name=\"id_ftp\" value=\"{{ user.getIdFTP() }}\">
            {% endif %}
            {% if user.getEnableMySQL() %}
                <input type=\"hidden\" name=\"id_mysql\" value=\"{{ user.getIdMySQL() }}\">
            {% endif %}
            {% set label = \"label-enabled\" %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos de cuenta Fieldclimate</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"{{ user.getUsername() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Password iMetos:&nbsp;</label><input type=\"text\" name=\"password_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                        <label for=\"{{ label }}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails\" rows=\"3\" cols=\"120\">{{ user.getEmails() }}</textarea>
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_imetos\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a sitio Fieldclimate</button>
                    </div>
                </div>
            </div><!-- /panel panel-default -->
            {# agrego usuario mysql #}
            {% if user.getEnableMySQL() %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos para la conexión a la base de datos iMetos</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"{{ user.getUserMySQL() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"{{ user.getPasswMySQL() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"{{ user.getDatabaseMySQL() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Servidor Mysql:&nbsp;</label><input type=\"text\" name=\"servidor_mysql\" value=\"{{ user.getServerMySQL() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_mysql\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a servidor MySQL</button>
                    </div>
                </div>
            </div>
            {% endif %}
            {% if user.getEnableFTP() %}
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos FTP para el informe de alerta</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"{{ user.getUserFTP() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"{{ user.getPasswFTP() }}\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"{{ user.getServerFTP() }}\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"{{ user.getRemoteDirFTP() }}\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"{{ label }}\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                        <label for=\"{{ label }}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails_ftp\" rows=\"3\" cols=\"80\">{{ user.getEmailsFTP() }}</textarea>
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_ftp\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a servidor FTP</button>
                    </div>
                </div>
            </div>
            {% endif %}
            <br><br><br>
        </div><!-- fin de col-md-12 -->
    </div><!-- fin de row -->
</div><!-- fin de container -->

{% endmacro %}

{% macro stations_listAll(user) %}

{% set stations = user.getStations() %}
<div class=\"estaciones\" id=\"estaciones\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"text-align:center\">
                <h2>Configuraci&oacute;n de estaciones</h2>
            </div>
        </div>
        <div class=\"row\">
            <label class=\"col-xs-3 control-label\">Seleccione estaci&oacute;n:</label>
            <select class=\"form-control\" ng-model=\"select_station\">
            {% for station in stations %}
                <option value=\"station_{{ station.getRowId() }}\">{{ station.getFName() }} - {{ station.getName() }}</option>
            {% endfor %}
            </select>
        </div>
    </div><!-- /container -->
    {% for station in stations %}
        {% set load2 = station.loadSensors(user.getImetos()) %}
        {% set stationSensorsList = station.getAvailableSensors() %}
        {% set q_config = station.getConfig() %}
        <div ng-show=\"select_station=='station_{{ station.getRowId() }}'\" class=\"info-sensores\" id=\"station_{{ station.getStationCode() }}\">
            <div class=\"container\">
                <hr class=\"\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/config/{{ station.getStationCode() }}\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"userid\" name=\"userid\" value=\"{{ user.getId() }}\">
                        <input type=\"hidden\" id=\"f_station_code\" name=\"f_station_code\" value=\"{{ station.getStationCode() }}\">
                        <div class=\"col-md-9 text-left\">
                            {% if q_config.getEnable() %}
                                {# estacion activa #}
                                {% set disabled = \"\" %}
                                {% set label = \"label-enabled\" %}
                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" checked=\"\" ng-click=\"station_active(this,'station_{{ station.getStationCode() }}');\">&nbsp;Activar Estaci&oacute;n
                            {% else %}
                                {# estacion desactivada #}
                                {% set disabled = \"disabled\" %}
                                {% set label = \"label-disabled\" %}
                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" ng-click=\"station_active(this,'station_{{ station.getStationCode() }}');\">&nbsp;Activar Estaci&oacute;n
                            {% endif %}
                        </div>
                        <div class=\"col-md-12\">
                            <h3>{{ station.getFName() }} - {{ station.getName() }}</h3>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"\">Sensores</h3>
                                    <h4 class=\"\">Seleccione que sensores que quiere descargar</h4>
                                </div>
                                <div class=\"panel-body text-left\">
                                    <input class=\"sensores\" type=\"checkbox\" id=\"sensor-todos-{{ station.getStationCode() }}\" ng-click=\"checkAll('{{ station.getStationCode() }}')\" ><label for=\"{{ label }}\" {{ disabled }}>&nbsp;Todos</label><br>
                                    {% for key_sensor, sensor in stationSensorsList['enabled'] %}
                                        {% if key_sensor in q_config.getSensores() %}
                                            <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-{{ station.getStationCode() }}\" name=\"sensor_{{ sensor.getSensorCode() }}_{{ sensor.getSensorCh() }}\" value=\"seleccionado\" checked=\"\">&nbsp;<label for=\"{{ label }}\">{{ sensor.getName() }}</label><br>
                                        {% else %}
                                            <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-{{ station.getStationCode() }}\" name=\"sensor_{{ sensor.getSensorCode() }}_{{ sensor.getSensorCh() }}\" value=\"seleccionado\">&nbsp;<label for=\"{{ label }}\">{{ sensor.getName() }}</label><br>
                                        {% endif %}
                                    {% endfor %}
                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-md-4 -->
                        <div class=\"col-md-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"\">Configuraci&oacute;n</h3>
                                </div>
                                <div class=\"panel-body text-left\">
                                    <!-- Periodo a descargar : periodo, mes_actual, todos, fijo -->
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Per&iacute;odo a descargar:</label><br>
                                        <label class=\"radio-inline\">
                                        {% if q_config.getPeriodo() == \"periodo\" %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Descarga de datos desde</label>
                                        {% else %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Descarga de datos desde</label>
                                        {% endif %}
                                        </label><br>
                                        <label for=\"{{ label }}\">Fecha inicial:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_inicial\" id=\"fecha_inicial\" value=\"{{ q_config.getPeriodoFechaInicial() }}\" size=\"10\" maxlength=\"10\" {{ disabled }}><label for=\"{{ label }}\">(dd/mm/aaaa)</label><br>
                                        <label for=\"{{ label }}\">Fecha final:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_final\" id=\"fecha_final\" value=\"{{ q_config.getPeriodoFechaFinal() }}\" size=\"10\" maxlength=\"10\" {{ disabled }}><label for=\"{{ label }}\">(dd/mm/aaaa)</label><br>
                                        <label class=\"radio-inline\">
                                        {% if q_config.getPeriodo() == \"mes_actual\" %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Mes actual</label>
                                        {% else %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Mes actual</label>
                                        {% endif %}
                                        </label><br>
                                        <label class=\"radio-inline\">
                                        {% if q_config.getPeriodo() == \"todos\" %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Desde el principio</label>
                                        {% else %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Desde el principio</label>
                                        {% endif %}
                                        </label><br>
                                        <label class=\"radio-inline\">
                                        {% if q_config.getPeriodo() == \"fijo\" %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"fijo\" value=\"fijo\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Per&iacute;odo fijo de &uacute;ltimos&nbsp;</label><input class=\"todos\" type=\"text\" name=\"periodo_dias\" value=\"{{ q_config.getPeriodoDias() }}\" size=\"2\" maxlength=\"3\"/><label for=\"{{ label }}\">&nbsp;d&iacute;as</label>
                                        {% else %}
                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"fijo\" value=\"fijo\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">Per&iacute;odo fijo de &uacute;ltimos&nbsp;</label><input class=\"todos\" type=\"text\" name=\"periodo_dias\" value=\"{{ q_config.getPeriodoDias() }}\" size=\"4\" maxlength=\"4\"/><label for=\"{{ label }}\">&nbsp;d&iacute;as</label>
                                        {% endif %}
                                        </label>
                                    </div>
                                    <!-- Tipo de archivo a exportar -->
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Exportar a tipo de archivo:</label><br>
                                        {% set tipos_archivos = json_decode(config_php.TIPOS_ARCHIVOS) %}
                                        {% for key_tipo_archivo, tipo_archivo in tipos_archivos %}
                                            <label class=\"radio-inline\">
                                            {% if q_config.getTipoArchivo() == key_tipo_archivo %}
                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_{{ key_tipo_archivo }}\" value=\"{{ key_tipo_archivo }}\" checked=\"\" {{ disabled }}><label for=\"{{ label }}\">{{ tipo_archivo }}</label>
                                            {% else %}
                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_{{ key_tipo_archivo }}\" value=\"{{ key_tipo_archivo }}\" {{ disabled }}><label for=\"{{ label }}\">{{ tipo_archivo }}</label>
                                            {% endif %}
                                            </label>
                                        {% endfor %}
                                    </div><!-- form-grupo -->
                                    {# }Separador de columnas #}
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Separar columnas por:</label><br>
                                        {% set separadores = json_decode(config_php.SEPARADORES) %}
                                        {% for key_separador, separador in separadores %}
                                            <label class=\"radio-inline\">
                                            {% if q_config.getSeparador() == key_separador %}
                                                <input class=\"todos\" type=\"radio\" id=\"coma\" name=\"separador\" value=\"{{ key_separador }}\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">{{ separador }}</label>
                                            {% else %}
                                                <input class=\"todos\" type=\"radio\" id=\"coma\" name=\"separador\" value=\"{{ key_separador }}\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">{{ separador }}</label>
                                            {% endif %}
                                            </label><br>
                                        {% endfor %}
                                    </div><!-- form-grupo -->
                                    {# Agregar encabezado #}
                                    {% set encabezados = {'si':'Si', 'no':'No'} %}
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Agregar encabezado:</label><br>
                                        {% for key_enca, encabezado in encabezados %}
                                            <label class=\"radio-inline\">
                                            {% if q_config.getEncabezado() == key_enca %}
                                              <input class=\"todos\" type=\"radio\" id=\"encabezado_si\" name=\"encabezado\" value=\"{{ key_enca }}\" checked=\"\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">{{ encabezado }}</label>&nbsp;&nbsp;
                                            {% else %}
                                              <input class=\"todos\" type=\"radio\" id=\"encabezado_si\" name=\"encabezado\" value=\"{{ key_enca }}\" {{ disabled }}>&nbsp;<label for=\"{{ label }}\">{{ encabezado }}</label>&nbsp;&nbsp;
                                            {% endif %}
                                            </label>
                                        {% endfor %}
                                    </div><!-- /form-group -->
                                    {# Nombre de archivo dde salida #}
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Nombre de archivo (sin extension):</label><br>
                                        <input class=\"todos\" type=\"text\" id=\"archivo\" name=\"archivo\" value=\"{{ q_config.getNombreArchivo() }}\" size=\"40\" maxlength=\"50\" {{ disabled }}>
                                    </div>
                                    {# Ubicacion web del archivo #}
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Ubicaci&oacute;n web para enlazar archivo:</label><br>
                                        <label for=\"{{ label }}\">{{ q_config.getUbicacionWeb() }}</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- cierre de div row -->
                    <div class=\"row\">
                        <div class=\"col-md-4 text-right\"></div>
                        <div class=\"col-md-8\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" name=\"save_config\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar configuraci&oacute;n</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_exporta_{{ user.getId() }}');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/export/{{ station.getStationCode() }}/{{ user.getId() }}\">
                    <button type=\"submit\" name=\"export_data\" class=\"btn btn-default\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                </form>
            </div> <!-- /container -->
        </div> <!-- /info-sensores -->
    {% endfor %}
</div><!-- /estaciones -->

{% endmacro %}
", "macros/m_general.twig", "/home/pablo/public_html/sondas_humedad/templates/default/macros/m_general.twig");
    }
}
