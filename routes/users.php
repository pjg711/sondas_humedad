<?php
//controllers
$router->respond('GET','/users', function ()
{
    //listado de todos los usuarios
    $_POST['action']='listUsers';
    include './controllers/users.php';
});
$router->respond('POST','/users/[:action]?/[:userid]?', function ($request,$response)
{
    //editar usuario
    if(!$_POST['action'])
    {
        if(isset($request->action)) $_POST['action']=$request->action;
    }
    if(isset($request->userid)) $_POST['userid']=$request->userid;
    include './controllers/users.php';
});
?>