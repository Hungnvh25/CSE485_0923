<?php 

include "./Controllers/StudentCotroller.php";
include "./Controllers/ClassCotroller.php";

$controller = isset($_GET['c'])?$_GET['c']:'Student';
$function = isset($_GET['f'])?$_GET['f']:'index';
$past = $controller . "Cotroller";

$pp = new $past();

$pp->$function(isset($_GET['Id'])?$_GET['Id']:'');