<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
        $sql = "DELETE FROM theloai WHERE ma_tloai = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        header('location:category.php');
    }




?>