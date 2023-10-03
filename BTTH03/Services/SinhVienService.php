<?php 
 include "./Models/SinhVien.php";
class SinhVienService{
   
    private $ListSinhVien;
    private $count;

    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "select * from SinhVien";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListSinhVien = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $SinhVien = new SinhVien($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaySinh'],$row['idLop']);
            $this->ListSinhVien[] = $SinhVien;

        }
    }

    public function getAllSinhVien(){
        return $this->ListSinhVien;
    }


    public function getCount() {
        $this->count = count($this->ListSinhVien);
        return $this->count;
    }
    

}