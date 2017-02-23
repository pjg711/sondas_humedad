<?php

// API Klein https://github.com/klein/klein.php/wiki/Api
require_once PATH_ROOT . '/lib/vendor/autoload.php';
$router = new \Klein\Klein();
//
if( $archivos = listar_archivos('./routes') )
{
    foreach($archivos as $archivo)
    {
        include './routes/'.$archivo;
    }
}
$router->dispatch();
?>
