<?php
$router->respond('GET','/stations', function ()
{
    //listado de todas las estaciones
    $_POST['action']='listStations';
    include './controllers/stations.php';
});
$router->respond('POST','/stations/[:action]/[:station_code]', function ($request,$response)
{
    // guardar configuracion
    //var_dump($_POST);
    //echo "pase por post de stations/config<br>";
    if(isset($request->action)) $_POST['action'] = $request->action;
    if(isset($request->station_code)) $_POST['station_code'] = $request->station_code;
    include './controllers/stations.php';
});

$router->respond('POST','/stations/[:action]/[:station_code]/[:userid]', function ($request,$response)
{
    //exportar datos
    //echo "pase por post de stations/export<br>";
    if(isset($request->action)) $_POST['action'] = $request->action;
    if(isset($request->station_code)) $_POST['station_code'] = $request->station_code;
    if(isset($request->userid)) $_POST['userid'] = $request->userid;
    include './controllers/stations.php';
});
?>
