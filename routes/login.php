<?php
//sign off
$router->respond('POST', '/login', function () {
    if(isset($_POST['username']) AND isset($_POST['password']))
    {
        $username=req('username');
        $password=req('password');
        //echo "username-->{$username}<br>";
        //echo "password-->{$password}<br>";
        if(Login::verify_user($username, $password))
        {
            // bien!
            redireccionar("/");
        }
    }
});
$router->respond('GET', '/sign_off', function () {
    Login::SignOff();
});
?>