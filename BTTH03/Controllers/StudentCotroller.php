<?php 

class StudentCotroller{

    
    public function index(){
        include "./Services/StudentService.php";

        $List = new StudentService();
        $Listt=  $List->getAllStudent();

        include "./Views/indexStudent.php";
    }
}