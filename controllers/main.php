<?php
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

if(Login::getLoginSession())
{
    $userid=0;
    if(isset($_POST['userid'])) $userid=req('userid');
    //listado de usuarios imetos
    if($users = Users::getAll(Login::getIsAdmin(), $userid))
    {
        foreach($users as $user)
        {
            if($user->getEnableMySQL())
            {
                // $BD contiene el puntero a la base de datos imetos
                $BD = new IMETOS($user->getIdMySQL(), $user->getServerMySQL(), $user->getDatabaseMySQL(), $user->getUserMySQL(), $user->getPasswMySQL());
                if($stations=Stations::getAll($BD, $user->getId()))
                {
                    $user->setStations($stations);
                }
            }
            if($user->getEnableReports())
            {
                if($reports=Reports::getAll($user->getId()))
                {
                    $user->setReports($reports);
                }
            }
        }
    }
    $params['users'] = $users;
		//var_dump($users);
    //$params['reports'] = Reports::getAll($userid);
}else
{
    if(isset($_POST['username']) and isset($_POST['password']))
    {
        $params['user_login']=array(
            'username' => req("username"),
            'password' => req("password")
        );
    }
}
echo $template -> render($params);
?>
