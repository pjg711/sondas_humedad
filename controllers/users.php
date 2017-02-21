<?php
if(Login::getLoginSession())
{
    if(!isset($_POST['action'])) exit;
    $userid=req('userid');
    switch($_POST['action'])
    {
        case 'new':
            // nuevo usuario
            if(Login::getIsAdmin())
            {
                if(User::save())
                {
                    mensaje("El usuario se guard\u00F3 con \u00E9xito","Nuevo usuario");
                }else
                {
                    mensaje("ERROR. No se pudo guardar el nuevo usuario","","error");
                }
            }else
            {
                mensaje("ERROR. No es usuario admin","","error");
            }
            break;
        case 'edit':
            // verificar conexion
            if($error=User::update())
            {
                mensaje("El usuario se actualiz\u00F3 con \u00E9xito","Editar usuario");
            }else
            {
                //mensaje("ERROR. No se pudo editar el usuario","","error");
                mensaje($error,"","error");
            }
            break;

        case 'save_config':
            // guarda la nueva contraseña
            if(User::save_config())
            {
                mensaje("Se cambió contraseña de usuario");
            }else
            {
                mensaje("ERROR. No se pudo cambiar la contraseña.","","error");
            }
            break;

        case 'delete_user':
            // borrar usuario
            break;

        case 'confirmed_delete':
            // confirmar borrado de usuario
            if(User::delete_user($userid))
            {
                mensaje("El usuario fue borrado","Borrar usuario");
            }else
            {
                mensaje("ERROR! No se pudo borrar el usuario","","error");
            }
            break;

        case 'listUsers':
            //listado de todos los usuarios
            if(Login::getIsAdmin())
            {
                echo "Listado de todos los usuarios<br>";
            }
            break;

        case 'check_connection_imetos':
            // verifico la conexion a imetos
            $usuario=req("username_imetos");
            $password=req("password_imetos");
            if(IMETOS::check_connection_imetos($usuario,$password))
            {
                mensaje("Conexión realizada con éxito.","Verificar conexión iMetos");
            }else
            {
                Mensaje("Error en el usuario y/o contraseña de iMetos","","error");
            }
            break;

        case 'check_connection_mysql':
            // verifico conexión con la base de datos
            $usuario=req("usuario_mysql");
            $password=req("password_mysql");
            $basedatos=req("base_datos_mysql");
            $servidor=req("servidor_mysql");
            if(IMETOS::check_connection_mysql($usuario, $password, $servidor, $basedatos))
            {
                mensaje("Conexión realizada con éxito.","Verificar conexión MySQL");
            }else
            {
                Mensaje("Error en el usuario y/o contraseña de MySQL","","error");
            }
            break;

        case 'check_connection_ftp':
            // verifico conexion con el servidor FTP
            /*
             *  [username_ftp] => seedmech
                [password_ftp] => seedmech932
                [server_ftp] =>
                [remotedir]
             */
            $servidor=req("server_ftp");
            $usuario=req("username_ftp");
            $password=req("password_ftp");

            if(FTP::check_connection_ftp($servidor, $usuario, $password))
            {

            }

            break;
    }
}
?>
