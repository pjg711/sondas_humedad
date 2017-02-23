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
    public function getusers_list($__users__ = null, $__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $__users__,
            "config" => $__config__,
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
                echo $this->getAttribute($this, "stations_listAll", array(0 => $context["user"], 1 => (isset($context["config"]) ? $context["config"] : null)), "method");
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
    public function getstations_listAll($__user__ = null, $__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "config" => $__config__,
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
                echo "                ";
                $context["q_config"] = $this->getAttribute($context["station"], "getConfig", array(), "method");
                // line 312
                echo "                ";
                if ($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEnable", array(), "method")) {
                    // line 313
                    echo "                    ";
                    $context["color_background"] = "#A1D490";
                    // line 314
                    echo "                ";
                } else {
                    // line 315
                    echo "                    ";
                    $context["color_background"] = "white";
                    // line 316
                    echo "                ";
                }
                // line 317
                echo "                <option value=\"station_";
                echo $this->getAttribute($context["station"], "getRowId", array(), "method");
                echo "\" style=\"background-color: ";
                echo (isset($context["color_background"]) ? $context["color_background"] : null);
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
            // line 319
            echo "            </select>
        </div>
    </div><!-- /container -->
    ";
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) ? $context["stations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 323
                echo "        ";
                $context["load2"] = $this->getAttribute($context["station"], "loadSensors", array(0 => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getImetos", array(), "method")), "method");
                // line 324
                echo "        ";
                $context["stationSensorsList"] = $this->getAttribute($context["station"], "getAvailableSensors", array(), "method");
                // line 325
                echo "        ";
                $context["q_config"] = $this->getAttribute($context["station"], "getConfig", array(), "method");
                // line 326
                echo "        <div ng-show=\"select_station=='station_";
                echo $this->getAttribute($context["station"], "getRowId", array(), "method");
                echo "'\" class=\"info-sensores\" id=\"station_";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
            <div class=\"container\">
                <hr class=\"\">
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/config/";
                // line 329
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"userid\" name=\"userid\" value=\"";
                // line 331
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "\">
                        <input type=\"hidden\" id=\"f_station_code\" name=\"f_station_code\" value=\"";
                // line 332
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\">
                        <div class=\"col-md-9 text-left\">
                            ";
                // line 334
                if ($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEnable", array(), "method")) {
                    // line 335
                    echo "                                ";
                    // line 336
                    echo "                                ";
                    $context["disabled"] = "";
                    // line 337
                    echo "                                ";
                    $context["label"] = "label-enabled";
                    // line 338
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" checked=\"\" ng-click=\"station_active(this,'station_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n
                            ";
                } else {
                    // line 340
                    echo "                                ";
                    // line 341
                    echo "                                ";
                    $context["disabled"] = "disabled";
                    // line 342
                    echo "                                ";
                    $context["label"] = "label-disabled";
                    // line 343
                    echo "                                <input class=\"nadas\" type=\"checkbox\" id=\"activar\" name=\"enable\" ng-click=\"station_active(this,'station_";
                    echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                    echo "');\">&nbsp;Activar Estaci&oacute;n
                            ";
                }
                // line 345
                echo "                        </div>
                        <div class=\"col-md-12\">
                            <h3>";
                // line 347
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
                // line 356
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "\" ng-click=\"checkAll('";
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "')\" ><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">&nbsp;Todos</label><br>
                                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["stationSensorsList"]) ? $context["stationSensorsList"] : null), "enabled", array(), "array"));
                foreach ($context['_seq'] as $context["key_sensor"] => $context["sensor"]) {
                    // line 358
                    echo "                                        ";
                    if (twig_in_filter($context["key_sensor"], $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSensores", array(), "method"))) {
                        // line 359
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
                        // line 361
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
                    // line 363
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_sensor'], $context['sensor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 364
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
                // line 375
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Per&iacute;odo a descargar:</label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 377
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "periodo")) {
                    // line 378
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                } else {
                    // line 380
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"descarga_periodo\" value=\"periodo\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Descarga de datos desde</label>
                                        ";
                }
                // line 382
                echo "                                        </label><br>
                                        <label for=\"";
                // line 383
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Fecha inicial:&nbsp;</label><input type=\"text\" class=\"todos\" name=\"fecha_inicial\" id=\"fecha_inicial\" value=\"";
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodoFechaInicial", array(), "method");
                echo "\" size=\"10\" maxlength=\"10\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo "><label for=\"";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">(dd/mm/aaaa)</label><br>
                                        <label for=\"";
                // line 384
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
                // line 386
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "mes_actual")) {
                    // line 387
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                } else {
                    // line 389
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"mes_actual\" value=\"mes_actual\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Mes actual</label>
                                        ";
                }
                // line 391
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 393
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "todos")) {
                    // line 394
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" checked=\"\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                } else {
                    // line 396
                    echo "                                            <input class=\"todos\" type=\"radio\" name=\"periodo\" id=\"todos2\" value=\"todos\" ";
                    echo (isset($context["disabled"]) ? $context["disabled"] : null);
                    echo ">&nbsp;<label for=\"";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "\">Desde el principio</label>
                                        ";
                }
                // line 398
                echo "                                        </label><br>
                                        <label class=\"radio-inline\">
                                        ";
                // line 400
                if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getPeriodo", array(), "method") == "fijo")) {
                    // line 401
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
                    // line 403
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
                // line 405
                echo "                                        </label>
                                    </div>
                                    <!-- Tipo de archivo a exportar -->
                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 409
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Exportar a tipo de archivo:</label><br>
                                        ";
                // line 410
                $context["tipos_archivos"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "TIPOS_ARCHIVOS", array())));
                // line 411
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('objectFilter')->getCallable(), array((isset($context["tipos_archivos"]) ? $context["tipos_archivos"] : null))));
                foreach ($context['_seq'] as $context["key_tipo_archivo"] => $context["tipo_archivo"]) {
                    // line 412
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 413
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getTipoArchivo", array(), "method") == $context["key_tipo_archivo"])) {
                        // line 414
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
                        // line 416
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
                    // line 418
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_tipo_archivo'], $context['tipo_archivo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 420
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 422
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 423
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Separar columnas por:</label><br>
                                        ";
                // line 424
                $context["separadores"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), array($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "SEPARADORES", array())));
                // line 425
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('objectFilter')->getCallable(), array((isset($context["separadores"]) ? $context["separadores"] : null))));
                foreach ($context['_seq'] as $context["key_separador"] => $context["separador"]) {
                    // line 426
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 427
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getSeparador", array(), "method") == $context["key_separador"])) {
                        // line 428
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
                        // line 430
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
                    // line 432
                    echo "                                            </label><br>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_separador'], $context['separador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "                                    </div><!-- form-grupo -->
                                    ";
                // line 436
                echo "                                    ";
                $context["encabezados"] = array("si" => "Si", "no" => "No");
                // line 437
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 438
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Agregar encabezado:</label><br>
                                        ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["encabezados"]) ? $context["encabezados"] : null));
                foreach ($context['_seq'] as $context["key_enca"] => $context["encabezado"]) {
                    // line 440
                    echo "                                            <label class=\"radio-inline\">
                                            ";
                    // line 441
                    if (($this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getEncabezado", array(), "method") == $context["key_enca"])) {
                        // line 442
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
                        // line 444
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
                    // line 446
                    echo "                                            </label>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key_enca'], $context['encabezado'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 448
                echo "                                    </div><!-- /form-group -->
                                    ";
                // line 450
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 451
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Nombre de archivo (sin extensi&oacute;n):</label><br>
                                        <input class=\"todos\" type=\"text\" id=\"archivo\" name=\"archivo\" value=\"";
                // line 452
                echo $this->getAttribute((isset($context["q_config"]) ? $context["q_config"] : null), "getNombreArchivo", array(), "method");
                echo "\" size=\"40\" maxlength=\"50\" ";
                echo (isset($context["disabled"]) ? $context["disabled"] : null);
                echo ">
                                    </div>
                                    ";
                // line 455
                echo "                                    <div class=\"form-group\">
                                        <label for=\"";
                // line 456
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "\">Ubicaci&oacute;n web para enlazar archivo:</label><br>
                                        <label for=\"";
                // line 457
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
                                <button type=\"button\" name=\"export_data\" class=\"btn btn-default\" ng-click=\"form_new('POST','/stations/export/";
                // line 467
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "/";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "')\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                                <button type=\"submit\" name=\"save_config\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar configuraci&oacute;n</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_exporta_";
                // line 469
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
                <br><br><br>
                <!--
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/export/";
                // line 476
                echo $this->getAttribute($context["station"], "getStationCode", array(), "method");
                echo "/";
                echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method");
                echo "\">
                    <button type=\"submit\" name=\"export_data\" class=\"btn btn-default\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                </form>
                -->
            </div> <!-- /container -->
        </div> <!-- /info-sensores -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 483
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
        return array (  1207 => 483,  1192 => 476,  1182 => 469,  1175 => 467,  1160 => 457,  1156 => 456,  1153 => 455,  1146 => 452,  1142 => 451,  1139 => 450,  1136 => 448,  1129 => 446,  1117 => 444,  1105 => 442,  1103 => 441,  1100 => 440,  1096 => 439,  1092 => 438,  1089 => 437,  1086 => 436,  1083 => 434,  1076 => 432,  1064 => 430,  1052 => 428,  1050 => 427,  1047 => 426,  1042 => 425,  1040 => 424,  1036 => 423,  1033 => 422,  1030 => 420,  1023 => 418,  1009 => 416,  995 => 414,  993 => 413,  990 => 412,  985 => 411,  983 => 410,  979 => 409,  973 => 405,  961 => 403,  949 => 401,  947 => 400,  943 => 398,  935 => 396,  927 => 394,  925 => 393,  921 => 391,  913 => 389,  905 => 387,  903 => 386,  892 => 384,  882 => 383,  879 => 382,  871 => 380,  863 => 378,  861 => 377,  856 => 375,  843 => 364,  837 => 363,  823 => 361,  809 => 359,  806 => 358,  802 => 357,  792 => 356,  778 => 347,  774 => 345,  768 => 343,  765 => 342,  762 => 341,  760 => 340,  754 => 338,  751 => 337,  748 => 336,  746 => 335,  744 => 334,  739 => 332,  735 => 331,  730 => 329,  721 => 326,  718 => 325,  715 => 324,  712 => 323,  708 => 322,  703 => 319,  688 => 317,  685 => 316,  682 => 315,  679 => 314,  676 => 313,  673 => 312,  670 => 311,  666 => 310,  654 => 300,  652 => 299,  649 => 298,  636 => 297,  616 => 290,  605 => 282,  601 => 281,  597 => 280,  589 => 277,  581 => 274,  573 => 271,  565 => 268,  557 => 262,  554 => 261,  541 => 253,  533 => 250,  525 => 247,  517 => 244,  509 => 238,  506 => 237,  496 => 229,  492 => 228,  488 => 227,  482 => 224,  474 => 221,  466 => 215,  463 => 214,  457 => 212,  454 => 211,  448 => 209,  446 => 208,  442 => 207,  431 => 198,  419 => 197,  390 => 182,  386 => 181,  380 => 178,  374 => 175,  368 => 172,  362 => 169,  349 => 159,  343 => 156,  337 => 153,  331 => 150,  317 => 139,  313 => 138,  307 => 135,  297 => 127,  295 => 126,  292 => 125,  281 => 124,  254 => 110,  232 => 90,  221 => 89,  205 => 86,  193 => 79,  188 => 77,  186 => 76,  184 => 75,  182 => 74,  180 => 73,  176 => 71,  162 => 60,  155 => 56,  151 => 55,  147 => 54,  136 => 46,  132 => 45,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  105 => 32,  98 => 29,  95 => 27,  93 => 26,  90 => 25,  86 => 23,  79 => 20,  76 => 18,  74 => 17,  72 => 16,  66 => 14,  63 => 12,  60 => 10,  56 => 9,  47 => 2,  34 => 1,  29 => 296,  26 => 196,  22 => 122,  19 => 88,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro users_list(users, config) %}
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
                                {{ _self.stations_listAll(user, config) }}
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

{% macro stations_listAll(user, config) %}

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
                {% set q_config = station.getConfig() %}
                {% if q_config.getEnable() %}
                    {% set color_background = '#A1D490' %}
                {% else %}
                    {% set color_background = 'white' %}
                {% endif %}
                <option value=\"station_{{ station.getRowId() }}\" style=\"background-color: {{ color_background }}\">{{ station.getFName() }} - {{ station.getName() }}</option>
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
                                        {% set tipos_archivos = config.TIPOS_ARCHIVOS|json_decode %}
                                        {% for key_tipo_archivo, tipo_archivo in tipos_archivos|objectFilter %}
                                            <label class=\"radio-inline\">
                                            {% if q_config.getTipoArchivo() == key_tipo_archivo %}
                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_{{ key_tipo_archivo }}\" value=\"{{ key_tipo_archivo }}\" checked=\"\" {{ disabled }}><label for=\"{{ label }}\">{{ tipo_archivo }}</label>
                                            {% else %}
                                                <input class=\"todos\" type=\"radio\" name=\"tipo_archivo\" id=\"archivo_{{ key_tipo_archivo }}\" value=\"{{ key_tipo_archivo }}\" {{ disabled }}><label for=\"{{ label }}\">{{ tipo_archivo }}</label>
                                            {% endif %}
                                            </label>
                                        {% endfor %}
                                    </div><!-- form-grupo -->
                                    {# Separador de columnas #}
                                    <div class=\"form-group\">
                                        <label for=\"{{ label }}\">Separar columnas por:</label><br>
                                        {% set separadores = config.SEPARADORES|json_decode %}
                                        {% for key_separador, separador in separadores|objectFilter %}
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
                                        <label for=\"{{ label }}\">Nombre de archivo (sin extensi&oacute;n):</label><br>
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
                                <button type=\"button\" name=\"export_data\" class=\"btn btn-default\" ng-click=\"form_new('POST','/stations/export/{{ station.getStationCode() }}/{{ user.getId() }}')\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                                <button type=\"submit\" name=\"save_config\" class=\"btn btn-default\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i>&nbsp;Guardar configuraci&oacute;n</button>&nbsp;
                                <button type=\"button\" name=\"close\" class=\"btn btn-default\" onClick=\"javascript:show_hide('conf_exporta_{{ user.getId() }}');\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;Cerrar</button>&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
                <br><br><br>
                <!--
                <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"/stations/export/{{ station.getStationCode() }}/{{ user.getId() }}\">
                    <button type=\"submit\" name=\"export_data\" class=\"btn btn-default\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i>&nbsp;Exportar ahora</button>&nbsp;
                </form>
                -->
            </div> <!-- /container -->
        </div> <!-- /info-sensores -->
    {% endfor %}
</div><!-- /estaciones -->

{% endmacro %}
", "macros/m_general.twig", "/home/pablo/public_html/sondas_humedad/templates/default/macros/m_general.twig");
    }
}
