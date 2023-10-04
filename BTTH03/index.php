<?php 

include "./Controllers/StudentCotroller.php";
include "./Controllers/ClassCotroller.php";

$controller = isset($_GET['c'])?$_GET['c']:'Student';
$past = $controller . "Cotroller";
$pp = new $past();

$pp->index();