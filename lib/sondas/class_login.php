<?php
/**
 * Description of class_login
 *
 * @author pablo
 */
class Login 
{
    /**
     * 
     * @return type boolean
     */
    public static function getIsAdmin()
    {
        if(isset($_SESSION['is_admin'])) return $_SESSION['is_admin'];
        return false;
    }
    
    public static function getUserActive()
    {
        if(isset($_SESSION['user_active'])) return $_SESSION['user_active'];
        return false;
    }
    /**
     * 
     * @param type $action is string
     */
    /*
    public static function login_session()
    {
        echo "
        <br>\n
        <h1>".TITULO."</h1>
        <form id=\"frmLogin\" name=\"frmLogin\" method=\"post\" action=\"/login\">
            <input type=\"hidden\" name=\"usar_imap\" value=\"1\">
            <br>
            <table id=\"tabla-ingreso\">
                <tr>
                    <td colspan=\"2\" align=\"center\">
                        <img src=\"./img/enviroscan.png\">
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
        </form>";
    }
    */
    /**
     * Verifica usuario y crear variables de sesion si es true con la informacion de:
     * user_login_session, userid, user_active, password, is_admin
     * 
     * @param type $username is string
     * @param type $password is string
     * @return boolean
     */
    public static function verify_user($username="",$password="")
    {
        // primero verifico que el usuario este en el sistema
        $query="SELECT  `id`,`username`,`password`,`is_admin`
                FROM    `" . SESSION_NAME . "users` 
                WHERE   `username`='{$username}' AND 
                        (`usertype`='imetos' OR `usertype`='sistema') LIMIT 1";
        if(sql_select($query, $results))
        {
            if($registro=$results->fetch(PDO::FETCH_ASSOC))
            {
                if(!AUTENTICAR)
                {
                    // sin autenticar
                    $_SESSION['user_login_session']=true;
                    $_SESSION['userid']=$registro['id'];
                    $_SESSION['user_active']=$registro['username'];
                    $_SESSION['password']=$registro['password'];
                    $_SESSION['is_admin']=$registro['is_admin'];
                    return true;
                }else
                {
                    if($registro['is_admin']==0)
                    {
                        // es usuario imetos y verifico el login en iMetos
                        $iMetos=new JSON_IMETOS($username,$password);
                        if(!$iMetos->get_error() OR !AUTENTICAR)
                        {
                            // bien
                            $_SESSION['user_login_session']=true;
                            $_SESSION['userid']=$registro['id'];
                            $_SESSION['user_active']=$registro['username'];
                            $_SESSION['password']=$registro['password'];
                            $_SESSION['is_admin']=$registro['is_admin'];
                            return true;
                        }
                    }else
                    {
                        // es tipo de usuario sistema
                        $_SESSION['user_login_session']=true;
                        $_SESSION['userid']=$registro['id'];
                        $_SESSION['user_active']=$registro['username'];
                        $_SESSION['password']=$registro['password'];
                        $_SESSION['is_admin']=$registro['is_admin'];
                        return true;
                    }
                }
            }
        }
        return false;
    }    
    /**
     * retorna si esta abierta una sesion o no
     * @return boolean
     */
    public static function getLoginSession() 
    {
        if(isset($_SESSION['user_login_session']))
        {
            if($_SESSION['user_login_session']) return true;
        }
        return false;
    }
    /**
     * 
     */
    public static function SignOff()
    {
        unset($_SESSION['user_login_session']);
        unset($_SESSION['password']);
        unset($_SESSION['userid']);
        unset($_SESSION['user_active']);
        unset($_SESSION['is_admin']);
        session_unset();
        session_destroy();
    }
}