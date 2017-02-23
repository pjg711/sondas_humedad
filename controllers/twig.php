<?php
require_once 'config.php';
//
require_once PATH_ROOT.'/lib/vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(PATH_ROOT."/templates/".TEMPLATE);
$twig = new Twig_Environment($loader, array('cache' => PATH_ROOT.'/temp/twig',
                                            'debug' => true,
                                            'autoescape' => false));
$twig->addExtension(new Twig_Extension_Debug());

// ****************************************************************************************
// filtros Twig
// ****************************************************************************************
// para debugear
$twig->addFilter('var_dump', new Twig_Filter_Function('var_dump'));
// funcion para truncar cadena
$twig->addFilter(new Twig_SimpleFilter('truncate', function ($phrase, $max_words = 50)
{
    $phrase_array = explode(' ',strip_tags($phrase));
    if(count($phrase_array) > $max_words && $max_words > 0)
    {
        $phrase = implode(' ',array_slice($phrase_array, 0, $max_words));
    }
    return $phrase;
}));
// die
$twig->addFilter(new Twig_SimpleFilter('die', function ()
{
	 exit();
}));
// html_replace
$twig->addFilter(new Twig_SimpleFilter('html_replace', function ($cadena)
{
	return preg_replace("/<[^>]*>(.*?)<\/>/"," ",$cadena);
}));
// CFG
$twig->addFilter(new Twig_SimpleFilter('CFG', function ($cadena)
{
	return CFG($cadena);
}));
$twig->addFilter(new Twig_SimpleFilter('fecha', function ($timestamp)
{
	return date("d/m/Y",$timestamp);
}));
// transparencia
$twig->addFilter(new Twig_SimpleFilter("transparencia", function ($key)
{
    $partes=explode("/",$key);
    if(is_array($partes))
    {
        if(count($partes)>1)
        {
            switch(trim($partes[1]))
            {
                case "" :
                case "inicio" :
                    // barra navegacion principal transparente
                    echo "mbr-navbar--transparent";
                    break;
                default:
                    // fondo negro
                    echo "mbr-navbar--transparent-none";
                    break;
            }
        }else
        {
                echo "mbr-navbar--transparent";
        }
    }else
    {
        echo "mbr-navbar--transparent";
    }
}));
// completa con http:// una direccion web
$twig->addFilter(new Twig_SimpleFilter("http", function ($web)
{
    if(substr($web,0,4)!='http')
    {
        return 'http://'.$web;
    }else
    {
        return $web;
    }
}));
// reemplaza la @ en el mail por imagen fontawesome
$twig->addFilter(new Twig_SimpleFilter("arroba", function ($mail)
{
    $buscar='@';
    $reemplazar='&nbsp;<span class="simbolo-arroba"></span>&nbsp;';
    return str_replace($buscar, $reemplazar, $mail);
}));
// unicode
$twig->addFilter(new Twig_SimpleFilter("unicode", function ($str)
{
    return preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
}));
// json_decode
$twig->addFilter(new Twig_SimpleFilter("json_decode", function ($cadena)
{
    return json_decode($cadena);
}));
$twig->addFilter(new Twig_SimpleFilter("objectFilter", function ($stdClassObject)
{
    return (array)$stdClassObject;
}));
$twig->addFilter( new Twig_SimpleFilter('cast_to_array', function ($stdClassObject)
{
    $response = array();
    foreach ($stdClassObject as $key => $value)
    {
        //echo "key-->{$key}--->{$value}<br>";
        $response[] = array((string) $key, (string) $value);
    }
    return $response;
}));
// ****************************************************************************************
// test
// ****************************************************************************************
$twig->addTest(new Twig_SimpleTest("ondisk", function ($file)
{
    return file_exists($file);
}));

// ****************************************************************************************
// funciones Twig
// ****************************************************************************************
// function strpos
$twig->addFunction(new Twig_SimpleFunction('strpos', function ($cadena=null, $buscar=null)
{
    if(empty($buscar)) return false;
    if(strpos($cadena, $buscar) !== false)
    {
        return true;
    }else
    {
        return false;
    }
}));
// pone negrita a los autores pasados en integrantes
$twig->addFunction(new Twig_SimpleFunction('autores_negrita', function ($integrantes=null, $autores=null)
{
    $autores2=explode(";",$autores);
    $autores3="";
    foreach($autores2 as $autor)
    {
        $autor2=explode(",",$autor);
        if(count($autor2)>0)
        {
            $autor3=trim($autor2[0]);
            $pos = stripos($integrantes, $autor3);
            if($pos !== false)
            {
                $autores3.="<b>".$autor."</b>;";
            }else
            {
                $autores3.=$autor.";";
            }
        }
    }
    return substr($autores3,0,-1);
}));
// json_decode
/*
$twig->addFunction(new Twig_SimpleFunction('json_decode', function($cadena=null)
{
    return json_decode($cadena);
}));
*/
// existe archivo?
$twig->addFunction(new Twig_SimpleFunction('file_exists', function($archivo=null)
{
    if(is_null($archivo)) return false;
    return file_exists($archivo);
}));
// archivos
$twig->addFunction(new Twig_SimpleFunction('listar', function($dir=null)
{
    if(is_null($dir)) return false;
    if(is_dir($dir))
    {
        if($dh = opendir($dir))
        {
            while(($file = readdir($dh)) !== false)
            {
                echo "nombre archivo: {$file} <br>";
            }
            closedir($dh);
        }
    }
}));
?>
