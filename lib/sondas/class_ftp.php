<?php
class FTP
{
    private $conn_id;
    private $usuario_activo;
    private $ftp_server;
    private $ftp_user;
    private $ftp_password;
    private $directorio_remoto;
    private $usertype;
    private $mails;
    
    private $listado=array();
    
    public function get_listado()
    {
        return $this->listado;
    }
    /**
     * 
     * @param type $ftp_server
     * @param type $ftp_user
     * @param type $ftp_password
     * @param type $directorio_remoto
     * @return boolean
     */
    function __construct($ftp_server="",$ftp_user="",$ftp_password="",$directorio_remoto="")
    {
        if($ftp_server=="")
        {
            return false;
        }
        $this->ftp_server=$ftp_server;
        $this->ftp_user=$ftp_user;
        $this->ftp_password=$ftp_password;
        $this->directorio_remoto=$directorio_remoto;
        //
        $this->conn_id = ftp_connect($this->ftp_server,21) or die("No es posible la conexión con el servidor $this->ftp_server\n");
        //echo "connid---->".$this->conn_id."\n";
        //echo "ftp_user-->".$this->ftp_user."\n";
        //echo "ftp_pass-->".$this->ftp_password."\n";
        if(ftp_login($this->conn_id, $this->ftp_user, $this->ftp_password))
        {
            if($this->listado=$this->lista_detallada($this->conn_id,$this->directorio_remoto))
            {
                ftp_close($this->conn_id);
                return true;
            }else
            {
                echo "ERROR en la funcion listado_detallado.\n";
            }
        }
        echo "ERROR! No se pudo realizar la conexión\n";
        return false;
    }
    /**
     * 
     * @param type $id_user
     */
    public static function load($id_user="")
    {
        // cargo datos fto 
        
    }
    /**
     * 
     * @param type $resource
     * @param type $directorio
     * @return boolean
     */
    private function lista_detallada($resource, $directorio = '.')
    {
        if(is_array($children = @ftp_rawlist($resource, $directorio))) 
        { 
            $items = array(); 
            foreach($children as $child) 
            { 
                $chunks = preg_split("/\s+/", $child); 
                list($item['rights'], $item['number'], $item['user'], $item['group'], $item['size'], $item['month'], $item['day'], $item['time']) = $chunks; 
                $item['type'] = $chunks[0]{0} === 'd' ? 'directory' : 'file'; 
                array_splice($chunks, 0, 8); 
                $items[implode(" ", $chunks)] = $item; 
                //$chunks contiene el nombre del archivo
                //echo "\n chunks---------------------------------\n";
                //print_r($chunks);
                //echo "\n";
                // descargo archivo si tiene extension txt
                if(substr($chunks[0],-4)==".txt")
                {
                    $local_file="temp/".$chunks[0];
                    $server_file=$chunks[0];
                    if(!file_exists($local_file))
                    {
                        //si el archivo no existe lo descargo
                        if(ftp_get($resource, $local_file, $server_file, FTP_ASCII))
                        {
                            echo "Se descargo archivo\n";
                        }else
                        {
                            echo "ERROR! No se pudo descargar archivo\n";
                        }
                    }
                }
            } 
            return $items; 
        } 
        return false;
    }
    /**
     * 
     * @param type $server
     * @param type $user
     * @param type $passw
     * @return boolean
     */
    public static function check_connection_ftp($server="",$user="",$passw="",$directory="")
    {
        $conn_id = ftp_connect($server,21);
        if(ftp_login($conn_id, $user, $passw))
        {
            if(is_array($children = @ftp_rawlist($conn_id, $directory)))
            { 
                return true;
            }
        }
        return false;
    }
}