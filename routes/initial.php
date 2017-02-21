<?php
// *****************************************************************************
// ruta principal / main
// *****************************************************************************
$router->respond(function () {
    //if(isset($_POST['userid'])) echo "pase por userid<br>";
    include './controllers/main.php';
});
?>