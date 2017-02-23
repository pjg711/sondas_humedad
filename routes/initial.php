<?php
// *****************************************************************************
// ruta principal / main
// *****************************************************************************
$router->respond(function () {
    //if(isset($_POST['userid'])) echo "pase por userid<br>";
    //echo "pase por main.php";
    include './controllers/main.php';
});
?>
