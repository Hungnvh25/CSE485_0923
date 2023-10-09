<?php 
 include APP_ROOT . "/Models/Student.php";
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


    public function delete_Student($Id){
    

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "DELETE FROM SinhVien WHERE id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        
       


    }

    public function add_Student($name,$email,$date,$idclass){


        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");

            
        $sql = "insert into SinhVien (tenSinhVien, email, ngaySinh, idLop) values ('$name','$email', '$date',$idclass);";  
                  
        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        

 

    }

    public function getIDStudent($Id){


        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "select * from SinhVien where id = '$Id';";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        $row = $list_sql->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function edit_Student($name,$email,$ngaySinh,$idLop,$id){

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
        $sql = "UPDATE sinhvien SET tenSinhVien = '$name' ,email ='$email' ,ngaySinh = '$ngaySinh', idLop = $idLop  WHERE id = $id ;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        
    }

    
    
}