<?php

require_once 'config.php';

require_once PATH_ROOT.'/lib/sondas/functions_standard.php';
/*
include 'twig.php';
$template = $twig -> loadTemplate('index.twig');

$params['config'] = array(
				'PROTOCOLO' => PROTOCOLO,
				'WWW_ROOT' => WWW_ROOT,
				'PATH_ROOT' => PATH_ROOT,
				'TEMPLATE' => TEMPLATE,
				'TIPOS_ARCHIVOS' => TIPOS_ARCHIVOS,
				'SEPARADORES' => SEPARADORES,
				'SEPARADORES2' => SEPARADORES2,
				'pagina' => array(
						'WEB' => WEB,
            'PIE' => CONTACTO)
);

$params['Login'] = array(
        'getLoginSession' => Login::getLoginSession(),
        'getIsAdmin' => Login::getIsAdmin(),
        'getUserActive' => Login::getUserActive()
);
*/

if( Login::getLoginSession() )
{
    if( isset($_POST['userid']) )
    {
        $userid = $_POST['userid'];
    }
    if( isset($_POST['station_code']) )
    {
        $station_code = $_POST['station_code'];
    }
    if( isset($_POST['action']) )
    {
        /*
        echo "accion--->{$_POST['action']}<br>";
				echo "userid--->{$userid}<br>";
				echo "station-->{$station_code}<br>";
        */
        switch($_POST['action'])
        {
            case 'export':
                echo "pase por export<br>";
								if( isset($userid) and isset($station_code) )
								{
		                if( $id_log = Station::export_data( $userid, $station_code) )
		                {
		                    $archivo = Log::search( $id_log );
		                    $enlace = $archivo[0]->getInfo();
		                    $enlace2 = $archivo[0]->getFile();
		                    ob_clean();
		                    header ("Content-Disposition: attachment; filename=$enlace2 ");
		                    header ("Content-Type: application/force-download");
		                    header ("Content-Length: ".filesize($enlace));
		                    readfile($enlace);
		                } else
		                {
		                    echo "ocurrio algun error<br>";
		                }
								}
                break;

            case 'config':
                //echo "pase por config<br>";
                if( $errores=Config_Station::update() )
                {
                    mensaje("Se guardó la configuración de la estación","Configurar estación","","/");
                } else
                {
                    echo "Errores--->{$errores}<br>";
                    mensaje("Error en la configuración de la estación","","error","/");
                }
                break;
        }
    }
}
?>
