<?php

/* macros/m_users.twig */
class __TwigTemplate_a590f3cdba8908401ee32706e65783e8c29f5104a4b560331a15fa894fb15867 extends Twig_Template
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
        // line 95
        echo "
";
        // line 129
        echo "

";
        // line 203
        echo "
";
        // line 303
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
                echo "    ";
                // line 17
                echo "    <tr>
        ";
                // line 19
                echo "        <td class=\"text-center\">
            ";
                // line 21
                echo "            <a class=\"link-tabla\" href=\"/user/delete/";
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\" title=\"Borrar usuario\"><i class=\"fa fa-trash\"></i></a>
        </td>
        ";
                // line 23
                if ($this->getAttribute($context["user"], "getEnableFTP", array(), "method")) {
                    // line 24
                    echo "        ";
                    // line 25
                    echo "        <td class=\"text-center\">
            ";
                    // line 27
                    echo "            <a class=\"link-tabla\" href=\"/reports/make/";
                    echo $this->getAttribute($context["user"], "getId", array(), "method");
                    echo "\" title=\"Revisar sondas detenidas\"><i class=\"fa fa-terminal\"></i></a>
        </td>
        ";
                } else {
                    // line 30
                    echo "        <td></td>
        ";
                }
                // line 32
                echo "        ";
                if ($this->getAttribute($context["user"], "getEnableReports", array(), "method")) {
                    // line 33
                    echo "        ";
                    // line 34
                    echo "        <td class=\"text-center\">
            ";
                    // line 36
                    echo "            <a class=\"link-tabla\" href=\"/reports/view/";
                    echo $this->getAttribute($context["user"], "getId", array(), "method");
                    echo "\" title=\"Ver informes de sondas detenidas\"><i class=\"fa fa-eye\"></i></a>
        </td>
        ";
                } else {
                    // line 39
                    echo "        <td></td>
        ";
                }
                // line 41
                echo "        ";
                if (((isset($context["userid"]) ? $context["userid"] : null) == $this->getAttribute($context["user"], "getId", array(), "method"))) {
                    // line 42
                    echo "            ";
                    $context["mostrar"] = false;
                    // line 43
                    echo "        ";
                } else {
                    // line 44
                    echo "            ";
                    $context["mostrar"] = true;
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "        <td align=\"center\">
            <a class=\"link-tabla\" ng-click = \"f_show_user()\" title=\"Configuraci&oacute;n de usuario\"><i class=\"fa fa-user\"></i></a>&nbsp;&nbsp;
        </td>
        <td align=\"center\">
            <a class=\"link-tabla\" ng-click = \"f_show_export()\" title=\"Configuraci&oacute;n de estaciones\"><i class=\"fa fa-pencil\"></i></a>
        </td>
        <td align=\"center\">";
                // line 52
                echo $this->getAttribute($context["user"], "getUsername", array(), "method");
                echo "</td>
        <td>";
                // line 53
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
                // line 61
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                            <form name=\"user_edit\" method=\"post\" action=\"/users/edit/";
                // line 62
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                                ";
                // line 63
                echo $this->getAttribute((isset($context["m_users"]) ? $context["m_users"] : null), "form_user_edit", array(0 => $context["user"]), "method");
                echo "
                                <div class=\"panel-body\" style=\"text-align:right\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" name=\"save_user\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar usuario</button>&nbsp;
                                        <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_usuario_";
                // line 67
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
                // line 78
                echo $this->getAttribute($context["user"], "getId", array(), "method");
                echo "\">
                            ";
                // line 80
                echo "                            ";
                // line 81
                echo "                                ";
                // line 82
                echo "                                ";
                // line 83
                echo "                                ";
                // line 84
                echo "                                ";
                echo $this->getAttribute($this, "stations_listAll", array(0 => $context["user"]), "method");
                echo "
                            ";
                // line 86
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
            // line 93
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

    // line 96
    public function getnew_user(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
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
            // line 117
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

    // line 131
    public function getform_user_new(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "
";
            // line 133
            $context["label"] = "label-enabled";
            // line 134
            echo "<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default col-md-11\">
            <div class=\"panel-heading\" style=\"text-align:center\">
                <h4 class=\"\">Datos de cuenta Fieldclimate</h4>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                    <label for=\"";
            // line 142
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 145
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                    <label for=\"";
            // line 146
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
            // line 157
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 160
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 163
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 166
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
            // line 176
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 179
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"\" size=\"80\" maxlength=\"255\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 182
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 185
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"\" size=\"80\" maxlength=\"1000\">
                </div>
                <div class=\"form-group\">
                    <label for=\"";
            // line 188
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                    <label for=\"";
            // line 189
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

    // line 204
    public function getform_user_edit($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 205
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
            // line 214
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
            echo "\">
            ";
            // line 215
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableFTP", array(), "method")) {
                // line 216
                echo "                <input type=\"hidden\" name=\"id_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdFTP", array(), "method");
                echo "\">
            ";
            }
            // line 218
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableMySQL", array(), "method")) {
                // line 219
                echo "                <input type=\"hidden\" name=\"id_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getIdMySQL", array(), "method");
                echo "\">
            ";
            }
            // line 221
            echo "            ";
            $context["label"] = "label-enabled";
            // line 222
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos de cuenta Fieldclimate</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
            // line 228
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Usuario iMetos:&nbsp;</label><input type=\"text\" name=\"username_imetos\" value=\"";
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method");
            echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
            // line 231
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Password iMetos:&nbsp;</label><input type=\"text\" name=\"password_imetos\" value=\"\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
            // line 234
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "\">Mails para el env&iacute;o de informes de exportaci&oacute;n:&nbsp;</label>
                        <label for=\"{\$label}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails\" rows=\"3\" cols=\"120\">";
            // line 236
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmails", array(), "method");
            echo "</textarea>
                    </div>
                    <div class=\"form-group\" style=\"text-align:right\">
                        <button type=\"submit\" name=\"action\" value=\"check_connection_imetos\" class=\"btn btn-default\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>&nbsp;Verificar conexi&oacute;n a sitio Fieldclimate</button>
                    </div>
                </div>
            </div><!-- /panel panel-default -->
            ";
            // line 244
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableMySQL", array(), "method")) {
                // line 245
                echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos para la conexión a la base de datos iMetos</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
                // line 251
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Usuario Mysql:&nbsp;</label><input type=\"text\" name=\"usuario_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 254
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Password Mysql:&nbsp;</label><input type=\"text\" name=\"password_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPasswMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 257
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Base de datos Mysql:&nbsp;</label><input type=\"text\" name=\"base_datos_mysql\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getDatabaseMySQL", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 260
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
            // line 268
            echo "            ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEnableFTP", array(), "method")) {
                // line 269
                echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" style=\"text-align:center\">
                    <h3 class=\"\">Datos FTP para el informe de alerta</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label for=\"";
                // line 275
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Usuario FTP:&nbsp;</label><input type=\"text\" name=\"username_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 278
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Password FTP:&nbsp;</label><input type=\"password\" name=\"password_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPasswFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"255\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 281
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Servidor FTP:&nbsp;</label><input type=\"text\" name=\"server_ftp\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getServerFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 284
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Directorio remoto:&nbsp;</label><input type=\"text\" name=\"remotedir\" value=\"";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRemoteDirFTP", array(), "method");
                echo "\" size=\"80\" maxlength=\"1000\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"";
                // line 287
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Mails para el env&iacute;o de alertas:&nbsp;</label>
                        <label for=\"";
                // line 288
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
                        <textarea name=\"mails_ftp\" rows=\"3\" cols=\"80\">";
                // line 289
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
            // line 297
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

    // line 304
    public function getstations_listAll($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 305
            echo "
";
            // line 307
            echo "
";
            // line 308
            $context["stations"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getStations", array(), "method");
            // line 309
            echo "
<div class=\"estaciones\" id=\"estaciones\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"text-align:center\">
                <h2>Configuraci&oacute;n de estaciones</h2>
            </div>
        </div>
        <div class=\"row\">
            <label class=\"col-xs-3 control-label\">Seleccione estaci&oacute;n:</label>
            <select class=\"form-control\" onChange=\"show_hide('estacion_'+this.value,'info-sensores');\">
            ";
            // line 320
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) ? $context["stations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 321
                echo "                <option value=\"";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
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
            // line 323
            echo "            </select>
        </div>
    </div><!-- /container -->
    ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) ? $context["stations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 327
                echo "        pase por aca 1<br>
        ";
                // line 328
                $context["load2"] = $this->getAttribute($context["station"], "loadSensors", array(0 => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getImetos", array(), "method")), "method");
                // line 329
                echo "        ";
                $context["stationSensorsList"] = $this->getAttribute($context["station"], "getAvailableSensors", array(), "method");
                // line 330
                echo "        ";
                $context["q_config"] = $this->getAttribute($context["station"], "getConfig", array(), "method");
                // line 331
                echo "        <div class=\"info-sensores\" id=\"estacion_{\$station->getStationCode()}\">
            <div class=\"container\">
                <hr class=\"\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/config/";
                // line 334
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"userid\" name=\"userid\" value=\"";
                // line 336
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "\">
                        <input type=\"hidden\" id=\"f_station_code\" name=\"f_station_code\" value=\"";
                // line 337
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                        <div class=\"col-md-9\">
                            ";
                // line 339
                if ($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEnable", array(), "method")) {
                    // line 340
                    echo "                                ";
                    // line 341
                    echo "                                ";
                    $context["disabled"] = "";
                    // line 342
                    echo "                                ";
                    $context["label"] = "label-enabled";
                    // line 343
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" checked=\"\" onclick=\"station_active(this,'estacion_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n\";
                            ";
                } else {
                    // line 345
                    echo "                                ";
                    // line 346
                    echo "                                ";
                    $context["disabled"] = "disabled";
                    // line 347
                    echo "                                ";
                    $context["label"] = "label-disabled";
                    // line 348
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" onclick=\"station_active(this,'estacion_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n\";
                            ";
                }
                // line 350
                echo "                        </div>
                        <div class=\"col-md-12\">
                            <h3>";
                // line 352
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
                                <div class=\"panel-body\">
                                    <input class=\"sensores\" type=\"checkbox\" id=\"sensor-todos-";
                // line 361
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\" name=\"";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\" value=\"-9999\" onClick=\"select_sensors_all('";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "');\"><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">&nbsp;Todos</label><br>
                                ";
                // line 362
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["stationSensorsList"]) ? $context["stationSensorsList"] : null), "enabled", array(), "array"));
                foreach ($context['_seq'] as $context["key_sensor"] => $context["sensor"]) {
                    // line 363
                    echo "                                    ";
                    if (twig_in_filter($context["key_sensor"], $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSensores", array(), "method"))) {
                        // line 364
                        echo "                                        <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-";
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
                        // line 366
                        echo "                                        <input class=\"sensores-todos\" type=\"checkbox\" id=\"sensor-";
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
                    // line 368
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_sensor'], $context['sensor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "                                </div><!-- /panel-body -->
                            </div><!-- /panel panel-default -->
                        </div><!-- /col-md-4 -->
                        <div class=\"col-md-4\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"\">Configuraci&oacute;n</h3>
                                </div>
                                <div class=\"panel-body\">\";
                                    <!-- Periodo a descargar : periodo, mes_actual, todos, fijo -->
                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 380
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Per&iacute;odo a descargar:</label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 382
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "periodo")) {
                    // line 383
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                } else {
                    // line 385
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                }
                // line 387
                echo "                                        </label><br>
                                        <label for=\"";
                // line 388
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Fecha inicial:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_inicial\" id=\"fecha_inicial\" value=\"";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoFechaInicial", array(), "method");
                echo "\" size=\"10\" maxlength=\"10\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo "><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">(dd/mm/aaaa)</label><br>
                                        <label for=\"";
                // line 389
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Fecha final:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_final\" id=\"fecha_final\" value=\"";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoFechaFinal", array(), "method");
                echo "\" size=\"10\" maxlength=\"10\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo "><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">(dd/mm/aaaa)</label><br>
                                        <label class=\"radio-inline\">\";
                                        ";
                // line 391
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "mes_actual")) {
                    // line 392
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                } else {
                    // line 394
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                }
                // line 396
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 398
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "todos")) {
                    // line 399
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                } else {
                    // line 401
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                }
                // line 403
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 405
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "fijo")) {
                    // line 406
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
                    // line 408
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
                // line 410
                echo "                                        </label>
                                    </div>
                                    <!-- Tipo de archivo a exportar -->
                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 414
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Exportar a tipo de archivo:</label><br>
                                        ";
                // line 415
                $context["tipos_archivos"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "TIPOS_ARCHIVOS", array())));
                // line 416
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tipos_archivos"]) ? $context["tipos_archivos"] : null));
                foreach ($context['_seq'] as $context["key_tipo_archivo"] => $context["tipo_archivo"]) {
                    // line 417
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 418
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getTipoArchivo", array(), "method") == $context["key_tipo_archivo"])) {
                        // line 419
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
                        // line 421
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
                    // line 423
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_tipo_archivo'], $context['tipo_archivo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 425
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 427
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 428
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Separar columnas por:</label><br>
                                        ";
                // line 429
                $context["separadores"] = call_user_func_array($this->env->getFunction('json_decode')->getCallable(), array($this->getAttribute((isset($context["config_php"]) ? $context["config_php"] : null), "SEPARADORES", array())));
                // line 430
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["separadores"]) ? $context["separadores"] : null));
                foreach ($context['_seq'] as $context["key_separador"] => $context["separador"]) {
                    // line 431
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 432
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSeparador", array(), "method") == $context["key_separador"])) {
                        // line 433
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
                        // line 435
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
                    // line 437
                    echo "                                            </label><br>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_separador'], $context['separador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 441
                echo "                                    ";
                $context["encabezados"] = array("si" => "Si", "no" => "No");
                // line 442
                echo "                                    <div class=\"form-group\">
                                        <label for=\"{\$label}\">Agregar encabezado:</label><br>
                                        ";
                // line 444
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["encabezados"]) ? $context["encabezados"] : null));
                foreach ($context['_seq'] as $context["key_enca"] => $context["encabezado"]) {
                    // line 445
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 446
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEncabezado", array(), "method") == $context["key_enca"])) {
                        // line 447
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
                        // line 449
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
                    // line 451
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_enca'], $context['encabezado'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "                                    </div><!-- /form-group -->
                                    ";
                // line 455
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 456
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Nombre de archivo (sin extension):</label><br>
                                        <input class=\"todos\" type=\"text\" id=\"archivo\" name=\"archivo\" value=\"";
                // line 457
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getNombreArchivo", array(), "method");
                echo "\" size=\"40\" maxlength=\"50\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- cierre de div row -->\";
                    <div class=\"row\">
                        <div class=\"col-md-4 text-right\"></div>
                        <div class=\"col-md-8\">
                            <div class=\"pull-right\">
                                <button type=\"submit\" name=\"save_config\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar configuraci&oacute;n</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_exporta_";
                // line 468
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/export/";
                // line 473
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
            // line 479
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
        return "macros/m_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1162 => 479,  1148 => 473,  1140 => 468,  1124 => 457,  1120 => 456,  1117 => 455,  1114 => 453,  1107 => 451,  1095 => 449,  1083 => 447,  1081 => 446,  1078 => 445,  1074 => 444,  1070 => 442,  1067 => 441,  1064 => 439,  1057 => 437,  1045 => 435,  1033 => 433,  1031 => 432,  1028 => 431,  1023 => 430,  1021 => 429,  1017 => 428,  1014 => 427,  1011 => 425,  1004 => 423,  990 => 421,  976 => 419,  974 => 418,  971 => 417,  966 => 416,  964 => 415,  960 => 414,  954 => 410,  942 => 408,  930 => 406,  928 => 405,  924 => 403,  916 => 401,  908 => 399,  906 => 398,  902 => 396,  894 => 394,  886 => 392,  884 => 391,  873 => 389,  863 => 388,  860 => 387,  852 => 385,  844 => 383,  842 => 382,  837 => 380,  824 => 369,  818 => 368,  804 => 366,  790 => 364,  787 => 363,  783 => 362,  771 => 361,  757 => 352,  753 => 350,  747 => 348,  744 => 347,  741 => 346,  739 => 345,  733 => 343,  730 => 342,  727 => 341,  725 => 340,  723 => 339,  718 => 337,  714 => 336,  709 => 334,  704 => 331,  701 => 330,  698 => 329,  696 => 328,  693 => 327,  689 => 326,  684 => 323,  671 => 321,  667 => 320,  654 => 309,  652 => 308,  649 => 307,  646 => 305,  634 => 304,  614 => 297,  603 => 289,  599 => 288,  595 => 287,  587 => 284,  579 => 281,  571 => 278,  563 => 275,  555 => 269,  552 => 268,  539 => 260,  531 => 257,  523 => 254,  515 => 251,  507 => 245,  504 => 244,  494 => 236,  489 => 234,  483 => 231,  475 => 228,  467 => 222,  464 => 221,  458 => 219,  455 => 218,  449 => 216,  447 => 215,  443 => 214,  432 => 205,  420 => 204,  391 => 189,  387 => 188,  381 => 185,  375 => 182,  369 => 179,  363 => 176,  350 => 166,  344 => 163,  338 => 160,  332 => 157,  318 => 146,  314 => 145,  308 => 142,  298 => 134,  296 => 133,  293 => 132,  282 => 131,  255 => 117,  233 => 97,  222 => 96,  206 => 93,  194 => 86,  189 => 84,  187 => 83,  185 => 82,  183 => 81,  181 => 80,  177 => 78,  163 => 67,  156 => 63,  152 => 62,  148 => 61,  137 => 53,  133 => 52,  125 => 46,  122 => 45,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  106 => 39,  99 => 36,  96 => 34,  94 => 33,  91 => 32,  87 => 30,  80 => 27,  77 => 25,  75 => 24,  73 => 23,  67 => 21,  64 => 19,  61 => 17,  59 => 10,  55 => 9,  46 => 2,  34 => 1,  29 => 303,  26 => 203,  22 => 129,  19 => 95,);
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
    {#
    <tr>
        <td colspan=\"7\">
            {{ user|var_dump }}
        </td>
    </tr>
    #}
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
                        <label for=\"{\$label}\"><h6 class=\"\">(para varios mails sep&aacute;relos por coma)</h6></label><br>
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

{# {{ user|var_dump }} #}

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
            <select class=\"form-control\" onChange=\"show_hide('estacion_'+this.value,'info-sensores');\">
            {% for station in stations %}
                <option value=\"{{ station.getStationCode() }}\">{{ station.getFName() }} - {{ station.getName() }}</option>
            {% endfor %}
            </select>
        </div>
    </div><!-- /container -->
    {% for station in stations %}
        pase por aca 1<br>
        {% set load2 = station.loadSensors(user.getImetos()) %}
        {% set stationSensorsList = station.getAvailableSensors() %}
        {% set q_config = station.getConfig() %}
        <div class=\"info-sensores\" id=\"estacion_{\$station->getStationCode()}\">
            <div class=\"container\">
                <hr class=\"\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/config/{{ station.getStationCode() }}\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"userid\" name=\"userid\" value=\"{{ user.getId() }}\">
                        <input type=\"hidden\" id=\"f_station_code\" name=\"f_station_code\" value=\"{{ station.getStationCode() }}\">
                        <div class=\"col-md-9\">
                            {% if q_config.getEnable() %}
                                {# estacion activa #}
                                {% set disabled = \"\" %}
                                {% set label = \"label-enabled\" %}
                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" checked=\"\" onclick=\"station_active(this,'estacion_{{ station.getStationCode() }}');\">&nbsp;Activar Estaci&oacute;n\";
                            {% else %}
                                {# estacion desactivada #}
                                {% set disabled = \"disabled\" %}
                                {% set label = \"label-disabled\" %}
                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" onclick=\"station_active(this,'estacion_{{ station.getStationCode() }}');\">&nbsp;Activar Estaci&oacute;n\";
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
                                <div class=\"panel-body\">
                                    <input class=\"sensores\" type=\"checkbox\" id=\"sensor-todos-{{ station.getStationCode() }}\" name=\"{{ station.getStationCode() }}\" value=\"-9999\" onClick=\"select_sensors_all('{{ station.getStationCode() }}');\"><label for=\"{{ label }}\" {{ disabled }}>&nbsp;Todos</label><br>
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
                                <div class=\"panel-body\">\";
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
                                        <label class=\"radio-inline\">\";
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
                                        <label for=\"{\$label}\">Agregar encabezado:</label><br>
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
                                </div>
                            </div>
                        </div>
                    </div> <!-- cierre de div row -->\";
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
", "macros/m_users.twig", "/home/pablo/public_html/sondas_humedad/templates/default/macros/m_users.twig");
    }
}
