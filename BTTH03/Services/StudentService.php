<?php 
 include "./Models/Student.php";
class StudentService{
   
    private $ListStudent;
    private $count;

    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "select * from SinhVien";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListStudent = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $Student = new Student($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaySinh'],$row['idLop']);
            $this->ListStudent[] = $Student;

        }
    }

    public function getAllStudent(){
        return $this->ListStudent;
    }


    public function getCount() {
        $this->count = count($this->ListStudent);
        return $this->count;
    }
    

}