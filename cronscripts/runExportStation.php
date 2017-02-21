<?php
require '../config.php';
require '../lib/sondas/class_imetos.php';
require '../lib/sondas/class_users.php';
require '../lib/sondas/class_station.php';
require '../lib/sondas/class_sensor.php';
require '../lib/sondas/class_config.php';

// busco los usuarios para expotar datos
if($users=Users::getAll(true))
{
    foreach($users as $user)
    {
        if($user->getEnableMySQL())
        {
            $BD = new IMETOS($user->getIdMySQL(), $user->getServerMySQL(), $user->getDatabaseMySQL(), $user->getUserMySQL(), $user->getPasswMySQL());
            if($stations=Stations::getAll($BD, $user->getId()))
            {
                $user->setStations($stations);
                foreach($stations as $station)
                {
                    $station->loadSensors($BD);
                    $stationSensorsList = $station->getAvailableSensors();
                    $q_config = $station->getConfig();
                    //var_dump($q_config);
                    //exit;
                    //
                    if( $q_config->getEnable() )
                    {
                        echo "\n-------------------------------------------------------\n";
                        echo "UserId----------->{$user->getId()}\n";
                        echo "station-code----->{$station->getStationCode()}\n";
                        echo "enable----------->{$q_config->getEnable()}\n";
                        echo "periodo---------->{$q_config->getPeriodo()}\n";
                        echo "separador colum-->{$q_config->getSeparador()}\n";
                        echo "separador2 colum-->{$q_config->getSeparador2()}\n";
                        echo "archivo---------->".TEMPORALES."{$q_config->getNombreArchivo()}\n";
                        echo "ubicacion web---->{$q_config->getUbicacionWeb()}\n";
                        //
                        $datas = array();
                        $enca1 = "";
                        $enca2 = "FECHA";
                        list($querys, $enca1, $enca2) = $q_config->runQuery($BD, $station);
                        if(!empty($querys))
                        {
                            foreach( $querys as $key_query => $query )
                            {
                                if( $BD->sql_select($query, $results) )
                                {
                                    while( $row=$results->fetch(PDO::FETCH_ASSOC) )
                                    {
                                        $datas[$row['f_read_time']][$key_query] = $row;
                                    }
                                }
                            }
                            // grabo el archivo
                            $archivo = TEMPORALES.$q_config->getNombreArchivo();
                            $fp = fopen($archivo,'w');
                            if( $q_config->getEncabezado() )
                            {
                                fwrite($fp,$enca1."\n");
                                fwrite($fp,$enca2."\n");
                            }
                            foreach ($datas as $fecha => $data)
                            {
                                $cadena = date("Y-m-d H:i:s",$fecha).$q_config->getSeparador2();
                                foreach( $data as $valor )
                                {
                                    foreach( $valor as $key_valor2 => $valor2 )
                                    {
                                        if( $key_valor2 != 'f_read_time' )
                                        {
                                            $cadena .= $valor2 . $q_config->getSeparador2();
                                        }
                                    }
                                }
                                if( substr($cadena,-(strlen($q_config->getSeparador2()))) == $q_config->getSeparador2() )
                                {
                                    $cadena = substr($cadena,0,-(strlen($q_config->getSeparador2())));
                                }
                                fwrite($fp,$cadena."\n");
                            }
                            fclose($fp);
                        }
                    }
                }
            }
        }
    }
}
?>
