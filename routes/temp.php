<?php
$router->respond('GET','/temp/[:archivo]', function ()
{
    // permito la descarga del archivo
    $_POST['descarga']=$archivo;
    include './controllers/download.php';
});
?>
