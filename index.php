<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);

session_start();

require 'config.php';

//require PATH_ROOT.'/lib/sondas/class_page.php';
require PATH_ROOT.'/lib/sondas/class_login.php';
require PATH_ROOT.'/lib/sondas/class_imetos.php';
require PATH_ROOT.'/lib/sondas/class_station.php';
require PATH_ROOT.'/lib/sondas/class_sensor.php';
require PATH_ROOT.'/lib/sondas/class_config.php';
require PATH_ROOT.'/lib/sondas/class_ftp.php';
require PATH_ROOT.'/lib/sondas/class_users.php';
require PATH_ROOT.'/lib/sondas/class_reports.php';
require PATH_ROOT.'/lib/sondas/class_log.php';
//
require PATH_ROOT.'/lib/sondas/functions_standard.php';

include 'routes/main.php';

?>