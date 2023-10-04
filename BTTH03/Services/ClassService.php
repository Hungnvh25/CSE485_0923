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

    public function getCount() {
        $count = count($this->ListClass);
        return $this->count;
    }

}