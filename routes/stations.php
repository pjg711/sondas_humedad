<?php
$router->respond('GET','/stations', function ()
{
    //listado de todos los usuarios
    $_POST['action']='listStations';
    include './controllers/stations.php';
});
$router->respond('POST','/stations/[:action]?/[:station_code]?', function ($request,$response)
{
    //editar estacion
    if(isset($request->action)) $_POST['action']=$request->action;
    if(isset($request->station_code)) $_POST['station_code']=$request->station_code;
    include './controllers/stations.php';
});
?>
