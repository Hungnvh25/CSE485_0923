<?php 

include "./Controllers/SinhVienCotroller.php";
include "./Controllers/LopCotroller.php";

$controller = isset($_GET['c'])?$_GET['c']:'SinhVien';
$past = $controller . "Cotroller";
$pp = new $past;

$pp->index();