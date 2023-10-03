<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "DELETE FROM SinhVien WHERE id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        echo 'Thanh cong';
    }




?>