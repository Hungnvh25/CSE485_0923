<?php 
 include "./Models/Class.php";
class ClassService{
   
    private $ListClass;
    private $count;

  

    public function getAllClass(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "select * from Lop";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListClass = [];

        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
            $Class = new Class_($row['id'],$row['tenLop']);
            $this->ListClass[] = $Class;

        }
        return $this->ListClass;
    }

    public function delete_Class($Id){
        

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
        

}