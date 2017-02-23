<?php
require_once 'config.php';

if(isset($_POST['descarga']))
{
    $archivo=req('descarga');
    if(file_exists(TEMPORALES.$archivo))
    {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($archivo).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($archivo));
        readfile($archivo);
        exit;
    }
}
?>
