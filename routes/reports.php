<?php
$router->respond('GET','/reports', function ()
{
    //listado de todos los usuarios
    $_POST['action']='listReports';
    include './controllers/reports.php';
});
$router->respond('POST','/reports/[:action]?/[:user_id]?', function ($request,$response)
{
    //editar estacion
    if(isset($request->action)) $_POST['action']=$request->action;
    if(isset($request->user_id)) $_POST['user_id']=$request->user_id;
    include './controllers/reports.php';
});
?>
