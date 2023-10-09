<?php 

require_once "./config/config.php";

include  APP_ROOT . "/Controllers/StudentCotroller.php";


include APP_ROOT . "/Controllers/ClassCotroller.php";


$controller = isset($_GET['c'])?$_GET['c']:'Student';
$function = isset($_GET['f'])?$_GET['f']:'index';

$past = $controller . "Cotroller"; 
$pp = new $past(); 

$pp->$function();