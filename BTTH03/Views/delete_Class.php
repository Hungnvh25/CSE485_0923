<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "DELETE FROM Lop WHERE id = $Id;";

        try {
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        } catch (Exception) {
            echo "<p class='text-center'>Thanh Cong</p>";
        }
        header('location:/index.php?c=Class');
    }




?>